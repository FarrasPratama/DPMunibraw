<?php 
include_once('koneksi.php');
    if(isset($_GET['hapus'])) {
        $hapus = $_GET['hapus'];
        $id = $_GET['id'];
        if($hapus == 'pengumuman') {
            $conn->query("DELETE FROM pengumuman WHERE id = $id");
            header("Location: dashboard.php");
        }else if($hapus == 'berita') {
            $conn->query("DELETE FROM berita WHERE id = $id");
            header("Location: berita.php");
        }
    }else if(isset($_POST['tambah'])) {
        $tambah = $_POST['tambah'];
        if($tambah == 'pengumuman') {
            $tanggal = $_POST['tanggal'];
            $isi = $_POST['isi'];
            $conn->query("INSERT INTO pengumuman VALUES (NULL, '$tanggal', '$isi')");
            header('Location: dashboard.php');
        }else if($tambah == 'berita') {
            $tanggal = $_POST['tanggal'];
            $isi = $_POST['isi'];
            $nama = rand(10000, 99999) . $_FILES['foto']['name'];
            $file_tmp = $_FILES['foto']['tmp_name'];
            move_uploaded_file($file_tmp, 'file/'.$nama);
            $foto = 'file/' . $nama;
            $judul = $_POST['judul'];
            $conn->query("INSERT INTO berita VALUES (NULL, '$tanggal', '$isi', '$foto', '$judul')");
            header("Location: berita.php");
        }
    }
?>