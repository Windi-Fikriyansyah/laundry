<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-9">
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Export To
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="btn btn-warning " class="dropdown-item" target="_blank" href="<?= base_url('laporan_pengeluaran/cetak_laporan_pengeluaran/ ' . $tgl_awal . '/' . $tgl_akhir); ?>" >
                        <span  class="icon text-black-200">
                            <i class="fa fa-fw fa-print"></i>
                        </span>
                        <span class="text-black-200">Print</span>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div align="right">
                <li class="breadcrumb-item active">Periode dari <?= date('d/m/Y', strtotime($tgl_awal)); ?> s.d <?= date('d/m/Y', strtotime($tgl_akhir)); ?></li>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kode Pengeluaran</th>
                        <th>Petugas</th>
                        <th>Nama Pengeluaran</th>
                        <th>Keterangan</th>
                        <th>total</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $no=1;
                foreach ($lap_pengeluaran as $dp):
                ?>
                    <tr>
                        
                        <td><?= $dp['tanggal']; ?></td>
                        <td><?= $dp['kd_pengeluaran']; ?></td>
                        <td><?= $dp['nama_user']; ?></td>
                        <td><?= $dp['nama_pl']; ?></td>
                        <td><?= $dp['keterangan']; ?></td>
                        <td><?= $dp['total']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                    <tfooter>
                        <tr>
                            <th colspan="5">Grand Total pengeluaran</th>
                            <th>Rp. <?= number_format($total, 0, ',','.'); ?></th>
                        </tr>
                    </tfooter>
            </table>
        
</div>
