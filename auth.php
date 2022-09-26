<?php
session_start();
include_once('koneksi.php');

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $ambil = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    $akunyangcocok = $ambil->num_rows;
    if ($akunyangcocok >= 1) {
        $akun = $ambil->fetch_assoc();
        $_SESSION["admin"] = $akun;
        echo "<script> alert('Login Berhasil');</script>";
        echo "<script> location ='admin/home.php';</script>";
    } else {
        echo "<script> alert('Login Gagal, username atau Password anda salah');</script>";
        echo "<script> location ='login.php';</script>";
    }
}
