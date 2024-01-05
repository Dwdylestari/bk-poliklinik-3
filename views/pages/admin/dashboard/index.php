<style>
    .content-wrapper {
        background: url('https://cdn1.katadata.co.id/media/images/2022/01/20/Ilustrasi_Dokter-2022_01_20-20_44_03_230a1a2b19158684b6a786781225f345.jpg') no-repeat center center fixed;
        background-size: cover;
    }
</style>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Poli Bimbingan Karir</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php 
                                include "../../../config/connection.php";

                                $query = "SELECT COUNT(*) AS total_obat FROM obat";
                                $result = $connect->query($query);
                                $pasien = $result->fetch_assoc();
                            ?>
                            <h3><?= $pasien['total_obat']  ?></h3>
                            <p>Total Obat</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?= $BASE_ADMIN_PAGES . '?page=obat' ?>" class="small-box-footer">Info Lainnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
