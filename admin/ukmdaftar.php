<?php
include_once('../koneksi.php');
include 'header.php'; ?>
<div class="container-fluid px-4 mt-3" style="padding: 10px;">
    <div class="card mb-4">
        <div class="card-header">
            <a href="ukmtambah.php" class="btn btn-success">
                <i class="fas fa-plus me-1"></i>
                Tambah UKM
            </a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $result = $conn->query("SELECT * FROM ukm");
                    while ($data = $result->fetch_array()) :
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['judul'] ?></td>
                            <td><?= $data['kategori'] ?></td>
                            <td><img src="../foto/<?= $data['foto'] ?>" width="150px" style="border-radius:10px"></td>
                            <td>
                                <a class="btn btn-primary" href="ukmedit.php?id=<?= $data['id'] ?>">Edit</a>
                                <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="ukmhapus.php?id=<?= $data['id'] ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include 'footer.php'; ?>