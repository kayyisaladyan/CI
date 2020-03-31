
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <h1 class="h3 mb-2 text-gray-800">Data Objek Wisata</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Objek Wisata</th>
                      <th>Lokasi</th>
                      <th>Jam Operasional</th>
                      <th>Harga</th>
                      <th>Kontak Wisata</th>
                      <th>Rating</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $no = 1;
                     foreach ($data_wisata as $db) : ?>
                    <tr>
                      <th><?php echo $no++; ?></th>
                      <td><?php echo $db->nama_wisata; ?></td>
                      <td><?php echo $db->lokasi; ?></td>
                      <td><?php echo $db->jam_operasional; ?></td>
                      <td><?php echo $db->harga; ?></td>
                      <td><?php echo $db->kontak_wisata; ?></td>
                      <td><?php echo $db->rating; ?></td>
                      <td><img width="220" height="150" src="<?php echo base_url('images/'.$db->gambar) ?>" alt=""></td>
                      <td><a class="btn btn-primary"
                      href="<?php echo base_url('dashboard/edit/'.$db->id_wisata) ?>">Edit</a>
                      <a class="btn btn-danger"
                      href="<?php echo base_url('dashboard/hapus/'.$db->id_wisata) ?>">Hapus</a></td>
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
