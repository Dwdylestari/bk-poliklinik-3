<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Dokter</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/vendor/fontawesome-free/css/all.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/vendor/icheck-bootstrap/icheck-bootstrap.min.css"> <!-- icheck bootstrap -->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/public/css/adminlte.min.css"> <!-- Theme style -->

    <style>
        body {
            background-color: #343a40; /* Warna latar belakang halaman */
        }

        .login-box {
            background-color: #ffffff; /* Warna latar belakang kotak login */
        }

        .login-page {
            background-image: url('https://www.releaseinsider.com/wp-content/uploads/2017/04/ilustrasi-kesehatan.jpg'); /* Ganti dengan URL gambar latar belakang dari web */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card-header text-center">
            <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/index.php" class="h1">Login Dokter</a>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username | Case Sensitive" name="nama" value="Dewi">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password | Case Sensitive" name="alamat" value="Semarang">
                    <div class="input-group-append"></div>
                </div>
                <?php
                    if (isset($_SESSION['error'])) {
                        echo "<p class='text-danger mt-1 mb-3'>" . $_SESSION['error'] . "</p>";
                        unset($_SESSION['error']);
                    }
                ?>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">Ingatkan Saya</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-dark btn-block" name="submit">Sign In</button>
                    </div>
                </div>
            </form>
            <?php 
                include '../../../controllers/dokter/auth.php';
                login();
            ?>
        </div>
    </div>
    </div>

    <!-- jQuery -->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/vendor/jquery/jquery.min.js">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/vendor/bootstrap/js/bootstrap.bundle.min.jss">
    <!-- AdminLTE App -->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/public/js/adminlte.min.js">
</body>
</html>
