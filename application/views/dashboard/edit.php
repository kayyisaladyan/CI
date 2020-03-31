
        </nav>
        <?= form_open_multipart('Dashboard/proses_edit/'.$wisata->id_wisata,array('method' =>'POST')) ?>
          <div class="container">
  <div class="form-group">
    <div class="row mt-3">
    <div class="col-10">
    <label >Nama Objek Wisata</label>
    <input type="text" class="form-control" name="nama_wisata" value="<?php echo $wisata->nama_wisata; ?>">
  </div>
</div>
  <div class="row mt-3">
    <div class="col-10">
    <label >Lokasi</label>
    <input type="text" class="form-control" name="lokasi" value="<?php echo $wisata->lokasi; ?>">
  </div>
  </div>
  <div class="row mt-3">
    <div class="col-10">
    <label >Jam Operasional</label>
    <input type="text" class="form-control" name="jam_operasional" value="<?php echo $wisata->jam_operasional; ?>">
  </div>
  </div>
  <div class="row mt-3">
  <div class="col-10">
    <label >Harga</label>
    <input type="text" class="form-control" name="harga" value="<?php echo $wisata->harga; ?>">
  </div>
  </div>
  <div class="row mt-3">
  <div class="col-10">
    <label >Kontak Wisata</label>
    <input type="text" class="form-control" name="kontak_wisata" value="<?php echo $wisata->kontak_wisata; ?>">
  </div>
  </div>
  <div class="row mt-3">
    <div class="col-10">
    <label >Deskripsi</label>
    <textarea class="form-control" name="deskripsi" value="<?php echo $wisata->deskripsi; ?>"><?php echo $wisata->deskripsi; ?></textarea>
  </div>
  </div>
  <div class="row mt-3">
    <div class="col-4">
    <img width="250" height="200" src="<?php echo base_url('images/'.$wisata->gambar) ?>" alt="">
    </div>

    <div class="col-6">
      <label for="exampleFormControlFile1">Ganti Foto</label>
      <input type="file" name="gambar" value="<?php echo $wisata->gambar; ?>" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <input hidden type="text" name="id_wisata" value="<?php echo $wisata->id_wisata ?>">
</div>
  <div class="col-5">
  <button type="submit" class="btn btn-primary">Update</button>
</div>
<?php echo form_close() ?>
</div>
</div>
