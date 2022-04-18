<!-- general form elements -->

<!-- /.card-header -->
<!-- form start -->

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit</h3>
    </div>
<!-- /.card-header -->
<!-- form start -->
    <form method="post" action="">
            <div class="card-body">
              <div class="form-group">
              <input type="hidden" name="id" value="<?= $ubah_waktu['id_waktu']; ?>">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" value="<?= $ubah_waktu['nama']; ?>" class="form-control" id="exampleInputEmail1" placeholder="nama">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                
            
                <button type="submit" name="ubah" class="btn btn-primary">Update</button>
            
            </div>
                <!-- /.card-body -->

           
                
    </form>
    </div>
            
            
            
                
    
    