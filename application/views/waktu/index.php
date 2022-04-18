<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                <a href="<?= base_url('waktu/tambah'); ?>" class="btn btn-w-m btn-primary">Tambah</a>
                </div>
                <div class="ibox-content">

                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>No </th>
                    <th>Nama</th>
                    <th>Aksi</th>
                   
                </tr>
            </thead>
            
        <tbody>
        <?php
            $no=1;
            foreach($waktu as $pl):
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $pl['nama']; ?></td>
                    <td>
                        <a href="<?= base_url() ?>waktu/ubah/<?= $pl['id_waktu']; ?>" > <button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button></a>
                        <a href="<?= base_url() ?>waktu/hapus/<?= $pl['id_waktu']; ?>" onclick="return confirm('Yakin Data Akan dihapus..?');" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                   </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>


