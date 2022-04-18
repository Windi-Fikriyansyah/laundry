<!-- general form elements -->

<!-- /.card-header -->
<!-- form start -->

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Satuan</h3>
    </div>
<!-- /.card-header -->
<!-- form start -->
    <form method="post" action="">
            <div class="card-body">
              <div class="form-group">
              <input type="hidden" name="id" value="<?= $ubah_satuan['id_satuan']; ?>">
                    <label for="exampleInputEmail1">Nama Satuan</label>
                    <input type="text" name="nama_satuan" value="<?= $ubah_satuan['nama_satuan']; ?>" class="form-control" id="exampleInputEmail1" placeholder="nama_satuan">
                    <small class="form-text text-danger"><?= form_error('nama_satuan'); ?></small>
                </div>
                
                <button type="submit" name="ubah" class="btn btn-primary">Update</button>
            
            </div>
                <!-- /.card-body -->

            
                
            
    </form>
    </div>
            
            
            
                
    
    