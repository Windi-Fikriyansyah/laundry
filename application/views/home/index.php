<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Empty Page</title>

    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/animate.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/style.css" rel="stylesheet">

</head>
        
        <body>
        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                
                                <h5>User</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= $this->fungsi->count_user() ?></h1>
                               
                                <small>Jumlah User</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                
                                <h5>Pelanggan</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= $this->fungsi->count_pelanggan() ?></h1>
                                
                                <small>Jumlah Pelanggan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                
                                <h5>Paket</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= $this->fungsi->count_paket() ?></h1>
                                
                                <small>Jumlah Paket</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                
                                <h5>Transaksi</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= $this->fungsi->count_transaksi() ?></h1>
                                
                                <small>Jumlah Transaksi</small>
                            </div>
                        </div>
                    </div>
                    
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>gallery Laundry</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div id="carouselExampleBigIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleBigIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleBigIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleBigIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?php echo base_url('assets/img/slide1.JPG'); ?>" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url('assets/img/slide2.JPG'); ?>" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url('assets/img/slide3.PNG'); ?>" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleBigIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleBigIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

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


</body>

</html>
