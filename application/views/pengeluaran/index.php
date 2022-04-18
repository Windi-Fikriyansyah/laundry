<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                <a href="<?= base_url('pengeluaran/tambah'); ?>" class="btn btn-w-m btn-primary">Tambah</a>
                </div>
                <div class="ibox-content">

                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Pengeluaran</th>
                        <th>Nama pengeluaran</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Total</th>
                        <th>Nama Admin</th>    
                        <th>Aksi</th>
                </tr>
                <?php
                $no=1;
                foreach($pengeluaran as $pkt):
                ?>
                </thead>
                <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $pkt['kd_pengeluaran']; ?></td>
                    <td><?= $pkt['nama_pl']; ?></td>
                    <td><?= $pkt['tanggal']; ?></td>
                    <td><?= $pkt['keterangan']; ?></td>
                    <td><?= $pkt['total']; ?></td>
                    <td><?= $pkt['nama_user']; ?></td>
                    <td>
                    <a href="<?= base_url() ?>pengeluaran/ubah/<?= $pkt['kd_pengeluaran']; ?>"> <button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button></a>
                    <a href="<?= base_url() ?>pengeluaran/hapus/<?= $pkt['kd_pengeluaran']; ?>" onclick="return confirm('Yakin Data Akan dihapus..?');" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            </div>
    </div>

            </div>
        </div>
    </div>
</div>    
   