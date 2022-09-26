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
    <div class="container">
        <b><span style="color:#e8b643"><i class="fa fa-arrow-left"></i></span> <a href="beritadetail.php?id=<?php echo $data['id']; ?>" class="hitam">Kembali ke halaman berita</a></b>
        <div class="row mb-3 mt-5">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <?php
                $result = $conn->query("SELECT * FROM berita where id = '$_GET[id]' limit 1");
                while ($data = $result->fetch_array()) :
                ?>
                    <a href="beritadetail.php?id=<?php echo $data['id']; ?>">
                        <h2 class=""><?php echo $data['judul']; ?></h2>
                    </a>
                    <p class="card-text"><small class="text-muted"><?php echo tanggal(date($data['tanggal'])); ?></small><span style="padding-left: 15px;color:#e8b643"><i class="fa fa-tag"></i></span> <?= $data['kategori'] ?></p>
                    <br>
                    <div class="card mb-3 bg-white" style="border-radius: 10px;border:0">
                        <img class="card-img-top" src="foto/<?= $data['foto'] ?>" width="100%" alt="Card image cap">
                        <div class="card-body">
                            <br>
                            <?= $data['isi'] ?>
                            <br>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2 class="bawah">Berita Lainnya</h2>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <?php
            $result = $conn->query("SELECT * FROM berita order by id desc limit 3");
            while ($data = $result->fetch_array()) :
            ?>
                <!-- <div class="col-md-4 mb-5">
                    <div class="team-item position-relative rounded overflow-hidden" style="border-radius: 10px;">
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
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
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
        </div>
    </div>
</div>
<?php include_once('layouts/footer.php') ?>