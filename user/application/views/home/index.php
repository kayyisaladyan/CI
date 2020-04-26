<main>
  <div id="carousel-home">
          <div class="owl-carousel owl-theme">
               <div class="owl-slide cover" style="background-image: url(<?php echo base_url('assets/') ?>img/slides/slide_home_3.jpg);">
                  <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                      <div class="container">
                          <div class="row justify-content-center justify-content-md-start">
                              <div class="col-lg-12 static">
                                  <div class="slide-text text-center white">
                                      <h2 class="owl-slide-animated owl-slide-title">Going Inside<br>The Louvre Museum</h2>
                                      <p class="owl-slide-animated owl-slide-subtitle">
                                          Discover hidden wonders on trips curated by Citytours Tours Experts
                                      </p>
                                      <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="all_tours_list.html" role="button">Read more</a></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
          <div id="icon_drag_mobile"></div>
      </div>
      <!--/carousel-->

  <div class="container margin_60">

    <div class="main_title">
      <h2>Depok <span>Top</span> Wisata</h2>
      <p>Each item listed with Carousel and Lazy Load Feature.</p>
    </div>

          <div class="row">


            <?php foreach ($popular as $p): ?>
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                  <div class="tour_container">
                      <div class="ribbon_3 popular"><span>Popular</span></div>
                      <div class="img_container_2">
                         <div class="owl-carousel owl-theme carousel_item">
                              <div class="item">
                                  <a href="<?php echo base_url('wisata/detail_wisata/'.$p->id_wisata) ?>"><img data-src="<?php echo base_url('../admin/uploads/'.$p->gambar) ?>" width="800" height="533" alt="image" class="img-fluid owl-lazy"></a>
                              </div>
                          </div>
                          <!--/carousel-->
                           <div class="short_info">
                              <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>Rp</sup><?php echo number_format($p->harga) ?></span>
                          </div>
                      </div>
                      <div class="tour_title">
                          <h3><strong><?php echo $p->nama_wisata ?></strong> tour</h3>
                          <div class="rating">
                              <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                          </div>
                          <!-- end rating -->
                          <div class="wishlist">
                              <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                          </div>
                          <!-- End wish list-->
                      </div>
                  </div>
                  <!-- End box tour -->
              </div>
              <!-- End col -->
            <?php endforeach; ?>

            <?php foreach ($rated as $r): ?>
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                  <div class="tour_container">
                      <div class="ribbon_3"><span>Top rated</span></div>
                      <div class="img_container_2">
                          <div class="owl-carousel owl-theme carousel_item">
                              <div class="item">
                                  <a href="<?php echo base_url('wisata/detail_wisata/'.$r->id_wisata) ?>"><img data-src="<?php echo base_url('../admin/uploads/'.$r->gambar) ?>" width="800" height="533" alt="image" class="img-fluid owl-lazy"></a>
                              </div>
                          </div>
                          <!--/carousel-->
                          <div class="short_info">
                              <i class="icon_set_1_icon-30"></i>Walking tour<span class="price"><sup>Rp</sup><?php echo number_format($r->harga) ?></span>
                          </div>
                      </div>
                      <div class="tour_title">
                          <h3><strong><?php echo $r->nama_wisata ?></strong> tour</h3>
                          <div class="rating">
                              <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                          </div>
                          <!-- end rating -->
                          <div class="wishlist">
                              <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                          </div>
                          <!-- End wish list-->
                      </div>
                  </div>
                  <!-- End box tour -->
              </div>
              <!-- End col -->
            <?php endforeach; ?>
          </div>
          <!-- End row -->

    <p class="text-center add_bottom_30">
      <a href="<?php echo base_url('Wisata') ?>" class="btn_1">View all Wisata</a>
    </p>

    <hr class="mt-5 mb-5">




  </div>
  <!-- End container -->

  <div class="white_bg">
    <div class="container margin_60">
      <div class="main_title">
        <h2>Plan <span>Your Tour</span> Easly</h2>
        <p>
          Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
        </p>
      </div>
      <div class="row feature_home_2">
                  <div class="col-md-4 text-center">
                      <img src="<?php echo base_url('assets/') ?>img/adventure_icon_1.svg" alt="" width="75" height="75">
                      <h3>Itineraries studied in detail</h3>
                      <p>Suscipit invenire petentium per in. Ne magna assueverit vel. Vix movet perfecto facilisis in, ius ad maiorum corrumpit, his esse docendi in.</p>
                  </div>
                  <div class="col-md-4 text-center">
                      <img src="<?php echo base_url('assets/') ?>img/adventure_icon_2.svg" alt="" width="75" height="75">
                      <h3>Room and food included</h3>
                      <p> Cum accusam voluptatibus at, et eum fuisset sententiae. Postulant tractatos ius an, in vis fabulas percipitur, est audiam phaedrum electram ex.</p>
                  </div>
                  <div class="col-md-4 text-center">
                      <img src="<?php echo base_url('assets/') ?>img/adventure_icon_3.svg" alt="" width="75" height="75">
                      <h3>Everything organized</h3>
                      <p>Integre vivendo percipitur eam in, graece suavitate cu vel. Per inani persius accumsan no. An case duis option est, pro ad fastidii contentiones.</p>
                  </div>
              </div>

              <div class="banner_2">
                  <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)" style="background-color: rgba(0, 0, 0, 0.3);">
                      <div>
                          <h3>Your Perfect<br>Tour Experience</h3>
                          <p>Activities and accommodations</p>
                          <a href="all_tours_list.html" class="btn_1">Read more</a>
                      </div>
                  </div>
                  <!-- /wrapper -->
              </div>
              <!-- /banner_2 -->

    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->
</main>
<!-- End main -->
