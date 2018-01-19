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
        <title>Leave App | AppAdmin | CCCF | TIFR</title>
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
                                <a href=" ">Visitors details</a>
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
					<!-- <i class="fa fa-flask"></i> --> Current Visitors
					<?php $date=date('Y-m-d');			?>
				</div>
				<div class="tools">
				</div>
			</div>				

			<div class="portlet-body">						
				<table class="table table-bordered table-striped table-condensed table-hover order-column " id="sample_1_0" >	
					<thead>
						<tr>
							<th>Name</th>
							<th>Phone number</th>
							<th>Office Desk</th>
							<th>Dates</th>
							<th> </th>
						</tr>
					</thead>																	
					<tbody> 
						<?php
							$results2 = $mysqli1->query("SELECT * FROM `visitor_approve` WHERE `from`<='$date' AND `to`>='$date'  " );
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
									<td name="name_1" id="name_1"  > <?php echo ucwords(strtolower($value["firstname"]." ".$value["lastname"])) ;  ?>   </td>
									<td name="phone_1" id="phone_1"   > <?php if($phone){ echo $phone; }else{  ?> <a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Phone Number </button> </a> <?php  }  ?>   </td>
									<td name="desk_space_1" id="desk_space_1"   > <?php if($desk_space){ echo ucwords(strtolower($desk_space)); }else{  ?> <a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Desk space </button> </a> <?php  }  ?>    </td>
									<td name="to_1" id="to_1"  > <?php echo $value["from"] ." to ". $value["to"]  ?>   </td>
									<td> 
										<a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>  "> <button class="btn btn-xs green" type="button" > Edit </button> </a>
										<a href="post/vis_loc_remove.php?loc=<?php echo $value["visitorid"]; ?> "> <button class="btn btn-xs red" type="button" > Remove </button> </a>
									</td>
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
					<!-- <i class="fa fa-flask"></i> --> Future visitors 
					<?php  // $date=date('Y-m-d');			?>
				</div>
				<div class="tools">
				</div>
			</div>				

			<div class="portlet-body">						
				<table class="table table-bordered table-striped table-condensed table-hover order-column " id="sample_3_0" >	
					<thead>
						<tr>
							<th>Name</th>
							<th>Phone number</th>
							<th>Office Desk</th>
							<th>Dates</th>
							<th> </th>
						</tr>
					</thead>																	
					<tbody> 
						<?php
							$results2 = $mysqli1->query( " SELECT * FROM `visitor_approve` WHERE `from`>'$date' " );
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
									<td name="name_3" id="name_3"  > <?php echo ucwords(strtolower($value["firstname"]." ".$value["lastname"]))   ?>   </td>
									<td name="phone_3" id="phone_3"   > <?php if($phone){ echo $phone; }else{  ?> <a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Phone Number </button> </a> <?php  }  ?>   </td>
									<td name="desk_space_3" id="desk_space_3"   > <?php if($desk_space){ echo ucwords(strtolower($desk_space)); }else{  ?> <a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Desk space </button> </a> <?php  }  ?>     </td>
									<td name="to_3" id="to_3"  > <?php echo $value["from"] ." to ". $value["to"]  ?>   </td>
									<td> 
										<a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>  "> <button class="btn btn-xs green" type="button" > Edit </button> </a>
										<a href="post/vis_loc_remove.php?loc=<?php echo $value["visitorid"]; ?> "> <button class="btn btn-xs red" type="button" > Remove </button> </a>
									</td>
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
					<!-- <i class="fa fa-flask"></i> --> Ex-visitors
					<?php // $date=date('Y-m-d');			?>
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
							<th> </th>
						</tr>
					</thead>																	
					<tbody> 
						<?php
							$results2 = $mysqli1->query("SELECT * FROM `visitor_approve` WHERE `to`<'$date' ");
							// $results2 = $mysqli1->query("SELECT * FROM `visitor_approve` WHERE  `from`<='$date' AND `to`<='$date'  " );
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
									<td name="desk_space_2" id="desk_space_2" > <?php if($desk_space){ echo ucwords(strtolower($desk_space)); }else{  ?> <a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Desk space </button> </a> <?php  }  ?>      </td>
									<td name="to_2" id="to_2" > <?php echo $value["from"] ." to ". $value["to"]  ?>   </td>
									<td> 
										<a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>  "> <button class="btn btn-xs green" type="button" > Edit </button> </a>
										<a href="post/vis_loc_remove.php?loc=<?php echo $value["visitorid"]; ?> "> <button class="btn btn-xs red" type="button" > Remove </button> </a>
									</td>
									</tr>
									<?php
							}
						?>
					</tbody>								
				</table>
			</div>
		</div>
	</div>



<script type="text/javascript">
	$('#sample_1_0').DataTable( {	} );
	$('#sample_2_0').DataTable( {		} );
	$('#sample_3_0').DataTable( {		} );
</script>

<?php include("lv_footer.php"); ?>  