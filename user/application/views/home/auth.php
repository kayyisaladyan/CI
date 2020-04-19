<main id="main">
  <!-- top information area -->
  <div class="inner-top">
    <div class="container">
      <h1 class="inner-main-heading">Login</h1>
      <!-- breadcrumb -->
      <nav class="breadcrumbs">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">pages</a></li>
          <li><span>Login</span></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="inner-main common-spacing container">
    <!-- form -->
    <?= form_open('auth/proses_login',"class='twocol-form'",array('method' =>'POST')) ?>
      <div class="row">
        <div class="col-md-6">
          <?php if (!empty($this->session->flashdata('status') ) ): ?>
             <div class="alert alert-danger">
                 <center><?php echo $this->session->flashdata('status') ?></center>
             </div>
           <?php endif; ?>
          <div class="top-box">
            <span class="holder height">Login</span>
          </div>
          <div class="form-holder">
            <div class="wrap">
              <div class="hold">
                <label for="uname">Username</label>
                <input type="text" name="username" class="form-control">
              </div>
              <div class="hold">
                <label for="pass">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="btn-hold">
                <button type="submit" class="btn btn-default">Login</button>
              </div>
            </div>
          </div>
        </div>
      <?php echo form_close() ?>
      <?= form_open('auth/proses_register',"class='twocol-form'",array('method' =>'POST')) ?>
        <div class="col-md-6">
          <div class="top-box">
            <span class="holder height">Register</span>
          </div>
          <div class="form-holder">
            <div class="wrap">
              <div class="hold">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control">
              </div>
              <div class="hold">
                <label for="uname1">Username</label>
                <input type="text" name="username" class="form-control">
              </div>
              <div class="hold">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="hold">
                <label for="email">No Telepon</label>
                <input type="text" name="no_telepon" class="form-control">
              </div>
              <div class="hold">
                <label for="reg-pass">Password</label>
                <input type="password" name="password1" class="form-control">
              </div>
              <div class="hold">
                <label for="pass">Re-Password</label>
                <input type="password" name="password2" class="form-control">
              </div>
              <div class="btn-hold">
                <button type="submit" class="btn btn-default">Register</button>
              </div>
            </div>
          </div>
          <?php echo form_close() ?>
        </div>
      </div>
  </div>
</main>
</div>
