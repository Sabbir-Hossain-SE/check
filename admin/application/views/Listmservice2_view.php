<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
      
     <title>Mr Rider - Driver Information Details</title>
   
 <meta content="template gotaxi" name="keywords">
		<meta content="go-taxi" name="author">
		<meta content="On Demand All in One App Services Android" name="description">
	 <link rel="shortcut icon" href="/asset/images/favicon.png">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
      <style type = "text/css">
        
        .label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:focus,.label-primary[href]:hover{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:focus,.label-success[href]:hover{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:focus,.label-danger[href]:hover{background-color:#c9302c}.
        </style>
   <link rel="stylesheet" href="/asset/new_style/css/main.css">
   
      <link rel="stylesheet" href="/asset/new_style/css/animate.css"/>
      

 <script type="text/javascript" src="/asset/new_style/js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/asset/new_style/js/jquery.countTo.js"></script>
     <script type="text/javascript" src="/asset/new_style/js/moment.min.js"></script>
 <script type="text/javascript" src="/asset/new_style/js/app.js"></script>
    
   
    </head>
    <body>
       
       
       
<div class="top-nav">
	<div class="top-nav-box">
		<div class="side-nav-mobile"><i class="fa fa-bars"></i></div>
		<div class="logo-wrapper">
			<div class="logo-box">
				<img alt="go-taxi" src="/asset/images/favicon.png">
				<a href="/">
					<div class="logo-title">MR Rider</div>
				</a>
			</div>
		</div>
		
		
		<div class="top-nav-content">
			<div class="top-nav-box">
			    
			    
			    
					<div class="quick-link">
					<div class="link-icon"><i class="fa fa-bars"></i></div>
					<ul class="animated bounceInUp">
						<li><a href="<?php echo base_url(); ?>index.php/Listpelanggan"><i class="active fa fa-child"></i> List User</a></li>
						
						<li><a href="<?php echo base_url(); ?>index.php/helpcenter"><i class="active fa fa-question-circle"></i> Help Center</a></li>
						
						<li><a href="<?php echo base_url(); ?>index.php/Withdraw"><i class="active fa fa-share-square-o"></i>Driver Withdraw</a></li>
						
						<li><a href="<?php echo base_url(); ?>index.php/bannermfood"><i class="fa fa-shopping-bag"></i> Restaurant Promotion</a></li>
						
							<li><a href="<?php echo base_url(); ?>index.php/listmitramfood"><i class="fa fa-cutlery"></i>List Restaurant</a></li>
						
						<li><a href="<?php echo base_url(); ?>index.php/promotion"><i class="fa fa-paper-plane"></i> App Promotion</a></li>
					
					</ul>
				</div>
				
				
				<div class="global-search">
					<form class="form-inline">
					
						
					</form>
				</div>
				
			
				<div class="user-top-profile">
					<div class="user-image">
						<div class="user-on"></div>
						<img alt="go-ojek" src="/asset/images/profile.png">
					</div>
					<div class="clear">
						<div class="user-name">MR Rider</div>
						<div class="user-group">Administrator</div>
						<ul class="user-top-menu animated bounceInUp">
						    
							<li><a href="<?php echo base_url(); ?>index.php/manageadmin">Profile <div class="badge badge-yellow pull-right">1</div></a></li>
							
							
							<li><a href="<?php echo base_url(); ?>">Settings</a></li>
							
							
							<li><a href="<?php echo base_url(); ?>">Change Password</a></li>
							
							<li><a href="<?php echo base_url(); ?>index.php/signout">Logout</a></li>
						</ul>
					</div>
				</div>
				
				
				
				
			</div>
		</div>
		<div class="profile-nav-mobile"><i class="fa fa-cog"></i></div>
	</div>
</div>


<!-- limit body -->




        
        <div class="wrapper">
     
            <?php include 'SIDEBAR.php'; ?>
	<div class="main">
		<div class="breadcrumb">
<a href="<?php echo base_url(); ?>index.php/listdriver/driverMotor">   Detail Informasi Go-Service </a> </div>
            
            <div class="content-wrapper">
               
<div class="content with-top-banner">
	<div class="content-header no-mg-top">
		<i class="fa fa-newspaper-o"></i>
		<div class="content-header-title">Detail Go-Service information </div>
	
</div>               

                <!-- Main content -->
    <div class="panel">
                
                
                    
                    
           <div class="row">
                        <div class="col-md-12">
                             <div class="content-box">
                                <div class="box-header">
                                    


                                </div>
                              <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td><b>Driver ID </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['id']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>First Name </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['nama_depan']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Identify Number </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['no_ktp']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Place of Birth </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['tempat_lahir']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Date of birth </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['tgl_lahir']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Mobile Phone </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['no_telepon']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Email </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['email']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Wallet </b></td>
                                                    <td><p style="font-size:19px"class="text-left">: Rp <?php echo $saldo[0]['saldo']; ?></p>
                                                    <p style="font-size:10px" class="text-left"><?php echo $saldo[0]['update_at']; ?></p>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><b>Job </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['driver_job']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Rating </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['rating']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Status :</b></td>
                                                    <td><p class="text-left">: 
                                                            <?php
                                                            if ($driver[0]['status_user'] == 'aktif') {
                                                                echo '<span class="label label-success">Active</span>';
                                                            } else if ($driver[0]['status_user'] == 'non aktif') {
                                                                echo '<span class="label label-info">Non Active</span>';
                                                            } else if ($driver[0]['status_user'] == 'banned') {
                                                                echo '<span class="label label-danger">Banned</span>';
                                                            }
                                                            ?>
                                                        </p>
                                                        <a  href="<?php echo base_url();?>index.php/Listdriver/editMserviceForm/<?php echo $driver[0]['id']; ?>" style="margin-top: -28px"class="btn btn-primary btn-xs pull-right" href="#" role="button">Edit Status Driver</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="<?php echo base_url() . "fotomservice/" . $driver[0]['foto'] ?>" class="img-responsive img-thumbnail" alt="Cinque Terre">

                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            
                                        </div>

                                    </div><br>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    <!-- /.row -->
                </div><!-- section -->
                
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            

  </div>        
</div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
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

