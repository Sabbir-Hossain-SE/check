<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIDAKANTAR - Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
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
                        Dashboard
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Monthly Recap Transaction</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="text-center">
                                                <strong>Transaction: 2016</strong>
                                            </p>

                                            <div class="chart">
                                                <!-- Sales Chart Canvas -->
                                                <canvas id="salesChart" style="height: 200px;"></canvas>
                                            </div>
                                            <!-- /.chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./box-body -->

                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-8">

                            <!-- TABLE: LATEST ORDERS -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Latest Transaction</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table no-margin">
                                            <thead>
                                                <tr>
                                                    <th>ID Transaksi</th>
                                                    <th>Order Fitur</th>
                                                    <th>Pelanggan</th>
                                                    <th>Driver</th>
                                                    <th>No Telp Driver</th>
                                                    <th>Status</th>
                                                    <th>Waktu Order</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>313</td>
                                                    <td>Sidak-Ride</td>
                                                    <td>Bu Susi</td>
                                                    <td>Kurnia Rizky</td>
                                                    <td>085 123 456 789</td>
                                                    <td><span class="label label-danger">Cancelled</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#3a5068" data-height="20">2016-10-09 16:23:00</div>
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <td>312</td>
                                                    <td>Sidak-Ride</td>
                                                    <td>Bu Budi</td>
                                                    <td>Kurnia Rizky</td>
                                                    <td>085 123 456 789</td>
                                                    <td><span class="label label-danger">Ditolak</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#3a5068" data-height="20">2016-10-09 16:23:00</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>311</td>
                                                    <td>Sidak-Ride</td>
                                                    <td>Bu Nadia</td>
                                                    <td>Kurnia Rizky</td>
                                                    <td>085 123 456 789</td>
                                                    <td><span class="label label-info">Mencari</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#3a5068" data-height="20">2016-10-09 16:23:00</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>310</td>
                                                    <td>Sidak-Ride</td>
                                                    <td>Pak Markus</td>
                                                    <td>Kurnia Rizky</td>
                                                    <td>085 123 456 789</td>
                                                    <td><span class="label label-info">Menawarkan</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#3a5068" data-height="20">2016-10-09 16:23:00</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>309</td>
                                                    <td>Sidak-Ride</td>
                                                    <td>Mas Riski</td>
                                                    <td>Kurnia Rizky</td>
                                                    <td>085 123 456 789</td>
                                                    <td><span class="label label-success">Berhasil</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#3a5068" data-height="20">2016-10-09 16:23:00</div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
                                    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Transaction</a>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4">
                            <!-- Info Boxes Style 2 -->
                            <div class="info-box bg-yellow">  
                                <span class="info-box-icon"><i class="ion ion-person"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Jumlah Driver</span>
                                    <span class="info-box-number">20</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <span class="progress-description">
                                        jumlah driver saat ini
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="ion ion-bag"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Transaction</span>
                                    <span class="info-box-number">220</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 20%"></div>
                                    </div>
                                    <span class="progress-description">
                                        Jumlah transaksi dalam tahun ini
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->


                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <footer class="main-footer" >
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
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="plugins/chartjs/Chart.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard2.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
    </body>
</html>