<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Company Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Company</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<header class="text-white text-center d-flex align-items-center"
        style="height:100vh; background:url('https://images.unsplash.com/photo-1492724441997-5dc865305da7') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-3 fw-bold">Solusi Digital untuk Bisnis Anda</h1>
        <p class="lead">Kami membantu perusahaan berkembang melalui teknologi modern</p>
        <a href="/about" class="btn btn-primary btn-lg mt-3">Tentang Kami</a>
    </div>
</header>

<!-- ABOUT SHORT -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Tentang Perusahaan</h2>
                <p class="text-muted">
                    Kami adalah perusahaan teknologi yang menyediakan layanan pengembangan aplikasi,
                    website, dan transformasi digital untuk berbagai industri.
                </p>
                <a href="/about" class="btn btn-outline-primary">Selengkapnya</a>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216"
                     class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="mb-5">Layanan Kami</h2>

        <div class="row">
            <div class="col-md-4">
                <h4>Web Development</h4>
                <p>Membangun website profesional dan scalable.</p>
            </div>

            <div class="col-md-4">
                <h4>Mobile Apps</h4>
                <p>Aplikasi Android & iOS modern.</p>
            </div>

            <div class="col-md-4">
                <h4>Cloud Solutions</h4>
                <p>Implementasi sistem berbasis cloud.</p>
            </div>
        </div>
    </div>
</section>

<!-- WHY US -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="mb-4">Mengapa Memilih Kami?</h2>

        <div class="row">
            <div class="col-md-3">
                <h3 class="text-primary">10+</h3>
                <p>Tahun Pengalaman</p>
            </div>

            <div class="col-md-3">
                <h3 class="text-primary">500+</h3>
                <p>Klien</p>
            </div>

            <div class="col-md-3">
                <h3 class="text-primary">1200+</h3>
                <p>Project Selesai</p>
            </div>

            <div class="col-md-3">
                <h3 class="text-primary">24/7</h3>
                <p>Support</p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIAL -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="mb-4">Testimoni Klien</h2>

        <blockquote class="blockquote">
            <p>"Pelayanan sangat profesional dan hasil memuaskan."</p>
            <footer class="blockquote-footer">Budi, CEO Startup</footer>
        </blockquote>
    </div>
</section>

<!-- CTA -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h2>Siap Mengembangkan Bisnis Anda?</h2>
        <a href="#" class="btn btn-light btn-lg mt-3">Hubungi Kami</a>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    © {{ date('Y') }} Company Profile. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>