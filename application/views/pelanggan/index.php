<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                <a href="<?= base_url('pelanggan/tambah'); ?>" class="btn btn-w-m btn-primary">Tambah</a>
                
                
                </div>
                <div class="ibox-content">

                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>No </th>
                    <th>Kode Customer</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No telpon</th>
                    
                    <th>Aksi</th>
                   
                </tr>
            </thead>
            
        <tbody>
        <?php
            $no=1;
            foreach($pelanggan as $pl):
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $pl['id_pelanggan']; ?></td>
                    <td><?= $pl['nama']; ?></td>
                    <td><?= $pl['alamat']; ?></td>
                    <td><?= $pl['no_telpn']; ?></td>
                    
                    <td>
                        <a href="<?= base_url() ?>pelanggan/ubah/<?= $pl['id_pelanggan']; ?>"> <button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button></a>
                        <a href="<?= base_url() ?>pelanggan/hapus/<?= $pl['id_pelanggan']; ?>" onclick="return confirm('Yakin Data Akan dihapus..?');" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
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


