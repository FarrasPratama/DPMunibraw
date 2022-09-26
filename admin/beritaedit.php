<?php
include_once('../koneksi.php');
include 'header.php';
$ambildata = $conn->query("SELECT * FROM berita WHERE id='$_GET[id]'");
$data = $ambildata->fetch_assoc();
?>
<div class="container-fluid px-4 mt-3" style="padding: 10px;">
    <div class="card mb-4">
        <div class="card-header">
            Edit Berita
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Judul Berita</label>
                            <input type="text" class="form-control" name="judul" value="<?= $data['judul'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?= $data['tanggal'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Isi Berita</label>
                            <textarea class="form-control" rows="5" id="isi" name="isi" value="<?= $data['isi'] ?>" required><?= $data['isi'] ?></textarea>
                            <script>
                                CKEDITOR.replace('isi');
                            </script>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori" class="mb-2">Kategori</label>
                            <select class="form-control" name="kategori" required>
                                <option <?php if ($data['kategori'] == 'Kampus') echo 'selected'; ?> value="Kampus">Kampus</option>
                                <option <?php if ($data['kategori'] == 'Kegiatan') echo 'selected'; ?> value="Kegiatan">Kegiatan</option>
                                <option <?php if ($data['kategori'] == 'Lomba') echo 'selected'; ?> value="Lomba">Lomba</option>
                                <option <?php if ($data['kategori'] == 'Pembangunan') echo 'selected'; ?> value="Pembangunan">Pembangunan</option>
                                <option <?php if ($data['kategori'] == 'Kunjungan') echo 'selected'; ?> value="Kunjungan">Kunjungan</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mb-3">
                                    <label for="tanggal" class="mb-2">Foto Berita</label>
                                    <input type="file" class="form-control" name="foto">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="../foto/<?= $data['foto'] ?>" width="150px" style="border-radius:10px">
                            </div>
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
        if (!empty($lokasifoto)) {
            move_uploaded_file($lokasifoto, "../foto/$namafoto");
            $conn->query("UPDATE berita SET judul='$_POST[judul]',tanggal='$_POST[tanggal]',isi='$_POST[isi]',kategori='$_POST[kategori]', foto='$namafoto' WHERE id='$_GET[id]'") or die(mysqli_error($conn));
        } else {
            $conn->query("UPDATE berita SET judul='$_POST[judul]',tanggal='$_POST[tanggal]',isi='$_POST[isi]',kategori='$_POST[kategori]' WHERE id='$_GET[id]'") or die(mysqli_error($conn));
        }
        echo "<script>alert('Data Berhasil Di Simpan');</script>";
        echo "<script>location='beritadaftar.php';</script>";
    }
    ?>
    <?php include 'footer.php'; ?>