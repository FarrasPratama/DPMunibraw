<?php
include_once('../koneksi.php');
include 'header.php'; ?>
<div class="container-fluid px-4 mt-3" style="padding: 10px;">
    <div class="card mb-4">
        <div class="card-header">
            Tambah UKM
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Judul UKM</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Isi / Deskripsi</label>
                            <textarea class="form-control" rows="5" id="isi" name="isi" required></textarea>
                            <script>
                                CKEDITOR.replace('isi');
                            </script>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Kegiatan</label>
                            <textarea class="form-control" rows="5" id="kegiatan" name="kegiatan" required></textarea>
                            <script>
                                CKEDITOR.replace('kegiatan');
                            </script>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori" class="mb-2">Perminatan</label>
                            <select class="form-control" name="kategori" required>
                                <option value="Olahraga">Olahraga</option>
                                <option value="Penalaran">Penalaran</option>
                                <option value="Kesenian">Kesenian</option>
                                <option value="Khusus">Khusus</option>
                                <option value="Kesehjateraan Mahasiswa">Kerohanian</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Foto UKM</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success mr-5 float-right pull-right" name="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['simpan'])) {
        $namafoto = $_FILES['foto']['name'];
        $lokasifoto = $_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasifoto, "../foto/" . $namafoto);
        $conn->query("INSERT INTO ukm
		(judul,isi,kegiatan,kategori,foto)
		VALUES('$_POST[judul]','$_POST[isi]','$_POST[kegiatan]','$_POST[kategori]','$namafoto')") or die(mysqli_error($conn));
        echo "<script>alert('Data Berhasil Di Simpan');</script>";
        echo "<script>location='ukmdaftar.php';</script>";
    }
    ?>
    <?php include 'footer.php'; ?>