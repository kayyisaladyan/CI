<main>
  <section id="hero" class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                <div id="login">
                    <h3 class="text-center">Register</h3>
                    <hr>
                         <?= form_open('auth/proses_register',array('method' =>'POST')) ?>
                              <div class="form-group">
                                <label>Nama Lengkap</label>
                                  <input type="text" class=" form-control" name="nama"  placeholder="Username">
                              </div>
                              <div class="form-group">
                                <label>Username</label>
                                  <input type="text" class=" form-control" name="username" placeholder="Username">
                              </div>
                              <div class="form-group">
                                <label>Email</label>
                                  <input type="text" class=" form-control" name="email" placeholder="Email">
                              </div>
                              <div class="form-group">
                                <label>No Telepon</label>
                                  <input type="text" class=" form-control" name="no_telepon"  placeholder="Username">
                              </div>
                              <div class="form-group">
                                <label>Password</label>
                                  <input type="password" class=" form-control" name="password1" id="password1" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label>Confirm password</label>
                                  <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm password">
                              </div>
                              <div id="pass-info" class="clearfix"></div>
                              <button class="btn_full">Create an account</button>
                          <?php echo form_close() ?>
                      </div>
              </div>
          </div>
      </div>
  </section>
</main><!-- End main -->
