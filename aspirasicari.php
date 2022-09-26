<?php include_once('layouts/master.php');
include_once('koneksi.php');
$ambildata = $conn->query("SELECT * FROM aspirasi WHERE kodeaspirasi='$_POST[kode]'");
$data = $ambildata->fetch_assoc();
?>
<style>
    @media (min-width: 992px) {
        .col-md-border:not(:last-child) {
            border-right: 1px solid #d7d7d7;
        }

        .col-md-border+.col-md-border {
            border-left: 1px solid #d7d7d7;
            margin-left: -1px;
        }
    }

    ul.timeline {
        list-style-type: none;
        position: relative;
    }

    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }

    ul.timeline>li {
        margin: 20px 0;
        padding-left: 20px;
    }

    ul.timeline>li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #e8b643;
        background-color: #e8b643;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
</style>
<div class="container-fluid header p-0 jumbotrondepan" style="background-image: url('assets/aspirasi.png');background-size: cover;height:700px;background-position: bottom;">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row" style="padding-top: 75px">
        <div class="col-lg-12 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h2 class="display-3 mb-5 mt-5 text-center text-white" style="padding-top:150px">Cek Status Aspirasi</h2>
        </div>
    </div>
</div>
<div class="ourwork mt-5" id="aspirasiform">
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="titlepage">
                    <center>
                        <h2 class="bawahtengah text-center">Status Aspirasi</h2>
                    </center>
                </div>
            </div>
        </div>
        <?php if (!empty($data)) { ?>
            <div class="row">
                <div class="col-md-6 col-md-border mt-5">
                    <table class="table" style="width: 90%">
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
                <div class="col-md-6 col-md-border mt-5">
                    <ul class="timeline" style="padding-left:10%">
                        <?php
                        $resultproses = $conn->query("SELECT * FROM aspirasiproses where idaspirasi = '$data[idaspirasi]' order by tanggal desc");
                        $cek = $resultproses->num_rows;
                        if ($cek >= 1) {
                            while ($dataproses = $resultproses->fetch_array()) :
                        ?>
                                <li>
                                    <h4>
                                        <?= $dataproses['judul'] ?>
                                    </h4>
                                    <p>
                                        <?= tanggal($dataproses['tanggal']) ?>
                                    </p>
                                </li>
                            <?php
                            endwhile;
                        } else { ?>
                            <li>
                                <h4>
                                    Belum di Proses
                                </h4>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-md-12 mb-5 Kosong">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <center>
                                <img class="img-fluid" src="assets/kosong.png" alt="" style="width:70%">
                            </center>
                        </div>
                        <div class="bg-white text-center p-4">
                            <h5>Aspirasi tidak ditemukan<br>
                                mohon cek kembali kode<br>
                                aspirasi anda</h5>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include_once('layouts/footer.php') ?>
<script>
    $(document).ready(function() {
        $("html,body").scrollTop(700);
        // document.getElementById('aspirasiform').scrollIntoView()
    });
</script>