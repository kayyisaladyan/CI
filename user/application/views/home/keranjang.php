<main id="main">
  <!-- top information area -->
  <div class="inner-top">
    <div class="container">
      <h1 class="inner-main-heading">YOUR CART</h1>
      <!-- breadcrumb -->
      <nav class="breadcrumbs">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li><span>Cart</span></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="inner-main common-spacing container">
    <!-- cart information holder -->
    <div class="cart-holder table-container">
      <div class="table-responsive">
        <table class="table table-hover table-align-right">
          <thead>
            <tr>
              <th>
                &nbsp;
              </th>
              <th>
                <strong class="date-text">Selected Tours</strong>
                <span class="sub-text">Confirmed Dates</span>
              </th>
              <th>
                <strong class="date-text">Price (PP)</strong>
                <span class="sub-text">Updated Today</span>
              </th>
              <th>
                <strong class="date-text">No. of People</strong>
                <span class="sub-text">Including Children</span>
              </th>
              <th>
                <strong class="date-text">Total Price</strong>
                <span class="sub-text">Excluding Flights</span>
              </th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($cart as $c): ?>
              <?php $wisata = $this->Wisata_model->getWisataSingle($c['id'])->row(); ?>
                <?= form_open(base_url('Transaksi/update_keranjang/'.$c['rowid'])); ?>
                <tr>
                  <td>
                    <div class="cell">
                      <div class="middle">
                        <a class="delete" href="<?php echo base_url('Transaksi/hapus_keranjang/'.$c['rowid']) ?>"><span class="icon-trash"></span></a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="cell">
                      <div class="middle">
                        <div class="info">
                          <div class="img-wrap">
                            <img src="<?php echo base_url('../admin/uploads/'.$wisata->gambar) ?>" height="228" width="350" alt="image description">
                          </div>
                          <div class="text-wrap">
                            <strong class="product-title"><?php echo $wisata->nama_wisata ?></strong>
                            <time class="time" datetime="<?php echo $wisata->jam_operasional ?>"><?php echo $wisata->jam_operasional ?></time>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="cell">
                      <div class="middle">
                        <span class="price">Rp <?php echo number_format($wisata->harga) ?></span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="cell">
                      <div class="middle">
                        <div class="num-hold">
                          <a href="#" class="minus control"><span class="icon-minus-normal"></span></a>
                          <a href="#" class="plus control"><span class="icon-plus-normal"></span></a>
                          <span class="val">1</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="cell">
                      <div class="middle">
                        <span class="price">Rp <?php echo number_format($c['subtotal']) ?></span>
                      </div>
                    </div>
                  </td>
                </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="cart-option">
        <div class="coupon-hold">
          <div class="submit-wrap">
            <button class="btn btn-default" type="submit">APPLY COUPON</button>
          </div>
          <div class="input-hold">
            <input type="text" class="form-control" placeholder="Enter Coupon Code.....">
          </div>
        </div>
        <div class="button-hold">
          <a href="#" class="btn btn-default">CHECKOUT</a>
          <a href="#" class="btn btn-default">UPDATE CART</a>
        </div>
      </div>
    </div>
  </div>
</main>
</div>
