<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aplikasi Web Laundry</title>

    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/animate.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/HTML5_Full_Version/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" >
    

</head>

<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="<?= base_url(); ?>assets/foto/<?= $this->fungsi->user_login()->foto ?>" style="width: 80px; height: 80px; float:top; margin:0 8px 4px 0;" >
                   
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?= $this->fungsi->user_login()->nama_user ?></span>
                            <span class="text-muted text-xs block"><?= $this->fungsi->user_login()->username ?><b class="caret"></b></span>
                        </a>
                        
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                        <a href="<?= base_url('home/index'); ?>"><i class="bi bi-house-fill"></i> <span class="nav-label">Home</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('transaksi/index'); ?>"><i class="bi bi-cart-plus"></i><span class="nav-label">Buat Transaksi</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('riwayat/index'); ?>"><i class="bi bi-bag"></i> <span class="nav-label">Pengambilan</span></a>
                </li>
                    <li>
                        <a href="<?= base_url('pengeluaran/index'); ?>"><i class="bi bi-plus-lg"></i><span class="nav-label">Buat Pengeluaran</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('user/index'); ?>"><i class="bi bi-person-circle"></i><span class="nav-label">Data User</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('pelanggan/index'); ?>"><i class="bi bi-people-fill"></i><span class="nav-label">Data Pelanggan</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('paket/index'); ?>"><i class="bi bi-gift"></i><span class="nav-label">Data Paket</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('pesan/index'); ?>"><i class="bi bi-chat-quote"></i><span class="nav-label">Data Pesan</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('satuan/index'); ?>"><i class="bi bi-calculator-fill"></i><span class="nav-label">Data Satuan</span></a>
                    </li>
                <li>

               
                

                <li>
                        <a href="<?= base_url('laporan_transaksi/index'); ?>"><i class="bi bi-journal-text"></i> <span class="nav-label">Laporan Transaksi</span></a>
                </li>

                <li>
                        <a href="<?= base_url('laporan_pengeluaran/index'); ?>"><i class="bi bi-journals"></i> <span class="nav-label">Laporan Pengeluaran</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Aplikasi Web LAUNDRY</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                </a>
                                <div>
                                    <small class="float-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                </a>
                                <div>
                                    <small class="float-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                </a>
                                <div>
                                    <small class="float-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html" class="dropdown-item">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?= base_url('auth/logout'); ?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                
            </ul>

        </nav>
        </div>