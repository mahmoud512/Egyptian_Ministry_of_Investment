<?php
include('inc/fun/conn.php');
include('inc/dsing/header.php');


?>

               <!--Page Header Start-->
               <section class="page-header">
            <div class="thm-breadcrumb-box">
                <div class="thm-breadcrumb__shape-1"></div>
                <div class="thm-breadcrumb__shape-2"></div>
                <div class="thm-breadcrumb__icon-two">
                    <img src="assets/images/icon/thm-breadcrumb-icon-1.png" alt="">
                </div>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>></span></li>
                    <li>مقالات عن الاثتسمار</li>
                </ul>
                <div class="thm-breadcrumb-box__text-box">
                    <div class="icon">
                        <img src="assets/images/icon/thm-breadcrumb-icon-2.png" alt="">
                    </div>
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
                    <h2>مقالات عن الاستثمار</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                      <?php 
                      $id_mak =$_GET['id'];
                          $sql = "SELECT * FROM mkala WHERE id = $id_mak";
                          $result = $con->query($sql);
                          while ($row = $result->fetch_assoc()) {
                            $id_user = $row['id_user'];
                            
                      ?>
                        <div class="blog-details__left">
                            <div class="blog-details__inner">
                                <div class="blog-details__img">
                                    <img src="dashboard/dist/img/makala/<?=$row['cover']?>" alt="">
                                </div>
                                <div class="blog-details__content-box">
                                    <div class="blog-details__meta-box-and-share-btn">
                                        <div class="blog-details__meta-box">
                                            <div class="blog-details__tag">
                                                <p><?=$row['makala_an']?></p>
                                            </div>
                                            <ul class="blog-details__meta list-unstyled">
                                                <li>
                                                    <a href="blog-details.html"><span class="icon-calender"></span> <?=$row['date_add']?></a>
                                                </li>
                                                <li>
                                                    <a href="blog-details.html"><span class="icon-user"></span> BY <?php 
                                              $sqll = "SELECT * FROM `admin` WHERE  id = $id_user";
                                              $resultt = $con->query($sqll);
                                              $roww = $resultt->fetch_assoc();
                                              echo $roww['name'];
                                              ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3 class="blog-details__title-1"><?=$row['title']?></h3>
                                    <div class="blog-details__text blog-details__text-1"><?=$row['des']?></div>
                                
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__post">
                                <div class="sidebar__title-box">
                                    <div class="sidebar__title-shape-1">
                                        <img src="assets/images/shapes/sidebar-title-shape-1.png" alt="">
                                    </div>
                                    <h3 class="sidebar__title">احدث المقالات</h3>
                                </div>
                                <ul class="sidebar__post-list list-unstyled">
                                <?php 
                          $sql = "SELECT * FROM mkala LIMIT 4";
                          $result = $con->query($sql);
                          while ($row = $result->fetch_assoc()) {
                      ?>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="dashboard/dist/img/makala/<?=$row['cover']?>" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <span class="sidebar__post-content-meta"><i
                                                    class="icon-calendar-date-time"></i>
                                                التاريخ :  <?=$row['date_add']?></span>
                                            <h3>
                                                <a href="blog_details.php?id=<?=$row['id']?>"><?=$row['title']?></a>
                                            </h3>
                                        </div>
                                    </li>
<?php } ?>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__get-in-touch">
                                <div class="sidebar__title-box">
                                    <div class="sidebar__title-shape-1">
                                        <img src="assets/images/shapes/sidebar-title-shape-1.png" alt="">
                                    </div>
                                    <h3 class="sidebar__title">وزارة الاستثمار المصري</h3>
                                </div>
                                <div class="sidebar__get-in-touch-img-box">
                                    <div class="sidebar__get-in-touch-img">
                                        <img src="assets/images/blog/nnn.jpg" alt="">
                                        
                                    </div>
                                    <div class="sidebar__get-in-touch-title-box">
                                        <h3 class="sidebar__get-in-touch-title"> تمتلك مصر الكثير من المزايا و المقومات في مجال البنية الاساسية </h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->
        <!-- /.page-wrapper -->


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


<!-- Mirrored from adbaiz-html.vercel.app/main-html/blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Mar 2023 08:19:23 GMT -->
</html>