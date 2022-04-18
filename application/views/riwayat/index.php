<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | E-commerce</title>

    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/plugins/footable/footable.core.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/animate.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/style.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

</head>
<body>

<div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                    
                                 <tr>
                                    <th>No Faktur</th>    
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Ambil</th>
                                    <th>Nama Pelanggan</th>
                                    <th>No Telp</th>
                                    <th>Total Harga</th>
                                    <th>Bayar</th>
                                    <th>Kembalian</th>
                                    <th>Aksi</th>
                                 </tr>
                                </thead>
                                <tbody>
                                <?php 
               
                foreach ($riwayat as $dp):
                ?>
                    <tr>
                        <td><?= $dp['no_faktur']; ?></td>
                        <td><?= $dp['tgl_masuk']; ?></td>
                        <td><?= $dp['tgl_ambil']; ?></td>
                        <td><?= $dp['nama']; ?></td>
                        <td><?= $dp['no_telpn']; ?></td>
                        <td><?= $dp['total']; ?></td>
                        <td>
                        <?php if($dp['bayar'] < $dp['total']) {?>
                            <form action="<?= base_url('riwayat/update'); ?>" method="post">
                                <input type="number" name="bayar" id="bayar" value="0" class="form-control">
                                <input type="hidden" name="id" id="bayar" value="<?= $dp['no_faktur']; ?>" class="form-control">
                                <input type="hidden" name="total" id="bayar" value="<?= $dp['total']; ?>" class="form-control">
                        <?php }else{?>
                            <?= $dp['bayar']; ?></td>
                        <?php } ?>
                        </td>
                        <td><?= $dp['kembalian']; ?></td>
                        <td>
                            <span class="label label-primary">
                                <?= $dp['bayar'] >= $dp['total'] ? "Lunas" : "Belum Luna" ?>
                            </span>
                        </td>
                        <td class="text-right">
                            <div class="btn-group">
                                <button type="submit" class="btn-info btn btn-xs">Bayar</button>
                            </form>
                                <a href="<?= base_url() ?>riwayat/hapus/<?= $dp['no_faktur']; ?>" onclick="return confirm('Yakin Data Akan dihapus..?');" type="button" class="btn-danger btn btn-xs">Hapus</a>
                            </div>
                        </td>
                            
                    </tr>
                
                <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <ul class="pagination float-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


        </div>

        
        <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/inspinia.js"></script>
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/plugins/pace/pace.min.js"></script>

    <!-- Data picker -->
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- FooTable -->
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/plugins/footable/footable.all.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

            $('#date_added').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#date_modified').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

        });

    </script>
</body>
</html>
