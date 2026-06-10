<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Imigrasi Makassar</title>

    @vite(['resources/css/app.css'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --black:    #050D1A;
            --dark:     #0B1628;
            --panel:    #101F3A;
            --teal:     #00C9B1;
            --teal-dim: #005C52;
            --gold:     #FFB627;
            --gold-dim: #4a3000;
            --silver:   #8EA8C8;
            --muted:    #3A5070;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--black);
            color: #fff;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed; inset: 0;
            background:
                radial-gradient(ellipse 70% 60% at 5% 10%, rgba(0,201,177,.08) 0%, transparent 60%),
                radial-gradient(ellipse 50% 50% at 95% 90%, rgba(255,182,39,.06) 0%, transparent 60%);
            pointer-events: none; z-index: 0;
        }

        body::after {
            content: '';
            position: fixed; inset: 0;
            background-image:
                linear-gradient(rgba(0,201,177,.025) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,201,177,.025) 1px, transparent 1px);
            background-size: 60px 60px;
            pointer-events: none; z-index: 0;
        }

        /* ── Nav ── */
        header {
            position: sticky; top: 0; z-index: 100;
            background: rgba(11,22,40,.95);
            border-bottom: 1px solid rgba(0,201,177,.4);
            backdrop-filter: blur(20px);
            padding: 0 48px;
            display: flex; align-items: center; justify-content: space-between;
            height: 72px;
        }

        .brand { display: flex; align-items: center; gap: 14px; }
        .brand-logo {
            width: 44px; height: 44px; border-radius: 10px;
            background: var(--teal);
            display: flex; align-items: center; justify-content: center;
            font-size: 11px; font-weight: 800; color: var(--black);
        }
        .brand-title { font-size: 16px; font-weight: 700; color: #fff; line-height: 1.2; }
        .brand-sub { font-size: 10px; color: var(--silver); }

        nav { display: flex; gap: 4px; }
        .nav-a {
            color: var(--silver); font-size: 12px; padding: 7px 16px;
            border-radius: 8px; text-decoration: none;
            transition: all .2s;
        }
        .nav-a:hover { color: #fff; background: rgba(255,255,255,.05); }
        .nav-a.active { color: var(--teal); background: rgba(0,201,177,.08); }

        .nav-cta {
            margin-left: 12px;
            background: var(--teal); color: var(--black);
            font-size: 12px; font-weight: 700;
            padding: 8px 20px; border-radius: 8px; border: none; cursor: pointer;
            transition: transform .2s, opacity .2s;
            text-decoration: none;
        }
        .nav-cta:hover { transform: scale(1.04); opacity: .9; }

        .hero {
            position: relative; z-index: 1;
            padding: 80px 48px 72px;
            border-left: 5px solid var(--teal);
            display: grid; grid-template-columns: 1fr 380px; gap: 48px; align-items: center;
        }

        .hero-wm {
            position: absolute; right: 48px; top: 50%;
            transform: translateY(-50%);
            font-size: 130px; font-weight: 900; color: var(--panel);
            letter-spacing: -6px; pointer-events: none;
            z-index: 0; user-select: none;
        }

        .hero-content { position: relative; z-index: 1; }

        .hero-eyebrow {
            display: inline-block;
            font-size: 10px; font-weight: 700; color: var(--teal);
            letter-spacing: 3.5px; text-transform: uppercase;
            padding: 5px 16px; border-radius: 20px;
            border: 1px solid rgba(0,201,177,.3);
            background: rgba(0,201,177,.06);
            margin-bottom: 20px;
        }

        .hero-title {
            font-size: clamp(34px, 5vw, 58px);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -2px;
            margin-bottom: 16px;
        }

        .hero-title .t { color: var(--teal); }
        .hero-title .g { color: var(--gold); }

        .hero-desc {
            font-size: 14px; color: var(--silver); line-height: 1.8;
            max-width: 520px; margin-bottom: 32px;
        }

        .hero-btns { display: flex; gap: 14px; flex-wrap: wrap; }

        .btn-p {
            background: var(--teal); color: var(--black);
            font-size: 13px; font-weight: 700;
            padding: 13px 28px; border-radius: 10px; border: none;
            cursor: pointer; text-decoration: none; display: inline-block;
            transition: transform .2s, box-shadow .2s;
        }
        .btn-p:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,201,177,.25); }

        .btn-o {
            background: transparent; color: var(--teal);
            font-size: 13px; font-weight: 600;
            padding: 12px 28px; border-radius: 10px;
            border: 1.5px solid var(--teal);
            cursor: pointer; text-decoration: none; display: inline-block;
            transition: background .2s;
        }
        .btn-o:hover { background: rgba(0,201,177,.08); }

        
        .hero-panel {
            position: relative; z-index: 1;
            display: flex; flex-direction: column; gap: 12px;
        }

        .stat-card {
            background: var(--panel);
            border: 1px solid var(--muted);
            border-radius: 16px;
            padding: 20px 24px;
            display: flex; align-items: center; gap: 16px;
            transition: border-color .3s;
        }
        .stat-card:hover { border-color: var(--teal); }

        .stat-icon {
            font-size: 28px; width: 52px; height: 52px;
            background: rgba(0,201,177,.08);
            border: 1px solid rgba(0,201,177,.2);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }

        .stat-icon.gold-icon {
            background: rgba(255,182,39,.08);
            border-color: rgba(255,182,39,.2);
        }

        .stat-label { font-size: 11px; color: var(--silver); margin-bottom: 3px; }
        .stat-val { font-size: 20px; font-weight: 700; color: #fff; line-height: 1; }
        .stat-val .unit { font-size: 12px; color: var(--teal); font-weight: 600; }
        .stat-val .unit-g { color: var(--gold); }

        
        .online {
            display: flex; align-items: center; gap: 8px;
            font-size: 11px; color: var(--teal);
            background: rgba(0,201,177,.08);
            border: 1px solid rgba(0,201,177,.25);
            border-radius: 10px;
            padding: 10px 16px;
        }

        .pulse-dot {
            width: 8px; height: 8px; border-radius: 50%;
            background: var(--teal);
            animation: pulse-dot 2s ease-in-out infinite;
        }

        @keyframes pulse-dot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: .5; transform: scale(.8); }
        }

       
        .info-strip {
            position: relative; z-index: 1;
            background: var(--gold);
            padding: 11px 48px;
            display: flex; gap: 32px; align-items: center;
        }

        .info-item {
            display: flex; align-items: center; gap: 8px;
            font-size: 12px; color: var(--black); font-weight: 600;
        }

       
        section { position: relative; z-index: 1; padding: 52px 48px 36px; }
        section.dark-sec { background: rgba(11,22,40,.6); }

        .sec-head { display: flex; align-items: center; gap: 12px; margin-bottom: 28px; }
        .sec-bar { width: 4px; height: 20px; background: var(--teal); border-radius: 3px; flex-shrink: 0; }
        .sec-bar.gold { background: var(--gold); }
        .sec-title { font-size: 20px; font-weight: 700; color: #fff; }
        .sec-sub { font-size: 11px; color: var(--silver); margin-left: auto; }

        
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 14px;
        }

        .menu-card {
            background: var(--panel);
            border: 1px solid var(--muted);
            border-radius: 16px;
            padding: 22px 18px;
            text-decoration: none; color: inherit;
            display: flex; flex-direction: column;
            transition: all .3s;
            position: relative; overflow: hidden;
        }

        .menu-card::after {
            content: '';
            position: absolute; top: 0; left: 0; right: 0;
            height: 3px; background: var(--teal);
            transform: scaleX(0); transform-origin: left;
            transition: transform .3s;
        }

        .menu-card.gold-mc::after { background: var(--gold); }

        .menu-card:hover { border-color: var(--teal); transform: translateY(-3px); }
        .menu-card.gold-mc:hover { border-color: var(--gold); }
        .menu-card:hover::after { transform: scaleX(1); }

        .mc-icon-box {
            width: 40px; height: 40px; border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; margin-bottom: 14px;
            background: rgba(0,201,177,.1);
        }

        .mc-icon-box.gold { background: rgba(255,182,39,.1); }

        .mc-title { font-size: 13px; font-weight: 700; color: #fff; margin-bottom: 6px; line-height: 1.3; }
        .mc-desc { font-size: 11px; color: var(--silver); line-height: 1.6; flex: 1; }
        .mc-link { font-size: 11px; color: var(--teal); font-weight: 600; margin-top: 14px; }
        .gold-mc .mc-link { color: var(--gold); }

        
        .mc-banner {
            margin: 0 48px 28px;
            position: relative; z-index: 1;
            background: rgba(0,92,82,.15);
            border: 1.5px solid rgba(0,201,177,.4);
            border-radius: 16px;
            padding: 18px 24px;
            display: flex; align-items: center; justify-content: space-between;
        }

        .mc-inner { display: flex; align-items: center; gap: 16px; }

        .mc-ic {
            width: 46px; height: 46px; border-radius: 10px;
            background: var(--teal);
            display: flex; align-items: center; justify-content: center;
            font-size: 22px; flex-shrink: 0;
        }

        .mc-title-text { font-size: 13px; font-weight: 700; color: #fff; }
        .mc-sub-text   { font-size: 11px; color: var(--silver); margin-top: 2px; }

        .mc-tag {
            font-size: 10px; color: var(--teal);
            background: var(--teal-dim);
            padding: 6px 16px; border-radius: 20px;
            border: 1px solid rgba(0,201,177,.4);
            display: flex; align-items: center; gap: 6px;
            white-space: nowrap;
        }

        .live-dot {
            width: 7px; height: 7px; border-radius: 50%;
            background: var(--teal);
            animation: pulse-dot 2s ease-in-out infinite;
        }

        
        .alur-steps { display: flex; align-items: flex-start; gap: 0; }

        .alur-step {
            flex: 1; text-align: center;
            position: relative;
        }

        .alur-step:not(:last-child)::after {
            content: '';
            position: absolute; top: 16px;
            left: calc(50% + 16px); right: 0;
            height: 1px; background: var(--muted);
        }

        .step-num {
            width: 32px; height: 32px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 13px; font-weight: 700;
            margin: 0 auto 10px;
            position: relative; z-index: 1;
        }

        .sn-t { background: var(--teal); color: var(--black); }
        .sn-g { background: var(--gold); color: var(--black); }

        .step-title { font-size: 11px; font-weight: 600; color: #fff; line-height: 1.3; }
        .step-desc  { font-size: 10px; color: var(--silver); margin-top: 4px; line-height: 1.4; }

    
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }

        .info-card {
            background: var(--panel); border: 1px solid var(--muted);
            border-radius: 16px; padding: 22px;
        }

        .ic-head { display: flex; align-items: center; gap: 8px; margin-bottom: 14px; }
        .ic-dot { width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; }
        .ic-title { font-size: 14px; font-weight: 700; color: #fff; }

        .ic-list { list-style: none; }
        .ic-list li {
            display: flex; justify-content: space-between; align-items: center;
            font-size: 12px; color: var(--silver);
            padding: 8px 0; border-bottom: 1px solid var(--muted);
        }
        .ic-list li:last-child { border-bottom: none; }

        .tag {
            font-size: 9px; font-weight: 700; padding: 3px 10px;
            border-radius: 20px; white-space: nowrap;
        }
        .tag-t { color: var(--teal); background: var(--teal-dim); }
        .tag-g { color: var(--gold); background: var(--gold-dim); }

        
        footer {
            position: relative; z-index: 1;
            background: rgba(5,13,26,.95);
            border-top: 2px solid var(--gold);
            padding: 16px 48px;
            display: flex; align-items: center; justify-content: space-between;
        }

        .footer-txt { font-size: 11px; color: var(--silver); }
        .footer-txt strong { color: var(--gold); font-weight: 600; }

        .footer-links { display: flex; gap: 20px; }
        .footer-lnk { font-size: 10px; color: var(--silver); text-decoration: none; transition: color .2s; }
        .footer-lnk:hover { color: var(--teal); }

        
        @keyframes fade-up {
            from { opacity: 0; transform: translateY(30px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .hero        { animation: fade-up .6s ease both; }
        .info-strip  { animation: fade-up .5s .1s ease both; }
        section      { animation: fade-up .5s .2s ease both; }
    </style>
</head>
<body>

    {{-- ── Header / Nav ── --}}
    <header>
        <div class="brand">
            <div class="brand-logo">IMI</div>
            <div>
                <div class="brand-title">Imigrasi Makassar</div>
                <div class="brand-sub">Kelas I Khusus TPI Makassar</div>
            </div>
        </div>

        <nav>
            <a href="#" class="nav-a active">Beranda</a>
            <a href="#layanan" class="nav-a">Layanan</a>
            <a href="#alur" class="nav-a">Alur Paspor</a>
            <a href="#info" class="nav-a">Informasi</a>
            <a href="#kontak" class="nav-a">Kontak</a>
            <a href="https://antrian.imigrasi.go.id/" target="_blank" class="nav-cta">Antrian Online</a>
        </nav>
    </header>

    {{-- ── Hero ── --}}
    <div class="hero">
        <div class="hero-wm">IMIGRASI</div>

        <div class="hero-content">
            <div class="hero-eyebrow">Kantor Imigrasi Kelas I Khusus TPI Makassar</div>

            <h1 class="hero-title">
                Layanan <span class="t">Keimigrasian</span><br>
                <span class="g">Lebih Mudah</span> & Cepat
            </h1>

            <p class="hero-desc">
                Akses informasi paspor, persyaratan dokumen, dan jadwal pelayanan
                langsung dari website resmi — terintegrasi dengan media center interaktif
                di ruang tunggu kami.
            </p>

            <div class="hero-btns">
                <a href="#layanan" class="btn-p">Lihat Layanan</a>
                <a href="#alur" class="btn-o">Alur Paspor</a>
            </div>
        </div>

        <div class="hero-panel">
            <div class="stat-card">
                <div class="stat-icon">🛂</div>
                <div>
                    <div class="stat-label">Layanan Tersedia</div>
                    <div class="stat-val">4 <span class="unit">Jenis Paspor</span></div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon gold-icon">📅</div>
                <div>
                    <div class="stat-label">Proses Selesai</div>
                    <div class="stat-val">3–4 <span class="unit-g" style="color:var(--gold)">Hari Kerja</span></div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">🕐</div>
                <div>
                    <div class="stat-label">Jam Pelayanan</div>
                    <div class="stat-val" style="font-size:14px">08.00 – 16.00 <span class="unit">WITA</span></div>
                </div>
            </div>

            <div class="online">
                <div class="pulse-dot"></div>
                Media Center Interaktif — Aktif & Terhubung
            </div>
        </div>
    </div>

    {{-- ── Info Strip ── --}}
    <div class="info-strip">
        <div class="info-item">🕐 Senin–Jumat · 08.00–16.00 WITA</div>
        <div class="info-item">📞 (0411) 123-456</div>
        <div class="info-item">📍 Jl. Tentara Pelajar No.2, Makassar</div>
        <div class="info-item" style="margin-left:auto">📢 Lihat Pengumuman</div>
    </div>

    {{-- ── Menu Layanan ── --}}
    <section id="layanan">
        <div class="sec-head">
            <div class="sec-bar"></div>
            <div class="sec-title">Menu Layanan</div>
            <div class="sec-sub">Pilih layanan yang Anda butuhkan</div>
        </div>

        <div class="menu-grid">
            <a href="#alur" class="menu-card">
                <div class="mc-icon-box">🪪</div>
                <div class="mc-title">Alur Pengurusan Paspor</div>
                <div class="mc-desc">Panduan lengkap langkah demi langkah pengurusan paspor baru maupun perpanjangan.</div>
                <div class="mc-link">Baca selengkapnya →</div>
            </a>

            <a href="#info" class="menu-card">
                <div class="mc-icon-box">📄</div>
                <div class="mc-title">Persyaratan Dokumen</div>
                <div class="mc-desc">Daftar lengkap dokumen yang wajib disiapkan sebelum mengunjungi kantor kami.</div>
                <div class="mc-link">Baca selengkapnya →</div>
            </a>

            <a href="#info" class="menu-card gold-mc">
                <div class="mc-icon-box gold">👶</div>
                <div class="mc-title">Layanan Paspor Anak</div>
                <div class="mc-desc">Panduan khusus pengurusan paspor untuk pemohon di bawah umur 17 tahun.</div>
                <div class="mc-link">Baca selengkapnya →</div>
            </a>

            <a href="#info" class="menu-card gold-mc">
                <div class="mc-icon-box gold">📅</div>
                <div class="mc-title">Jadwal & Biaya Layanan</div>
                <div class="mc-desc">Info tarif resmi dan jadwal pelayanan yang selalu diperbarui secara real-time.</div>
                <div class="mc-link">Baca selengkapnya →</div>
            </a>
        </div>
    </section>

    {{-- ── Media Center Banner ── --}}
    <div class="mc-banner">
        <div class="mc-inner">
            <div class="mc-ic">🖥️</div>
            <div>
                <div class="mc-title-text">Media Center Interaktif — Terhubung Real-time</div>
                <div class="mc-sub-text">Monitor di ruang tunggu menampilkan informasi website ini secara otomatis saat ada pembaruan</div>
            </div>
        </div>
        <div class="mc-tag">
            <div class="live-dot"></div>
            Terhubung
        </div>
    </div>

    {{-- ── Alur Paspor ── --}}
    <section class="dark-sec" id="alur">
        <div class="sec-head">
            <div class="sec-bar"></div>
            <div class="sec-title">Alur Pengurusan Paspor</div>
        </div>

        <div class="alur-steps">
            <div class="alur-step">
                <div class="step-num sn-t">1</div>
                <div class="step-title">Daftar Online</div>
                <div class="step-desc">antrian.imigrasi.go.id</div>
            </div>
            <div class="alur-step">
                <div class="step-num sn-g">2</div>
                <div class="step-title">Siapkan Berkas</div>
                <div class="step-desc">Sesuai daftar persyaratan</div>
            </div>
            <div class="alur-step">
                <div class="step-num sn-t">3</div>
                <div class="step-title">Datang ke Kantor</div>
                <div class="step-desc">Sesuai jadwal dipilih</div>
            </div>
            <div class="alur-step">
                <div class="step-num sn-g">4</div>
                <div class="step-title">Verifikasi Berkas</div>
                <div class="step-desc">Di loket petugas</div>
            </div>
            <div class="alur-step">
                <div class="step-num sn-t">5</div>
                <div class="step-title">Foto & Wawancara</div>
                <div class="step-desc">Dilakukan di tempat</div>
            </div>
            <div class="alur-step">
                <div class="step-num sn-g">6</div>
                <div class="step-title">Ambil Paspor</div>
                <div class="step-desc">3–4 hari kerja</div>
            </div>
        </div>
    </section>

    {{-- ── Info: Biaya & Persyaratan ── --}}
    <section id="info">
        <div class="sec-head">
            <div class="sec-bar gold"></div>
            <div class="sec-title">Biaya & Persyaratan</div>
        </div>

        <div class="info-grid">
            <div class="info-card">
                <div class="ic-head">
                    <div class="ic-dot" style="background:var(--teal)"></div>
                    <div class="ic-title">Biaya Layanan</div>
                </div>
                <ul class="ic-list">
                    <li>Paspor biasa 48 halaman <span class="tag tag-t">Rp 350.000</span></li>
                    <li>Paspor elektronik 48 halaman <span class="tag tag-t">Rp 650.000</span></li>
                    <li>Paspor anak (di bawah 17 tahun) <span class="tag tag-t">Rp 350.000</span></li>
                    <li>Percepatan paspor (hari yang sama) <span class="tag tag-t">+Rp 1.000.000</span></li>
                </ul>
            </div>

            <div class="info-card">
                <div class="ic-head">
                    <div class="ic-dot" style="background:var(--gold)"></div>
                    <div class="ic-title">Persyaratan Utama</div>
                </div>
                <ul class="ic-list">
                    <li>KTP asli dan fotokopi <span class="tag tag-g">Wajib</span></li>
                    <li>Kartu Keluarga asli dan fotokopi <span class="tag tag-g">Wajib</span></li>
                    <li>Akta kelahiran atau ijazah terakhir <span class="tag tag-g">Wajib</span></li>
                    <li>Paspor lama (untuk perpanjangan) <span class="tag tag-t">Jika ada</span></li>
                </ul>
            </div>
        </div>
    </section>

    {{-- ── Footer ── --}}
    <footer id="kontak">
        <div class="footer-txt">
            © 2026 &nbsp;<strong>Kantor Imigrasi Kelas I Khusus TPI Makassar</strong>
            &nbsp;—&nbsp; Direktorat Jenderal Imigrasi Kemenkumham RI
        </div>
        <div class="footer-links">
            <a href="#" class="footer-lnk">Kebijakan Privasi</a>
            <a href="#" class="footer-lnk">Hubungi Kami</a>
            <a href="https://imigrasi.go.id" target="_blank" class="footer-lnk">imigrasi.go.id</a>
        </div>
    </footer>

</body>
</html>