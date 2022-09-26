<?php
include_once('../koneksi.php');
include 'header.php';
$iduser = $_SESSION['admin']['iduser'];
$ambildata = $conn->query("SELECT * FROM user WHERE iduser='$iduser'");
$data = $ambildata->fetch_assoc();
?>
<div class="container-fluid px-4 mt-3" style="padding: 10px;">
    <div class="card mb-4">
        <div class="card-header">
            Edit Profil
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Password</label>
                            <input type="text" class="form-control" name="password" value="">
                            <input type="hidden" class="form-control" name="passwordlama" value="<?= $data['password'] ?>">
                            <span class="text-danger">Kosongkan jika tidan ingin mengganti password</span>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success mr-5 float-right pull-right" name="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['simpan'])) {
    if ($_POST['password'] == "") {
        $password = $_POST['passwordlama'];
    } else {
        $password = $_POST['password'];
    }
    $conn->query("UPDATE user SET username='$_POST[username]',password='$password',nama='$_POST[nama]' WHERE iduser='$iduser'") or die(mysqli_error($conn));
    echo "<script>alert('Data Berhasil Di Ubah');</script>";
    echo "<script>location='ubahprofil.php';</script>";
}
?>
<?php include 'footer.php'; ?>