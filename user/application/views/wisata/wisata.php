<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/') ?>img/index.jpeg" data-natural-width="1400" data-natural-height="470">
  <div class="parallax-content-1">
    <div class="animated fadeInDown">
      <h1>Paris tours</h1>
      <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
    </div>
  </div>
</section>
<!-- End section -->

<main>

  <div id="position">
    <div class="container">
      <ul>
        <li><a href="#">Home</a>
        </li>
        <li><a href="#">Category</a>
        </li>
        <li>Page active</li>
      </ul>
    </div>
  </div>
  <!-- Position -->

  <div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
  </div>
  <!-- End Map -->


  <div class="container margin_60">

    <div class="row">
      <aside class="col-lg-3">
        <p>
          <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
        </p>

        <div class="box_style_cat">
          <ul id="cat_nav">
            <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>All tours <span>(141)</span></a>
            </li>
            <li><a href="#"><i class="icon_set_1_icon-3"></i>City sightseeing <span>(20)</span></a>
            </li>
            <li><a href="#"><i class="icon_set_1_icon-4"></i>Museum tours <span>(16)</span></a>
            </li>
            <li><a href="#"><i class="icon_set_1_icon-44"></i>Historic Buildings <span>(12)</span></a>
            </li>
            <li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a>
            </li>
            <li><a href="#"><i class="icon_set_1_icon-14"></i>Eat & Drink <span>(20)</span></a>
            </li>
            <li><a href="#"><i class="icon_set_1_icon-43"></i>Churces <span>(08)</span></a>
            </li>
            <li><a href="#"><i class="icon_set_1_icon-28"></i>Skyline tours <span>(11)</span></a>
            </li>
          </ul>
        </div>


        <!--End filters col-->
        <div class="box_style_2">
          <i class="icon_set_1_icon-57"></i>
          <h4>Need <span>Help?</span></h4>
          <a href="tel://004542344599" class="phone">+45 423 445 99</a>
          <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>
      </aside>
      <!--End aside -->
      <div class="col-lg-9">

        <div id="tools">
          <div class="row">
            <div class="col-md-3 col-sm-4 col-6">
              <div class="styled-select-filters">
                <select name="sort_price" id="sort_price">
                  <option value="" selected>Sort by price</option>
                  <option value="lower">Lowest price</option>
                  <option value="higher">Highest price</option>
                </select>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-6">
              <div class="styled-select-filters">
                <select name="sort_rating" id="sort_rating">
                  <option value="" selected>Sort by ranking</option>
                  <option value="lower">Lowest ranking</option>
                  <option value="higher">Highest ranking</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-4 d-none d-sm-block text-right">
              <a href="all_tours_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="#" class="bt_filters"><i class=" icon-list"></i></a>
            </div>

          </div>
        </div>
        <!--/tools -->
        <?php foreach ($wisata as $w): ?>
          <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="ribbon_3 popular">
                </div>
                <div class="wishlist">
                  <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                </div>
                <div class="img_list">
                  <a href="<?php echo base_url('Wisata/detail_wisata/'.$w->id_wisata) ?>"><img src="<?php echo base_url('../admin/uploads/'.$w->gambar) ?>" alt="Image">
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="tour_list_desc">
                  <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small>
                  </div>
                  <h3><strong><?php echo $w->nama_wisata ?></strong> tour</h3>
                  <p><?php echo $w->deskripsi ?></p>
                </div>
              </div>
              <div class="col-lg-2 col-md-2">
                <div class="price_list">
                  <div>
                    <p><a href="<?php echo base_url('Wisata/detail_wisata/'.$w->id_wisata) ?>" class="btn_1">Details</a>
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!--End strip -->

        <hr>

        <?= $this->pagination->create_links() ?>
        <!-- end pagination-->

      </div>
      <!-- End col lg-9 -->
    </div>
    <!-- End row -->
  </div>
  <!-- End container -->
</main>
<!-- End main -->
