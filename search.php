<?php
include('inc/fun/conn.php');
include('inc/dsing/header.php');
?>

<?php
if(!isset($_GET['do'])){
  ?>
<section class="page-header">
            <div class="thm-breadcrumb-box">
                <div class="thm-breadcrumb__shape-1"></div>
                <div class="thm-breadcrumb__shape-2"></div>
                <div class="thm-breadcrumb__icon-two">
                    <img src="assets/images/icon/thm-breadcrumb-icon-1.png" alt="">
                </div>
                <ul class="thm-breadcrumb list-unstyled">
                  <li>وزارة الاستثمار</li>
                  <li><span>&gt;</span></li>
                  <li><a >الفرص الاستثمارية</a></li>
                </ul>
                <div class="thm-breadcrumb-box__text-box">
                    <div class="icon">
                        <img src="assets/images/icon/thm-breadcrumb-icon-2.png" alt="">
                    </div>
                    <p class="thm-breadcrumb-box__text">مصر بيئة مواتية للاستثمار</p>
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
                    <h2>الفرص الاستثمارية</h2>
                </div>
            </div>
        </section>


      

<section class="project-page-v-1">
            <div class="container">
                <div class="row">
                  <?php 
$sql = "SELECT * FROM fors";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
  $governorate = $row['governorate'];
  ?>
  <!--Project One Single Start-->
  <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="dashboard/dist/img/foras/<?=$row['caver']?>" alt="">
                                </div>
                            </div>
                            <div class="project-one__content-box">
                                <div class="project-one__title-box">
                                    <h3 class="project-one__title"><a href="project-details.html"><?=$row['name']?></a>
                                    </h3>
                                    <p class="project-one__title"><?php
                                    $sqlf = "SELECT * FROM governorate WHERE id =$governorate";
                                    $resultf = $con->query($sqlf);
                                    $rows = $resultf->fetch_assoc();
                                    echo $rows['name'];
                                    ?></p>
                                </div>
                                <div class="project-one__arrow-box">
                                    <a href="project-details.php?id=<?=$row['id']?>" class="project-one__arrow"><i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
  <?php
}
                  ?>
                </div>
            </div>
        </section>
  <?php
}
?>
<?php
if(isset($_GET['do'])){
  $kta= $_POST['kta'];
  $mohaf= $_POST['mohaf'];
  $men= $_POST['men'];
  $ela= $_POST['ela'];
  $mal= $_POST['mal'];
  $mes= $_POST['mes'];
  $timelive= $_POST['timelive'];
  $timelive1= 0;
  $num_partners= $_POST['num_partners'];
  $num_partners1= 0;
  ?>
<section class="page-header">
            <div class="thm-breadcrumb-box">
                <div class="thm-breadcrumb__shape-1"></div>
                <div class="thm-breadcrumb__shape-2"></div>
                <div class="thm-breadcrumb__icon-two">
                    <img src="assets/images/icon/thm-breadcrumb-icon-1.png" alt="">
                </div>
                <ul class="thm-breadcrumb list-unstyled">
                  <li>وزارة الاستثمار</li>
                  <li><span>&gt;</span></li>
                  <li><a href="index.html">الفرص الاستثمارية</a></li>
                </ul>
                <div class="thm-breadcrumb-box__text-box">
                    <div class="icon">
                        <img src="assets/images/icon/thm-breadcrumb-icon-2.png" alt="">
                    </div>
                    <p class="thm-breadcrumb-box__text">مصر بيئة مواتية للاستثمار</p>
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
                    <h2>الفرص الاستثمارية</h2>
                </div>
            </div>
        </section>


      

<section class="project-page-v-1">
            <div class="container">
                <div class="row">
                  <?php 
$sql = "SELECT * FROM fors WHERE sectors = $kta and governorate = $mohaf and prise BETWEEN $men and $ela and capital = $mal and timelive BETWEEN $timelive1 and $timelive and num_partners BETWEEN $num_partners1 and $num_partners and msaha BETWEEN 0 and $mes ";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
  $governorate = $row['governorate'];
  ?>
  <!--Project One Single Start-->
  <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="dashboard/dist/img/foras/<?=$row['caver']?>" alt="">
                                </div>
                            </div>
                            <div class="project-one__content-box">
                                <div class="project-one__title-box">
                                    <h3 class="project-one__title"><a href="project-details.html"><?=$row['name']?></a>
                                    </h3>
                                    <p class="project-one__title"><?php
                                    $sqlf = "SELECT * FROM governorate WHERE id =$governorate";
                                    $resultf = $con->query($sqlf);
                                    $rows = $resultf->fetch_assoc();
                                    echo $rows['name'];
                                    ?></p>
                                </div>
                                <div class="project-one__arrow-box">
                                    <a href="project-details.php?id=<?=$row['id']?>" class="project-one__arrow"><i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
  <?php
}
                  ?>
                </div>
            </div>
        </section>
  <?php
}
?>

