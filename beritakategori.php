<?php include_once('layouts/master.php');
include_once('koneksi.php');
?>
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-5 text-white text-center mb-3 animated slideInDown">Berita</h1>
    </div>
</div>
<div class="ourwork">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8">
                <?php
                $result = $conn->query("SELECT * FROM berita where kategori = '$_GET[id]' order by id desc");
                if (mysqli_num_rows($result) > 0) {
                    while ($data = $result->fetch_array()) :
                ?>
                        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="border-radius: 10px;">
                            <img class="card-img-top" src="foto/<?= $data['foto'] ?>" width="100%" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title text-primary"><a href="beritadetail.php?id=<?php echo $data['id']; ?>"><?php echo $data['judul']; ?></a></h2>
                                <p class="card-text"><small class="text-muted"><?php echo tanggal(date($data['tanggal'])); ?></small></p>
                                <br>
                                <p class="card-text"><i class="fa fa-tag text-success"></i> <?= $data['kategori'] ?></p>
                                <a href="beritadetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary float-right">Baca Selengkapnya</a>
                            </div>
                        </div>
                    <?php endwhile;
                } else {
                    ?>
                    <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="border-radius: 10px;">
                        <div class="card-body">
                            <img class="card-img-top" src="assets/kosong.png">
                            <div class=" card-body">
                                <h2 class="card-title text-primary"><a href="">Data Berita Tidak Ada</a></h2>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
                <div class="card" style="width: 100%">
                    <div class="card-header bg-primary text-white">
                        Kategori Berita
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="beritakategori.php?id=sekolah">Kampus</a></li>
                        <li class="list-group-item"><a href="beritakategori.php?id=kegiatan">Kegiatan</a></li>
                        <li class="list-group-item"><a href="beritakategori.php?id=lomba">Lomba</a></li>
                        <li class="list-group-item"><a href="beritakategori.php?id=pembangunan">Pembangunan</a></li>
                        <li class="list-group-item"><a href="beritakategori.php?id=kunjungan">Kunjungan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('layouts/footer.php') ?>