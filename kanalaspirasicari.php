<?php include_once('layouts/master.php');
include_once('koneksi.php');
?>
<!-- <div class="container-fluid header p-0 mb-5" style="background-image: url('assets/sekolah.jpg');background-size: cover;height:500px">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #c0c0c2;height:500px">
            <h3 class="display-6 text-white" style="padding-top: 100px">Selamat Datang di Kanal Aspirasi</h3>
            <h5 class="text-white mb-1">Menampung keluh kesah seputar masalah mahasiswa baik dari segi keorganisasian hingga permasalahan yang ditimbul akan lambatnya kinerja civitas akademik Universitas Brawijaya</h5>
            <br>
            <a href="#aspirasiform" class="btn btn-secondary">Cek Status Aspirasi</a> <a href="#aspirasicek" class="btn btn-secondary ml-5">Kirim Aspirasi</a>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        </div>
    </div>
</div> -->
<div class="container-fluid header p-0 jumbotrondepan" style="background-image: url('assets/line_143836633524607.jpg');background-size: cover;height:700px;background-position: bottom;">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row" style="padding-top: 50px">
        <div class="col-lg-12 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h2 class="display-5 mb-5 mt-5 text-center text-white">Selamat Datang di Kanal Aspirasi</h2>
            <p class="text-white text-center" style="font-size: 15pt">
                Menampung keluh kesah seputar masalah mahasiswa baik dari segi
                <br>
                organisasi hingga permasalahan yang ditimbulkan akibat lambatnya
                <br>
                kinerja civitas akademik Universitas Brawijaya
            </p>
            <center>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-4 mt-3">
                        <a class="btn btn-outline-danger text-white text-center btn-lg" style="padding: 10px 50px;display: inline-block;" href="kanalaspirasi.php">Kirim Aspirasi</a>
                    </div>
                    <div class="col-md-4 mt-3">
                        <a class="btn btn-info text-white text-center btn-lg kuning" style="padding: 10px 50px;background-color:#e8b643;border-color: #e8b643;display: inline-block;" href="kanalaspirasicari.php">Cek Status Aspirasi</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark px-lg-0" style="padding-top: 50px;padding-bottom:50px;">
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="titlepage">
                        <center>
                            <h2 class="bawahtengah text-white">Cek Status Aspirasi</h2>
                        </center>
                    </div>
                </div>
            </div>
            <p class="text-center">
                Masukan kode yang anda dapatkan saat mengirimkan
                aspirasi
            </p>
            <div class="row mb-3 mt-5 justify-content-center">
                <div class="col-md-12">
                    <form method="post" action="aspirasicari.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="kode" required>
                        </div>
                        <br>
                        <center>
                            <button type="submit" name="cari" class="btn btn-secondary text-white text-center btn-lg mt-3" style="padding: 10px 75px;display: inline-block;">Cek Aspirasi</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<?php
if (isset($_POST['cari'])) {
    $kodeaspirasi = date("Ymdhis");
    $conn->query("INSERT INTO aspirasi
		(kodeaspirasi,nama,npm,jurusan,asal,angkatan,keluhan)
		VALUES('$kodeaspirasi','$_POST[nama]','$_POST[npm]','$_POST[jurusan]','$_POST[asal]','$_POST[angkatan]','$_POST[keluhan]')") or die(mysqli_error($conn));
    $id = "$conn->insert_id";
    echo "<script>alert('Aspirasi anda Berhasil Di Kirim, Mohon simpan ID Aspirasi anda untuk mengecek status aspirasi, yaitu : $kodeaspirasi');</script>";
    echo "<script>location='kanalaspirasi.php';</script>";
}
?>
<?php include_once('layouts/footer.php') ?>
<script>
    $(document).ready(function() {
        $("html,body").scrollTop(700);
        // document.getElementById('aspirasiform').scrollIntoView()
    });
</script>