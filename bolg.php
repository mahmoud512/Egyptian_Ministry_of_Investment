<?php
include('inc/dsing/header.php');


?>
        <section class="services-details">
          <div class="container">
            <div class="row">
              <?php
include('inc/dsing/aksam_aktchf.php');

if (isset($_GET['kt'])) {
  include('inc/dsing/actchf1.php');
}elseif(isset($_GET['an'])){
  include('inc/dsing/actchf2.php');
}elseif(isset($_GET['da'])){
  include('inc/dsing/actchf3.php');
}elseif(!isset($_GET['da'])){
  include('inc/dsing/actchf1.php');
}
?>
                  
              </div>
          </div>
      </section>






    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/sidebar-content/jquery-sidebar-content.js"></script>




    <!-- template js -->
    <script src="assets/js/adbaiz.js"></script>


    <!-- toolbar js -->
    <script src="assets/vendors/layerdrops-toolbar/js/js.cookie.min.js"></script>
    <script src="assets/vendors/layerdrops-toolbar/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/vendors/layerdrops-toolbar/js/lang.js"></script>
    <script src="../../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
    <script src="assets/vendors/layerdrops-toolbar/js/layerdrops-toolbar.js"></script>
</body>


<!-- Mirrored from adbaiz-html.vercel.app/main-html/index-rtl.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Mar 2023 08:18:16 GMT -->
</html>