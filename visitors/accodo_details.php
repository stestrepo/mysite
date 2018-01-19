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
        <link href="../assets_/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets_/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets_/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
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
        
    <body class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid  "  >
        <div class="page-header navbar navbar-fixed-top container ">
            <div class="page-header-inner container   ">
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse" > </a>
                <?php include("header.php") ?> 
            </div>
        </div>
        <div class="clearfix container "> </div>
        <div class="container ">
        <div class="page-container ">
            <div class="page-sidebar-wrapper">
                <?php include("sidebar.php"); ?> 
            </div>
            <div class="page-content-wrapper">
                <div class="page-content">
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
                                <a href="">Accomodation details</a>
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
							<th>Accomodation slab</th>
							<th>Details</th>
							<th>Visit Period</th>
							<th> </th>
						</tr>
					</thead>																	
					<tbody> 
						<?php
							$results2 = $mysqli1->query("SELECT * FROM `visitor_approve` WHERE `from`<='$date' AND `to`>='$date'  " );
							foreach($results2 as $key => $value ){ 
								$visitorid = $value["visitorid"];
								$place = $value["place"];

								$results1 = $mysqli1->query( " SELECT * FROM `visitor_accom` WHERE `visitorid`='$visitorid' " );
									$slab=null;
                            		$details=null;

			                    	if( $row = $results1 ->fetch_assoc() ){
			                    		$visitorid=$row['visitorid'];
			                    		$slab=$row['slab'];
			                    		$details=$row['details'];
			                    	}

									?>
									<tr>
									<td name="name_1" id="name_1"  > <?php echo ucwords(strtolower($value["firstname"]." ".$value["lastname"])) ;  ?>   </td>


									<td name="slab_1" id="slab_1"   > <?php if($slab){ echo $slab; }else{  ?> <a href="visitor_accomo.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add slab </button> </a> <?php  }  ?>   </td>

									<td name="details_1" id="details_1"   > <?php if($details){ echo $details; }else{  ?> <a href="visitor_accomo.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Details </button> </a> <?php  }  ?>    </td>
									
									<td name="to_1" id="to_1"  > <?php echo $value["from"] ." to ". $value["to"]  ?>   </td>
									<td> 
										<a href="visitor_accomo.php?loc=<?php echo $value["visitorid"]; ?>  "> <button class="btn btn-xs green" type="button" > Edit </button> </a>
										<a href="post/visitor_accomo_remove.php?loc=<?php echo $value["visitorid"]; ?> "> <button class="btn btn-xs red" type="button" > Remove </button> </a>
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
					<!-- <i class="fa fa-flask"></i> --> Future Visitors
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
							<th>Accomodation slab</th>
							<th>Details</th>
							<th>Visit Period </th>
							<th> </th>
						</tr>
					</thead>																	
					<tbody> 
						<?php
							$results2 = $mysqli1->query("SELECT * FROM `visitor_approve` WHERE  `from`>'$date'  " );
							foreach($results2 as $key => $value ){ 
								$visitorid = $value["visitorid"];
								$place = $value["place"];

								$results1 = $mysqli1->query( " SELECT * FROM `visitor_accom` WHERE `visitorid`='$visitorid' " );
									$slab=null;
                            		$details=null;

			                    	if( $row = $results1 ->fetch_assoc() ){
			                    		$visitorid=$row['visitorid'];
			                    		$slab=$row['slab'];
			                    		$details=$row['details'];
			                    	}

									?>
									<tr>
									<td name="name_1" id="name_1"  > <?php echo ucwords(strtolower($value["firstname"]." ".$value["lastname"])) ;  ?>   </td>


									<td name="slab_1" id="slab_1"   > <?php if($slab){ echo $slab; }else{  ?> <a href="visitor_accomo.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add slab </button> </a> <?php  }  ?>   </td>

									<td name="details_1" id="details_1"   > <?php if($details){ echo $details; }else{  ?> <a href="visitor_accomo.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Details </button> </a> <?php  }  ?>    </td>
									
									<td name="to_1" id="to_1"  > <?php echo $value["from"] ." to ". $value["to"]  ?>   </td>
									<td> 
										<a href="visitor_accomo.php?loc=<?php echo $value["visitorid"]; ?>  "> <button class="btn btn-xs green" type="button" > Edit </button> </a>
										<a href="post/visitor_accomo_remove.php?loc=<?php echo $value["visitorid"]; ?> "> <button class="btn btn-xs red" type="button" > Remove </button> </a>
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
									$details=null;
                            		$phone=null;

			                    	if( $row = $results1 ->fetch_assoc() ){
			                    		$visitorid=$row['visitorid'];
			                    		$details=$row['details'];
			                    		$phone=$row['phone'];
			                    	}
									?>
									<tr>
									<td name="name_2" id="name_2" > <?php echo ucwords(strtolower($value["firstname"]." ".$value["lastname"]))   ?>   </td>
									<td name="phone_2" id="phone_2" > <?php if($phone){ echo $phone; }else{  ?> <a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Phone Number </button> </a> <?php  }  ?>    </td>
									<td name="details_2" id="details_2" > <?php if($details){ echo $details; }else{  ?> <a href="visitor_location.php?loc=<?php echo $value["visitorid"]; ?>"> <button class="btn btn-xs green" type="button" > Add Desk space </button> </a> <?php  }  ?>      </td>
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