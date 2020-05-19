<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIDAKANTAR - Validate Driver</title>
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
                                <a href="ManageAdmin.php" style="background-color: #2d8297"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
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
                            <a href="index.php">
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
                                <li><a href="ValidateDriver.php"><i class="fa fa-circle-o"></i> Validate Driver</a></li>
                                <li><a href="ListDriver.php"><i class="fa fa-circle-o"></i> List Driver</a></li>
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
                                <li><a href="UserTopup.php"><i class="fa fa-circle-o"></i> User's TopUp</a></li>
                                <li><a href="DriverTopup.php"><i class="fa fa-circle-o"></i> Driver's TopUp</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="Promotion.php">
                                <i class="active fa fa-paper-plane"></i> <span> Promotion</span>
                            </a>
                        </li>
                        <li>
                            <a href="SetCost.php">
                                <i class="active fa fa-money"></i> <span> Set Cost</span>
                            </a>
                        </li>
                        <li>
                            <a href="HelpCenter.php">
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
                        Validate Driver
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Validasi Driver yang mendaftar</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>

                                                <!--                                                
                                                nomor pelamar
                                                Nama 
                                                No Kendaraan
                                                No Telepon
                                                Detail
                                                Validasi
                                                -->
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>No. Kendaraan</th>
                                                <th>No. Telpon</th>
                                                <th>Detil</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><p class="text-center">1</p></td>
                                                <td>Danil</td>
                                                <td>N 7632 AS</td>
                                                <td>085 123 456 456</td>
                                                <td><a href="DetailPelamar.php"><button type="button" class="btn btn-default btn-sm">Lihat Detil Lamaran</button></a></td>
                                                <td><a href="#">
                                                        <button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin melakukan validasi pelamar tersebut ?')">
                                                            Validasi
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p class="text-center">2</p></td>
                                                <td>Rizky Kurnia</td>
                                                <td>N 7632 AS</td>
                                                <td>085 123 456 456</td>
                                                <td><a href="DetailPelamar.php"><button type="button" class="btn btn-default btn-sm">Lihat Detil Lamaran</button></a></td>
                                                <td><a href="#">
                                                        <button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin melakukan validasi pelamar tersebut ?')">
                                                            Validasi
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p class="text-center">3</p></td>
                                                <td>Ananda</td>
                                                <td>N 7632 AS</td>
                                                <td>085 123 456 456</td>
                                                <td><a href="DetailPelamar.php"><button type="button" class="btn btn-default btn-sm">Lihat Detil Lamaran</button></a></td>
                                                <td><a href="#"><button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin melakukan validasi pelamar tersebut ?')">Validasi</button></a></td>
                                            </tr>
                                            <tr>
                                                <td><p class="text-center">4</p></td>
                                                <td>Susi</td>
                                                <td>N 7632 AS</td>
                                                <td>085 123 456 456</td>
                                                <td><a href="DetailPelamar.php"><button type="button" class="btn btn-default btn-sm">Lihat Detil Lamaran</button></a></td>
                                                <td><a href="#"><button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin melakukan validasi pelamar tersebut ?')">Validasi</button></a></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
<!--                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>-->
                                        </tfoot>
                                    </table>
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
