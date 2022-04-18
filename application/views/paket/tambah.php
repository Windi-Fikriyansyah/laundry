<div class="row">
<div class="col-lg-12">
<div class="ibox">
    <div class="ibox-title">
        <h5>Tambah Data</h5>                        
    </div>
        <div class="ibox-content">
            <?= form_open_multipart('paket/tambah'); ?>
                <div class="form-group">
                    <label for="inputName">Kode Paket</label>
                    <input type="text" name="kd_paket" value="<?= $no_otomatis; ?>" class="form-control ? 'is-invalid' : null ?>" readonly>
                    <small class="form-text text-danger"><?= form_error('kd_paket'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Nama Paket</label>
                    <input type="text" name="nama_paket" value="<?= set_value('nama_paket'); ?>" class="form-control <?= form_error('nama_paket') ? 'is-invalid' : null ?>" placeholder="Nama paket">
                    <small class="form-text text-danger"><?= form_error('nama_paket'); ?> </small>
                </div>
                
                <div class="form-group">
                    <label for="inputName">Keterangan</label>
                    <input type="text-area" name="keterangan" value="<?= set_value('keterangan'); ?>" class="form-control <?= form_error('keterangan') ? 'is-invalid' : null ?>" placeholder="keterangan Paket">
                    <small class="form-text text-danger"><?= form_error('keterangan'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Harga</label></label>
                    <input type="text" name="harga" value="<?= set_value('harga'); ?>" class="form-control <?= form_error('harga') ? 'is-invalid' : null ?>" placeholder="Harga Paket">
                    <small class="form-text text-danger"><?= form_error('harga'); ?> </small>
                </div>
                <div class="form-group">
                    <label>Satuan</label>
                    <select name="nama_satuan" class="form-control">
                        <option value="">--PILIH--</option>
                        <?php foreach($nama_satuan as $pl): ?>
                        <option  value="<?= $pl['id_satuan']; ?>"><?= $pl['nama_satuan']; ?></option>
                        <?php endforeach; ?>
                        </select>
                    <small class="form-text text-danger"><?= form_error('nama_satuan'); ?> </small>
                </div>
                <div class="form-group">
                    <label>Waktu Pengerjaan</label>
                    <select name="nama" class="form-control">
                        <option value="">--PILIH--</option>
                        <?php foreach($nama as $pl): ?>
                        <option  value="<?= $pl['id_waktu']; ?>"><?= $pl['nama']; ?></option>
                        <?php endforeach; ?>
                        </select>
                    <small class="form-text text-danger"><?= form_error('nama'); ?> </small>
                </div>
                
                <button class="btn btn-primary " type="submit" name="tambah"><i class="fa fa-check"></i>&nbsp;Simpan</button>

                
                <!-- /.card-body -->
           
                
                
                <?= form_close(); ?>
        </div>
</div>
</div>
</div>
            <!-- /.card -->