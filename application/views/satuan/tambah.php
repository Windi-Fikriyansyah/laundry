<!-- general form elements -->
<div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Halaman Tambah Data </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="post" action="">
                <div class="card-body">

                

                    <div class="form-group">
                    <label for="exampleInputEmail1">Satuan Cucian</label>
                    <input type="text" name="nama_satuan" value="<?= set_value('nama_satuan'); ?>" class="form-control <?= form_error('nama_satuan') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('nama_satuan'); ?></small>
                    </div>
                    
                    <button class="btn btn-primary " type="submit" name="tambah"><i class="fa fa-check"></i>&nbsp;Simpan</button>    
                </div>
                <!-- /.card-body -->
                
                
               
        </form>
        </div>
            <!-- /.card -->