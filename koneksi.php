<?php
$conn = new mysqli("localhost", "root", "", "dpmunibraw");
if ($conn->connect_errno) {
  echo "Koneksi Gagal : " . $conn->connect_error;
  exit();
}
