<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Invoice Print</title>

    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/animate.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/style.css" rel="stylesheet">

</head>

<body class="white-bg" onload="window.print()">
                <div class="wrapper wrapper-content p-xl">
                    <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>From:</h5>
                                    <address>
                                        <strong>Family Laundry</strong><br>
                                        Jl. Sulawesi Gg. Keluarga<br>
                                        Pontianak, 719346<br>
                                        <abbr title="Phone">Tlp:</abbr> (123) 601-4590
                                    </address>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <h4>Invoice No.</h4>
                                    <h4 class="text-navy"><?= $cetak['no_faktur']; ?></h4>
                                    <span>To Pelanggan :</span>
                                    <address>
                                        <strong><?= $cetak['nama']; ?></strong><br>
                                        <!-- 112 Street Avenu, 1080<br>
                                        Miami, CT 445611<br> -->
                                        <abbr title="Phone">Telp: </abbr><?= $cetak['no_telpn']; ?>
                                    </address>
                                    <p>
                                        <span><strong>Tanggal masuk:</strong><?= $cetak['tgl_masuk']; ?></br></span><br/>
                                        <span><strong>Tanggal ambil:</strong><?= $cetak['tgl_ambil']; ?></span>
                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>List Paket Laundry</th>
                                        <th>Waktu</th>
                                        <th>Berat</th>
                                        <th>Harga</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($detail as $dtl): ?>
                                    <tr>
                                        <td><div><strong><?= $dtl['kd_paket']; ?> - <?= $dtl['nama_paket']; ?></strong></div>
                                            <!-- <small>Lorem ipsum dolor sit amet, cnsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></td> -->
                                        <td><?= $dtl['waktu']; ?></td>
                                        <td><?= $dtl['jumlah']; ?></td>
                                        <td><?= $dtl['harga']; ?></td>
                                        <td><?= $dtl['sub_total']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>TOTAL :</strong></td>
                                    <td><?= $cetak['total']; ?></td>
                                </tr>
                                <tr>
                                    <td><strong>BAYAR :</strong></td>
                                    <td><?= $cetak['bayar']; ?></td>
                                </tr>
                                <tr>
                                    <td><strong>KEMBALIAN :</strong></td>
                                    <td><?= $cetak['kembalian']; ?></td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- <div class="well m-t"><strong>Comments</strong>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            </div> -->
                        </div>

    </div>

    <!-- Mainly scripts -->
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?= base_url(); ?>assets/HTML5_Full_Version/js/inspinia.js"></script>

    <!-- <script type="text/javascript">
        window.print();
    </script> -->

</body>

</html>
