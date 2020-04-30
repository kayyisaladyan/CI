<section id="hero_2">
  <div class="intro_title">
    <h1>Pesanan Tiket</h1>
    <div class="bs-wizard row">

      <div class="col-4 bs-wizard-step complete">
        <div class="text-center bs-wizard-stepnum">Your cart</div>
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
        <a class="bs-wizard-dot"></a>
      </div>

      <div class="col-4 bs-wizard-step complete">
        <div class="text-center bs-wizard-stepnum">Your details</div>
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
        <a class="bs-wizard-dot"></a>
      </div>

      <div class="col-4 bs-wizard-step complete">
        <div class="text-center bs-wizard-stepnum">Finish!</div>
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
        <a  class="bs-wizard-dot"></a>
      </div>

    </div>
    <!-- End bs-wizard -->
  </div>
  <!-- End intro-title -->
</section>
<!-- End Section hero_2 -->

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
  <!-- End position -->

  <div class="container margin_60">
    <div class="row">
      <div class="col-lg-8 add_bottom_15">

        <div class="form_title">
          <h3><strong><i class="icon-tag-1"></i></strong>Detail Pembelian</h3>
        </div>
        <div class="step">
          <?php $no = 1; foreach ($single as $s): ?>
            <table class="table table-striped confirm">
              <thead>
                <tr>
                  <th colspan="2">
                    Item <?php echo $no++ ?>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <strong><?php echo $s->nama_wisata ?> tickets</strong>
                  </td>
                  <td>
                    x <?php echo $s->jumlah_tiket ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Tanggal Transaksi</strong>
                  </td>
                  <td>
                    <?php echo date('d F Y', strtotime($s->tgl_transaksi )); ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Sub total</strong>
                  </td>
                  <td>
                    Rp <?php echo number_format($s->sub_total) ?>
                  </td>
                </tr>
              </tbody>
            </table>
          <?php endforeach; ?>
        </div>
        <!--End step -->
      </div>
      <!--End col -->

      <aside class="col-lg-4">
        <div class="box_style_1">
          <h3 class="inner">Thank you!</h3>
          <p>
            Terima kasih telah melakukan transaksi di aplikasi ini.
          </p>
          <hr>
          <?php if ($transaksi->status_transaksi == 'Sudah dibayar'): ?>
            <a class="btn_full_outline" href="<?php echo base_url('Transaksi/invoice/'.$transaksi->kode_transaksi) ?>" target="_BLANK">Cetak Invoice</a>
          <?php else: ?>
            <a class="btn_full_outline" href="#" target="_BLANK">Bayar Dulu</a>
          <?php endif; ?>
        </div>
        <div class="box_style_4">
          <i class="icon_set_1_icon-89"></i>
          <h4>Have <span>questions?</span></h4>
          <a href="tel://004542344599" class="phone">+45 423 445 99</a>
          <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>
      </aside>

    </div>
    <!--End row -->
  </div>
  <!--End container -->
</main>
<!-- End main -->
