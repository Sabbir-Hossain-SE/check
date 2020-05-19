<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mr Rider App - Add Money Customer</title>
     
     
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

    
        
        
        
        <div class="wrapper">
         
         
            <?php include 'SIDEBAR.php'; ?>


           
      
      
      
      	<div class="main">
	




<div class="content with-top-banner">
	<div class="content-header no-mg-top">
		<i class="fa fa-newspaper-o"></i>
		<div class="content-header-title">Manual Transaction Customers</div>
	
</div>
               
             

             
    	
         <div class="panel">
             
             
      
         
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
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile Phone</th>
                                                <th>Money</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no = 1;
                                            foreach ($saldopelanggan as $d) {
                                                ?>
                                                <tr>
                                                    <td><p class="text-center"><?php
                                            echo $no;
                                            $no++
                                                ?></p></td>
                                                    <td><?php echo "$d->nama_depan $d->nama_belakang"; ?></td>
                                                    <td><?php echo "$d->email"; ?></td>
                                                    <td><?php echo "$d->no_telepon"; ?></td>
                                                    <td><?php echo "$ $d->saldo"; ?></td>
                                <td>
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah<?php echo $no; ?>">+</button>
                                               
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#kurang<?php echo $no; ?>">-</button>
                               </td>

                                                    <!-- Modal Penambahan -->
                                            <div class="modal fade" id="tambah<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="POST" action="<?php echo base_url(); ?>index.php/Manualtransaction/penambahanPelanggan">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">added Money to <?php echo "$d->nama_depan $d->nama_belakang"; ?></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Customer Name  &nbsp;= &nbsp;&nbsp;&nbsp;<b><?php echo "$d->nama_depan $d->nama_belakang"; ?>  </b>   
                                                                <br>
                                                                Current wallet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;&nbsp;&nbsp;<b><?php echo "$ $d->saldo"; ?>  </b>                                                                
                                                                <hr>
                                                                <div class="form-group">
                                                                    <label for="">Nominal Additions ($)</label>
                                                                    <input name="nominal" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="" required>
                                                                    <input name="id" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$d->id"; ?>">
                                                                    <input name="saldo" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$d->saldo"; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <input class="btn btn-primary" type="submit" value="Add Money">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Pengurangan -->
                                            <div class="modal fade" id="kurang<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="POST" action="<?php echo base_url(); ?>index.php/Manualtransaction/penguranganPelanggan">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Reduction of wallet from &nbsp;&nbsp;<?php echo "$d->nama_depan $d->nama_belakang"; ?></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Customer Name  &nbsp;= &nbsp;&nbsp;&nbsp;<b><?php echo "$d->nama_depan $d->nama_belakang"; ?>  </b>   
                                                                <br>
                                                                Current Wallet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;&nbsp;&nbsp;<b><?php echo "$ $d->saldo"; ?>  </b>                                                                
                                                                <hr>
                                                                <div class="form-group">
                                                                    <label for="">Nominal Reduction ($)</label>
                                                                    <input name="nominal" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="" required>
                                                                    <input name="id" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$d->id"; ?>">
                                                                    <input name="saldo" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$d->saldo"; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <input class="btn btn-primary" type="submit" value="Reduction">
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

