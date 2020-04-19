<!-- main banner -->
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="gridview-3-col">
  <div class="banner-text">
    <div class="center-text">
      <div class="container">
        <h1>Summer Adventures 2016</h1>
        <strong class="subtitle">Three Column Adventure Grid View Show.</strong>
        <!-- breadcrumb -->
        <nav class="breadcrumbs">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ADVENTURES</a></li>
            <li><span>ALL</span></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- main container -->
<main id="main">
  <!-- content block -->
  <div class="content-block content-sub">
    <div class="container">
      <div class="filter-option">
        <div class="layout-action">
          <a href="#" class="link link-list"><span class="icon-list"></span></a>
          <a href="#" class="link link-grid active"><span class="icon-grid"></span></a>
        </div>
        <div class="select-holder">
          <a href="#" class="btn btn-primary btn-filter"><i class="fa fa-sliders"></i> Filter</a>
          <div class="filter-slide">
            <div class="select-col">
              <select class="filter-select">
                <option value="Holiday Type">Holiday Type</option>
                <option value="Holiday Type">Beach Holidays</option>
                <option value="Holiday Type">Weekend Trips</option>
                <option value="Holiday Type">Summer and Sun</option>
                <option value="Holiday Type">Water Sports</option>
                <option value="Holiday Type">Scuba Diving</option>
              </select>
            </div>
            <div class="select-col">
              <select class="filter-select">
                <option value="Country">Country</option>
                <option value="Country">Switzerland</option>
                <option value="Country">Thailand</option>
                <option value="Country">Australia</option>
                <option value="Country">New Zealand</option>
                <option value="Country">North America</option>
                <option value="Country">Czechoslovakia</option>
              </select>
            </div>
            <div class="select-col">
              <select class="filter-select">
                <option value="Difficulty">Difficulty</option>
                <option value="Difficulty">Fairly Easy</option>
                <option value="Difficulty">Moderate</option>
                <option value="Difficulty">Challenging</option>
                <option value="Difficulty">Difficult</option>
                <option value="Difficulty">Very Difficult</option>
              </select>
            </div>
            <div class="select-col">
              <select class="filter-select">
                <option value="Dates">Seasonal</option>
                <option value="Dates">January - March</option>
                <option value="Dates">April - June</option>
                <option value="Dates">July - September</option>
                <option value="Dates">October - December</option>
              </select>
            </div>
            <div class="select-col">
              <select class="filter-select">
                <option value="Price Range">Price Range</option>
                <option value="Price Range">$1 - $499</option>
                <option value="Price Range">$500 - $999</option>
                <option value="Price Range">$1000 - $1499</option>
                <option value="Price Range">$1500 - $2999</option>
                <option value="Price Range">$3000+</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!-- main article section -->
      <div class="content-holder content-sub-holder">
        <div class="row db-3-col">
          <?php foreach ($wisata as $w): ?>
            <article class="col-sm-6 col-md-4 article has-hover-s1">
              <div class="thumbnail">
                <div class="img-wrap">
                  <img src="<?php echo base_url('../admin/uploads/'.$w->gambar) ?>" height="228" width="350" alt="image description">
                </div>
                <h3 class="small-space"><a href="tour-detail.html"><?php echo $w->nama_wisata ?></a></h3>
                <span class="info"><?php echo $w->lokasi ?></span>
                <aside class="meta">
                  <span class="activity">
                    <span class="icon-acitivities"> </span><?php echo $w->jam_operasional ?>
                  </span>
                </aside>
                <p><?php echo $w->deskripsi ?></p>
                <a href="<?php echo base_url('home/detail_wisata/'.$w->id_wisata) ?>" class="btn btn-default">explore</a>
                <footer>
                  <span class="price">from <span>Rp <?php echo number_format($w->harga) ?></span></span>
                </footer>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- pagination wrap -->
      <nav class="pagination-wrap">
        <div class="btn-prev">
          <a href="#" aria-label="Previous">
            <span class="icon-angle-right"></span>
          </a>
        </div>
        <ul class="pagination">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li class="active"><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li>...</li>
          <li><a href="#">7</a></li>
        </ul>
        <div class="btn-next">
          <a href="#" aria-label="Previous">
            <span class="icon-angle-right"></span>
          </a>
        </div>
      </nav>
    </div>
  </div>
  <!-- recent block -->
  <aside class="recent-block recent-list recent-wide-thumbnail">
    <div class="container">
      <h2 class="text-center text-uppercase">RECENTLY VIEWED</h2>
      <div class="row">
        <article class="col-sm-6 col-md-3 article">
          <div class="thumbnail">
            <h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
            <strong class="info-title">Everest Region, Nepal</strong>
            <div class="img-wrap">
              <img src="img/listing/img-31.jpg" height="210" width="250" alt="image description">
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
        <article class="col-sm-6 col-md-3 article">
          <div class="thumbnail">
            <h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
            <strong class="info-title">Everest Region, Nepal</strong>
            <div class="img-wrap">
              <img src="img/listing/img-32.jpg" height="210" width="250" alt="image description">
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
        <article class="col-sm-6 col-md-3 article">
          <div class="thumbnail">
            <h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
            <strong class="info-title">Everest Region, Nepal</strong>
            <div class="img-wrap">
              <img src="img/listing/img-33.jpg" height="210" width="250" alt="image description">
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
        <article class="col-sm-6 col-md-3 article">
          <div class="thumbnail">
            <h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
            <strong class="info-title">Everest Region, Nepal</strong>
            <div class="img-wrap">
              <img src="img/listing/img-34.jpg" height="210" width="250" alt="image description">
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
      </div>
    </div>
  </aside>
</main>
</div>
