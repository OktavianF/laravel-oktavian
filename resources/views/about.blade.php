<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $about->company_name ?? 'Halaman About' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
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

<!-- HERO SECTION -->
<section class="bg-dark text-white text-center d-flex align-items-center"
    style="height: 80vh;
    background: url('{{ $about->hero_image ? asset('storage/'.$about->hero_image) : 'https://images.unsplash.com/photo-1492724441997-5dc865305da7' }}') center/cover no-repeat;">

    <div class="container">
        <h1 class="display-4 fw-bold">{{ $about->company_name }}</h1>
        <p class="lead">{{ $about->tagline }}</p>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Tentang Kami</h2>
                <p class="text-muted">{{ $about->about }}</p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216"
                     class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- VISION MISSION -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6">
                <h3>Visi</h3>
                <p>{{ $about->vision }}</p>
            </div>
            <div class="col-md-6">
                <h3>Misi</h3>
                <p>{{ $about->mission }}</p>
            </div>
        </div>
    </div>
</section>

<!-- TEAM SECTION -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="mb-4">Tim Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                     class="rounded-circle mb-3" width="150">
                <h5>CEO</h5>
                <p class="text-muted">Leadership & Strategy</p>
            </div>

            <div class="col-md-4">
                <img src="https://randomuser.me/api/portraits/women/44.jpg"
                     class="rounded-circle mb-3" width="150">
                <h5>CTO</h5>
                <p class="text-muted">Technology & Innovation</p>
            </div>

            <div class="col-md-4">
                <img src="https://randomuser.me/api/portraits/men/65.jpg"
                     class="rounded-circle mb-3" width="150">
                <h5>Marketing Head</h5>
                <p class="text-muted">Brand & Communication</p>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    © {{ date('Y') }} {{ $about->company_name }}. All Rights Reserved.
</footer>

</body>
</html>