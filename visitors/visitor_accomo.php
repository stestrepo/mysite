<?php
$loc = $_GET['loc'];
?>

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
                                <a href=" ">Visitor Accomodation </a>
                                <!-- <i class="fa fa-angle-right"></i> -->
                            </li>
                        </ul>
                        <div class="page-toolbar">
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
<?php 
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



<form method="post" class="form-horizontal" name="san" id="myForm" action="post/visitor_accomo.php" onSubmit="return validate()"  >
    
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption"> Visitor Accomodation Form </div>
        </div>
        <div class="portlet-body form">
            <div class="form-body">
            <div class="row">
	            <div class="col-md-6 container" >
	                    
	                    <?php
	                    	$results2 = $mysqli1->query( " SELECT * FROM `visitor_approve` WHERE `visitorid`='$loc' " );

	                    	if( $row = $results2 ->fetch_assoc() ){
	                    		$visitorid=$row['visitorid'];
	                    		$from=$row['from'];
	                    		$to=$row['to'];
                                $firstname=$row['firstname'];
                                $lastname=$row['lastname'];
	                    	}
	                    ?>
	                    <div class="row ">
	                        <div class="form-group">
	                            <label class="control-label col-md-3"> Visitor Name </label>
	                            <div class="col-md-9">
	                                <input type="text" name="name"  readonly size="30" value="<?php echo ucwords(strtolower($firstname." ".$lastname)); ?>">
	                            </div>
	                        </div>
	                    </div>
	                    <div class="row ">
	                        <div class="form-group">
	                            <label class="control-label col-md-3"> Dates </label>
	                            <div class="col-md-4">
	                                <input type="text" name="from" size="20" readonly value="<?php echo $from; ?>" > to 
	                                <input type="text" name="to" size="20" readonly value="<?php echo $to; ?>" >
	                            </div>
	                        </div>
	                    </div>

						<?php

                            $details=null;
                            $slab=null;
	                    	$results2 = $mysqli1->query( " SELECT * FROM `visitor_accom` WHERE `visitorid`='$loc' " );

	                    	if( $row = $results2 ->fetch_assoc() ){
	                    		$visitorid=$row['visitorid'];
	                    		$slab=$row['slab'];
	                    		$details=$row['details'];
	                    	}
	                    ?>

	                    <div class="row ">
	                        <div class="form-group">
	                            <label class="control-label col-md-3"> Slab </label>
	                            <div class="col-md-4">

	                                <select class="form-control select2 " data-placeholder="slab" tabindex="1" name="slab" id="slab" value="<?php echo $slab; ?>" >
                                            <option value="" <?php if($slab==""){ echo "selected"; } ?> > Select suggested slab </option>
                                            <option value="A type" <?php if($slab=="A type"){ echo "selected"; } ?> > A type  </option>
                                            <option value="B type" <?php if($slab=="B type"){ echo "selected"; } ?> > B type  </option>
                                            <option value="C type" <?php if($slab=="C type"){ echo "selected"; } ?> > C type  </option>
                                            <option value="D type" <?php if($slab=="D type"){ echo "selected"; } ?> > D type  </option>
                                        </select>


	                            </div>
	                        </div>
	                    </div>
	                    <div class="row ">
	                        <div class="form-group">
	                            <label class="control-label col-md-3"> Details </label>
	                            <div class="col-md-4">
	                                <!-- <textarea type="text" name="details" size="20"> -->
	                                	<?php //echo $details;?>
	                                <!-- </textarea>   -->

	                                <input type="text" name="details" size="20" value="<?php echo $details ?>">
	                            </div>
	                        </div>
	                    </div>
	                            <input class="" type="hidden" name="visitorid" id="visitorid" value="<?php echo $loc ?>"> 
                        
                        <div class="row" >
                            <div class="form-group control-label col-md-5 ">
                                <input class="" type="submit" name="submit" id="sub" value="Submit"> 
	                        </div>
	                    </div>
	            </div>
            </div>
            </div>
        </div>
    </div>
</form>

   <?php include("lv_footer.php"); ?>  
