<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                <a href="<?= base_url('paket/tambah'); ?>" class="btn btn-w-m btn-primary">Tambah</a>
                </div>
                <div class="ibox-content">

                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Paket</th>
                        <th>Nama Paket</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Waktu Pengerjaan</th>    
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php
                $no=1;
                foreach($paket as $pkt):
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $pkt['kd_paket']; ?></td>
                    <td><?= $pkt['nama_paket']; ?></td>
                    <td><?= $pkt['keterangan']; ?></td>
                    <td><?= $pkt['harga']; ?></td>
                    <td><?= $pkt['nama_satuan']; ?></td>
                    <td><?= $pkt['nama']; ?></td>
                    <td>
                    <a href="<?= base_url() ?>paket/ubah/<?= $pkt['kd_paket']; ?>"> <button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button></a>
                    <a href="<?= base_url() ?>paket/hapus/<?= $pkt['kd_paket']; ?>" onclick="return confirm('Yakin Data Akan dihapus..?');" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
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
