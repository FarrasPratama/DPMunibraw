<?php
include_once('../koneksi.php');
include 'header.php';
$ambildata = $conn->query("SELECT * FROM ukm WHERE id='$_GET[id]'");
$data = $ambildata->fetch_assoc();
?>
<div class="container-fluid px-4 mt-3" style="padding: 10px;">
    <div class="card mb-4">
        <div class="card-header">
            Edit UKM
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Judul UKM</label>
                            <input type="text" class="form-control" name="judul" value="<?= $data['judul'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Isi / Deskripsi</label>
                            <textarea class="form-control" rows="5" id="isi" name="isi" value="<?= $data['isi'] ?>" required><?= $data['isi'] ?></textarea>
                            <script>
                                CKEDITOR.replace('isi');
                            </script>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Kegiatan</label>
                            <textarea class="form-control" rows="5" id="kegiatan" name="kegiatan" value="<?= $data['kegiatan'] ?>" required><?= $data['kegiatan'] ?></textarea>
                            <script>
                                CKEDITOR.replace('kegiatan');
                            </script>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori" class="mb-2">Kategori</label>
                            <select class="form-control" name="kategori" required>
                                <option <?php if ($data['kategori'] == 'Olahraga') echo 'selected'; ?> value="Olahraga">Olahraga</option>
                                <option <?php if ($data['kategori'] == 'Penalaran') echo 'selected'; ?> value="Penalaran">Penalaran</option>
                                <option <?php if ($data['kategori'] == 'Kesenian') echo 'selected'; ?> value="Kesenian">Kesenian</option>
                                <option <?php if ($data['kategori'] == 'Khusus') echo 'selected'; ?> value="Kesenian">Khusus</option>
                                <option <?php if ($data['kategori'] == 'Kesehjateraan Mahasiswa') echo 'selected'; ?> value="Kesehjateraan Mahasiswa">Kerohanian</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mb-3">
                                    <label for="tanggal" class="mb-2">Foto UKM</label>
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
            $conn->query("UPDATE ukm SET judul='$_POST[judul]',isi='$_POST[isi]', kegiatan='$_POST[kegiatan]',kategori='$_POST[kategori]', foto='$namafoto' WHERE id='$_GET[id]'") or die(mysqli_error($conn));
        } else {
            $conn->query("UPDATE ukm SET judul='$_POST[judul]',isi='$_POST[isi]', kegiatan='$_POST[kegiatan]',kategori='$_POST[kategori]' WHERE id='$_GET[id]'") or die(mysqli_error($conn));
        }
        echo "<script>alert('Data Berhasil Di Simpan');</script>";
        echo "<script>location='ukmdaftar.php';</script>";
    }
    ?>
    <?php include 'footer.php'; ?>