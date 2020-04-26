<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Need help?</h3>
                <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
            </div>
            <div class="col-md-3">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                     <li><a href="#">Terms and condition</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Discover</h3>
                <ul>
                    <li><a href="#">Community blog</a></li>
                    <li><a href="#">Tour guide</a></li>
                    <li><a href="#">Wishlist</a></li>
                     <li><a href="#">Gallery</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Settings</h3>
                <div class="styled-select">
                    <select name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Russian">Russian</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="RUB">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>© Citytours 2018</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class="search-overlay-menu">
<span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
<form role="search" id="searchform" method="get">
  <input value="" name="q" type="search" placeholder="Search..." />
  <button type="submit"><i class="icon_set_1_icon-78"></i>
  </button>
</form>
</div><!-- End Search Menu -->

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
<div class="small-dialog-header">
  <h3>Sign In</h3>
</div>
<?= form_open('auth/proses_login',array('method' =>'POST')) ?>
  <div class="sign-in-wrapper">
    <?php if (!empty($this->session->flashdata('status') ) ): ?>
       <div class="alert alert-danger">
           <center><?php echo $this->session->flashdata('status') ?></center>
       </div>
     <?php endif; ?>
    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" name="username" >
      <i class="icon-user"></i>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password">
      <i class="icon_lock_alt"></i>
    </div>
    <div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
    <div class="text-center">
      Don’t have an account? <a href="<?php echo base_url('Auth/register') ?>">Sign up</a>
    </div>
  </div>
<?php echo form_close() ?>
<!--form -->
</div>
<!-- /Sign In Popup -->

<script>
  if ($('.prod-tabs .tab-btn').length) {
    $('.prod-tabs .tab-btn').on('click', function(e) {
      e.preventDefault();
      var target = $($(this).attr('href'));
      $('.prod-tabs .tab-btn').removeClass('active-btn');
      $(this).addClass('active-btn');
      $('.prod-tabs .tab').fadeOut(0);
      $('.prod-tabs .tab').removeClass('active-tab');
      $(target).fadeIn(500);
      $(target).addClass('active-tab');
    });

  }
</script>

<!-- Common scripts -->
<script src="<?php echo base_url('assets/') ?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/common_scripts_min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/functions.js"></script>

</body>
</html>
