<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam Jaya Enterprise — Solusi Peralatan & Mesin Produksi Tahu Berkualitas (Bandung)</title>
    <meta name="description" content="PT Adam Jaya Enterprise — Produsen & workshop spesialis mesin pengolah kedelai, cetakan tahu stainless SUS 304, katel uap, dan alat sablon plastik kemasan di Bandung. Pelayanan 24 jam nonstop.">
    <meta name="keywords" content="mesin tahu bandung, pabrikasi mesin tahu, adam jaya enterprise, mesin giling kedelai, tahang stainless, cetakan tahu jati, plastik sablon tahu">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Luxury Executive CSS -->
    <link rel="stylesheet" href="{{ asset('css/luxury-landing.css') }}?v={{ time() }}">
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <!-- ═══ 1. FIXED GLASSMORPHISM NAVBAR ═══ -->
    <div class="navbar-wrap">
        <nav class="navbar" id="mainNavbar">
            <a href="#beranda" class="nav-brand">
                <img src="{{ asset('assets/adamjaya.png') }}" alt="Logo Adam Jaya">
                <div class="nav-brand-text">
                    <span class="nav-brand-name">ADAM JAYA</span>
                    <span class="nav-brand-sub">Enterprise System</span>
                </div>
            </a>

            <ul class="nav-links">
                <li><a href="#beranda" class="nav-link active">Beranda</a></li>
                <li><a href="#katalog-stok" class="nav-link">Katalog Produk</a></li>
                <li><a href="#keunggulan" class="nav-link">Keunggulan</a></li>
                <li><a href="#proyek" class="nav-link">Fabrikasi</a></li>
                <li><a href="#testimoni" class="nav-link">Testimoni</a></li>
                <li><a href="#lokasi" class="nav-link">Lokasi</a></li>
            </ul>

            <div class="nav-actions">
                <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20ingin%20konsultasi%20peralatan%20produksi%20tahu" target="_blank" class="btn-nav-wa">
                    <i class="fa-brands fa-whatsapp"></i> <span>Hubungi WA</span>
                </a>
                <button class="mobile-toggle" id="mobileNavToggle" onclick="toggleMobileDrawer()" aria-label="Menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>
    </div>

    <!-- Mobile Drawer Menu -->
    <div class="mobile-drawer" id="mobileDrawer">
        <ul>
            <li><a href="#beranda" onclick="toggleMobileDrawer()">Beranda</a></li>
            <li><a href="#katalog-stok" onclick="toggleMobileDrawer()">Katalog Produk</a></li>
            <li><a href="#keunggulan" onclick="toggleMobileDrawer()">Keunggulan Mesin</a></li>
            <li><a href="#proyek" onclick="toggleMobileDrawer()">Bukti Fabrikasi</a></li>
            <li><a href="#testimoni" onclick="toggleMobileDrawer()">Testimoni Klien</a></li>
            <li><a href="#lokasi" onclick="toggleMobileDrawer()">Workshop &amp; Peta</a></li>
        </ul>
        <div style="display:flex; flex-direction:column; gap:0.6rem;">
            <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20konsultasi%20via%20HP" target="_blank" class="btn btn-wine btn-md" style="width:100%;">
                <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp 24 Jam
            </a>
        </div>
    </div>

    <!-- ═══ 2. ENTERPRISE INDUSTRIAL HERO / JUMBOTRON SECTION ═══ -->
    <section class="hero-industrial-wrapper" id="beranda">
        <!-- Industrial Stage Background Effects -->
        <div class="hero-industrial-bg">
            <div class="hero-blueprint-grid"></div>
            <div class="hero-gold-arc"></div>
            <div class="hero-radial-glow glow-left"></div>
            <div class="hero-radial-glow glow-center"></div>
            <div class="hero-radial-glow glow-right"></div>
        </div>

        <div class="container hero-main-container">
            <!-- 2-Column / Unified Hero Composition -->
            <div class="hero-composition-grid">
                
                <!-- LEFT COLUMN: Value Proposition, Benefits & CTAs -->
                <div class="hero-left-content">
                    <h1 class="hero-headline-industrial story-reveal delay-2">
                        Mesin Tahu Berkualitas<br>
                        <span class="gold-gradient-text">Presisi, Higienis &amp; Efisien</span>
                    </h1>

                    <p class="hero-subheadline-industrial story-reveal delay-3">
                        Tingkatkan hasil ekstraksi perasan sari kedelai dan percepat ritme produksi Anda dengan mesin manufaktur standar food-grade SUS 304 dari workshop resmi Adam Jaya Bandung.
                    </p>

                    <!-- 3 Benefit Highlight Cards (Staggered) -->
                    <div class="hero-benefits-trio">
                        <div class="benefit-card-mini story-reveal delay-4">
                            <div class="benefit-icon-box">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="benefit-text-box">
                                <strong>Food-Grade</strong>
                                <span>SUS 304</span>
                            </div>
                        </div>

                        <div class="benefit-card-mini story-reveal delay-5">
                            <div class="benefit-icon-box">
                                <i class="fa-solid fa-clock-rotate-left"></i>
                            </div>
                            <div class="benefit-text-box">
                                <strong>Servis Darurat</strong>
                                <span>24 Jam</span>
                            </div>
                        </div>

                        <div class="benefit-card-mini story-reveal delay-6">
                            <div class="benefit-icon-box">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <div class="benefit-text-box">
                                <strong>Garansi</strong>
                                <span>Bengkel Resmi</span>
                            </div>
                        </div>
                    </div>

                    <!-- Primary Action Buttons -->
                    <div class="hero-cta-group story-reveal delay-7">
                        <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20ingin%20konsultasi%20pemesanan%20mesin%20dan%20peralatan%20tahu" target="_blank" class="btn-hero-primary">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>Konsultasi Mesin via WA</span>
                        </a>
                        <a href="#katalog-stok" class="btn-hero-secondary">
                            <i class="fa-solid fa-layer-group"></i>
                            <span>Lihat Master Katalog</span>
                        </a>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Transparent Machine Focal Point (Slide-in from Right) -->
                <div class="hero-center-visual">
                    <div class="machine-stage-wrap story-slide-right delay-3">
                        <div class="machine-backdrop-glow"></div>
                        <img src="{{ asset('assets/hero_machine_transparent.png') }}" alt="Mesin Manufaktur &amp; Pabrikasi Adam Jaya Enterprise" class="hero-machine-img" id="heroMachineImg">
                        <div class="machine-floor-shadow"></div>
                    </div>
                </div>

            </div>

            <!-- BOTTOM: Integrated Statistics Glass Bar (Scale Up) -->
            <div class="hero-stats-integrated story-scale-up delay-6">
                <div class="hero-stats-glass-card">
                    <div class="hero-stat-cell">
                        <div class="hero-stat-icon-sq"><i class="fa-solid fa-calendar-check"></i></div>
                        <div class="hero-stat-info">
                            <span class="hero-stat-value">24+</span>
                            <span class="hero-stat-name">Tahun Dedikasi</span>
                        </div>
                    </div>

                    <div class="hero-stat-cell">
                        <div class="hero-stat-icon-sq"><i class="fa-solid fa-gears"></i></div>
                        <div class="hero-stat-info">
                            <span class="hero-stat-value">4.200+</span>
                            <span class="hero-stat-name">Unit Terdistribusi</span>
                        </div>
                    </div>

                    <div class="hero-stat-cell">
                        <div class="hero-stat-icon-sq"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="hero-stat-info">
                            <span class="hero-stat-value">100%</span>
                            <span class="hero-stat-name">Food-Grade SUS 304</span>
                        </div>
                    </div>

                    <div class="hero-stat-cell">
                        <div class="hero-stat-icon-sq"><i class="fa-solid fa-headset"></i></div>
                        <div class="hero-stat-info">
                            <span class="hero-stat-value">24 Jam</span>
                            <span class="hero-stat-name">Layanan &amp; Servis</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- ═══ TRUSTED BY ENTERPRISE PARTNERS RIBBON ═══ -->
        <div class="trusted-by-section story-reveal delay-2" id="trustedSection">
            <div class="container">
                <div class="trusted-header">
                    <span class="trusted-pill-tag"><i class="fa-solid fa-building-circle-check"></i> DIPERCAYA MITRA INDUSTRI</span>
                    <h3 class="trusted-title">Dipercaya oleh <span class="gold-gradient-text">4.200+ Pelaku Industri &amp; Pabrik Tahu</span> Terkemuka</h3>
                </div>
            </div>

            <!-- Slider / Carousel Wrapper -->
            <div class="trusted-slider-wrapper" id="trustedSliderWrapper">
                <div class="trusted-logos-grid" id="trustedTrack">
                        <!-- Logo 1: Tahu Yun Sen -->
                        <div class="trusted-logo-card active" data-index="0">
                            <div class="trusted-card-top-tags">
                                <span class="trusted-top-pill"><i class="fa-solid fa-award"></i> Sentra Kuliner</span>
                                <span class="trusted-top-loc"><i class="fa-solid fa-location-dot"></i> Kota Bandung</span>
                            </div>
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-award"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">TAHU YUN SEN</span>
                                    <span class="trusted-logo-desc">Sentra Kuliner Bandung (Est. 1938)</span>
                                </div>
                            </div>
                            <div class="trusted-card-bottom-info">
                                <span class="trusted-sector-label">Sektor:</span>
                                <span class="trusted-sector-tag">Sentra Legendaris</span>
                            </div>
                        </div>

                        <!-- Logo 2: Tahu Susu Lembang -->
                        <div class="trusted-logo-card" data-index="1">
                            <div class="trusted-card-top-tags">
                                <span class="trusted-top-pill"><i class="fa-solid fa-fire"></i> Ikon Kuliner</span>
                                <span class="trusted-top-loc"><i class="fa-solid fa-location-dot"></i> Lembang, Jabar</span>
                            </div>
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-mountain-sun"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">TAHU SUSU LEMBANG</span>
                                    <span class="trusted-logo-desc">Sentra Ikonik Jawa Barat</span>
                                </div>
                            </div>
                            <div class="trusted-card-bottom-info">
                                <span class="trusted-sector-label">Sektor:</span>
                                <span class="trusted-sector-tag">Pariwisata &amp; Oleh-oleh</span>
                            </div>
                        </div>

                        <!-- Logo 3: Pabrik Tahu Lestari Jaya -->
                        <div class="trusted-logo-card" data-index="2">
                            <div class="trusted-card-top-tags">
                                <span class="trusted-top-pill"><i class="fa-solid fa-industry"></i> Pabrikasi</span>
                                <span class="trusted-top-loc"><i class="fa-solid fa-location-dot"></i> Babakan, Bdg</span>
                            </div>
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-industry"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">TAHU LESTARI JAYA</span>
                                    <span class="trusted-logo-desc">Pabrikasi Kapasitas 500kg/Hari</span>
                                </div>
                            </div>
                            <div class="trusted-card-bottom-info">
                                <span class="trusted-sector-label">Sektor:</span>
                                <span class="trusted-sector-tag">Manufaktur Pangan</span>
                            </div>
                        </div>

                        <!-- Logo 4: Tahu Sutra Sumedang Mandiri -->
                        <div class="trusted-logo-card" data-index="3">
                            <div class="trusted-card-top-tags">
                                <span class="trusted-top-pill"><i class="fa-solid fa-fire-burner"></i> Produksi Gurih</span>
                                <span class="trusted-top-loc"><i class="fa-solid fa-location-dot"></i> Sumedang</span>
                            </div>
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-fire-burner"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">SUMEDANG MANDIRI</span>
                                    <span class="trusted-logo-desc">Produsen Tahu Kuning Gurih</span>
                                </div>
                            </div>
                            <div class="trusted-card-bottom-info">
                                <span class="trusted-sector-label">Sektor:</span>
                                <span class="trusted-sector-tag">UMKM Unggulan</span>
                            </div>
                        </div>

                        <!-- Logo 5: Sentosa Makmur Kedelai -->
                        <div class="trusted-logo-card" data-index="4">
                            <div class="trusted-card-top-tags">
                                <span class="trusted-top-pill"><i class="fa-solid fa-seedling"></i> Bahan Baku</span>
                                <span class="trusted-top-loc"><i class="fa-solid fa-location-dot"></i> Jawa Barat</span>
                            </div>
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-seedling"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">SENTOSA KEDELAI</span>
                                    <span class="trusted-logo-desc">Distributor Kedelai Premium</span>
                                </div>
                            </div>
                            <div class="trusted-card-bottom-info">
                                <span class="trusted-sector-label">Sektor:</span>
                                <span class="trusted-sector-tag">Rantai Pasok Pangan</span>
                            </div>
                        </div>

                        <!-- Logo 6: Prima Kemasan Plastik -->
                        <div class="trusted-logo-card" data-index="5">
                            <div class="trusted-card-top-tags">
                                <span class="trusted-top-pill"><i class="fa-solid fa-box-open"></i> Packaging</span>
                                <span class="trusted-top-loc"><i class="fa-solid fa-location-dot"></i> Cimahi</span>
                            </div>
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-box-open"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">PRIMA PACKAGING</span>
                                    <span class="trusted-logo-desc">Industri Kemasan Food-Grade</span>
                                </div>
                            </div>
                            <div class="trusted-card-bottom-info">
                                <span class="trusted-sector-label">Sektor:</span>
                                <span class="trusted-sector-tag">Kemasan &amp; Sablon</span>
                            </div>
                        </div>

                        <!-- Logo 7: Berkah Abadi Food Indo -->
                        <div class="trusted-logo-card" data-index="6">
                            <div class="trusted-card-top-tags">
                                <span class="trusted-top-pill"><i class="fa-solid fa-shield-halved"></i> Food-Grade</span>
                                <span class="trusted-top-loc"><i class="fa-solid fa-location-dot"></i> Bandung</span>
                            </div>
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-shield-halved"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">BERKAH FOOD INDO</span>
                                    <span class="trusted-logo-desc">Pengolahan Kedelai Modern</span>
                                </div>
                            </div>
                            <div class="trusted-card-bottom-info">
                                <span class="trusted-sector-label">Sektor:</span>
                                <span class="trusted-sector-tag">Pabrik Semi-Otomatis</span>
                            </div>
                        </div>

                        <!-- Logo 8: Karya Tahu Nusantara -->
                        <div class="trusted-logo-card" data-index="7">
                            <div class="trusted-card-top-tags">
                                <span class="trusted-top-pill"><i class="fa-solid fa-truck-fast"></i> Distribusi</span>
                                <span class="trusted-top-loc"><i class="fa-solid fa-location-dot"></i> Nasional</span>
                            </div>
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-truck-fast"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">KARYA NUSANTARA</span>
                                    <span class="trusted-logo-desc">Jaringan Distribusi Tahu</span>
                                </div>
                            </div>
                            <div class="trusted-card-bottom-info">
                                <span class="trusted-sector-label">Sektor:</span>
                                <span class="trusted-sector-tag">Distribusi &amp; Logistik</span>
                            </div>
                        </div>

                        <!-- Duplicate Clones for Continuous Desktop Marquee (Hidden on Mobile) -->
                        <div class="trusted-logo-card trusted-clone" aria-hidden="true">
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-award"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">TAHU YUN SEN</span>
                                </div>
                            </div>
                        </div>
                        <div class="trusted-logo-card trusted-clone" aria-hidden="true">
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-mountain-sun"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">TAHU SUSU LEMBANG</span>
                                </div>
                            </div>
                        </div>
                        <div class="trusted-logo-card trusted-clone" aria-hidden="true">
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-industry"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">TAHU LESTARI JAYA</span>
                                </div>
                            </div>
                        </div>
                        <div class="trusted-logo-card trusted-clone" aria-hidden="true">
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-fire-burner"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">SUMEDANG MANDIRI</span>
                                </div>
                            </div>
                        </div>
                        <div class="trusted-logo-card trusted-clone" aria-hidden="true">
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-seedling"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">SENTOSA KEDELAI</span>
                                </div>
                            </div>
                        </div>
                        <div class="trusted-logo-card trusted-clone" aria-hidden="true">
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-box-open"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">PRIMA PACKAGING</span>
                                </div>
                            </div>
                        </div>
                        <div class="trusted-logo-card trusted-clone" aria-hidden="true">
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-shield-halved"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">BERKAH FOOD INDO</span>
                                </div>
                            </div>
                        </div>
                        <div class="trusted-logo-card trusted-clone" aria-hidden="true">
                            <div class="trusted-card-main-content">
                                <div class="trusted-logo-emblem"><i class="fa-solid fa-truck-fast"></i></div>
                                <div class="trusted-logo-info">
                                    <span class="trusted-logo-name">KARYA NUSANTARA</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Navigation Controls (Arrows + Pagination Dots) -->
                    <div class="trusted-carousel-nav" id="trustedCarouselNav">
                        <button class="trusted-nav-btn trusted-btn-prev" onclick="moveTrustedCarousel(-1)" aria-label="Mitra Sebelumnya">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <div class="trusted-carousel-dots" id="trustedDots"></div>
                        <button class="trusted-nav-btn trusted-btn-next" onclick="moveTrustedCarousel(1)" aria-label="Mitra Selanjutnya">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
        </div>

        <!-- Wave into Next Section -->
        <div class="hero-wave-divider" style="background:#380812;">
            <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,20 C320,55 640,5 960,35 C1200,52 1360,18 1440,70 L0,70 Z" fill="#F8FAFC"></path>
            </svg>
        </div>
    </section>

    <!-- ═══ 5. MASTER KATALOG & REAL-TIME STOCK FILTER (4 COLUMNS) ═══ -->
    <section class="section" id="katalog-stok">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title story-reveal delay-2">Master Inventaris &amp; <span class="wine-gold-gradient-text">Katalog Mesin Presisi</span></h2>
                <p class="section-desc story-reveal delay-3">Peralatan pengolah kedelai, mesin giling presisi, tahang stainless SUS 304, sparepart original, hingga plastik kemasan sablon terdaftar resmi langsung tangan pertama bengkel Adam Jaya.</p>
            </div>

            <!-- 3D Executive Command Deck: Search Bar + Sorting + Category Filters -->
            <div class="catalog-command-deck story-reveal delay-3">
                <div class="command-deck-top">
                    <!-- Live Search Bar -->
                    <div class="catalog-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="catalogSearchInput" placeholder="🔍 Cari mesin atau produk..." oninput="handleLiveSearch()">
                    </div>

                    <!-- Sorting Dropdown -->
                    <div class="catalog-sort-wrap">
                        <span class="sort-label"><i class="fa-solid fa-arrow-down-short-wide"></i> Urutkan:</span>
                        <select id="catalogSortSelect" class="sort-select" onchange="handleCatalogSort()">
                            <option value="rekomendasi">Rekomendasi</option>
                            <option value="harga-asc">Harga Terendah</option>
                            <option value="harga-desc">Harga Tertinggi</option>
                            <option value="terbaru">Terbaru</option>
                        </select>
                    </div>
                </div>

                <div class="deck-divider"></div>

                <!-- Category Filters (Semua, Mesin Plastik, Mesin Kemasan, Mesin Tahu, Sparepart, Lainnya) -->
                <div class="catalog-filters">
                    <button class="filter-btn active" data-filter="all" onclick="filterCatalog('all', this)">
                        <i class="fa-solid fa-layer-group"></i> Semua <span class="filter-count" id="countAll">{{ count($products) }}</span>
                    </button>
                    <button class="filter-btn" data-filter="mesin-tahu" onclick="filterCatalog('mesin-tahu', this)">
                        <i class="fa-solid fa-gears"></i> Mesin Tahu <span class="filter-count" id="countTahu">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-tahu')) }}</span>
                    </button>
                    <button class="filter-btn" data-filter="mesin-plastik" onclick="filterCatalog('mesin-plastik', this)">
                        <i class="fa-solid fa-boxes-packing"></i> Plastik Sablon <span class="filter-count" id="countPlastik">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-plastik')) }}</span>
                    </button>
                    <button class="filter-btn" data-filter="mesin-kemasan" onclick="filterCatalog('mesin-kemasan', this)">
                        <i class="fa-solid fa-box-archive"></i> Kemasan &amp; Packing <span class="filter-count" id="countKemasan">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'mesin-kemasan')) }}</span>
                    </button>
                    <button class="filter-btn" data-filter="sparepart" onclick="filterCatalog('sparepart', this)">
                        <i class="fa-solid fa-screwdriver-wrench"></i> Peralatan &amp; Sparepart <span class="filter-count" id="countSparepart">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'sparepart')) }}</span>
                    </button>
                    <button class="filter-btn" data-filter="lainnya" onclick="filterCatalog('lainnya', this)">
                        <i class="fa-solid fa-boxes-stacked"></i> Lainnya <span class="filter-count" id="countLainnya">{{ count(array_filter($products, fn($p) => ($p['category'] ?? '') === 'lainnya')) }}</span>
                    </button>
                </div>
            </div>

            <!-- Products Grid (4 COLUMNS) Dynamic Master Database Loop -->
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
                                $priceDisplay = 'Rp ' . number_format($item['min_price'], 0, ',', '.') . ' - Rp ' . number_format($item['max_price'], 0, ',', '.');
                            }
                        }
                    @endphp
                    <div class="product-card story-scale-up" 
                         data-cat="{{ $item['category'] ?? 'lainnya' }}" 
                         data-name="{{ $item['nama_barang'] }}" 
                         data-id="{{ $item['id'] }}" 
                         data-price="{{ $rawPrice }}" 
                         data-order="{{ $index + 1 }}">
                        <div class="product-img-wrap">
                            @if($hasImg)
                                <img src="{{ $imgSrc }}" alt="{{ $item['nama_barang'] }}" loading="lazy">
                            @else
                                <div class="product-placeholder-box">
                                    <i class="fa-solid {{ ($item['category'] ?? '') === 'mesin-plastik' ? 'fa-boxes-packing' : (($item['category'] ?? '') === 'mesin-tahu' ? 'fa-gears' : 'fa-wrench') }}"></i>
                                    <span>{{ $item['category_label'] ?? 'Peralatan Pabrik' }}</span>
                                </div>
                            @endif
                            <div class="product-gradient-overlay"></div>
                            <span class="product-badge-verified"><i class="fa-solid fa-circle-check"></i> Asli Bengkel</span>
                            <span class="product-status-pill {{ $variantsCount > 1 ? 'status-blue' : '' }}">
                                {{ $variantsCount > 1 ? $variantsCount . ' Varian' : 'TERSEDIA 🟢' }}
                            </span>
                            <div class="quick-view-overlay">
                                <button class="btn-quick-view" onclick="showCatalogProductModal({{ $item['id'] }})">
                                    <i class="fa-solid fa-eye"></i> Lihat Detail →
                                </button>
                            </div>
                        </div>
                        <div class="product-body">
                            <div class="product-meta-row">
                                <span class="product-cat">{{ $item['category_label'] ?? 'Perlengkapan' }}</span>
                                <div class="product-rating"><i class="fa-solid fa-star"></i> 4.9 <span class="rating-count">(Teruji)</span></div>
                            </div>
                            <h3>{{ $item['nama_barang'] }}</h3>
                            <p>
                                @if(!empty($item['variants']))
                                    Varian: {{ implode(', ', array_slice(array_column($item['variants'], 'nama_jenis'), 0, 3)) }}{{ count($item['variants']) > 3 ? '...' : '' }}
                                @else
                                    Peralatan standar bengkel manufaktur Adam Jaya.
                                @endif
                            </p>
                            
                            <!-- Floating Price Box -->
                            <div class="product-price-box">
                                <span class="price-label">{{ !empty($item['min_price']) && $item['min_price'] > 0 && $item['min_price'] != $item['max_price'] ? 'Rentang Harga' : 'Mulai dari' }}</span>
                                <span class="price-amount">{{ $priceDisplay }}</span>
                            </div>

                            <div class="product-specs">
                                <span class="spec-tag"><i class="fa-solid fa-layer-group"></i> {{ $variantsCount }} Pilihan Varian</span>
                                <span class="spec-tag"><i class="fa-solid fa-shield-halved"></i> Tangan Pertama</span>
                            </div>
                            <div class="product-footer">
                                <button class="btn btn-outline btn-sm" onclick="showCatalogProductModal({{ $item['id'] }})">
                                    <i class="fa-solid fa-circle-info"></i> Detail
                                </button>
                                <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20tanya%20stok%20{{ urlencode($item['nama_barang']) }}" target="_blank" class="btn btn-wine btn-sm">
                                    <i class="fa-brands fa-whatsapp"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Empty State If Search Nothing -->
            <div class="catalog-empty" id="catalogEmptyState">
                <i class="fa-solid fa-box-open"></i>
                <h3>Barang Tidak Ditemukan</h3>
                <p>Tidak ada produk yang cocok dengan filter atau kata kunci pencarian Anda. Kami juga menerima pesanan mesin dan perlengkapan custom khusus.</p>
                <button class="btn btn-wine btn-md" style="margin-top:1rem;" onclick="resetCatalogSearch()">
                    <i class="fa-solid fa-rotate-left"></i> Tampilkan Semua Barang
                </button>
            </div>

            <!-- Load More Controls (Initial 8 items with smooth pagination) -->
            <div class="catalog-load-more-wrap" id="catalogLoadMoreWrap" style="text-align:center; margin-top:2.5rem;">
                <button class="btn btn-wine btn-md" id="btnLoadMore" onclick="loadMoreCatalog()" style="padding:0.75rem 2.2rem; box-shadow:0 10px 25px rgba(122,30,51,0.25);">
                    <i class="fa-solid fa-layer-group"></i> <span>Tampilkan Produk Lainnya</span> (<span id="loadMoreCountBadge">+8</span>)
                </button>
                <div id="catalogAllLoadedText" style="display:none; font-family:var(--font-head); font-size:0.85rem; font-weight:700; color:var(--ink-muted); margin-top:1rem;">
                    <i class="fa-solid fa-circle-check" style="color:#10B981;"></i> Seluruh <span id="totalVisibleBadge">0</span> produk pada kategori ini telah ditampilkan.
                </div>
            </div>

        </div>
    </section>



    <!-- ═══ 7. SECTION KENAPA MEMILIH ADAM JAYA (VISUAL ARCHITECTURE & ANIMATED STATS) ═══ -->
    <section class="section section-alt why-section-wrapper" id="keunggulan">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title story-reveal delay-2">Kenapa Memilih <span class="wine-gold-gradient-text">Bengkel Adam Jaya?</span></h2>
                <p class="section-desc story-reveal delay-3">Produsen manufaktur peralatan pengolah kedelai tangan pertama di Bandung dengan rekam jejak teruji puluhan tahun dan komitmen total pada kelancaran operasional mitra.</p>
            </div>

            <!-- 1. ANIMATED STATISTICS COUNT-UP RIBBON (TRIGGERS ON VIEWPORT ENTRY) -->
            <div class="why-stats-ribbon story-reveal delay-2" id="whyStatsRibbon">
                <div class="why-stat-box">
                    <div class="why-stat-icon">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <div class="why-stat-info">
                        <span class="why-stat-number stat-counter" data-target="24" data-suffix="+">0+</span>
                        <span class="why-stat-label">Tahun Pengalaman</span>
                        <span class="why-stat-desc">Spesialisasi manufaktur mesin tahu</span>
                    </div>
                </div>

                <div class="why-stat-box">
                    <div class="why-stat-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <div class="why-stat-info">
                        <span class="why-stat-number stat-counter" data-target="4200" data-suffix="+" data-format="thousand">0+</span>
                        <span class="why-stat-label">Unit Mesin Terpasang</span>
                        <span class="why-stat-desc">Dipercaya pabrik seluruh Nusantara</span>
                    </div>
                </div>

                <div class="why-stat-box">
                    <div class="why-stat-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="why-stat-info">
                        <span class="why-stat-number stat-counter" data-target="100" data-suffix="%">0%</span>
                        <span class="why-stat-label">SUS 304 Food-Grade</span>
                        <span class="why-stat-desc">Higienis &amp; tahan korosi asam</span>
                    </div>
                </div>

                <div class="why-stat-box">
                    <div class="why-stat-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div class="why-stat-info">
                        <span class="why-stat-number stat-counter" data-target="24" data-suffix="/7">0/7</span>
                        <span class="why-stat-label">Respon Teknisi Darurat</span>
                        <span class="why-stat-desc">Mekanik standby nonstop</span>
                    </div>
                </div>
            </div>

            <!-- 2. CENTERPIECE VISUAL ARCHITECTURE BLUEPRINT -->
            <div class="why-hub-architecture story-scale-up delay-3">
                
                <!-- MIDDLE CORE MATRIX: FACTORY DIRECT + CENTER EMBLEM + 24/7 SUPPORT -->
                <div class="why-middle-core-grid">
                    
                    <!-- LEFT FLANK: Factory Direct Card -->
                    <div class="why-pillar-card">
                        <div class="why-pillar-header">
                            <div class="why-pillar-icon">
                                <i class="fa-solid fa-industry"></i>
                            </div>
                            <h3>Factory Direct Manufaktur</h3>
                        </div>
                        <p>Produsen langsung tangan pertama dari bengkel resmi kami di Babakan Bandung — tanpa perantara, bebas markup toko, dan bisa custom ukuran sesuai kapasitas produksi.</p>
                        <div class="why-pillar-list">
                            <div class="why-pillar-list-item"><i class="fa-solid fa-circle-check"></i> Harga langsung produsen tangan pertama</div>
                            <div class="why-pillar-list-item"><i class="fa-solid fa-circle-check"></i> Custom kapasitas giling &amp; dimensi alat</div>
                            <div class="why-pillar-list-item"><i class="fa-solid fa-circle-check"></i> Pengelasan argon rapi dan halus</div>
                        </div>
                    </div>

                    <!-- CENTER NODE: ADAM JAYA ENTERPRISE EMBLEM -->
                    <div class="why-center-emblem-node">
                        <div class="why-emblem-logo-box">
                            <img src="{{ asset('assets/adamjaya.png') }}" alt="Adam Jaya Enterprise">
                        </div>
                        <h4>ADAM JAYA</h4>
                        <span>ENTERPRISE</span>
                        <p class="why-center-tagline">Pusat Rekayasa Mesin Pengolah Kedelai &amp; Peralatan Tahu Presisi Tinggi</p>
                        <div style="margin-top:0.8rem;">
                            <span class="why-trust-pill" style="font-size:0.68rem; padding:0.25rem 0.65rem;">
                                <i class="fa-solid fa-certificate"></i> Bengkel Resmi Bandung
                            </span>
                        </div>
                    </div>

                    <!-- RIGHT FLANK: 24/7 Lifetime Support Card -->
                    <div class="why-pillar-card">
                        <div class="why-pillar-header">
                            <div class="why-pillar-icon">
                                <i class="fa-solid fa-clock-rotate-left"></i>
                            </div>
                            <h3>24/7 Support &amp; Mekanik Siaga</h3>
                        </div>
                        <p>Pabrik tahu beroperasi dini hari dan malam hari. Teknisi kami siap siaga membantu kendala mesin mendadak serta jaminan ketersediaan suku cadang asli selalu ready stock.</p>
                        <div class="why-pillar-list">
                            <div class="why-pillar-list-item"><i class="fa-solid fa-circle-check"></i> Layanan teknisi darurat 24 jam nonstop</div>
                            <div class="why-pillar-list-item"><i class="fa-solid fa-circle-check"></i> Sparepart asli (batu, dinamo, tahang) ready</div>
                            <div class="why-pillar-list-item"><i class="fa-solid fa-circle-check"></i> Konsultasi teknis &amp; setting mesin gratis</div>
                        </div>
                    </div>

                </div>

                <!-- BOTTOM DUO GRID: SUS 304 + ZERO VIBRATION QC -->
                <div class="why-bottom-duo-grid">
                    <div class="why-pillar-card">
                        <div class="why-pillar-header">
                            <div class="why-pillar-icon" style="background:rgba(16, 185, 129, 0.1); color:#10B981;">
                                <i class="fa-solid fa-shield-virus"></i>
                            </div>
                            <h3>100% Baja Stainless SUS 304 Food-Grade</h3>
                        </div>
                        <p>Material higienis standar industri pangan internasional. Tahan asam cuka pengental tahu, anti-korosi seumur hidup, dan menjaga kemurnian rasa tahu tanpa residu logam.</p>
                    </div>

                    <div class="why-pillar-card">
                        <div class="why-pillar-header">
                            <div class="why-pillar-icon" style="background:rgba(201, 151, 62, 0.15); color:var(--gold-dark);">
                                <i class="fa-solid fa-compass-drafting"></i>
                            </div>
                            <h3>Zero-Vibration Dynamic Balancing QC</h3>
                        </div>
                        <p>Setiap unit mesin melalui uji putaran dinamis dan kalibrasi batu gilingan untuk memastikan putaran stabil bebas getaran bising serta umur bearing motor lebih panjang.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Wave into Dark Proyek Section -->
    <div class="section-wave-bottom" style="background:#FAF8F5;">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,20 C360,52 720,8 1080,38 C1260,50 1380,20 1440,25 L1440,60 L0,60 Z" fill="#380812"></path>
        </svg>
    </div>

    <!-- ═══ 8. SECTION FABRIKASI & PROSES WORKSHOP ═══ -->
    <section class="section section-dark" id="proyek">
        <!-- Ambient Industrial Background Stage -->
        <div class="proyek-bg-effects">
            <div class="proyek-grid-pattern"></div>
            <div class="proyek-glow-left"></div>
            <div class="proyek-glow-center"></div>
            <div class="proyek-glow-right"></div>
        </div>

        <div class="container">
            <div class="section-head">
                <h2 class="section-title story-reveal delay-2">Tahapan Fabrikasi <span class="gold-gradient-text">Mesin Presisi</span></h2>
                <p class="section-desc story-reveal delay-3">4 langkah manufaktur resmi bengkel Adam Jaya Bandung untuk menghasilkan mesin tahan lama, higienis food-grade, dan siap produksi.</p>
            </div>

            <!-- 4-Step Compact Process Grid -->
            <div class="fabrikasi-steps-grid story-reveal delay-2">
                <!-- Step 1 -->
                <div class="fabrikasi-step-card">
                    <div class="fabrikasi-step-top">
                        <span class="fabrikasi-step-badge">01</span>
                        <div class="fabrikasi-step-icon">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>
                    </div>
                    <h3 class="fabrikasi-step-title">Konsultasi &amp; Kapasitas</h3>
                    <p class="fabrikasi-step-desc">Penyesuaian kapasitas produksi (50 – 1.000+ kg/hari) dan daya listrik pabrik Anda (1 Phase / 3 Phase / Diesel).</p>
                    <div class="fabrikasi-step-tag">
                        <i class="fa-solid fa-sliders"></i> 100% Kustom
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="fabrikasi-step-card">
                    <div class="fabrikasi-step-top">
                        <span class="fabrikasi-step-badge">02</span>
                        <div class="fabrikasi-step-icon">
                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                    </div>
                    <h3 class="fabrikasi-step-title">Rancang Presisi</h3>
                    <p class="fabrikasi-step-desc">Rangka cor tebal anti-getar dan kalibrasi presisi celah batu asah corundum untuk perasan sari kedelai kental.</p>
                    <div class="fabrikasi-step-tag">
                        <i class="fa-solid fa-ruler-combined"></i> Rangka Kokoh
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="fabrikasi-step-card">
                    <div class="fabrikasi-step-top">
                        <span class="fabrikasi-step-badge">03</span>
                        <div class="fabrikasi-step-icon">
                            <i class="fa-solid fa-fire-burner"></i>
                        </div>
                    </div>
                    <h3 class="fabrikasi-step-title">Fabrikasi SUS 304</h3>
                    <p class="fabrikasi-step-desc">Pengelasan gas argon berstandar food-grade, anti-bocor, tahan panas uap, dan anti-karat air asam cuka tahu.</p>
                    <div class="fabrikasi-step-tag">
                        <i class="fa-solid fa-shield-virus"></i> Food-Grade 304
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="fabrikasi-step-card">
                    <div class="fabrikasi-step-top">
                        <span class="fabrikasi-step-badge">04</span>
                        <div class="fabrikasi-step-icon">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                    </div>
                    <h3 class="fabrikasi-step-title">QC &amp; Siap Kirim</h3>
                    <p class="fabrikasi-step-desc">Uji balancing nonstop 2 jam di workshop, packing peti pallet kayu kokoh, dan kirim siap pakai ke seluruh Indonesia.</p>
                    <div class="fabrikasi-step-tag">
                        <i class="fa-solid fa-circle-check"></i> Garansi Resmi
                    </div>
                </div>
            </div>

            <!-- Featured Documentation Real Photos Gallery -->
            <div class="fabrikasi-gallery-wrap story-reveal delay-3">
                <div class="section-head" style="margin-bottom:1.6rem; margin-top:2.8rem;">
                    <span class="section-tag" style="color:#DFC183; background:rgba(201,151,62,0.15);"><i class="fa-solid fa-camera"></i> GALERI DOKUMENTASI BENGKEL</span>
                    <h3 style="font-family:var(--font-head); font-size:1.45rem; font-weight:800; color:#FFFFFF;">Bukti Nyata Workshop &amp; Fabrikasi</h3>
                </div>

                <div class="portfolio-slider">
                    <div class="portfolio-track" id="portfolioTrack">
                        <div class="portfolio-item" onclick="openLightbox('https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=1200&q=90', 'Workshop Perakitan Mesin Adam Jaya Bandung')">
                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=600&q=80" alt="Mesin di workshop Adam Jaya">
                            <div class="portfolio-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag">Katalog Manufaktur</span>
                                <h4 class="portfolio-title">📸 Workshop Perakitan Mesin</h4>
                            </div>
                        </div>

                        <div class="portfolio-item" onclick="openLightbox('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=1200&q=90', 'Proses Fabrikasi & Pengelasan Stainless Presisi')">
                            <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=600&q=80" alt="Proses fabrikasi & pengelasan stainless">
                            <div class="portfolio-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag">Workshop Production</span>
                                <h4 class="portfolio-title">📸 Fabrikasi Stainless SUS 304</h4>
                            </div>
                        </div>

                        <div class="portfolio-item" onclick="openLightbox('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=90', 'Uji Coba Mesin Giling di Pabrik Mitra Tahu')">
                            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=600&q=80" alt="Mesin sedang digunakan produksi">
                            <div class="portfolio-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag">Operational Testing</span>
                                <h4 class="portfolio-title">📸 Uji Coba Produksi di Mitra</h4>
                            </div>
                        </div>

                        <div class="portfolio-item" onclick="openLightbox('https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?w=1200&q=90', 'Instalasi & Setting Tahang Stainless di Lokasi')">
                            <img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?w=600&q=80" alt="Instalasi mesin di lokasi pelanggan">
                            <div class="portfolio-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag">Client Installation</span>
                                <h4 class="portfolio-title">📸 Instalasi &amp; Setting Mesin</h4>
                            </div>
                        </div>

                        <div class="portfolio-item" onclick="openLightbox('https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=1200&q=90', 'Hasil Produksi Tahu Putih Higienis & Berkualitas')">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&q=80" alt="Hasil produksi tahu putih berkualitas">
                            <div class="portfolio-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag">Quality Output</span>
                                <h4 class="portfolio-title">📸 Output Tahu Higienis</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-nav story-reveal delay-4">
                    <button class="port-btn" onclick="prevPortSlide()" title="Sebelumnya" aria-label="Slide sebelumnya"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="port-btn" onclick="nextPortSlide()" title="Selanjutnya" aria-label="Slide selanjutnya"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave out of Dark Proyek Section into Testimoni -->
    <div class="section-wave-top" style="background:#380812;">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,25 C300,55 620,12 940,42 C1180,58 1340,18 1440,25 L1440,60 L0,60 Z" fill="#FAF8F5"></path>
        </svg>
    </div>

    <!-- ═══ 9. SECTION TESTIMONI PELANGGAN (GOOGLE-STYLE & VIDEO SPOTLIGHT) ═══ -->
    <section class="section section-alt" id="testimoni">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title story-reveal delay-2">Apa Kata Pengrajin &amp; <span class="wine-gold-gradient-text">Pengusaha Tahu?</span></h2>
                <p class="section-desc story-reveal delay-3">Ulasan jujur dan terverifikasi dari pengrajin tahu terkemuka di Bandung, Sumedang, serta pengusaha kemasan di seluruh Indonesia.</p>
            </div>

            <!-- 1. Google Review Scoreboard Ribbon -->
            <div class="google-review-scoreboard story-reveal delay-2">
                <div class="google-brand-left">
                    <div class="google-icon-box">
                        <i class="fa-brands fa-google" style="color:#4285F4;"></i>
                    </div>
                    <div>
                        <div style="display:flex; align-items:center; gap:0.6rem;">
                            <span class="google-score-num">4.9</span>
                            <div>
                                <div class="google-stars">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span style="font-size:0.75rem; font-weight:800; color:var(--navy);">GOOGLE RATING TERVERIFIKASI</span>
                            </div>
                        </div>
                        <div class="google-verified-text">Berdasarkan 4.211+ Ulasan Pengrajin Tahu &amp; Mitra Bengkel Manufaktur</div>
                    </div>
                </div>
                <div>
                    <a href="https://maps.google.com/?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222" target="_blank" class="btn btn-outline btn-md">
                        <i class="fa-brands fa-google"></i> <span>Lihat Profil Google Maps</span>
                    </a>
                </div>
            </div>

            <!-- 3. Google-Style Verified Customer Review Cards Carousel / Grid -->
            <div class="google-reviews-slider-wrapper" id="reviewsSliderWrapper">
                <div class="google-reviews-grid" id="googleReviewsGrid">
                    
                    <!-- Review 1: Budi Santoso -->
                    <div class="google-review-card active story-reveal delay-1">
                        <div>
                            <div class="review-author-head">
                                <div class="review-avatar-box" style="background:linear-gradient(135deg, #1E3A8A 0%, #0F172A 100%);">
                                    BS
                                </div>
                                <div class="review-author-info">
                                    <div class="review-author-name">
                                        <span>Budi Santoso</span>
                                        <span class="verified-customer-badge" title="Pembeli Terverifikasi"><i class="fa-solid fa-circle-check"></i></span>
                                    </div>
                                    <div class="review-author-role">Pemilik Pabrik Tahu Lestari Jaya</div>
                                </div>
                            </div>

                            <div class="review-rating-row">
                                <div class="review-stars">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span class="review-date-tag">2 minggu lalu</span>
                            </div>

                            <p class="review-content-text">
                                "Mesin gilingan dan tahang stainless dari Adam Jaya luar biasa presisi. Kapasitas 400 kg kedelai per hari selesai 3 jam lebih cepat, ampasnya kering dan hasil tahu lebih kenyal. Layanan servis darurat malam hari benar-benar standby!"
                            </p>
                        </div>

                        <div>
                            <div class="review-product-tag">
                                <i class="fa-solid fa-box-open" style="color:var(--wine);"></i>
                                <span>Mesin Giling Pak Ukat + Tahang SUS 304</span>
                            </div>
                            <div class="review-location-pin">
                                <i class="fa-solid fa-location-dot" style="color:#EF4444;"></i>
                                <span>Babakan Ciparay, Kota Bandung</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2: Rian Plastik Sablon -->
                    <div class="google-review-card story-reveal delay-2">
                        <div>
                            <div class="review-author-head">
                                <div class="review-avatar-box" style="background:linear-gradient(135deg, #7A1E33 0%, #380812 100%);">
                                    RH
                                </div>
                                <div class="review-author-info">
                                    <div class="review-author-name">
                                        <span>Rian Hidayat</span>
                                        <span class="verified-customer-badge" title="Pembeli Terverifikasi"><i class="fa-solid fa-circle-check"></i></span>
                                    </div>
                                    <div class="review-author-role">Usaha Kemasan Plastik Prima</div>
                                </div>
                            </div>

                            <div class="review-rating-row">
                                <div class="review-stars">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span class="review-date-tag">1 bulan lalu</span>
                            </div>

                            <p class="review-content-text">
                                "Pesan sablon plastik PE &amp; continuous band sealer untuk kemasan tahu sutra. Tinta sablonnya tidak luntur kena kuah panas dan mesin sealer rekat rapat anti bocor. Garapan workshop sangat profesional dan tepat waktu."
                            </p>
                        </div>

                        <div>
                            <div class="review-product-tag">
                                <i class="fa-solid fa-box-open" style="color:var(--wine);"></i>
                                <span>Continuous Sealer + Plastik Sablon PE</span>
                            </div>
                            <div class="review-location-pin">
                                <i class="fa-solid fa-location-dot" style="color:#EF4444;"></i>
                                <span>Cimahi, Jawa Barat</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3: Bpk. Dadang Kusnadi -->
                    <div class="google-review-card story-reveal delay-3">
                        <div>
                            <div class="review-author-head">
                                <div class="review-avatar-box" style="background:linear-gradient(135deg, #059669 0%, #064E3B 100%);">
                                    DK
                                </div>
                                <div class="review-author-info">
                                    <div class="review-author-name">
                                        <span>Bpk. Dadang Kusnadi</span>
                                        <span class="verified-customer-badge" title="Pembeli Terverifikasi"><i class="fa-solid fa-circle-check"></i></span>
                                    </div>
                                    <div class="review-author-role">Pengrajin Tahu Sumedang Branch</div>
                                </div>
                            </div>

                            <div class="review-rating-row">
                                <div class="review-stars">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span class="review-date-tag">1 bulan lalu</span>
                            </div>

                            <p class="review-content-text">
                                "Ketel boiler uap buatan Adam Jaya sangat efisien hemat kayu bakar &amp; gas. Batu gilingan corundum grade A putarannya seimbang tanpa getaran bising. Harga bengkel tangan pertama sangat transparan dan bergaransi."
                            </p>
                        </div>

                        <div>
                            <div class="review-product-tag">
                                <i class="fa-solid fa-box-open" style="color:var(--wine);"></i>
                                <span>Katel Jubung Boiler + Batu Corundum 10"</span>
                            </div>
                            <div class="review-location-pin">
                                <i class="fa-solid fa-location-dot" style="color:#EF4444;"></i>
                                <span>Sumedang, Jawa Barat</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Mobile Reviews Pagination Dots -->
                <div class="reviews-carousel-dots" id="reviewsDots">
                    <span class="review-dot active" role="button" aria-label="Review 1" onclick="goToReviewSlide(0)"></span>
                    <span class="review-dot" role="button" aria-label="Review 2" onclick="goToReviewSlide(1)"></span>
                    <span class="review-dot" role="button" aria-label="Review 3" onclick="goToReviewSlide(2)"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave into Dark FAQ Section -->
    <div class="section-wave-bottom" style="background:#FAF8F5;">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,22 C340,54 700,10 1060,38 C1240,50 1360,20 1440,25 L1440,60 L0,60 Z" fill="#380812"></path>
        </svg>
    </div>

    <!-- ═══ 10. SECTION FAQ ACCORDION (3D LUXURY STAGE) ═══ -->
    <section class="section" id="faq">
        <!-- Ambient Stage Background -->
        <div class="faq-bg-effects">
            <div class="faq-grid-pattern"></div>
            <div class="faq-glow-left"></div>
            <div class="faq-glow-right"></div>
        </div>

        <div class="container">
            <div class="section-head">
                <h2 class="section-title story-reveal delay-2"><span class="gold-gradient-text">Tanya Jawab</span></h2>
                <p class="section-desc story-reveal delay-3">Jawaban lengkap dan transparan seputar pemesanan mesin pabrikasi tahu, garansi resmi, pengiriman ke seluruh Indonesia, dan servis darurat 24 jam.</p>
            </div>

            <div class="faq-wrap story-reveal delay-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item active">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <div class="faq-q-left">
                            <div class="faq-icon-box"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                            <span class="faq-q-text">Apakah bisa pesan mesin dengan ukuran atau spesifikasi custom?</span>
                        </div>
                        <div class="faq-toggle-btn"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p><strong>Ya, sangat bisa!</strong> Karena kami adalah produsen langsung dengan bengkel manufaktur spesialis, Anda bisa memesan tahang stainless, mesin giling kedelai, cetakan press tahu, atau ketel boiler dengan dimensi, ketebalan plat SUS 304, maupun kapasitas daya dinamo sesuai kebutuhan pabrik Anda.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <div class="faq-q-left">
                            <div class="faq-icon-box"><i class="fa-solid fa-truck-fast"></i></div>
                            <span class="faq-q-text">Bagaimana sistem pengiriman ke luar kota Bandung atau luar pulau?</span>
                        </div>
                        <div class="faq-toggle-btn"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>Kami melayani pengiriman ke seluruh wilayah <strong>Jawa Barat, Pulau Jawa, Sumatera, Kalimantan, Sulawesi, hingga kawasan timur Indonesia</strong> menggunakan ekspedisi kargo terpercaya dengan pengemasan rangka kayu kokoh tahan guncangan.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <div class="faq-q-left">
                            <div class="faq-icon-box"><i class="fa-solid fa-shield-halved"></i></div>
                            <span class="faq-q-text">Apakah tersedia sparepart presisi dan garansi servis resmi?</span>
                        </div>
                        <div class="faq-toggle-btn"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>Semua mesin rakitan Adam Jaya dilengkapi dengan <strong>garansi servis resmi</strong>. Ketersediaan suku cadang seperti batu gilingan corundum, vanbelt, puli transmisi, kran kuningan/stainless, serta kain peresan selalu <em>ready stock</em> di workshop kami.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <div class="faq-q-left">
                            <div class="faq-icon-box"><i class="fa-solid fa-clock-rotate-left"></i></div>
                            <span class="faq-q-text">Kapan jam operasional workshop dan layanan Adam Jaya?</span>
                        </div>
                        <div class="faq-toggle-btn"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>Workshop bengkel manufaktur kami buka setiap hari <strong>Senin sampai Jumat dari pukul 07.00 pagi hingga 18.00 sore WIB</strong>. Untuk hari Sabtu &amp; Minggu melayani via janji temu, dan konsultasi teknis darurat tetap dapat dihubungi melalui Hotline WhatsApp kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave out of Dark FAQ Section into Lokasi -->
    <div class="section-wave-top" style="background:#380812;">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,25 C280,55 600,10 920,40 C1160,55 1320,15 1440,25 L1440,60 L0,60 Z" fill="#F8FAFC"></path>
        </svg>
    </div>

    <!-- ═══ 12. SECTION LOKASI WORKSHOP & PETA ═══ -->
    <section class="section" id="lokasi">
        <div class="container">
            <div class="location-card story-scale-up delay-2">
                <div class="location-inner">
                    <div class="location-info">
                        <span class="section-tag"><i class="fa-solid fa-location-crosshairs"></i> BENGKEL MANUFAKTUR BANDUNG</span>
                        <h3>Kunjungi Workshop Kami</h3>
                        <p>Pusat pembuatan &amp; perbaikan peralatan pabrikasi tahu, mesin giling kedelai, cetakan stainless, serta alat cetak sablon plastik kemasan.</p>

                        <div class="location-detail">
                            <div class="location-detail-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div>
                                <h4>Alamat Workshop</h4>
                                <p>Jl. Aki Padma No.51, Babakan, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat 40222</p>
                            </div>
                        </div>

                        <div class="location-detail">
                            <div class="location-detail-icon"><i class="fa-solid fa-phone"></i></div>
                            <div>
                                <h4>Telepon / WhatsApp</h4>
                                <p><strong style="color:var(--wine);">0812-2160-1558</strong> (Fast Response Hotline)</p>
                            </div>
                        </div>

                        <div class="location-detail">
                            <div class="location-detail-icon"><i class="fa-solid fa-clock"></i></div>
                            <div>
                                <h4>Jam Operasional Workshop</h4>
                                <p><strong style="color:#059669;">Senin – Jumat: 07.00 – 18.00 WIB</strong> (Sabtu &amp; Minggu: Janji Temu)</p>
                            </div>
                        </div>

                        <div class="location-btns">
                            <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20mau%20berkunjung%20ke%20workshop" target="_blank" class="btn btn-wine btn-md">
                                <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp
                            </a>
                            <a href="https://maps.google.com/?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222" target="_blank" class="btn btn-gold btn-md">
                                <i class="fa-solid fa-diamond-turn-right"></i> Petunjuk Arah (GPS)
                            </a>
                        </div>
                    </div>

                    <!-- Embedded Google Maps Frame -->
                    <div class="location-map">
                        <iframe src="https://maps.google.com/maps?q=Jl.+Aki+Padma+No.51,+Babakan,+Kec.+Babakan+Ciparay,+Kota+Bandung,+Jawa+Barat+40222&t=&z=16&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Peta Lokasi Workshop Adam Jaya"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave into Dark Corporate Footer -->
    <div class="section-wave-bottom" style="background:#F8FAFC;">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,20 C320,50 680,10 1020,40 C1220,52 1360,22 1440,25 L1440,60 L0,60 Z" fill="#380812"></path>
        </svg>
    </div>

    <!-- ═══ 13. FOOTER CORPORATE ═══ -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="#beranda" class="footer-brand">
                        <img src="{{ asset('assets/adamjaya.png') }}" alt="Logo Adam Jaya">
                        <span class="footer-brand-name">ADAM JAYA</span>
                    </a>
                    <p class="footer-desc">Solusi peralatan produksi tahu berkualitas dan perlengkapan plastik sablon terlengkap. Workshop bengkel manufaktur terpercaya di Bandung dengan dedikasi lebih dari 24 tahun.</p>
                </div>

                <div>
                    <h4 class="footer-title">Kategori Unggulan</h4>
                    <ul class="footer-links">
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin', null)">Mesin Giling Kedelai</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('mesin', null)">Pemecah Kulit Ari</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('stainless', null)">Tahang Stainless Steel</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('stainless', null)">Batu Gilingan &amp; Katel</a></li>
                        <li><a href="#katalog-stok" onclick="filterCatalog('plastik', null)">Plastik Sablon Custom</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="footer-title">Navigasi Cepat</h4>
                    <ul class="footer-links">
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#katalog-stok">Master Stok Barang</a></li>
                        <li><a href="#keunggulan">Keunggulan Mutu</a></li>
                        <li><a href="#proyek">Galeri Fabrikasi</a></li>
                        <li><a href="http://localhost/adamjaya-enterprise/login.php" target="_blank">Portal Enterprise B2B</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="footer-title">Workshop Bandung</h4>
                    <div style="font-size:0.82rem; color:rgba(255,255,255,0.7); line-height:1.65;">
                        <p><strong>Jl. Aki Padma No.51</strong>, Babakan, Kec. Babakan Ciparay, Bandung 40222</p>
                        <p style="margin-top:0.4rem;"><strong>Jam Operasional:</strong> <span style="color:var(--gold-bright);">Senin – Jumat (07.00 – 18.00 WIB)</span></p>
                        <p style="margin-top:0.4rem;"><strong>Hotline WhatsApp:</strong> 0812-2160-1558</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} PT Adam Jaya Enterprise. All rights reserved.</span>
                <span>Google Rating: 4.9 ⭐ (4.211 Ulasan) — Bandung Machine Workshop</span>
            </div>
        </div>
    </footer>

    <!-- ═══ 14. FLOATING ACTION HUBS ═══ -->
    <!-- Floating Live Assistant (AI Machine Advisor) -->
    <div class="floating-assistant-trigger" onclick="toggleAssistantModal()" title="Konsultasi Mesin dengan Asisten AI">
        <div class="assistant-btn-circle">
            <i class="fa-solid fa-robot"></i>
            <div class="assistant-online-dot"></div>
        </div>
        <div class="assistant-callout-pill">
            <i class="fa-solid fa-comments"></i>
            <span>Butuh Bantuan Memilih Mesin?</span>
        </div>
    </div>

    <!-- Assistant Chat Modal Window (AI Natural Language Engine) -->
    <div class="assistant-modal-chat" id="machineAssistantModal">
        <div class="assistant-chat-header">
            <div class="assistant-header-left">
                <div class="assistant-avatar-head">
                    <i class="fa-solid fa-robot"></i>
                </div>
                <div>
                    <h4 class="assistant-header-title">Adam Jaya AI</h4>
                    <span class="assistant-header-sub"><i class="fa-solid fa-circle"></i> Online • AI Advisor Aktif</span>
                </div>
            </div>
            <div class="assistant-header-actions">
                <button class="assistant-action-btn" onclick="resetAssistantChat()" title="Reset Percakapan"><i class="fa-solid fa-rotate-right"></i></button>
                <button class="assistant-action-btn" onclick="toggleAssistantModal()" title="Tutup"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>

        <div class="assistant-chat-body" id="assistantChatBody">
            <!-- Messages rendered dynamically by JS -->
        </div>

        <!-- Quick Suggestion Prompt Chips -->
        <div class="assistant-quick-chips" id="assistantQuickChips">
            <button class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Jam buka dan operasional workshop Adam Jaya')">🕒 Jam Buka (07.00 - 18.00)</button>
            <button class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Rekomendasi mesin untuk 250 kg kedelai per hari')">💡 250 kg/hari</button>
            <button class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Berapa harga mesin giling kedelai?')">💰 Mesin Giling Kedelai</button>
            <button class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Bagaimana 5 tahapan proses fabrikasi mesin?')">⚙️ Proses Fabrikasi</button>
            <button class="assistant-chip-btn" onclick="sendAssistantQuickPrompt('Alamat workshop dan nomor WhatsApp')">📍 Alamat &amp; Kontak</button>
        </div>

        <!-- Text Input Form for Natural Typing -->
        <form class="assistant-input-bar" id="assistantChatForm" onsubmit="event.preventDefault(); submitAssistantInput();">
            <input type="text" id="assistantTextInput" class="assistant-text-input" placeholder="Tulis pertanyaan Anda seputar mesin..." autocomplete="off">
            <button type="submit" class="assistant-send-btn" id="assistantSendBtn" title="Kirim Pertanyaan">
                <i class="fa-solid fa-paper-plane"></i>
            </button>
        </form>
    </div>

    <!-- ═══ 14. FLOATING BACK TO TOP ═══ -->
    <button id="scrollTopBtn" class="scroll-top" onclick="scrollToTop()" title="Kembali ke atas" aria-label="Scroll ke atas">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- ═══ 15. INTERACTIVE PRODUCT DETAIL MODAL ═══ -->
    <div class="modal-overlay" id="productModal">
        <div class="modal-box">
            <button class="modal-close" onclick="closeProductModal()" aria-label="Tutup"><i class="fa-solid fa-xmark"></i></button>
            <div class="modal-head">
                <div class="modal-icon">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div>
                    <h3 id="modalProductName">Nama Produk</h3>
                    <span id="modalProductCategory">Kategori</span>
                </div>
            </div>

            <p id="modalProductDesc" style="font-size:0.88rem; color:var(--ink-muted); line-height:1.6; margin-bottom:1rem;">Deskripsi produk.</p>

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
                        <td>Kapasitas Output</td>
                        <td id="modalSpecCapacity">-</td>
                    </tr>
                    <tr>
                        <td>Garansi &amp; Servis</td>
                        <td id="modalSpecWarranty">-</td>
                    </tr>
                </tbody>
            </table>

            <!-- Pilihan Varian Ukuran & Harga Satuan Real Database -->
            <div id="modalVariantsWrap" style="margin: 1.2rem 0; display: none;">
                <h4 style="font-family:var(--font-head); font-size:0.88rem; font-weight:800; color:var(--ink); margin-bottom:0.6rem; display:flex; align-items:center; gap:0.4rem;">
                    <i class="fa-solid fa-list-check" style="color:var(--gold-bright);"></i> Pilihan Varian Ukuran &amp; Harga:
                </h4>
                <div style="max-height: 190px; overflow-y: auto; border: 1px solid rgba(10,22,40,0.1); border-radius: 12px; background:#FFFFFF;">
                    <table class="spec-table" style="margin:0; width:100%;">
                        <thead>
                            <tr style="background:#F8FAFC; border-bottom:1px solid rgba(10,22,40,0.1);">
                                <th style="padding:0.6rem 0.85rem; font-size:0.75rem; text-align:left; color:var(--ink); font-weight:800;">Nama Jenis / Ukuran</th>
                                <th style="padding:0.6rem 0.85rem; font-size:0.75rem; text-align:right; color:var(--ink); font-weight:800;">Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody id="modalVariantsBody">
                            <!-- Populated dynamically by showCatalogProductModal -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-benefits">
                <h4><i class="fa-solid fa-circle-check" style="color:#10B981;"></i> Fasilitas Pembelian Adam Jaya:</h4>
                <ul>
                    <li>100% Produk Tangan Pertama Bengkel Manufaktur Resmi</li>
                    <li>Gratis Konsultasi Setting Mesin &amp; Kapasitas Produksi</li>
                    <li>Suku Cadang &amp; Mekanik Siap Panggil 24 Jam Nonstop</li>
                </ul>
            </div>

            <button onclick="submitModalWA()" class="btn btn-wine btn-lg" style="width:100%;">
                <i class="fa-brands fa-whatsapp"></i> Dapatkan Penawaran Harga via WhatsApp
            </button>
        </div>
    </div>

    <!-- ═══ 16. LIGHTBOX IMAGE ZOOM MODAL ═══ -->
    <div class="modal-overlay" id="lightboxModal" onclick="closeLightbox()">
        <div style="max-width:850px; width:90%; position:relative;" onclick="event.stopPropagation()">
            <button class="modal-close" onclick="closeLightbox()" style="top:-15px; right:-15px; background:#fff; color:#000;" aria-label="Tutup"><i class="fa-solid fa-xmark"></i></button>
            <img id="lightboxImg" src="" alt="Zoom Foto Fabrikasi" style="width:100%; border-radius:var(--r-xl); box-shadow:0 20px 60px rgba(0,0,0,0.8); border:3px solid var(--gold-bright);">
            <div id="lightboxCaption" style="color:#fff; text-align:center; margin-top:0.8rem; font-family:var(--font-head); font-weight:700; font-size:1rem;">Caption Foto</div>
        </div>
    </div>

    <!-- ═══ 17. JAVASCRIPT — COMPLETE INTERACTIVE ENGINE ═══ -->
    <script>
    // ── Floating Navbar Glass Scrolled Effect & Scroll-To-Top Listener ──
    const mainNavbar = document.getElementById('mainNavbar');
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            mainNavbar.classList.add('scrolled');
        } else {
            mainNavbar.classList.remove('scrolled');
        }

        if (window.scrollY > 350) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }

        updateScrollSpy();
    });

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function toggleMobileDrawer() {
        document.getElementById('mobileDrawer').classList.toggle('active');
    }

    // Auto-close mobile drawer when tapping outside
    document.addEventListener('click', (e) => {
        const drawer = document.getElementById('mobileDrawer');
        const toggle = document.getElementById('mobileNavToggle');
        if (drawer && drawer.classList.contains('active')) {
            if (!drawer.contains(e.target) && !toggle.contains(e.target)) {
                drawer.classList.remove('active');
            }
        }
    });

    // ── ScrollSpy for Navigation Links ──
    function updateScrollSpy() {
        const sections = document.querySelectorAll('section[id]');
        const scrollPos = window.scrollY + 120;

        sections.forEach(sec => {
            const top = sec.offsetTop;
            const height = sec.offsetHeight;
            const id = sec.getAttribute('id');
            const link = document.querySelector(`.nav-link[href="#${id}"]`);

            if (link) {
                if (scrollPos >= top && scrollPos < top + height) {
                    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                    link.classList.add('active');
                }
            }
        });
    }

    // ── Live Catalog Filter, Search & Pagination Engine ──
    let activeFilterCat = 'all';
    const ITEMS_PER_PAGE = 8;
    let currentDisplayLimit = ITEMS_PER_PAGE;

    function filterCatalog(category, btn) {
        activeFilterCat = category;
        currentDisplayLimit = ITEMS_PER_PAGE;
        if (btn) {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        }
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
        const emptyState = document.getElementById('catalogEmptyState');

        cards.sort((a, b) => {
            const priceA = parseInt(a.dataset.price || '0');
            const priceB = parseInt(b.dataset.price || '0');
            const idA = parseInt(a.dataset.id || '0');
            const idB = parseInt(b.dataset.id || '0');
            const orderA = parseInt(a.dataset.order || '0');
            const orderB = parseInt(b.dataset.order || '0');

            if (sortValue === 'harga-asc') {
                return priceA - priceB;
            } else if (sortValue === 'harga-desc') {
                return priceB - priceA;
            } else if (sortValue === 'terbaru') {
                return idB - idA;
            } else {
                return orderA - orderB;
            }
        });

        cards.forEach(card => grid.insertBefore(card, emptyState));
        currentDisplayLimit = ITEMS_PER_PAGE;
        applyCatalogFilters();
    }

    function loadMoreCatalog() {
        currentDisplayLimit += ITEMS_PER_PAGE;
        applyCatalogFilters();
    }

    function applyCatalogFilters() {
        const query = document.getElementById('catalogSearchInput').value.toLowerCase().trim();
        const cards = document.querySelectorAll('#catalogGrid .product-card');
        let matchingCards = [];

        cards.forEach(card => {
            const cat = card.dataset.cat;
            const name = (card.dataset.name || '').toLowerCase();
            const id = (card.dataset.id || '').toLowerCase();
            const textContent = card.innerText.toLowerCase();

            const matchCat = (activeFilterCat === 'all' || cat === activeFilterCat);
            const matchSearch = (query === '' || name.includes(query) || id.includes(query) || textContent.includes(query));

            if (matchCat && matchSearch) {
                matchingCards.push(card);
            } else {
                card.style.display = 'none';
            }
        });

        // Paginate matching cards
        matchingCards.forEach((card, index) => {
            if (index < currentDisplayLimit) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });

        const totalMatching = matchingCards.length;
        const emptyState = document.getElementById('catalogEmptyState');
        const loadMoreWrap = document.getElementById('catalogLoadMoreWrap');
        const btnLoadMore = document.getElementById('btnLoadMore');
        const loadMoreCountBadge = document.getElementById('loadMoreCountBadge');
        const catalogAllLoadedText = document.getElementById('catalogAllLoadedText');
        const totalVisibleBadge = document.getElementById('totalVisibleBadge');

        if (totalMatching === 0) {
            emptyState.classList.add('active');
            if (loadMoreWrap) loadMoreWrap.style.display = 'none';
        } else {
            emptyState.classList.remove('active');
            if (loadMoreWrap) {
                loadMoreWrap.style.display = 'block';
                if (currentDisplayLimit < totalMatching) {
                    btnLoadMore.style.display = 'inline-flex';
                    const remaining = totalMatching - currentDisplayLimit;
                    loadMoreCountBadge.textContent = `+${Math.min(ITEMS_PER_PAGE, remaining)}`;
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
        currentDisplayLimit = ITEMS_PER_PAGE;
        filterCatalog('all', document.querySelector('.filter-btn[data-filter="all"]'));
        handleCatalogSort();
    }

    // Dynamic Filter Count Updater
    function updateCatalogCounts() {
        const allCards = document.querySelectorAll('#catalogGrid .product-card');
        const countMap = {
            'all': allCards.length,
            'mesin-plastik': 0,
            'mesin-kemasan': 0,
            'mesin-tahu': 0,
            'sparepart': 0,
            'lainnya': 0
        };

        allCards.forEach(card => {
            const cat = card.dataset.cat;
            if (countMap[cat] !== undefined) {
                countMap[cat]++;
            }
        });

        const countAll = document.getElementById('countAll');
        if (countAll) countAll.textContent = countMap['all'];
        const countPlastik = document.getElementById('countPlastik');
        if (countPlastik) countPlastik.textContent = countMap['mesin-plastik'];
        const countKemasan = document.getElementById('countKemasan');
        if (countKemasan) countKemasan.textContent = countMap['mesin-kemasan'];
        const countTahu = document.getElementById('countTahu');
        if (countTahu) countTahu.textContent = countMap['mesin-tahu'];
        const countSparepart = document.getElementById('countSparepart');
        if (countSparepart) countSparepart.textContent = countMap['sparepart'];
        const countLainnya = document.getElementById('countLainnya');
        if (countLainnya) countLainnya.textContent = countMap['lainnya'];
    }

    document.addEventListener('DOMContentLoaded', () => {
        updateCatalogCounts();
        applyCatalogFilters();
    });



    // ═══════════════════════════════════════════════════════════
    // ── 7. ANIMATED STATISTICS COUNT-UP OBSERVER ──
    // ═══════════════════════════════════════════════════════════
    function initStatsCounter() {
        const statCounters = document.querySelectorAll('.stat-counter');
        if (!statCounters.length) return;

        let hasAnimated = false;

        function runCountUp() {
            if (hasAnimated) return;
            hasAnimated = true;

            statCounters.forEach(counter => {
                const target = parseInt(counter.dataset.target || '0');
                const suffix = counter.dataset.suffix || '';
                const format = counter.dataset.format || '';
                const duration = 1800; // ms
                let startTimestamp = null;

                function step(timestamp) {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    const easeProgress = 1 - Math.pow(1 - progress, 3); // easeOutCubic
                    const current = Math.round(target * easeProgress);

                    let formattedCurrent = current;
                    if (format === 'thousand') {
                        formattedCurrent = new Intl.NumberFormat('id-ID').format(current);
                    }

                    counter.textContent = `${formattedCurrent}${suffix}`;

                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    } else {
                        let finalVal = target;
                        if (format === 'thousand') finalVal = new Intl.NumberFormat('id-ID').format(target);
                        counter.textContent = `${finalVal}${suffix}`;
                    }
                }

                window.requestAnimationFrame(step);
            });
        }

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        runCountUp();
                        observer.disconnect();
                    }
                });
            }, { threshold: 0.2 });

            const triggerElem = document.getElementById('whyStatsRibbon') || document.getElementById('keunggulan');
            if (triggerElem) observer.observe(triggerElem);
        } else {
            runCountUp();
        }
    }

    document.addEventListener('DOMContentLoaded', initStatsCounter);

    // ── Portfolio Carousel Slider ──
    let portIndex = 0;
    const portTrack = document.getElementById('portfolioTrack');
    const portItems = document.querySelectorAll('.portfolio-item');

    function updatePortSlide() {
        if (!portItems.length) return;
        const itemWidth = portItems[0].getBoundingClientRect().width + 19.2;
        portTrack.style.transform = `translateX(-${portIndex * itemWidth}px)`;
    }

    function nextPortSlide() {
        const visibleItems = window.innerWidth <= 768 ? 1 : (window.innerWidth <= 1024 ? 2 : 3);
        const maxIndex = Math.max(0, portItems.length - visibleItems);
        portIndex = portIndex >= maxIndex ? 0 : portIndex + 1;
        updatePortSlide();
    }

    function prevPortSlide() {
        const visibleItems = window.innerWidth <= 768 ? 1 : (window.innerWidth <= 1024 ? 2 : 3);
        const maxIndex = Math.max(0, portItems.length - visibleItems);
        portIndex = portIndex <= 0 ? maxIndex : portIndex - 1;
        updatePortSlide();
    }

    window.addEventListener('resize', updatePortSlide);

    // ── Product Detail Modal Handlers (Real Database Catalog) ──
    const catalogMaster = @json($products);
    let selectedProductName = '';
    let selectedProductID = '';

    function showCatalogProductModal(id) {
        const item = catalogMaster.find(p => p.id == id);
        if (!item) return;

        selectedProductName = item.nama_barang;
        selectedProductID = item.id;

        document.getElementById('modalProductName').textContent = item.nama_barang;
        document.getElementById('modalProductCategory').textContent = item.category_label || 'Peralatan Pabrik';
        
        let desc = `Produk ${item.nama_barang} resmi dari Bengkel Manufaktur Adam Jaya Enterprise Bandung. Dikerjakan langsung tangan pertama dengan presisi tinggi dan mutu teruji.`;
        let power = item.category === 'mesin-tahu' ? 'Dinamo Listrik / Mesin Bensin' : (item.category === 'mesin-kemasan' ? 'Daya Pemanas Otomatis' : 'Manual / Sesuai Penggunaan');
        let material = item.nama_barang.toLowerCase().includes('sten') ? 'Stainless Steel SUS 304 Food-Grade' : (item.nama_barang.toLowerCase().includes('jati') ? 'Kayu Jati Asli Pilihan' : 'Baja Padat / Standar Manufaktur');
        let cap = item.variants && item.variants.length ? `${item.variants.length} Pilihan Varian` : 'Sesuai Spesifikasi';
        let warranty = 'Garansi Servis Resmi Bengkel';

        document.getElementById('modalProductDesc').textContent = desc;
        document.getElementById('modalSpecPower').textContent = power;
        document.getElementById('modalSpecMaterial').textContent = material;
        document.getElementById('modalSpecCapacity').textContent = cap;
        document.getElementById('modalSpecWarranty').textContent = warranty;

        // Variants Table
        const variantsWrap = document.getElementById('modalVariantsWrap');
        const variantsBody = document.getElementById('modalVariantsBody');
        if (variantsWrap && variantsBody) {
            if (item.variants && item.variants.length > 0) {
                variantsWrap.style.display = 'block';
                variantsBody.innerHTML = item.variants.map(v => {
                    const priceFormatted = v.harga > 0 ? `Rp ${new Intl.NumberFormat('id-ID').format(v.harga)} / ${v.satuan || 'unit'}` : '<span style="color:var(--gold-dark); font-weight:700;">Hubungi CS</span>';
                    const stokBadge = v.stok > 0 ? `<span style="font-size:0.7rem; background:rgba(16,185,129,0.12); color:#059669; padding:0.1rem 0.4rem; border-radius:4px; margin-left:0.3rem;">Stok: ${v.stok}</span>` : '';
                    return `<tr>
                        <td style="padding:0.55rem 0.85rem; font-weight:600; font-size:0.82rem; color:var(--ink);">${v.nama_jenis} ${stokBadge}</td>
                        <td style="padding:0.55rem 0.85rem; text-align:right; font-weight:700; color:var(--wine); font-size:0.82rem;">${priceFormatted}</td>
                    </tr>`;
                }).join('');
            } else {
                variantsWrap.style.display = 'none';
                variantsBody.innerHTML = '';
            }
        }

        document.getElementById('productModal').classList.add('active');
    }

    function openProductModal(name, id, cat, desc, power, material, cap, warranty) {
        showCatalogProductModal(id);
    }

    function closeProductModal() {
        document.getElementById('productModal').classList.remove('active');
    }

    function submitModalWA() {
        closeProductModal();
        const msg = encodeURIComponent(`Halo PT Adam Jaya Enterprise Bandung,\nSaya tertarik memesan / konsultasi produk:\n- Produk: ${selectedProductName}\n\nMohon info ketersediaan stok & harga terbaik.`);
        window.open(`https://wa.me/6281221601558?text=${msg}`, '_blank');
    }

    // ── Lightbox Image Modal ──
    function openLightbox(imgSrc, caption) {
        document.getElementById('lightboxImg').src = imgSrc;
        document.getElementById('lightboxCaption').textContent = caption;
        document.getElementById('lightboxModal').classList.add('active');
    }

    function closeLightbox() {
        document.getElementById('lightboxModal').classList.remove('active');
    }

    // ── FAQ Accordion Toggle ──
    function toggleFaq(elem) {
        const item = elem.parentElement;
        const isActive = item.classList.contains('active');
        
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
        if (!isActive) {
            item.classList.add('active');
        }
    }

    // Close Modals on Outer Click
    const pModal = document.getElementById('productModal');
    if (pModal) {
        pModal.addEventListener('click', function(e) {
            if (e.target === this) closeProductModal();
        });
    }

    // ── 3D Interactive Card Tilt Engine ──
    if (window.matchMedia('(pointer: fine)').matches) {
        const pCards = document.querySelectorAll('.product-card');
        pCards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = ((y - centerY) / centerY) * -7;
                const rotateY = ((x - centerX) / centerX) * 7;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-8px) scale(1.02)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });
        });
    }

    // ── Scroll Storytelling IntersectionObserver Engine ──
    document.addEventListener('DOMContentLoaded', () => {
        const storyElements = document.querySelectorAll('.story-reveal, .story-slide-right, .story-slide-left, .story-scale-up');
        
        // Initial reveal for Hero elements with slight delay for cinematic entrance
        setTimeout(() => {
            const heroStory = document.querySelectorAll('#beranda .story-reveal, #beranda .story-slide-right, #beranda .story-slide-left, #beranda .story-scale-up');
            heroStory.forEach(el => el.classList.add('story-revealed'));
        }, 120);

        if ('IntersectionObserver' in window) {
            const storyObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('story-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -50px 0px'
            });

            storyElements.forEach(el => {
                if (!el.closest('#beranda')) {
                    storyObserver.observe(el);
                }
            });
        } else {
            // Fallback for older browsers
            storyElements.forEach(el => el.classList.add('story-revealed'));
        }
    });

    // ── Video Testimonial Modal Handlers ──
    function openVideoTestimonial() {
        const modal = document.getElementById('videoModal');
        const player = document.getElementById('testimonialVideoPlayer');
        if (modal) modal.classList.add('active');
        if (player) {
            player.currentTime = 0;
            player.play().catch(() => {});
        }
    }

    function closeVideoTestimonial() {
        const modal = document.getElementById('videoModal');
        const player = document.getElementById('testimonialVideoPlayer');
        if (modal) modal.classList.remove('active');
        if (player) player.pause();
    }

    // ── Engineering Timeline Scroll-Progress Engine ──
    function initEngineeringTimeline() {
        const timelineWrap = document.getElementById('engineeringTimeline');
        const spineFill = document.getElementById('timelineSpineFill');
        const stepRows = document.querySelectorAll('.timeline-step-row');
        if (!timelineWrap || !spineFill || !stepRows.length) return;

        function updateTimeline() {
            const rect = timelineWrap.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            
            // Calculate progress through timeline container
            const startTrigger = windowHeight * 0.75;
            const totalDistance = rect.height;
            const scrolledPast = startTrigger - rect.top;
            
            let progress = Math.min(Math.max(scrolledPast / totalDistance, 0), 1);
            spineFill.style.height = `${(progress * 100).toFixed(1)}%`;

            // Activate nodes as scroll passes them
            stepRows.forEach(row => {
                const nodeRect = row.getBoundingClientRect();
                if (nodeRect.top < windowHeight * 0.65) {
                    row.classList.add('active');
                } else {
                    row.classList.remove('active');
                }
            });
        }

        window.addEventListener('scroll', updateTimeline, { passive: true });
        window.addEventListener('resize', updateTimeline);
        updateTimeline();
    }

    document.addEventListener('DOMContentLoaded', initEngineeringTimeline);

    // ═══════════════════════════════════════════════════════════
    // ── 16. LIVE AI MACHINE ASSISTANT (NATURAL LANGUAGE ENGINE) ──
    // ═══════════════════════════════════════════════════════════
    let assistantChatHistory = [];
    let isAssistantReplying = false;

    function toggleAssistantModal() {
        const modal = document.getElementById('machineAssistantModal');
        if (!modal) return;
        const isActive = modal.classList.contains('active');
        if (isActive) {
            modal.classList.remove('active');
        } else {
            modal.classList.add('active');
            if (assistantChatHistory.length === 0) {
                renderAssistantWelcome();
            }
            setTimeout(() => {
                const input = document.getElementById('assistantTextInput');
                if (input) input.focus();
            }, 300);
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

        const welcomeText = `👋 <strong>Halo! Saya Adam Jaya AI</strong> — Asisten Mesin Tahu.<br><br>` +
            `Siap bantu cek <strong>stok &amp; harga</strong>, <strong>rekomendasi kapasitas</strong>, dan <strong>servis 24 jam</strong>.<br><br>` +
            `<em>Silakan ketik pertanyaan Anda!</em>`;

        body.innerHTML = `<div class="assistant-bubble-bot">${welcomeText}</div>`;
        assistantChatHistory.push({ role: 'bot', text: welcomeText });
        body.scrollTop = 0;
    }

    function formatAIMarkdown(text) {
        if (!text) return '';
        let formatted = text;
        // Headings ###
        formatted = formatted.replace(/### (.*?)$/gm, '<h5 style="color:#E8D5A0; font-weight:800; margin-top:0.6rem; margin-bottom:0.2rem; font-size:0.88rem;">$1</h5>');
        formatted = formatted.replace(/## (.*?)$/gm, '<h4 style="color:#E8D5A0; font-weight:800; margin-top:0.6rem; margin-bottom:0.2rem; font-size:0.92rem;">$1</h4>');
        // Bold
        formatted = formatted.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
        // Italic
        formatted = formatted.replace(/\*(.*?)\*/g, '<em>$1</em>');
        // Horizontal Rule
        formatted = formatted.replace(/---/g, '<hr style="border:none; border-top:1px solid rgba(201,168,76,0.25); margin:0.6rem 0;">');
        // Bullet points (•, *, -)
        formatted = formatted.replace(/^[•\*\-] (.*?)$/gm, '<li style="margin-left:1.1rem; margin-bottom:0.25rem;">$1</li>');
        // Numbers (1., 2., etc)
        formatted = formatted.replace(/^(\d+)\. (.*?)$/gm, '<li style="margin-left:1.1rem; margin-bottom:0.25rem;"><strong>$1.</strong> $2</li>');
        // Newlines
        formatted = formatted.replace(/\n/g, '<br>');
        return formatted;
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
        const sendBtn = document.getElementById('assistantSendBtn');

        if (!input || !body) return;
        const message = input.value.trim();
        if (!message) return;

        // 1. Clear input & disable button
        input.value = '';
        isAssistantReplying = true;
        if (sendBtn) sendBtn.disabled = true;

        // 2. Render User Message
        const userMsgDiv = document.createElement('div');
        userMsgDiv.className = 'assistant-bubble-user';
        userMsgDiv.innerText = message;
        body.appendChild(userMsgDiv);
        assistantChatHistory.push({ role: 'user', text: message });

        // 3. Render Typing Indicator
        const typingDiv = document.createElement('div');
        typingDiv.className = 'assistant-typing-indicator';
        typingDiv.id = 'assistantTypingLoader';
        typingDiv.innerHTML = `
            <span class="typing-dot"></span>
            <span class="typing-dot"></span>
            <span class="typing-dot"></span>
            <span style="font-size:0.72rem; color:var(--gold-bright); margin-left:0.3rem;">AI sedang memproses...</span>
        `;
        body.appendChild(typingDiv);
        body.scrollTop = body.scrollHeight;

        try {
            // 4. Send request to Laravel backend
            const response = await fetch('/api/chat-ai', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    message: message,
                    history: assistantChatHistory.slice(-6) // Send recent context
                })
            });

            // Remove typing indicator
            const loader = document.getElementById('assistantTypingLoader');
            if (loader) loader.remove();

            if (response.ok) {
                const data = await response.json();
                const replyText = data.reply || 'Maaf, terjadi kendala saat memproses jawaban. Silakan tanyakan kembali atau hubungi WhatsApp kami.';
                
                const botMsgDiv = document.createElement('div');
                botMsgDiv.className = 'assistant-bubble-bot';
                botMsgDiv.innerHTML = formatAIMarkdown(replyText);

                // Add quick contact CTA if advice or price is given
                if (replyText.toLowerCase().includes('whatsapp') || replyText.toLowerCase().includes('0812') || replyText.toLowerCase().includes('rp')) {
                    const ctaDiv = document.createElement('div');
                    ctaDiv.style.marginTop = '0.6rem';
                    ctaDiv.innerHTML = `
                        <a href="https://wa.me/6281221601558?text=${encodeURIComponent('Halo Adam Jaya, saya mau konsultasi lanjutan: ' + message)}" target="_blank" class="btn btn-wine btn-sm" style="width:100%; display:inline-flex; align-items:center; justify-content:center; gap:0.4rem; font-size:0.76rem; padding:0.4rem 0.8rem; margin-top:0.4rem;">
                            <i class="fa-brands fa-whatsapp"></i> Hubungi Kepala Mekanik (0812-2160-1558)
                        </a>
                    `;
                    botMsgDiv.appendChild(ctaDiv);
                }

                body.appendChild(botMsgDiv);
                assistantChatHistory.push({ role: 'bot', text: replyText });
            } else {
                throw new Error('Server response was not ok');
            }
        } catch (error) {
            console.error('Chat error:', error);
            const loader = document.getElementById('assistantTypingLoader');
            if (loader) loader.remove();

            const errorDiv = document.createElement('div');
            errorDiv.className = 'assistant-bubble-bot';
            errorDiv.innerHTML = `
                ⚠️ <em>Koneksi sedang sibuk. Silakan hubungi langsung tim teknisi kami:</em><br>
                <a href="https://wa.me/6281221601558?text=Halo%20Adam%20Jaya,%20saya%20mau%20tanya%20mesin" target="_blank" class="btn btn-wine btn-sm" style="width:100%; margin-top:0.4rem;">
                    <i class="fa-brands fa-whatsapp"></i> WhatsApp Teknisi 24 Jam
                </a>
            `;
            body.appendChild(errorDiv);
        } finally {
            isAssistantReplying = false;
            if (sendBtn) sendBtn.disabled = false;
            body.scrollTop = body.scrollHeight;
            if (input) input.focus();
        }
    }

    function scrollToCatalogAndHighlight(productId) {
        toggleAssistantModal();
        const catalogSection = document.getElementById('katalog-stok');
        if (catalogSection) {
            catalogSection.scrollIntoView({ behavior: 'smooth' });
        }
    }

    // ── 1. Intelligent Navbar Shrink & Back-to-Top Observer ──
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function initNavbarAndBackToTop() {
        const navbar = document.querySelector('.navbar');
        const navbarWrap = document.querySelector('.navbar-wrap');
        const scrollBtn = document.getElementById('scrollTopBtn');

        function handleScroll() {
            const scrollPos = window.scrollY;

            // Intelligent Navbar Shrink (> 40px)
            if (scrollPos > 40) {
                if (navbar) navbar.classList.add('scrolled');
                if (navbarWrap) navbarWrap.classList.add('scrolled');
            } else {
                if (navbar) navbar.classList.remove('scrolled');
                if (navbarWrap) navbarWrap.classList.remove('scrolled');
            }

            // Elegant Back-to-Top (> 500px)
            if (scrollBtn) {
                if (scrollPos > 500) {
                    scrollBtn.classList.add('visible');
                } else {
                    scrollBtn.classList.remove('visible');
                }
            }
        }

        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();
    }

    document.addEventListener('DOMContentLoaded', initNavbarAndBackToTop);

    // ── 2. Subtle Hero Desktop Mouse Parallax Interaction ──
    function initHeroMouseParallax() {
        if (!window.matchMedia('(pointer: fine)').matches) return;

        const heroWrap = document.getElementById('beranda');
        const heroMachine = document.querySelector('.hero-machine-img');
        const heroGlow = document.querySelector('.machine-backdrop-glow');
        const heroGrid = document.querySelector('.hero-blueprint-grid');
        const heroArc = document.querySelector('.hero-gold-arc');

        if (!heroWrap) return;

        let targetX = 0, targetY = 0;
        let currentX = 0, currentY = 0;
        let isHovered = false;

        heroWrap.addEventListener('mousemove', (e) => {
            const rect = heroWrap.getBoundingClientRect();
            targetX = (e.clientX - rect.left) / rect.width - 0.5; // -0.5 to 0.5
            targetY = (e.clientY - rect.top) / rect.height - 0.5;
            isHovered = true;
        }, { passive: true });

        heroWrap.addEventListener('mouseleave', () => {
            targetX = 0;
            targetY = 0;
            isHovered = false;
        });

        // Smooth 60fps RAF lerp loop
        function parallaxLoop() {
            currentX += (targetX - currentX) * 0.08;
            currentY += (targetY - currentY) * 0.08;

            if (heroMachine) {
                heroMachine.style.transform = `translate3d(${(currentX * 10).toFixed(2)}px, ${(currentY * 8).toFixed(2)}px, 0)`;
            }
            if (heroGlow) {
                heroGlow.style.transform = `translate3d(${(-currentX * 16).toFixed(2)}px, ${(-currentY * 14).toFixed(2)}px, 0)`;
            }
            if (heroGrid) {
                heroGrid.style.transform = `translate3d(${(currentX * 4).toFixed(2)}px, ${(currentY * 4).toFixed(2)}px, 0)`;
            }
            if (heroArc) {
                heroArc.style.transform = `translate3d(${(currentX * 6).toFixed(2)}px, ${(currentY * 6).toFixed(2)}px, 0)`;
            }

            requestAnimationFrame(parallaxLoop);
        }

        requestAnimationFrame(parallaxLoop);
    }
    
    // ── 4. Google Reviews Mobile Carousel (2s Auto-Scroll + 100% Center Align) ──
    function initReviewsMobileAutoScroll() {
        const track = document.getElementById('googleReviewsGrid');
        const container = document.getElementById('reviewsSliderWrapper') || track?.parentElement;
        const dotsContainer = document.getElementById('reviewsDots');
        if (!track || !container) return;

        const cards = Array.from(track.querySelectorAll('.google-review-card'));
        const totalReviews = cards.length;
        if (totalReviews <= 1) return;

        let currentReviewIndex = 0;
        let reviewTimer = null;
        let isTouching = false;
        let touchStartX = 0;
        let touchCurrentX = 0;
        let isSwiping = false;

        function updateCarousel() {
            if (window.innerWidth > 768) {
                track.style.transform = '';
                cards.forEach(c => c.classList.remove('active'));
                return;
            }

            // Set active class
            cards.forEach((card, idx) => {
                card.classList.toggle('active', idx === currentReviewIndex);
            });

            // Mathematical exact dead center
            const containerWidth = container.clientWidth || window.innerWidth;
            const cardWidth = cards[0].offsetWidth;
            const cardMargin = 8; // 8px left + 8px right
            const slotWidth = cardWidth + (cardMargin * 2);
            const targetX = (containerWidth / 2) - ((currentReviewIndex + 0.5) * slotWidth);

            track.style.transform = `translate3d(${Math.round(targetX)}px, 0, 0)`;

            if (dotsContainer) {
                const dots = dotsContainer.querySelectorAll('.review-dot');
                dots.forEach((dot, idx) => {
                    dot.classList.toggle('active', idx === currentReviewIndex);
                });
            }
        }

        window.goToReviewSlide = function(index) {
            currentReviewIndex = (index + totalReviews) % totalReviews;
            updateCarousel();
        };

        function startAutoScroll() {
            stopAutoScroll();
            reviewTimer = setInterval(() => {
                if (window.innerWidth <= 768 && !isTouching) {
                    currentReviewIndex = (currentReviewIndex + 1) % totalReviews;
                    updateCarousel();
                }
            }, 2000); // 2-second auto-scroll
        }

        function stopAutoScroll() {
            if (reviewTimer) {
                clearInterval(reviewTimer);
                reviewTimer = null;
            }
        }

        function resetAutoScroll() {
            stopAutoScroll();
            startAutoScroll();
        }

        // Touch Swipe
        track.addEventListener('touchstart', (e) => {
            if (window.innerWidth > 768) return;
            isTouching = true;
            isSwiping = true;
            touchStartX = e.touches[0].clientX;
            stopAutoScroll();
        }, { passive: true });

        track.addEventListener('touchmove', (e) => {
            if (!isSwiping || window.innerWidth > 768) return;
            touchCurrentX = e.touches[0].clientX;
        }, { passive: true });

        track.addEventListener('touchend', () => {
            if (!isSwiping || window.innerWidth > 768) return;
            isTouching = false;
            isSwiping = false;
            const diffX = touchCurrentX - touchStartX;
            if (diffX < -35) {
                goToReviewSlide(currentReviewIndex + 1);
            } else if (diffX > 35) {
                goToReviewSlide(currentReviewIndex - 1);
            }
            startAutoScroll();
        });

        window.addEventListener('resize', updateCarousel);

        setTimeout(updateCarousel, 100);
        startAutoScroll();
    }

    document.addEventListener('DOMContentLoaded', initReviewsMobileAutoScroll);

    // Run Initial Computations
    calculateROI();
    </script>
</body>
</html>
