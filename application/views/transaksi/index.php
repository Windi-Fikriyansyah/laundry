<div class="row">
    <div class="col-lg-12">
        <div class="card card-widget">
            <div class="card-body">
                <table width="100%">
                    <form action="<?= base_url('transaksi/tambah_keranjang'); ?>"method='post'>
                    <input type="hidden" name="id_user" id="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                        <tr>
                            <td>
                                <div class="form-group input-group">
                                    <input type="text" id="kd" name="kd_paket" class="form-control" placeholder="Pilih Paket" readonly>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-paket">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </td>
                            <td></td>   
                            <td>
                                <div class="form-group">
                                    <input type="text" name="nama_paket" id="nama_paket" class="form-control" placeholder="Nama Paket" readonly>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="waktu" id="waktu" class="form-control" placeholder="Waktu Pengerjaan" readonly>
                                </div>
                            </td>
                            <td></td>
                            
                            <td>
                                <div class="form-group">
                                    <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga" readonly>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <input required type="text" id="berat" name="berat" min="1" class="form-control" placeholder="Berat Cucian">
                                
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <button type="submit" name="tambah_keranjang" id="add_cart" class="btn btn-danger">
                                        <i class="fa fa-cart-plus"></i> Add
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
<form action="<?= base_url('transaksi/simpan'); ?>" method="post">
<div class="row">
    <div class="col-lg-12">
        <div class="card card-widget">
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>No</th>
                        <th>Kode Paket</th>
                        <th>Nama Paket</th>
                        <th>Waktu Pengerjaan</th>
                        <th>Harga</th>
                        <th>Berat Cucian</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody id="cart_table">
                        <?php if($keranjang ==""){ ?>
                        <tr>
                            <td colspan="9" class="text-center">Tidak ada paket</td>
                        </tr>
                        <?php } else{
                        $no=1;
                        foreach($keranjang as $kjg):
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $kjg['kd_paket']; ?><input type="hidden" name="no_faktur[]" value="<?= $no_faktur; ?>"></td>
                            <td><?= $kjg['nama_paket']; ?><input type="hidden" name="kd_paket[]" value="<?= $kjg['kd_paket']; ?>"></td>
                            <td><?= $kjg['waktu']; ?><input type="hidden" name="waktu[]" value="<?= $kjg['waktu']; ?>"></td>
                            <td><?= $kjg['harga']; ?><input type="hidden" name="harga[]" value="<?= $kjg['harga']; ?>"></td>
                            <td><?= $kjg['jumlah']; ?><input type="hidden" name="jumlah[]" value="<?= $kjg['jumlah']; ?>"></td>
                            <td><?= $kjg['subtotal']; ?><input type="hidden" name="subtotal[]" value="<?= $kjg['subtotal']; ?>"></td>
                            <td>
                                <a href="<?= base_url() ?>transaksi/hapus_keranjang/<?= $kjg['id']; ?>"
                                class="btn btn-small text-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card card-widget">
            <div class="card-body">
                <table width="100%">
                    <tr>
                        <td style="vertical-align:top">
                            <label for="date">Tanggal Masuk</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="date" name="tgl_masuk" id="date" value="<?= date('Y-m-d') ?>" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top">
                            <label for="date">Tanggal Ambil</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="date" name="tgl_ambil" id="date1" value="<?= date('Y-m-d') ?>" class="form-control">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card card-widget">
            <div class="card-body">
                <table width="100%">
                <tr>
                        <td style="vertical-align:top; width:20%">
                            <label for="user">Kasir</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="user" id="id_user" value="<?= $this->fungsi->user_login()->username ?>" class="form-control" readonly>
                            </div>
                        </td>
                    </tr>
                <tr>
                        <td style="vertical-align:top; width:20%">
                            <label for="pelanggan">Pelanggan</label>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <select name="pelanggan" id="id_pelanggan" class="form-control chosen-select" tabindex="2">
                                    <option value="">Pilih Pelanggan...</option>
                                    <?php foreach($pelanggan as $spl): ?>
                                    <option value="<?= $spl['id_pelanggan']; ?>"><?= $spl['nama']; ?> - <?= $spl['no_telpn']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                        
                            
                                <button type="button" data-toggle="modal" data-target="#modal-pelanggan" class="btn btn-primary dim" type="button"><i class="fa fa-plus-circle"></i>
                            </button>    
                           
                            </div>

                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card card-widget">
            <div class="card-body">
            <table width="100%">
                <div alignt="right">
                    <h4>No Faktur : <b><span id="faktur"> <?= $no_faktur; ?></span></b></h4>
                    <h1><b><span id="grand_total" style="font-size:35pt"><?= $total =='' ? "0" : number_format($total, 0, ',','.'); ?></span></b></h1>
                </div>
            </table>
            </div>
        </div>
    </div>
</div>

    <input type="hidden" name="nofaktur" value="<?= $no_faktur; ?>">
    <input type="hidden" name="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                            
<div class="row">
    <div class="col-lg-6">
        <div class="card card-widget">
            <div class="card-body">
                <table width="100%">
                    <tr>
                        <td style="vertical-align:top: width:30%">
                            <label for="sub_total">Grand Total</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="number" name="total" id="total" value="<?= $total; ?>" class="form-control" readonly>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top: width:30%">
                            <label for="bayar">Bayar</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="number" name="bayar" id="bayar" onkeyup="byr()" class="form-control">
                            </div>
                        </td>
                    </tr>
                </table>
                <div align="right">
                    
                    
                    <button type="submit" name="simpan" id="simpan" class="btn btn-primary">
                        <i class="fa fa-paper-plane"></i> Simpan 
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6">
        <div class="card card-widget">
            <div class="card-body">
                <div align="right">
                    <h4>Kembalian :</h4>
                    <h1><b><span id="kembalian" style="font-size:35pt"> 0 </span></b></h1>
                </div>
                <div align="right">
                    <a href=" <?= base_url('transaksi/data_transaksi'); ?>" id="simpan" class="btn btn-flat btn-lg btn-danger">
                    <i class="fa fa-list"></i> Data transaksi
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<div class="modal fade" id="modal-paket" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
            <h4 class="modal-title">Data Paket</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            
            <div class="modal-body">
            <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Kode paket</th>
                    <th>Nama paket</th>
                    <th>Waktu</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <?php
                $no=1;
                foreach($paket as $brg):
                ?>
                <tbody>
                <tr>
                    <td><?= $brg['kd_paket']; ?></td>
                    <td><?= $brg['nama_paket']; ?></td>
                    <td><?= $brg['nama']; ?></td>
                    <td><?= $brg['harga']; ?></td>
                    
                    <td>
                        <button data-kd="<?= $brg['kd_paket']; ?>"
                        data-nama="<?= $brg['nama_paket']; ?>"
                        data-waktu="<?= $brg['nama']; ?>"
                        data-harga="<?= $brg['harga']; ?>"
                       
                        class="btn btn-outline-danger" id="pilih_brg">
                        <i class="fa fa-check"></i> pilih
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?> 
                </tbody>
            </table>
        </div>
</div> 
</div>
</div> 

<div class="modal fade" id="modal-batal" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
            <p>Apakah yakin ingin hapus...?</p>
            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
            <a href="<?= base_url('transaksi/batal'); ?>" class="btn btn-outline-light">Yes</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-pelanggan" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
            <h4 class="modal-title">Tambah Data Pelanggan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            
            <div class="modal-body">
            <div class="ibox-content">
            <?= form_open_multipart('transaksi/simpan_pelanggan'); ?>

                <div class="form-group">
                    <label>Kode Customer</label>
                    <input type="text" name="kd" value="<?= $no_otomatis; ?>" class="form-control <?= form_error('kd') ? 'is-invalid' : null ?>" readonly>
                    <small class="form-text text-danger"><?= form_error('kd'); ?></small>
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control <?= form_error('nama') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                   
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat" value="<?= set_value('alamat'); ?>" class="form-control <?= form_error('alamat') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">No Telpon</label>
                    <input type="text" name="no_telpn" value="<?= set_value('no_telpn'); ?>" class="form-control <?= form_error('no_telpn') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('no_telpn'); ?></small>
                    </div>

                    <button class="btn btn-primary " type="submit" name="tambah"><i class="fa fa-check"></i>&nbsp;Simpan</button> 
                </div>
                <!-- /.card-body -->
               
                
                <?= form_close(); ?>
        </div>
        </div>
</div> 
</div>
</div> 


