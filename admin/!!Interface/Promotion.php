<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIDAKANTAR - Promotion</title>
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
                        Promotion
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">General</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-style: solid;border-width: 3px;border-color: black;">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <img src="dist/img/banner.jpg" style="width: 700px; height: 300px;" class="center-block">
                                                        <p class="text-center">banner.jpg</p>
                                                    </div>

                                                    <div class="item">
                                                        <img src="dist/img/banner1.png" style="width: 700px; height: 300px;" class="center-block">
                                                        <p class="text-center">banner1.jpg</p>
                                                    </div>

                                                    <div class="item">
                                                        <img src="dist/img/banner2.jpg" style="width: 700px; height: 300px;" class="center-block">
                                                        <p class="text-center">banner2.jpg</p>
                                                    </div>
                                                    <div class="item">
                                                        <img src="dist/img/banner3.jpg" style="width: 700x; height: 300px;" class="center-block">
                                                        <p class="text-center">banner3.jpg</p>
                                                    </div>
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>

                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6"> 
                                            <div class="col-md-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama File</th>
                                                            <th>Fitur</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>banner.jpg</td>
                                                            <td>Sidak-Ride</td>
                                                            <td>                                                    
                                                                <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin membatalkan validasi top up tersebut ?')">
                                                                    <span class="glyphicon glyphicon-remove"></span>
                                                                </button>
                                                            </td>
                                                        </tr> 
                                                        <tr>
                                                            <td>2</td>
                                                            <td>banner1.jpg</td>
                                                            <td>Sidak-Ride</td>
                                                            <td>                                                    
                                                                <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin membatalkan validasi top up tersebut ?')">
                                                                    <span class="glyphicon glyphicon-remove"></span>
                                                                </button>
                                                            </td>
                                                        </tr> 
                                                        <tr>
                                                            <td>3</td>
                                                            <td>banner2.jpg</td>
                                                            <td>Sidak-Ride</td>
                                                            <td>                                                    
                                                                <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin membatalkan validasi top up tersebut ?')">
                                                                    <span class="glyphicon glyphicon-remove"></span>
                                                                </button>
                                                            </td>
                                                        </tr> 
                                                        <tr>
                                                            <td>4</td>
                                                            <td>banner3.jpg</td>
                                                            <td>Sidak-Ride</td>
                                                            <td>                                                    
                                                                <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin membatalkan validasi top up tersebut ?')">
                                                                    <span class="glyphicon glyphicon-remove"></span>
                                                                </button>
                                                            </td>
                                                        </tr> 

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="#">
                                                <br><br><label>Upload Banner Baru : </label>
                                                <input type="file" name="banner"><br>

                                                <label>jenis Promosi Fitur : </label><br>
                                                <select name="cars">
                                                    <option value="general">General</option>
                                                    <option value="Sidak-Ride">Sidak-Ride</option>
                                                    <option value="Sidak-Car">Sidak-Car</option>
                                                    <option value="Sidak-Food">Sidak-Food</option>
                                                    <option value="Sidak-Food">Sidak-Mart</option>
                                                    <option value="Sidak-Food">Sidak-Send</option>
                                                    <option value="Sidak-Food">Sidak-Massage</option>
                                                    <option value="Sidak-Food">M-Clean</option>
                                                    <option value="Sidak-Food">Sidak-Service</option>
                                                </select>
                                            </form>
                                            <br>
                                            <button type="button" class="btn btn-primary pull-left">Kirim</button>
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
