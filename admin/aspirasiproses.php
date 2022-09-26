<?php
include_once('../koneksi.php');
include 'header.php';
$ambildata = $conn->query("SELECT * FROM aspirasi WHERE idaspirasi='$_GET[id]'");
$data = $ambildata->fetch_assoc();
?>
<div class="container-fluid px-4 mt-3" style="padding: 10px;">
    <div class="card mb-4">
        <div class="card-header">
            Detail Aspirasi
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="15%">
                                    Nama
                                </td>
                                <td width="5px">
                                    :
                                </td>
                                <td>
                                    <?= $data['nama'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    NPM
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?= $data['npm'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jurusan
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?= $data['jurusan'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Asal
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?= $data['asal'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Angkatan
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?= $data['angkatan'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Keluhan
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?= $data['keluhan'] ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            Proses Aspirasi
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <h4 class="mb-3">Proses Aspirasi</h4>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Nama Proses</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal" class="mb-2">Tanggal Proses</label>
                            <input type="date" class="form-control" name="tanggal" value="<?= date('Y-m-d') ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success mr-5 float-right pull-right float-end" name="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            Riwayat Proses Aspirasi
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline">
                        <?php
                        $resultproses = $conn->query("SELECT * FROM aspirasiproses where idaspirasi = '$data[idaspirasi]' order by tanggal desc");
                        while ($dataproses = $resultproses->fetch_array()) :
                        ?>
                            <li>
                                <h4>
                                    <?= $dataproses['judul'] ?>
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="aspirasiproseshapus.php?id=<?= $dataproses['idproses'] ?>&idaspirasi=<?= $data['idaspirasi'] ?>" class="btn btn-danger btn-sm float-end"><i class="fa fa-trash"></i></a>
                                </h4>
                                <p>
                                    <?= tanggal($dataproses['tanggal']) ?>
                                </p>
                            </li>
                        <?php
                        endwhile;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['simpan'])) {
    $conn->query("INSERT INTO aspirasiproses
		(idaspirasi,judul,tanggal)
		VALUES('$_GET[id]','$_POST[judul]','$_POST[tanggal]')") or die(mysqli_error($conn));
    echo "<script>alert('Proses Aspiasi Berhasil Di Simpan');</script>";
    echo "<script>location='aspirasiproses.php?id=$_GET[id]';</script>";
}
?>
<?php include 'footer.php'; ?>