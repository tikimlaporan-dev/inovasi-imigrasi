<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inovasi Imigrasi — Media Center</title>

    @vite([
        'resources/css/app.css',
        'resources/css/menu.css'
    ])

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<style>
body::before {
    content: '';
    position: fixed;
    inset: 0;

    background-image:
        radial-gradient(
            ellipse 60% 50% at 15% 0%,
            rgba(3,53,102,.10) 0%,
            transparent 70%
        ),
        radial-gradient(
            ellipse 50% 60% at 90% 100%,
            rgba(189,147,76,.07) 0%,
            transparent 70%
        ),
        url('/images/logo.png');

    background-repeat:
        no-repeat,
        no-repeat,
        no-repeat;

    background-position:
        left top,
        right bottom,
        center center;

    background-size:
        auto,
        auto,
        500px;

    opacity: .08;

    pointer-events: none;

    z-index: 0;

    animation: bgFloat 12s ease-in-out infinite;
}


@keyframes bgFloat {
    0%,100% {
        transform: scale(1) translateY(0px);
    }

    50% {
        transform: scale(1.04) translateY(-10px);
    }
}

.kuota-card::after {
    content: '';

    position: absolute;
    inset: 0;

    background-image: url('/images/slank.jpeg');

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    opacity: .28;

    z-index: -2;

    animation:
        bannerSlider 24s infinite,
        panLeft 24s linear infinite;

    transform: scale(1.1);
}


/* .kuota-card::before {
    content: '';

    position: absolute;
    inset: 0;

    background:
        linear-gradient(
            90deg,
            rgba(5,13,26,.92) 0%,
            rgba(5,13,26,.72) 40%,
            rgba(5,13,26,.88) 100%
        );

    z-index: -1;
} */

@keyframes bannerSlider {

    0%,32% {
        background-image: url('/images/slank.jpeg');
    }

    33%,65% {
        background-image: url('/images/talung.jpeg');
    }

    66%,100% {
        background-image: url('/images/99kubah.jpg');
    }
}


@keyframes panLeft {

    0% {
        background-position: center right;
        transform: scale(1.12);
    }

    100% {
        background-position: center left;
        transform: scale(1.2);
    }
}

</style>

<body>
<div class="wrap">

    {{-- ── Nav ── --}}
    <nav>
        <div class="nav-brand">
            <div class="nav-logo">
    <img
        src="{{ asset('images/logo.png') }}"
        alt="Logo Imigrasi"
        class="w-12 h-12 object-contain"
    >
</div>
            <div>
                <div class="nav-title">Imigrasi Makassar</div>
                <div class="nav-sub">Kelas I Khusus TPI Makassar</div>
            </div>
        </div>
        <div class="nav-links">
            <a href="/" class="nav-link active">Beranda</a>
            <a href="#layanan" class="nav-link">Layanan</a>
            <a href="https://makassar.imigrasi.go.id/" target="_blank" class="nav-link">Website Resmi</a>
        </div>
    </nav>

    <!-- {{-- ── Kuota Banner ── --}}
    <div class="kuota-wrap">
        
        <div class="kuota-card">
            <div>
                <p class="kuota-label">Kuota M-Paspor Hari Ini</p>
                <h2 class="kuota-num">47</h2>
                <p class="kuota-desc">Sisa kuota permohonan paspor tanggal {{ date('d F Y') }}</p>
            </div>
            <div class="kuota-icon">
                
    <img
        src="{{ asset('images/logo.png') }}"
        alt="Logo Imigrasi"
        class="kuota-logo"
    >
</div>
        </div>
        
    </div> -->
    <div class="kuota-card">

    {{-- Left --}}
    <!-- <div>
        <p class="kuota-label">Kuota M-Paspor Hari Ini</p>
        <h2 class="kuota-num">47</h2>
        <p class="kuota-desc">
            Sisa kuota permohonan paspor tanggal {{ date('d F Y') }}
        </p>
    </div> -->

    {{-- Center --}}
    <div class="kuota-center">
        <h1 class="hero-title">
            <span style="color: #033566;">MEDIA</span> CENTER<br>
            <span class="gold">INTERAKTIF</span>
        </h1>
    </div>

    {{-- Right --}}
    <div class="kuota-icon">
        <img
            src="{{ asset('images/logo.png') }}"
            alt="Logo Imigrasi"
            class="kuota-logo"
        >
    </div>

</div>

    <!-- {{-- ── Hero ── --}}
    <div class="hero">
        <div class="hero-eyebrow">Media Center Interaktif &nbsp;·&nbsp; Inovasi Digital</div>
        <h1 class="hero-title">
            <span class="accent">MEDIA</span> CENTER<br>
            <span class="gold">INTERAKTIF</span>
        </h1>
        <p class="hero-desc">
            Sistem informasi pelayanan imigrasi modern — akses informasi paspor,
            alur layanan, dan panduan lengkap langsung dari media center interaktif.
        </p>
    </div> -->

    {{-- ── Divider ── --}}
    <div class="divider">
        <div class="divider-line"></div>
        <span class="divider-label" id="layanan">Pilih Layanan</span>
        <div class="divider-line"></div>
    </div>

    {{-- ── Cards ── --}}
    <div class="grid-wrap">

        {{-- Card 1: Alur Paspor --}}
       <a href="https://www.instagram.com/reels/DFocbfMTAM2/"
   target="_blank"
   class="card featured passport-card"

   style="
        background-image: url('/images/alur.png');
        background-size: cover;
        background-position: center 30%;
        background-repeat: no-repeat;
   "
>

    <div class="overlay"></div>

    <div class="card-content">

        <div class="card-header">
            <span class="card-badge badge-teal">Informasi</span>
        </div>

        <h2 class="card-title">Alur Urus Paspor</h2>

        <p class="card-desc">
            Panduan lengkap proses pembuatan paspor mulai dari pendaftaran online,
            pembayaran, hingga pengambilan paspor.
        </p>

        <div class="card-arrow">
            <div class="arrow-line"></div>
            Lihat panduan
        </div>

    </div>

</a>

        {{-- Card 2: Paspor Anak --}}
<a href="https://www.instagram.com/p/DIP97MqT-vx/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA%3D%3D"
   target="_blank"
   class="card passport-anak-card"

   style="
        background-image: url('/images/anak.png');
        background-size: cover;
        background-position: center 50%;
        background-repeat: no-repeat;
   "
>

    <div class="overlay"></div>

    <div class="card-content">

        <div class="card-header">
            <span class="card-badge badge-teal">Layanan</span>
        </div>

        <h2 class="card-title">Paspor Anak</h2>

        <p class="card-desc">
            Panduan khusus pengurusan paspor untuk pemohon di bawah umur,
            lengkap dengan persyaratan dan dokumen yang dibutuhkan.
        </p>

        <div class="card-arrow">
            <div class="arrow-line"></div>
            Lihat panduan
        </div>

    </div>

</a>

        {{-- Card 3: Paspor Hilang & Rusak --}}
<a href="https://www.instagram.com/p/DF4MLm-BbOY/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA%3D%3D"
   target="_blank"
   class="card gold-card passport-hilang-card"

   style="
        background-image: url('/images/hilang.png');
        background-size: cover;
        background-position: center 50%;
        background-repeat: no-repeat;
   "
>

    <div class="overlay"></div>

    <div class="card-content">

        <div class="card-header">
            <span class="card-badge badge-gold">Bantuan</span>
        </div>

        <h2 class="card-title">Paspor Hilang & Rusak</h2>

        <p class="card-desc">
            Informasi prosedur penggantian paspor hilang maupun rusak lengkap
            dengan syarat dan tahapan pengurusannya.
        </p>

        <div class="card-arrow">
            <div class="arrow-line"></div>
            Lihat prosedur
        </div>

    </div>

</a>

        {{-- Card 4: Website Resmi --}}
<a href="https://makassar.imigrasi.go.id/"
   target="_blank"
   class="card gold-card website-card"

   style="
        background-image: url('/images/web.jpg');
        background-size: cover;
        background-position: center 25%;
        background-repeat: no-repeat;
   "
>

    <div class="overlay"></div>

    <div class="card-content">

        <div class="card-header">
            <span class="card-badge badge-gold">Portal</span>
        </div>

        <h2 class="card-title">Website Imigrasi</h2>

        <p class="card-desc">
            Kunjungi website resmi Kantor Imigrasi Kelas I Khusus TPI Makassar
            untuk informasi layanan, berita, dan pengumuman terbaru.
        </p>

        <div class="card-arrow">
            <div class="arrow-line"></div>
            Kunjungi website
        </div>

    </div>
</a>



    </div>{{-- /grid-wrap --}}

    {{-- ── Footer ── --}}
    <footer>
        <div class="footer-brand">
            © 2026 &nbsp;<strong>Kantor Imigrasi Kelas I Khusus TPI Makassar</strong>
            &nbsp;—&nbsp; Direktorat Jenderal Imigrasi
        </div>
        <div class="footer-links">
            <a href="#" class="footer-link">Kebijakan Privasi</a>
            <a href="#" class="footer-link">Hubungi Kami</a>
            <a href="https://imigrasi.go.id" target="_blank" class="footer-link">imigrasi.go.id</a>
        </div>
    </footer>

</div>
</body>
</html>