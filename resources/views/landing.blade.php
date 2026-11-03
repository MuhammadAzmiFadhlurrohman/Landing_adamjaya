<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Adam Jaya Enterprise — Manufaktur Mesin Pengolah Kedelai &amp; Fabrikasi SUS 304 (Bandung)</title>
    <meta name="description" content="PT Adam Jaya Enterprise — Produsen dan workshop spesialis mesin pengolah kedelai, tahang stainless SUS 304 food-grade, ketel uap, dan sistem kemasan sablon plastik di Bandung. Pelayanan mekanik 24 jam.">
    <meta name="keywords" content="mesin tahu bandung, pabrikasi mesin tahu, adam jaya enterprise, mesin giling kedelai, tahang stainless SUS 304, cetakan tahu jati, plastik sablon tahu">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/adamjaya.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/adamjaya.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/adamjaya.png') }}">

    <!-- Google Fonts: Plus Jakarta Sans, Inter & IBM Plex Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Premium SaaS + Oneshot Hero + UI/UX Pro Max Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/luxury-landing.css') }}?v={{ time() }}">

    <!-- Organization Structured Data -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "PT Adam Jaya Enterprise",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/adamjaya.png') }}",
        "foundingDate": "2002",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Jl. Aki Padma No.51, Babakan, Kec. Babakan Ciparay",
            "addressLocality": "Kota Bandung",
            "addressRegion": "Jawa Barat",
            "postalCode": "40222",
            "addressCountry": "ID"
        },
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+62-812-2160-1558",
            "contactType": "customer service"
        },
        "aggregateRating": {
            "@@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "4211"
        }
    }
    </script>
</head>
<body>

    <!-- ═══════════════════════════════════════════════════════════════════
         1. FLOATING GLASS PILL NAVBAR (premium-saas-web + Oneshot-Hero)
         ═══════════════════════════════════════════════════════════════════ -->
    <header class="nav-floating-wrap" id="navWrap">
        <nav class="nav-floating-pill" aria-label="Navigasi Utama">
            <a href="#beranda" class="nav-brand">
                <img src="{{ asset('assets/adamjaya.png') }}" alt="Logo PT Adam Jaya Enterprise" width="38" height="38">
                <div>
                    <span class="nav-brand-title">ADAM JAYA</span>
                    <span class="nav-brand-sub">Enterprise System</span>
                </div>
            </a>

            <!-- Focused Editorial Links -->
            <ul class="nav-links">
                <li><a href="#beranda" class="nav-link active">Beranda</a></li>
                <li><a href="#katalog-stok" class="nav-link">Katalog Mesin</a></li>
                <li><a href="#keunggulan" class="nav-link">Arsitektur &amp; Mutu</a></li>
                <li><a href="#testimoni" class="nav-link">Bukti &amp; Ulasan</a></li>
                <li><a href="#faq" class="nav-link">FAQ</a></li>
                <li><a href="#lokasi" class="nav-link">Workshop</a></li>
            </ul>

            <div class="nav-right">
                <a href="http://localhost/adamjaya-enterprise/login.php" target="_blank" rel="noopener" class="nav-portal-chip" title="Portal Internal Enterprise">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Portal B2B</span>
                </a>
                <a href="https://wa.me/6281221601558?text=Halo%20PT%20Adam%20Jaya%20Enterprise,%20saya%20ingin%20konsultasi%20mesin%20dan%20peralatan%20produksi%20tahu" target="_blank" rel="noopener" class="btn-gold-tactile" style="padding: 0.55rem 1.05rem; min-height: 38px; font-size: 0.82rem;">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Konsultasi WA</span>
                </a>
                <button type="button" class="mobile-toggle-btn" id="mobileNavToggle" onclick="toggleMobileDrawer()" aria-label="Buka Menu Navigasi" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>

        <!-- Mobile Sheet Menu -->
        <div class="mobile-sheet" id="mobileDrawer">
            <ul>
                <li><a href="#beranda" class="sheet-link" onclick="toggleMobileDrawer()">Beranda</a></li>
                <li><a href="#katalog-stok" class="sheet-link" onclick="toggleMobileDrawer()">Master Katalog Produk</a></li>
                <li><a href="#keunggulan" class="sheet-link" onclick="toggleMobileDrawer()">Arsitektur &amp; Keunggulan</a></li>
                <li><a href="#testimoni" class="sheet-link" onclick="toggleMobileDrawer()">Galeri Fabrikasi &amp; Ulasan</a></li>
                <li><a href="#faq" class="sheet-link" onclick="toggleMobileDrawer()">Tanya Jawab (FAQ)</a></li>
                <li><a href="#lokasi" class="sheet-link" onclick="toggleMobileDrawer()">Lokasi Workshop Bandung</a></li>
            </ul>
            <div style="display: flex; flex-direction: column; gap: 0.6rem;">
                <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20konsultasi%20mesin%20produksi%20tahu" target="_blank" rel="noopener" class="btn-gold-tactile" style="width: 100%;">
                    <i class="fa-brands fa-whatsapp"></i> Hubungi Hotline 24 Jam
                </a>
                <a href="http://localhost/adamjaya-enterprise/login.php" target="_blank" rel="noopener" class="btn-glass" style="width: 100%;">
                    <i class="fa-solid fa-lock"></i> Akses Portal Enterprise B2B
                </a>
            </div>
        </div>
    </header>

    <main>
        <!-- ═══════════════════════════════════════════════════════════════════
             2. HERO STAGE: SCULPTED ECLIPSE GLOW + TELEMETRY FRAME + MARQUEE
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="dark-stage noise-overlay hero-stage" id="beranda">
            <!-- Sculpted Eclipse Light Sources & Erasers (premium-saas-web shared/light.md) -->
            <div class="sculpted-glow" aria-hidden="true">
                <span class="g g1"></span>
                <span class="g g2"></span>
                <span class="g e1"></span>
                <span class="g core"></span>
            </div>
            <!-- Faint 4-Column Structural Guides -->
            <div class="column-guides" aria-hidden="true"></div>

            <div class="container">
                <div class="hero-main-grid">
                    <!-- Left Column: Tight-Tracked Display Copy + Beam CTA -->
                    <div class="hero-copy-col" id="heroCopyBlock">
                        <div class="eyebrow-pill">
                            <i class="fa-solid fa-star" style="color: var(--gold-bright);"></i>
                            <span>4.9/5 GOOGLE RATING &bull; WORKSHOP RESMI BANDUNG EST. 2002</span>
                        </div>

                        <h1 class="display-headline">
                            Rekayasa Mesin Tahu <span class="gold-metal-text">Presisi Tinggi.</span><br>
                            <span class="dim">Standar Higienis SUS 304.</span>
                        </h1>

                        <p class="hero-lead">
                            Tingkatkan rendemen ekstraksi sari kedelai dan percepat ritme produksi harian pabrik Anda dengan mesin manufaktur tangan pertama dari bengkel resmi PT Adam Jaya Enterprise di Bandung.
                        </p>

                        <div class="hero-cta-row">
                            <a href="https://wa.me/6281221601558?text=Halo%20PT%20Adam%20Jaya%20Enterprise,%20saya%20ingin%20konsultasi%20spesifikasi%20dan%20penawaran%20mesin%20produksi%20tahu" target="_blank" rel="noopener" class="btn-beam">
                                <i class="fa-brands fa-whatsapp" style="color: var(--gold-bright);"></i>
                                <span>Konsultasi Mesin via WA</span>
                                <i class="fa-solid fa-arrow-right" style="font-size: 0.78rem;"></i>
                            </a>
                            <a href="#katalog-stok" class="btn-glass">
                                <span>Telusuri Master Katalog</span>
                            </a>
                        </div>

                        <div class="hero-capabilities">
                            <span><i class="fa-solid fa-check"></i> 100% BAJA FOOD-GRADE SUS 304</span>
                            <span><i class="fa-solid fa-check"></i> KALIBRASI BALANCING 2 JAM</span>
                            <span><i class="fa-solid fa-check"></i> MEKANIK SIAGA 24/7</span>
                        </div>
                    </div>

                    <!-- Right Column: Hardware Telemetry Frame + Transparent Machine Render -->
                    <div class="hero-visual-col" id="heroVisualBlock">
                        <div class="hero-hardware-frame">
                            <div class="hardware-topbar">
                                <div class="hardware-dots" aria-hidden="true">
                                    <i></i><i></i><i></i>
                                </div>
                                <span class="hardware-id">SPEC // AJ-SUS304-SERIES</span>
                            </div>

                            <div class="hardware-stage-body">
                                <img src="{{ asset('assets/hero_machine_transparent.png') }}"
                                     alt="Unit Mesin Manufaktur Pengolah Kedelai Stainless Steel SUS 304 PT Adam Jaya Enterprise"
                                     class="hero-machine-visual"
                                     id="heroMachineImg"
                                     width="410"
                                     height="380">

                                <div class="hardware-telemetry-grid">
                                    <div class="telemetry-cell">
                                        <span class="telemetry-label">MATERIAL PLAT</span>
                                        <span class="telemetry-val">SUS 304 Murni</span>
                                    </div>
                                    <div class="telemetry-cell">
                                        <span class="telemetry-label">KONSTRUKSI LAS</span>
                                        <span class="telemetry-val">Argon Food-Grade</span>
                                    </div>
                                    <div class="telemetry-cell">
                                        <span class="telemetry-label">GARANSI RESMI</span>
                                        <span class="telemetry-val">Tangan Pertama</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Infinite Masked-Edge Partner Marquee (premium-saas-web shared/components.md) -->
                <div class="hero-marquee-band">
                    <div class="marquee-header">
                        <span class="mono-tag" style="color: var(--fg-45);">DIPERCAYA OLEH 4.200+ PABRIK PENGOLAHAN &amp; SENTRA KULINER NUSANTARA</span>
                        <span class="mono-tag" style="color: var(--gold-bright);">24+ TAHUN DEDIKASI MANUFAKTUR</span>
                    </div>

                    <div class="marquee-mask" aria-label="Daftar Mitra Industri Adam Jaya">
                        <div class="marquee-track">
                            <!-- Set 1 -->
                            <div class="partner-tile">
                                <div>
                                    <span class="partner-tile-name">TAHU YUN SEN</span>
                                    <span class="partner-tile-sub">SENTRA KULINER BANDUNG &bull; EST. 1938</span>
                                </div>
                            </div>
                            <div class="partner-tile">
                                <div>
                                    <span class="partner-tile-name">TAHU SUSU LEMBANG</span>
                                    <span class="partner-tile-sub">IKON PARIWISATA JAWA BARAT</span>
                                </div>
                            </div>
                            <div class="partner-tile">
                                <div>
                                    <span class="partner-tile-name">PABRIK TAHU LESTARI JAYA</span>
                                    <span class="partner-tile-sub">KAPASITAS 500 KG/HARI &bull; BANDUNG</span>
                                </div>
                            </div>
                            <div class="partner-tile">
                                <div>
                                    <span class="partner-tile-name">SUMEDANG MANDIRI</span>
                                    <span class="partner-tile-sub">SENTRA TAHU KUNING SUMEDANG</span>
                                </div>
                            </div>
                            <div class="partner-tile">
                                <div>
                                    <span class="partner-tile-name">SENTOSA MAKMUR KEDELAI</span>
                                    <span class="partner-tile-sub">RANTAI PASOK PANGAN JAWA BARAT</span>
                                </div>
                            </div>
                            <div class="partner-tile">
                                <div>
                                    <span class="partner-tile-name">PRIMA PACKAGING</span>
                                    <span class="partner-tile-sub">KEMASAN &amp; SABLON FOOD-GRADE CIMAHI</span>
                                </div>
                            </div>
                            <div class="partner-tile">
                                <div>
                                    <span class="partner-tile-name">BERKAH FOOD INDO</span>
                                    <span class="partner-tile-sub">PABRIK SEMI-OTOMATIS BANDUNG</span>
                                </div>
                            </div>
                            <div class="partner-tile">
                                <div>
                                    <span class="partner-tile-name">KARYA TAHU NUSANTARA</span>
                                    <span class="partner-tile-sub">DISTRIBUSI PANGAN NASIONAL</span>
                                </div>
                            </div>

                            <!-- Set 2 (Duplicate for Seamless Infinite Loop) -->
                            <div class="partner-tile" aria-hidden="true">
                                <div>
                                    <span class="partner-tile-name">TAHU YUN SEN</span>
                                    <span class="partner-tile-sub">SENTRA KULINER BANDUNG &bull; EST. 1938</span>
                                </div>
                            </div>
                            <div class="partner-tile" aria-hidden="true">
                                <div>
                                    <span class="partner-tile-name">TAHU SUSU LEMBANG</span>
                                    <span class="partner-tile-sub">IKON PARIWISATA JAWA BARAT</span>
                                </div>
                            </div>
                            <div class="partner-tile" aria-hidden="true">
                                <div>
                                    <span class="partner-tile-name">PABRIK TAHU LESTARI JAYA</span>
                                    <span class="partner-tile-sub">KAPASITAS 500 KG/HARI &bull; BANDUNG</span>
                                </div>
                            </div>
                            <div class="partner-tile" aria-hidden="true">
                                <div>
                                    <span class="partner-tile-name">SUMEDANG MANDIRI</span>
                                    <span class="partner-tile-sub">SENTRA TAHU KUNING SUMEDANG</span>
                                </div>
                            </div>
                            <div class="partner-tile" aria-hidden="true">
                                <div>
                                    <span class="partner-tile-name">SENTOSA MAKMUR KEDELAI</span>
                                    <span class="partner-tile-sub">RANTAI PASOK PANGAN JAWA BARAT</span>
                                </div>
                            </div>
                            <div class="partner-tile" aria-hidden="true">
                                <div>
                                    <span class="partner-tile-name">PRIMA PACKAGING</span>
                                    <span class="partner-tile-sub">KEMASAN &amp; SABLON FOOD-GRADE CIMAHI</span>
                                </div>
                            </div>
                            <div class="partner-tile" aria-hidden="true">
                                <div>
                                    <span class="partner-tile-name">BERKAH FOOD INDO</span>
                                    <span class="partner-tile-sub">PABRIK SEMI-OTOMATIS BANDUNG</span>
                                </div>
                            </div>
                            <div class="partner-tile" aria-hidden="true">
                                <div>
                                    <span class="partner-tile-name">KARYA TAHU NUSANTARA</span>
                                    <span class="partner-tile-sub">DISTRIBUSI PANGAN NASIONAL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             3. SCROLL-FILL STATEMENT (premium-saas-web shared/typography.md)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="statement-section" aria-label="Komitmen Manufaktur">
            <div class="container">
                <span class="eyebrow-pill light">FILOSOFI REKAYASA &amp; STANDAR MUTU</span>
                <p class="scroll-statement" id="scrollFillStatement">
                    Selama lebih dari <span class="kw-wine">24 tahun</span>, PT Adam Jaya Enterprise memproduksi peralatan pengolahan kedelai berstandar <span class="kw-gold">Food-Grade SUS 304</span> langsung dari workshop Bandung — menghadirkan ekstraksi sari yang presisi, ketahanan korosi asam tertinggi, serta kepastian <span class="kw-wine">suku cadang</span> bagi ribuan pabrik di Indonesia.
                </p>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             4. MASTER KATALOG & REAL-TIME STOCK FILTER ($products)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="catalog-section" id="katalog-stok">
            <div class="container">
                <div class="catalog-head-row reveal-up">
                    <div>
                        <span class="eyebrow-pill light">INVENTARIS &amp; HARGA BENGKEL TANGAN PERTAMA</span>
                        <h2 class="section-heading">
                            Master Katalog &amp; <span class="wine-metal-text">Spesifikasi Mesin.</span>
                        </h2>
                    </div>
                    <p class="section-subcopy">
                        Mesin giling kedelai presisi, tahang stainless SUS 304, ketel uap boiler, batu corundum, hingga plastik kemasan sablon terdaftar resmi langsung dari workshop kami.
                    </p>
                </div>

                <!-- Tactile Command Deck: Search + Sort + Single-Row Filter Bar -->
                <div class="catalog-deck reveal-up">
                    <div class="catalog-deck-top">
                        <div class="search-input-wrap">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" id="catalogSearchInput" placeholder="Cari mesin giling, tahang stainless, batu corundum, plastik sablon..." oninput="handleLiveSearch()" aria-label="Cari produk di katalog">
                        </div>

                        <div class="sort-select-wrap">
                            <label for="catalogSortSelect">URUTKAN:</label>
                            <select id="catalogSortSelect" onchange="handleCatalogSort()">
                                <option value="rekomendasi">Rekomendasi Utama</option>
                                <option value="harga-asc">Harga Terendah</option>
                                <option value="harga-desc">Harga Tertinggi</option>
                                <option value="terbaru">Terbaru</option>
                            </select>
                        </div>
                    </div>

                    <!-- Unbroken Single-Row Filter Bar (Creating-Oneshot-Hero-Landing-Pages) -->
                    <div class="catalog-filter-row" role="tablist" aria-label="Kategori Produk">
                        <button type="button" class="filter-btn active" data-filter="all" onclick="filterCatalog('all', this)">
                            <span>Semua Produk</span>
                            <span class="filter-count" id="countAll">{{ count($products) }}</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="mesin-tahu" onclick="filterCatalog('mesin-tahu', this)">
                            <span>Mesin Tahu &amp; Stainless</span>
                            <span class="filter-count" id="countTahu">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-tahu')) }}</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="mesin-plastik" onclick="filterCatalog('mesin-plastik', this)">
                            <span>Plastik Sablon</span>
                            <span class="filter-count" id="countPlastik">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-plastik')) }}</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="mesin-kemasan" onclick="filterCatalog('mesin-kemasan', this)">
                            <span>Mesin Kemasan &amp; Sealer</span>
                            <span class="filter-count" id="countKemasan">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-kemasan')) }}</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="sparepart" onclick="filterCatalog('sparepart', this)">
                            <span>Peralatan &amp; Sparepart</span>
                            <span class="filter-count" id="countSparepart">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'sparepart')) }}</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="lainnya" onclick="filterCatalog('lainnya', this)">
                            <span>Lainnya</span>
                            <span class="filter-count" id="countLainnya">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'lainnya')) }}</span>
                        </button>
                    </div>
                </div>

                <!-- 4-Column Soft-Lift Product Grid -->
                <div class="products-grid" id="catalogGrid">
                    @foreach($products as $index => $item)
                        @php
                            $variantsCount = count($item['variants'] ?? []);
                            $hasImg = !empty($item['gambar']) && file_exists(public_path($item['gambar']));
                            $imgSrc = $hasImg ? asset($item['gambar']) : null;
                            $priceDisplay = 'Hubungi CS';
                            $rawPrice = $item['min_price'] ?? 0;

                            if (!empty($item['min_price']) && $item['min_price'] > 0) {
                                if ($item['min_price'] == $item['max_price']) {
                                    $unit = $item['variants'][0]['satuan'] ?? 'unit';
                                    $priceDisplay = 'Rp ' . number_format($item['min_price'], 0, ',', '.') . ($unit === 'kg' ? ' / kg' : '');
                                } else {
                                    $priceDisplay = 'Rp ' . number_format($item['min_price'], 0, ',', '.') . ' – Rp ' . number_format($item['max_price'], 0, ',', '.');
                                }
                            }
                        @endphp
                        <article class="product-card"
                                 data-cat="{{ $item['category'] ?? 'lainnya' }}"
                                 data-name="{{ $item['nama_barang'] }}"
                                 data-id="{{ $item['id'] }}"
                                 data-price="{{ $rawPrice }}"
                                 data-order="{{ $index + 1 }}">
                            <div class="product-img-wrap">
                                @if($hasImg)
                                    <img src="{{ $imgSrc }}" alt="{{ $item['nama_barang'] }} — PT Adam Jaya Enterprise" loading="lazy" width="300" height="215">
                                @else
                                    <div class="product-placeholder-box">
                                        <i class="fa-solid {{ ($item['category'] ?? '') === 'mesin-plastik' ? 'fa-boxes-packing' : (($item['category'] ?? '') === 'mesin-tahu' ? 'fa-gears' : 'fa-screwdriver-wrench') }}"></i>
                                        <span class="mono-tag">{{ $item['category_label'] ?? 'Peralatan Pabrik' }}</span>
                                    </div>
                                @endif
                                <span class="product-chip-left">ASLI BENGKEL</span>
                                <span class="product-chip-right">
                                    {{ $variantsCount > 1 ? $variantsCount . ' VARIAN' : 'TERSEDIA' }}
                                </span>
                            </div>

                            <div class="product-body">
                                <span class="product-cat-mono">{{ $item['category_label'] ?? 'Perlengkapan Manufaktur' }}</span>
                                <h3>{{ $item['nama_barang'] }}</h3>
                                <p class="product-variants-preview">
                                    @if(!empty($item['variants']))
                                        Varian: {{ implode(', ', array_slice(array_column($item['variants'], 'nama_jenis'), 0, 3)) }}{{ count($item['variants']) > 3 ? '...' : '' }}
                                    @else
                                        Diproduksi langsung sesuai standar mutu bengkel PT Adam Jaya Enterprise.
                                    @endif
                                </p>

                                <div class="product-price-band">
                                    <span class="price-caption">{{ !empty($item['min_price']) && $item['min_price'] > 0 && $item['min_price'] != $item['max_price'] ? 'Rentang' : 'Mulai' }}</span>
                                    <span class="price-value">{{ $priceDisplay }}</span>
                                </div>

                                <div class="product-card-actions">
                                    <button type="button" class="btn-outline-tactile" onclick="showCatalogProductModal({{ $item['id'] }})">
                                        <span>Detail Varian</span>
                                    </button>
                                    <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20tanya%20stok%20dan%20harga%20{{ urlencode($item['nama_barang']) }}" target="_blank" rel="noopener" class="btn-wine-tactile">
                                        <i class="fa-brands fa-whatsapp"></i>
                                        <span>Pesan</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Empty State -->
                <div class="catalog-empty" id="catalogEmptyState">
                    <p class="mono-tag" style="color: var(--wine); margin-bottom: 0.5rem;">PENCARIAN TIDAK DITEMUKAN</p>
                    <h3 style="font-family: var(--font-display); font-size: 1.25rem; margin-bottom: 0.5rem;">Barang Belum Tercantum di Filter Ini</h3>
                    <p style="color: var(--ink-60); max-width: 480px; margin: 0 auto 1.25rem;">
                        Kami juga menerima pesanan pembuatan mesin, tahang stainless, dan peralatan dengan ukuran custom sesuai kapasitas pabrik Anda.
                    </p>
                    <button type="button" class="btn-wine-tactile" onclick="resetCatalogSearch()">
                        <span>Tampilkan Semua Barang</span>
                    </button>
                </div>

                <!-- Load More Controls -->
                <div id="catalogLoadMoreWrap" style="text-align: center; margin-top: 2.5rem;">
                    <button type="button" class="btn-wine-tactile" id="btnLoadMore" onclick="loadMoreCatalog()" style="padding: 0.85rem 2rem;">
                        <span>Tampilkan Produk Lainnya</span>
                        <span class="mono-tag" id="loadMoreCountBadge" style="color: var(--gold-light);">(+8)</span>
                    </button>
                    <div id="catalogAllLoadedText" style="display: none; font-family: var(--font-mono); font-size: 0.78rem; color: var(--ink-60); margin-top: 1rem;">
                        SELURUH <strong id="totalVisibleBadge">0</strong> PRODUK PADA KATEGORI INI TELAH DITAMPILKAN.
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             5. 6-COLUMN BENTO GRID WITH MINI-UIS & ROLLING COUNTERS (premium-saas-web)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="dark-stage noise-overlay bento-section" id="keunggulan">
            <div class="sculpted-glow" aria-hidden="true">
                <span class="g g1" style="top: 10%; left: 30%; opacity: 0.55;"></span>
                <span class="g core" style="bottom: 5%; left: 80%;"></span>
            </div>
            <div class="column-guides" aria-hidden="true"></div>

            <div class="container">
                <div style="position: relative; z-index: 2; max-width: 680px; margin-bottom: 3rem;" class="reveal-up">
                    <span class="eyebrow-pill">ARSITEKTUR REKAYASA &amp; KEUNGGULAN KOMPETITIF</span>
                    <h2 class="section-heading">
                        Kenapa Ribuan Pabrik Memilih <span class="gold-metal-text">Bengkel Adam Jaya?</span>
                    </h2>
                    <p class="section-subcopy">
                        Produsen manufaktur peralatan pengolah kedelai tangan pertama di Bandung dengan kendali mutu 100% di bengkel sendiri dan dukungan mekanik lintas provinsi.
                    </p>
                </div>

                <!-- 4 Rolling Statistics Counters -->
                <div class="stats-counter-grid reveal-up" id="whyStatsRibbon">
                    <div class="stat-cell">
                        <span class="stat-big-num stat-counter" data-target="24" data-suffix="+">24+</span>
                        <span class="stat-title">Tahun Pengalaman</span>
                        <span class="stat-sub">Spesialisasi manufaktur mesin tahu</span>
                    </div>
                    <div class="stat-cell">
                        <span class="stat-big-num stat-counter" data-target="4200" data-suffix="+" data-format="thousand">4.200+</span>
                        <span class="stat-title">Unit Terdistribusi</span>
                        <span class="stat-sub">Beroperasi di seluruh Nusantara</span>
                    </div>
                    <div class="stat-cell">
                        <span class="stat-big-num stat-counter" data-target="100" data-suffix="%">100%</span>
                        <span class="stat-title">SUS 304 Food-Grade</span>
                        <span class="stat-sub">Tahan korosi asam cuka &amp; uap panas</span>
                    </div>
                    <div class="stat-cell">
                        <span class="stat-big-num stat-counter" data-target="24" data-suffix="/7">24/7</span>
                        <span class="stat-title">Teknisi Siaga</span>
                        <span class="stat-sub">Suku cadang asli selalu tersedia</span>
                    </div>
                </div>

                <!-- 6-Column Asymmetric Bento Grid with Spotlight (.spot) & Mini-UIs -->
                <div class="bento-grid" id="proyek">
                    <!-- Cell 1 (Span 4): Factory Direct & 4-Step Pipeline Mini-UI -->
                    <article class="bento-cell span-4 leak-gold spot reveal-up">
                        <div>
                            <span class="mono-tag" style="color: var(--gold-bright);">01 // FACTORY DIRECT MANUFACTURING</span>
                            <h3 style="margin-top: 0.4rem;">Fabrikasi Tangan Pertama &amp; Alur QC 4 Tahap</h3>
                            <p>
                                Seluruh proses dikerjakan langsung di bengkel resmi kami di Babakan Ciparay, Bandung — tanpa markup perantara toko dan dapat dikustomisasi sesuai ukuran ruang maupun target kapasitas giling harian Anda.
                            </p>
                        </div>

                        <!-- Mini-UI: 4-Stage Engineering Pipeline -->
                        <div class="mini-ui-panel">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                                <span class="mono-tag" style="color: var(--fg-60);">PIPELINE MANUFAKTUR BENGKEL</span>
                                <span class="mono-tag" style="color: #10B981;">ISO-GRADE WORKFLOW</span>
                            </div>
                            <div class="pipeline-nodes">
                                <div class="pipe-node">
                                    <span class="pipe-node-step">STEP 01</span>
                                    <span class="pipe-node-title">Rancang &amp; Ukur</span>
                                    <span style="font-size: 0.74rem; color: var(--fg-45);">Kapasitas 100–500kg+</span>
                                </div>
                                <div class="pipe-node">
                                    <span class="pipe-node-step">STEP 02</span>
                                    <span class="pipe-node-title">Bubut Presisi</span>
                                    <span style="font-size: 0.74rem; color: var(--fg-45);">Senter as &amp; dudukan</span>
                                </div>
                                <div class="pipe-node">
                                    <span class="pipe-node-step">STEP 03</span>
                                    <span class="pipe-node-title">Las Argon 304</span>
                                    <span style="font-size: 0.74rem; color: var(--fg-45);">Anti-rembes &amp; higienis</span>
                                </div>
                                <div class="pipe-node">
                                    <span class="pipe-node-step">STEP 04</span>
                                    <span class="pipe-node-title">QC Balancing</span>
                                    <span style="font-size: 0.74rem; color: var(--fg-45);">Uji putar nonstop 2 jam</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Cell 2 (Span 2): 24/7 Emergency Support Mini-UI -->
                    <article class="bento-cell span-2 leak-wine spot reveal-up">
                        <div>
                            <span class="mono-tag" style="color: var(--gold-bright);">02 // 24-HOUR DISPATCH</span>
                            <h3 style="margin-top: 0.4rem;">Respon Mekanik Darurat 24 Jam</h3>
                            <p>
                                Produksi tahu dimulai dini hari. Tim mekanik dan stok suku cadang kami selalu siap dipanggil kapan pun mesin membutuhkan penanganan.
                            </p>
                        </div>

                        <!-- Mini-UI: Live Mechanic Dispatch Status -->
                        <div class="mini-ui-panel dispatch-status-ui">
                            <div class="dispatch-live-row">
                                <span class="mono-tag" style="color: #FFFFFF;"><i class="pulse-dot"></i>MEKANIK SIAGA</span>
                                <span class="mono-tag" style="color: #10B981;">AKTIF 24/7</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.78rem; color: var(--fg-60);">
                                <span>Stok Batu Corundum &amp; Bearing</span>
                                <strong style="color: var(--gold-light);">Ready 100%</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.78rem; color: var(--fg-60);">
                                <span>Hotline Kepala Bengkel</span>
                                <strong style="color: #FFFFFF;">0812-2160-1558</strong>
                            </div>
                        </div>
                    </article>

                    <!-- Cell 3 (Span 3): SUS 304 Metallurgy Comparison Mini-UI -->
                    <article class="bento-cell span-3 spot reveal-up">
                        <div>
                            <span class="mono-tag" style="color: var(--gold-bright);">03 // FOOD-GRADE METALLURGY</span>
                            <h3 style="margin-top: 0.4rem;">Ketahanan Ekstrem Stainless SUS 304</h3>
                            <p>
                                Air asam cuka tahu (biang) dan uap panas bertekanan tinggi dengan cepat mengikis plat logam biasa. Kami hanya menggunakan plat Stainless Steel SUS 304 murni.
                            </p>
                        </div>

                        <div class="mini-ui-panel metal-bar-group">
                            <div>
                                <div class="metal-bar-label">
                                    <span>ADAM JAYA SUS 304 FOOD-GRADE</span>
                                    <span style="color: var(--gold-bright);">100% ANTI-KOROSI ASAM</span>
                                </div>
                                <div class="metal-track"><div class="metal-fill-gold"></div></div>
                            </div>
                            <div>
                                <div class="metal-bar-label">
                                    <span style="color: var(--fg-45);">PLAT BESI / STAINLESS 201 BIASA</span>
                                    <span style="color: var(--fg-45);">RENTAN KARAT &amp; BOCOR</span>
                                </div>
                                <div class="metal-track"><div class="metal-fill-dim"></div></div>
                            </div>
                        </div>
                    </article>

                    <!-- Cell 4 (Span 3): Extraction Yield & Packaging Ecosystem -->
                    <article class="bento-cell span-3 spot reveal-up">
                        <div>
                            <span class="mono-tag" style="color: var(--gold-bright);">04 // HIGH-YIELD EXTRACTION &amp; PACKAGING</span>
                            <h3 style="margin-top: 0.4rem;">Ekstraksi Sari Maksimal &amp; Sablon Tahan Panas</h3>
                            <p>
                                Presisi kerapatan batu giling corundum menghasilkan ampas yang kering dalam sekali giling, dipadukan layanan plastik kemasan sablon PE/PP anti-luntur.
                            </p>
                        </div>

                        <div class="mini-ui-panel" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.75rem;">
                            <div style="padding: 0.65rem; border-radius: 8px; background: rgba(255,255,255,0.03); border: 1px solid var(--line-dark);">
                                <span class="mono-tag" style="color: var(--fg-45); display: block;">HASIL PERASAN</span>
                                <strong style="font-family: var(--font-display); font-size: 1.05rem; color: var(--gold-light);">Ampas Lebih Kering</strong>
                            </div>
                            <div style="padding: 0.65rem; border-radius: 8px; background: rgba(255,255,255,0.03); border: 1px solid var(--line-dark);">
                                <span class="mono-tag" style="color: var(--fg-45); display: block;">TINTA SABLON PE</span>
                                <strong style="font-family: var(--font-display); font-size: 1.05rem; color: #FFFFFF;">Tahan Kuah Panas</strong>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             6. WORKSHOP DOCUMENTATION & VERIFIED GOOGLE REVIEWS
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="proof-section" id="testimoni">
            <div class="container">
                <div style="max-width: 680px; margin-bottom: 2.75rem;" class="reveal-up">
                    <span class="eyebrow-pill light">BUKTI FABRIKASI &amp; ULASAN MITRA</span>
                    <h2 class="section-heading">
                        Dokumentasi Nyata &amp; <span class="wine-metal-text">Kepercayaan Pengrajin.</span>
                    </h2>
                    <p class="section-subcopy">
                        Rekam jejak pengerjaan unit di workshop Bandung serta ulasan terverifikasi dari para pengusaha pabrik tahu dan kemasan di seluruh Indonesia.
                    </p>
                </div>

                <!-- 3 Real Asset Documentation Tiles (Click to Zoom Lightbox) -->
                <div class="showcase-grid reveal-up">
                    <article class="showcase-tile" onclick="openLightbox('{{ asset('assets/hero_machine.jpg') }}', 'Perakitan Mesin Giling Kedelai &amp; Konstruksi Baja Presisi — Workshop Adam Jaya Bandung')">
                        <img src="{{ asset('assets/hero_machine.jpg') }}" alt="Workshop Perakitan Mesin Adam Jaya Bandung" loading="lazy" width="400" height="250">
                        <div class="showcase-caption">
                            <span>DOKUMENTASI WORKSHOP // 01</span>
                            <h3>Perakitan Mesin Giling &amp; Rangka Presisi</h3>
                        </div>
                    </article>

                    <article class="showcase-tile" onclick="openLightbox('{{ asset('assets/hero_machine_packaging.jpg') }}', 'Lini Mesin Sealer Kemasan &amp; Produksi Plastik Sablon Tahan Panas')">
                        <img src="{{ asset('assets/hero_machine_packaging.jpg') }}" alt="Mesin Pengemas dan Sablon Plastik Kemasan Adam Jaya" loading="lazy" width="400" height="250">
                        <div class="showcase-caption">
                            <span>SISTEM KEMASAN // 02</span>
                            <h3>Integrasi Continuous Sealer &amp; Sablon PE</h3>
                        </div>
                    </article>

                    <article class="showcase-tile" onclick="openLightbox('{{ asset('assets/hero_machine_perspective_transparent.png') }}', 'Detail Fabrikasi Corong &amp; Bejana Stainless Steel SUS 304 Food-Grade')">
                        <img src="{{ asset('assets/hero_machine_perspective_transparent.png') }}" alt="Detail Fabrikasi Stainless SUS 304 Adam Jaya" loading="lazy" width="400" height="250" style="object-fit: contain; padding: 1.25rem; background: #090D16;">
                        <div class="showcase-caption">
                            <span>STANDAR MATERIAL // 03</span>
                            <h3>Fabrikasi Las Argon Stainless SUS 304</h3>
                        </div>
                    </article>
                </div>

                <!-- Verified Google Review Scoreboard -->
                <div class="google-proof-bar reveal-up">
                    <div style="display: flex; align-items: center; gap: 1.1rem;">
                        <div style="width: 52px; height: 52px; border-radius: 14px; background: var(--light-0); border: 1px solid var(--line-light); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #4285F4;">
                            <i class="fa-brands fa-google"></i>
                        </div>
                        <div>
                            <div style="display: flex; align-items: center; gap: 0.6rem;">
                                <strong style="font-family: var(--font-display); font-size: 1.75rem; font-weight: 800; line-height: 1;">4.9</strong>
                                <div style="color: #D97706; font-size: 0.85rem;">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span class="mono-tag" style="color: #059669;">TERVERIFIKASI</span>
                            </div>
                            <p style="font-size: 0.84rem; color: var(--ink-60); margin-top: 0.2rem;">
                                Berdasarkan <strong>4.211+ Ulasan Pengrajin Tahu &amp; Mitra Bengkel</strong> di Google Maps
                            </p>
                        </div>
                    </div>

                    <a href="https://maps.google.com/?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222" target="_blank" rel="noopener" class="btn-outline-tactile">
                        <i class="fa-brands fa-google"></i>
                        <span>Lihat Profil Google Maps</span>
                    </a>
                </div>

                <!-- 3 Verified Review Cards -->
                <div class="reviews-grid">
                    <article class="review-card reveal-up">
                        <div>
                            <div class="review-stars" aria-label="Bintang 5">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="review-quote">
                                “Mesin gilingan dan tahang stainless dari Adam Jaya luar biasa presisi. Kapasitas 400 kg kedelai per hari selesai 3 jam lebih cepat, ampasnya kering dan hasil tahu lebih kenyal. Layanan servis darurat malam hari benar-benar standby.”
                            </p>
                        </div>
                        <div class="review-author">
                            <div class="review-avatar">BS</div>
                            <div>
                                <strong style="font-family: var(--font-display); font-size: 0.92rem; display: block;">Budi Santoso <i class="fa-solid fa-circle-check" style="color: #059669; font-size: 0.78rem;"></i></strong>
                                <span style="font-size: 0.78rem; color: var(--ink-60);">Pemilik Pabrik Tahu Lestari Jaya &bull; Bandung</span>
                            </div>
                        </div>
                    </article>

                    <article class="review-card reveal-up">
                        <div>
                            <div class="review-stars" aria-label="Bintang 5">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="review-quote">
                                “Pesan sablon plastik PE &amp; continuous band sealer untuk kemasan tahu sutra. Tinta sablonnya tidak luntur kena kuah panas dan mesin sealer rekat rapat anti bocor. Garapan workshop sangat profesional dan tepat waktu.”
                            </p>
                        </div>
                        <div class="review-author">
                            <div class="review-avatar" style="background: var(--wine);">RH</div>
                            <div>
                                <strong style="font-family: var(--font-display); font-size: 0.92rem; display: block;">Rian Hidayat <i class="fa-solid fa-circle-check" style="color: #059669; font-size: 0.78rem;"></i></strong>
                                <span style="font-size: 0.78rem; color: var(--ink-60);">Usaha Kemasan Plastik Prima &bull; Cimahi</span>
                            </div>
                        </div>
                    </article>

                    <article class="review-card reveal-up">
                        <div>
                            <div class="review-stars" aria-label="Bintang 5">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="review-quote">
                                “Ketel boiler uap buatan Adam Jaya sangat efisien hemat kayu bakar &amp; gas. Batu gilingan corundum grade A putarannya seimbang tanpa getaran bising. Harga bengkel tangan pertama sangat transparan dan bergaransi.”
                            </p>
                        </div>
                        <div class="review-author">
                            <div class="review-avatar" style="background: #162C4E;">DK</div>
                            <div>
                                <strong style="font-family: var(--font-display); font-size: 0.92rem; display: block;">Bpk. Dadang Kusnadi <i class="fa-solid fa-circle-check" style="color: #059669; font-size: 0.78rem;"></i></strong>
                                <span style="font-size: 0.78rem; color: var(--ink-60);">Pengrajin Tahu Sumedang Mandiri &bull; Sumedang</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             7. 2-COLUMN STICKY FAQ ACCORDION (premium-saas-web shared/components.md)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="faq-section" id="faq">
            <div class="container faq-split-layout">
                <!-- Left Sticky Column -->
                <div class="faq-sticky-left reveal-up">
                    <span class="eyebrow-pill light">INFORMASI PEMESANAN &amp; TEKNIS</span>
                    <h2 class="section-heading">
                        Pertanyaan Umum <span class="dim-light">Seputar Pabrikasi.</span>
                    </h2>
                    <p class="section-subcopy">
                        Jawaban transparan mengenai kustomisasi ukuran mesin, pengiriman kargo luar pulau, hingga jaminan ketersediaan suku cadang.
                    </p>

                    <div class="faq-support-card">
                        <span class="mono-tag" style="color: var(--wine);">BUTUH SPESIFIKASI KHUSUS?</span>
                        <h3 style="font-family: var(--font-display); font-size: 1.05rem; margin: 0.35rem 0 0.5rem;">Konsultasi Langsung Kepala Mekanik</h3>
                        <p style="font-size: 0.85rem; color: var(--ink-60); margin-bottom: 1rem;">
                            Tim teknis kami siap menghitung kapasitas peralatan paling efisien sesuai target produksi harian Anda.
                        </p>
                        <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20ingin%20konsultasi%20ukuran%20mesin%20custom" target="_blank" rel="noopener" class="btn-wine-tactile" style="width: 100%;">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>Hubungi 0812-2160-1558</span>
                        </a>
                    </div>
                </div>

                <!-- Right Accordion Column (grid-template-rows: 0fr -> 1fr) -->
                <div class="faq-accordion-list reveal-up">
                    <div class="faq-row active">
                        <button type="button" class="faq-trigger" onclick="toggleFaqRow(this)" aria-expanded="true">
                            <span>Apakah bisa memesan mesin atau tahang dengan ukuran spesifikasi custom?</span>
                            <span class="faq-plus-circle" aria-hidden="true">&minus;</span>
                        </button>
                        <div class="faq-grid-body">
                            <div class="faq-body-inner">
                                <p>Ya, sangat bisa. Karena kami adalah produsen langsung dengan bengkel manufaktur spesialis di Bandung, Anda dapat memesan tahang stainless, mesin giling kedelai, cetakan press tahu, atau ketel boiler dengan dimensi, ketebalan plat SUS 304, maupun kapasitas daya dinamo sesuai kebutuhan pabrik Anda.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <button type="button" class="faq-trigger" onclick="toggleFaqRow(this)" aria-expanded="false">
                            <span>Bagaimana sistem pengiriman mesin ke luar Bandung atau luar pulau?</span>
                            <span class="faq-plus-circle" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-grid-body">
                            <div class="faq-body-inner">
                                <p>Kami melayani pengiriman ke seluruh wilayah Jawa Barat, Pulau Jawa, Sumatera, Kalimantan, Sulawesi, hingga kawasan timur Indonesia menggunakan ekspedisi kargo terpercaya dengan pengemasan rangka palet kayu kokoh tahan guncangan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <button type="button" class="faq-trigger" onclick="toggleFaqRow(this)" aria-expanded="false">
                            <span>Apakah tersedia suku cadang presisi dan garansi servis resmi?</span>
                            <span class="faq-plus-circle" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-grid-body">
                            <div class="faq-body-inner">
                                <p>Semua mesin rakitan PT Adam Jaya Enterprise dilengkapi garansi servis resmi. Suku cadang habis pakai seperti batu gilingan corundum, vanbelt, puli transmisi, bearing, kran kuningan/stainless, serta kain peresan selalu ready stock di workshop kami.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <button type="button" class="faq-trigger" onclick="toggleFaqRow(this)" aria-expanded="false">
                            <span>Berapa lama estimasi fabrikasi untuk pesanan ketel uap atau sablon plastik?</span>
                            <span class="faq-plus-circle" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-grid-body">
                            <div class="faq-body-inner">
                                <p>Untuk unit dan suku cadang ready stock dapat dikirim pada hari yang sama. Untuk fabrikasi custom atau pencetakan sablon plastik kemasan bermerek, waktu pengerjaan berkisar 3–10 hari kerja tergantung spesifikasi dan volume pesanan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <button type="button" class="faq-trigger" onclick="toggleFaqRow(this)" aria-expanded="false">
                            <span>Kapan jam operasional kunjungan ke workshop Adam Jaya Bandung?</span>
                            <span class="faq-plus-circle" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-grid-body">
                            <div class="faq-body-inner">
                                <p>Workshop bengkel manufaktur kami buka setiap hari Senin sampai Jumat pukul 07.00 pagi hingga 18.00 sore WIB di Jl. Aki Padma No. 51, Babakan Ciparay, Kota Bandung. Hari Sabtu &amp; Minggu melayani kunjungan melalui janji temu, dan hotline teknis tetap siaga 24 jam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             8. FINAL CTA STAGE + WORKSHOP MAP & DIRECT RFQ (premium-saas-web)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="dark-stage noise-overlay final-cta-stage" id="lokasi">
            <div class="sculpted-glow" aria-hidden="true">
                <span class="g g1" style="top: -10%; left: 60%;"></span>
                <span class="g core" style="bottom: 0; left: 30%;"></span>
            </div>

            <div class="container cta-location-grid">
                <!-- Left Panel: Workshop Address, Hours & Direct Actions -->
                <div class="workshop-info-panel reveal-up">
                    <div>
                        <span class="eyebrow-pill">BENGKEL MANUFAKTUR RESMI BANDUNG</span>
                        <h2 class="section-heading" style="margin-bottom: 0.65rem;">
                            Kunjungi Workshop <span class="gold-metal-text">Adam Jaya.</span>
                        </h2>
                        <p class="section-subcopy">
                            Tinjau langsung kualitas pengelasan Stainless Steel SUS 304, uji putaran mesin giling, atau diskusikan kebutuhan pabrik Anda bersama kepala mekanik kami.
                        </p>

                        <div class="workshop-detail-list">
                            <div class="workshop-detail-item">
                                <div class="workshop-detail-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <div>
                                    <strong style="color: #FFFFFF; display: block; font-size: 0.92rem;">Alamat Workshop &amp; Fabrikasi</strong>
                                    <span style="color: var(--fg-60); font-size: 0.86rem;">Jl. Aki Padma No.51, Babakan, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat 40222</span>
                                </div>
                            </div>

                            <div class="workshop-detail-item">
                                <div class="workshop-detail-icon"><i class="fa-solid fa-phone-volume"></i></div>
                                <div>
                                    <strong style="color: #FFFFFF; display: block; font-size: 0.92rem;">Hotline Konsultasi &amp; Servis 24 Jam</strong>
                                    <span style="color: var(--gold-light); font-family: var(--font-mono); font-size: 0.88rem;">0812-2160-1558 (Fast Response WhatsApp)</span>
                                </div>
                            </div>

                            <div class="workshop-detail-item">
                                <div class="workshop-detail-icon"><i class="fa-solid fa-clock"></i></div>
                                <div>
                                    <strong style="color: #FFFFFF; display: block; font-size: 0.92rem;">Jam Operasional Kunjungan</strong>
                                    <span style="color: var(--fg-60); font-size: 0.86rem;">Senin – Jumat: 07.00 – 18.00 WIB (Sabtu &amp; Minggu: Janji Temu)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display: flex; flex-wrap: wrap; gap: 0.85rem;">
                        <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20mau%20berkunjung%20ke%20workshop%20Bandung" target="_blank" rel="noopener" class="btn-beam">
                            <i class="fa-brands fa-whatsapp" style="color: var(--gold-bright);"></i>
                            <span>Jadwalkan Kunjungan via WA</span>
                        </a>
                        <a href="https://maps.google.com/?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222" target="_blank" rel="noopener" class="btn-glass">
                            <i class="fa-solid fa-diamond-turn-right"></i>
                            <span>Buka Petunjuk GPS</span>
                        </a>
                    </div>
                </div>

                <!-- Right Panel: Embedded Google Map + Quick RFQ Form -->
                <div class="workshop-map-card reveal-up">
                    <iframe class="workshop-map-frame"
                            src="https://maps.google.com/maps?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222&t=&z=16&ie=UTF8&iwloc=&output=embed"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Peta Lokasi Workshop PT Adam Jaya Enterprise Bandung"></iframe>

                    <form class="rfq-quick-form" onsubmit="submitQuickRfq(event)">
                        <div>
                            <span class="mono-tag" style="color: var(--gold-bright);">PERMINTAAN PENAWARAN CEPAT (RFQ)</span>
                            <h3 style="font-family: var(--font-display); font-size: 1.15rem; color: #FFFFFF; margin-top: 0.25rem;">
                                Kirim Rincian Kebutuhan ke Tim Teknis
                            </h3>
                        </div>

                        <div class="rfq-form-grid">
                            <input type="text" id="rfqName" class="dark-input" placeholder="Nama Anda / Perusahaan *" required aria-label="Nama Anda atau Perusahaan">
                            <select id="rfqCategory" class="dark-input" aria-label="Kategori Kebutuhan">
                                <option value="Paket Mesin Produksi Tahu">Paket Mesin Produksi Tahu</option>
                                <option value="Mesin Giling & Batu Corundum">Mesin Giling &amp; Batu Corundum</option>
                                <option value="Tahang Stainless SUS 304 & Ketel Uap">Tahang Stainless SUS 304 &amp; Ketel Uap</option>
                                <option value="Plastik Sablon & Mesin Sealer">Plastik Sablon &amp; Mesin Sealer</option>
                                <option value="Sparepart & Servis Mekanik">Sparepart &amp; Servis Mekanik</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-gold-tactile" style="width: 100%;">
                            <span>Minta Estimasi Harga Resmi via WhatsApp</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- ═══════════════════════════════════════════════════════════════════
         9. CORPORATE FOOTER WITH GIANT CROPPED WORDMARK
         ═══════════════════════════════════════════════════════════════════ -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-col">
                    <a href="#beranda" class="nav-brand" style="margin-bottom: 1rem;">
                        <img src="{{ asset('assets/adamjaya.png') }}" alt="Logo Adam Jaya" width="38" height="38">
                        <div>
                            <span class="nav-brand-title">PT ADAM JAYA ENTERPRISE</span>
                            <span class="nav-brand-sub">Industrial Food Machinery</span>
                        </div>
                    </a>
                    <p style="font-size: 0.86rem; line-height: 1.7; color: var(--fg-60);">
                        Produsen peralatan produksi tahu berstandar Food-Grade SUS 304 dan sistem kemasan plastik sablon terlengkap. Workshop bengkel manufaktur terpercaya di Bandung sejak 2002.
                    </p>
                </div>

                <div class="footer-col">
                    <h4>Lini Produksi</h4>
                    <ul class="footer-links">
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)">Mesin Giling Kedelai Presisi</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)">Tahang Stainless Steel SUS 304</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)">Ketel Uap Boiler &amp; Cetakan</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-plastik', null)">Plastik Kemasan Sablon PE/PP</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('sparepart', null)">Batu Gilingan Corundum &amp; Sparepart</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Navigasi &amp; Portal</h4>
                    <ul class="footer-links">
                        <li><a href="#beranda">Beranda Utama</a></li>
                        <li><a href="#katalog-stok">Master Stok &amp; Harga</a></li>
                        <li><a href="#keunggulan">Arsitektur Mutu SUS 304</a></li>
                        <li><a href="#testimoni">Bukti Fabrikasi &amp; Ulasan</a></li>
                        <li><a href="http://localhost/adamjaya-enterprise/login.php" target="_blank" rel="noopener" style="color: var(--gold-light);">Portal Enterprise B2B &rarr;</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Workshop Bandung</h4>
                    <div style="font-size: 0.85rem; line-height: 1.7;">
                        <p><strong style="color: #FFFFFF;">Jl. Aki Padma No.51</strong>, Babakan, Kec. Babakan Ciparay, Kota Bandung 40222</p>
                        <p style="margin-top: 0.45rem;"><strong style="color: #FFFFFF;">Operasional:</strong> <span style="color: var(--gold-light);">Senin – Jumat (07.00 – 18.00 WIB)</span></p>
                        <p style="margin-top: 0.45rem;"><strong style="color: #FFFFFF;">Hotline WA:</strong> 0812-2160-1558</p>
                    </div>
                </div>
            </div>

            <div class="footer-meta-bar">
                <span>&copy; {{ date('Y') }} PT Adam Jaya Enterprise. Hak Cipta Dilindungi.</span>
                <span>Google Verified Rating: 4.9 / 5.0 (4.211 Ulasan) &bull; Bandung Machine Workshop</span>
            </div>
        </div>

        <!-- Giant Cropped Signature Wordmark (premium-saas-web shared/components.md) -->
        <div class="footer-giant-wordmark" aria-hidden="true">ADAM JAYA</div>
    </footer>

    <!-- ═══════════════════════════════════════════════════════════════════
         10. FLOATING AI ADVISOR, SCROLL-TOP & PRODUCT / LIGHTBOX MODALS
         ═══════════════════════════════════════════════════════════════════ -->
    <div class="floating-assistant-trigger" onclick="toggleAssistantModal()" title="Konsultasi Mesin dengan Asisten AI">
        <div class="assistant-btn-circle">
            <i class="fa-solid fa-robot"></i>
            <div class="assistant-online-dot"></div>
        </div>
        <div class="assistant-callout-pill">
            <span>Asisten Teknis AI</span>
        </div>
    </div>

    <div class="assistant-modal-chat" id="machineAssistantModal">
        <div class="assistant-chat-header">
            <div style="display: flex; align-items: center; gap: 0.65rem;">
                <i class="fa-solid fa-robot" style="color: var(--gold-bright);"></i>
                <div>
                    <strong style="font-family: var(--font-display); font-size: 0.9rem; display: block;">Adam Jaya AI Advisor</strong>
                    <span class="mono-tag" style="font-size: 0.62rem; color: #10B981;">ONLINE &bull; REKOMENDASI KAPASITAS &amp; STOK</span>
                </div>
            </div>
            <div style="display: flex; gap: 0.4rem;">
                <button type="button" onclick="resetAssistantChat()" title="Reset Percakapan" aria-label="Reset Percakapan" style="color: var(--fg-60); padding: 0.3rem;"><i class="fa-solid fa-rotate-right"></i></button>
                <button type="button" onclick="toggleAssistantModal()" title="Tutup" aria-label="Tutup Chat" style="color: var(--fg-60); padding: 0.3rem;"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>

        <div class="assistant-chat-body" id="assistantChatBody"></div>

        <div class="assistant-quick-chips" id="assistantQuickChips">
            <button type="button" class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Rekomendasi mesin untuk 250 kg kedelai per hari')">Kapasitas 250 kg/hari</button>
            <button type="button" class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Berapa harga mesin giling kedelai?')">Harga Mesin Giling</button>
            <button type="button" class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Jam buka dan alamat workshop Adam Jaya')">Alamat &amp; Jam Buka</button>
        </div>

        <form class="assistant-input-bar" id="assistantChatForm" onsubmit="event.preventDefault(); submitAssistantInput();">
            <input type="text" id="assistantTextInput" class="assistant-text-input" placeholder="Tulis pertanyaan teknis Anda..." autocomplete="off" aria-label="Tulis pertanyaan untuk AI">
            <button type="submit" class="assistant-send-btn" id="assistantSendBtn" title="Kirim Pertanyaan" aria-label="Kirim">
                <i class="fa-solid fa-paper-plane"></i>
            </button>
        </form>
    </div>

    <button type="button" id="scrollTopBtn" class="scroll-top" onclick="scrollToTop()" title="Kembali ke atas" aria-label="Scroll ke atas">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Product Specification & Real Database Variants Modal -->
    <div class="modal-overlay" id="productModal" role="dialog" aria-modal="true" aria-labelledby="modalProductName">
        <div class="modal-box">
            <button type="button" class="modal-close" onclick="closeProductModal()" aria-label="Tutup"><i class="fa-solid fa-xmark"></i></button>
            <div style="margin-bottom: 1rem;">
                <span id="modalProductCategory" class="mono-tag" style="color: var(--wine);">KATEGORI</span>
                <h3 id="modalProductName" style="font-family: var(--font-display); font-size: 1.35rem; font-weight: 800; color: var(--ink-100); margin-top: 0.2rem;">Nama Produk</h3>
            </div>

            <p id="modalProductDesc" style="font-size: 0.88rem; color: var(--ink-60); line-height: 1.65; margin-bottom: 1rem;">Deskripsi produk.</p>

            <table class="spec-table">
                <tbody>
                    <tr>
                        <td>Penggerak / Daya</td>
                        <td id="modalSpecPower">-</td>
                    </tr>
                    <tr>
                        <td>Material Konstruksi</td>
                        <td id="modalSpecMaterial">-</td>
                    </tr>
                    <tr>
                        <td>Kapasitas / Varian</td>
                        <td id="modalSpecCapacity">-</td>
                    </tr>
                    <tr>
                        <td>Garansi &amp; Purna Jual</td>
                        <td id="modalSpecWarranty">-</td>
                    </tr>
                </tbody>
            </table>

            <div id="modalVariantsWrap" style="margin: 1.25rem 0; display: none;">
                <h4 class="mono-tag" style="color: var(--ink-100); margin-bottom: 0.55rem;">PILIHAN VARIAN UKURAN &amp; HARGA RESMI:</h4>
                <div style="max-height: 195px; overflow-y: auto; border: 1px solid var(--line-light); border-radius: 10px;">
                    <table class="spec-table" style="margin: 0;">
                        <thead>
                            <tr style="background: var(--light-0); border-bottom: 1px solid var(--line-light);">
                                <th style="padding: 0.6rem 0.85rem; font-size: 0.75rem; text-align: left; color: var(--ink-60);">Nama Jenis / Ukuran</th>
                                <th style="padding: 0.6rem 0.85rem; font-size: 0.75rem; text-align: right; color: var(--ink-60);">Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody id="modalVariantsBody"></tbody>
                    </table>
                </div>
            </div>

            <button type="button" onclick="submitModalWA()" class="btn-wine-tactile" style="width: 100%; margin-top: 0.75rem;">
                <i class="fa-brands fa-whatsapp"></i>
                <span>Dapatkan Penawaran Harga via WhatsApp</span>
            </button>
        </div>
    </div>

    <!-- Lightbox Image Modal -->
    <div class="modal-overlay" id="lightboxModal" onclick="closeLightbox()" role="dialog" aria-modal="true" aria-label="Perbesar Foto Dokumentasi">
        <div style="max-width: 840px; width: 92%; position: relative;" onclick="event.stopPropagation()">
            <button type="button" class="modal-close" onclick="closeLightbox()" style="top: -44px; right: 0; background: #FFFFFF;" aria-label="Tutup"><i class="fa-solid fa-xmark"></i></button>
            <img id="lightboxImg" src="" alt="Dokumentasi Fabrikasi Adam Jaya" style="width: 100%; border-radius: var(--r-card); border: 2px solid var(--gold);">
            <div id="lightboxCaption" style="color: #FFFFFF; text-align: center; margin-top: 0.85rem; font-family: var(--font-display); font-weight: 600; font-size: 0.96rem;"></div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════════════════════════════════
         11. INTERACTIVE ENGINE (PROGRESS-LOCKED SCROLL, SPOTLIGHT, CATALOG, AI)
         ═══════════════════════════════════════════════════════════════════ -->
    <script>
    // ── 1. Floating Pill Navbar & ScrollSpy ──
    const navWrap = document.getElementById('navWrap');
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    function handleGlobalScroll() {
        const y = window.scrollY;
        if (y > 40) {
            navWrap?.classList.add('scrolled');
        } else {
            navWrap?.classList.remove('scrolled');
        }

        if (y > 420) {
            scrollTopBtn?.classList.add('visible');
        } else {
            scrollTopBtn?.classList.remove('visible');
        }

        updateScrollSpy();
    }

    window.addEventListener('scroll', handleGlobalScroll, { passive: true });
    handleGlobalScroll();

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function toggleMobileDrawer() {
        const drawer = document.getElementById('mobileDrawer');
        const toggle = document.getElementById('mobileNavToggle');
        if (!drawer) return;
        const isOpen = drawer.classList.toggle('active');
        if (toggle) toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    }

    function updateScrollSpy() {
        const sections = document.querySelectorAll('section[id]');
        const scrollPos = window.scrollY + 140;
        sections.forEach(sec => {
            const top = sec.offsetTop;
            const height = sec.offsetHeight;
            const id = sec.getAttribute('id');
            const link = document.querySelector(`.nav-link[href="#${id}"]`);
            if (link && scrollPos >= top && scrollPos < top + height) {
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            }
        });
    }

    // ── 2. Cursor Spotlight on Bento Cards (premium-saas-web shared/components.md) ──
    document.querySelectorAll('.spot').forEach(card => {
        card.addEventListener('pointermove', e => {
            const r = card.getBoundingClientRect();
            card.style.setProperty('--x', (e.clientX - r.left) + 'px');
            card.style.setProperty('--y', (e.clientY - r.top) + 'px');
        });
    });

    // ── 3. Word-by-Word Scroll-Fill Statement (premium-saas-web shared/typography.md) ──
    function initScrollFillStatement() {
        const statement = document.getElementById('scrollFillStatement');
        if (!statement) return;

        // Wrap words in .w while preserving keyword classes
        const tokens = [];
        statement.childNodes.forEach(node => {
            if (node.nodeType === Node.TEXT_NODE) {
                node.textContent.split(/(\s+)/).forEach(part => {
                    if (part.trim().length > 0) {
                        tokens.push(`<span class="w">${part}</span>`);
                    } else {
                        tokens.push(part);
                    }
                });
            } else if (node.nodeType === Node.ELEMENT_NODE) {
                const cls = node.className;
                node.textContent.split(/(\s+)/).forEach(part => {
                    if (part.trim().length > 0) {
                        tokens.push(`<span class="w ${cls}">${part}</span>`);
                    } else {
                        tokens.push(part);
                    }
                });
            }
        });
        statement.innerHTML = tokens.join('');

        const wordSpans = Array.from(statement.querySelectorAll('.w'));
        function updateWordsOnScroll() {
            const r = statement.getBoundingClientRect();
            const progress = Math.min(1, Math.max(0, (window.innerHeight * 0.82 - r.top) / (r.height * 0.95)));
            const activeCount = Math.round(progress * wordSpans.length);
            wordSpans.forEach((w, idx) => w.classList.toggle('on', idx < activeCount));
        }

        window.addEventListener('scroll', updateWordsOnScroll, { passive: true });
        updateWordsOnScroll();
    }

    // ── 4. Progress-Locked Hero Machine Parallax (Creating-Oneshot-Hero-Landing-Pages) ──
    function initHeroScrollParallax() {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        const heroSection = document.getElementById('beranda');
        const machineImg = document.getElementById('heroMachineImg');
        if (!heroSection || !machineImg) return;

        window.addEventListener('scroll', () => {
            const rect = heroSection.getBoundingClientRect();
            if (rect.bottom < 0) return;
            const progress = Math.max(0, Math.min(1, -rect.top / Math.max(1, rect.height)));
            machineImg.style.transform = `translate3d(0, ${(progress * -22).toFixed(1)}px, 0)`;
        }, { passive: true });
    }

    // ── 5. Live Catalog Filter, Search & Sort Engine ($products) ──
    let activeFilterCat = 'all';
    const ITEMS_PER_PAGE = 8;
    let currentDisplayLimit = ITEMS_PER_PAGE;

    function filterCatalog(category, btn) {
        activeFilterCat = category;
        currentDisplayLimit = ITEMS_PER_PAGE;
        document.querySelectorAll('.filter-btn').forEach(b => {
            b.classList.toggle('active', b.dataset.filter === category);
        });
        if (btn) btn.classList.add('active');
        applyCatalogFilters();
    }

    function handleLiveSearch() {
        currentDisplayLimit = ITEMS_PER_PAGE;
        applyCatalogFilters();
    }

    function handleCatalogSort() {
        const sortValue = document.getElementById('catalogSortSelect').value;
        const grid = document.getElementById('catalogGrid');
        const cards = Array.from(grid.querySelectorAll('.product-card'));

        cards.sort((a, b) => {
            const priceA = parseInt(a.dataset.price || '0', 10);
            const priceB = parseInt(b.dataset.price || '0', 10);
            const idA = parseInt(a.dataset.id || '0', 10);
            const idB = parseInt(b.dataset.id || '0', 10);
            const orderA = parseInt(a.dataset.order || '0', 10);
            const orderB = parseInt(b.dataset.order || '0', 10);

            if (sortValue === 'harga-asc') return priceA - priceB;
            if (sortValue === 'harga-desc') return priceB - priceA;
            if (sortValue === 'terbaru') return idB - idA;
            return orderA - orderB;
        });

        cards.forEach(card => grid.appendChild(card));
        currentDisplayLimit = ITEMS_PER_PAGE;
        applyCatalogFilters();
    }

    function loadMoreCatalog() {
        currentDisplayLimit += ITEMS_PER_PAGE;
        applyCatalogFilters();
    }

    function applyCatalogFilters() {
        const query = (document.getElementById('catalogSearchInput')?.value || '').toLowerCase().trim();
        const cards = document.querySelectorAll('#catalogGrid .product-card');
        const matchingCards = [];

        cards.forEach(card => {
            const cat = card.dataset.cat;
            const name = (card.dataset.name || '').toLowerCase();
            const textContent = card.innerText.toLowerCase();

            const matchCat = (activeFilterCat === 'all' || cat === activeFilterCat);
            const matchSearch = (query === '' || name.includes(query) || textContent.includes(query));

            if (matchCat && matchSearch) {
                matchingCards.push(card);
            } else {
                card.style.display = 'none';
            }
        });

        matchingCards.forEach((card, index) => {
            card.style.display = index < currentDisplayLimit ? 'flex' : 'none';
        });

        const totalMatching = matchingCards.length;
        const emptyState = document.getElementById('catalogEmptyState');
        const loadMoreWrap = document.getElementById('catalogLoadMoreWrap');
        const btnLoadMore = document.getElementById('btnLoadMore');
        const loadMoreCountBadge = document.getElementById('loadMoreCountBadge');
        const catalogAllLoadedText = document.getElementById('catalogAllLoadedText');
        const totalVisibleBadge = document.getElementById('totalVisibleBadge');

        if (totalMatching === 0) {
            emptyState?.classList.add('active');
            if (loadMoreWrap) loadMoreWrap.style.display = 'none';
        } else {
            emptyState?.classList.remove('active');
            if (loadMoreWrap) {
                loadMoreWrap.style.display = 'block';
                if (currentDisplayLimit < totalMatching) {
                    btnLoadMore.style.display = 'inline-flex';
                    const remaining = totalMatching - currentDisplayLimit;
                    loadMoreCountBadge.textContent = `(+${Math.min(ITEMS_PER_PAGE, remaining)})`;
                    catalogAllLoadedText.style.display = 'none';
                } else {
                    btnLoadMore.style.display = 'none';
                    if (totalMatching > ITEMS_PER_PAGE) {
                        catalogAllLoadedText.style.display = 'block';
                        totalVisibleBadge.textContent = totalMatching;
                    } else {
                        catalogAllLoadedText.style.display = 'none';
                    }
                }
            }
        }
    }

    function resetCatalogSearch() {
        document.getElementById('catalogSearchInput').value = '';
        document.getElementById('catalogSortSelect').value = 'rekomendasi';
        filterCatalog('all', document.querySelector('.filter-btn[data-filter="all"]'));
        handleCatalogSort();
    }

    // ── 6. Rolling Statistics Counter Observer ──
    function initStatsCounter() {
        const statCounters = document.querySelectorAll('.stat-counter');
        if (!statCounters.length) return;
        let hasAnimated = false;

        function runCountUp() {
            if (hasAnimated) return;
            hasAnimated = true;
            statCounters.forEach(counter => {
                const target = parseInt(counter.dataset.target || '0', 10);
                const suffix = counter.dataset.suffix || '';
                const format = counter.dataset.format || '';
                const duration = 1600;
                let startTimestamp = null;

                function step(timestamp) {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    const easeProgress = 1 - Math.pow(1 - progress, 3);
                    const current = Math.round(target * easeProgress);
                    const formatted = format === 'thousand' ? new Intl.NumberFormat('id-ID').format(current) : current;
                    counter.textContent = `${formatted}${suffix}`;
                    if (progress < 1) window.requestAnimationFrame(step);
                }
                window.requestAnimationFrame(step);
            });
        }

        if ('IntersectionObserver' in window) {
            const obs = new IntersectionObserver(entries => {
                if (entries.some(e => e.isIntersecting)) {
                    runCountUp();
                    obs.disconnect();
                }
            }, { threshold: 0.25 });
            const el = document.getElementById('whyStatsRibbon');
            if (el) obs.observe(el);
        }
    }

    // ── 7. Product Detail Modal ($products) ──
    const catalogMaster = @json($products);
    let selectedProductName = '';

    function showCatalogProductModal(id) {
        const item = catalogMaster.find(p => p.id == id);
        if (!item) return;

        selectedProductName = item.nama_barang;
        document.getElementById('modalProductName').textContent = item.nama_barang;
        document.getElementById('modalProductCategory').textContent = item.category_label || 'Peralatan Pabrik';

        const nameLower = item.nama_barang.toLowerCase();
        document.getElementById('modalProductDesc').textContent = `Produk ${item.nama_barang} resmi dari Bengkel Manufaktur PT Adam Jaya Enterprise Bandung. Dikerjakan langsung tangan pertama dengan presisi tinggi dan mutu teruji.`;
        document.getElementById('modalSpecPower').textContent = item.category === 'mesin-tahu' ? 'Dinamo Listrik / Mesin Penggerak' : (item.category === 'mesin-kemasan' ? 'Daya Pemanas Otomatis' : 'Manual / Sesuai Spesifikasi');
        document.getElementById('modalSpecMaterial').textContent = (nameLower.includes('sten') || nameLower.includes('tahang')) ? 'Stainless Steel SUS 304 Food-Grade' : (nameLower.includes('jati') ? 'Kayu Jati Asli Pilihan' : 'Baja Padat / Standar Manufaktur');
        document.getElementById('modalSpecCapacity').textContent = item.variants && item.variants.length ? `${item.variants.length} Pilihan Varian` : 'Sesuai Spesifikasi';
        document.getElementById('modalSpecWarranty').textContent = 'Garansi Servis Resmi Bengkel & Sparepart Ready';

        const variantsWrap = document.getElementById('modalVariantsWrap');
        const variantsBody = document.getElementById('modalVariantsBody');
        if (variantsWrap && variantsBody) {
            if (item.variants && item.variants.length > 0) {
                variantsWrap.style.display = 'block';
                variantsBody.innerHTML = item.variants.map(v => {
                    const priceFormatted = v.harga > 0 ? `Rp ${new Intl.NumberFormat('id-ID').format(v.harga)} / ${v.satuan || 'unit'}` : 'Hubungi CS';
                    const stokBadge = v.stok > 0 ? `<span style="font-family:var(--font-mono); font-size:0.68rem; background:rgba(16,185,129,0.12); color:#059669; padding:0.1rem 0.4rem; border-radius:4px; margin-left:0.35rem;">Stok: ${v.stok}</span>` : '';
                    return `<tr>
                        <td style="padding:0.55rem 0.85rem; font-weight:600; color:var(--ink-100);">${v.nama_jenis} ${stokBadge}</td>
                        <td style="padding:0.55rem 0.85rem; text-align:right; font-weight:700; color:var(--wine);">${priceFormatted}</td>
                    </tr>`;
                }).join('');
            } else {
                variantsWrap.style.display = 'none';
                variantsBody.innerHTML = '';
            }
        }
        document.getElementById('productModal').classList.add('active');
    }

    function closeProductModal() {
        document.getElementById('productModal').classList.remove('active');
    }

    function submitModalWA() {
        closeProductModal();
        const msg = encodeURIComponent(`Halo PT Adam Jaya Enterprise Bandung,\nSaya tertarik memesan / konsultasi produk:\n- Produk: ${selectedProductName}\n\nMohon info ketersediaan stok & harga terbaik.`);
        window.open(`https://wa.me/6281221601558?text=${msg}`, '_blank');
    }

    // ── 8. FAQ Accordion (grid-template-rows 0fr -> 1fr) ──
    function toggleFaqRow(btn) {
        const row = btn.parentElement;
        const isActive = row.classList.contains('active');
        document.querySelectorAll('.faq-row').forEach(r => {
            r.classList.remove('active');
            r.querySelector('.faq-trigger')?.setAttribute('aria-expanded', 'false');
            const sym = r.querySelector('.faq-plus-circle');
            if (sym) sym.innerHTML = '+';
        });
        if (!isActive) {
            row.classList.add('active');
            btn.setAttribute('aria-expanded', 'true');
            const sym = row.querySelector('.faq-plus-circle');
            if (sym) sym.innerHTML = '&minus;';
        }
    }

    // ── 9. Lightbox & Quick RFQ Form ──
    function openLightbox(imgSrc, caption) {
        document.getElementById('lightboxImg').src = imgSrc;
        document.getElementById('lightboxCaption').innerHTML = caption;
        document.getElementById('lightboxModal').classList.add('active');
    }

    function closeLightbox() {
        document.getElementById('lightboxModal').classList.remove('active');
    }

    function submitQuickRfq(e) {
        e.preventDefault();
        const name = document.getElementById('rfqName').value.trim();
        const cat = document.getElementById('rfqCategory').value;
        const msg = `Halo PT Adam Jaya Enterprise Bandung,\nSaya *${name}* ingin meminta estimasi penawaran harga untuk:\n- Kategori: *${cat}*\n\nMohon informasi spesifikasi dan katalog harganya.`;
        window.open(`https://wa.me/6281221601558?text=${encodeURIComponent(msg)}`, '_blank');
    }

    // ── 10. Floating AI Machine Advisor Engine ──
    let assistantChatHistory = [];
    let isAssistantReplying = false;

    function toggleAssistantModal() {
        const modal = document.getElementById('machineAssistantModal');
        if (!modal) return;
        const isOpen = modal.classList.toggle('active');
        if (isOpen && assistantChatHistory.length === 0) {
            renderAssistantWelcome();
        }
    }

    function resetAssistantChat() {
        assistantChatHistory = [];
        isAssistantReplying = false;
        renderAssistantWelcome();
    }

    function renderAssistantWelcome() {
        const body = document.getElementById('assistantChatBody');
        if (!body) return;
        const welcome = `<strong>Halo! Saya Adam Jaya AI</strong> — Asisten Teknis Mesin Tahu.<br>Siap membantu cek <strong>stok &amp; harga</strong>, <strong>rekomendasi kapasitas</strong>, dan <strong>layanan mekanik 24 jam</strong>.`;
        body.innerHTML = `<div class="assistant-bubble-bot">${welcome}</div>`;
        assistantChatHistory.push({ role: 'bot', text: welcome });
    }

    function sendAssistantQuickPrompt(promptText) {
        const input = document.getElementById('assistantTextInput');
        if (input) {
            input.value = promptText;
            submitAssistantInput();
        }
    }

    async function submitAssistantInput() {
        if (isAssistantReplying) return;
        const input = document.getElementById('assistantTextInput');
        const body = document.getElementById('assistantChatBody');
        if (!input || !body) return;
        const message = input.value.trim();
        if (!message) return;

        input.value = '';
        isAssistantReplying = true;

        const userDiv = document.createElement('div');
        userDiv.className = 'assistant-bubble-user';
        userDiv.innerText = message;
        body.appendChild(userDiv);
        assistantChatHistory.push({ role: 'user', text: message });
        body.scrollTop = body.scrollHeight;

        try {
            const response = await fetch('/api/chat-ai', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ message, history: assistantChatHistory.slice(-6) })
            });
            const data = await response.json();
            const replyText = (data.reply || 'Silakan hubungi WhatsApp resmi kami di 0812-2160-1558.').replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>').replace(/\n/g, '<br>');
            const botDiv = document.createElement('div');
            botDiv.className = 'assistant-bubble-bot';
            botDiv.innerHTML = replyText;
            body.appendChild(botDiv);
            assistantChatHistory.push({ role: 'bot', text: replyText });
        } catch (err) {
            const errDiv = document.createElement('div');
            errDiv.className = 'assistant-bubble-bot';
            errDiv.innerHTML = `Hubungi langsung Kepala Mekanik kami via WhatsApp: <a href="https://wa.me/6281221601558" target="_blank" style="color:var(--gold-bright); text-decoration:underline;">0812-2160-1558</a>`;
            body.appendChild(errDiv);
        } finally {
            isAssistantReplying = false;
            body.scrollTop = body.scrollHeight;
        }
    }

    // ── 11. Initialize Scroll Reveal & Engines on DOMContentLoaded ──
    document.addEventListener('DOMContentLoaded', () => {
        initScrollFillStatement();
        initHeroScrollParallax();
        initStatsCounter();
        applyCatalogFilters();

        const revealElems = document.querySelectorAll('.reveal-up');
        if ('IntersectionObserver' in window) {
            const revObs = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
            revealElems.forEach(el => revObs.observe(el));
        } else {
            revealElems.forEach(el => el.classList.add('is-visible'));
        }
    });

    document.getElementById('productModal')?.addEventListener('click', function(e) {
        if (e.target === this) closeProductModal();
    });
    </script>
</body>
</html>
