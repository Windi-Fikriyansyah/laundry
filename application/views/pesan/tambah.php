<!-- general form elements -->
<div class="row">
<div class="col-lg-12">
<div class="ibox">
    <div class="ibox-title">
        <h5>Tambah Data</h5>                        
    </div>
        <div class="ibox-content">
            <?= form_open_multipart('pesan/tambah'); ?>
                <div class="form-group">
                    

                    <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="judul" value="<?= set_value('judul'); ?>" class="form-control <?= form_error('judul') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                    </div>
                   
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Isi</label>
                    <input type="text" name="isi" value="<?= set_value('isi'); ?>" class="form-control <?= form_error('isi') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('isi'); ?></small>
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" name="status" value="<?= set_value('status'); ?>" class="form-control <?= form_error('status') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('status'); ?></small>
                    </div>

                    
                </div>
                <!-- /.card-body -->
                
                <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                
                <?= form_close(); ?>
        </div>
</div>
</div>
</div>