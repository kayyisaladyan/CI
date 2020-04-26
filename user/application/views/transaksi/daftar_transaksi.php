<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
  <div class="parallax-content-1">
    <div class="animated fadeInDown">
      <h1>Pricing tables</h1>
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
    <div class="main_title">
      <h2><span>Affordable </span>packages for travellers</h2>
      <p>
        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
      </p>
    </div>
    <hr>



    <div class="row" id="pricing_2">

      <?php foreach ($transaksi as $t): ?>
        <div class="col-lg-3 col-md-6">
          <div class="pricing-table black ">
            <div class="pricing-table-header">
              <span class="heading"><?php echo $t->kode_transaksi ?></span>
              <span class="price-value"><span>Rp</span><span class="mo"><?php echo number_format($t->total) ?></span></span>
            </div>
            <div class="pricing-table-space"></div>
            <div class="pricing-table-features">
              <p><strong>Status : </strong> <?php echo $t->status_transaksi ?></p>
              <p><strong>Tanggal pesan : </strong> <?php echo date('d F Y', strtotime($t->tgl_transaksi )); ?></p>
              <p><strong>Total : </strong> Rp <?php echo number_format($t->total) ?></p>
            </div>
            <div class="pricing-table-sign-up">
              <a href="<?php echo base_url('Transaksi/konfirmasi/'.$t->kode_transaksi) ?>" class="btn_1">Detail Transaksi</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
    <!-- end row -->

    <hr>

    <div class="row">
      <div class="col-md-12">
        <h3>Membership FAQ</h3>
      </div>
    </div>
    <!-- end row -->

    <div class="row">

      <div class="col-md-4">
        <div class="question_box">
          <h3>No sit debitis meliore postulant, per ex prompta alterum sanctus?</h3>
          <p>
            Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="question_box">
          <h3>Autem putent singulis usu ea, bonorum suscipit eum?</h3>
          <p>
            Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="question_box">
          <h3>Pro moderatius philosophia ad, ad mea mupercipitur?</h3>
          <p>
            Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
          </p>
        </div>
      </div>

    </div>
    <!-- end row -->

  </div>
  <!-- End container -->
</main>
<!-- End main -->
