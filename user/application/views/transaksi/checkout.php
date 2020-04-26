<section id="hero_2">
  <div class="intro_title">
    <h1>Place your order</h1>
    <div class="bs-wizard row">

      <div class="col-4 bs-wizard-step complete">
        <div class="text-center bs-wizard-stepnum">Your cart</div>
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
        <a href="cart_transfer.html" class="bs-wizard-dot"></a>
      </div>

      <div class="col-4 bs-wizard-step active">
        <div class="text-center bs-wizard-stepnum">Your details</div>
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
        <a href="#" class="bs-wizard-dot"></a>
      </div>

      <div class="col-4 bs-wizard-step disabled">
        <div class="text-center bs-wizard-stepnum">Finish!</div>
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
        <a href="confirmation_transfer.html" class="bs-wizard-dot"></a>
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
          <h3><strong>0</strong>Your Details</h3>
          <p>
            Mussum ipsum cacilds, vidis litro abertis.
          </p>
        </div>
        <div class="step">
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input disabled value="<?php echo $profile->nama ?>" class="form-control" id="firstname_booking" name="firstname_booking">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>Username</label>
                <input disabled value="<?php echo $profile->username ?>" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>Email</label>
                <input disabled value="<?php echo $profile->email ?>" id="email_booking" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>Telephone</label>
                <input disabled value="<?php echo $profile->no_telepon ?>" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>

      <aside class="col-lg-4">
        <div class="box_style_1">
          <h3 class="inner">- Summary -</h3>
          <table class="table table_summary">
            <tbody>
              <tr>
                <td>
                  Date
                </td>
                <td class="text-right">
                  <?php echo date('d F Y'); ?>
                </td>
              </tr>
              <tr>
                <td>
                  Time
                </td>
                <td class="text-right">
                  <?php date_default_timezone_set('Asia/Jakarta');echo date('h:i a'); ?>
                </td>
              </tr>
              <?php foreach ($cart as $index => $c): ?>
                <?php $wisata = $this->Wisata_model->getWisataSingle($c['id'])->row(); ?>
              <tr>
                <td>
                  <?php echo $wisata->nama_wisata ?> x <?php echo $c['qty'] ?>
                </td>
                <td class="text-right">
                  Rp <?php echo number_format($c['subtotal']) ?>
                </td>
              </tr>
            <?php endforeach; ?>

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
          <a class="btn_full" href="<?php echo base_url('Transaksi/proses_check_out') ?>">CheckOut</a>
          <a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue shopping</a>
        </div>
      </aside>

    </div>
    <!--End row -->
  </div>
  <!--End container -->
</main>
<!-- End main -->
