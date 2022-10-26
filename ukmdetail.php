<?php include_once('layouts/master.php');
include_once('koneksi.php');
$ambildata = $conn->query("SELECT * FROM ukm WHERE id='$_GET[id]'");
$datahasil = $ambildata->fetch_assoc();
if ($datahasil['judul'] == 'AIESEC') {
    $slogan = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat";
    $link = "https://organisasi.com";
} elseif ($datahasil['judul'] == 'Basket') {
    $slogan = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat";
    $link = "https://organisasi.com";
} else {
    $slogan = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat";
    $link = "https://organisasi.com";
}
?>
<!-- <div class="container-fluid header p-0 mb-5" style="background-image: url('assets/sekolah.jpg');background-size: cover;height:500px">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        </div>
        <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: rgba(0, 0, 0, 0.5);height:500px">
            <h3 class="display-6 text-white" style="padding-top: 100px"><?= $datahasil['judul'] ?></h3>
            <h5 class="text-white mb-1"><?= $slogan ?></h5>
            <br>
            <a href="<?= $link ?>" target="_blank" class="btn btn-info">Lihat UKM</a>
        </div>
    </div>
</div> -->
<div class="container-fluid header p-0 mb-5 jumbotrondepan" style="background-image: url('assets/home.png');background-size: cover;height:700px;background-position: bottom;">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row" style="padding-top: 75px">
        <div class="col-lg-12 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h2 class="display-3 mt-5 text-center text-white"><?= $datahasil['judul'] ?></h2>
            <p class="text-white text-center" style="font-size: 15pt">
                <?= $slogan ?>
            </p>
            <center>
                <a href="<?= $link ?>" class="btn btn-info text-white text-center btn-lg kuning" style="padding: 10px 75px;background-color:#e8b643;border-color: #e8b643;display: inline-block;" href="kanalaspirasi.php">Lihat UKM</a>
            </center>
        </div>
    </div>
</div>
<div class="ourwork">
    <div class="container">
        <!-- <div class="row mb-3">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <?php
                $result = $conn->query("SELECT * FROM ukm where id = '$_GET[id]' limit 1");
                while ($data = $result->fetch_array()) :
                ?>
                    <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="border-radius: 10px;">
                        <img class="card-img-top" src="foto/<?= $data['foto'] ?>" width="100%" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title text-primary"><a href="ukmdetail.php?id=<?php echo $data['id']; ?>"><?php echo $data['judul']; ?></a></h2>
                            <br>
                            <h5 class="text-center">Tentang Kami</h5>
                            <br>
                            <?= $data['isi'] ?>
                            <br>
                            <h5 class="text-center">Kegiatan</h5>
                            <?= $data['kegiatan'] ?>
                            <br><br>
                            <p class="card-text"><i class="fa fa-tag text-success"></i> <?= $data['kategori'] ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div> -->
        <?php
        $result = $conn->query("SELECT * FROM ukm where id = '$_GET[id]' limit 1");
        while ($data = $result->fetch_array()) :
        ?>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="titlepage mb-5">
                            <h4 class="bawahvisimisi">Tentang Kami</h4>
                            <br>
                        </div>
                        <img src="foto/<?= $data['foto'] ?>" alt="" style="object-fit:cover;height:300px;width:100%;border-radius: 25px">
                    </div>
                    <?= $data['isi'] ?>
                    <br>
                </div>
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="titlepage">
                            <h4 class="bawahvisimisi">Kegiatan Kami</h4>
                            <br>
                        </div>
                    </div>
                    <?= $data['kegiatan'] ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<br>
<br>
<div class="container-fluid bg-dark px-lg-0" style="padding-top: 50px;padding-bottom:50px">
    <div class="container-xxl py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2 class="bawahtengah text-white">Kegiatan <?= $datahasil['judul'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md-4 col-xs-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden">
                    <div class="bigger">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/diskusi.jpg" alt="" width="100%" style="object-fit:cover;height:400px;">
                        </div>
                        <div class="smaller">
                            <h3 class="text-center text-white">Latihan harian softball UB</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden">
                    <div class="bigger">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/diskusi.jpg" alt="" width="100%" style="object-fit:cover;height:400px;">
                        </div>
                        <div class="smaller">
                            <h3 class="text-center text-white">Latihan harian softball UB</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden">
                    <div class="bigger">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/diskusi.jpg" alt="" width="100%" style="object-fit:cover;height:400px;">
                        </div>
                        <div class="smaller">
                            <h3 class="text-center text-white">Latihan harian softball UB</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('layouts/footer.php') ?>