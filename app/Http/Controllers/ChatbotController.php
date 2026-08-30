<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    /**
     * Handle incoming user message and generate AI response.
     */
    public function ask(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $userMessage = trim($request->input('message'));
        $history = $request->input('history', []);

        // 1. Check if Gemini / OpenAI API Key is provided in .env
        $geminiKey = env('GEMINI_API_KEY');
        $openaiKey = env('OPENAI_API_KEY');

        if (!empty($geminiKey)) {
            $aiResponse = $this->queryGemini($userMessage, $history, $geminiKey);
            if ($aiResponse) {
                return response()->json([
                    'status'   => 'success',
                    'reply'    => $aiResponse,
                    'provider' => 'gemini'
                ]);
            }
        } elseif (!empty($openaiKey)) {
            $aiResponse = $this->queryOpenAI($userMessage, $history, $openaiKey);
            if ($aiResponse) {
                return response()->json([
                    'status'   => 'success',
                    'reply'    => $aiResponse,
                    'provider' => 'openai'
                ]);
            }
        }

        // 2. Intelligent Local Knowledge-Base Semantic Engine (Fallback / Default)
        $reply = $this->generateLocalAIResponse($userMessage, $history);

        return response()->json([
            'status'   => 'success',
            'reply'    => $reply,
            'provider' => 'local_ai'
        ]);
    }

    /**
     * Get Dynamic Catalog Knowledge from database/data/catalog_master.json
     */
    private function getCatalogData(): array
    {
        $path = database_path('data/catalog_master.json');
        if (file_exists($path)) {
            $data = json_decode(file_get_contents($path), true);
            return is_array($data) ? $data : [];
        }
        return [];
    }

    /**
     * System Prompt with Adam Jaya Knowledge Base & Complete Catalog Index
     */
    private function getSystemPrompt(): string
    {
        $catalog = $this->getCatalogData();
        $catalogSummary = "";

        $categories = [
            'mesin-tahu'    => 'Mesin Produksi Tahu',
            'mesin-plastik' => 'Plastik Sablon Kemasan (Custom Merk)',
            'mesin-kemasan' => 'Kemasan & Packing',
            'sparepart'     => 'Peralatan, Cetakan & Sparepart',
            'lainnya'       => 'Perlengkapan Pabrik & Custom'
        ];

        foreach ($categories as $catKey => $catTitle) {
            $itemsInCat = array_filter($catalog, fn($i) => ($i['category'] ?? '') === $catKey);
            if (!empty($itemsInCat)) {
                $catalogSummary .= "\n[Kategori: {$catTitle}]\n";
                foreach (array_slice($itemsInCat, 0, 15) as $it) {
                    $vList = [];
                    foreach (array_slice($it['variants'] ?? [], 0, 4) as $v) {
                        $pStr  = ($v['harga'] ?? 0) > 0 ? 'Rp ' . number_format($v['harga'], 0, ',', '.') . '/' . ($v['satuan'] ?? 'unit') : 'Tersedia';
                        $stok  = ($v['stok'] ?? 0) > 0 ? "stok {$v['stok']}" : 'habis/PO';
                        $vList[] = "{$v['nama_jenis']} ({$pStr}, {$stok})";
                    }
                    $vText = !empty($vList) ? ' -> Varian: ' . implode(', ', $vList) : '';
                    $catalogSummary .= "- {$it['nama_barang']}{$vText}\n";
                }
            }
        }

        return <<<PROMPT
Anda adalah "Adam Jaya AI" — Asisten Cerdas Bengkel Manufaktur Mesin Tahu Adam Jaya (Babakan, Bandung).
Spesialisasi: Mesin pengolah kedelai, peralatan pabrik tahu, plastik kemasan, & servis 24 jam.

=== PROFIL BENGKEL ===
- Alamat: Jl. Aki Padma No. 51, Babakan Ciparay, Kota Bandung 40222
- Jam Buka: Senin–Jumat 07.00–18.00 WIB | Hotline WA Siaga 24 Jam
- Hotline WA: 0812-2160-1558 (Kepala Mekanik)
- Pengalaman: 24+ tahun (est. 2000), 4.200+ mitra pabrik tahu se-Indonesia

=== RINGKASAN PRODUK & HARGA ===
{$catalogSummary}

=== PANDUAN TEKNIS CEPAT ===
- SUS 304: 100% anti karat, anti asam cuka, food-grade (wajib untuk tahang rebusan).
- Batu Corundum: LB (Lubang Besar, 3-5.5HP), LK (Lubang Kecil, 2HP), ukuran 8"/10"/12".
- Gilingan Pak Ukat: Ampas perasan ekstra kering, kapasitas hingga 450 kg/jam.
- Cetakan Takus: Kayu Jati (awet 10-15+ tahun, anti jamur & anti lengkung) vs Pinus (ekonomis).
- Pemecah Kulit Ari: Tahu lebih putih bersih & tidak berbau langu.

=== ATURAN FORMAT JAWABAN (WAJIB DIPATUHI) ===
1. JAWABAN HARUS SANGAT SINGKAT, PADAT, & LANGSUNG KE INTI (Maksimal 2 - 3 poin bullet, masing-masing 1 kalimat pendek).
2. DILARANG menulis esai, paragraf panjang, atau penjelasan teori bertele-tele.
3. Jangan tampilkan ID barang database internal ke pelanggan.
4. Struktur ideal jawaban:
   - 1 baris pembuka singkat (contoh: "Halo! Keunggulan **Stainless SUS 304** untuk wadah rebusan:")
   - 2 sampai 3 poin bullet dengan emoji (• 🛡️ ...)
   - 1 baris rekomendasi produk/harga jika relevan (contoh: "💡 *Produk Kami:* **Tahang Stainless 80x80** (Rp 1.750.000)")
   - 1 baris penutup: "📞 Info & Pesan: WA 0812-2160-1558"
5. Gunakan Bahasa Indonesia yang ramah, jelas, dan profesional.
PROMPT;
    }

    /**
     * Query Gemini API with multi-model fallback
     */
    private function queryGemini(string $message, array $history, string $apiKey): ?string
    {
        try {
            $systemInstruction = $this->getSystemPrompt();
            $models = [
                'gemini-3.6-flash',
                'gemini-2.5-flash',
                'gemini-1.5-flash',
            ];

            // Build valid alternating contents
            $contents = [];
            $lastRole = null;
            foreach (array_slice($history, -8) as $h) {
                $role = ($h['role'] ?? 'user') === 'bot' ? 'model' : 'user';
                // Gemini contents must start with 'user'
                if (empty($contents) && $role === 'model') {
                    continue;
                }
                if ($role === $lastRole) {
                    continue;
                }
                $text = trim($h['text'] ?? '');
                if (!empty($text)) {
                    $contents[] = [
                        'role'  => $role,
                        'parts' => [['text' => $text]]
                    ];
                    $lastRole = $role;
                }
            }

            if ($lastRole === 'user' && !empty($contents)) {
                array_pop($contents);
            }

            $contents[] = [
                'role'  => 'user',
                'parts' => [['text' => $message]]
            ];

            foreach ($models as $model) {
                $url = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key={$apiKey}";

                $response = Http::timeout(12)->post($url, [
                    'system_instruction' => [
                        'parts' => [['text' => $systemInstruction]]
                    ],
                    'contents'         => $contents,
                    'generationConfig' => [
                        'temperature'     => 0.4,
                        'maxOutputTokens' => 2500,
                        'topP'            => 0.9,
                    ]
                ]);

                if ($response->successful()) {
                    $data  = $response->json();
                    $reply = $data['candidates'][0]['content']['parts'][0]['text'] ?? null;
                    if (!empty($reply)) {
                        return trim($reply);
                    }
                }
            }
        } catch (\Exception $e) {
            Log::warning('Gemini API query failed: ' . $e->getMessage());
        }

        return null;
    }

    /**
     * Query OpenAI API
     */
    private function queryOpenAI(string $message, array $history, string $apiKey): ?string
    {
        try {
            $messages = [
                ['role' => 'system', 'content' => $this->getSystemPrompt()]
            ];

            foreach (array_slice($history, -8) as $h) {
                $role       = ($h['role'] ?? 'user') === 'bot' ? 'assistant' : 'user';
                $messages[] = ['role' => $role, 'content' => $h['text'] ?? ''];
            }
            $messages[] = ['role' => 'user', 'content' => $message];

            $response = Http::timeout(12)->withToken($apiKey)->post('https://api.openai.com/v1/chat/completions', [
                'model'       => 'gpt-4o-mini',
                'messages'    => $messages,
                'max_tokens'  => 600,
                'temperature' => 0.4
            ]);

            if ($response->successful()) {
                $data = $response->json();
                return trim($data['choices'][0]['message']['content'] ?? '');
            }
        } catch (\Exception $e) {
            Log::warning('OpenAI API query failed: ' . $e->getMessage());
        }

        return null;
    }

    /**
     * Normalize spelling variations & synonyms
     */
    private function normalizeText(string $text): string
    {
        $text         = mb_strtolower($text);
        $replacements = [
            'stainless'  => 'stenlis',
            'steinlest'  => 'stenlis',
            'stenles'    => 'stenlis',
            'stanles'    => 'stenlis',
            'alumunium'  => 'alum',
            'almunium'   => 'alum',
            'kedelai'    => 'kedele',
            'kacang'     => 'kedele',
            'gilingan'   => 'giling',
            'penggiling' => 'giling',
            'cetakan'    => 'citak',
            'pemecah'    => 'pemcah',
            'saringan'   => 'peresan',
        ];
        return str_replace(array_keys($replacements), array_values($replacements), $text);
    }

    /**
     * Find best matching product from master catalog database
     */
    private function findCatalogProduct(string $query, array $catalog): ?array
    {
        $normalizedQ = $this->normalizeText($query);
        $words       = array_filter(explode(' ', preg_replace('/[^\w\s]/', '', $normalizedQ)), fn($w) => strlen($w) >= 3);

        $stopWords = [
            'berapa', 'jumlah', 'stok', 'harga', 'biaya', 'apakah', 'ada', 'punya', 'untuk',
            'yang', 'dan', 'dari', 'bisa', 'tolong', 'info', 'ready', 'sisa', 'tanya', 'mau',
            'beli', 'pesan', 'tahu', 'pabrik', 'mesin', 'alat', 'barang', 'usaha', 'saya',
            'baru', 'buka', 'butuh', 'saja', 'mana', 'lebih', 'bagus', 'kenapa', 'sering',
            'cara', 'bagaimana', 'apa', 'beda', 'perbedaan', 'pecah', 'hancur', 'lembek',
            'harus', 'pakai', 'wadah', 'rebusan', 'rebus', 'mengapa', 'bahan', 'digunakan',
            'gimana', 'kapan', 'siapa', 'jenis', 'macam', 'tipe'
        ];
        $keywords = array_values(array_diff($words, $stopWords));

        if (empty($keywords)) {
            return null;
        }

        $bestMatch    = null;
        $highestScore = 0;

        foreach ($catalog as $item) {
            $normItemName = $this->normalizeText($item['nama_barang']);
            $score        = 0;

            foreach ($keywords as $kw) {
                if ($kw === $normItemName) {
                    $score += 40;
                } elseif (str_contains($normItemName, $kw)) {
                    $score += 20;
                }
                foreach ($item['variants'] as $v) {
                    $normVariant = $this->normalizeText($v['nama_jenis']);
                    if ($normVariant === $kw) {
                        $score += 25;
                    } elseif (str_contains($normVariant, $kw)) {
                        $score += 10;
                    }
                }
            }

            if ($score > $highestScore) {
                $highestScore = $score;
                $bestMatch    = $item;
            }
        }

        return $highestScore >= 20 ? $bestMatch : null;
    }

    /**
     * Build factual database response for matched product (Concise, Token-Efficient)
     */
    private function buildProductResponse(array $item, string $userQuery): string
    {
        $totalStok = array_sum(array_column($item['variants'], 'stok'));
        $vLines    = [];

        foreach (array_slice($item['variants'], 0, 6) as $v) {
            $price     = ($v['harga'] ?? 0) > 0 ? 'Rp ' . number_format($v['harga'], 0, ',', '.') . '/' . ($v['satuan'] ?? 'unit') : 'Hubungi CS';
            $stokCount = (float)($v['stok'] ?? 0);
            $stokInfo  = $stokCount > 0 ? "Stok: {$stokCount} {$v['satuan']}" : "Habis (PO)";
            $vLines[]  = "• **{$v['nama_jenis']}** — {$price} | {$stokInfo}";
        }

        $variantsText = !empty($vLines) ? "\n" . implode("\n", $vLines) : "";
        $stokStatus   = $totalStok > 0 ? "✅ Tersedia" : "⚠️ Pre-order";

        return "📦 **{$item['nama_barang']}** ({$stokStatus})" .
            $variantsText . "\n\n" .
            "📞 Info & Pesan: WA 0812-2160-1558";
    }

    /**
     * Intelligent Local Knowledge-Base Semantic Response Generator (Adam Jaya AI Engine v2)
     */
    private function generateLocalAIResponse(string $msg, array $history = []): string
    {
        $m       = mb_strtolower(trim($msg));
        $catalog = $this->getCatalogData();

        // ── 0. SALAM / SAPAAN ──
        if (preg_match('/^(halo|hai|hi|hei|selamat|assalamualaikum|permisi|ola)\b/i', $m)) {
            return "👋 **Halo! Selamat datang di Adam Jaya AI!**\n" .
                "Saya siap bantu konsultasi mesin tahu, harga, stok, dan servis.\n\n" .
                "Silakan tanyakan apa saja 😊\n" .
                "📞 WA langsung: 0812-2160-1558";
        }

        // ── 1. TERIMA KASIH / PENUTUP ──
        if (preg_match('/(terima kasih|makasih|thanks|thx|ok terima|mantap|oke siap|sudah cukup)/i', $m)) {
            return "😊 **Sama-sama!** Senang bisa membantu.\n" .
                "Jika ada pertanyaan lain seputar mesin, stok, atau servis jangan sungkan tanya ya!\n\n" .
                "📞 WA: 0812-2160-1558";
        }

        // ── 2. JAM BUKA ──
        if (preg_match('/(jam buka|jam kerja|jam operasional|hari apa saja|kapan buka)/i', $m)) {
            return "🕒 **Jam Operasional Workshop Adam Jaya:**\n" .
                "• **Senin – Jumat**: 07.00 – 18.00 WIB\n" .
                "• **Sabtu & Minggu**: Janji temu / Hotline WA standby\n" .
                "• **Servis Darurat**: 24 jam nonstop via WA\n\n" .
                "📞 WA: 0812-2160-1558";
        }

        // ── 3. ALAMAT / LOKASI ──
        if (preg_match('/(alamat|lokasi|dimana|where|maps|google maps|jl\.|jalan)/i', $m)) {
            return "📍 **Alamat Workshop Adam Jaya:**\n" .
                "Jl. Aki Padma No. 51, Babakan, Kec. Babakan Ciparay\n" .
                "Kota Bandung 40222, Jawa Barat\n\n" .
                "📞 WA: 0812-2160-1558";
        }

        // ── 4. KONTAK ──
        if (preg_match('/(kontak|nomor|whatsapp|wa|telepon|phone|hubungi)/i', $m) && !preg_match('/(harga|stok|pesan|beli)/i', $m)) {
            return "📞 **Kontak Adam Jaya:**\n" .
                "• **WhatsApp / Telepon**: 0812-2160-1558 (Kepala Mekanik)\n" .
                "• **Servis 24 Jam**: Siaga nonstop untuk darurat mesin\n" .
                "• **Workshop**: Jl. Aki Padma No. 51, Babakan Ciparay, Bandung";
        }

        // ── 5. PROFIL BENGKEL ──
        if (preg_match('/(profil|tentang|siapa|about|pengalaman|berdiri|sejak|kapan berdiri|sudah berapa lama|terpercaya|reputasi)/i', $m)) {
            return "🏭 **Adam Jaya Enterprise:**\n" .
                "• **Berdiri**: Tahun 2000 (24+ tahun pengalaman)\n" .
                "• **Klien**: 4.200+ pengrajin tahu se-Indonesia\n" .
                "• **Lokasi**: Babakan Ciparay, Kota Bandung\n" .
                "• **Keahlian**: Fabrikasi & servis mesin produksi tahu hulu-hilir\n" .
                "• **Material**: 100% Stainless SUS 304 food-grade\n\n" .
                "📞 WA: 0812-2160-1558";
        }

        // ── 6. SERVIS & GARANSI ──
        if (preg_match('/(servis|service|perbaikan|rusak|macet|mati|error|garansi|darurat|teknisi|montir)/i', $m)) {
            return "🛠️ **Layanan Servis Adam Jaya:**\n" .
                "• **Servis 24 Jam Nonstop** — teknisi siaga untuk darurat mesin\n" .
                "• **On-site**: Teknisi datang ke lokasi pabrik Anda\n" .
                "• **Suku Cadang**: Dinamo, bearing, as poros, batu gilingan — stok ready\n" .
                "• **Garansi**: Dikonsultasikan langsung dengan teknisi\n\n" .
                "📞 Darurat WA: 0812-2160-1558";
        }

        // ── 7. BAHAN MATERIAL ──
        if (preg_match('/(bahan|material|terbuat dari|kenapa pakai|kenapa menggunakan|bagus mana|lebih bagus)/i', $m)) {
            if (preg_match('/(batu giling|batu corundum)/i', $m)) {
                return "🪨 **Batu Gilingan Corundum Super:**\n" .
                    "• Material: Silikon Karbida kelas food-grade\n" .
                    "• Sangat keras — tahan gesekan tinggi & tidak mudah rontok\n" .
                    "• Aman untuk makanan — tidak mencemari sari tahu\n" .
                    "• Tersedia LB (3-5.5HP) & LK (2HP)\n\n" .
                    "📞 WA: 0812-2160-1558";
            }
            if (preg_match('/(tahang|wadah|rebus|sus 304|stainless|stenlis)/i', $m)) {
                return "🛡️ **Kenapa Stainless SUS 304?**\n" .
                    "• Anti-karat total — kebal asam cuka biang tahu\n" .
                    "• Food-grade higienis — tidak lepaskan zat berbahaya\n" .
                    "• Tahan suhu tinggi — aman untuk perebusan\n" .
                    "• Tahu tetap putih alami, tidak berubah rasa\n\n" .
                    "📞 WA: 0812-2160-1558";
            }
            if (preg_match('/(cetakan|takus|jati|pinus|kayu)/i', $m)) {
                return "🪵 **Perbandingan Material Cetakan Takus:**\n" .
                    "• **Kayu Jati**: Anti jamur, anti lengkung, tahan asam cuka 10-15+ tahun\n" .
                    "• **Kayu Pinus**: Lebih ringan & ekonomis untuk usaha rintisan\n\n" .
                    "📞 WA: 0812-2160-1558";
            }
            if (preg_match('/(kain|peresan|batis)/i', $m)) {
                return "🧵 **Kain Peresan Batis Adam Jaya:**\n" .
                    "• Serat mikro halus dengan tenunan rapat\n" .
                    "• Ampas terperas ekstra kering tanpa ampas lolos\n" .
                    "• Sari tahu lebih kental & produksi lebih efisien\n\n" .
                    "📞 WA: 0812-2160-1558";
            }
        }

        // ── 8. TEKNIS LB vs LK ──
        if (preg_match('/(lb|lk|lubang besar|lubang kecil)/i', $m)) {
            return "⚙️ **Batu Gilingan LB vs LK:**\n" .
                "• **LB (Lubang Besar)**: Poros tebal → dinamo 3–5.5 HP (kapasitas besar)\n" .
                "• **LK (Lubang Kecil)**: Poros standar → dinamo 2 HP (skala UMKM)\n\n" .
                "Tersedia ukuran **8\"**, **10\"**, **12\"** — Batu Corundum Super\n" .
                "📞 WA: 0812-2160-1558";
        }

        // ── 9. FUNGSI ALAT ──
        if (preg_match('/(fungsi|kegunaan|untuk apa|dipakai untuk|apa itu|apa kegunaan)/i', $m)) {
            if (preg_match('/(kulit ari|pemecah)/i', $m)) {
                return "✨ **Fungsi Mesin Pemecah Kulit Ari:**\n" .
                    "Membuang kulit luar kedelai sebelum digiling → tahu **lebih putih bersih** dan **tidak bau langu**.\n\n" .
                    "📞 WA: 0812-2160-1558";
            }
            if (preg_match('/(sealer|frb)/i', $m)) {
                return "📦 **Fungsi Band Sealer FRB-770:**\n" .
                    "• Menyegel kemasan plastik otomatis & cepat\n" .
                    "• Kedap udara rapat sempurna\n" .
                    "• Bisa cetak tanggal kedaluwarsa\n\n" .
                    "📞 WA: 0812-2160-1558";
            }
            if (preg_match('/(bebedogan)/i', $m)) {
                return "🪵 **Fungsi Bebedogan:**\n" .
                    "Alat press tahu dari Kayu Jati untuk menekan cetakan takus secara merata.\n" .
                    "Tahan beban berat & rendaman air asam cuka seumur hidup.\n\n" .
                    "📞 WA: 0812-2160-1558";
            }
            if (preg_match('/(kompor semawar|semawar)/i', $m)) {
                return "🔥 **Fungsi Kompor Semawar:**\n" .
                    "Kompor tekanan tinggi untuk proses perebusan sari tahu.\n" .
                    "Panas merata, efisien, cocok kapasitas menengah–besar.\n\n" .
                    "📞 WA: 0812-2160-1558";
            }
        }

        // ── 10. TROUBLESHOOTING ──
        if (preg_match('/(pecah|hancur|lembek|kurang padat|berair|basi|langu|ampas basah|ampas masih basah|tahu gagal)/i', $m)) {
            return "🔧 **Solusi Kendala Produksi Tahu:**\n" .
                "• **Tahu Lembek/Pecah** → Papan Citak Kayu Jati + Plat Takus Stainless + Kain Batis pori rapat\n" .
                "• **Ampas Masih Basah** → Rapatkan setelan batu gilingan atau pakai Gilingan Pak Ukat\n" .
                "• **Tahu Langu/Cepat Basi** → Pakai Mesin Pemecah Kulit Ari + Tahang SUS 304\n" .
                "• **Mesin Macet/Getar** → Hubungi servis 24 jam kami\n\n" .
                "📞 WA: 0812-2160-1558";
        }

        // ── 11. PAKET BUKA USAHA BARU ──
        if (preg_match('/(buka usaha|buka pabrik|baru mulai|pemula|modal awal|paket lengkap|alat apa saja|butuh apa saja|mau mulai|mau bikin pabrik)/i', $m)) {
            return "🏭 **Paket Starter Pabrik Tahu Adam Jaya:**\n" .
                "1. **Mesin Giling Kedele (8\"/10\")** + Batu Corundum\n" .
                "2. **Tahang Stainless SUS 304** + Kompor Semawar\n" .
                "3. **Kain Peresan Batis** + Tangok Stenlis\n" .
                "4. **Papan Citak Kayu Jati** + Plat Takus Stainless\n" .
                "5. **Band Sealer FRB-770** (opsional, untuk kemasan)\n\n" .
                "💡 Estimasi modal & kapasitas:\n" .
                "📞 WA: 0812-2160-1558";
        }

        // ── 12. REKOMENDASI KAPASITAS ──
        if (preg_match('/(\d+)\s*(kg|kilo)/i', $m, $matches) || preg_match('/(kapasitas|ton|kuintal|berapa kg)/i', $m)) {
            $kg = isset($matches[1]) ? (int)$matches[1] : 0;
            if ($kg > 0) {
                if ($kg <= 100) {
                    return "⭐ **Rekomendasi untuk {$kg} kg/hari (Skala Kecil):**\n" .
                        "• **Mesin Giling Kedele UMKM (8\", 2HP)** → selesai < 1 jam\n" .
                        "• **Tahang Stainless SUS 304 (80x80)**\n\n" .
                        "📞 Konsultasi: WA 0812-2160-1558";
                } elseif ($kg <= 300) {
                    return "⭐ **Rekomendasi untuk {$kg} kg/hari (Skala Menengah):**\n" .
                        "• **Mesin Giling Kedele (10\", 3HP)** — lebih cepat & stabil\n" .
                        "• **Tahang Stainless SUS 304 (90x90)**\n\n" .
                        "📞 Konsultasi detail: WA 0812-2160-1558";
                } else {
                    return "⭐ **Rekomendasi untuk {$kg} kg/hari (Skala Besar):**\n" .
                        "• **Gilingan Pak Ukat (3-5.5HP)** — kapasitas 450 kg/jam, ampas ekstra kering\n" .
                        "• **Tahang Stainless SUS 304 (D90/D100)** + Katel Jubung Boiler\n\n" .
                        "📞 Konsultasi khusus: WA 0812-2160-1558";
                }
            }
        }

        // ── 13. HARGA (UMUM) ──
        if (preg_match('/(harga|biaya|berapa|tarif|kisaran harga|estimasi harga)/i', $m) && !preg_match('/(stok|unit|jumlah)/i', $m)) {
            $matchedProduct = $this->findCatalogProduct($msg, $catalog);
            if ($matchedProduct) {
                return $this->buildProductResponse($matchedProduct, $msg);
            }
            return "💰 **Info Harga Adam Jaya:**\n" .
                "Harga bervariasi sesuai spesifikasi & kapasitas mesin.\n\n" .
                "Silakan sebutkan jenis mesin/alat yang Anda cari, atau hubungi langsung:\n" .
                "📞 WA: 0812-2160-1558 (harga tangan pertama bengkel)";
        }

        // ── 14. GILINGAN PAK UKAT ──
        if (preg_match('/(pak ukat|ukat|gilingan ukat)/i', $m)) {
            return "⭐ **Keunggulan Gilingan Pak Ukat:**\n" .
                "• Kapasitas: hingga 450 kg/jam\n" .
                "• Ampas Ekstra Kering — sari tahu lebih kental\n" .
                "• Minim Getaran — konstruksi stabil\n" .
                "• Material: Stainless SUS 304 food-grade\n\n" .
                "📞 WA: 0812-2160-1558";
        }

        // ── 15. PLASTIK SABLON / KEMASAN ──
        if (preg_match('/(plastik|sablon|kemasan|packaging|label|merk|brand|cetak plastik)/i', $m)) {
            return "🏷️ **Plastik Sablon Kemasan Custom Adam Jaya:**\n" .
                "• Custom nama merk / brand pabrik tahu Anda\n" .
                "• Tersedia: Tahu Sutra, Tahu Kuning, Tahu Susu RA, Sifa\n" .
                "• Ukuran & desain bisa disesuaikan\n" .
                "• Min. order dikonsultasikan via WA\n\n" .
                "📞 WA: 0812-2160-1558";
        }

        // ── 16. ALUR PRODUKSI TAHU ──
        if (preg_match('/(cara buat tahu|proses produksi|tahapan|langkah|proses|cara produksi|cara membuat)/i', $m)) {
            return "📋 **Alur Produksi Tahu (Hulu ke Hilir):**\n" .
                "1️⃣ **Kupas kulit** → Mesin Pemecah Kulit Ari\n" .
                "2️⃣ **Giling** → Mesin Giling Kedele / Gilingan Pak Ukat\n" .
                "3️⃣ **Rebus** → Tahang Stainless SUS 304 + Kompor Semawar\n" .
                "4️⃣ **Saring & Peras** → Kain Batis + Tangok Stenlis\n" .
                "5️⃣ **Cetak & Press** → Papan Citak Jati + Plat Takus\n" .
                "6️⃣ **Kemas** → Band Sealer + Plastik Sablon Custom\n\n" .
                "📞 Konsultasi lengkap: WA 0812-2160-1558";
        }

        // ── 17. PENCARIAN STOK & HARGA PRODUK SPESIFIK ──
        $matchedProduct = $this->findCatalogProduct($msg, $catalog);
        if ($matchedProduct) {
            return $this->buildProductResponse($matchedProduct, $msg);
        }

        // ── 18. PERTANYAAN BISNIS TAHU UMUM ──
        if (preg_match('/(keuntungan|profit|margin|laba|omzet|penghasilan|modal|bisnis tahu|usaha tahu)/i', $m)) {
            return "💡 **Bisnis Pabrik Tahu:**\n" .
                "Tahu adalah produk FMCG dengan permintaan harian stabil & margin baik.\n\n" .
                "Untuk konsultasi analisis modal & pilihan mesin yang tepat:\n" .
                "📞 WA: 0812-2160-1558 (Kepala Mekanik Adam Jaya)";
        }

        // ── 19. DEFAULT SMART INTRO ──
        return "Halo! Saya **Adam Jaya AI** 😊\n" .
            "Saya bisa bantu Anda dengan:\n" .
            "• 📦 Info **stok & harga** mesin/alat tahu\n" .
            "• 💡 **Rekomendasi mesin** sesuai kapasitas produksi\n" .
            "• 🔧 **Solusi kendala** produksi tahu\n" .
            "• 🛠️ **Servis & perbaikan** mesin 24 jam\n\n" .
            "Silakan tanyakan lebih detail!\n" .
            "📞 WA: 0812-2160-1558";
    }
}
