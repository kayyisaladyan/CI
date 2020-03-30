
<!--
  Dashboard -->
<div class="container">
  <h2 align="center">Dafatar Wisata</h2>
  <div class="row ml-1 pt-4">
            <?php $no = 1;
              foreach ($data_wisata as $db) :  ?>
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $db->nama_wisata ?></div>
                        <div class="col-auto">
                      </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>
    </div>
</div>
