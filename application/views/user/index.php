<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                <a href="<?= base_url('user/tambah'); ?>" class="btn btn-w-m btn-primary">Tambah</a>
                </div>
                <div class="ibox-content">

                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>alamat</th>
                        <th>No Telp</th>
                        <th>Username</th>
                        <th>Hak Akses</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                foreach($user as $us):
                ?>
                <tr>
                <td><?= $no++; ?></td>
                    <td><?= $us['nama_user']; ?></td>
                    <td><?= $us['alamat']; ?></td>
                    <td><?= $us['no_telpn']; ?></td>
                    <td><?= $us['username']; ?></td>
                    <td><?= $us['bagian'] == 1 ? "Admin" : "Owner" ?></td>
                    <td><img class="img-thumbnail" alt="image" src="<?php echo base_url('assets/foto/' . $us['foto']); ?>" width="80"></td>
                    <td>
                    <a href="<?= base_url() ?>user/ubah/<?= $us['id_user']; ?>" ><button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button></a>
                    <a href="<?= base_url() ?>user/hapus/<?= $us['id_user']; ?>" onclick="return confirm('Yakin Data Akan dihapus..?');" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfooter>
            </tfooter>
            </table>
            </div>
    </div>

                    </div>
                </div>
            </div>
            </div>    