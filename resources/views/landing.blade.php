<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Adam Jaya Enterprise — Manufaktur Mesin Pengolah Kedelai &amp; Peralatan Tahu (Bandung)</title>
    <meta name="description" content="PT Adam Jaya Enterprise — Produsen dan bengkel manufaktur spesialis mesin pengolah kedelai, tahang stainless SUS 304 food-grade, ketel uap, dan plastik kemasan sablon di Bandung.">
    <meta name="keywords" content="mesin tahu bandung, pabrikasi mesin tahu, adam jaya enterprise, mesin giling kedelai, tahang stainless SUS 304, cetakan tahu jati, plastik sablon tahu">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/adamjaya.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/adamjaya.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/adamjaya.png') }}">

    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Refined Executive Stylesheet -->
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
         1. STICKY NAVBAR
         ═══════════════════════════════════════════════════════════════════ -->
    <header class="site-header" id="siteHeader">
        <div class="container navbar">
            <a href="#beranda" class="nav-brand">
                <img src="{{ asset('assets/adamjaya.png') }}" alt="Logo PT Adam Jaya Enterprise" width="40" height="40">
                <div>
                    <span class="nav-brand-name">ADAM JAYA</span>
                    <span class="nav-brand-sub">Enterprise Manufacturing</span>
                </div>
            </a>

            <nav aria-label="Navigasi Utama">
                <ul class="nav-links">
                    <li><a href="#beranda" class="nav-link active">Beranda</a></li>
                    <li><a href="#katalog-stok" class="nav-link">Katalog Produk</a></li>
                    <li><a href="#keunggulan" class="nav-link">Keunggulan &amp; Proses</a></li>
                    <li><a href="#testimoni" class="nav-link">Dokumentasi &amp; Ulasan</a></li>
                    <li><a href="#faq" class="nav-link">Tanya Jawab</a></li>
                    <li><a href="#lokasi" class="nav-link">Lokasi Workshop</a></li>
                </ul>
            </nav>

            <div class="nav-actions">
                <a href="http://localhost/adamjaya-enterprise/login.php" target="_blank" rel="noopener" class="nav-portal-link" title="Portal Internal Enterprise">
                    <i class="fa-solid fa-lock"></i>
                    <span>Portal B2B</span>
                </a>
                <a href="https://wa.me/6281221601558?text=Halo%20PT%20Adam%20Jaya%20Enterprise,%20saya%20ingin%20konsultasi%20peralatan%20produksi%20tahu" target="_blank" rel="noopener" class="btn btn-gold" style="padding: 0.55rem 1.1rem; min-height: 40px; font-size: 0.84rem;">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Hubungi Kami</span>
                </a>
                <button type="button" class="mobile-toggle" id="mobileNavToggle" onclick="toggleMobileDrawer()" aria-label="Buka Menu" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Drawer -->
        <div class="mobile-drawer" id="mobileDrawer">
            <div class="container">
                <ul>
                    <li><a href="#beranda" onclick="toggleMobileDrawer()">Beranda</a></li>
                    <li><a href="#katalog-stok" onclick="toggleMobileDrawer()">Katalog Produk</a></li>
                    <li><a href="#keunggulan" onclick="toggleMobileDrawer()">Keunggulan &amp; Proses Fabrikasi</a></li>
                    <li><a href="#testimoni" onclick="toggleMobileDrawer()">Dokumentasi &amp; Ulasan Klien</a></li>
                    <li><a href="#faq" onclick="toggleMobileDrawer()">Tanya Jawab (FAQ)</a></li>
                    <li><a href="#lokasi" onclick="toggleMobileDrawer()">Lokasi Workshop Bandung</a></li>
                </ul>
                <div style="display: flex; flex-direction: column; gap: 0.6rem;">
                    <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20ingin%20konsultasi%20mesin" target="_blank" rel="noopener" class="btn btn-gold" style="width: 100%;">
                        <i class="fa-brands fa-whatsapp"></i> Konsultasi via WhatsApp
                    </a>
                    <a href="http://localhost/adamjaya-enterprise/login.php" target="_blank" rel="noopener" class="btn btn-outline-light" style="width: 100%;">
                        <i class="fa-solid fa-lock"></i> Portal Enterprise B2B
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- ═══════════════════════════════════════════════════════════════════
             2. HERO SECTION
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="hero-section" id="beranda">
            <div class="hero-ambient-glow" aria-hidden="true"></div>

            <div class="container">
                <div class="hero-grid">
                    <!-- Left Column: Value Proposition -->
                    <div class="hero-content">
                        <span class="hero-eyebrow">Bengkel Manufaktur Resmi &bull; Bandung</span>

                        <h1 class="hero-title">
                            Mesin Produksi Tahu <span class="gold-accent">Presisi, Higienis &amp; Efisien</span>
                        </h1>

                        <p class="hero-subtitle">
                            Tingkatkan hasil ekstraksi sari kedelai dan percepat ritme operasional pabrik Anda dengan mesin manufaktur berstandar Food-Grade SUS 304 langsung dari tangan pertama PT Adam Jaya Enterprise.
                        </p>

                        <div class="hero-cta-group">
                            <a href="https://wa.me/6281221601558?text=Halo%20PT%20Adam%20Jaya%20Enterprise,%20saya%20ingin%20konsultasi%20pemesanan%20mesin%20dan%20peralatan%20tahu" target="_blank" rel="noopener" class="btn btn-gold">
                                <i class="fa-brands fa-whatsapp"></i>
                                <span>Konsultasi Mesin via WhatsApp</span>
                            </a>
                            <a href="#katalog-stok" class="btn btn-outline-light">
                                <span>Lihat Katalog &amp; Harga</span>
                            </a>
                        </div>

                        <div class="hero-trust-points">
                            <span><i class="fa-solid fa-shield-halved"></i> Material Food-Grade SUS 304</span>
                            <span><i class="fa-solid fa-screwdriver-wrench"></i> Layanan Mekanik 24 Jam</span>
                            <span><i class="fa-solid fa-award"></i> Garansi Bengkel Resmi</span>
                        </div>
                    </div>

                    <!-- Right Column: Clean Machine Visual -->
                    <div class="hero-visual">
                        <div class="hero-visual-stage">
                            <img src="{{ asset('assets/hero_machine_transparent.png') }}"
                                 alt="Unit Mesin Manufaktur Pengolah Kedelai Stainless Steel SUS 304 PT Adam Jaya Enterprise"
                                 class="hero-machine-img"
                                 width="400"
                                 height="370">
                            <div class="hero-machine-caption">
                                <span><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-right: 0.35rem;"></i> Perakitan Tangan Pertama</span>
                                <span>Uji Kalibrasi Putaran Presisi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4-Column Key Statistics Bar -->
                <div class="hero-metrics-bar" id="whyStatsRibbon">
                    <div class="hero-metric-item">
                        <span class="hero-metric-val stat-counter" data-target="24" data-suffix="+ Tahun">24+ Tahun</span>
                        <span class="hero-metric-label">Pengalaman Manufaktur Mesin</span>
                    </div>
                    <div class="hero-metric-item">
                        <span class="hero-metric-val stat-counter" data-target="4200" data-suffix="+" data-format="thousand">4.200+</span>
                        <span class="hero-metric-label">Unit Mesin Terdistribusi</span>
                    </div>
                    <div class="hero-metric-item">
                        <span class="hero-metric-val stat-counter" data-target="100" data-suffix="%">100%</span>
                        <span class="hero-metric-label">Standar Stainless SUS 304</span>
                    </div>
                    <div class="hero-metric-item">
                        <span class="hero-metric-val">4.9 / 5.0</span>
                        <span class="hero-metric-label">Rating Google (4.211 Ulasan)</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             3. PARTNER TRUST BAR
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="partner-bar" aria-label="Mitra Industri">
            <div class="container partner-bar-inner">
                <p class="partner-bar-title">Dipercaya oleh Sentra Industri Pengolahan Tahu &amp; Kemasan di Indonesia</p>

                <div class="partner-marquee">
                    <div class="partner-track">
                        <div class="partner-item">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Tahu Yun Sen</span>
                            <span class="partner-sector">(Bandung &bull; Est. 1938)</span>
                        </div>
                        <div class="partner-item">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Tahu Susu Lembang</span>
                            <span class="partner-sector">(Sentra Kuliner Jawa Barat)</span>
                        </div>
                        <div class="partner-item">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Pabrik Tahu Lestari Jaya</span>
                            <span class="partner-sector">(Kapasitas 500 kg/Hari)</span>
                        </div>
                        <div class="partner-item">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Sumedang Mandiri</span>
                            <span class="partner-sector">(Produsen Tahu Sumedang)</span>
                        </div>
                        <div class="partner-item">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Sentosa Makmur Kedelai</span>
                            <span class="partner-sector">(Distribusi Bahan Baku)</span>
                        </div>
                        <div class="partner-item">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Prima Packaging</span>
                            <span class="partner-sector">(Kemasan Plastik Cimahi)</span>
                        </div>
                        <div class="partner-item">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Berkah Food Indo</span>
                            <span class="partner-sector">(Pabrik Semi-Otomatis)</span>
                        </div>
                        <div class="partner-item">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Karya Tahu Nusantara</span>
                            <span class="partner-sector">(Distribusi Nasional)</span>
                        </div>

                        <!-- Duplicate for seamless loop -->
                        <div class="partner-item" aria-hidden="true">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Tahu Yun Sen</span>
                            <span class="partner-sector">(Bandung &bull; Est. 1938)</span>
                        </div>
                        <div class="partner-item" aria-hidden="true">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Tahu Susu Lembang</span>
                            <span class="partner-sector">(Sentra Kuliner Jawa Barat)</span>
                        </div>
                        <div class="partner-item" aria-hidden="true">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Pabrik Tahu Lestari Jaya</span>
                            <span class="partner-sector">(Kapasitas 500 kg/Hari)</span>
                        </div>
                        <div class="partner-item" aria-hidden="true">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Sumedang Mandiri</span>
                            <span class="partner-sector">(Produsen Tahu Sumedang)</span>
                        </div>
                        <div class="partner-item" aria-hidden="true">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Sentosa Makmur Kedelai</span>
                            <span class="partner-sector">(Distribusi Bahan Baku)</span>
                        </div>
                        <div class="partner-item" aria-hidden="true">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Prima Packaging</span>
                            <span class="partner-sector">(Kemasan Plastik Cimahi)</span>
                        </div>
                        <div class="partner-item" aria-hidden="true">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Berkah Food Indo</span>
                            <span class="partner-sector">(Pabrik Semi-Otomatis)</span>
                        </div>
                        <div class="partner-item" aria-hidden="true">
                            <span class="partner-dot"></span>
                            <span class="partner-name">Karya Tahu Nusantara</span>
                            <span class="partner-sector">(Distribusi Nasional)</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             4. MASTER KATALOG & REAL-TIME STOCK FILTER ($products)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="catalog-section" id="katalog-stok">
            <div class="container">
                <div class="section-head-split reveal">
                    <div>
                        <span class="section-label">Katalog Inventaris Resmi</span>
                        <h2 class="section-title">Master Katalog &amp; Spesifikasi Produk</h2>
                    </div>
                    <p class="section-desc">
                        Peralatan pengolah kedelai, mesin giling presisi, tahang stainless SUS 304, suku cadang asli, hingga plastik kemasan sablon langsung dari bengkel kami.
                    </p>
                </div>

                <!-- Search, Sort & Filter Toolbar -->
                <div class="catalog-toolbar reveal">
                    <div class="toolbar-top">
                        <div class="search-box">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" id="catalogSearchInput" placeholder="Cari nama mesin, tahang stainless, sparepart, atau plastik sablon..." oninput="handleLiveSearch()" aria-label="Cari produk">
                        </div>

                        <div class="sort-box">
                            <label for="catalogSortSelect">Urutkan:</label>
                            <select id="catalogSortSelect" onchange="handleCatalogSort()">
                                <option value="rekomendasi">Rekomendasi</option>
                                <option value="harga-asc">Harga Terendah</option>
                                <option value="harga-desc">Harga Tertinggi</option>
                                <option value="terbaru">Terbaru</option>
                            </select>
                        </div>
                    </div>

                    <div class="toolbar-filters" role="tablist" aria-label="Filter Kategori Produk">
                        <button type="button" class="filter-btn active" data-filter="all" onclick="filterCatalog('all', this)">
                            <span>Semua</span>
                            <span class="filter-count" id="countAll">{{ count($products) }}</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="mesin-tahu" onclick="filterCatalog('mesin-tahu', this)">
                            <span>Mesin &amp; Produksi Tahu</span>
                            <span class="filter-count" id="countTahu">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-tahu')) }}</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="mesin-plastik" onclick="filterCatalog('mesin-plastik', this)">
                            <span>Plastik Sablon</span>
                            <span class="filter-count" id="countPlastik">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-plastik')) }}</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="mesin-kemasan" onclick="filterCatalog('mesin-kemasan', this)">
                            <span>Mesin Kemasan</span>
                            <span class="filter-count" id="countKemasan">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-kemasan')) }}</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="sparepart" onclick="filterCatalog('sparepart', this)">
                            <span>Suku Cadang &amp; Alat</span>
                            <span class="filter-count" id="countSparepart">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'sparepart')) }}</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="lainnya" onclick="filterCatalog('lainnya', this)">
                            <span>Lainnya</span>
                            <span class="filter-count" id="countLainnya">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'lainnya')) }}</span>
                        </button>
                    </div>
                </div>

                <!-- 4-Column Uniform Product Grid -->
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
                            <div class="product-media">
                                @if($hasImg)
                                    <img src="{{ $imgSrc }}" alt="{{ $item['nama_barang'] }} — PT Adam Jaya Enterprise" loading="lazy" width="300" height="225">
                                @else
                                    <div class="product-placeholder">
                                        <i class="fa-solid {{ ($item['category'] ?? '') === 'mesin-plastik' ? 'fa-boxes-packing' : (($item['category'] ?? '') === 'mesin-tahu' ? 'fa-gears' : 'fa-screwdriver-wrench') }}"></i>
                                        <span>{{ $item['category_label'] ?? 'Peralatan Pabrik' }}</span>
                                    </div>
                                @endif
                                <span class="product-tag-variant">
                                    {{ $variantsCount > 1 ? $variantsCount . ' Varian' : 'Tersedia' }}
                                </span>
                            </div>

                            <div class="product-content">
                                <span class="product-category">{{ $item['category_label'] ?? 'Peralatan Produksi' }}</span>
                                <h3 class="product-title" title="{{ $item['nama_barang'] }}">{{ $item['nama_barang'] }}</h3>
                                <p class="product-sub">
                                    @if(!empty($item['variants']))
                                        Varian: {{ implode(', ', array_slice(array_column($item['variants'], 'nama_jenis'), 0, 3)) }}{{ count($item['variants']) > 3 ? '...' : '' }}
                                    @else
                                        Standar fabrikasi bengkel resmi PT Adam Jaya Enterprise.
                                    @endif
                                </p>

                                <div class="product-price-box">
                                    <span class="product-price-label">{{ !empty($item['min_price']) && $item['min_price'] > 0 && $item['min_price'] != $item['max_price'] ? 'Rentang Harga' : 'Mulai dari' }}</span>
                                    <span class="product-price-val">{{ $priceDisplay }}</span>
                                </div>

                                <div class="product-btns">
                                    <button type="button" class="btn btn-outline-dark" onclick="showCatalogProductModal({{ $item['id'] }})">
                                        <span>Detail</span>
                                    </button>
                                    <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20tanya%20stok%20dan%20harga%20{{ urlencode($item['nama_barang']) }}" target="_blank" rel="noopener" class="btn btn-wine">
                                        <i class="fa-brands fa-whatsapp"></i>
                                        <span>Pesan</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Empty Search State -->
                <div class="catalog-empty" id="catalogEmptyState">
                    <h3 style="font-family: var(--font-head); font-size: 1.2rem; color: var(--navy); margin-bottom: 0.4rem;">Produk Tidak Ditemukan</h3>
                    <p style="color: var(--ink-secondary); max-width: 460px; margin: 0 auto 1.2rem; font-size: 0.92rem;">
                        Kata kunci pencarian Anda belum cocok dengan daftar produk. Kami juga melayani pembuatan mesin dan peralatan dengan ukuran custom.
                    </p>
                    <button type="button" class="btn btn-wine" onclick="resetCatalogSearch()">
                        <span>Tampilkan Semua Produk</span>
                    </button>
                </div>

                <!-- Load More Button -->
                <div id="catalogLoadMoreWrap" style="text-align: center; margin-top: 2.25rem;">
                    <button type="button" class="btn btn-outline-dark" id="btnLoadMore" onclick="loadMoreCatalog()" style="padding: 0.78rem 1.85rem;">
                        <span>Tampilkan Produk Lainnya</span>
                        <strong id="loadMoreCountBadge" style="color: var(--wine);">(+8)</strong>
                    </button>
                    <p id="catalogAllLoadedText" style="display: none; font-size: 0.85rem; color: var(--ink-muted); margin-top: 0.85rem;">
                        Menampilkan seluruh <strong id="totalVisibleBadge">0</strong> produk pada kategori ini.
                    </p>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             5. KEUNGGULAN & PROSES FABRIKASI
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="advantage-section" id="keunggulan">
            <div class="container">
                <div class="section-head-split reveal">
                    <div>
                        <span class="section-label">Keunggulan Manufaktur</span>
                        <h2 class="section-title">Kenapa Memilih Bengkel Adam Jaya?</h2>
                    </div>
                    <p class="section-desc">
                        Produsen peralatan pengolah kedelai tangan pertama di Bandung dengan rekam jejak puluhan tahun dan komitmen penuh pada kelancaran operasional mitra.
                    </p>
                </div>

                <!-- 4 Core Differentiators Grid (2x2) -->
                <div class="advantage-grid">
                    <article class="advantage-card reveal">
                        <div>
                            <div class="advantage-head">
                                <div class="advantage-icon"><i class="fa-solid fa-industry"></i></div>
                                <h3>Pabrikasi Tangan Pertama (Factory Direct)</h3>
                            </div>
                            <p>
                                Seluruh proses dikerjakan langsung di bengkel resmi kami di Babakan Ciparay, Bandung—tanpa perantara maupun markup distributor, serta dapat menyesuaikan dimensi sesuai kapasitas ruang pabrik Anda.
                            </p>
                        </div>
                        <span class="advantage-Highlight">
                            <i class="fa-solid fa-circle-check"></i> Harga Bengkel Resmi &amp; Bisa Custom Spesifikasi
                        </span>
                    </article>

                    <article class="advantage-card reveal">
                        <div>
                            <div class="advantage-head">
                                <div class="advantage-icon"><i class="fa-solid fa-shield-halved"></i></div>
                                <h3>Material Food-Grade Stainless SUS 304</h3>
                            </div>
                            <p>
                                Menggunakan plat baja nirkarat SUS 304 murni dengan pengelasan gas Argon presisi yang tahan terhadap korosi air asam cuka tahu serta suhu uap bertekanan tinggi untuk pemakaian jangka panjang.
                            </p>
                        </div>
                        <span class="advantage-Highlight">
                            <i class="fa-solid fa-circle-check"></i> Higienis, Anti-Karat &amp; Konstruksi Las Rapat
                        </span>
                    </article>

                    <article class="advantage-card reveal">
                        <div>
                            <div class="advantage-head">
                                <div class="advantage-icon"><i class="fa-solid fa-gears"></i></div>
                                <h3>Kalibrasi Putaran &amp; Ekstraksi Maksimal</h3>
                            </div>
                            <p>
                                Setiap poros mesin giling dan batu corundum melewati uji putaran (balancing) bebas getaran. Kerapatan batu yang presisi menghasilkan ampas kedelai lebih kering dan volume sari tahu lebih optimal.
                            </p>
                        </div>
                        <span class="advantage-Highlight">
                            <i class="fa-solid fa-circle-check"></i> Rendemen Sari Tinggi &amp; Minim Getaran
                        </span>
                    </article>

                    <article class="advantage-card reveal">
                        <div>
                            <div class="advantage-head">
                                <div class="advantage-icon"><i class="fa-solid fa-headset"></i></div>
                                <h3>Servis Mekanik 24 Jam &amp; Suku Cadang Lengkap</h3>
                            </div>
                            <p>
                                Suku cadang seperti batu gilingan corundum, bearing, vanbelt, puli, kran uap, hingga kain saring selalu tersedia di workshop kami, didukung tim mekanik yang siap menangani kendala teknis kapan saja.
                            </p>
                        </div>
                        <span class="advantage-Highlight">
                            <i class="fa-solid fa-circle-check"></i> Garansi Servis Resmi &amp; Sparepart Ready Stock
                        </span>
                    </article>
                </div>

                <!-- 4-Step Fabrication Process Box -->
                <div class="process-box reveal" id="proyek">
                    <div style="max-width: 620px;">
                        <span class="section-label on-dark">Standar Pengerjaan Workshop</span>
                        <h3 class="section-title on-dark" style="font-size: clamp(1.45rem, 2.4vw, 1.95rem);">
                            4 Tahapan Fabrikasi &amp; Kontrol Kualitas
                        </h3>
                    </div>

                    <div class="process-grid">
                        <div class="process-step">
                            <span class="process-num">TAHAP 01</span>
                            <h4>Konsultasi &amp; Desain</h4>
                            <p>Penyesuaian kapasitas giling (100–500 kg/hari) dan ukuran alat dengan tata letak ruang produksi Anda.</p>
                        </div>
                        <div class="process-step">
                            <span class="process-num">TAHAP 02</span>
                            <h4>Bubut &amp; Rangka Baja</h4>
                            <p>Pemotongan material dan pembubutan poros as presisi tinggi agar putaran mesin stabil tanpa oleng.</p>
                        </div>
                        <div class="process-step">
                            <span class="process-num">TAHAP 03</span>
                            <h4>Pengelasan SUS 304</h4>
                            <p>Pengelasan argon berstandar food-grade yang rapi, anti-bocor, dan tahan korosi air asam cuka tahu.</p>
                        </div>
                        <div class="process-step">
                            <span class="process-num">TAHAP 04</span>
                            <h4>Uji Jalan &amp; Pengiriman</h4>
                            <p>Uji coba putaran nonstop 2 jam di bengkel sebelum dikemas palet kayu kokoh ke seluruh Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             6. DOKUMENTASI BENGKEL & TESTIMONI PELANGGAN
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="testimonials-section" id="testimoni">
            <div class="container">
                <div class="section-head-split reveal">
                    <div>
                        <span class="section-label">Bukti Nyata &amp; Kepercayaan</span>
                        <h2 class="section-title">Dokumentasi Fabrikasi &amp; Ulasan Mitra</h2>
                    </div>
                    <p class="section-desc">
                        Dokumentasi pengerjaan unit di workshop Bandung serta pengalaman langsung para pengrajin tahu dan pengusaha kemasan.
                    </p>
                </div>

                <!-- 3 Clean Documentation Cards -->
                <div class="gallery-grid reveal">
                    <article class="gallery-card" onclick="openLightbox('{{ asset('assets/hero_machine.jpg') }}', 'Perakitan Mesin Giling Kedelai &amp; Konstruksi Rangka Presisi — Workshop Adam Jaya Bandung')">
                        <div class="gallery-img-wrap">
                            <img src="{{ asset('assets/hero_machine.jpg') }}" alt="Perakitan Mesin di Workshop Adam Jaya Bandung" loading="lazy" width="400" height="250">
                        </div>
                        <div class="gallery-info">
                            <span>Workshop Manufaktur</span>
                            <h3>Perakitan Mesin Giling &amp; Rangka Baja</h3>
                        </div>
                    </article>

                    <article class="gallery-card" onclick="openLightbox('{{ asset('assets/hero_machine_packaging.jpg') }}', 'Mesin Continuous Band Sealer &amp; Produksi Plastik Sablon Kemasan Pangan')">
                        <div class="gallery-img-wrap">
                            <img src="{{ asset('assets/hero_machine_packaging.jpg') }}" alt="Mesin Pengemas dan Sablon Plastik Kemasan Adam Jaya" loading="lazy" width="400" height="250">
                        </div>
                        <div class="gallery-info">
                            <span>Sistem Kemasan</span>
                            <h3>Mesin Sealer &amp; Plastik Sablon Tahan Panas</h3>
                        </div>
                    </article>

                    <article class="gallery-card" onclick="openLightbox('{{ asset('assets/hero_machine_perspective_transparent.png') }}', 'Detail Fabrikasi Corong &amp; Bejana Stainless Steel SUS 304 Food-Grade')">
                        <div class="gallery-img-wrap">
                            <img src="{{ asset('assets/hero_machine_perspective_transparent.png') }}" alt="Detail Fabrikasi Stainless SUS 304 Adam Jaya" loading="lazy" width="400" height="250" style="object-fit: contain; padding: 1rem;">
                        </div>
                        <div class="gallery-info">
                            <span>Standar Material</span>
                            <h3>Konstruksi Las Argon Stainless SUS 304</h3>
                        </div>
                    </article>
                </div>

                <!-- Google Rating Scoreboard -->
                <div class="google-summary-bar reveal">
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--bg-page); border: 1px solid var(--border-light); display: flex; align-items: center; justify-content: center; font-size: 1.35rem; color: #4285F4;">
                            <i class="fa-brands fa-google"></i>
                        </div>
                        <div>
                            <div style="display: flex; align-items: center; gap: 0.55rem;">
                                <strong style="font-family: var(--font-head); font-size: 1.55rem; font-weight: 800; color: var(--navy); line-height: 1;">4.9</strong>
                                <div style="color: #D97706; font-size: 0.82rem;">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span style="font-size: 0.74rem; font-weight: 700; color: #059669;">Rating Terverifikasi</span>
                            </div>
                            <p style="font-size: 0.83rem; color: var(--ink-secondary); margin-top: 0.2rem;">
                                Berdasarkan <strong>4.211+ Ulasan Pengrajin Tahu &amp; Mitra Bengkel</strong> di Google Maps
                            </p>
                        </div>
                    </div>

                    <a href="https://maps.google.com/?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222" target="_blank" rel="noopener" class="btn btn-outline-dark">
                        <i class="fa-brands fa-google"></i>
                        <span>Lihat Profil Google Maps</span>
                    </a>
                </div>

                <!-- 3 Verified Review Cards -->
                <div class="reviews-grid">
                    <article class="review-card reveal">
                        <div>
                            <div class="review-stars" aria-label="Bintang 5">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="review-text">
                                “Mesin gilingan dan tahang stainless dari Adam Jaya luar biasa presisi. Kapasitas 400 kg kedelai per hari selesai 3 jam lebih cepat, ampasnya kering dan hasil tahu lebih kenyal. Layanan servis darurat malam hari benar-benar standby.”
                            </p>
                        </div>
                        <div class="review-footer">
                            <div class="review-avatar">BS</div>
                            <div>
                                <strong style="font-family: var(--font-head); font-size: 0.9rem; color: var(--navy); display: block;">
                                    Budi Santoso <i class="fa-solid fa-circle-check" style="color: #059669; font-size: 0.76rem; margin-left: 0.2rem;"></i>
                                </strong>
                                <span style="font-size: 0.78rem; color: var(--ink-muted);">Pemilik Pabrik Tahu Lestari Jaya &bull; Bandung</span>
                            </div>
                        </div>
                    </article>

                    <article class="review-card reveal">
                        <div>
                            <div class="review-stars" aria-label="Bintang 5">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="review-text">
                                “Pesan sablon plastik PE &amp; continuous band sealer untuk kemasan tahu sutra. Tinta sablonnya tidak luntur kena kuah panas dan mesin sealer rekat rapat anti bocor. Garapan workshop sangat profesional dan tepat waktu.”
                            </p>
                        </div>
                        <div class="review-footer">
                            <div class="review-avatar" style="background-color: var(--wine);">RH</div>
                            <div>
                                <strong style="font-family: var(--font-head); font-size: 0.9rem; color: var(--navy); display: block;">
                                    Rian Hidayat <i class="fa-solid fa-circle-check" style="color: #059669; font-size: 0.76rem; margin-left: 0.2rem;"></i>
                                </strong>
                                <span style="font-size: 0.78rem; color: var(--ink-muted);">Usaha Kemasan Plastik Prima &bull; Cimahi</span>
                            </div>
                        </div>
                    </article>

                    <article class="review-card reveal">
                        <div>
                            <div class="review-stars" aria-label="Bintang 5">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="review-text">
                                “Ketel boiler uap buatan Adam Jaya sangat efisien hemat kayu bakar &amp; gas. Batu gilingan corundum grade A putarannya seimbang tanpa getaran bising. Harga bengkel tangan pertama sangat transparan dan bergaransi.”
                            </p>
                        </div>
                        <div class="review-footer">
                            <div class="review-avatar" style="background-color: #1E3A5F;">DK</div>
                            <div>
                                <strong style="font-family: var(--font-head); font-size: 0.9rem; color: var(--navy); display: block;">
                                    Bpk. Dadang Kusnadi <i class="fa-solid fa-circle-check" style="color: #059669; font-size: 0.76rem; margin-left: 0.2rem;"></i>
                                </strong>
                                <span style="font-size: 0.78rem; color: var(--ink-muted);">Pengrajin Tahu Sumedang Mandiri &bull; Sumedang</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             7. FAQ SECTION (2-COLUMN CLEAN ACCORDION)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="faq-section" id="faq">
            <div class="container faq-grid">
                <div class="faq-left reveal">
                    <span class="section-label">Informasi Pemesanan</span>
                    <h2 class="section-title" style="margin-bottom: 0.75rem;">Pertanyaan yang Sering Diajukan</h2>
                    <p class="section-desc">
                        Jawaban lengkap seputar pemesanan spesifikasi mesin custom, garansi resmi, pengiriman antarpulau, dan layanan teknisi.
                    </p>

                    <div class="faq-contact-box">
                        <h3 style="font-family: var(--font-head); font-size: 1rem; font-weight: 700; color: var(--navy); margin-bottom: 0.35rem;">
                            Butuh Konsultasi Kapasitas Pabrik?
                        </h3>
                        <p style="font-size: 0.85rem; color: var(--ink-secondary); margin-bottom: 1rem;">
                            Diskusikan langsung ukuran peralatan yang paling tepat dengan kepala mekanik kami.
                        </p>
                        <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20ingin%20konsultasi%20spesifikasi%20mesin" target="_blank" rel="noopener" class="btn btn-wine" style="width: 100%;">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>Tanya via WhatsApp (0812-2160-1558)</span>
                        </a>
                    </div>
                </div>

                <div class="faq-list reveal">
                    <div class="faq-item active">
                        <button type="button" class="faq-question" onclick="toggleFaq(this)" aria-expanded="true">
                            <span>Apakah bisa memesan mesin dengan ukuran atau spesifikasi custom?</span>
                            <span class="faq-icon" aria-hidden="true">&minus;</span>
                        </button>
                        <div class="faq-answer-wrap">
                            <div class="faq-answer-inner">
                                <p>Ya, sangat bisa. Karena kami adalah produsen langsung dengan bengkel manufaktur spesialis di Bandung, Anda dapat memesan tahang stainless, mesin giling kedelai, cetakan press tahu, atau ketel boiler dengan dimensi, ketebalan plat SUS 304, maupun kapasitas daya dinamo sesuai kebutuhan pabrik Anda.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
                            <span>Bagaimana sistem pengiriman ke luar kota Bandung atau luar pulau?</span>
                            <span class="faq-icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-answer-wrap">
                            <div class="faq-answer-inner">
                                <p>Kami melayani pengiriman ke seluruh wilayah Jawa Barat, Pulau Jawa, Sumatera, Kalimantan, Sulawesi, hingga kawasan timur Indonesia menggunakan ekspedisi kargo terpercaya dengan pengemasan rangka palet kayu kokoh tahan guncangan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
                            <span>Apakah tersedia suku cadang presisi dan garansi servis resmi?</span>
                            <span class="faq-icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-answer-wrap">
                            <div class="faq-answer-inner">
                                <p>Semua mesin rakitan PT Adam Jaya Enterprise dilengkapi dengan garansi servis resmi. Suku cadang seperti batu gilingan corundum, vanbelt, puli transmisi, bearing, kran kuningan/stainless, serta kain peresan selalu tersedia (ready stock) di workshop kami.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
                            <span>Berapa lama estimasi waktu pengerjaan untuk pemesanan unit baru?</span>
                            <span class="faq-icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-answer-wrap">
                            <div class="faq-answer-inner">
                                <p>Untuk unit standar dan suku cadang yang berstatus ready stock dapat dikirim pada hari kerja yang sama. Untuk fabrikasi ukuran khusus atau sablon plastik kemasan bermerek, waktu pengerjaan berkisar antara 3 hingga 10 hari kerja sesuai spesifikasi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
                            <span>Kapan jam operasional workshop dan layanan Adam Jaya?</span>
                            <span class="faq-icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-answer-wrap">
                            <div class="faq-answer-inner">
                                <p>Workshop bengkel manufaktur kami buka setiap hari Senin sampai Jumat pukul 07.00 pagi hingga 18.00 sore WIB. Untuk hari Sabtu &amp; Minggu melayani kunjungan melalui janji temu, dan konsultasi teknis darurat tetap dapat dihubungi 24 jam melalui WhatsApp.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             8. LOKASI WORKSHOP & PETA INTERAKTIF
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="location-section" id="lokasi">
            <div class="container">
                <div class="location-card reveal">
                    <div class="location-grid">
                        <div class="location-info">
                            <span class="section-label on-dark">Bengkel Manufaktur Bandung</span>
                            <h2 class="section-title on-dark" style="margin-bottom: 0.65rem;">Kunjungi Workshop Kami</h2>
                            <p class="section-desc on-dark">
                                Pusat pembuatan dan perbaikan peralatan pabrikasi tahu, mesin giling kedelai, tahang stainless SUS 304, serta alat cetak sablon plastik kemasan.
                            </p>

                            <div class="location-details">
                                <div class="loc-row">
                                    <div class="loc-icon"><i class="fa-solid fa-location-dot"></i></div>
                                    <div>
                                        <strong style="display: block; font-size: 0.92rem; color: #FFFFFF;">Alamat Workshop</strong>
                                        <span style="font-size: 0.86rem; color: var(--text-white-secondary);">Jl. Aki Padma No.51, Babakan, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat 40222</span>
                                    </div>
                                </div>

                                <div class="loc-row">
                                    <div class="loc-icon"><i class="fa-solid fa-phone"></i></div>
                                    <div>
                                        <strong style="display: block; font-size: 0.92rem; color: #FFFFFF;">Telepon / WhatsApp Hotline</strong>
                                        <span style="font-size: 0.88rem; color: var(--gold-light); font-weight: 600;">0812-2160-1558 (Fast Response 24 Jam)</span>
                                    </div>
                                </div>

                                <div class="loc-row">
                                    <div class="loc-icon"><i class="fa-solid fa-clock"></i></div>
                                    <div>
                                        <strong style="display: block; font-size: 0.92rem; color: #FFFFFF;">Jam Operasional Workshop</strong>
                                        <span style="font-size: 0.86rem; color: var(--text-white-secondary);">Senin – Jumat: 07.00 – 18.00 WIB (Sabtu &amp; Minggu: Janji Temu)</span>
                                    </div>
                                </div>
                            </div>

                            <div style="display: flex; flex-wrap: wrap; gap: 0.75rem;">
                                <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20mau%20berkunjung%20ke%20workshop" target="_blank" rel="noopener" class="btn btn-gold">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <span>Chat WhatsApp</span>
                                </a>
                                <a href="https://maps.google.com/?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222" target="_blank" rel="noopener" class="btn btn-outline-light">
                                    <i class="fa-solid fa-diamond-turn-right"></i>
                                    <span>Petunjuk Arah (GPS)</span>
                                </a>
                            </div>
                        </div>

                        <div class="location-map-col">
                            <iframe src="https://maps.google.com/maps?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222&t=&z=16&ie=UTF8&iwloc=&output=embed"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    title="Peta Lokasi Workshop PT Adam Jaya Enterprise"></iframe>

                            <form class="quick-rfq-box" onsubmit="submitQuickRfq(event)">
                                <h3 style="font-family: var(--font-head); font-size: 1rem; font-weight: 700; color: #FFFFFF;">
                                    Minta Estimasi Penawaran Harga
                                </h3>
                                <div class="rfq-inputs">
                                    <input type="text" id="rfqName" class="input-dark" placeholder="Nama Anda / Pabrik *" required aria-label="Nama Anda atau Pabrik">
                                    <select id="rfqCategory" class="input-dark" aria-label="Kategori Kebutuhan">
                                        <option value="Paket Mesin Produksi Tahu">Paket Mesin Produksi Tahu</option>
                                        <option value="Mesin Giling & Batu Corundum">Mesin Giling &amp; Batu Corundum</option>
                                        <option value="Tahang Stainless SUS 304 & Ketel Uap">Tahang Stainless SUS 304 &amp; Ketel Uap</option>
                                        <option value="Plastik Sablon & Mesin Sealer">Plastik Sablon &amp; Mesin Sealer</option>
                                        <option value="Sparepart & Servis Mekanik">Sparepart &amp; Servis Mekanik</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-gold" style="width: 100%;">
                                    <span>Kirim Permintaan via WhatsApp</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ═══════════════════════════════════════════════════════════════════
         9. CORPORATE FOOTER
         ═══════════════════════════════════════════════════════════════════ -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="#beranda" class="nav-brand" style="margin-bottom: 1rem;">
                        <img src="{{ asset('assets/adamjaya.png') }}" alt="Logo Adam Jaya" width="38" height="38">
                        <div>
                            <span class="nav-brand-name">ADAM JAYA</span>
                            <span class="nav-brand-sub">Enterprise Manufacturing</span>
                        </div>
                    </a>
                    <p style="font-size: 0.86rem; line-height: 1.7;">
                        Solusi peralatan produksi tahu berkualitas dan perlengkapan plastik sablon terlengkap. Workshop bengkel manufaktur terpercaya di Bandung dengan dedikasi lebih dari 24 tahun.
                    </p>
                </div>

                <div class="footer-col">
                    <h4>Kategori Unggulan</h4>
                    <ul class="footer-links">
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)">Mesin Giling Kedelai</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)">Tahang Stainless SUS 304</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)">Ketel Uap &amp; Cetakan Tahu</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-plastik', null)">Plastik Sablon Custom</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('sparepart', null)">Batu Corundum &amp; Sparepart</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Navigasi Cepat</h4>
                    <ul class="footer-links">
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#katalog-stok">Master Stok Barang</a></li>
                        <li><a href="#keunggulan">Keunggulan &amp; Proses</a></li>
                        <li><a href="#testimoni">Dokumentasi &amp; Ulasan</a></li>
                        <li><a href="http://localhost/adamjaya-enterprise/login.php" target="_blank" rel="noopener" style="color: var(--gold-light);">Portal Enterprise B2B</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Workshop Bandung</h4>
                    <div style="font-size: 0.85rem; line-height: 1.7;">
                        <p><strong style="color: #FFFFFF;">Jl. Aki Padma No.51</strong>, Babakan, Kec. Babakan Ciparay, Kota Bandung 40222</p>
                        <p style="margin-top: 0.45rem;"><strong style="color: #FFFFFF;">Jam Operasional:</strong> <span style="color: var(--gold-light);">Senin – Jumat (07.00 – 18.00 WIB)</span></p>
                        <p style="margin-top: 0.45rem;"><strong style="color: #FFFFFF;">Hotline WhatsApp:</strong> 0812-2160-1558</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} PT Adam Jaya Enterprise. Hak Cipta Dilindungi.</span>
                <span>Google Rating: 4.9 / 5.0 (4.211 Ulasan) &bull; Bandung Machine Workshop</span>
            </div>
        </div>
    </footer>

    <!-- ═══════════════════════════════════════════════════════════════════
         10. FLOATING AI ADVISOR, SCROLL-TOP & MODALS
         ═══════════════════════════════════════════════════════════════════ -->
    <div class="floating-assistant-trigger" onclick="toggleAssistantModal()" title="Konsultasi Mesin dengan Asisten AI">
        <div class="assistant-btn-circle">
            <i class="fa-solid fa-comments"></i>
        </div>
        <div class="assistant-callout-pill">
            <span>Tanya Asisten Mesin</span>
        </div>
    </div>

    <div class="assistant-modal-chat" id="machineAssistantModal">
        <div class="assistant-chat-header">
            <div style="display: flex; align-items: center; gap: 0.6rem;">
                <i class="fa-solid fa-comments" style="color: var(--gold-light);"></i>
                <div>
                    <strong style="font-family: var(--font-head); font-size: 0.88rem; display: block;">Asisten Teknis Adam Jaya</strong>
                    <span style="font-size: 0.7rem; color: var(--gold-light);">Bantuan Spesifikasi &amp; Katalog</span>
                </div>
            </div>
            <div style="display: flex; gap: 0.4rem;">
                <button type="button" onclick="resetAssistantChat()" title="Reset" aria-label="Reset Percakapan" style="color: rgba(255,255,255,0.7); padding: 0.25rem;"><i class="fa-solid fa-rotate-right"></i></button>
                <button type="button" onclick="toggleAssistantModal()" title="Tutup" aria-label="Tutup" style="color: rgba(255,255,255,0.7); padding: 0.25rem;"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>

        <div class="assistant-chat-body" id="assistantChatBody"></div>

        <div class="assistant-quick-chips">
            <button type="button" class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Rekomendasi mesin untuk 250 kg kedelai per hari')">Kapasitas 250 kg/hari</button>
            <button type="button" class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Berapa harga mesin giling kedelai?')">Harga Mesin Giling</button>
            <button type="button" class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Alamat dan jam buka workshop Adam Jaya')">Alamat &amp; Jam Buka</button>
        </div>

        <form class="assistant-input-bar" onsubmit="event.preventDefault(); submitAssistantInput();">
            <input type="text" id="assistantTextInput" class="assistant-text-input" placeholder="Tulis pertanyaan Anda..." autocomplete="off" aria-label="Tulis pertanyaan">
            <button type="submit" class="assistant-send-btn" id="assistantSendBtn" aria-label="Kirim">
                <i class="fa-solid fa-paper-plane"></i>
            </button>
        </form>
    </div>

    <button type="button" id="scrollTopBtn" class="scroll-top" onclick="scrollToTop()" title="Kembali ke atas" aria-label="Kembali ke atas">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Product Detail Modal -->
    <div class="modal-overlay" id="productModal" role="dialog" aria-modal="true" aria-labelledby="modalProductName">
        <div class="modal-box">
            <button type="button" class="modal-close" onclick="closeProductModal()" aria-label="Tutup"><i class="fa-solid fa-xmark"></i></button>
            <div style="margin-bottom: 0.85rem;">
                <span id="modalProductCategory" style="font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: var(--wine);">Kategori</span>
                <h3 id="modalProductName" style="font-family: var(--font-head); font-size: 1.3rem; font-weight: 800; color: var(--navy); margin-top: 0.15rem;">Nama Produk</h3>
            </div>

            <p id="modalProductDesc" style="font-size: 0.88rem; color: var(--ink-secondary); line-height: 1.6; margin-bottom: 0.85rem;">Deskripsi produk.</p>

            <table class="spec-table">
                <tbody>
                    <tr>
                        <td>Penggerak / Daya</td>
                        <td id="modalSpecPower">-</td>
                    </tr>
                    <tr>
                        <td>Material Bodi</td>
                        <td id="modalSpecMaterial">-</td>
                    </tr>
                    <tr>
                        <td>Pilihan Varian</td>
                        <td id="modalSpecCapacity">-</td>
                    </tr>
                    <tr>
                        <td>Garansi &amp; Servis</td>
                        <td id="modalSpecWarranty">-</td>
                    </tr>
                </tbody>
            </table>

            <div id="modalVariantsWrap" style="margin: 1.15rem 0; display: none;">
                <h4 style="font-family: var(--font-head); font-size: 0.84rem; font-weight: 700; color: var(--navy); margin-bottom: 0.5rem;">
                    Pilihan Varian Ukuran &amp; Harga Satuan:
                </h4>
                <div style="max-height: 190px; overflow-y: auto; border: 1px solid var(--border-light); border-radius: var(--r-sm);">
                    <table class="spec-table" style="margin: 0;">
                        <thead>
                            <tr style="background: var(--bg-page); border-bottom: 1px solid var(--border-light);">
                                <th style="padding: 0.55rem 0.75rem; font-size: 0.75rem; text-align: left; color: var(--ink-secondary);">Nama Jenis / Ukuran</th>
                                <th style="padding: 0.55rem 0.75rem; font-size: 0.75rem; text-align: right; color: var(--ink-secondary);">Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody id="modalVariantsBody"></tbody>
                    </table>
                </div>
            </div>

            <button type="button" onclick="submitModalWA()" class="btn btn-wine" style="width: 100%; margin-top: 0.5rem;">
                <i class="fa-brands fa-whatsapp"></i>
                <span>Tanya / Pesan Produk Ini via WhatsApp</span>
            </button>
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div class="modal-overlay" id="lightboxModal" onclick="closeLightbox()" role="dialog" aria-modal="true" aria-label="Perbesar Foto">
        <div style="max-width: 820px; width: 92%; position: relative;" onclick="event.stopPropagation()">
            <button type="button" class="modal-close" onclick="closeLightbox()" style="top: -44px; right: 0; background: #FFFFFF;" aria-label="Tutup"><i class="fa-solid fa-xmark"></i></button>
            <img id="lightboxImg" src="" alt="Dokumentasi Fabrikasi Adam Jaya" style="width: 100%; border-radius: var(--r-md); border: 1px solid var(--border-gold);">
            <div id="lightboxCaption" style="color: #FFFFFF; text-align: center; margin-top: 0.75rem; font-family: var(--font-head); font-weight: 600; font-size: 0.94rem;"></div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════════════════════════════════
         11. JAVASCRIPT ENGINE
         ═══════════════════════════════════════════════════════════════════ -->
    <script>
    const siteHeader = document.getElementById('siteHeader');
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    function handleScroll() {
        const y = window.scrollY;
        if (y > 30) {
            siteHeader?.classList.add('scrolled');
        } else {
            siteHeader?.classList.remove('scrolled');
        }

        if (y > 400) {
            scrollTopBtn?.classList.add('visible');
        } else {
            scrollTopBtn?.classList.remove('visible');
        }

        updateScrollSpy();
    }

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

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
        const scrollPos = window.scrollY + 130;
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

    // Catalog Filter, Search & Sort
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

    // Product Detail Modal
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
        document.getElementById('modalSpecWarranty').textContent = 'Garansi Servis Resmi Bengkel';

        const variantsWrap = document.getElementById('modalVariantsWrap');
        const variantsBody = document.getElementById('modalVariantsBody');
        if (variantsWrap && variantsBody) {
            if (item.variants && item.variants.length > 0) {
                variantsWrap.style.display = 'block';
                variantsBody.innerHTML = item.variants.map(v => {
                    const priceFormatted = v.harga > 0 ? `Rp ${new Intl.NumberFormat('id-ID').format(v.harga)} / ${v.satuan || 'unit'}` : 'Hubungi CS';
                    const stokBadge = v.stok > 0 ? `<span style="font-size:0.7rem; background:rgba(16,185,129,0.12); color:#059669; padding:0.1rem 0.4rem; border-radius:4px; margin-left:0.35rem;">Stok: ${v.stok}</span>` : '';
                    return `<tr>
                        <td style="padding:0.55rem 0.75rem; font-weight:600; color:var(--navy);">${v.nama_jenis} ${stokBadge}</td>
                        <td style="padding:0.55rem 0.75rem; text-align:right; font-weight:700; color:var(--wine);">${priceFormatted}</td>
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

    // FAQ Accordion
    function toggleFaq(btn) {
        const item = btn.parentElement;
        const isActive = item.classList.contains('active');
        document.querySelectorAll('.faq-item').forEach(i => {
            i.classList.remove('active');
            i.querySelector('.faq-question')?.setAttribute('aria-expanded', 'false');
            const sym = i.querySelector('.faq-icon');
            if (sym) sym.innerHTML = '+';
        });
        if (!isActive) {
            item.classList.add('active');
            btn.setAttribute('aria-expanded', 'true');
            const sym = item.querySelector('.faq-icon');
            if (sym) sym.innerHTML = '&minus;';
        }
    }

    // Lightbox & Quick RFQ
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

    // Floating AI Assistant
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
        const welcome = `<strong>Halo! Saya Asisten Teknis Adam Jaya.</strong><br>Silakan tanyakan seputar <strong>stok &amp; harga mesin</strong>, <strong>rekomendasi kapasitas</strong>, atau <strong>servis 24 jam</strong>.`;
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
            errDiv.innerHTML = `Hubungi langsung Kepala Mekanik kami via WhatsApp: <a href="https://wa.me/6281221601558" target="_blank" style="color:var(--wine); font-weight:700; text-decoration:underline;">0812-2160-1558</a>`;
            body.appendChild(errDiv);
        } finally {
            isAssistantReplying = false;
            body.scrollTop = body.scrollHeight;
        }
    }

    // Initialize Scroll Reveal & Catalog
    document.addEventListener('DOMContentLoaded', () => {
        applyCatalogFilters();

        const revealElems = document.querySelectorAll('.reveal');
        if ('IntersectionObserver' in window) {
            const revObs = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -30px 0px' });
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
