<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIDAKANTAR - Detail Informasi Driver</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">

                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>WEB</b>-Admin</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">

                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- Control Sidebar Toggle Button -->

                            <li>                                
                                <a href="#"><b style="margin-right: 10px">Sign Out</b> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
                            </li>
                            <li>
                                <a href="#" style="background-color: #2d8297"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/logo.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>MANG-JEK</p>
                            <a href="#">Administrator </a>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header"> MAIN NAVIGATION</li>
                        <li>
                            <a href="#">
                                <i class="active fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-motorcycle"></i> 
                                <span>Driver</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Validate Driver</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> List Driver</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dollar"></i>
                                <span>Mang-Pay</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> User's TopUp</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Driver's TopUp</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="active fa fa-paper-plane"></i> <span> Promotion</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="active fa fa-money"></i> <span> Set Cost</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="active fa fa-question-circle"></i> <span> Help Center</span>
                            </a>
                        </li>


                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Detail Informasi Driver
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Informasi Detail Driver</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td><b>Driver ID </b></td>
                                                    <td><p class="text-left">: 1234</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Nama Depan </b></td>
                                                    <td><p class="text-left">: Si Eneng</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Nama Belakang </b></td>
                                                    <td><p class="text-left">: Geulis pisan</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>No KTP </b></td>
                                                    <td><p class="text-left">: 1234 654 8465 21</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tempat Lahir </b></td>
                                                    <td><p class="text-left">: Bandung</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tanggal Lahir </b></td>
                                                    <td><p class="text-left">: 24-01-1995</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>No Telpon </b></td>
                                                    <td><p class="text-left">: 087 123 845 351</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Email </b></td>
                                                    <td><p class="text-left">: tanya@sidakantar.net</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Job </b></td>
                                                    <td><p class="text-left">: Sidak-Ride</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Rating </b></td>
                                                    <td><p class="text-left">: *****</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Status :</b></td>
                                                    <td><p class="text-left">: Aktif</p></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->
                                            <img src="dist/img/driver_foto2.jpg" class="img-responsive img-thumbnail" alt="Cinque Terre">

                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <a class="btn btn-primary" href="EditDriver.php" role="button">Edit Data Driver</a>
                                        </div>

                                    </div><br>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Informasi Detail Kendaraan</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!--Merek
                                    Tipe
                                    Jenis
                                    No Kendaraan
                                    Warna-->
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <table class="table table">
                                                <tr>
                                                    <td><b>Jenis Kendaraan</b></td>
                                                    <td><p class="text-left">: Motor</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tipe Kendaraan</b></td>
                                                    <td><p class="text-left">: Matic Yamaha Nmax</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>No Kendaraan </b></td>
                                                    <td><p class="text-left">: N 1234 GG</p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Warna </b></td>
                                                    <td><p class="text-left">: Silver</p></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-xs-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Informasi History Transaksi Terakhir</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!--Merek
                                    Tipe
                                    Jenis
                                    No Kendaraan
                                    Warna-->
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID Transaksi</th>
                                                        <th>Order Fitur</th>
                                                        <th>Pelanggan</th>
                                                        <th>Status</th>
                                                        <th>Waktu Order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>313</td>
                                                        <td>Sidak-Ride</td>
                                                        <td>Bu Susi</td>
                                                        <td><span class="label label-danger">Cancelled</span></td>
                                                        <td>
                                                            <div class="sparkbar" data-color="#3a5068" data-height="20">2016-10-09 16:23:00</div>
                                                        </td>
                                                    </tr> 
                                                    <tr>
                                                        <td>312</td>
                                                        <td>Sidak-Ride</td>
                                                        <td>Bu Budi</td>
                                                        <td><span class="label label-danger">Ditolak</span></td>
                                                        <td>
                                                            <div class="sparkbar" data-color="#3a5068" data-height="20">2016-10-09 16:23:00</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>311</td>
                                                        <td>Sidak-Ride</td>
                                                        <td>Bu Nadia</td>
                                                        <td><span class="label label-info">Mencari</span></td>
                                                        <td>
                                                            <div class="sparkbar" data-color="#3a5068" data-height="20">2016-10-09 16:23:00</div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2017 <a href="http://www.goocar.web.id/">Digijaya</a>.</strong> Hak Cipta
                Dilindungi.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab"></div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab"></div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>
</html>
