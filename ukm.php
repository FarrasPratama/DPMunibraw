<?php include_once('layouts/master.php');
include_once('koneksi.php');
?>
<div class="container-fluid header p-0 mb-5 jumbotrondepan" style="background-image: url('assets/abstrak.png');background-size: cover;height:700px;background-position: bottom;">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row" style="padding-top: 75px">
        <div class="col-lg-12 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h2 class="display-3 mb-5 mt-5 text-center text-white">Unit Kegiatan Mahasiswa</h2>
            <p class="text-white text-center" style="font-size: 15pt">
                Universitas Brawijaya memiliki berbagai macam Unit Kegiatan
                <br>
                Dapatkan informasi mengenai Unit Kegiatan yang anda
                <br>
                inginkan dibawah ini
            </p>
            <center>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-4">
                        <form method="post" action="ukmcari.php">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="keyword" placeholder="Cari UKM">
                                <div class="input-group-append"><button class="btn btn-primary" style="border-radius:0;border-top-right-radius: 10px;border-bottom-right-radius: 10px;background-color:#e8b643;border-color: #e8b643;height:50px"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>
<div class="ourwork">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="titlepage">
                    <center>
                        <h2 class="bawahtengah text-center">Daftar UKM Unibraw</h2>
                    </center>
                </div>
            </div>
        </div>
        <br><br>
        <h4 class="bawahvisimisi">Minat Olahraga</h4>
        <div class="row mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <?php
            $result = $conn->query("SELECT * FROM ukm where kategori = 'Olahraga' order by id desc");
            while ($data = $result->fetch_array()) :
            ?>
                <!-- <div class="col-md-3">
                    <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="border-radius: 10px;">
                        <p class="text-center bg-secondary text-white" style="padding: 15px"><?= $data['judul'] ?></p>
                        <img class="card-img-top" src="foto/<?= $data['foto'] ?>" width="100%" height="250px" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title text-dark"><a href="ukmdetail.php?id=<?php echo $data['id']; ?>" class="text-dark">Kegiatan</a></h3>
                            <?= $data['kegiatan'] ?>
                            <a href="ukmdetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary float-right pull-right" style="float:right">Jelajahi</a>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-3 mb-5">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img src="foto/<?= $data['foto'] ?>" alt="" style="object-fit:cover;height:300px;">
                        </div>
                        <div class="bg-light p-4">
                            <h5 class="text-left"><?php echo $data['judul']; ?></h5>
                            <?= $data['kegiatan'] ?>
                            <center>
                                <a href="ukmdetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary kuning" style="background-color:#e8b643;border-color: #e8b643;">Baca Selengkapnya</a>
                            </center>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <br><br>
        <h4 class="bawahvisimisi">Minat dan Penalaran</h4>
        <div class="row mt-5">
            <?php
            $result = $conn->query("SELECT * FROM ukm where kategori = 'Penalaran' order by id desc");
            while ($data = $result->fetch_array()) :
            ?>
                <div class="col-md-3 mb-5">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img src="foto/<?= $data['foto'] ?>" alt="" style="object-fit:cover;height:300px;">
                        </div>
                        <div class="bg-light p-4">
                            <h5 class="text-left"><?php echo $data['judul']; ?></h5>
                            <?= $data['kegiatan'] ?>
                            <center>
                                <a href="ukmdetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary kuning" style="background-color:#e8b643;border-color: #e8b643;">Baca Selengkapnya</a>
                            </center>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <br><br>
        <h4 class="bawahvisimisi">Minat Kesenian</h4>
        <div class="row mt-5">
            <?php
            $result = $conn->query("SELECT * FROM ukm where kategori = 'Kesenian' order by id desc");
            while ($data = $result->fetch_array()) :
            ?>
                <div class="col-md-3 mb-5">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img src="foto/<?= $data['foto'] ?>" alt="" style="object-fit:cover;height:300px;">
                        </div>
                        <div class="bg-light p-4">
                            <h5 class="text-left"><?php echo $data['judul']; ?></h5>
                            <?= $data['kegiatan'] ?>
                            <center>
                                <a href="ukmdetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary kuning" style="background-color:#e8b643;border-color: #e8b643;">Baca Selengkapnya</a>
                            </center>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <br><br>
        <h4 class="bawahvisimisi">Minat Kerohanian</h4>
        <div class="row mt-5">
            <?php
            $result = $conn->query("SELECT * FROM ukm where kategori = 'Kesehjateraan Mahasiswa' order by id desc");
            while ($data = $result->fetch_array()) :
            ?>
                <div class="col-md-3 mb-5">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img src="foto/<?= $data['foto'] ?>" alt="" style="object-fit:cover;height:300px;">
                        </div>
                        <div class="bg-light p-4">
                            <h5 class="text-left"><?php echo $data['judul']; ?></h5>
                            <?= $data['kegiatan'] ?>
                            <center>
                                <a href="ukmdetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary kuning" style="background-color:#e8b643;border-color: #e8b643;">Baca Selengkapnya</a>
                            </center>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <br><br>
    </div>
</div>
<?php include_once('layouts/footer.php') ?>