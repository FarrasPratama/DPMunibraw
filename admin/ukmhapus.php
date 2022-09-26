<?php
include_once('../koneksi.php');
$conn->query("DELETE FROM ukm WHERE id='$_GET[id]'");

echo "<script>alert('Data Berhasil Di Hapus');</script>";
echo "<script>location='ukmdaftar.php';</script>";
