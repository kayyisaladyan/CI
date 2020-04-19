<main id="main">
  <!-- main tour information -->
  <section class="container-fluid trip-info">
    <div class="same-height two-columns row">
      <div class="height col-md-6">
        <!-- top image slideshow -->
        <div id="tour-slide">
          <div class="slide">
            <div class="bg-stretch">
              <img src="<?php echo base_url('../admin/uploads/'.$wisata->gambar) ?>" alt="image descriprion" height="1104" width="966">
            </div>
          </div>
        </div>
      </div>
      <div class="height col-md-6 text-col">
        <div class="holder">
          <h1 class="small-size"><?php echo $wisata->nama_wisata ?></h1>
          <div class="price">
            from <strong>Rp <?php echo number_format($wisata->harga) ?></strong>
          </div>
          <div class="description">
            <p><?php echo $wisata->deskripsi ?></p>
          </div>
          <ul class="reviews-info">
            <li>
              <div class="info-left">
                <strong class="title">Reviews</strong>
                <span class="value">75 Reviews</span>
              </div>
              <div class="info-right">
                <div class="star-rating">
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <span class="disable"><span class="icon-star"></span></span>
                </div>
                <span class="value">5/5</span>
              </div>
            </li>
            <li>
              <div class="info-left">
                <strong class="title">Vacation Style</strong>
                <span class="value">Adult Group</span>
              </div>
              <div class="info-right">
                <ul class="ico-list">
                  <li>
                    <span class="icon icon-hiking"></span>
                  </li>
                  <li>
                    <span class="icon icon-mount"></span>
                  </li>
                  <li>
                    <span class="icon icon-camping"></span>
                  </li>
                </ul>
                <span class="value">Camping Trek</span>
              </div>
            </li>
            <li>
              <div class="info-left">
                <strong class="title">Activity Level</strong>
                <span class="value">Quite Tough</span>
              </div>
              <div class="info-right">
                <ul class="ico-list">
                  <li>
                    <span class="icon icon-level3"></span>
                  </li>
                  <li>
                    <span class="icon icon-level5"></span>
                  </li>
                  <li>
                    <span class="icon icon-level7"></span>
                  </li>
                </ul>
                <span class="value">9/10</span>
              </div>
            </li>
            <li>
              <div class="info-left">
                <strong class="title">Group Size</strong>
                <span class="value">Medium Grougs</span>
              </div>
              <div class="info-right">
                <ul class="ico-list">
                  <li>
                    <span class="icon icon-group-small"></span>
                  </li>
                  <li>
                    <span class="icon icon-group-medium"></span>
                  </li>
                  <li>
                    <span class="icon icon-group-large"></span>
                  </li>
                </ul>
                <span class="value">6/10</span>
              </div>
            </li>
          </ul>
          <div class="btn-holder">
            <a href="<?php echo base_url('transaksi/tambah_keranjang?id_wisata='.$wisata->id_wisata) ?>" class="btn btn-lg btn-info">PESAN SEKARANG</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- recent block -->
  <aside class="recent-block recent-gray recent-wide-thumbnail">
    <div class="container">
      <h2 class="text-center text-uppercase">RECENTLY VIEWED</h2>
      <div class="row">

        <?php foreach ($popular as $p): ?>
          <article class="col-sm-6 col-md-3 article">
            <div class="thumbnail">
              <h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
              <strong class="info-title">Everest Region, Nepal</strong>
              <div class="img-wrap">
                <img src="<?php echo base_url('../admin/uploads/'.$p->gambar) ?>" height="210" width="250" alt="image description">
              </div>
              <footer>
                <div class="sub-info">
                  <span>5 Days</span>
                  <span>$299</span>
                </div>
                <ul class="ico-list">
                  <li class="pop-opener">
                    <a href="#">
                      <span class="icon-hiking"></span>
                      <span class="popup">
                        Hiking
                      </span>
                    </a>
                  </li>
                  <li class="pop-opener">
                    <a href="#">
                      <span class="icon-mountain"></span>
                      <span class="popup">
                        Mountain
                      </span>
                    </a>
                  </li>
                  <li class="pop-opener">
                    <a href="#">
                      <span class="icon-level5"></span>
                      <span class="popup">
                        Level 5
                      </span>
                    </a>
                  </li>
                </ul>
              </footer>
            </div>
          </article>
        <?php endforeach; ?>

      </div>
    </div>
  </aside>
</main>
</div>
