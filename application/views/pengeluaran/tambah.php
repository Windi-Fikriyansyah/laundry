<!-- general form elements -->
<div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="">
            <div class="card-body">
            <div class="form-group">
                    <label>Kode Pengeluaran</label>
                    <input type="text" name="kd" value="<?= $no_otomatis; ?>" class="form-control <?= form_error('kd') ? 'is-invalid' : null ?>" readonly>
                    <small class="form-text text-danger"><?= form_error('kd'); ?></small>
                    </div>
                <div class="form-group">
                    <label for="inputName">Nama Pengeluaran</label>
                    <input type="text" name="nama_pl" value="<?= set_value('nama_pl'); ?>" class="form-control <?= form_error('nama_pl') ? 'is-invalid' : null ?>" placeholder="Nama Pengeluaran">
                    <small class="form-text text-danger"><?= form_error('nama_pl'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Tanggal</label></label>
                    <input type="date" name="tanggal" value="<?= set_value('tanggal'); ?>" class="form-control <?= form_error('tanggal') ? 'is-invalid' : null ?>" placeholder="tanggal Pengeluaran">
                    <small class="form-text text-danger"><?= form_error('tanggal'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Keterangan</label>
                    <input type="text" name="keterangan" value="<?= set_value('keterangan'); ?>" class="form-control <?= form_error('keterangan') ? 'is-invalid' : null ?>" placeholder="keterangan Pengeluaran">
                    <small class="form-text text-danger"><?= form_error('keterangan'); ?> </small>
                </div>
                <div class="form-group">
                    <label for="inputName">Total</label>
                    <input type="number" name="total" value="<?= set_value('total'); ?>" class="form-control <?= form_error('total') ? 'is-invalid' : null ?>" placeholder="total Pengeluaran">
                    <small class="form-text text-danger"><?= form_error('total'); ?> </small>
                </div>
                <div class="form-group">
                    <label>Nama Admin</label>
                    <select name="nama_user" class="form-control select2">
                        <option value="">--PILIH--</option>
                        <?php foreach($nama_user as $pl): ?>
                        <option  value="<?= $pl['id_user']; ?>"><?= $pl['nama_user']; ?></option>
                        <?php endforeach; ?>
                        </select>
                    <small class="form-text text-danger"><?= form_error('nama_user'); ?> </small>
                </div>
                
                <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>

                </div>
                <!-- /.card-body -->
                
               
              
            </form>
            </div>
            <!-- /.card -->