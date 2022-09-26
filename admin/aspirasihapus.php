<?php
include_once('../koneksi.php');
$conn->query("DELETE FROM aspirasi WHERE idaspirasi='$_GET[id]'");
$conn->query("DELETE FROM aspirasiproses WHERE idaspirasi='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Hapus');</script>";
echo "<script>location='aspirasidaftar.php';</script>";
