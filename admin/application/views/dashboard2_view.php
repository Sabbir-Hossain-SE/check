<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
      
        <title>Mr Rider App - All Transaction</title>
  
  
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
					<div class="logo-title">MR RIDER</div>
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
						<div class="user-name">MRRIDER</div>
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
            <!--HEADER dan SIDEBAR include-->
            <?php include 'SIDEBAR.php'; ?>
            
            
            
    <div class="main">
	


<div class="content with-top-banner">
	<div class="content-header no-mg-top">
		<i class="fa fa-newspaper-o"></i>
		<div class="content-header-title">Latest Transaction</div>
		
	</div>
	

	
	
	<div class="panel">
	    

          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box">
                                <div class="box-header">
                                    <h3 class="box-title">The last transaction made by the customer</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <span class="label label-info">Search</span> = <b><?php echo $Mencari[0]['jumlah']; ?></b> &nbsp&nbsp
                                    <span class="label label-info">Succeed</span> = <b><?php echo $Berhasil[0]['jumlah']; ?></b> &nbsp&nbsp
                                    <span class="label label-info">Start</span> = <b><?php echo $Memulai[0]['jumlah']; ?></b> &nbsp&nbsp
                                    <span class="label label-success">Finish</span> = <b><?php echo $Selesai[0]['jumlah']; ?></b> &nbsp&nbsp
                                    <span class="label label-danger">Canceled</span> = <b><?php echo $Dibatalkan[0]['jumlah']; ?></b> &nbsp&nbsp
                                    <span class="label label-danger">Rejected</span> = <b><?php echo $Ditolak[0]['jumlah']; ?></b> &nbsp&nbsp




                                    <br><br>

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Feature Order</th>
                                                <th>Customer</th>
                                                <th>Phone number</th>
                                                <th>Driver</th>
                                                <th>Status</th>
                                                <th>Payment</th>
                                                <th>Order time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // var_dump($transaksiDriver)
                                            foreach ($transaksi as $value) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $value->nomor; ?></td>
                                                    <td><?php echo $value->fitur; ?></td>
                                                    <td><?php echo $value->nama_depan . " " . $value->nama_belakang; ?></td>
                                                    <td><?php echo $value->no_telepon; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($value->id_driver == 'D0') {
                                                            echo '-';
                                                        } else if (strpos($value->id_driver, 'M') !== FALSE) {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>index.php/Listdriver/detilMmassage/<?php echo $value->id_driver ?>">
                                                                <?php echo $value->id_driver ?>
                                                            </a>
                                                            <?php
                                                        } else if (strpos($value->id_driver, 'T') !== FALSE) {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>index.php/Listdriver/detilMservice/<?php echo $value->id_driver ?>">
                                                                <?php echo $value->id_driver ?>
                                                            </a>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>index.php/Listdriver/detilDriver/<?php echo $value->id_driver ?>">
                                                                <?php echo $value->id_driver ?>
                                                            </a>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        switch ($value->status_transaksi) {
                                                            case 'Mencari':
                                                                echo '<span class="label label-info">Mencari</span>';
                                                                break;
                                                            case 'Menawarkan':
                                                                echo '<span class="label label-info">Menawarkan</span>';
                                                                break;
                                                            case 'Berhasil':
                                                                echo '<span class="label label-info">Berhasil</span>';
                                                                break;
                                                            case 'Ditolak':
                                                                echo '<span class = "label label-danger">Ditolak</span>';
                                                                break;
                                                            case 'Dibatalkan':
                                                                echo '<span class = "label label-danger">Dibatalkan</span>';
                                                                break;
                                                            case 'Selesai':
                                                                echo '<span class="label label-success">Selesai</span>';
                                                                break;
                                                            case 'Memulai':
                                                                echo '<span class="label label-info">Memulai</span>';
                                                                break;
                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($value->pakai_mpay == '0') {
                                                            echo 'cash';
                                                        } else {
                                                            echo 'mpay';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#3a5068" data-height="20"><?php echo $value->waktu; ?></div>
                                                    </td>
                                                </tr> 
                                                <?php
                                            }
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
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


           


           

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
                $("#example1").DataTable(
                {
                    "aaSorting": [[ 0, "desc" ]]
                }    
            );
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": false,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>
</html>
