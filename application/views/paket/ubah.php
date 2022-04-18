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
                    <label for="kd_paket"> Kode Paket</label>
                    <input type="text" name="kd_paket" value="<?= $ubah_paket ['kd_paket']; ?>" class="form-control ? 'is-invalid' : null ?>" readonly>
                    <small class="form-text text-danger"><?= form_error('kd_paket'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Paket</label>
                    <input type="text" name="nama_paket" value="<?= $ubah_paket['nama_paket']; ?>" class="form-control" id="exampleInputEmail1" placeholder="nama_paket">
                    <small class="form-text text-danger"><?= form_error('nama_paket'); ?></small>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                    <input type="text" name="harga" value="<?= $ubah_paket['harga']; ?>" class="form-control" id="exampleInputEmail1" placeholder="harga">
                    <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" name="keterangan" value="<?= $ubah_paket['keterangan']; ?>" class="form-control" id="exampleInputEmail1" placeholder="keterangan">
                    <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                </div>
                <div class="form-group">
                    <label>Satuan</label>
                    <select name="nama_satuan" class="form-control">
                        <option value="<?= $ubah_paket['id_satuan']; ?>"><?= $ubah_paket['nama_satuan']; ?></option>
                        <?php foreach($nama_satuan as $pl): ?>
                        <option value="<?= $pl['id_satuan']; ?>"><?= $pl['nama_satuan']; ?></option>
                        <?php endforeach; ?>
                        </select>
                    <small class="form-text text-danger"><?= form_error('nama_satuan'); ?> </small>
                </div>
                <div class="form-group">
                    <label>Waktu Pengerjaan</label>
                    <select name="nama" class="form-control">
                        <option value="<?= $ubah_paket['id_waktu']; ?>"><?= $ubah_paket['nama']; ?></option>
                        <?php foreach($nama as $nm): ?>
                        <option value="<?= $nm['id_waktu']; ?>"><?= $nm['nama']; ?></option>
                        <?php endforeach; ?>
                        </select>
                    <small class="form-text text-danger"><?= form_error('nama'); ?> </small>
                </div>
                
                
                

                <!-- /.card-body -->
                
                <button type="submit" name="ubah" class="btn btn-primary">Update</button>
               
            </form>
            </div>
            <!-- /.card -->