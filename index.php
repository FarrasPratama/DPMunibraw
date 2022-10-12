<?php include_once('layouts/master.php');
include_once('koneksi.php');
?>
<div class="container-fluid header p-0 mb-5 jumbotrondepan" style="background-image: url('assets/home.png');background-size: cover;height:700px;background-position: bottom;">
   <div class="row g-0 align-items-center flex-column-reverse flex-lg-row" style="padding-top: 75px">
      <div class="col-lg-12 p-5 wow fadeIn" data-wow-delay="0.1s">
         <h2 class="display-3 mb-5 mt-5 text-center text-white">LEBIH DEKAT DENGAN<br>DEWAN PERWAKILAN MAHASISWA<br>UNIVERSITAS BRAWIJAYA</h2>
         <center>
            <a class="btn btn-info text-white text-center btn-lg kuning" style="padding: 10px 75px;background-color:#e8b643;border-color: #e8b643;display: inline-block;" href="kanalaspirasi.php">Salurkan Aspirasi</a>
         </center>
      </div>
   </div>
</div>
<!-- berita -->
<div class="container-xxl py-5">
   <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <h1>Kabar DPM UB</h1>
      </div>
      <div class="row g-4 mb-3">
         <?php
         $result = $conn->query("SELECT * FROM berita order by id desc limit 3");
         while ($data = $result->fetch_array()) :
         ?>
            <!-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
               <div class="team-item position-relative rounded overflow-hidden">
                  <div class="overflow-hidden">
                     <img class="img-fluid" src="foto/<?= $data['foto'] ?>" alt="" style="height:300px;width:100%">
                  </div>
                  <div class="team-text bg-light text-center p-4">
                     <h5><?php echo $data['judul']; ?></h5>
                     <p class="text-primary"><?php echo tanggal(date($data['tanggal'])); ?></p>
                     <a href="beritadetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary float-right">Baca Selengkapnya</a>
                  </div>
               </div>
            </div> -->
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
               <div class="team-item position-relative rounded overflow-hidden">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="overflow-hidden">
                           <img class="img-fluid" src="foto/<?= $data['foto'] ?>" alt="" style="object-fit:cover;height:300px;">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="team-text bg-light text-center p-4">
                           <h5><?php echo $data['judul']; ?></h5>
                           <p class="text-primary"><?php echo tanggal(date($data['tanggal'])); ?></p>
                           <a href="beritadetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary kuning" style="background-color:#e8b643;border-color: #e8b643;">Baca Selengkapnya</a>
                           <br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php endwhile; ?>
      </div>
      <center>
         <div style="padding-top: 50px" class="wow fadeInUp">
            <a href="berita.php" class="btn btn-outline-danger text-center text-dark"><b>Lihat Semua Berita</b></a>
         </div>
      </center>
   </div>
</div>
<br><br>
<div class="container-fluid bg-dark px-lg-0" style="padding-top: 50px;padding-bottom:50px">
   <div class="container-xxl py-5">
      <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
         <div class="row mb-5">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2 class="bawahtengah text-white">BPI DPM UB 2022</h2>
               </div>
            </div>
         </div>
      </div>
      <div class="row g-4 mb-3">
         <!-- <div class="col-md-3 col-xs-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
               <div class="team-item position-relative rounded overflow-hidden">
                  <div class="overflow-hidden">
                     <img class="img-fluid" src="assets/profil.jpg" alt="" width="100%" style="object-fit:cover;height:400px;">
                  </div>
                  <br>
                  <h3 class="text-center">John Doe</h3>
                  <p class="text-center">Jabatan</p>
               </div>
            </div> -->
         <div class="col-md-3 col-xs-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="position-relative rounded overflow-hidden">
               <div class="bigger">
                  <div class="overflow-hidden">
                     <img class="img-fluid" src="BPI/Fachrozi Reza_FISIP_2019_Ketua DPM UB/Fachrozi Reza_Ketua Umum_FISIP 2019.png" alt="" width="100%" style="object-fit:cover;height:400px;">
                  </div>
                  <div class="smaller">
                     <h3 class="text-center text-white">Fachrozi Reza</h3>
                     <p class="text-center tekskuning">Ketua Umum<br>FISIP 2019</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xs-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="position-relative rounded overflow-hidden">
               <div class="bigger">
                  <div class="overflow-hidden">
                     <img class="img-fluid" src="BPI/Rafif Ananda Gusti_FH_2019_SEKJEND/IMG_3153-.png" alt="" width="100%" style="object-fit:cover;height:400px;">
                  </div>
                  <div class="smaller">
                     <h3 class="text-center text-white">Rafif Ananda Gusti</h3>
                     <p class="text-center tekskuning">Sekretaris Jenderal<br>FH 2019</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xs-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="position-relative rounded overflow-hidden">
               <div class="bigger">
                  <div class="overflow-hidden">
                     <img class="img-fluid" src="BPI/Ahmad wafinindom_FIB_2019_WASEKJEND/IMG_3128.jpg" alt="" width="100%" style="object-fit:cover;height:400px;">
                  </div>
                  <div class="smaller">
                     <h3 class="text-center text-white">Ahmad Wafinindom</h3>
                     <p class="text-center tekskuning">Wakil Sekretaris Jenderal<br>FIB 2019</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xs-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="position-relative rounded overflow-hidden">
               <div class="bigger">
                  <div class="overflow-hidden">
                     <img class="img-fluid" src="BPI/SELVIA MEGA ANGGRAINI_BENDUM/Selvia Mega Anggraini_Bendahara Umum_Vokasi 2019.png" alt="" width="100%" style="object-fit:cover;height:400px;">
                  </div>
                  <div class="smaller">
                     <h3 class="text-center text-white">Selvia Mega Anggraini</h3>
                     <p class="text-center tekskuning">Bendahara Umum<br>Vokasi 2020</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php include_once('layouts/footer.php') ?>