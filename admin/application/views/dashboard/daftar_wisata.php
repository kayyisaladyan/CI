
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <h1 class="h3 mb-2 text-gray-800">Data Objek Wisata</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataWisata</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Wisata</th>
                      <th>Jam Operasional</th>
                      <th>Harga</th>
                      <th>Tiket Terjual</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $no = 1;
                     foreach ($data_wisata as $db) : ?>
                    <tr>
                      <th><?php echo $no++; ?></th>
                      <td><?php echo $db->nama_wisata; ?></td>
                      <td><?php echo $db->jam_operasional; ?></td>
                      <td>Rp <?php echo number_format($db->harga); ?></td>
                      <td><?php echo $db->tiket_terjual; ?></td>
                      <td><?php echo $db->ket; ?></td>
                      <td><a class="btn btn-info btn-circle"
                      href="<?php echo base_url('dashboard/edit_wisata/'.$db->id_wisata) ?>"><i class="fas fa-info-circle"></i></a>
                      <a class="btn btn-danger btn-circle"
                      href="<?php echo base_url('dashboard/hapus/'.$db->id_wisata) ?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
