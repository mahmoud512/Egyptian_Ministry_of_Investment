<?php
include('inc/fun/conn.php');
include('inc/dsing/header.php');
?>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/16533892710.jpeg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider__shape-1 float-bob-y">
                            <img src="assets/images/shapes/16533892710.jpeg" alt="">
                        </div>
                        <div class="main-slider__shape-2 float-bob-x">
3333                            <img src="assets/images/shapes/16533892710.jpeg" alt="">
                        </div>
                        <div class="main-slider__shape-3 float-bob-y">
                            <img src="assets/images/shapes/16533892710.jpeg" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                      <h2 class="main-slider__title">استثمر في جميع انحاء مصر
                                        <p class="main-slider__sub-title">مصر بيئة مواتية</p>
                                        </h2>
                                        <div class="main-slider__btn-box">
                                            <a href="#vid" class="thm-btn main-slider__btn">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/m3.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider__shape-1 float-bob-y">
                            <img src="assets/images/shapes/m3.jpg" alt="">
                        </div>
                        <div class="main-slider__shape-2 float-bob-x">
                            <img src="assets/images/shapes/m3.jpg" alt="">
                        </div>
                        <div class="main-slider__shape-3 float-bob-y">
                            <img src="assets/images/shapes/m3.jpg" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                      <h2 class="main-slider__title">رؤية مصر 2030 
                                        <p class="main-slider__sub-title"> الاهداف الخاصة بمصر 2030 </p>
                                        </h2>
                                        <div class="main-slider__btn-box">
                                            <a href="masr2030.php" class="thm-btn main-slider__btn">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/m4.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider__shape-1 float-bob-y">
                            <img src="assets/images/shapes/m4.jpg" alt="">
                        </div>
                        <div class="main-slider__shape-2 float-bob-x">
                            <img src="assets/images/shapes/m4.jpg" alt="">
                        </div>
                        <div class="main-slider__shape-3 float-bob-y">
                            <img src="assets/images/shapes/m4.jpg" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                      <h2 class="main-slider__title"> الرخصة الذهبية
                                        <p class="main-slider__sub-title"> منح الرخصة الذهبية للشركات بما يعزز جاذبية السوق المحلي للاستثمار </p>
                                        </h2>
                                        <div class="main-slider__btn-box">
                                            <a href="#" class="thm-btn main-slider__btn">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/mm.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider__shape-1 float-bob-y">
                            <img src="assets/images/shapes/mm.jpg" alt="">
                        </div>
                        <div class="main-slider__shape-2 float-bob-x">
                            <img src="assets/images/shapes/mm.jpg" alt="">
                        </div>
                        <div class="main-slider__shape-3 float-bob-y">
                            <img src="assets/images/shapes/mm.jpg" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                      <h2 class="main-slider__title"> قطاعات الاستثمار
                                        <p class="main-slider__sub-title"> القطاعات المتوفر الاستثمار فيها </p>
                                        </h2>
                                        <div class="main-slider__btn-box">
                                            <a href="#ec" class="thm-btn main-slider__btn">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>

                <!-- If we need navigation buttons -->


            </div>
        </section>
        <!--Main Slider End-->

      <!--About One Start-->
      <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="assets/images/resources/Untitled2.jpg" alt="">
                            </div>
                            <div class="about-one__img-two">
                                <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                    
                        <h3 class="about-one__title">رؤية مصر 2030 </h3>
                        <p class="about-one__text">   رؤية مصر ٢٠٣٠ هي أجندة وطنية أُطلقت في فبراير ٢٠١٦ تعكس الخطة الاستراتيجية طويلة المدى للدولة لتحقيق مبادئ وأهداف التنمية المستدامة في كل المجالات، وتوطينها بأجهزة الدولة المصرية المختلفة. تستند رؤية مصر ٢٠٣٠ على مبادئ "التنمية المستدامة الشاملة" و"التنمية الإقليمية المتوازنة"، وتعكس رؤية مصر ٢٠٣٠ الأبعاد الثلاثة للتنمية المستدامة: البعد الاقتصادي، والبعد الاجتماعي، والبعد البيئي. </p>
                        <div class="about-one__count-box">
                            <div class="about-one__count">
                                <h3 class="odometer" data-count="7">0</h3>
                                <span class="about-one__count-plus">+</span>
                                <p>متبقي علي الموعد</p>
                            </div>
                            <div class="about-one__count-text">
                                <p style="margin-top: 20px;">يعزز الاستثمار في البشر و بناء قدرتهم علي زيادة المعرفة و الابتكار و البحث العلمي في كافة المجالات</p>
                            </div>
                        </div>
<br>
                        <div class="about-one__bottom">
                            <div class="about-one__bottom-icon">
                                <div class="about-one__bottom-shape-1"></div>
                                <span class="icon-megaphone-announcement-loudspeaker"></span>
                            </div>
                            <div class="about-one__bottom-text">
                                <p>تركز رؤيه مصر 2030 علي الارتقاء بجوده حياه المواطن المصري وتحسين مستوي المعيشه في مختلف مختلف نواحي االحياه وذلك من خلال التاكيد علي ترسيخ مبادئ العدالة والانتماء و الاجتماعي</p>
                            </div>
                        </div>
                        <br>
                        <div style="width: 100%; text-align: left;" class="btnn">
                          <a style="padding-left: 50px; padding-right: 50px;"  href="masr2030.php" class="cta-one__btn thm-btn ">المزيد</a>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
    <!--About One End-->


    <!--Video One Start-->
    <section class="video-one" id="vid">
        <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/video-one-bg.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-one__inner">
                        <h2 class="video-one__video-title">استثمر في مصر <br>
                            اقتصاد مصر بيئة مواتية للاستثمار </h2>
                        <div class="video-one__video-link">
                            <a href="assets/vid/4_5780569614371000282.mp4" class="video-popup">
                                <div class="video-one__video-icon">
                                    <span class="icon-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->

    <!--Services One Start-->
    <section class="services-one">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="section-title__title"> نحن نقدم افضل الحلول </h3>
            </div>
            <div class="row">
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"></div>
                        <div class="services-one__shape-2"></div>
                        <div class="services-one__icon">
                            <span class="icon-diamond-origami-paper"></span>
                        </div>
                        <h3 class="services-one__title"><a href="blog2.php?ac1"> بنية اساسية حديثة </a></h3>
                        <p class="services-one__text">  الطرق و الكباري - السكك الحديدية - القطار الكهربائي السريع وغيرها من التطورات الكثيره </p>
                        <div class="services-one__btn-box">
                            <a href="blog2.php?ac1" class="services-one__btn thm-btn">استكشف المزيد</a>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"></div>
                        <div class="services-one__shape-2"></div>
                        <div class="services-one__icon services-one__icon-2">
                            <span class="icon-paper-plane-origami"></span>
                        </div>
                        <h3 class="services-one__title"><a href="blog2.php?ac2"> السوق الاستهلاكي </a>
                        </h3>
                        <p class="services-one__text">  صنفة مصر علي انها الدولة الاكثر سكانا في افريقيا و الشرق الاوسط مما يجعلها تجذب العديد من العلامات التجارية العالمية  </p>
                        <div class="services-one__btn-box">
                            <a href="blog2.php?ac2" class="services-one__btn thm-btn">استكشف المزيد</a>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"></div>
                        <div class="services-one__shape-2"></div>
                        <div class="services-one__icon services-one__icon-4">
                            <span class="icon-sun-origami-paper"></span>
                        </div>
                        <h3 class="services-one__title"><a href="blog2.php?ac3">موقع استراتجي </a></h3>
                        <p class="services-one__text">  تملك مصر مركذا رئيسيا بين حركة التجارة العالمية لانها تربط بين اروبا و الشرق الاوسط و قارة افريقيا بسبب موقعها المتميز  </p>
                        <div class="services-one__btn-box">
                            <a href="blog2.php?ac3" class="services-one__btn thm-btn">استكشف المزيد</a>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"></div>
                        <div class="services-one__shape-2"></div>
                        <div class="services-one__icon services-one__icon-4">
                            <span class="icon-sun-origami-paper"></span>
                        </div>
                        <h3 class="services-one__title"><a href="blog2.php?ac4">قوة عاملة </a></h3>
                        <p class="services-one__text"> تملك مصر القدرة علي توفير عمالة مدربة في شتي المجالات بكفاءه عاليه من التدريب وبشكل مستمر </p>
                        <div class="services-one__btn-box">
                            <a href="blog2.php?ac4" class="services-one__btn thm-btn">استكشف المزيد</a>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
            </div>
        </div>
    </section>
    <br>
    <!--Services One End-->

    <!--How It sharch Start-->
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
    <!--How It Work End-->
    <!--How It Work Start-->
    <!-- <section class="how-it-work" id="ec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="how-it-work__left">
                        <h3 class="how-it-work__title">اكتشف معنا استثمارك</h3>
                        <p class="how-it-work__text">نسهل عليك البحث عن الاستثمار الموجود في جمهورية مصر العربية</p>
                        <ul class="how-it-work__points list-unstyled">
                          <li>
                            <a href="bolg.php"><div class="how-it-work__points-count"></div></a>
                            
                            <div class="how-it-work__points-content">
                                    <a href="bolg.php"><h3>اكتشف </h3></a>
                                    <p> اكتشف القطاعات المتاحة للاستثمار  </p>
                                </div>
                              </li>
                              <br>
                              <br>
                            <li>
                                <div class="how-it-work__points-count how-it-work__points-count-2"></div>
                                <div class="how-it-work__points-content">
                                    <h3>ابحث</h3>
                                    <p>يمكن البحث عن استثمارك المفضل بنفسك  <br> عن طريق المقالات </p>
                                </div>
                            </li>
                            <br>
                            <br>
                            <li>
                                <div class="how-it-work__points-count how-it-work__points-count-3"></div>
                                <div class="how-it-work__points-content">
                                    <h3>استثمر</h3>
                                    <p>بكل سهولة و اقل الاجراءات  القنونية</p>
                                </div>
                            </li>
                        </ul>
                        <br>
                        <br>
                        <div class="main-menu__btn-box" style="width: 100%; text-align: center;">
                            <a href="#" class="thm-btn main-menu__btn"> المزيد </a>
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
    </section> -->
    <!--How It Work End-->

    <!--Project One Start-->
    <section class="project-one">
        <div class="project-one__bg" style="background-image: url(assets/images/backgrounds/project-one-bg.jpg);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <h3 class="section-title__title">منصة الاستطلاع</h3>
                <!-- <p class="section-title__text">Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                    quasi architecto</p> -->
            </div>



              <div class="container" style="width: 100%; ">
                  <div class="row">
                      <!--Project One Single Start-->
                      <div class="col-xl-6 col-lg-6 col-md-6">
                          <div class="project-one__single">
                              <div class="project-one__img-box">
                                  <div class="project-one__img">
                                      <img src="assets/images/project/project-one-1.jpg" alt="">
                                  </div>
                              </div>
                              <div class="project-one__content-box">
                                  <div class="project-one__title-box">
                                      <h3 class="project-one__title"><a href="bolg.php">
                                               اكتشف</a>
                                      </h3>
                                      <p class="project-one__text">القطاعات - الضمانات و الحافز - نظم الاستثمار</p>
                                  </div>
                                  <div class="project-one__arrow-box">
                                      <a href="bolg.php" class="project-one__arrow"><i class="icon-right-arrow"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Project One Single End-->
                      <!--Project One Single Start-->
                      <div class="col-xl-6 col-lg-6 col-md-6">
                          <div class="project-one__single">
                              <div class="project-one__img-box">
                                  <div class="project-one__img">
                                      <img src="assets/images/project/project-one-2.jpg" alt="">
                                  </div>
                              </div>
                              <div class="project-one__content-box">
                                  <div class="project-one__title-box">
                                      <h3 class="project-one__title"><a href="#">انطلق</a>
                                      </h3>
                                      <!-- <p class="project-one__text">ابحث بنفسك</p> -->
                                  </div>
                                  <div class="project-one__arrow-box">
                                      <a href="search.php" class="project-one__arrow"><i class="icon-right-arrow"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Project One Single End-->

                  </div>
              </div>


        </div>
    </section>
    <!--Project One End-->

  

</div><!-- /.page-wrapper -->


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

        



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-search"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

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