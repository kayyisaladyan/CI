<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
  <div class="parallax-content-1">
    <div class="animated fadeInDown">
      <h1>Shop detail item</h1>
      <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
    </div>
  </div>
</section>
<!-- End Section -->

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
  <!-- End Position -->

  <div class="container margin_60">
    <div class="row">
      <div class="col-lg-9">

        <div class="product-details">

          <div class="basic-details">
            <div class="row">
              <div class="image-column col-sm-6">
                <figure class="image-box"><img src="<?php echo base_url('../admin/uploads/'.$wisata->gambar) ?>" alt="">
                </figure>
              </div>
              <div class="info-column col-sm-6">
                <div class="details-header">
                  <h2><?php echo $wisata->nama_wisata ?></h2>
                  <div class="item-price">
                    Rp <?php echo number_format($wisata->harga) ?>
                  </div>
                  <div class="rating">
                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i> (3 Customer Reviews)
                  </div>
                </div>
                <div class="text">
                  <p>
                    <?php echo $wisata->deskripsi ?>
                  </p>
                </div>
                  <p>
                     Berlokasi di <?php echo $wisata->lokasi ?>
                  </p>
                  <p>
                    Jam Operasional :  <?php echo $wisata->jam_operasional ?>
                  </p>
                <div class="other-options">
                  <div class="numbers-row">
                    <input type="text" value="1" id="quantity_1" class="qty2 form-control" name="quantity_1">
                  </div>
                  <a href="<?php echo base_url('transaksi/tambah_keranjang?id_wisata='.$wisata->id_wisata) ?>" class="btn_1">Add To Cart </a>
                </div>
                <!--Item Meta-->
                <ul class="item-meta">
                  <li>Categories: <a href="#">Books</a> , <a href="#">Magazine</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--End Basic Details-->

          <div class="product-info-tabs">

            <div class="prod-tabs" id="product-tabs">
              <div class="tab-btns clearfix">
                <a href="#prod-reviews" class="tab-btn active-btn">Reviews (<?php echo $jumlah ?>)</a>
              </div>

              <div class="tabs-container">
                <!--End Tab-->

                <div class="tab active-tab" id="prod-reviews">
                  <h3><?php echo $jumlah ?> Reviews Found</h3>
                  <div class="reviews-container">

                    <?php foreach ($review as $r): ?>
                      <div class="review-box clearfix">
                        <figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
                        </figure>
                        <div class="rev-content">
                          <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                          </div>
                          <div class="rev-info">
                            <?php echo $r->nama ?> – <?php echo $r->email ?>:
                          </div>
                          <div class="rev-text">
                            <p>
                              <?php echo $r->keterangan ?>
                            </p>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>

                  </div>
                  <!--End Review Container-->

                  <hr>

                  <div class="add-review">
                    <h3>Add a Review</h3>
                    <?= form_open('Wisata/ulasan/'.$wisata->id_wisata,array('method' =>'POST')) ?>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label>Name *</label>
                          <input type="text" name="name" value="<?php echo $this->session->nama ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Email *</label>
                          <input type="email" name="email" value="<?php echo $this->session->email ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Rating *</label>
                          <input type="number" name="rating" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                          <label>Your Review</label>
                          <textarea name="keterangan" class="form-control" style="height:150px;"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                          <button class="btn_1">Add Review</button>
                        </div>
                      </div>
                    <?= form_close() ?>
                  </div>
                </div>
              </div>
              <!--End tabs-container-->
            </div>
            <!--End prod-tabs-->
          </div>
          <!--End product-info-tabs-->
        </div>
        <!--End Product-details-->
      </div>
      <!--End Col-->

      <div class="col-lg-3">
        <aside class="sidebar">
          <hr>
          <div class="widget" id="cat_shop">
            <h4>Categories</h4>
            <ul>
              <li><a href="#">Places to visit</a>
              </li>
              <li><a href="#">Top tours</a>
              </li>
              <li><a href="#">Tips for travellers</a>
              </li>
              <li><a href="#">Events</a>
              </li>
            </ul>
          </div>
          <!-- End widget -->
          <hr>
          <div class="widget related-products">
            <h4>Top Related </h4>
            <div class="post">
              <figure class="post-thumb">
                <a href="#"><img src="img/products/thumb-1.jpg" alt="">
                </a>
              </figure>
              <h5><a href="#">Grunge Fashion</a></h5>
              <div class="rating">
                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
              </div>
              <div class="price">
                $ 15.00
              </div>
            </div>
            <div class="post">
              <figure class="post-thumb">
                <a href="#"><img src="img/products/thumb-2.jpg" alt="">
                </a>
              </figure>
              <h5><a href="#">Office Kit</a></h5>
              <div class="rating">
                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
              </div>
              <div class="price">
                $ 15.00
              </div>
            </div>
            <div class="post">
              <figure class="post-thumb">
                <a href="#"><img src="img/products/thumb-3.jpg" alt="">
                </a>
              </figure>
              <h5><a href="#">Crime &amp; Punishment</a></h5>
              <div class="rating">
                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
              </div>
              <div class="price">
                $ 15.00
              </div>
            </div>
          </div>
        </aside>
      </div>
      <!--Sidebar-->
    </div>
  </div>
  <!-- End Container -->
</main>
