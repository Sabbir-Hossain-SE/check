<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GoTaxi - Admin Panel</title>
    <link rel="shortcut icon" href="/asset/css_animasi/favicon.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="/asset/js_animasi/jquery.min.js"></script>
    <script type="text/javascript" src="/asset/js_animasi/login-bg.js"></script>

    <style type="text/css">
        /*--- Responsive Code ---*/









        .background {


            background-image: url("/mr-rider/asset/css/login/taxi.jpg");
            background-size: 100% 100%;
            background-attachment: fixed;
            background-repeat: no-repeat;

        }

        @media screen and (min-width: 800px) {
            .wrapper {
                margin-left: 33%;
            }
    </style>





</head>

<body class="background">

    <div class="wrapper">

        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info" style="margin-top: 20%;">
                <div class="box-header with-border">
                    <h3 class="box-title">Admin Panel || GoTaxi-App</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/login/pengecekan" method="post">
                    <div class="box-body">
                        <?php echo "<p style=\"color:red\" class=\"text-center\">$pesan</p> <br>" ?>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input name="pass" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-center">LOGIN</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>

</body>

</html>