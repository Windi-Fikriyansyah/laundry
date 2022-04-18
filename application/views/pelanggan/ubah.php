<!-- general form elements -->

<!-- /.card-header -->
<!-- form start -->

<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data Paket</h3>
    </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="">
                <div class="card-body">
                <div class="form-group">
                <input type="hidden" name="id" value="<?= $ubah_pelanggan['id_pelanggan']; ?>">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" value="<?= $ubah_pelanggan['nama']; ?>" class="form-control" id="exampleInputEmail1" placeholder="nama">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">alamat</label>
                    <input type="text" name="alamat" value="<?= $ubah_pelanggan['alamat']; ?>" class="form-control" id="exampleInputEmail1" placeholder="alamat">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
            
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">No Telpon</label>
                    <input type="text" name="no_telpn" value="<?= $ubah_pelanggan['no_telpn']; ?>" class="form-control" id="exampleInputEmail1" placeholder="no_telpn">
                    <small class="form-text text-danger"><?= form_error('no_telpn'); ?></small>
                </div>
                
            
                <button type="submit" name="ubah" class="btn btn-primary">Update</button>
            </div>
            </form>
</div>
            
            
            
                
    
    