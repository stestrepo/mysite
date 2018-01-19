<!DOCTYPE html>
<?php 
    session_start();
    $cc=$_SESSION['ccode'];
    $name=$_SESSION['name'];    
    $orgrole=$_SESSION['orgrole'];    
?>
<html lang="en"  >
    <head>
        <meta charset="utf-8" />
        <title>Vistor Information System | AppAdmin | CCCF | TIFR</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" /> -->
        <link href="../assets_/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets_/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" /> -->
        <link href="../assets_/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets_/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets_/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets_/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <!-- <link href="../assets_/global/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" /> -->
        <link href="../assets_/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets_/global/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets_/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets_/layouts/layout2/css/layout-rtl.min.css" rel="stylesheet" type="text/css" /> -->
        <link href="../assets_/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <!-- <link href="../assets_/layouts/layout2/css/themes/blue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" /> -->
        <link href="../assets_/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets_/layouts/layout2/css/custom-rtl.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- END THEME LAYOUT STYLES -->
        <!-- <link rel="shortcut icon" href="favicon.ico" />  -->


        <link rel="stylesheet" type="text/css" href="../assets_/global/plugins/select2/select2.css"/>
        <link href="../assets_/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../assets_/global/plugins/select2/css/select2.css"/>
        <link href="../assets_/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>







        </head>
        
    <!-- END HEAD -->
    <body class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid  "  >
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top container ">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner container   ">
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse" > </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <?php include("header.php") ?> 
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix container "> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="container ">
        <div class="page-container ">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <?php include("sidebar.php"); ?> 
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    
                    <!-- <h1 class="page-title"> Dashboard  </h1> -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="../index.php">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="../index.php">Dashboard </a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="index.php">Visitor </a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="">Seminar details</a>
                                <!-- <i class="fa fa-angle-right"></i> -->
                            </li>
                        </ul>
                        <div class="page-toolbar">
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
<?php 
//include("lv_header.php"); 
include("includes/config.php");
include("includes/config.leave.php");
?>
<?php $date=date('Y-m-d');?>
<?php $date12=date('Y-m-d');?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <link href="../assets_/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets_/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="../assets_/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="../assets_/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../assets_/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

	<div class="row">
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					Current Visitors
				</div>
				<div class="tools">
				</div>
			</div>				

			<div class="portlet-body">						
				<table class="table table-bordered table-striped table-condensed table-hover order-column " id="sample_1_0" >	
					<thead>
						<tr>
							<th>Name</th>
							<th>Link</th>
							<!-- <th>Seminar title</th>
							<th>Venue</th>
							<th>Date</th>
							<th>Seminar Action </th> -->
						</tr>
					</thead>																	
					<tbody> 
						<?php
							$results2 = $mysqli1->query("SELECT * FROM `visitor_approve` WHERE (`from`<='$date' AND `to`>='$date') and `seminar`='yes' " );
							foreach($results2 as $key => $value ){ 
								$visitorid = $value["visitorid"];
								$series = $value["series"];

								?>
								<tr>
									<td name="name_1" id="name_1"  > 
										<?php echo ucwords(strtolower($value["firstname"]." ".$value["lastname"])) ;  ?>   <br>
										<a href="seminar_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs blue" type="button" > Add new seminar </button> </a>

									</td>
									

										<?php

										$results1 = $mysqli1->query( " SELECT * FROM `seminar_details` WHERE `visitorid`='$visitorid' " );
										$count=0;
				                    	foreach($results1 as $key => $value ){ 
											$sem_title=null;
		                            		$venue=null;
		                            		$date=null;
		                            		$link=null;

		                            		$sem_title=$value['title'];
		                            		$venue=$value['venue'];
		                            		$date=$value['date'];
		                            		$seminarid=$value['seminar_id'];
		                            		$link=$value['link'];


										?>
										<!-- <tr><td> -->
										<?php if($count>0){ ?><td> <tr> <td> </td> <?php } ?>
										
											<td name="link" id="link" ><a href="<?php echo $link; ?>" target="new" > <?php if($link){ echo $series; }  ?> </a>  </td>
											
										
											<td> 
												<a href="seminar_location.php?loc=<?php echo $value["visitorid"]; ?>&sem=<?php echo $seminarid;  ?> "> <button class="btn btn-xs green" type="button" > Edit </button> </a>
												<a href="post/visitor_location_remove.php?loc=<?php echo $value["visitorid"]; ?>&sem=<?php echo $seminarid;  ?> "> <button class="btn btn-xs red" type="button" > Remove </button> </a>
											</td>
											
											<?php if($count>0){ ?> </tr></td> <?php } ?>

											<!-- <td name="sem_title" id="sem_title"> <?php //if($sem_title){ echo $sem_title; }  ?>   </td>
											<td name="venue" id="venue"> <?php //if($venue){ echo $venue; }  ?>   </td>
											<td name="date" id="date"> <?php //if($date){ echo $date; }  ?>   </td> -->

										<?php
											$count++;
										}

										?>

								</tr>
								<?php
							}
						?>
									



					</tbody>								
				</table>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					Future visitors 
				</div>
				<div class="tools">
				</div>
			</div>				

			<div class="portlet-body">						
				<table class="table table-bordered table-striped table-condensed table-hover order-column " id="sample_3_0" >	
					<thead>
						<tr>
							<th>Name</th>
							<th>Link</th>
							<!-- <th>Phone number</th>
							<th>Office Desk</th>
							<th>Dates</th>
							<th>Seminar Action</th> -->
						</tr>
					</thead>																	
					<tbody> 
						<?php
							$results2 = $mysqli1->query( " SELECT * FROM `visitor_approve` WHERE (`from`>'$date12' ) and `seminar`='yes'  " );
							foreach($results2 as $key => $value ){
								$visitorid = $value["visitorid"]; 
								$from = $value["from"]; 
								$series = $value["series"];
								?>

								<tr>
									<td name="name_1" id="name_1"  > 
										<?php echo ucwords(strtolower($value["firstname"]." ".$value["lastname"])) ;  ?>   <br>
										<a href="seminar_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs blue" type="button" > Add new seminar </button> </a>

									</td>
									

										<?php

										$results1 = $mysqli1->query( " SELECT * FROM `seminar_details` WHERE `visitorid`='$visitorid' " );
										$count=0;
				                    	foreach($results1 as $key => $value ){ 
											$sem_title=null;
		                            		$venue=null;
		                            		$date=null;
		                            		$link=null;

		                            		$link=$value['link'];
		                            		$sem_title=$value['title'];
		                            		$venue=$value['venue'];
		                            		$date=$value['date'];
		                            		$seminarid=$value['seminar_id'];


										?>
										<!-- <tr><td> -->
										<?php if($count>0){ ?><td> <tr> <td> </td> <?php } ?>
										
											<td name="link" id="link"><a href="<?php if($link){ echo $link; }  ?>" target="new" > <?php if($link){ echo $series; }  ?> </a>  </td>
											
										
											<td> 
												<a href="seminar_location.php?loc=<?php echo $value["visitorid"]; ?>&sem=<?php echo $seminarid;  ?> "> <button class="btn btn-xs green" type="button" > Edit </button> </a>
												<a href="post/visitor_location_remove.php?loc=<?php echo $value["visitorid"]; ?>&sem=<?php echo $seminarid;  ?> "> <button class="btn btn-xs red" type="button" > Remove </button> </a>
											</td>
											
											<!-- <td name="sem_title" id="sem_title"> <?php //if($sem_title){ echo $sem_title; }  ?>   </td>
											<td name="venue" id="venue"> <?php //if($venue){ echo $venue; }  ?>   </td>
											<td name="date" id="date"> <?php //if($date){ echo $date; }  ?>   </td> -->
											<?php if($count>0){ ?> </tr></td> <?php } ?>


										<?php
											$count++;
										}

										?>

								</tr>
									<?php
							}
						?>
					</tbody>								
				</table>
			</div>
		</div>
	</div>


		
	<!-- <div class="row">
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					Ex-visitors
				</div>
				<div class="tools">
				</div>
			</div>				

			<div class="portlet-body">						
				<table class="table table-bordered table-striped table-condensed table-hover order-column " id="sample_2_0" >	
					<thead>
						<tr>
							<th>Name</th>
							<th>Phone number</th>
							<th>Office Desk</th>
							<th>Dates</th>
						</tr>
					</thead>																	
					<tbody> 
						<?php
							$results2 = $mysqli1->query("SELECT * FROM `visitor_approve` WHERE `to`<'$date' and `seminar`='yes'  ");
							
							foreach($results2 as $key => $value ){
								$visitorid = $value["visitorid"];

								$results1 = $mysqli1->query( " SELECT * FROM `visitor_location` WHERE `visitorid`='$visitorid' " );
									$desk_space=null;
                            		$phone=null;

			                    	if( $row = $results1 ->fetch_assoc() ){
			                    		$visitorid=$row['visitorid'];
			                    		$desk_space=$row['desk_space'];
			                    		$phone=$row['phone'];
			                    	}
									?>
									<tr>
									<td name="name_2" id="name_2" > <?php echo ucwords(strtolower($value["firstname"]." ".$value["lastname"]))   ?>   </td>
									<td name="phone_2" id="phone_2" > <?php if($phone){ echo $phone; }else{  ?> <a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Phone Number </button> </a> <?php  }  ?>    </td>
									<td name="desk_space_2" id="desk_space_2" > <?php if($desk_space){ echo $desk_space; }else{  ?> <a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Desk space </button> </a> <?php  }  ?>      </td>
									<td name="to_2" id="to_2" > <?php echo $value["from"] ." to ". $value["to"]  ?>   </td>
									</tr>
									<?php
							}
						?>
					</tbody>								
				</table>
			</div>
		</div>
	</div> -->


</div>
<script type="text/javascript">
	$('#sample_2_0').DataTable( {		} );
	$('#sample_1_0').DataTable( {		} );
	$('#sample_3_0').DataTable( {		} );
</script>

<?php include("lv_footer.php"); ?>  