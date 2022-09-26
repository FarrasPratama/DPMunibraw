<?php
include_once('../koneksi.php');
$conn->query("DELETE FROM aspirasiproses WHERE idproses='$_GET[id]'");

echo "<script>alert('Data Proses Aspirasi Berhasil Di Hapus');</script>";
echo "<script>location='aspirasiproses.php?id=$_GET[idaspirasi]';</script>";
