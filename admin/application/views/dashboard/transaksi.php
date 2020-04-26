
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
                      <th>Nama User</th>
                      <th>Kode bayar</th>
                      <th>Tanggal transaksi</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $no = 1;
                     foreach ($transaksi as $db) : ?>
                    <tr>
                      <th><?php echo $no++; ?></th>
                      <td><?php echo $db->nama; ?></td>
                      <td><?php echo $db->kode_transaksi; ?></td>
                      <td><?php echo date('d F Y', strtotime($db->tgl_transaksi )); ?></td>
                      <?php if ( $db->status_transaksi == 'Sudah dibayar'): ?>
                        <td><span class="badge badge-success"><?php echo $db->status_transaksi; ?></span></td>
                      <?php else: ?>
                        <td><span class="badge badge-warning"><?php echo $db->status_transaksi; ?></span></td>
                      <?php endif; ?>
                      <td><a class="btn btn-info btn-circle"
                      href="<?php echo base_url('dashboard/single_transaksi/'.$db->id_transaksi) ?>"><i class="fas fa-info-circle"></i></a>
                      <?php if ( $db->status_transaksi == 'Belum dibayar'): ?>
                        <a class="btn btn-success btn-circle"
                        href="<?php echo base_url('dashboard/verifikasi/'.$db->id_transaksi) ?>"><i class="fas fa-check"></i></a>
                      <?php endif; ?>
                      </td>
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
