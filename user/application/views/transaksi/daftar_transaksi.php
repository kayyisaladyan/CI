<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/') ?>img/index.jpeg" data-natural-width="1400" data-natural-height="470">
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
      <h2><span>DAFTAR Transaksi</h2>
      <p>
        Lakukan pembayaran secepatnya
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
    <!-- end row -->

  </div>
  <!-- End container -->
</main>
<!-- End main -->
