
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                <a href="<?= base_url('transaksi'); ?>" class="btn btn-w-m btn-primary">Kembali</a>
                </div>
                    <div class="ibox-content">

                    <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                    <tr>
                        <th>No Faktur</th>    
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Ambil</th>
                        <th>Nama Pelanggan</th>
                        <th>Nama Paket</th>
                        <th>Harga</th>
                        <th>Berat</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $no=1;
                foreach ($data_transaksi as $dp):
                ?>
                    <tr>
                        <td><?= $dp['no_faktur']; ?></td>
                        <td><?= $dp['tgl_masuk']; ?></td>
                        <td><?= $dp['tgl_ambil']; ?></td>
                        <td><?= $dp['nama']; ?></td>
                        <td><?= $dp['nama_paket']; ?></td>
                        <td><?= $dp['harga']; ?></td>
                        <td><?= $dp['jumlah']; ?></td>
                        <td><?= $dp['sub_total']; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="#modal-hapus<?= $dp['no_faktur']; ?>" data-toggle="modal" type="button" class="btn-danger btn btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                                <a href="<?= base_url() ?>transaksi/cetak/<?= $dp['no_faktur']; ?>" target="_blank" class="btn-warning btn btn-xs" type="button"><i class="fa fa-print"></i> <span class="bold"> Cetak</span></a>
                            </div>
                            </td>
                            
                    </tr>
                
                <?php endforeach; ?>
                </tbody>
           
        </div>
</div>

                    <?php foreach ($data_transaksi as $dp): ?>
                    <div class="modal fade" id="modal-hapus<?= $dp['no_faktur']; ?>" aria-modal="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Hapus Data</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form method="post" action="<?= base_url('transaksi/hapus'); ?>">
                                <div class="modal-body">
                                    <p>Apakah yakin ingin hapus...?</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <input type="hidden" name="kd" value="<?= $dp['no_faktur']; ?>">
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                                </div>
                                </form>
                            </div>
                        <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <?php endforeach; ?>
                </table>
            </div>
    </div>

                    </div>
                </div>
            </div>
            </div>   