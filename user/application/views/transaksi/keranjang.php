<section id="hero_2">
  <div class="intro_title">
    <h1>Place your order</h1>
    <div class="bs-wizard row">

      <div class="col-4 bs-wizard-step active">
        <div class="text-center bs-wizard-stepnum">Your cart</div>
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
        <a href="cart.html" class="bs-wizard-dot"></a>
      </div>

      <div class="col-4 bs-wizard-step disabled">
        <div class="text-center bs-wizard-stepnum">Your details</div>
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
        <a href="payment.html" class="bs-wizard-dot"></a>
      </div>

      <div class="col-4 bs-wizard-step disabled">
        <div class="text-center bs-wizard-stepnum">Finish!</div>
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
        <a href="confirmation.html" class="bs-wizard-dot"></a>
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
      <div class="col-lg-8">
        <table class="table table-striped cart-list add_bottom_30">
          <thead>
            <tr>
              <th>
                Item
              </th>
              <th>
                Quantity
              </th>
              <th>
                Total
              </th>
              <th>
                Actions
              </th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($cart as $index => $c): ?>
            <?php $wisata = $this->Wisata_model->getWisataSingle($c['id'])->row(); ?>
              <?= form_open(base_url('Transaksi/update_keranjang/'.$c['rowid'])); ?>
            <tr>
              <td>
                <div class="thumb_cart">
                  <img src="<?php echo base_url('../admin/uploads/'.$wisata->gambar) ?>" alt="Image">
                </div>
                <span class="item_cart"><?php echo $wisata->nama_wisata ?></span>
              </td>
              <td>
                <div class="numbers-row">
                  <input type="text" value="<?php echo $c['qty'] ?>" id="quantity_1" class="qty2 form-control" name="qty">
                </div>
              </td>
              <td>
                <strong>Rp <?php echo number_format($c['subtotal']) ?></strong>
              </td>
              <td class="options">
                <a href="<?php echo base_url('Transaksi/hapus_keranjang/'.$c['rowid']) ?>"><i class=" icon-trash"></i></a>
                <button ><i class="icon-ccw-2"></i></button>
              </td>
            </tr>
            <?php endforeach; ?>
            <?= form_close() ?>
          </tbody>
        </table>


      </div>
      <!-- End col -->

      <aside class="col-lg-4">
        <div class="box_style_1">
          <h3 class="inner">- Summary -</h3>
          <table class="table table_summary">
            <tbody>
              <tr>
                <td>
                  Total :
                </td>
                <td class="text-right">
                  <?= $this->cart->total_items()?>
                </td>
              </tr>



              <tr class="total">
                <td>
                  Total cost
                </td>
                <td class="text-right">
                  Rp <?=number_format($this->cart->total())?>
                </td>
              </tr>
            </tbody>
          </table>
          <a class="btn_full" href="<?php echo base_url('transaksi/checkout') ?>">Check out</a>
          <a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue shopping</a>
        </div>
        <div class="box_style_4">
          <i class="icon_set_1_icon-57"></i>
          <h4>Need <span>Help?</span></h4>
          <a href="tel://004542344599" class="phone">+45 423 445 99</a>
          <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>
      </aside>
      <!-- End aside -->

    </div>
    <!--End row -->
  </div>
  <!--End container -->
</main>
<!-- End main -->
