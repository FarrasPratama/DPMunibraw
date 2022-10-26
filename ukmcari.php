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
        <br><br>
        <div class="row">
            <?php
            $keyword = $_POST['keyword'];
            $result = $conn->query("SELECT * FROM ukm where judul like '$keyword' order by id desc");
            $cek = $result->fetch_assoc();
            if (!empty($cek)) {
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
                <?php endwhile;
            } else { ?>
                <div class="row">
                    <div class="col-md-12 mb-5 Kosong">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <center>
                                    <img class="img-fluid" src="assets/kosong.png" alt="" style="width:70%">
                                </center>
                            </div>
                            <div class="bg-white text-center p-4">
                                <h5>UKM tidak ditemukan<br>
                                    mohon cari dengan keyword yang berbeda</h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <br><br>
    </div>
</div>
<?php include_once('layouts/footer.php') ?>