<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
      
    <title>Mr Rider App - Edit Status Driver</title>
 
 
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
					<div class="logo-title">MR Rder</div>
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
		
		
            
            <div class="content-wrapper">
               
<div class="content with-top-banner">
	<div class="content-header no-mg-top">
		<i class="fa fa-newspaper-o"></i>
		<div class="content-header-title">Driver Detail Information</div>
	
</div>               

                <!-- Main content -->
    <div class="panel">
                
                
                    
                    
                   
                   <div class="row">
                        <div class="col-md-12">
                             <div class="content-box">
                                 
                         <div class="box-header">
                                

                                    

                                </div>
                                <!-- form start -->
                                <form action="<?php echo base_url(); ?>index.php/Listdriver/editStatus" method="POST" role="form" enctype="multipart/form-data">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4">
                                                <br><br><br>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">ID Driver</label>
                                                        <input name="iddriver" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['id']; ?>">
                                                        <input name="idkendaraan" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['idkendaraan']; ?>">
                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['id']; ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">First Name</label>
                                                        <input name="namadepan" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['nama_depan']; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Last Name</label>
                                                        <input name="namabelakang" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['nama_belakang']; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Identify Number</label>
                                                        <input name="ktp" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['no_ktp']; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Place of birth</label>
                                                        <input name="tempatlahir" type="text" class="form-control" placeholder="" value="<?php echo $driver[0]['tempat_lahir']; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Date of birth hh/bb/tttt)</label>
                                                        <input name="DOB" class="form-control" type="date" data-date="" data-date-format="DD MMMM YYYY" value="<?php echo $driver[0]['tgl_lahir']; ?>">
                                                        <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['tgl_lahir']; ?>" disabled>-->
                                                    </div>
                                                </div>


                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Phone</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['no_telepon']; ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Job</label>
                                                            <select class="form-control" name="job">
                                                            <?php $driver_jobs = $this->db->get('driver_job')->result();
                                                                foreach($driver_jobs as $jobs){
                                                            ?>

                                                            <option <?php if($driver[0]['driver_job']==$jobs->driver_job) echo 'selected' ?> value="<?php echo $jobs->id ?>" ><?php echo $jobs->driver_job ?></option>
                                                            <?php } ?>
                                                        </select>
                                                       <!--  <input type="hidden" name="job" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['driver_job']; ?>">
                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['driver_job']; ?>" disabled> -->
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="status" class="form-control" id="sel1">
                                                            <option value="1">Active</option>
                                                            <option value="2">Non Active</option>
                                                            <option value="3">Banned</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                            </div>
                                            <div class="col-md-4">
                                                <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->
                                                <img src="<?php echo base_url() . "/fotodriver/" . $driver[0]['foto'] ?>" class="img-responsive img-thumbnail" alt="Cinque Terre">

                                                <br>
                                                <div class="box-body">
                                                    <div class="form-group"><br>
                                                        <label for="">Edit Foto</label>
                                                        <input name="foto" type="hidden" value="<?php echo $driver[0]['foto']; ?>">
                                                        <input type="file" name="userfile" accept=".png, .jpg, .jpeg, .gif">
                                                    </div>
                                                </div>

                                                <h4 class="text-center">Vehicle Data</h4>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Vehicle Type</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['jenis_kendaraan']; ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Vehicle Brand</label>
                                                        <input name="merekkendaraan" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['merek']; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Vehicle Model</label>
                                                        <input name="tipekendaraan" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['tipe']; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Vehicle Number</label>
                                                        <input name="nokendaraan" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['nomor_kendaraan']; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Color</label>
                                                        <input name="warnakendaraan" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['warna']; ?>">
                                                    </div>
                                                </div>

                                                                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Driving license expire date</label>
                                                        <input name="Drivinglicenseexpiredate" class="form-control" type="date" data-date="" data-date-format="DD MMMM YYYY" value="<?php if($driverinfo[0]['Drivinglicenseexpiredate']) echo date('Y-m-d',strtotime($driverinfo[0]['Drivinglicenseexpiredate'])); ?>">
                                                        <input type="hidden" name="kendaraan" value="<?php echo $driverinfo[0]['kendaraan']; ?>">
                                                    </div>
                                                </div>

                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Registration expire date</label>
                                                        <input name="Registrationexpiredate" class="form-control" type="date" data-date="" data-date-format="DD MMMM YYYY" value="<?php if($driverinfo[0]['Registrationexpiredate']) echo date('Y-m-d',strtotime($driverinfo[0]['Registrationexpiredate'])); ?>">
                                                        
                                                    </div>
                                                </div>


                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Insurance expire date</label>
                                                        <input name="Insuranceexpiredate" class="form-control" type="date" data-date="" data-date-format="DD MMMM YYYY" value="<?php if($driverinfo[0]['Insuranceexpiredate']) echo date('Y-m-d',strtotime($driverinfo[0]['Insuranceexpiredate'])); ?>">
                                                        
                                                    </div>
                                                </div>

                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Tax token expire date</label>
                                                        <input name="Taxtokenexpiredate" class="form-control" type="date" data-date="" data-date-format="DD MMMM YYYY" value="<?php if($driverinfo[0]['Taxtokenexpiredate']) echo date('Y-m-d',strtotime($driverinfo[0]['Taxtokenexpiredate'])); ?>">
                                                        
                                                    </div>
                                                </div>

                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Fitness expire date</label>
                                                        <input name="Fitnessexpiredate" class="form-control" type="date" data-date="" data-date-format="DD MMMM YYYY" value="<?php if($driverinfo[0]['Fitnessexpiredate']) echo date('Y-m-d',strtotime($driverinfo[0]['Fitnessexpiredate'])); ?>">
                                                        
                                                    </div>
                                                </div>

                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Bkash number</label>
                                                        <input name="Bkashnumber" class="form-control"  value="<?php echo $driverinfo[0]['Bkashnumber']; ?>">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary">Save Profile</button>
                                        </div>
                                </form>
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

