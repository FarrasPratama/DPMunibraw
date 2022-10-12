<?php
session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Mohon login terlebih dahulu');</script>";
    echo "<script>location='../login.php';</script>";
    exit();
}
function tanggal($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = getBulan(substr($tgl, 5, 2));
    $tahun = substr($tgl, 0, 4);
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
}
function getBulan($bln)
{
    switch ($bln) {
        case 1:
            return "Januari";
            break;
        case 2:
            return "Februari";
            break;
        case 3:
            return "Maret";
            break;
        case 4:
            return "April";
            break;
        case 5:
            return "Mei";
            break;
        case 6:
            return "Juni";
            break;
        case 7:
            return "Juli";
            break;
        case 8:
            return "Agustus";
            break;
        case 9:
            return "September";
            break;
        case 10:
            return "Oktober";
            break;
        case 11:
            return "November";
            break;
        case 12:
            return "Desember";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>DPM Unibraw Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../assets/template/sbadmin/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"></script>
    <script src="../assets/ckeditor/ckeditor.js"></script>
    <style>
        #news-slider {
            margin-top: 80px;
        }

        .post-slide {
            background: #fff;
            margin: 20px 15px 20px;
            border-radius: 15px;
            padding-top: 1px;
            box-shadow: 0px 14px 22px -9px #bbcbd8;
        }

        .post-slide .post-img {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin: -12px 15px 8px 15px;
            margin-left: -10px;
        }

        .post-slide .post-img img {
            width: 100%;
            height: auto;
            transform: scale(1, 1);
            transition: transform 0.2s linear;
        }

        .post-slide:hover .post-img img {
            transform: scale(1.1, 1.1);
        }

        .post-slide .over-layer {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            background: linear-gradient(-45deg, rgba(6, 190, 244, 0.75) 0%, rgba(45, 112, 253, 0.6) 100%);
            transition: all 0.50s linear;
        }

        .post-slide:hover .over-layer {
            opacity: 1;
            text-decoration: none;
        }

        .post-slide .over-layer i {
            position: relative;
            top: 45%;
            text-align: center;
            display: block;
            color: #fff;
            font-size: 25px;
        }

        .post-slide .post-content {
            background: #fff;
            padding: 2px 20px 40px;
            border-radius: 15px;
        }

        .post-slide .post-title a {
            font-size: 15px;
            font-weight: bold;
            color: #333;
            display: inline-block;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
        }

        .post-slide .post-title a:hover {
            text-decoration: none;
            color: #3498db;
        }

        .post-slide .post-description {
            line-height: 24px;
            color: #808080;
            margin-bottom: 25px;
        }

        .post-slide .post-date {
            color: #a9a9a9;
            font-size: 14px;
        }

        .post-slide .post-date i {
            font-size: 20px;
            margin-right: 8px;
            color: #CFDACE;
        }

        .post-slide .read-more {
            padding: 7px 20px;
            float: right;
            font-size: 12px;
            background: #2196F3;
            color: #ffffff;
            box-shadow: 0px 10px 20px -10px #1376c5;
            border-radius: 25px;
            text-transform: uppercase;
        }

        .post-slide .read-more:hover {
            background: #3498db;
            text-decoration: none;
            color: #fff;
        }

        .owl-controls .owl-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .owl-controls .owl-buttons .owl-prev {
            background: #fff;
            position: absolute;
            top: -13%;
            left: 15px;
            padding: 0 18px 0 15px;
            border-radius: 50px;
            box-shadow: 3px 14px 25px -10px #92b4d0;
            transition: background 0.5s ease 0s;
        }

        .owl-controls .owl-buttons .owl-next {
            background: #fff;
            position: absolute;
            top: -13%;
            right: 15px;
            padding: 0 15px 0 18px;
            border-radius: 50px;
            box-shadow: -3px 14px 25px -10px #92b4d0;
            transition: background 0.5s ease 0s;
        }

        .owl-controls .owl-buttons .owl-prev:after,
        .owl-controls .owl-buttons .owl-next:after {
            content: "\f104";
            font-family: FontAwesome;
            color: #333;
            font-size: 30px;
        }

        .owl-controls .owl-buttons .owl-next:after {
            content: "\f105";
        }

        @media only screen and (max-width:1280px) {
            .post-slide .post-content {
                padding: 0px 15px 25px 15px;
            }
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="home.php">Administrator</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="ubahprofil.php">Ubah Profil</a></li>
                    <li><a class="dropdown-item" href="../index.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="home.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Home
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#berita" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            Berita
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="berita" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="beritatambah.php">Tambah Berita</a>
                                <a class="nav-link" href="beritadaftar.php">Daftar Berita</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="aspirasidaftar.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-bell"></i></div>
                            Aspirasi
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#ukm" aria-expanded="false" aria-controls="collapseLayouts4">
                            <div class="sb-nav-link-icon"><i class="fas fa-trophy"></i></div>
                            UKM
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="ukm" aria-labelledby="headingOne4" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="ukmtambah.php">Tambah UKM</a>
                                <a class="nav-link" href="ukmdaftar.php">Daftar UKM</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Administrator</div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>