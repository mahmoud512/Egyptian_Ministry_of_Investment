<div class="col-xl-4 col-lg-5">
                      <div class="services-details__left">
                          <div class="sidebar__single services-details__category">
                              <div class="sidebar__title-box">
                                  <div class="sidebar__title-shape-1">
                                      <img src="assets/images/shapes/sidebar-title-shape-1.png" alt="">
                                  </div>
                                  <h3 class="sidebar__title">اكتشف</h3>
                              </div>
                              <ul class="services-details__category-list list-unstyled">
                                  <li <?php 
                                  if (!isset($_GET['an']) && !isset($_GET['da'])) {
                                    echo 'class="active"';
                                  }elseif(isset($_GET['kt'])){
                                    echo 'class="active"';
                                  }
                                  ?>
                                  >
                                      <div class="services-details__category-list-left">
                                          <a href="?kt=1">القطاعات الاقتصادية</a>
                                      </div>
                                  </li>
                                  <li <?php 
                                  if(isset($_GET['an'])){
                                    echo 'class="active"';
                                  }
                                  ?>
                                  >
                                      <div class="services-details__category-list-left">
                                          <a href="?an=1">انظمة الاستثمار</a>
                                      </div>
                                  </li>
                                  <li 
                                  <?php 
                                  if(isset($_GET['da'])){
                                    echo 'class="active"';
                                  }
                                  ?>
                                  >
                                      <div class="services-details__category-list-left">
                                          <a href="?da=1">ضمانات و حوافز</a>
                                      </div>
                                    </li>
                              </ul>
                            </div>
                            <?php
                              if(isset($_GET['an'])){
                                ?>
                                <div class="sidebar__single services-details__category">
                              <h3>ما هي الفرص الاستثمارية : </h3>
                              <br>
                            <img src="assets/images/blog/My-Post-3.webp" width="100%" alt="">
                            </div>
                            <div class="sidebar__single services-details__category">
                              <h3> نمو مؤشرات المناطق الحـرّة يعكس أهميتها لتجارة الترانزيت في المنطقة </h3>
                              <br>
                            <img src="assets/images/blog/120368_12_1602491352.jpg" width="100%" alt="">
                            </div>
                            <div class="sidebar__single services-details__category">
                              <h3> إدارة الإستثمار داخل المناطق الاستثمارية : </h3>
                              <br>
                            <img src="assets/images/blog/v.jpg" width="100%" alt="">
                            </div>
                                <?php
                              }
                            ?>
                            

                      </div>
                  </div>
                  