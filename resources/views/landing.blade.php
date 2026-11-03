<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Adam Jaya Enterprise — Manufaktur Mesin Pengolah Kedelai &amp; Peralatan Industri Pangan</title>
    <meta name="description" content="PT Adam Jaya Enterprise adalah produsen dan bengkel manufaktur spesialis mesin pengolah kedelai, tangki stainless steel SUS 304 food-grade, ketel uap, serta sistem kemasan industri di Bandung sejak 2002.">
    <meta name="keywords" content="PT Adam Jaya Enterprise, manufaktur mesin tahu bandung, mesin pengolah kedelai, fabrikasi stainless SUS 304, ketel uap industri, mesin giling kedelai presisi">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph / Corporate Social Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="PT Adam Jaya Enterprise — Manufaktur Mesin &amp; Fabrikasi Stainless SUS 304">
    <meta property="og:description" content="Solusi rekayasa mesin pengolahan kedelai berstandar food-grade SUS 304 dan peralatan kemasan industri langsung dari workshop resmi di Bandung.">
    <meta property="og:image" content="{{ asset('assets/adamjaya.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/adamjaya.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/adamjaya.png') }}">

    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 (Clean Line & Corporate Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Corporate Design System CSS -->
    <link rel="stylesheet" href="{{ asset('css/luxury-landing.css') }}?v={{ time() }}">

    <!-- Structured Data: Organization & ManufacturingBusiness Schema -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "PT Adam Jaya Enterprise",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/adamjaya.png') }}",
        "foundingDate": "2002",
        "description": "Perusahaan manufaktur mesin pengolah kedelai, fabrikasi tangki Stainless Steel SUS 304 food-grade, dan sistem pengemasan industri pangan di Kota Bandung.",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Jl. Aki Padma No. 51, Babakan, Kec. Babakan Ciparay",
            "addressLocality": "Kota Bandung",
            "addressRegion": "Jawa Barat",
            "postalCode": "40222",
            "addressCountry": "ID"
        },
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+62-812-2160-1558",
            "contactType": "customer service",
            "areaServed": "ID",
            "availableLanguage": ["Indonesian"]
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
         STICKY NAVBAR (TRANSPARENT -> SOLID ON SCROLL)
         ═══════════════════════════════════════════════════════════════════ -->
    <header class="site-header" id="siteHeader">
        <div class="container navbar-inner">
            <a href="#beranda" class="brand-logo" aria-label="Beranda PT Adam Jaya Enterprise">
                <img src="{{ asset('assets/adamjaya.png') }}" alt="Logo PT Adam Jaya Enterprise" width="42" height="42">
                <div class="brand-text">
                    <span class="brand-name">ADAM JAYA</span>
                    <span class="brand-tagline">Enterprise Manufacturing</span>
                </div>
            </a>

            <nav aria-label="Navigasi Utama">
                <ul class="nav-menu">
                    <li><a href="#tentang" class="nav-link">Tentang Kami</a></li>
                    <li><a href="#layanan" class="nav-link">Layanan</a></li>
                    <li><a href="#katalog-stok" class="nav-link">Katalog Produk</a></li>
                    <li><a href="#keunggulan" class="nav-link">Keunggulan</a></li>
                    <li><a href="#portofolio" class="nav-link">Portofolio</a></li>
                    <li><a href="#faq" class="nav-link">FAQ</a></li>
                </ul>
            </nav>

            <div class="nav-actions">
                <a href="http://localhost/adamjaya-enterprise/login.php" target="_blank" rel="noopener" class="nav-portal-link" title="Akses Sistem Internal Enterprise">
                    <i class="fa-solid fa-lock"></i>
                    <span>Portal B2B</span>
                </a>
                <a href="#kontak" class="btn btn-gold btn-sm">
                    <span>Konsultasi Teknis</span>
                </a>
                <button type="button" class="mobile-menu-btn" id="mobileMenuBtn" onclick="toggleMobileMenu()" aria-label="Buka Menu Navigasi" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div class="mobile-drawer" id="mobileDrawer" aria-label="Menu Mobile">
            <ul>
                <li><a href="#tentang" class="drawer-link" onclick="toggleMobileMenu()">Tentang Perusahaan</a></li>
                <li><a href="#layanan" class="drawer-link" onclick="toggleMobileMenu()">Lini Layanan Manufaktur</a></li>
                <li><a href="#katalog-stok" class="drawer-link" onclick="toggleMobileMenu()">Master Katalog Produk</a></li>
                <li><a href="#keunggulan" class="drawer-link" onclick="toggleMobileMenu()">Keunggulan Kami</a></li>
                <li><a href="#portofolio" class="drawer-link" onclick="toggleMobileMenu()">Studi Kasus &amp; Testimoni</a></li>
                <li><a href="#faq" class="drawer-link" onclick="toggleMobileMenu()">Pertanyaan Umum (FAQ)</a></li>
            </ul>
            <div class="mobile-drawer-actions">
                <a href="#kontak" class="btn btn-gold" onclick="toggleMobileMenu()">Jadwalkan Konsultasi Teknis</a>
                <a href="http://localhost/adamjaya-enterprise/login.php" target="_blank" rel="noopener" class="btn btn-outline-light">
                    <i class="fa-solid fa-lock"></i> Portal Enterprise B2B
                </a>
            </div>
        </div>
    </header>

    <main>
        <!-- ═══════════════════════════════════════════════════════════════════
             1. HERO SECTION
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="hero-section" id="beranda">
            <div class="container hero-grid">
                <!-- Left Column: Clear Value Proposition & CTAs -->
                <div class="hero-content reveal-on-scroll">
                    <div class="hero-eyebrow">
                        <i class="fa-solid fa-industry"></i>
                        <span>Manufaktur &amp; Rekayasa Mesin Pangan — Bandung</span>
                    </div>

                    <h1 class="hero-title">
                        Rekayasa Mesin Pengolah Kedelai Presisi untuk <span class="text-gold">Efisiensi Industri Pangan</span>
                    </h1>

                    <p class="hero-subtitle">
                        Tingkatkan rendemen ekstraksi sari kedelai dan standar higienitas pabrik Anda dengan peralatan berbahan Stainless Steel SUS 304. Dirancang, dikalibrasi, dan diproduksi langsung dari fasilitas workshop resmi PT Adam Jaya Enterprise.
                    </p>

                    <div class="hero-cta-group">
                        <a href="#kontak" class="btn btn-gold btn-lg">
                            <span>Jadwalkan Konsultasi Teknis</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#katalog-stok" class="btn btn-outline-light btn-lg">
                            <span>Telusuri Katalog Produk</span>
                        </a>
                    </div>

                    <div class="hero-highlights">
                        <div class="hero-highlight-item">
                            <span class="hero-highlight-val">SUS 304</span>
                            <span class="hero-highlight-label">Standar Material Food-Grade</span>
                        </div>
                        <div class="hero-highlight-item">
                            <span class="hero-highlight-val">Factory Direct</span>
                            <span class="hero-highlight-label">Fabrikasi Tangan Pertama</span>
                        </div>
                        <div class="hero-highlight-item">
                            <span class="hero-highlight-val">Garansi Resmi</span>
                            <span class="hero-highlight-label">Dukungan Suku Cadang &amp; Teknis</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Professional Machine Showcase -->
                <div class="hero-visual reveal-on-scroll">
                    <div class="hero-visual-card">
                        <img src="{{ asset('assets/hero_machine_transparent.png') }}"
                             alt="Unit Mesin Pengolah Kedelai Stainless Steel SUS 304 PT Adam Jaya Enterprise"
                             class="hero-machine-img"
                             width="440"
                             height="400">
                        <div class="hero-spec-badge">
                            <span><i class="fa-solid fa-shield-halved"></i> Konstruksi Baja Tahan Karat &amp; Asam</span>
                            <span><i class="fa-solid fa-certificate"></i> QC Kalibrasi Putaran Presisi</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             2. TRUST BAR (SUBTLE GRAYSCALE PARTNER LOGOS & CREDENTIALS)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="trust-bar" id="mitra" aria-label="Mitra Industri dan Kredibilitas">
            <div class="container">
                <div class="trust-bar-top">
                    <span class="trust-bar-label">Dipercaya oleh 4.200+ Pabrik Pengolahan &amp; Sentra Pangan di Indonesia</span>
                    <div class="trust-credentials">
                        <span class="credential-pill">
                            <i class="fa-solid fa-star"></i>
                            <strong>4.9 / 5.0</strong> Rating Google Terverifikasi (4.211 Ulasan)
                        </span>
                        <span class="credential-pill">
                            <i class="fa-solid fa-check-double"></i>
                            Standar Pengelasan Argon Food-Grade
                        </span>
                    </div>
                </div>

                <div class="trust-logos-grid">
                    <div class="trust-partner-item">
                        <div class="partner-icon"><i class="fa-solid fa-building-wheat"></i></div>
                        <div class="partner-meta">
                            <span class="partner-name">Tahu Yun Sen</span>
                            <span class="partner-loc">Sentra Kuliner Bandung (Est. 1938)</span>
                        </div>
                    </div>
                    <div class="trust-partner-item">
                        <div class="partner-icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="partner-meta">
                            <span class="partner-name">Tahu Susu Lembang</span>
                            <span class="partner-loc">Industri Pangan Jawa Barat</span>
                        </div>
                    </div>
                    <div class="trust-partner-item">
                        <div class="partner-icon"><i class="fa-solid fa-gears"></i></div>
                        <div class="partner-meta">
                            <span class="partner-name">Pabrik Tahu Lestari Jaya</span>
                            <span class="partner-loc">Kapasitas 500 kg/Hari — Bandung</span>
                        </div>
                    </div>
                    <div class="trust-partner-item">
                        <div class="partner-icon"><i class="fa-solid fa-fire-burner"></i></div>
                        <div class="partner-meta">
                            <span class="partner-name">Sumedang Mandiri</span>
                            <span class="partner-loc">Sentra Produksi Tahu Sumedang</span>
                        </div>
                    </div>
                    <div class="trust-partner-item">
                        <div class="partner-icon"><i class="fa-solid fa-seedling"></i></div>
                        <div class="partner-meta">
                            <span class="partner-name">Sentosa Makmur Kedelai</span>
                            <span class="partner-loc">Rantai Pasok Kedelai Regional</span>
                        </div>
                    </div>
                    <div class="trust-partner-item">
                        <div class="partner-icon"><i class="fa-solid fa-box-archive"></i></div>
                        <div class="partner-meta">
                            <span class="partner-name">Prima Kemasan Industri</span>
                            <span class="partner-loc">Manufaktur Kemasan Cimahi</span>
                        </div>
                    </div>
                    <div class="trust-partner-item">
                        <div class="partner-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="partner-meta">
                            <span class="partner-name">Berkah Food Indo</span>
                            <span class="partner-loc">Pabrik Pengolahan Semi-Otomatis</span>
                        </div>
                    </div>
                    <div class="trust-partner-item">
                        <div class="partner-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <div class="partner-meta">
                            <span class="partner-name">Karya Pangan Nusantara</span>
                            <span class="partner-loc">Distribusi Pangan Nasional</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             3. TENTANG PERUSAHAAN (PROFILE, VISION-MISSION, KEY METRICS)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="section" id="tentang">
            <div class="container about-grid">
                <!-- Left Column: Corporate Narrative & Vision-Mission -->
                <div class="about-content reveal-on-scroll">
                    <span class="eyebrow">Tentang Perusahaan</span>
                    <h2 class="section-title">Mitra Manufaktur Terpercaya untuk Modernisasi Pabrik Tahu &amp; Olahan Kedelai</h2>
                    <p class="about-lead">
                        Didirikan di Bandung, PT Adam Jaya Enterprise berfokus pada perancangan dan pabrikasi peralatan pengolahan kedelai berdaya tahan tinggi untuk skala UMKM hingga industri manufaktur pangan.
                    </p>
                    <p class="about-body-text">
                        Kami memahami bahwa kontinuitas operasional pabrik sangat bergantung pada keandalan mesin. Oleh karena itu, seluruh lini produk kami—mulai dari mesin giling kedelai, bejana rebusan (tahang) Stainless Steel SUS 304, ketel uap, hingga sistem kemasan plastik sablon—dikerjakan langsung oleh tenaga ahli mekanik dan pengelas bersertifikasi di bengkel resmi kami.
                    </p>

                    <div class="vision-mission-grid">
                        <div class="vm-card">
                            <h3>Visi Korporat</h3>
                            <p>Menjadi pusat manufaktur mesin pengolahan pangan lokal yang memimpin standar presisi, higienitas material, dan efisiensi energi di Indonesia.</p>
                        </div>
                        <div class="vm-card">
                            <h3>Misi &amp; Nilai Inti</h3>
                            <p>Menghadirkan rekayasa mesin tangan pertama tanpa kompromi material, disertai jaminan ketersediaan suku cadang dan dukungan teknis berkelanjutan.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Workshop Photo & 4 Key Corporate Metrics -->
                <div class="about-visual-wrap reveal-on-scroll">
                    <div class="about-image-frame">
                        <img src="{{ asset('assets/hero_machine.jpg') }}"
                             alt="Fasilitas Workshop Manufaktur PT Adam Jaya Enterprise di Bandung"
                             loading="lazy"
                             width="600"
                             height="340">
                        <div class="about-image-caption">
                            <span><i class="fa-solid fa-location-dot" style="color:var(--accent-gold-light); margin-right:0.4rem;"></i> Fasilitas Workshop Babakan Ciparay, Kota Bandung</span>
                            <strong>Est. 2002</strong>
                        </div>
                    </div>

                    <div class="about-metrics-grid" id="metricsCounterSection">
                        <div class="metric-card">
                            <span class="metric-number">24+ Tahun</span>
                            <span class="metric-title">Rekam Jejak Industri</span>
                            <span class="metric-desc">Pengalaman fabrikasi mesin pengolahan kedelai</span>
                        </div>
                        <div class="metric-card">
                            <span class="metric-number">4.200+</span>
                            <span class="metric-title">Unit Terdistribusi</span>
                            <span class="metric-desc">Beroperasi di berbagai sentra produksi nasional</span>
                        </div>
                        <div class="metric-card">
                            <span class="metric-number">100%</span>
                            <span class="metric-title">Material SUS 304</span>
                            <span class="metric-desc">Food-grade, tahan korosi uap dan asam cuka</span>
                        </div>
                        <div class="metric-card">
                            <span class="metric-number">24/7</span>
                            <span class="metric-title">Dukungan Teknis</span>
                            <span class="metric-desc">Layanan konsultasi mekanik &amp; suku cadang siap pakai</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             4. LAYANAN & KATALOG PRODUK (4-COL SERVICES + DYNAMIC CATALOG)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="section section-surface" id="layanan">
            <div class="container">
                <div class="section-header reveal-on-scroll">
                    <span class="eyebrow">Lini Kompetensi &amp; Produk</span>
                    <h2 class="section-title">Solusi Terintegrasi Hulu ke Hilir Produksi</h2>
                    <p class="section-subtitle">
                        Empat pilar layanan manufaktur kami dirancang untuk memenuhi kebutuhan peralatan pabrik baru, peremajaan kapasitas, hingga pengemasan produk akhir.
                    </p>
                </div>

                <!-- 4-Column Corporate Services Grid -->
                <div class="services-grid">
                    <article class="service-card reveal-on-scroll">
                        <div>
                            <div class="service-icon">
                                <i class="fa-solid fa-gears"></i>
                            </div>
                            <h3>Mesin Pengolah Kedelai</h3>
                            <p>Manufaktur mesin giling kedelai presisi, pemisah ampas otomatis, dan pemecah kulit ari dengan kalibrasi poros bebas getaran untuk ekstraksi sari maksimal.</p>
                        </div>
                        <a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)" class="service-meta">
                            <span>Lihat Unit Mesin</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </article>

                    <article class="service-card reveal-on-scroll">
                        <div>
                            <div class="service-icon">
                                <i class="fa-solid fa-temperature-arrow-up"></i>
                            </div>
                            <h3>Fabrikasi Bejana SUS 304</h3>
                            <p>Pembuatan tahang stainless steel food-grade, ketel uap (boiler) hemat bahan bakar, serta cetakan pres berdaya tahan tinggi terhadap suhu dan keasaman.</p>
                        </div>
                        <a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)" class="service-meta">
                            <span>Lihat Peralatan Stainless</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </article>

                    <article class="service-card reveal-on-scroll">
                        <div>
                            <div class="service-icon">
                                <i class="fa-solid fa-box-open"></i>
                            </div>
                            <h3>Kemasan &amp; Sablon Industri</h3>
                            <p>Penyediaan mesin continuous band sealer, vakum kemasan, serta produksi plastik kemasan PE/PP bersablon tahan panas untuk meningkatkan nilai jual produk.</p>
                        </div>
                        <a href="#katalog-stok" onclick="filterCatalog('mesin-plastik', null)" class="service-meta">
                            <span>Lihat Sistem Kemasan</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </article>

                    <article class="service-card reveal-on-scroll">
                        <div>
                            <div class="service-icon">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                            </div>
                            <h3>Suku Cadang &amp; Servis Resmi</h3>
                            <p>Ketersediaan batu giling corundum, dinamo penggerak, puli transmisi, kran uap, kain saring, serta layanan perbaikan terjadwal maupun darurat dari mekanik kami.</p>
                        </div>
                        <a href="#katalog-stok" onclick="filterCatalog('sparepart', null)" class="service-meta">
                            <span>Lihat Suku Cadang</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </article>
                </div>

                <!-- Dynamic Master Product Catalog Subsection -->
                <div id="katalog-stok" style="scroll-margin-top: 96px;">
                    <div class="section-header reveal-on-scroll" style="margin-bottom: 2rem;">
                        <span class="eyebrow">Katalog Inventaris Resmi</span>
                        <h2 class="section-title">Daftar Produk &amp; Spesifikasi Varian</h2>
                        <p class="section-subtitle">
                            Telusuri spesifikasi peralatan dan kisaran harga resmi langsung dari database workshop PT Adam Jaya Enterprise.
                        </p>
                    </div>

                    <!-- Clean Corporate Filter & Search Deck -->
                    <div class="catalog-header-bar reveal-on-scroll">
                        <div class="catalog-controls-top">
                            <div class="catalog-search-box">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <input type="text" id="catalogSearchInput" placeholder="Cari nama mesin, tahang stainless, sparepart, atau plastik kemasan..." oninput="handleLiveSearch()" aria-label="Cari Produk">
                            </div>

                            <div class="catalog-sort-box">
                                <label for="catalogSortSelect">Urutkan:</label>
                                <select id="catalogSortSelect" onchange="handleCatalogSort()">
                                    <option value="rekomendasi">Rekomendasi Utama</option>
                                    <option value="harga-asc">Harga Terendah</option>
                                    <option value="harga-desc">Harga Tertinggi</option>
                                    <option value="terbaru">Produk Terbaru</option>
                                </select>
                            </div>
                        </div>

                        <div class="catalog-filters" role="tablist" aria-label="Filter Kategori Produk">
                            <button type="button" class="filter-btn active" data-filter="all" onclick="filterCatalog('all', this)">
                                Semua Produk <span class="filter-count" id="countAll">{{ count($products) }}</span>
                            </button>
                            <button type="button" class="filter-btn" data-filter="mesin-tahu" onclick="filterCatalog('mesin-tahu', this)">
                                Mesin &amp; Produksi Tahu <span class="filter-count" id="countTahu">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-tahu')) }}</span>
                            </button>
                            <button type="button" class="filter-btn" data-filter="mesin-plastik" onclick="filterCatalog('mesin-plastik', this)">
                                Plastik Sablon <span class="filter-count" id="countPlastik">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-plastik')) }}</span>
                            </button>
                            <button type="button" class="filter-btn" data-filter="mesin-kemasan" onclick="filterCatalog('mesin-kemasan', this)">
                                Mesin Kemasan <span class="filter-count" id="countKemasan">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-kemasan')) }}</span>
                            </button>
                            <button type="button" class="filter-btn" data-filter="sparepart" onclick="filterCatalog('sparepart', this)">
                                Suku Cadang &amp; Alat <span class="filter-count" id="countSparepart">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'sparepart')) }}</span>
                            </button>
                            <button type="button" class="filter-btn" data-filter="lainnya" onclick="filterCatalog('lainnya', this)">
                                Lainnya <span class="filter-count" id="countLainnya">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'lainnya')) }}</span>
                            </button>
                        </div>
                    </div>

                    <!-- 4-Column Dynamic Product Grid -->
                    <div class="products-grid" id="catalogGrid">
                        @foreach($products as $index => $item)
                            @php
                                $variantsCount = count($item['variants'] ?? []);
                                $hasImg = !empty($item['gambar']) && file_exists(public_path($item['gambar']));
                                $imgSrc = $hasImg ? asset($item['gambar']) : null;
                                $priceDisplay = 'Hubungi Tim Penjualan';
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
                                        <img src="{{ $imgSrc }}" alt="{{ $item['nama_barang'] }} — PT Adam Jaya Enterprise" loading="lazy" width="300" height="210">
                                    @else
                                        <div class="product-placeholder-box">
                                            <i class="fa-solid {{ ($item['category'] ?? '') === 'mesin-plastik' ? 'fa-boxes-packing' : (($item['category'] ?? '') === 'mesin-tahu' ? 'fa-gears' : 'fa-screwdriver-wrench') }}"></i>
                                            <span>{{ $item['category_label'] ?? 'Peralatan Industri' }}</span>
                                        </div>
                                    @endif
                                    <span class="product-badge-top">Standar Bengkel</span>
                                    <span class="product-variant-pill">
                                        {{ $variantsCount > 1 ? $variantsCount . ' Pilihan Varian' : 'Tersedia' }}
                                    </span>
                                </div>

                                <div class="product-body">
                                    <span class="product-cat">{{ $item['category_label'] ?? 'Peralatan Produksi' }}</span>
                                    <h3>{{ $item['nama_barang'] }}</h3>
                                    <p class="product-desc">
                                        @if(!empty($item['variants']))
                                            Spesifikasi: {{ implode(', ', array_slice(array_column($item['variants'], 'nama_jenis'), 0, 3)) }}{{ count($item['variants']) > 3 ? ', dll.' : '' }}
                                        @else
                                            Diproduksi dengan standar kontrol kualitas manufaktur PT Adam Jaya Enterprise.
                                        @endif
                                    </p>

                                    <div class="product-price-row">
                                        <span class="price-label">{{ !empty($item['min_price']) && $item['min_price'] > 0 && $item['min_price'] != $item['max_price'] ? 'Estimasi Rentang Harga' : 'Harga Resmi Mulai' }}</span>
                                        <span class="price-amount">{{ $priceDisplay }}</span>
                                    </div>

                                    <div class="product-actions">
                                        <button type="button" class="btn btn-outline btn-sm" onclick="showCatalogProductModal({{ $item['id'] }})">
                                            <span>Spesifikasi</span>
                                        </button>
                                        <a href="https://wa.me/6281221601558?text=Halo%20PT%20Adam%20Jaya%20Enterprise,%20saya%20ingin%20menanyakan%20spesifikasi%20dan%20penawaran%20harga%20untuk%20produk%20{{ urlencode($item['nama_barang']) }}" target="_blank" rel="noopener" class="btn btn-primary btn-sm">
                                            <span>Pesan / Tanya</span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <!-- Empty Search State -->
                    <div class="catalog-empty" id="catalogEmptyState">
                        <i class="fa-solid fa-box-open"></i>
                        <h3>Produk Tidak Ditemukan</h3>
                        <p style="color:var(--text-secondary); max-width:480px; margin:0.4rem auto 1.25rem;">
                            Kata kunci yang Anda masukkan belum cocok dengan daftar katalog tampilan. Kami menerima pemesanan fabrikasi mesin dengan spesifikasi dan ukuran khusus (custom).
                        </p>
                        <button type="button" class="btn btn-primary btn-sm" onclick="resetCatalogSearch()">
                            Tampilkan Seluruh Katalog
                        </button>
                    </div>

                    <!-- Load More Pagination -->
                    <div class="catalog-load-more" id="catalogLoadMoreWrap">
                        <button type="button" class="btn btn-outline" id="btnLoadMore" onclick="loadMoreCatalog()">
                            <span>Tampilkan Produk Berikutnya</span>
                            <span id="loadMoreCountBadge" style="font-weight:700; color:var(--brand-wine-accent);">(+8)</span>
                        </button>
                        <p id="catalogAllLoadedText" style="display:none; font-size:0.85rem; color:var(--text-secondary); margin-top:0.75rem;">
                            Menampilkan seluruh <strong id="totalVisibleBadge">0</strong> produk pada kategori ini.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             5. KEUNGGULAN / WHY US (4 CORE DIFFERENTIATORS)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="section" id="keunggulan">
            <div class="container">
                <div class="section-header reveal-on-scroll">
                    <span class="eyebrow">Diferensiasi Manufaktur</span>
                    <h2 class="section-title">Mengapa Industri Pangan Memilih PT Adam Jaya Enterprise?</h2>
                    <p class="section-subtitle">
                        Keputusan investasi mesin produksi menuntut kepastian mutu material, presisi mekanis, dan jaminan purna jual jangka panjang.
                    </p>
                </div>

                <div class="why-us-grid">
                    <!-- Point 01 -->
                    <div class="why-card reveal-on-scroll">
                        <div class="why-number">01</div>
                        <div class="why-content">
                            <h3>Fabrikasi Tangan Pertama (Factory Direct)</h3>
                            <p>Seluruh proses pemotongan plat, pembubutan poros, hingga perakitan dilakukan langsung di workshop kami di Bandung tanpa perantara distributor. Dimensi dan kapasitas dapat disesuaikan dengan tata letak ruang produksi Anda.</p>
                            <span class="why-proof">
                                <i class="fa-solid fa-industry"></i> Harga Transparan Bengkel Resmi &amp; Bisa Custom Spesifikasi
                            </span>
                        </div>
                    </div>

                    <!-- Point 02 -->
                    <div class="why-card reveal-on-scroll">
                        <div class="why-number">02</div>
                        <div class="why-content">
                            <h3>Jaminan Material Food-Grade SUS 304</h3>
                            <p>Kami menggunakan baja nirkarat (Stainless Steel SUS 304) murni dengan teknik pengelasan gas Argon presisi. Material ini tahan terhadap korosi air asam cuka tahu serta suhu uap bertekanan tinggi sehingga menjaga kemurnian hasil olahan.</p>
                            <span class="why-proof">
                                <i class="fa-solid fa-shield-halved"></i> Anti-Karat, Higienis &amp; Usia Pakai Lebih Panjang
                            </span>
                        </div>
                    </div>

                    <!-- Point 03 -->
                    <div class="why-card reveal-on-scroll">
                        <div class="why-number">03</div>
                        <div class="why-content">
                            <h3>Kalibrasi Mekanis &amp; Efisiensi Ekstraksi</h3>
                            <p>Setiap unit mesin giling dan batu corundum melewati uji putaran (balancing) selama minimal 2 jam sebelum dikirim. Presisi kerapatan batu menghasilkan ampas kedelai yang jauh lebih kering dan meningkatkan volume sari tahu.</p>
                            <span class="why-proof">
                                <i class="fa-solid fa-gauge-high"></i> Rendemen Sari Kedelai Optimal &amp; Minim Getaran
                            </span>
                        </div>
                    </div>

                    <!-- Point 04 -->
                    <div class="why-card reveal-on-scroll">
                        <div class="why-number">04</div>
                        <div class="why-content">
                            <h3>Ketersediaan Suku Cadang &amp; Respon Teknis 24 Jam</h3>
                            <p>Kami menyadari bahwa berhentinya mesin berarti kerugian produksi harian. Bengkel kami menyediakan stok suku cadang lengkap dan tim mekanik berpengalaman yang siap memberikan panduan maupun penanganan darurat.</p>
                            <span class="why-proof">
                                <i class="fa-solid fa-headset"></i> Dukungan Purna Jual &amp; Suku Cadang Selalu Tersedia
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             6. PORTOFOLIO STUDI KASUS & TESTIMONI KLIEN
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="section section-surface" id="portofolio">
            <div class="container">
                <div class="section-header reveal-on-scroll">
                    <span class="eyebrow">Rekam Jejak &amp; Bukti Nyata</span>
                    <h2 class="section-title">Dokumentasi Fabrikasi &amp; Ulasan Mitra</h2>
                    <p class="section-subtitle">
                        Dokumentasi pengerjaan unit di workshop kami beserta pengalaman langsung para pemilik pabrik pengolahan kedelai dan kemasan.
                    </p>
                </div>

                <!-- 3-Column Portfolio / Case Study Cards -->
                <div class="case-studies-grid">
                    <article class="case-card reveal-on-scroll" onclick="openLightbox('{{ asset('assets/hero_machine.jpg') }}', 'Lini Mesin Giling Kedelai &amp; Fabrikasi Rangka Baja Presisi — Workshop Adam Jaya Bandung')">
                        <div class="case-img-wrap">
                            <img src="{{ asset('assets/hero_machine.jpg') }}" alt="Perakitan Mesin Giling Kedelai Presisi di Workshop Bandung" loading="lazy" width="400" height="220">
                            <span class="case-tag">Fabrikasi Mesin Utama</span>
                        </div>
                        <div class="case-body">
                            <h3>Lini Penggilingan Kedelai Kapasitas 500 kg/Hari</h3>
                            <p>Perakitan dan uji kalibrasi mesin giling kedelai penggerak dinamo industri dengan corong Stainless Steel SUS 304 untuk pabrik tahu skala menengah-besar.</p>
                        </div>
                    </article>

                    <article class="case-card reveal-on-scroll" onclick="openLightbox('{{ asset('assets/hero_machine_packaging.jpg') }}', 'Sistem Kemasan Plastik Sablon &amp; Mesin Sealer Industri Pangan')">
                        <div class="case-img-wrap">
                            <img src="{{ asset('assets/hero_machine_packaging.jpg') }}" alt="Unit Mesin Pengemas dan Sablon Plastik Kemasan Pangan" loading="lazy" width="400" height="220">
                            <span class="case-tag">Sistem Pengemasan</span>
                        </div>
                        <div class="case-body">
                            <h3>Integrasi Sealer &amp; Kemasan Sablon Tahan Panas</h3>
                            <p>Penyediaan mesin continuous band sealer dan plastik kemasan PE beridentitas merek dengan ketahanan suhu kuah panas untuk distribusi ritel modern.</p>
                        </div>
                    </article>

                    <article class="case-card reveal-on-scroll" onclick="openLightbox('{{ asset('assets/hero_machine_perspective_transparent.png') }}', 'Rekayasa Bejana Tahang Stainless SUS 304 &amp; Komponen Mekanis')">
                        <div class="case-img-wrap" style="background-color: var(--brand-navy);">
                            <img src="{{ asset('assets/hero_machine_perspective_transparent.png') }}" alt="Detail Konstruksi Mesin Stainless SUS 304 Adam Jaya" loading="lazy" width="400" height="220" style="object-fit: contain; padding: 1rem;">
                            <span class="case-tag">Standar Material</span>
                        </div>
                        <div class="case-body">
                            <h3>Konstruksi Tahang Rebusan &amp; Ketel Uap Higienis</h3>
                            <p>Penerapan las argon penuh tanpa celah pada bejana perebusan sari kedelai guna mencegah kontaminasi karat dan mempercepat titik didih uap.</p>
                        </div>
                    </article>
                </div>

                <!-- Verified Client Testimonials Subsection -->
                <div id="testimoni" style="scroll-margin-top: 96px;">
                    <div class="testimonials-header-bar reveal-on-scroll">
                        <div class="rating-summary">
                            <span class="rating-score-badge">4.9</span>
                            <div>
                                <div class="rating-stars" aria-label="Rating 4.9 dari 5 bintang">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span class="rating-meta">Berdasarkan <strong>4.211+ Ulasan Terverifikasi</strong> di Google Maps</span>
                            </div>
                        </div>
                        <a href="https://maps.google.com/?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222" target="_blank" rel="noopener" class="btn btn-outline btn-sm">
                            <i class="fa-brands fa-google"></i>
                            <span>Lihat Ulasan di Google Maps</span>
                        </a>
                    </div>

                    <div class="testimonials-grid">
                        <!-- Testimonial 1 -->
                        <article class="testimonial-card reveal-on-scroll">
                            <blockquote class="testimonial-quote">
                                “Mesin gilingan dan tahang stainless dari PT Adam Jaya sangat presisi. Kapasitas olahan 400 kg kedelai per hari selesai 3 jam lebih cepat karena ampasnya langsung kering dalam sekali giling. Dukungan mekaniknya juga sangat responsif saat kami butuh penyesuaian setelan.”
                            </blockquote>
                            <div class="testimonial-author">
                                <div class="author-avatar" aria-hidden="true">BS</div>
                                <div class="author-info">
                                    <h4>
                                        <span>Budi Santoso</span>
                                        <i class="fa-solid fa-circle-check verified-icon" title="Mitra Terverifikasi"></i>
                                    </h4>
                                    <span class="author-role">Pemilik Pabrik Tahu Lestari Jaya — Bandung</span>
                                </div>
                            </div>
                        </article>

                        <!-- Testimonial 2 -->
                        <article class="testimonial-card reveal-on-scroll">
                            <blockquote class="testimonial-quote">
                                “Kami memesan paket continuous band sealer beserta plastik sablon PE untuk lini kemasan tahu sutra. Hasil cetak sablonnya tajam, tidak luntur terkena air panas, dan segel mesinnya sangat rapat. Pengerjaan di bengkel tepat waktu sesuai kesepakatan.”
                            </blockquote>
                            <div class="testimonial-author">
                                <div class="author-avatar" style="background-color: var(--brand-wine-accent);" aria-hidden="true">RH</div>
                                <div class="author-info">
                                    <h4>
                                        <span>Rian Hidayat</span>
                                        <i class="fa-solid fa-circle-check verified-icon" title="Mitra Terverifikasi"></i>
                                    </h4>
                                    <span class="author-role">Direktur Usaha Kemasan Prima — Cimahi</span>
                                </div>
                            </div>
                        </article>

                        <!-- Testimonial 3 -->
                        <article class="testimonial-card reveal-on-scroll">
                            <blockquote class="testimonial-quote">
                                “Ketel uap boiler dan batu gilingan corundum dari workshop Adam Jaya terbukti hemat bahan bakar dan putarannya sangat stabil tanpa suara bising. Harga tangan pertama dari bengkel resmi memberikan nilai investasi yang sangat terukur bagi pabrik kami.”
                            </blockquote>
                            <div class="testimonial-author">
                                <div class="author-avatar" style="background-color: #162C4E;" aria-hidden="true">DK</div>
                                <div class="author-info">
                                    <h4>
                                        <span>H. Dadang Kusnadi</span>
                                        <i class="fa-solid fa-circle-check verified-icon" title="Mitra Terverifikasi"></i>
                                    </h4>
                                    <span class="author-role">Produsen Tahu Sumedang Mandiri — Sumedang</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             7. FAQ SECTION (MINIMALIST ACCORDION WITH + / − ICONS)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="section" id="faq">
            <div class="container faq-container">
                <div class="section-header reveal-on-scroll">
                    <span class="eyebrow">Informasi Teknis &amp; Prosedur</span>
                    <h2 class="section-title">Pertanyaan yang Sering Diajukan (FAQ)</h2>
                    <p class="section-subtitle">
                        Penjelasan transparan mengenai prosedur pemesanan spesifikasi khusus, pengiriman antarpulau, hingga cakupan garansi pabrikasi.
                    </p>
                </div>

                <div class="faq-list reveal-on-scroll">
                    <!-- FAQ 1 -->
                    <div class="faq-item active">
                        <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="true">
                            <span>Apakah spesifikasi dimensi dan kapasitas mesin dapat disesuaikan (custom)?</span>
                            <span class="faq-icon-symbol" aria-hidden="true">&minus;</span>
                        </button>
                        <div class="faq-content">
                            <div class="faq-content-inner">
                                Ya. Sebagai produsen dan bengkel manufaktur langsung, kami melayani pembuatan tahang stainless steel, mesin giling kedelai, meja cetakan pres, maupun ketel uap dengan ukuran dimensi, ketebalan plat SUS 304, dan daya motor penggerak yang disesuaikan sepenuhnya dengan target kapasitas harian pabrik Anda.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="faq-item">
                        <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="false">
                            <span>Bagaimana prosedur pengiriman mesin untuk klien di luar Bandung dan luar pulau?</span>
                            <span class="faq-icon-symbol" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-content">
                            <div class="faq-content-inner">
                                Kami melayani pengiriman ke seluruh Jawa, Sumatera, Kalimantan, Sulawesi, hingga Indonesia Timur melalui mitra ekspedisi kargo darat dan laut terpercaya. Setiap unit mesin dilindungi dengan konstruksi peti palet kayu kokoh untuk menjamin keamanan selama perjalanan.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="faq-item">
                        <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="false">
                            <span>Bagaimana cakupan garansi dan ketersediaan suku cadang ke depannya?</span>
                            <span class="faq-icon-symbol" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-content">
                            <div class="faq-content-inner">
                                Seluruh unit mesin pabrikasi PT Adam Jaya Enterprise dilengkapi garansi resmi bengkel terhadap cacat produksi maupun konstruksi las. Suku cadang habis pakai seperti batu corundum, vanbelt, bearing, kran stainless, dan kain saring selalu tersedia (ready stock) di workshop kami.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="faq-item">
                        <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="false">
                            <span>Berapa lama estimasi waktu pengerjaan untuk pemesanan unit fabrikasi baru?</span>
                            <span class="faq-icon-symbol" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-content">
                            <div class="faq-content-inner">
                                Untuk unit standar dan suku cadang yang berstatus ready stock, pengiriman dapat dilakukan pada hari kerja yang sama atau H+1. Untuk pemesanan ketel uap, tahang ukuran khusus, atau sablon plastik kemasan custom, estimasi pengerjaan berkisar antara 3 hingga 10 hari kerja tergantung antrean dan kompleksitas spesifikasi.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="faq-item">
                        <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="false">
                            <span>Apakah kami dapat berkonsultasi untuk perencanaan pabrik tahu dari nol?</span>
                            <span class="faq-icon-symbol" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-content">
                            <div class="faq-content-inner">
                                Sangat bisa. Tim mekanik senior kami siap membantu menghitung kebutuhan peralatan yang paling efisien berdasarkan target kapasitas olahan kedelai Anda (misalnya 100 kg, 300 kg, atau lebih dari 500 kg per hari), termasuk tata letak instalasi uap dan drainase.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="faq-item">
                        <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="false">
                            <span>Apakah calon pembeli dapat meninjau langsung proses produksi di workshop?</span>
                            <span class="faq-icon-symbol" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-content">
                            <div class="faq-content-inner">
                                Kami sangat menyambut kunjungan langsung ke workshop resmi kami di Jl. Aki Padma No. 51, Babakan Ciparay, Kota Bandung pada jam operasional Senin–Jumat (07.00–18.00 WIB), atau pada akhir pekan melalui penjadwalan janji temu terlebih dahulu.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════════════════════════════════
             8. CTA FINAL (CONTRAST BRAND SECTION + DIRECT RFQ FORM)
             ═══════════════════════════════════════════════════════════════════ -->
        <section class="cta-final-section" id="kontak">
            <div class="container cta-final-grid">
                <!-- Left Column: Persuasive Corporate Callout & Workshop Info -->
                <div class="reveal-on-scroll">
                    <span class="eyebrow" style="color: var(--accent-gold-light);">Konsultasi &amp; Penawaran Resmi</span>
                    <h2 class="section-title" style="color: #FFFFFF;">Siap Meningkatkan Kapasitas dan Standar Produksi Pabrik Anda?</h2>
                    <p class="section-subtitle" style="color: var(--text-on-dark-muted);">
                        Diskusikan spesifikasi mesin, kebutuhan kapasitas harian, atau permintaan daftar harga resmi langsung dengan kepala bengkel manufaktur PT Adam Jaya Enterprise.
                    </p>

                    <div class="cta-contact-details">
                        <div class="cta-detail-row">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <strong>Alamat Workshop &amp; Kantor Pusat</strong>
                                <span>Jl. Aki Padma No. 51, Babakan, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat 40222</span>
                            </div>
                        </div>
                        <div class="cta-detail-row">
                            <i class="fa-solid fa-phone-volume"></i>
                            <div>
                                <strong>Hotline Konsultasi Teknis &amp; Pemesanan</strong>
                                <span>+62 812-2160-1558 (WhatsApp &amp; Telepon Siaga)</span>
                            </div>
                        </div>
                        <div class="cta-detail-row">
                            <i class="fa-solid fa-clock"></i>
                            <div>
                                <strong>Jam Operasional Kunjungan Workshop</strong>
                                <span>Senin – Jumat: 07.00 – 18.00 WIB (Sabtu &amp; Minggu: Berdasarkan Janji Temu)</span>
                            </div>
                        </div>
                    </div>

                    <div style="display: flex; flex-wrap: wrap; gap: 0.85rem;">
                        <a href="https://wa.me/6281221601558?text=Halo%20PT%20Adam%20Jaya%20Enterprise,%20saya%20ingin%20berkonsultasi%20mengenai%20pengadaan%20mesin%20dan%20peralatan%20produksi." target="_blank" rel="noopener" class="btn btn-gold">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>Hubungi Langsung via WhatsApp</span>
                        </a>
                        <a href="https://maps.google.com/?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222" target="_blank" rel="noopener" class="btn btn-outline-light">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <span>Petunjuk Arah Google Maps</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Clean Corporate RFQ / Inquiry Form -->
                <div class="cta-form-card reveal-on-scroll">
                    <h3>Formulir Permintaan Penawaran (RFQ)</h3>
                    <p>Isi data singkat di bawah ini untuk terhubung langsung dengan tim teknis kami beserta rincian kebutuhan Anda.</p>

                    <form id="corporateRfqForm" onsubmit="submitRfqForm(event)">
                        <div class="form-group">
                            <label for="rfqName">Nama Lengkap / Penanggung Jawab *</label>
                            <input type="text" id="rfqName" class="form-control" placeholder="Contoh: Bpk. Hendra Wijaya" required>
                        </div>

                        <div class="form-group">
                            <label for="rfqCompany">Nama Pabrik / Perusahaan / Domisili *</label>
                            <input type="text" id="rfqCompany" class="form-control" placeholder="Contoh: Pabrik Tahu Mandiri — Semarang" required>
                        </div>

                        <div class="form-group">
                            <label for="rfqCategory">Kategori Kebutuhan Utama *</label>
                            <select id="rfqCategory" class="form-control" required>
                                <option value="Paket Lengkap Mesin Produksi Tahu">Paket Lengkap Mesin Produksi Tahu</option>
                                <option value="Mesin Giling Kedelai & Pemisah Ampas">Mesin Giling Kedelai &amp; Pemisah Ampas</option>
                                <option value="Tahang Stainless SUS 304 & Ketel Uap">Tahang Stainless SUS 304 &amp; Ketel Uap</option>
                                <option value="Mesin Sealer & Plastik Kemasan Sablon">Mesin Sealer &amp; Plastik Kemasan Sablon</option>
                                <option value="Suku Cadang & Layanan Servis Mekanik">Suku Cadang &amp; Layanan Servis Mekanik</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="rfqNotes">Catatan Kapasitas / Spesifikasi (Opsional)</label>
                            <textarea id="rfqNotes" class="form-control" rows="3" placeholder="Tuliskan target kapasitas harian (kg/hari) atau ukuran yang dibutuhkan..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 0.5rem;">
                            <span>Kirim Permintaan Penawaran</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
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
                    <a href="#beranda" class="brand-logo" style="margin-bottom: 1rem;">
                        <img src="{{ asset('assets/adamjaya.png') }}" alt="Logo PT Adam Jaya Enterprise" width="40" height="40">
                        <div class="brand-text">
                            <span class="brand-name">PT ADAM JAYA ENTERPRISE</span>
                            <span class="brand-tagline">Industrial Machinery &amp; Packaging</span>
                        </div>
                    </a>
                    <p style="line-height: 1.65; margin-bottom: 1.25rem;">
                        Produsen dan bengkel manufaktur spesialis mesin pengolah kedelai, fabrikasi bejana Stainless Steel SUS 304 food-grade, serta sistem kemasan sablon industri di Bandung.
                    </p>
                </div>

                <div class="footer-col">
                    <h4>Lini Manufaktur</h4>
                    <ul class="footer-links">
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)">Mesin Giling Kedelai Presisi</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)">Tahang Stainless Steel SUS 304</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-tahu', null)">Ketel Uap (Boiler) Industri</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin-plastik', null)">Plastik Kemasan Sablon PE/PP</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('sparepart', null)">Batu Giling Corundum &amp; Suku Cadang</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Navigasi Korporat</h4>
                    <ul class="footer-links">
                        <li><a href="#tentang">Profil &amp; Visi Perusahaan</a></li>
                        <li><a href="#layanan">Pilar Layanan</a></li>
                        <li><a href="#katalog-stok">Master Katalog &amp; Harga</a></li>
                        <li><a href="#keunggulan">Standar Mutu SUS 304</a></li>
                        <li><a href="#portofolio">Studi Kasus &amp; Testimoni</a></li>
                        <li><a href="http://localhost/adamjaya-enterprise/login.php" target="_blank" rel="noopener">Portal Internal Enterprise</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Kontak &amp; Lokasi Resmi</h4>
                    <ul class="footer-links" style="gap: 0.75rem;">
                        <li>
                            <strong style="color: #FFFFFF; display: block;">Workshop Bandung:</strong>
                            Jl. Aki Padma No. 51, Babakan, Kec. Babakan Ciparay, Kota Bandung 40222
                        </li>
                        <li>
                            <strong style="color: #FFFFFF;">Telepon / WA:</strong> +62 812-2160-1558
                        </li>
                        <li>
                            <strong style="color: #FFFFFF;">Jam Kerja:</strong> Senin – Jumat (07.00 – 18.00 WIB)
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} PT Adam Jaya Enterprise. Hak Cipta Dilindungi Undang-Undang.</span>
                <span>Standar Mutu Manufaktur Pangan SUS 304 &bull; Kota Bandung, Jawa Barat</span>
            </div>
        </div>
    </footer>

    <!-- ═══════════════════════════════════════════════════════════════════
         MODALS (PRODUCT SPECIFICATION & IMAGE LIGHTBOX) + SCROLL TOP
         ═══════════════════════════════════════════════════════════════════ -->
    <button type="button" id="scrollTopBtn" class="scroll-top-btn" onclick="scrollToTop()" aria-label="Kembali ke atas halaman">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Product Detail & Variant Pricing Modal -->
    <div class="modal-overlay" id="productModal" role="dialog" aria-modal="true" aria-labelledby="modalProductName">
        <div class="modal-box">
            <button type="button" class="modal-close" onclick="closeProductModal()" aria-label="Tutup detail produk">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div style="margin-bottom: 1rem;">
                <span id="modalProductCategory" style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: var(--brand-wine-accent);">Kategori</span>
                <h3 id="modalProductName" style="font-size: 1.35rem; color: var(--brand-navy); margin-top: 0.2rem;">Nama Produk</h3>
            </div>

            <p id="modalProductDesc" style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 1rem;">Deskripsi spesifikasi produk.</p>

            <table class="spec-table">
                <tbody>
                    <tr>
                        <td>Sistem Penggerak / Daya</td>
                        <td id="modalSpecPower">-</td>
                    </tr>
                    <tr>
                        <td>Standar Material Konstruksi</td>
                        <td id="modalSpecMaterial">-</td>
                    </tr>
                    <tr>
                        <td>Pilihan Kapasitas / Varian</td>
                        <td id="modalSpecCapacity">-</td>
                    </tr>
                    <tr>
                        <td>Jaminan Purna Jual</td>
                        <td id="modalSpecWarranty">-</td>
                    </tr>
                </tbody>
            </table>

            <!-- Dynamic Real Database Variants Table -->
            <div id="modalVariantsWrap" style="margin: 1.25rem 0; display: none;">
                <h4 style="font-size: 0.86rem; font-weight: 700; color: var(--brand-navy); margin-bottom: 0.5rem;">
                    Daftar Varian Ukuran &amp; Harga Satuan Resmi:
                </h4>
                <div style="max-height: 200px; overflow-y: auto; border: 1px solid var(--border-light); border-radius: var(--radius-sm);">
                    <table class="spec-table" style="margin: 0;">
                        <thead>
                            <tr style="background-color: var(--bg-primary); border-bottom: 1px solid var(--border-light);">
                                <th style="padding: 0.6rem 0.75rem; text-align: left; font-size: 0.76rem; color: var(--text-secondary);">Spesifikasi / Ukuran</th>
                                <th style="padding: 0.6rem 0.75rem; text-align: right; font-size: 0.76rem; color: var(--text-secondary);">Harga Resmi</th>
                            </tr>
                        </thead>
                        <tbody id="modalVariantsBody"></tbody>
                    </table>
                </div>
            </div>

            <div style="margin-top: 1.5rem; display: flex; gap: 0.75rem;">
                <button type="button" onclick="submitModalWA()" class="btn btn-primary" style="flex: 1;">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Minta Penawaran Produk Ini via WhatsApp</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div class="modal-overlay" id="lightboxModal" onclick="closeLightbox()" role="dialog" aria-modal="true" aria-label="Pratinjau Foto Dokumentasi">
        <div style="max-width: 820px; width: 100%; position: relative;" onclick="event.stopPropagation()">
            <button type="button" class="modal-close" onclick="closeLightbox()" style="top: -42px; right: 0; background: #FFFFFF;" aria-label="Tutup foto">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <img id="lightboxImg" src="" alt="Dokumentasi Fabrikasi PT Adam Jaya Enterprise" style="width: 100%; border-radius: var(--radius-md); border: 1px solid var(--border-gold);">
            <p id="lightboxCaption" style="color: #FFFFFF; text-align: center; margin-top: 0.75rem; font-size: 0.92rem; font-weight: 500;"></p>
        </div>
    </div>

    <!-- ═══════════════════════════════════════════════════════════════════
         MINIMAL & PERFORMANT JAVASCRIPT
         ═══════════════════════════════════════════════════════════════════ -->
    <script>
    // 1. Sticky Navbar (Transparent -> Solid on Scroll) & Scroll-to-Top
    const siteHeader = document.getElementById('siteHeader');
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    function handleWindowScroll() {
        const y = window.scrollY;
        if (y > 36) {
            siteHeader.classList.add('scrolled');
        } else {
            siteHeader.classList.remove('scrolled');
        }

        if (y > 420) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    }

    window.addEventListener('scroll', handleWindowScroll, { passive: true });
    handleWindowScroll();

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function toggleMobileMenu() {
        const drawer = document.getElementById('mobileDrawer');
        const btn = document.getElementById('mobileMenuBtn');
        const isOpen = drawer.classList.toggle('active');
        if (btn) btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    }

    // 2. Intersection Observer for Subtle Scroll Reveal (0.5s)
    document.addEventListener('DOMContentLoaded', () => {
        const revealItems = document.querySelectorAll('.reveal-on-scroll');
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

            revealItems.forEach(el => observer.observe(el));
        } else {
            revealItems.forEach(el => el.classList.add('is-visible'));
        }

        updateCatalogCounts();
        applyCatalogFilters();
    });

    // 3. Dynamic Product Catalog Filter, Search & Sort
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
            if (emptyState) emptyState.classList.add('active');
            if (loadMoreWrap) loadMoreWrap.style.display = 'none';
        } else {
            if (emptyState) emptyState.classList.remove('active');
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
        const input = document.getElementById('catalogSearchInput');
        const select = document.getElementById('catalogSortSelect');
        if (input) input.value = '';
        if (select) select.value = 'rekomendasi';
        filterCatalog('all', document.querySelector('.filter-btn[data-filter="all"]'));
        handleCatalogSort();
    }

    function updateCatalogCounts() {
        const allCards = document.querySelectorAll('#catalogGrid .product-card');
        const countMap = { 'all': allCards.length, 'mesin-plastik': 0, 'mesin-kemasan': 0, 'mesin-tahu': 0, 'sparepart': 0, 'lainnya': 0 };
        allCards.forEach(card => {
            const cat = card.dataset.cat;
            if (countMap[cat] !== undefined) countMap[cat]++;
        });
        const setTxt = (id, val) => { const el = document.getElementById(id); if (el) el.textContent = val; };
        setTxt('countAll', countMap['all']);
        setTxt('countPlastik', countMap['mesin-plastik']);
        setTxt('countKemasan', countMap['mesin-kemasan']);
        setTxt('countTahu', countMap['mesin-tahu']);
        setTxt('countSparepart', countMap['sparepart']);
        setTxt('countLainnya', countMap['lainnya']);
    }

    // 4. Product Detail Modal
    const catalogMaster = @json($products);
    let selectedProductName = '';

    function showCatalogProductModal(id) {
        const item = catalogMaster.find(p => p.id == id);
        if (!item) return;

        selectedProductName = item.nama_barang;
        document.getElementById('modalProductName').textContent = item.nama_barang;
        document.getElementById('modalProductCategory').textContent = item.category_label || 'Peralatan Industri';

        const isStainless = item.nama_barang.toLowerCase().includes('sten') || item.nama_barang.toLowerCase().includes('tahang');
        const isJati = item.nama_barang.toLowerCase().includes('jati');

        document.getElementById('modalProductDesc').textContent = `Unit ${item.nama_barang} diproduksi dan dikalibrasi langsung di fasilitas workshop PT Adam Jaya Enterprise Bandung dengan kontrol mutu ketat.`;
        document.getElementById('modalSpecPower').textContent = item.category === 'mesin-tahu' ? 'Motor Dinamo Industri / Penggerak Mekanis' : (item.category === 'mesin-kemasan' ? 'Elemen Pemanas Otomatis Terkalibrasi' : 'Sesuai Spesifikasi Unit');
        document.getElementById('modalSpecMaterial').textContent = isStainless ? 'Stainless Steel SUS 304 Food-Grade' : (isJati ? 'Kayu Jati Solid Pilihan' : 'Baja Konstruksi / Standar Manufaktur');
        document.getElementById('modalSpecCapacity').textContent = item.variants && item.variants.length ? `${item.variants.length} Pilihan Varian Ukuran` : 'Standar Pabrikasi';
        document.getElementById('modalSpecWarranty').textContent = 'Garansi Resmi Bengkel & Ketersediaan Suku Cadang';

        const variantsWrap = document.getElementById('modalVariantsWrap');
        const variantsBody = document.getElementById('modalVariantsBody');
        if (variantsWrap && variantsBody) {
            if (item.variants && item.variants.length > 0) {
                variantsWrap.style.display = 'block';
                variantsBody.innerHTML = item.variants.map(v => {
                    const priceFormatted = v.harga > 0
                        ? `Rp ${new Intl.NumberFormat('id-ID').format(v.harga)} / ${v.satuan || 'unit'}`
                        : 'Hubungi Tim Penjualan';
                    return `<tr>
                        <td style="padding:0.55rem 0.75rem; font-weight:500; color:var(--brand-navy);">${v.nama_jenis}</td>
                        <td style="padding:0.55rem 0.75rem; text-align:right; font-weight:700; color:var(--brand-wine-accent);">${priceFormatted}</td>
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
        const msg = encodeURIComponent(`Halo PT Adam Jaya Enterprise,\nSaya ingin meminta informasi spesifikasi dan penawaran harga resmi untuk:\n- Produk: ${selectedProductName}\n\nTerima kasih.`);
        window.open(`https://wa.me/6281221601558?text=${msg}`, '_blank');
    }

    // 5. Minimalist FAQ Accordion (+ / -)
    function toggleFaq(triggerBtn) {
        const item = triggerBtn.parentElement;
        const isActive = item.classList.contains('active');

        document.querySelectorAll('.faq-item').forEach(faq => {
            faq.classList.remove('active');
            const btn = faq.querySelector('.faq-trigger');
            const sym = faq.querySelector('.faq-icon-symbol');
            if (btn) btn.setAttribute('aria-expanded', 'false');
            if (sym) sym.innerHTML = '+';
        });

        if (!isActive) {
            item.classList.add('active');
            triggerBtn.setAttribute('aria-expanded', 'true');
            const sym = item.querySelector('.faq-icon-symbol');
            if (sym) sym.innerHTML = '&minus;';
        }
    }

    // 6. Lightbox Modal
    function openLightbox(imgSrc, caption) {
        document.getElementById('lightboxImg').src = imgSrc;
        document.getElementById('lightboxCaption').innerHTML = caption;
        document.getElementById('lightboxModal').classList.add('active');
    }

    function closeLightbox() {
        document.getElementById('lightboxModal').classList.remove('active');
    }

    // 7. Corporate RFQ Form Handler -> Direct Structured WhatsApp Inquiry
    function submitRfqForm(e) {
        e.preventDefault();
        const name = document.getElementById('rfqName').value.trim();
        const company = document.getElementById('rfqCompany').value.trim();
        const category = document.getElementById('rfqCategory').value;
        const notes = document.getElementById('rfqNotes').value.trim() || '-';

        const text = `Halo PT Adam Jaya Enterprise Bandung,\n\nBerikut Permintaan Penawaran Harga / Konsultasi Teknis (RFQ):\n- Nama: ${name}\n- Perusahaan/Pabrik: ${company}\n- Kategori Kebutuhan: ${category}\n- Catatan Spesifikasi: ${notes}\n\nMohon informasi rekomendasi spesifikasi dan estimasi penawaran harganya. Terima kasih.`;
        window.open(`https://wa.me/6281221601558?text=${encodeURIComponent(text)}`, '_blank');
    }

    // Close modal when clicking overlay
    document.getElementById('productModal')?.addEventListener('click', function(e) {
        if (e.target === this) closeProductModal();
    });
    </script>
</body>
</html>
