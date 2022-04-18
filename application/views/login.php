<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="<?= base_url(); ?>/assets/HTML5_Full_Version/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/HTML5_Full_Version/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?= base_url(); ?>/assets/HTML5_Full_Version/css/animate.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/HTML5_Full_Version/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name" >FL</h1>

            </div>
            <h3>Welcome to FL</h3>
            <p>FL(FAMILY LAUNDRY)
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="<?= base_url('auth/proses'); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="user_name" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" name="login" class="btn btn-primary block full-width m-b">Login</button>

                
            </form>
            <p class="m-t"> <small>Selamat Menggunakan Aplikasi &copy; 2021</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?= base_url(); ?>/assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.js"></script>

</body>

</html>
