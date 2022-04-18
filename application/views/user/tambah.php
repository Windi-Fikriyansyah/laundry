<div class="row">
<div class="col-lg-12">
<div class="ibox">
    <div class="ibox-title">
        <h5>Tambah Data</h5>                        
    </div>
        <div class="ibox-content">
            <?= form_open_multipart('user/tambah'); ?>
            
                <div class="form-group">
                    <label for="inputName">Nama User</label>
                    <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control <?= form_error('nm_user') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('nama'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Alamat</label>
                    <input type="text" name="alamat" value="<?= set_value('alamat'); ?>" class="form-control <?= form_error('alamat') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">No Telpon</label>
                    <input type="number" name="no_telpn" value="<?= set_value('no_telpn'); ?>" class="form-control <?= form_error('no_telpn') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('no_telpn'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Username *</label>
                    <input type="text" name="username" value="<?= set_value('username'); ?>" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('username'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Password *</label>
                    <input type="password" name="pass1" value="<?= set_value('pass1'); ?>" class="form-control <?= form_error('pass1') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('pass1'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Konfirmasi Password *</label>
                    <input type="password" name="pass2" value="<?= set_value('pass2'); ?>" class="form-control <?= form_error('pass2') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('pass2'); ?> </small>
                </div>
                
                
                <div class="form-group">
                    <label for="inputName">Hak Akses</label>
                    <select name="bagian" class="form-control <?= form_error('bagian') ? 'is-invalid' : null ?>">
                    <option value="">---PILIH---</option>
                    <option value="1">Admin</option>
                    <option value="2">Owner</option>
                </select>
                <small class="form-text text-danger"><?= form_error('bagian'); ?></small>
                </div>

                <div class="form-group">
                <label for="inputName">Foto</label>
                    <div class="custom-file">
                        <input id="foto" name="foto" type="file" class="custom-file-input">
                        <label for="logo" class="custom-file-label">Choose file...</label>
                    </div> 
                </div>

                <!-- /.card-body -->
                
                <button class="btn btn-primary " type="submit" name="tambah"><i class="fa fa-check"></i>&nbsp;Simpan</button>
                
                
        <?= form_close(); ?>
        </div>
</div>
</div>
</div>