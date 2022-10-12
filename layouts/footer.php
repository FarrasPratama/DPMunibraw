<div class="container-fluid text-light footer wow fadeIn" style="background-color:white" data-wow-delay="0.1s">
   <div class="container py-5 text-dark">
      <div class="row g-5">
         <div class="col-lg-4 col-md-6">
            <h5 class="text-dark mb-4">Kontak Kami</h5>
            <a class="btn btn-link text-dark" href="">dpmunibraw@gmail.com</a>
            <a class="btn btn-link text-dark" href="">0898 1234 5678</a>
            <a class="btn btn-link text-dark" href="">dpmunibraw.com</a>
         </div>
         <div class="col-lg-4 col-md-6">
            <h5 class="text-dark mb-4">Alamat</h5>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Gedung LKM UB, Penanggungan, Kec. Klojen, Kota Malang, Jawa Timur</p>
         </div>
         <div class="col-lg-4 col-md-6">
            <h5 class="text-dark mb-4">Google Maps</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15805.80694019054!2d112.6164344!3d-7.9521814!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x47295ede91a9c4f1!2sDewan%20Perwakilan%20Mahasiswa%20Universitas%20Brawijaya%20(DPM%20UB)!5e0!3m2!1sid!2sid!4v1660028020887!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="copyright">
         <div class="row justify-content-center">
            <div class="col-md-12 text-center text-md-end">
            </div>
         </div>
      </div>
   </div>
</div>
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/home/lib/wow/wow.min.js"></script>
<script src="assets/home/lib/easing/easing.min.js"></script>
<script src="assets/home/lib/waypoints/waypoints.min.js"></script>
<script src="assets/home/lib/counterup/counterup.min.js"></script>
<script src="assets/home/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/home/lib/tempusdominus/js/moment.min.js"></script>
<script src="assets/home/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="assets/home/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="assets/home/js/main.js"></script>
<script src="assets/jquery.isotope-3.0.6.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
   $('#carouselExample').on('slide.bs.carousel', function(e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 7;
      var totalItems = $('.carousel-item').length;
      if (idx >= totalItems - (itemsPerSlide - 1)) {
         var it = itemsPerSlide - (totalItems - idx);
         for (var i = 0; i < it; i++) {
            if (e.direction == "left") {
               $('.carousel-item').eq(i).appendTo('.carousel-inner');
            } else {
               $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
         }
      }
   });

   $(document).ready(function() {
      $("#news-slider").owlCarousel({
         items: 3,
         itemsDesktop: [1199, 3],
         itemsDesktopSmall: [980, 2],
         itemsMobile: [600, 1],
         navigation: true,
         navigationText: ["", ""],
         pagination: true,
         autoPlay: true
      });
   });
</script>
</body>

</html>