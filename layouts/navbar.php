<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
   <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h1 class="m-0 text-primary"><img width="100px" src="foto/logo.png"></h1>
   </a>
   <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
   </button>
   <?php
   function beranda()
   {
      $page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
      if ($page == 'index.php' or $page == '') {
         $hasil = 'active';
      }
      return $hasil;
   }
   function aktif($link)
   {
      $page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
      if ($page == $link) {
         $hasil = "active";
      }
      return $hasil;
   }
   function berita()
   {
      $page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
      if ($page == 'berita.php' or $page == 'beritadetail.php') {
         $hasil = 'active';
      }
      return $hasil;
   }
   function tentangkami()
   {
      $page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
      if ($page == 'visimisi.php' or $page == 'semboyan.php' or $page == 'struktural.php') {
         $hasil = 'active';
      }
      return $hasil;
   }
   function kanalaspirasi()
   {
      $page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
      if ($page == 'kanalaspirasi.php' or $page == 'aspirasicari.php') {
         $hasil = 'active';
      }
      return $hasil;
   }
   function ukm()
   {
      $page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
      if ($page == 'ukm.php' or $page == 'ukmcari.php' or $page == 'ukmdetail.php') {
         $hasil = 'active';
      }
      return $hasil;
   }
   ?>
   <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
         <a href="index.php" class="nav-item nav-link <?= beranda(); ?>">Beranda</a>
         <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle <?= tentangkami() ?>" data-bs-toggle="dropdown">Tentang Kami</a>
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
               <a href="visimisi.php" class="dropdown-item">Visi Misi</a>
               <a href="semboyan.php" class="dropdown-item">Semboyan</a>
               <a href="struktural.php" class="dropdown-item">Struktural</a>
            </div>
         </div>
         <a href="berita.php" class="nav-item nav-link <?= berita(); ?>">Berita</a>
         <a href="produkhukum.php" class="nav-item nav-link <?= aktif('produkhukum.php'); ?>">Produk Hukum</a>
         <a href="kanalaspirasi.php" class="nav-item nav-link <?= kanalaspirasi(); ?>">Kanal Aspirasi</a>
         <a href="ukm.php" class="nav-item nav-link <?= ukm(); ?>">UKM</a>
      </div>
   </div>
</nav>