<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>
    <head>
        
       <title>Mr Rider - Validate Driver <?php echo "$tittle"; ?></title>


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





 <div class="wrapper ">
	
	<?php include 'SIDEBAR.php'; ?>
	
	<div class="main">
		<div class="breadcrumb">
	<a href="<?php echo base_url(); ?>index.php/validatedriver/mfood"> Approval of Registrant <?php echo "$tittle"; ?></a> </div>




<div class="content with-top-banner">
	<div class="content-header no-mg-top">
		<i class="fa fa-newspaper-o"></i>
		<div class="content-header-title">Perform registration validation <?php echo "$tittle"; ?></div>
	
</div>
	

	
	
	

	
<div class="panel">
    
  <!-- isi konten -->	  
  
	<div class="row">
                       <div class="col-md-12">
                      	        
                            <div class="content-box">
                                
    
                                <div class="box-header">
                                    
                                </div>
                                <?php echo "$pesan"; ?>
                                <!-- /.box-header -->
                                <div class="box-body">
                    
                    
                     <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>

                                               
                                                <!--<th>ID Mitra</th>-->
                                                <th>Restaurant Name</th>
                                                <th>Restaurant Address</th>
                                                <th>Owner Name</th>
                                                <th>Email</th>
                                                <th>Owner Address</th>
                                                <th>Owner Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no = 1;
//                                            var_dump($pendaftar);
                                            foreach ($pendaftarmitra as $key) {
                                                ?>
                                                <tr>
                                                    <!--<td><?php // echo $key->idmitra; ?></td>-->
                                                    <td><?php echo $key->nama_resto; ?></td>
                                                    <td><?php echo $key->alamat; ?></td>
                                                    <td><?php echo $key->nama_pemilik; ?></td>
                                                    <td><?php echo $key->email_penanggung_jawab; ?></td>
                                                    <td><?php echo $key->alamat_pemilik; ?></td>
                                                    <td><?php echo $key->telepon_penanggung_jawab; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url()."index.php/Validatedriver/validasiMfood/$key->idmitra/$key->idresto"; ?>"><button type="button" class="btn btn-primary btn-sm">Validation</button></a>
                                                        <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#tolak"><span class="fa fa-trash-o"></span></button>
                                                    </td>


                                            <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Reject Registration</h4>
                                                        </div>
                                                        <form method="POST" action="<?php echo base_url(); ?>index.php/Validatedriver/tolakMfood">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="email" value="<?php echo $key->email_penanggung_jawab; ?>">
                                                                <input type="hidden" name="idmitra" value="<?php echo $key->idmitra; ?>">
                                                                <input type="hidden" name="idresto" value="<?php echo $key->idresto; ?>">
                                                                <label>Enter Rejection Reason Reason :</label>
                                                                <textarea class="form-control" rows="4" id="alasan" name="alasan"></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <input class="btn btn-primary" type="submit" value="Tolak Pendaftaran">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            </tr>
                                        <?php }
                                        ?>
                                        </tbody>
                                    </table>
                                    
                                    
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    
                    
                    <!-- /.row -->
		


</div>
<!-- /end panel-->







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
