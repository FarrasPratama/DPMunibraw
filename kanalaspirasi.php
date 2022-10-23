<?php include_once('layouts/master.php');
include_once('koneksi.php');
?>
<div class="container-fluid header p-0 mb-5 jumbotrondepan" style="background-image: url('assets/line_143836633524607.jpg');background-size: cover;height:700px;background-position: bottom;">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row" style="padding-top: 50px;">
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
                        <a class="btn btn-info text-white text-center btn-lg kuning" style="padding: 10px 50px;background-color:#e8b643;border-color: #e8b643;display: inline-block;" href="kanalaspirasi.php">Kirim Aspirasi</a>
                    </div>
                    <div class="col-md-4 mt-3">
                        <a class="btn btn-outline-danger text-white text-center btn-lg" style="padding: 10px 50px;display: inline-block;" href="kanalaspirasicari.php">Cek Status Aspirasi</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>
<div class="ourwork wow fadeInUp" data-wow-delay="0.1s" id="aspirasiform">
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="titlepage">
                    <center>
                        <h2 class="bawahtengah text-center">Form Aspirasi</h2>
                    </center>
                </div>
            </div>
        </div>
        <br>
        <form method="post">
            <div class="row mb-3">
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">Fakultas <span class="text-danger">*</span></label>
                        <select type="text" class="form-control" name="jurusan" required>
                            <option value="Jurusan Teknik Informatika">Jurusan Teknik Informatika</option>
                            <option value="Jurusan Teknik Mesin">Jurusan Teknik Mesin</option>
                            <option value="Jurusan Hukum">Jurusan Hukum</option>
                            <option value="Jurusan Ekonomi dan Bisnis">Jurusan Ekonomi dan Bisnis</option>
                            <option value="Jurusan Pertanian">Jurusan Pertanian</option>
                            <option value="Jurusan Peternakan">Jurusan Peternakan</option>
                            <option value="Jurusan Kedokteran">Jurusan Kedokteran</option>
                            <option value="Jurusan Perikanan dan Ilmu Kelautan">Jurusan Perikanan dan Ilmu Kelautan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">NIM <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="npm" required>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">Asal <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="asal" required>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">Angkatan <span class="text-danger">*</span></label>
                        <select class="form-control" name="angkatan" required>
                            <?php
                            $tahun = "2010";
                            while ($tahun <= 2022) { ?>
                                <option value="<?= $tahun ?>"><?= $tahun ?></option>
                            <?php
                                $tahun++;
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="form-group">
                        <label class="form-label">Keluhan Anda <span class="text-danger">*</span></label>
                        <textarea type="text" class="form-control" rows="5" name="keluhan" required></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" name="simpan" class="btn btn-secondary text-white text-center btn-lg float-end" style="padding: 10px 75px;display: inline-block;">Kirim Aspirasi</button>
        </form>
    </div>
</div>
<br>
<br>
<?php include_once('layouts/footer.php'); ?>
<?php
if (isset($_POST['simpan'])) {
    $kodeaspirasi = date("Ymdhis");
    $conn->query("INSERT INTO aspirasi
    	(kodeaspirasi,nama,npm,jurusan,asal,angkatan,keluhan)
    	VALUES('$kodeaspirasi','$_POST[nama]','$_POST[npm]','$_POST[jurusan]','$_POST[asal]','$_POST[angkatan]','$_POST[keluhan]')") or die(mysqli_error($conn));
    $id = "$conn->insert_id";
    echo "
        <script type='text/javascript'>
        setTimeout(function () { 
            Swal.fire({
                title: 'Aspirasi',
                text: 'Cek status aspirasi anda menggunakan kode dibawah ini',
                html:
                'Cek status aspirasi anda menggunakan<br>kode dibawah ini<br><br><b>$kodeaspirasi</b>, ',
                icon: 'success',
                confirmButtonText: 'Tutup',
                confirmButtonColor: '#e8b643',
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.replace('kanalaspirasicari.php');
                } else if (result.isDenied) {
                    window.location.replace('kanalaspirasicari.php');
                }
              })
        },1); 
        </script>
        ";
}
?>
<!-- window.setTimeout(function(){
window.location.replace('kanalaspirasi.php');
} ,15000); -->