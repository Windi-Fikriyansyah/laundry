<!-- general form elements -->

<!-- /.card-header -->
<!-- form start -->

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
<!-- /.card-header -->
<!-- form start -->
    <form method="post" action="">
            <div class="card-body">
              <div class="form-group">
              <input type="hidden" name="id" value="<?= $ubah_pesan['id']; ?>">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="judul" value="<?= $ubah_pesan['judul']; ?>" class="form-control" id="exampleInputEmail1" placeholder="judul">
                    <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Isi</label>
                    <input type="text" name="isi" value="<?= $ubah_pesan['isi']; ?>" class="form-control" id="exampleInputEmail1" placeholder="isi">
                    <small class="form-text text-danger"><?= form_error('isi'); ?></small>
            
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" name="status" value="<?= $ubah_pesan['status']; ?>" class="form-control" id="exampleInputEmail1" placeholder="status">
                    <small class="form-text text-danger"><?= form_error('status'); ?></small>
                </div>
                
            
                <button type="submit" name="ubah" class="btn btn-primary">Update</button>
            </div>
                <!-- /.card-body -->

            
                
           
    </form>
    </div>
            
            
            
                
    
    