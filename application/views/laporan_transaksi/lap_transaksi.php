<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-9">
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Export To
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="btn btn-warning " class="dropdown-item" target="_blank" href="<?= base_url('laporan_transaksi/cetak_laporan_transaksi/ ' . $tgl_awal . '/' . $tgl_akhir); ?>" >
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
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>No Faktur</th>
                        <th>Petugas</th>
                        <th>Nama Pelanggan</th>
                        <th>Kode Paket</th>
                        <th>Nama Paket</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $no=1;
                foreach ($lap_transaksi as $dp):
                ?>
                    <tr>
                        
                        <td><?= $dp['tgl_ambil']; ?></td>
                        <td><?= $dp['no_faktur']; ?></td>
                        <td><?= $dp['nama_user']; ?></td>
                        <td><?= $dp['nama']; ?></td>
                        <td><?= $dp['kd_paket']; ?></td>
                        <td><?= $dp['nama_paket']; ?></td>
                        <td><?= $dp['harga']; ?></td>
                        <td><?= $dp['jumlah']; ?></td>
                        <td><?= number_format($dp['sub_total'],0, ',','.'); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                <tfooter>
                        <tr>
                            <th colspan="8">Grand Total transaksi</th>
                            <th>Rp. <?= number_format($total, 0, ',','.'); ?></th>
                        </tr>
                    </tfooter>
            </table>
        </div>
</div>
