<?php
include('inc/dsing/header.php');
include('inc/fun/conn.php');
?>
    <section class="how-it-work" id="ec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="how-it-work__left">
                        <h3 class="how-it-work__title">اكتشف معنا استثمارك</h3>
                        <p class="how-it-work__text">نسهل عليك البحث عن الاستثمار الموجود في جمهورية مصر العربية</p>
                        <div class="container">
                          <form action="search.php?do" method="post">
                          <label for="kta">اختر القطاع :</label>
                          <select name="kta" id="kta" class="form-control" >
                        <?php
$sql= "SELECT * FROM sectors";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
  ?>
<option value="<?=$row['id']?>"><?=$row['sector']?></option>
  <?php
}
                            ?>
                          </select>
                          <br>
                          <label for="mohaf">اختر المحافظة :</label>
                          <select name="mohaf" id="mohaf" class="form-control">
                            <?php

$sql= "SELECT * FROM governorate";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
  ?>
<option value="<?=$row['id']?>"><?=$row['name']?></option>
  <?php
}
                            ?>
                          </select>
                          <br>
                          <div class="row">
    <div class="col">
    <label for="num_partners"> اختر عدد الشركاء </label>
<input type="number" name="num_partners" class="form-control" id="num_partners">
    </div>
    <div class="col">
      <label for="timelive">سنوات الاقامة بمصر</label>
      <input type="number" name="timelive" class="form-control" id="timelive">
    </div>
  </div>
                          <br>
                          <div class="row">
    <div class="col">
                          <label for="mal"> رأس المال :</label>
                          <select name="mal" id="mal" class="form-control">
                            <?php

$sql= "SELECT * FROM capital";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
  ?>
<option value="<?=$row['id']?>"><?=$row['name']?></option>
  <?php
}
                            ?>
                          </select>
    </div>
    <div class="col">
    <label for="num_partnersj"> اختر المساحة </label>
<input type="number" name="mes" class="form-control" id="num_partnersj">
    </div></div>
                          <br>
                          <h2 style="text-align: center;"> المبلغ المراد الاستثمار بة</h2>
                          <hr>
                          <div class="input-group mb-3">
  <span class="input-group-text">ادخل المبلغ</span>
  <input type="text" class="form-control" name="men" placeholder="من">
  <input type="text" class="form-control" name="ela" placeholder="الي">
</div>
<div class="main-menu__btn-box" style="width: 100%; text-align: center;">
<input type="submit" value=" ابحث " class="thm-btn main-menu__btn">
                        </div>
                          </form>
                          
                        </div>
                      
                        
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="how-it-work__right">
                        <div class="how-it-work__shape-1 float-bob-y">
                            <img src="assets/images/shapes/how-it-work-shape-1.png" alt="">
                        </div>
                        <div class="how-it-work__shape-2">
                            <img src="assets/images/shapes/how-it-work-shape-2.png" alt="">
                        </div>
                        <div class="how-it-work__shape-3">
                            <img src="assets/images/shapes/how-it-work-shape-3.png" alt="">
                        </div>
                        <div class="how-it-work__img-box">
                            <div class="how-it-work__img">
                                <img src="assets/images/resources/how-it-work-img-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
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