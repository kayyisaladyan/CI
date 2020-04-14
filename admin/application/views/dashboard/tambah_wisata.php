<?php if (!empty($this->session->flashdata('status') ) ): ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('status') ?>
        </div>
      <?php endif; ?>
        </nav>
        <?= form_open_multipart('Dashboard/proses_tambah_wisata/',array('method' =>'POST')) ?>
          <div class="container">
            <div class="form-group">
              <div class="row mt-3">
              <div class="col-10">
              <label >Nama Objek Wisata</label>
              <input type="text" class="form-control" name="nama_wisata" autocomplete="off">
              <small class="form-text text-danger"><?= form_error('nama_wisata'); ?></small>
            </div>
          </div>
            <div class="row mt-3">
              <div class="col-10">
              <label >Lokasi</label>
              <input type="text" class="form-control" name="lokasi" autocomplete="off">
              <small class="form-text text-danger"><?= form_error('lokasi'); ?></small>
            </div>
            </div>
            <div class="row mt-3">
              <div class="col-10">
              <label >Jam Operasional</label>
              <input type="text" class="form-control" name="jam_operasional" autocomplete="off">
              <small class="form-text text-danger"><?= form_error('jam_operasional'); ?></small>
            </div>
            </div>
            <div class="row mt-3">
            <div class="col-10">
              <label >Harga</label>
              <input type="text" class="form-control" name="harga" autocomplete="off">
              <small class="form-text text-danger"><?= form_error('harga'); ?></small>
            </div>
            </div>
            <div class="row mt-3">
            <div class="col-10">
              <label >Kontak Wisata</label>
              <input type="text" class="form-control" name="kontak_wisata" autocomplete="off">
              <small class="form-text text-danger"><?= form_error('kontak_wisata'); ?></small>
            </div>
            </div>
            <div class="row mt-3">
              <div class="col-10">
              <label >Deskripsi</label>
              <textarea class="form-control" name="deskripsi" autocomplete="off"></textarea>
              <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
            </div>
            </div>
            <div class="row mt-3">
              <div class="col-6">
                <label for="exampleFormControlFile1">Upload Foto</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
                <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
              </div>
          </div>

          <div class="row justify-content-md-center">
            <div class="col-lg-2">
              <button class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-check"></i>
                </span>
                <span class="text">Tambah Data</span>
              </button>
          </div>
          </div>

          <?php echo form_close() ?>
          </div>
          </div>
