<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Poliklinik Bimbingan Karir</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /><!-- ini adalah Favicon-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" /> <!-- ini untuk Bootstrap icons-->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/public/css/welcome_styles.css"> <!-- ini Core theme CSS (includes Bootstrap)-->

    <style>
        body {
            background-image: url('https://statik.tempo.co/data/2015/06/03/id_405523/405523_620.jpg'); /* Ganti dengan URL gambar latar belakang dari web */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        /* Sesuaikan warna teks sesuai kebutuhan */
        .navbar,
        .display-5,
        .feature,
        .main-footer {
            color: #ffffff;
        }

        .feature a {
            color: #ffffff;
        }

        .feature a:hover {
            color: #ffc107; /* Warna hover sesuaikan dengan kebutuhan */
        }
    </style>
</head>

<body>
    <!-- Responsive untuk tampilan navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
        <div class="container px-5">
            <a class="navbar-brand" href="#">Poliklinik Bimbingan Karir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
    <!-- ini Header-->
    <header class="py-3" style="background-color: #000000; margin-top: -20px;"> <!-- Sesuaikan nilai margin-top sesuai kebutuhan -->
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Selamat Datang</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ini Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row g-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h2 class="h4 fw-bolder">Login Admin</h2>
                    <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/views/pages/auth/login-admin.php">
                        Lanjutkan
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h2 class="h4 fw-bolder">Login Dokter</h2>
                    <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/views/pages/auth/login-dokter.php">
                        Lanjutkan
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h2 class="h4 fw-bolder">Login Pasien</h2>
                    <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/views/pages/auth/login-pasien.php">
                        Lanjutkan
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ini Footer-->
    <footer class="main-footer px-4 py-2" style="text-align: center;">
        <strong>Copyright ©
            <a href="">Dewi Lestari</a>
        </strong>
    </footer>
    <!-- ini Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ini Core theme JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>