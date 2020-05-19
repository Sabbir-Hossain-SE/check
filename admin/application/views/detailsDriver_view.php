<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hostberkas = "/frontend/";
?>

<!DOCTYPE html>
<html>
    <head>
      
        <title>Mr Rider Validate Driver</title>


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
<a href="<?php echo base_url(); ?>index.php/Listpelanggan">Applicant Details</a> </div>
            
            <div class="content-wrapper">
               
<div class="content with-top-banner">
	<div class="content-header no-mg-top">
		<i class="fa fa-newspaper-o"></i>
		<div class="content-header-title">Applicant Details</div>
	
</div>               

                <!-- Main content -->
    <div class="panel">
                    
                    
                   <div class="row">
                        <div class="col-md-12">
                    
                           
                           <div class="content-box">
                               
                                <div class="box-header">
                                    <h3 class="box-title">Applicant Details</h3>

                                

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            
                                            <table class="table table-striped">
                                                <tr>
                                                    <td><b>First Name </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['nama_depan']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Last Name </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['nama_belakang']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Identity Number </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['no_ktp']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Place of birth </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['tempat_lahir']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Date of birth </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['tgl_lahir']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Phone Number </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['no_telepon']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Email </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['email']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Job </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['driver_job']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Application file</b></td>
                                                    <td><p class="text-left">: <a href="<?php echo $hostberkas; ?>asset/berkas_driver/berkas_lamaran/<?php echo $pendaftar[0]['berkas_lamaran']; ?>">View File</a></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>File Yourself</b></td>
                                                    <td><p class="text-left">: <a href="<?php echo $hostberkas; ?>asset/berkas_driver/berkas_cv/<?php echo $pendaftar[0]['berkas_cv']; ?>">View File</a></p></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                   
                                      

                                          
                                            
                                          <img src="<?php echo $hostberkas; ?>/asset/berkas_driver/foto_diri/<?php echo $pendaftar[0]['foto_diri']; ?>" class="img-responsive img-thumbnail" alt="Photo Profile"> 
                                      
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <a class="btn btn-primary" href="<?php echo base_url() ?>index.php/Validatedriver/validasiDriver/<?php echo $pendaftar[0]['nomor']; ?>/<?php echo "$tittle";?>" role="button" onclick="return confirm('Are you sure to validate the registration of the driver ?')">Validate Driver Registration</a>
                                            <a href="<?php echo base_url() ?>index.php/Validatedriver/tolakDriver/<?php echo $pendaftar[0]['nomor']; ?>/<?php echo "$tittle";?>"><button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to cancel the registration of the driver ?')"><span class="fa fa-trash-o"></span></button></a>
                                        </div>

                                    </div><br>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        
                        
                        <div class="col-md-12">
                             <div class="content-box">
                                 
                                <div class="box-header">
                                    <h3 class="box-title">Vehicle Detail Information</h3>

                                  

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
                                                    <td><b>Vehicle type </b></td>
                                                    <td><p class="text-left"> <?php echo $pendaftar[0]['jenis_kendaraan']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Vehicle Model </b></td>
                                                    <td><p class="text-left"> <?php echo $pendaftar[0]['tipe']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>No Vehicle </b></td>
                                                    <td><p class="text-left"> <?php echo $pendaftar[0]['nomor_kendaraan']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Color </b></td>
                                                    <td><p class="text-left"> <?php echo $pendaftar[0]['warna']; ?></p></td>
                                                </tr>
                                                                                                                                    <tr>
                                                    <td><b>Driving license expire date </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['Drivinglicenseexpiredate']; ?></p></td>
                                                </tr>

                                                <tr>
                                                    <td><b>Registration expire date </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['Registrationexpiredate']; ?></p></td>
                                                </tr>

                                                <tr>
                                                    <td><b>Insurance expire date </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['Insuranceexpiredate']; ?></p></td>
                                                </tr>                                               
                                                 <tr>
                                                    <td><b>Tax token expire date </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['Taxtokenexpiredate']; ?></p></td>
                                                </tr>

                                                <tr>
                                                    <td><b>Fitness expire date </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['Fitnessexpiredate']; ?></p></td>
                                                </tr>


                                                <tr>
                                                    <td><b>Bkash number </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['Bkashnumber']; ?></p></td>
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

                        <div class="col-md-6">
                             <div class="content-box">
                                 
                                 
                                <div class="box-header">
                                    <h3 class="box-title">Identity number</h3>
                                    <a target="_blank" class="btn btn-sm btn-info pull-right" href="<?php echo base_url() ?>index.php/Validatedriver/edit_driver_view/foto_ktp/<?php echo $pendaftar[0]['nomor']; ?>">Edit</a>

                                    

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->
                                    <img src="<?php echo $hostberkas; ?>asset/berkas_driver/foto_ktp/<?php echo $pendaftar[0]['foto_ktp']; ?>" class="img-responsive img-thumbnail center-block" alt="Cinque Terre">


                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                             <div class="content-box">
                                 
                                <div class="box-header">
                                    <h3 class="box-title">Driver license</h3>
                                    <a target="_blank" class="btn btn-sm btn-info pull-right" href="<?php echo base_url() ?>index.php/Validatedriver/edit_driver_view/foto_sim/<?php echo $pendaftar[0]['nomor']; ?>">Edit</a>

                                  

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->
                                    <img src="<?php echo $hostberkas; ?>asset/berkas_driver/foto_sim/<?php echo $pendaftar[0]['foto_sim']; ?>" class="img-responsive img-thumbnail center-block" alt="Cinque Terre">


                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-12">
                            
                             <div class="content-box">
                                 
                                <div class="box-header">
                                    <h3 class="box-title"> Photo Vehivle Permit</h3>
                                    <a target="_blank" class="btn btn-sm btn-info pull-right" href="<?php echo base_url() ?>index.php/Validatedriver/edit_driver_view/foto_stnk/<?php echo $pendaftar[0]['nomor']; ?>">Edit</a>

                                   

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->
                                    <img src="<?php echo $hostberkas; ?>asset/berkas_driver/foto_stnk/<?php echo $pendaftar[0]['foto_stnk']; ?>" class="img-responsive img-thumbnail center-block" alt="Cinque Terre">


                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>

                        <div class="col-md-12">
                            
                             <div class="content-box">
                                 
                                <div class="box-header">
                                    <h3 class="box-title">Vehicle Registration</h3>
                                    <a target="_blank" class="btn btn-sm btn-info pull-right" href="<?php echo base_url() ?>index.php/Validatedriver/edit_driver_view/Registration/<?php echo $pendaftar[0]['nomor']; ?>">Edit</a>

                                   

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->
                                    <img src="<?php echo $hostberkas; ?>asset/berkas_driver/Registration/<?php echo $pendaftar[0]['vRegistration']; ?>" class="img-responsive img-thumbnail center-block" alt="Cinque Terre">


                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>

                        <div class="col-md-12">
                            
                             <div class="content-box">
                                 
                                <div class="box-header">
                                    <h3 class="box-title">Vehicle TaxToken</h3>
                                    <a target="_blank" class="btn btn-sm btn-info pull-right" href="<?php echo base_url() ?>index.php/Validatedriver/edit_driver_view/TaxToken/<?php echo $pendaftar[0]['nomor']; ?>">Edit</a>

                                   

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->
                                    <img src="<?php echo $hostberkas; ?>asset/berkas_driver/TaxToken/<?php echo $pendaftar[0]['vTaxToken']; ?>" class="img-responsive img-thumbnail center-block" alt="Cinque Terre">


                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>

                        <div class="col-md-12">
                            
                             <div class="content-box">
                                 
                                <div class="box-header">
                                    <h3 class="box-title">Vehicle Insurance</h3>
                                    <a target="_blank" class="btn btn-sm btn-info pull-right" href="<?php echo base_url() ?>index.php/Validatedriver/edit_driver_view/Insurance/<?php echo $pendaftar[0]['nomor']; ?>">Edit</a>

                                   

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->
                                    <img src="<?php echo $hostberkas; ?>asset/berkas_driver/Insurance/<?php echo $pendaftar[0]['vInsurance']; ?>" class="img-responsive img-thumbnail center-block" alt="Cinque Terre">


                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>





                        <!-- /.col -->
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

