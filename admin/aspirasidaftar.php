<?php
include_once('../koneksi.php');
include 'header.php'; ?>
<div class="container-fluid px-4 mt-3" style="padding: 10px;">
    <div class="card mb-4">
        <div class="card-header">
            Aspirasi
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Jurusan</th>
                        <th>Asal</th>
                        <th>Angkatan</th>
                        <th>Keluhan</th>
                        <th>Proses</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $result = $conn->query("SELECT * FROM aspirasi order by idaspirasi desc");
                    while ($data = $result->fetch_array()) :
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['npm'] ?></td>
                            <td><?= $data['jurusan'] ?></td>
                            <td><?= $data['asal'] ?></td>
                            <td><?= $data['angkatan'] ?></td>
                            <td><?= $data['keluhan'] ?></td>
                            <td>
                                <?php
                                $resultproses = $conn->query("SELECT * FROM aspirasiproses where idaspirasi='$data[idaspirasi]' order by tanggal desc limit 1");
                                $proses = $resultproses->fetch_assoc();
                                if (!empty($proses)) {
                                    echo $proses['judul'];
                                } else {
                                    echo "Belum di Proses";
                                }
                                ?>
                            </td>
                            <td>
                                <a class="btn btn-success" href="aspirasiproses.php?id=<?= $data['idaspirasi'] ?>">Proses</a>
                                <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="aspirasihapus.php?id=<?= $data['idaspirasi'] ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include 'footer.php'; ?>