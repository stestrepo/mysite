<!DOCTYPE html>
<?php 
    session_start();
    $cc=$_SESSION['ccode'];
    $name=$_SESSION['name']; 

?>
<html lang="en" >
<!-- <html lang="en" dir="rtl" data-ng-app="MetronicApp"> -->
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>AppAdmin | CCCF | TIFR</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
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
        <link rel="shortcut icon" href="favicon.ico" /> </head>
        <link rel="stylesheet" type="text/css" href="../assets_/global/plugins/select2/select2.css"/>
        <!-- <link rel="stylesheet" type="text/css" href="../assets_/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/> -->
        <!-- <link rel="stylesheet" type="text/css" href="../assets_/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/> -->
        <!-- <link rel="stylesheet" type="text/css" href="../assets_/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/> -->
    <!-- END HEAD -->
    <body class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid  " ng-controller="AppController"  " ng-class="{'page-sidebar-closed': settings.layout.pageSidebarClosed}"  >
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
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <?php include("sidebar.php"); ?>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-placement="right" >
                        <?php include("modal.php") ?>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <!-- BEGIN STYLE CUSTOMIZER -->
                    <div class="theme-panel" data-placement="right" >
                        <?php include("theme.php") ?>
                    </div>
                    <!-- END STYLE CUSTOMIZER -->
                    <h1 class="page-title"> Dashboard  </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="../index.php">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="../index.php">Dashboard</a>
								<i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="">Visitor</a>
								
                            </li>
                        </ul>
                        <div class="page-toolbar">
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
               
                    <div class="row">
                        


                        <?php
                        
                        include('../includes/department_access.php');

                        ?>
						
						<?php
						if( $dept_arr[ $_SESSION['ou'] ][0]==1 )
                        {
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <a class="dashboard-stat dashboard-stat-light blue-soft" href="visitorslist.php">
                            <div class="visual">
                                <i class="fa fa-key"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                </div>
                                <div class="desc">
                                    <strong> Visitors list </strong>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php 
                        }
                        ?>


                        <?php
                        if( $_SESSION['deptadmin'] == 'TRUE' && $dept_arr[ $_SESSION['ou'] ][0]==1 )
                        {
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <a class="dashboard-stat dashboard-stat-light blue-soft" href="visitorsdetails.php">
                            <div class="visual">
                                <i class="fa fa-key"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                </div>
                                <div class="desc">
                                    <strong> Enter Visitor Details  </strong>
                                    <?php //echo $_SESSION['deptadmin'],$cc; ?>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php 
                        }
                        ?>


                        <?php
						if( $_SESSION['deptadmin'] == 'TRUE' && $dept_arr[ $_SESSION['ou'] ][0]==1 )
                        {
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <a class="dashboard-stat dashboard-stat-light blue-soft" href="seminardetails.php">
                            <div class="visual">
                                <i class="fa fa-key"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                </div>
                                <div class="desc">
                                    <strong> Enter Seminar Details  </strong>
                                    <?php //echo $_SESSION['deptadmin'],$cc; ?>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php 
                        }
                        ?>

                        <?php
                        if( ($_SESSION['deptadmin'] == 'TRUE' && $dept_arr[ $_SESSION['ou'] ][0]==1 ) || ( $role=="Faculty" && $dept_arr[ $_SESSION['ou'] ][0]==1 ) )
                        {
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <a class="dashboard-stat dashboard-stat-light blue-soft" href="accodo_details.php">
                            <div class="visual">
                                <i class="fa fa-key"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                </div>
                                <div class="desc">
                                    <strong> Enter Visitor Accomodation Details  </strong>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php 
                        }
                        ?>


                        <?php
                        if( ($_SESSION['deptadmin'] == 'TRUE' && $dept_arr[ $_SESSION['ou'] ][0]==1 ) || ( $role=="Faculty" && $dept_arr[ $_SESSION['ou'] ][0]==1 ) )
                        {
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <a class="dashboard-stat dashboard-stat-light blue-soft" href="report.php">
                            <div class="visual">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                </div>
                                <div class="desc">
                                    <strong> Report </strong>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php 
                        }
                        ?>


						


						<?php
						// if( $cc == 'KRA181' )
						if( $cc == 'KRA181'|| ( $_SESSION['deptadmin'] == 'TRUE' && $dept_arr[ $_SESSION['ou'] ][0]==1  ) || ( $role=="Faculty" && $dept_arr[ $_SESSION['ou'] ][0]==1 ) )
						{

						?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

						    <a class="dashboard-stat dashboard-stat-light blue-soft" href="visitor.php">
						    <div class="visual">
						        <i class="fa fa-columns"></i>
						    </div>
						    <div class="details">
						        <div class="number">
						        </div>
						        <div class="desc"><strong>
                                    Visitor Approval Request Form 
                                </strong>
						        </div>
						    </div>
						    </a>
						</div>

						<?php 
						}
						?>


                     
						
						
 
                        





                    </div>
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <?php include("../footer.php") ?>
        </div>


            <!--[if lt IE 9]>
            <script src="../assets_/global/plugins/respond.min.js"></script>
            <script src="../assets_/global/plugins/excanvas.min.js"></script> 
            <script src="../assets_/global/plugins/ie8.fix.min.js"></script> 
            <![endif]-->
            <!-- BEGIN CORE PLUGINS -->
            <script src="../assets_/global/plugins/jquery.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/js.cookie.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="../assets_/global/plugins/moment.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/morris/morris.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
            <script src="../assets_/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="../assets_/global/scripts/app.min.js" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="../assets_/pages/scripts/dashboard.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="../assets_/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
            <script src="../assets_/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
            <script src="../assets_/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
            <script src="../assets_/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
        
    </div>
    </body>
</html>