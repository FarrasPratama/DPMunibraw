<?php include_once('layouts/master.php');
include_once('koneksi.php');
?>
<div class="container-fluid abstrak py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-5 text-white text-center mb-3 animated slideInDown">Kabar DPM Unibraw</h1>
        <br>
        <p class="text-center">
            Semua kabar berita kegiatan DPM Universitas Brawijaya terdokumentasi
            dengan rapi disini,<br> pilih lah kategori berita yang anda inginkan
            melalui tombol dibawah ini
        </p>
    </div>
</div>
<div class="ourwork">
    <div class="container wow fadeInUp" data-wow-delay="0.1s">
        <div class="product-section mt-150 mb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xs-12 col-sm-12 col-md-11">
                        <div class=" row justify-content-center">
                            <div class="col-md-6 col-xs-6 col-6" style="padding-top:5px">
                                <h4 class="bawah">Berita DPM UB</h4>
                            </div>
                            <div class="col-md-6 col-xs-6 col-6">
                                <div class="float-right pull-right float-end">
                                    <a class="btn btn-white mb-3 mr-1" href="#multi-item-example" role="button" data-slide="prev">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-white mb-3 " href="#multi-item-example" role="button" data-slide="next">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <!-- <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="900000">
                    <div class="carousel-inner row justify-content-center cek" role="listbox">
                        <div class="carousel-item col-2 col-sm-3 col-xs-6 col-md-4 col-lg-2 active">
                            <div class="product-filters">
                                <ul>
                                    <li class="active" data-filter=".Kampus, .Lomba, .Kegiatan, .Lomba, .Pembangunan, .Kunjungan">Semua</li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item col-2 col-sm-3 col-xs-6 col-md-4 col-lg-2">
                            <div class="product-filters">
                                <ul>
                                    <li data-filter=".Kampus">Kampus</li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item col-2 col-sm-3 col-xs-6 col-md-4 col-lg-2">
                            <div class="product-filters">
                                <ul>
                                    <li data-filter=".Kegiatan">Kegiatan</li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item col-2 col-sm-3 col-xs-6 col-md-4 col-lg-2">
                            <div class="product-filters">
                                <ul>
                                    <li data-filter=".Lomba">Lomba</li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item col-2 col-sm-3 col-xs-6 col-md-4 col-lg-2">
                            <div class="product-filters">
                                <ul>
                                    <li data-filter=".Kegiatan">Kegiatan</li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item col-2 col-sm-3 col-xs-6 col-md-4 col-lg-2">
                            <div class="product-filters">
                                <ul>
                                    <li data-filter=".Kunjungan">Kunjungan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                    <center>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-around">
                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 col-12 mb-5 col-lg-2 col-xl-2 col-xxl-2 product-filters">
                                        <li data-filter=".Kampus, .Lomba, .Kegiatan, .Pembangunan, .Kunjungan" class="btn btn-outline-danger active">Semua</li>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 col-12 mb-5 col-lg-2 col-xl-2 col-xxl-2 product-filters">
                                        <li data-filter=".Kampus" class="btn btn-outline-danger">Kampus</li>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 col-12 mb-5 col-lg-2 col-xl-2 col-xxl-2 product-filters">
                                        <li data-filter=".Kegiatan" class="btn btn-outline-danger">Kegiatan</li>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-around">
                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 col-12 mb-5 col-lg-2 col-xl-2 col-xxl-2 product-filters">
                                        <li data-filter=".Lomba" class="btn btn-outline-danger">Lomba</li>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 col-12 mb-5 col-lg-2 col-xl-2 col-xxl-2 product-filters">
                                        <li data-filter=".Pembangunan" class="btn btn-outline-danger">Pembangunan</li>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 col-12 mb-5 col-lg-2 col-xl-2 col-xxl-2 product-filters">
                                        <li data-filter=".Kunjungan" class="btn btn-outline-danger">Kunjungan</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="row product-lists">
                    <?php
                    $result = $conn->query("SELECT * FROM berita order by id desc");
                    while ($data = $result->fetch_array()) :
                    ?>
                        <!-- <div class="col-md-4 mb-5 <?= $data['kategori'] ?>">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="foto/<?= $data['foto'] ?>" alt="" style="object-fit: contain;height:300px">
                                </div>
                                <div class="bg-white text-center p-4">
                                    <h5><?php echo $data['judul']; ?></h5>
                                    <p class="text-primary"><?php echo tanggal(date($data['tanggal'])); ?></p>
                                    <a href="beritadetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary kuning float-right">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-4 mb-5 <?= $data['kategori'] ?>">
                            <div class=" team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="foto/<?= $data['foto'] ?>" alt="" style="object-fit:cover;height:300px;">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5><?php echo $data['judul']; ?></h5>
                                    <p class="text-primary"><?php echo tanggal(date($data['tanggal'])); ?></p>
                                    <a href="beritadetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary kuning" style="background-color:#e8b643;border-color: #e8b643;">Baca Selengkapnya</a>
                                    <br>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <div class="col-md-12 mb-5 Kosong" style="display: none">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <center>
                                    <img class="img-fluid" src="assets/kosong.png" alt="" style="width:70%">
                                </center>
                            </div>
                            <div class="bg-white text-center p-4">
                                <h5>Ups, Berita Kosong</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('layouts/footer.php') ?>