<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       
        <title>Mr Rider App - Administrator</title>
      
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
				<div class="top-notification">
				<!--	<div class="notification-icon">
					<i class="fa fa-comments"></i>
					</div> -->
					<div class="notification-icon">
						<div class="notification-badge bounceInDown animated timer" data-from="0" data-to="<?php echo $jumlahDriverOn[0]['jumlah']; ?>"></div>
					
						<i class="ion-android-map"></i>
						<div class="notification-wrapper animated bounceInUp">
							<div class="notification-header">Driver Online <span class="notification-count"><?php echo $jumlahDriverOn[0]['jumlah']; ?></span></div>
							
							
						<!--	<div class="notification-body">
								<a class="notification-list" href="">
									<div class="notification-image">
										<img alt="gotaxi" src="/asset/new_style/images/photo_female_1.jpg">
									</div>
									<div class="notification-content">
										<div class="notification-text"><strong>Mark</strong> sent you a message</div>
										<div class="notification-time">1 minutes ago</div>
									</div>
								</a>
								<a class="notification-list" href="">
									<div class="notification-image">
										<img alt="gotaxi" src="/asset/new_style/images/photo_female_2.jpg">
									</div>
									<div class="notification-content">
										<div class="notification-text"><strong>Lisa</strong> sent you a message</div>
										<div class="notification-time">1 minutes ago</div>
									</div>
									
									 <span class="timer" data-from="0" data-to="<?php echo $jumlahDriverWork[0]['jumlah']; ?>"</span>
								</a>
							</div> 
							<div class="notification-footer">
								<a href="">See all notifications</a>
							</div>-->
						</div>
					</div>
					<div class="notification-icon">
						<div class="notification-badge bounceInDown animated timer" data-from="0" data-to="<?php echo $jumlahDriverWork[0]['jumlah']; ?>"><?php echo $jumlahDriverWork[0]['jumlah']; ?></div>
						<i class="fa fa-bell"></i>
						
						<div class="notification-wrapper animated bounceInUp">
							<div class="notification-header">Driver Working <span class="notification-count"><?php echo $jumlahDriverWork[0]['jumlah']; ?></span></div>
						
						
						<!--	<div class="notification-body">
								<a class="notification-list" href="">
									<div class="notification-image">
										<img alt="gotaxi" src="/asset/new_style/images/photo_female_1.jpg">
									</div>
									<div class="notification-content">
										<div class="notification-text"><strong>Lady</strong> sent you a email</div>
										<div class="notification-time">1 minutes ago</div>
									</div>
								</a>
								<a class="notification-list" href="">
									<div class="notification-image">
										<img alt="gotaxi" src="/asset/new_style/images/photo_female_2.jpg">
									</div>
									<div class="notification-content">
										<div class="notification-text"><strong>Lisa</strong> sent you a email</div>
										<div class="notification-time">1 minutes ago</div>
									</div>
								</a>
								<a class="notification-list" href="">
									<div class="notification-image">
										<img alt="gotaxi" src="/asset/new_style/images/photo_female_3.jpg">
									</div>
									<div class="notification-content">
										<div class="notification-text"><strong>Parker</strong> sent you a email</div>
										<div class="notification-time">1 minutes ago</div>
									</div>
								</a>
								<a class="notification-list" href="">
									<div class="notification-image">
										<img alt="gotaxi" src="/asset/new_style/images/photo_female_4.jpg">
									</div>
									<div class="notification-content">
										<div class="notification-text"><strong>Sophie</strong> sent you a email</div>
										<div class="notification-time">1 minutes ago</div>
									</div>
								</a>
								<a class="notification-list" href="">
									<div class="notification-image">
										<img alt="gotaxi" src="/asset/new_style/images/photo_female_5.jpg">
									</div>
									<div class="notification-content">
										<div class="notification-text"><strong>Sophie</strong> sent you a email</div>
										<div class="notification-time">1 minutes ago</div>
									</div>
								</a>
								<a class="notification-list" href="">
									<div class="notification-image">
										<img alt="gotaxi" src="/asset/new_style/images/photo_male_1.jpg">
									</div>
									<div class="notification-content">
										<div class="notification-text"><strong>Mark</strong> sent you a email</div>
										<div class="notification-time">1 minutes ago</div>
									</div>
								</a>
							</div>
							<div class="notification-footer">
								<a href="">See all notifications</a>
							</div>-->
						</div>
					</div>
				</div>
				
				
				<div class="user-top-profile">
					<div class="user-image">
						<div class="user-on"></div>
						<img alt="gotaxi" src="/asset/images/profile.png">
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
		<div class="breadcrumb">
		    
	<a href="<?php echo base_url(); ?>">Dashboard</a> </div>
	
<!--	Changes to template admin panel version 1.2 in the process of updating to Codecanyon.net. Notifications will be lost when the update is successful. Thank you</div>-->


<div class="top-banner">
	<div class="top-banner-title">Dashboard</div>
	<div class="top-banner-subtitle">Welcome back, Admin, <i class="fa fa-map-marker"></i> Chashara, Narayangonj</div>
</div>


<div class="content with-top-banner">
	<div class="content-header no-mg-top">
      <i class="fa fa-rocket"></i>
		<div class="content-header-title">AUTHOR INFORMATION</div>
		
	</div>
	

	
	
	<div class="panel">
		<div class="row">
		    
		                
		<div class="col-md-3 card-wrapper">
		    <div class="card">
				<i class="ion ion-person"></i>
					
				<div class="clear">
						<div class="card-title">
						    
						 <span class="timer" data-from="0" data-to="<?php echo $jumlahPelanggan1[0]['jumlah'] + $jumlahPelanggan2[0]['jumlah'] + $jumlahPelanggan3[0]['jumlah']; ?>"</span>
						       
						 </div>
					
						<div class="card-subtitle">Total User</div>
						
				   <div class="card-menu">
					<ul>
				
                       <span class="label label-success">Active</span> = <?php echo $jumlahPelanggan1[0]['jumlah']; ?> &nbsp&nbsp
                      <span class="label label-info">Non-Active</span> = <?php echo $jumlahPelanggan2[0]['jumlah']; ?> &nbsp&nbsp
                      <span class="label label-danger">Banned</span> = <?php echo $jumlahPelanggan3[0]['jumlah']; ?> </span>
					</ul>
			      </div>
			
		     </div>
		   </div>
		
		</div>
	
	
	<!-- menu -->
	
		<div class="col-md-3 card-wrapper">
		    <div class="card">
				<i class="fa fa-taxi"></i>
					
				<div class="clear">
						<div class="card-title">
						    
						 <span class="timer" data-from="0" data-to="<?php echo $jumlahDriver1[0]['jumlah'] + $jumlahDriver2[0]['jumlah'] + $jumlahDriver3[0]['jumlah']; ?>"</span>
						       
						 </div>
					
						<div class="card-subtitle">Total Driver</div>
						
				   <div class="card-menu">
					<ul>
				
                       <span class="label label-success">Active</span> = <?php echo $jumlahDriver1[0]['jumlah']; ?> &nbsp&nbsp
                                        <span class="label label-info">Non-Active</span> = <?php echo $jumlahDriver2[0]['jumlah']; ?> &nbsp&nbsp
                                        <span class="label label-danger">Banned</span> = <?php echo $jumlahDriver3[0]['jumlah']; ?> 
                                    </span>
                                    
					</ul>
			      </div>
			
		     </div>
		   </div>
		
		</div>
		
			
	<!-- menu -->
	
		<div class="col-md-3 card-wrapper">
		    <div class="card">
				<i class="ion ion-bag"></i>
					
				<div class="clear">
						<div class="card-title">
						    
						 <span class="timer" data-from="0" data-to="<?php echo $transaksiBulan[0]['jumlah']; ?>"</span>
						       
						 </div>
					
						<div class="card-subtitle">Monthly transaction</div>
						
				  
			
		     </div>
		   </div>
		
		</div>
		
	
		<!-- menu -->
	
		<div class="col-md-3 card-wrapper">
		    <div class="card">
				<i class="ion ion-speedometer"></i>
					
				<div class="clear">
						<div class="card-title">
						    
						 <span class="timer" data-from="0" data-to="<?php echo $transaksiHarian[0]['jumlah']; ?>"</span>
						       
						 </div>
					
						<div class="card-subtitle">Today's transaction</div>
			
			
		     </div>
		   </div>
		
		</div>
		
	

	
			<!-- menu -->
	
		<div class="col-md-3 card-wrapper">
		    <div class="card">
				<i class="ion-android-map"></i>
					
				<div class="clear">
						<div class="card-title">
						    
						 <span class="info-box-number"><?php echo $jumlahDriverOn[0]['jumlah']; ?></span>
						       
						 </div>
					
						<div class="card-subtitle">Driver Online</div>
			
			
		     </div>
		   </div>
		
		</div>
		
		
		
	<!-- menu -->
	
		<div class="col-md-3 card-wrapper">
		    <div class="card">
				<i class="ion-android-alarm-clock"></i>
					
				<div class="clear">
						<div class="card-title">
						    
						 <span class="timer" data-from="0" data-to="<?php echo $jumlahDriverWork[0]['jumlah']; ?>"</span>
						       
						 </div>
					
						<div class="card-subtitle">Driver Working</div>
			
			
		     </div>
		   </div>
		
		</div>		
		
		
	</div>
 </div>



<div class="panel">
		<div class="row">
		   
		    
		    <div class="col-md-12">
                 <div class="content-header">
					<i class="fa fa-newspaper-o"></i>
					<div class="content-header-title">Latest Transaction <?php echo date("M"); ?> <?php echo date("Y"); ?></div>
				</div>
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="content-box">
                        
                                
                                
                                <!-- /.box-header -->
                                <div class="content-box">
                                    <div class="table-responsive">
                                       <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID Transaction</th>
                                                    <th>Order Feature</th>
                                                    <th>Customer</th>
                                                    <th>Phone Number</th>
                                                    <th>Driver</th>
                                                    <th>Status</th>
                                                    <th>Payment</th>
                                                    <th>time order</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php
                                                // var_dump($transaksiDriver)
                                                foreach ($transaksiDriver as $value) {
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
                                                                case 'Search':
                                                                    echo '<span class="label label-info">Search</span>';
                                                                    break;
                                                                case 'Menawarkan':
                                                                    echo '<span class="label label-info">Offer</span>';
                                                                    break;
                                                                    
                                                                case 'Succeed':
                                                                    echo '<span class="label label-info">On Process</span>';
                                                                    break;
                                                                case 'Rejected':
                                                                    echo '<span class = "label label-danger">Rejected</span>';
                                                                    break;
                                                                case 'Canceled':
                                                                    echo '<span class = "label label-danger">Canceled</span>';
                                                                    break;
                                                                case 'Finish':
                                                                    echo '<span class="label label-success">Complete</span>';
                                                                    break;
                                                                    
                                                                    
                                                                case 'Start':
                                                                    echo '<span class="label label-info">Start</span>';
                                                                    break;
                                                                default:
                                                                    break;
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($value->pakai_mpay == '0') {
                                                                echo 'Cash';
                                                            } else {
                                                                echo 'Wallet';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div><?php echo $value->waktu; ?></div>
                                                        </td>
                                                    </tr> 
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix">

                                    <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
                                    <a href="<?php echo base_url(); ?>index.php/Dashboard/allTransaction" class="btn btn-sm btn-default btn-flat pull-right">View All Transaction</a>
                                    <a href="<?php echo base_url(); ?>index.php/Dashboard/cancelTransaction" class="btn btn-sm btn-default btn-flat pull-right">Cancel Order</a>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
		 	
		</div>
	</div>




<!-- menu -->

	<div class="panel">
		<div class="row">
			<div class="col-md-8">
				<div class="content-header">
				    
					<i class="fa fa-signal"></i>
					<div class="content-header-title">Monthly Recap Transaction</div>
				</div>
				<div class="content-box">
					<div class="content-box-header">
						<div class="header-menu active">Transaction <?php echo date("Y"); ?></div>
					
						
						
					</div>
					<div class="line-chart-wrapper">
					
					
					 <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" style="height: 200px;"></canvas>
                    </div>
                                            
				
				
					</div>
					
					
					
				</div>
			</div>
			
			
			
			<div class="col-md-4">
				<div class="content-header">
					<i class="fa fa-pie-chart"></i>
					<div class="content-header-title">Detail Status Transaction</div>
				</div>
				<div class="content-box">
				    
				 <div class="row">
                                        <div class="col-md-12">

                                            <canvas id="pieChart" style="height: 169px; width: 339px;" height="152" width="305"></canvas>
                                            <br>
                                            <p class="text-center">
                                                Transaction Details <?php echo date('F'); ?><br> 
                                                Total Transactions : <b><?php echo $transaksiBulan[0]['jumlah']; ?></b>
                                            </p>
                                        </div>
                                        <!-- /.col -->
                                    </div>
					
					
					<div class="donut-chart-legend">
						<div class="legend-list">
							<div class="legend-bullet green"></div>
							<div class="legend-title">Finish</div>
						</div>
						<div class="legend-list">
							<div class="legend-bullet red"></div>
							<div class="legend-title">Canceled</div>
						</div>
						<div class="legend-list">
							<div class="legend-bullet blue"></div>
							<div class="legend-title">Search</div>
						</div>
						<div class="legend-list">
							<div class="legend-bullet yellow"></div>
							<div class="legend-title">Rejected</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
		
		</div>
	</div>







  </div>
  

<!-- footer-->
  <div class="breadcrumb">
      <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.2
                </div>
                
 <strong>Copyright &copy; 2017 - <?php echo date("Y"); ?> | <a href="http://mrriderbd.com">MR Rider</a>.</strong> All Rights Reserved.</strong>
</div>
<!--end footer-->


</div>






        
      
      
       
        <!-- SlimScroll 1.3.0 -->
        <script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="<?php echo base_url(); ?>plugins/chartjs/Chart.min.js"></script>
      
       
        

<script>
            $(function () {

                'use strict';

                /* ChartJS
                 * -------
                 * Here we will create a few charts using ChartJS
                 */

                //-----------------------
                //- MONTHLY SALES CHART -
                //-----------------------

                // Get context with jQuery - using jQuery's .get() method.
                var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
                // This will get the first returned node in the jQuery collection.
                var salesChart = new Chart(salesChartCanvas);

                var salesChartData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
                    datasets: [
                        {
                            label: "2016",
                            fillColor: "rgba(60,141,188,0.9)",
                            strokeColor: "rgba(60,141,188,0.8)",
                            pointColor: "#3b8bba",
                            pointStrokeColor: "rgba(60,141,188,1)",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(60,141,188,1)",
                            data: [
<?php echo $bln1[0]['jumlah']; ?>, 
<?php echo $bln2[0]['jumlah']; ?>, 
<?php echo $bln3[0]['jumlah']; ?>, 
<?php echo $bln4[0]['jumlah']; ?>, 
<?php echo $bln5[0]['jumlah']; ?>, 
<?php echo $bln6[0]['jumlah']; ?>, 
<?php echo $bln7[0]['jumlah']; ?>, 
<?php echo $bln8[0]['jumlah']; ?>, 
<?php echo $bln9[0]['jumlah']; ?>, 
<?php echo $bln10[0]['jumlah']; ?>, 
<?php echo $bln11[0]['jumlah']; ?>, 
<?php echo $bln12[0]['jumlah']; ?>
                    ]
                }
            ]
        };

        var salesChartOptions = {
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: false,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: false,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true
        };

        //Create the line chart
        salesChart.Line(salesChartData, salesChartOptions);

        //---------------------------
        //- END MONTHLY SALES CHART -
        //---------------------------

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
            {
                value: <?php echo $Menawarkan[0]['jumlah']; ?>,
                color: "#00a65b",
                highlight: "#E3F2E1",
                label: "Offer"
            },
            {
                value: <?php echo $Mencari[0]['jumlah']; ?>,
                color: "#472bad",
                highlight: "#E3F2E1",
                label: "Search"
            },
            {
                value: <?php echo $Berhasil[0]['jumlah']; ?>,
                color: "#0ba00d",
                highlight: "#E3F2E1",
                label: "Complete"
            },
            {
                value: <?php echo $Ditolak[0]['jumlah']; ?>,
                color: "#f43f3f",
                highlight: "#E3F2E1",
                label: "Rejected"
            },
            {
                value: <?php echo $Dibatalkan[0]['jumlah']; ?>,
                color: "#f43f3f",
                highlight: "#E3F2E1",
                label: "Rejected"
            },
            {
                value: <?php echo $Memulai[0]['jumlah']; ?>,
                color: "#38a0b9",
                highlight: "#E3F2E1",
                label: "Memulai"
            },
            {
                value: <?php echo $Selesai[0]['jumlah']; ?>,
                color: "#0ba00d",
                highlight: "#E3F2E1",
                label: "Complete"
            }
        ];
        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 1,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: false,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
            //String - A tooltip template
            tooltipTemplate: "<%=value %> <%=label%>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
        //-----------------
        //- END PIE CHART -
        //-----------------

        /* jVector Maps
         * ------------
         * Create a world map with markers
         */
        $('#world-map-markers').vectorMap({
            map: 'world_mill_en',
            normalizeFunction: 'polynomial',
            hoverOpacity: 0.7,
            hoverColor: false,
            backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: 'rgba(210, 214, 222, 1)',
                    "fill-opacity": 1,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": 0.7,
                    cursor: 'pointer'
                },
                selected: {
                    fill: 'yellow'
                },
                selectedHover: {}
            },
            markerStyle: {
                initial: {
                    fill: '#3a5068',
                    stroke: '#111'
                }
            },
            markers: [
                {latLng: [41.90, 12.45], name: 'Vatican City'},
                {latLng: [43.73, 7.41], name: 'Monaco'},
                {latLng: [-0.52, 166.93], name: 'Nauru'},
                {latLng: [-8.51, 179.21], name: 'Tuvalu'},
                {latLng: [43.93, 12.46], name: 'San Marino'},
                {latLng: [47.14, 9.52], name: 'Liechtenstein'},
                {latLng: [7.11, 171.06], name: 'Marshall Islands'},
                {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
                {latLng: [3.2, 73.22], name: 'Maldives'},
                {latLng: [35.88, 14.5], name: 'Malta'},
                {latLng: [12.05, -61.75], name: 'Grenada'},
                {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
                {latLng: [13.16, -59.55], name: 'Barbados'},
                {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
                {latLng: [-4.61, 55.45], name: 'Seychelles'},
                {latLng: [7.35, 134.46], name: 'Palau'},
                {latLng: [42.5, 1.51], name: 'Andorra'},
                {latLng: [14.01, -60.98], name: 'Saint Lucia'},
                {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
                {latLng: [1.3, 103.8], name: 'Singapore'},
                {latLng: [1.46, 173.03], name: 'Kiribati'},
                {latLng: [-21.13, -175.2], name: 'Tonga'},
                {latLng: [15.3, -61.38], name: 'Dominica'},
                {latLng: [-20.2, 57.5], name: 'Mauritius'},
                {latLng: [26.02, 50.55], name: 'Bahrain'},
                {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
            ]
        });

        /* SPARKLINE CHARTS
         * ----------------
         * Create a inline charts with spark line
         */

        //-----------------
        //- SPARKLINE BAR -
        //-----------------
        $('.sparkbar').each(function () {
            var $this = $(this);
            $this.sparkline('html', {
                type: 'bar',
                height: $this.data('height') ? $this.data('height') : '30',
                barColor: $this.data('color')
            });
        });

        //-----------------
        //- SPARKLINE PIE -
        //-----------------
        $('.sparkpie').each(function () {
            var $this = $(this);
            $this.sparkline('html', {
                type: 'pie',
                height: $this.data('height') ? $this.data('height') : '90',
                sliceColors: $this.data('color')
            });
        });

        //------------------
        //- SPARKLINE LINE -
        //------------------
        $('.sparkline').each(function () {
            var $this = $(this);
            $this.sparkline('html', {
                type: 'line',
                height: $this.data('height') ? $this.data('height') : '90',
                width: '100%',
                lineColor: $this.data('linecolor'),
                fillColor: $this.data('fillcolor'),
                spotColor: $this.data('spotcolor')
            });
        });
    });
    
</script>

         
    </body>
</html>
