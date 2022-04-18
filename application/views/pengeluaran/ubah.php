<!-- general form elements -->
<div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Pengeluaran</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="">
                <div class="card-body">

                <div class="form-group">
                <input type="hidden" name="id" value="<?= $ubah_pengeluaran['kd_pengeluaran']; ?>">
                    <label for="exampleInputEmail1">Nama Pengeluaran</label>
                    <input type="text" name="nama_pl" value="<?= $ubah_pengeluaran['nama_pl']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Pengeluaran">
                    <small class="form-text text-danger"><?= form_error('nama_pl'); ?></small>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" name="tanggal" value="<?= $ubah_pengeluaran['tanggal']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Pengeluaran">
                    <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" name="keterangan" value="<?= $ubah_pengeluaran['keterangan']; ?>" class="form-control" id="exampleInputEmail1" placeholder="keterangan">
                    <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="number" name="total" value="<?= $ubah_pengeluaran['total']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Total Pengeluaran">
                    <small class="form-text text-danger"><?= form_error('total'); ?></small>
                </div>
                <div class="form-group">
                    <label>Nama Admin</label>
                    <select name="nama_user" class="form-control select2">
                        <option value="<?= $ubah_pengeluaran['id_user']; ?>"><?= $ubah_pengeluaran['nama_user']; ?></option>
                        <?php foreach($nama_user as $nm): ?>
                        <option value="<?= $nm['id_user']; ?>"><?= $nm['nama_user']; ?></option>
                        <?php endforeach; ?>
                        </select>
                    <small class="form-text text-danger"><?= form_error('nama_user'); ?> </small>
                </div>
                
                
                

                <!-- /.card-body -->
               
                <button type="submit" name="ubah" class="btn btn-primary">Update</button>
               
            </form>
            </div>
            <!-- /.card -->