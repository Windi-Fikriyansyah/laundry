<!-- general form elements -->
<div class="row">
<div class="col-lg-12">
<div class="ibox">
    <div class="ibox-title">
        <h5>Ubah Data</h5>                        
    </div>
        <div class="ibox-content">
            <!-- /.card-header -->
            <!-- form start -->
            <?php echo form_open_multipart('user/ubah'); ?>
                <div class="card-body">
                <input type="hidden" name="id" value="<?= $ubah_user['id_user']; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama User</label>
                    <input type="text" name="nama" value="<?= $ubah_user['nama_user']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama User">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat" value="<?= $ubah_user['alamat']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No Telpon</label>
                    <input type="text" name="no_telpn" value="<?= $ubah_user['no_telpn']; ?>" class="form-control" id="exampleInputEmail1" placeholder="No telpon">
                    <small class="form-text text-danger"><?= form_error('no_telpn'); ?></small>
                </div>
                <div class="form-group">
                    <label for="inputName">Username *</label>
                    <input type="text" name="user_name" value="<?= $ubah_user['username']; ?>" class="form-control">
                    <small class="form-text text-danger"><?= form_error('user_name'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Password *</label>
                    <input type="password" name="pass1" class="form-control <?= form_error('pass1') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('pass1'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Konfirmasi Password *</label>
                    <input type="password" name="pass2" class="form-control <?= form_error('pass2') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('pass2'); ?> </small>
                </div>
                
                <div class="form-group">
                    <label for="inputName">Hak Akses</label>
                    <select name="bagian" class="form-control <?= form_error('bagian') ? 'is-invalid' : null ?>">
                    
                    <option value="1" <?= $ubah_user['bagian'] == 1 ? "selected" : null ?> >Admin</option>
                    <option value="2" <?= $ubah_user['bagian'] == 2 ? "selected" : null ?> >Owner</option>
                </select>
                <small class="form-text text-danger"><?= form_error('bagian'); ?></small>
                </div>

                
        <div class="form-group">
                <label for="inputName">Foto</label>
                <div class="col-sm-3">
							<img src="<?php echo base_url('assets/foto/'.$ubah_user['foto']) ?>" class="img-thumbnail">
					    </div>
                    <div class="custom-file">
                        
                    <input type="hidden" name="image" value="<?= $ubah_user['foto']; ?>">
                        <input id="foto" name="foto" type="file" class="custom-file-input">
                        <label for="logo" class="custom-file-label">Choose file...</label>
                    </div> 
        </div>
        <button class="btn btn-primary " type="submit" name="ubah"><i class="fa fa-check"></i>&nbsp;Update</button>
        
            </div>
            </div>
            </div>
            </div>
                <!-- /.card-body -->
                
                
               
            <?php echo form_close(); ?>
            
            </div>
        </div>
</div>
</div>
</div>
            
            <!-- /.card -->