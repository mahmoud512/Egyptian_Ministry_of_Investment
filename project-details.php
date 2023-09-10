<?php
include('inc/fun/conn.php');
include('inc/dsing/header.php');
$id = $_GET['id'];
if (isset($_POST['submit'])) {
if (!isset($_SESSION['id_user'])) {
  $errorr = 0;
}
if (isset($_SESSION['id_user'])) {
$user_id =$_SESSION['id_user'];
  $sql = "INSERT INTO `fors_add`(id_forsa, id_user, m_project) VALUES ('$id','$user_id','1')";
  $con->query($sql);
  $sc = 1;
}
}
?>
    <div class="page-wrapper">

  



        <!--Page Header Start-->
        <section class="page-header">
            <div class="thm-breadcrumb-box">
                <div class="thm-breadcrumb__shape-1"></div>
                <div class="thm-breadcrumb__shape-2"></div>
                <div class="thm-breadcrumb__icon-two">
                    <img src="assets/images/icon/thm-breadcrumb-icon-1.png" alt="">
                </div>
                <ul class="thm-breadcrumb list-unstyled">
                    <li>تفاصيل المشروع</li>
                </ul>
                <div class="thm-breadcrumb-box__text-box">
                    <div class="icon">
                        <img src="assets/images/icon/thm-breadcrumb-icon-2.png" alt="">
                    </div>
                    <p class="thm-breadcrumb-box__text">وزارة الاستثمار المصري</p>
                </div>
            </div>
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <div class="page-header__shape-1 zoominout">
                        <img src="assets/images/shapes/page-header-shape-1.png" alt="">
                    </div>
                    <div class="page-header__shape-2 float-bob-y">
                        <img src="assets/images/shapes/page-header-shape-2.png" alt="">
                    </div>
                    <h2>تفاصيل المشروع</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!--Project Details Start-->
        <?php
          $sql = "SELECT * FROM fors WHERE id = $id";
          $result = $con->query($sql);
          while ($row = $result->fetch_assoc()) {
        ?>
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__inner">
                            <div class="project-details__banner">
                              <?php
                              if (isset($errorr)) {
                                echo'<div class="alert alert-danger">
                                <strong>تنبية !</strong> المعزرة <a href="login.php?do" class="alert-link">يرجي تسجيل الدخول اولا</a>.
                              </div>';
                              }
                              if (isset($sc)) {
                                echo'<div class="alert alert-info">
                                <strong>مرحبا !</strong> تم حجز الفرصة بالفعل <a href="foras_add.php" class="alert-link">اضغط هنا متابعة تفاصيل الفرصة </a>.
                              </div>';
                              }
                              ?>
                                <div class="project-details__img">
                                  <!-- صورة المشروع  -->
                                    <img src="dashboard/dist/img/foras/<?=$row['caver']?>" width="100%" height="500px" alt="">
                                </div>
                                <div class="project-details__points-box">
                            
                                    <ul class="project-details__points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-copy"></span>
                                            </div>
                                            <div class="text">
                                                <h3 class="project-details__points-title">موقع المشروع :</h3>
                                                <p class="project-details__points-sub-title"><?php
                                                $id_s = $row['governorate'];
                                    $sqlf = "SELECT * FROM governorate WHERE id = $id_s";
                                    $resultf = $con->query($sqlf);
                                    $rows = $resultf->fetch_assoc();
                                    echo $rows['name'];
                                    ?></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-sun-origami-paper"></span>
                                            </div>
                                            <div class="text">
                                                <h3 class="project-details__points-title">مساحة المشروع :</h3>
                                                <p class="project-details__points-sub-title"><?=$row['msaha']?></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-diamond-origami-paper"></span>
                                            </div>
                                            <div class="text">
                                                <h3 class="project-details__points-title">تكلفة المشروع :</h3>
                                                <p class="project-details__points-sub-title"><?=$row['prise']?></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-diamond-origami-paper"></span>
                                            </div>
                                            <div class="text">
                                                <h3 class="project-details__points-title"> عدد الشركاء :</h3>
                                                <p class="project-details__points-sub-title"><?=$row['num_partners']?></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-clock"></span>
                                            </div>
                                            <div class="text">
                                                <h3 class="project-details__points-title">تاريخ المشروع :</h3>
                                                <p class="project-details__points-sub-title"><?=$row['date_add']?></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-details__content-box">
                                    <h3 class="project-details__title-1"><?=$row['name']?></h3>
                                    <div class="project-details__text-1"><?=$row['des']?></div>
                                    
                                        </div>
                                        <div style="text-align: center;">
                                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

                                        <button type="button" class="btn btn-lg" style="background-color: #18a74e; color: white; font-size: 25px;" data-bs-toggle="modal" data-bs-target="#myModal">
      حجز الفرصة
    </button>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">هل انت متاكد من حجز  : <?=$row['name']?> </h4>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      هل انت متاكد من حجز  : <?=$row['name']?> </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
      <input type="submit" name="submit" class="btn btn-danger p-2" value="حجز الفرصة">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">لا</button>
      </div>
      
    </div>
  </div>
</div>
                                      </form>
                                        </div>
                                </div>
        </section>
        <?php } ?>
        <!--Project Details End-->

<br>
<br>
<br>
<br>
<br>
<br>
<br>




    </div><<!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.php" aria-label="logo image"><img src="assets/images/resources/logo-1.svg" width="150"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->



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
</body>


<!-- Mirrored from adbaiz-html.vercel.app/main-html/project-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Mar 2023 08:19:18 GMT -->
</html>