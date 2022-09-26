<?php
include_once('../koneksi.php');
include 'header.php'; ?>
<div class="container-fluid px-4 mt-3" style="padding: 10px;">
    <div class="card mb-4">
        <div class="card-header">
            Tambah Berita
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Judul Berita</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Isi Berita</label>
                            <textarea class="form-control" rows="5" id="isi" name="isi" required></textarea>
                            <script>
                                CKEDITOR.replace('isi');
                            </script>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori" class="mb-2">Kategori</label>
                            <select class="form-control" name="kategori" required>
                                <option value="Kampus">Kampus</option>
                                <option value="Kegiatan">Kegiatan</option>
                                <option value="Lomba">Lomba</option>
                                <option value="Pembangunan">Pembangunan</option>
                                <option value="Kunjungan">Kunjungan</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Foto Berita</label>
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
        $conn->query("INSERT INTO berita
		(judul,tanggal,isi,kategori,foto)
		VALUES('$_POST[judul]','$_POST[tanggal]','$_POST[isi]','$_POST[kategori]','$namafoto')") or die(mysqli_error($conn));
        echo "<script>alert('Data Berhasil Di Simpan');</script>";
        echo "<script>location='beritadaftar.php';</script>";
    }
    ?>
    <?php include 'footer.php'; ?>