<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <title>Dewan Perwakilan Mahasiswa Unibraw</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/home/lib/animate/animate.min.css" rel="stylesheet">
   <link href="assets/home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="assets/home/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
   <link href="assets/home/css/style.css" rel="stylesheet">
   <link href="assets/main.css" rel="stylesheet">
   <link rel="stylesheet" href="../assets/style.css">
   <link href="assets/home/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/stylecarousel.css">
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.33/sweetalert2.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

</head>

<body>
   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
         <span class="sr-only">Loading...</span>
      </div>
   </div>

   <body>
      <?php include_once('navbar.php');
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