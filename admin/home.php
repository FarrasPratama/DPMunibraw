<?php
include_once('../koneksi.php');
include 'header.php';
$berita = $conn->query("SELECT * FROM berita");
$jumlahberita = $berita->num_rows;

$ukm = $conn->query("SELECT * FROM ukm");
$jumlahukm = $ukm->num_rows;

$aspirasi = $conn->query("SELECT * FROM aspirasi");
$jumlahaspirasi = $aspirasi->num_rows;
?>
<div class="container-fluid px-4 mt-3" style="padding: 10px;">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Selamat datang di halaman Administrator</li>
    </ol>
    <div class="row">
        <div class="col-xl-4 col-md-4">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Jumlah Berita
                    <br>
                    <h2><?= $jumlahberita ?></h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="beritadaftar.php">Lihat Data</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Jumlah UKM
                    <br>
                    <h2><?= $jumlahukm ?></h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="ukmdaftar.php">Lihat Data</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Jumlah Aspirasi
                    <br>
                    <h2><?= $jumlahaspirasi ?></h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="aspirasidaftar.php">Lihat Data</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <img src="../assets/selamatdatang.gif" width="100%" style="border-radius: 10px;">
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>