<div class="row">
<div class="col-lg-12">
<div class="ibox">
    <div class="ibox-title">
        <h5>Tambah Data</h5>                        
    </div>
        <div class="ibox-content">
            <?= form_open_multipart('pelanggan/tambah'); ?>

                <div class="form-group">
                    <label>Kode Customer</label>
                    <input type="text" name="kd" value="<?= $no_otomatis; ?>" class="form-control <?= form_error('kd') ? 'is-invalid' : null ?>" readonly>
                    <small class="form-text text-danger"><?= form_error('kd'); ?></small>
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control <?= form_error('nama') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                   
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat" value="<?= set_value('alamat'); ?>" class="form-control <?= form_error('alamat') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">No Telpon</label>
                    <input type="text" name="no_telpn" value="<?= set_value('no_telpn'); ?>" class="form-control <?= form_error('no_telpn') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('no_telpn'); ?></small>
                    </div>

                    <button class="btn btn-primary " type="submit" name="tambah"><i class="fa fa-check"></i>&nbsp;Simpan</button> 
                </div>
                <!-- /.card-body -->
               
                
                <?= form_close(); ?>
        </div>
</div>
</div>
</div>
            <!-- /.card -->