<?php session_start(); ?>

<head>
        <meta charset="utf-8" />
        <title>Leave App | AppAdmin | CCCF | TIFR</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets_/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" /> 
        <link rel="stylesheet" type="text/css" href="../assets_/global/plugins/select2/select2.css"/>
        <link href="../assets_/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../assets_/global/plugins/select2/css/select2.css"/>
        <link href="../assets_/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link href="../assets_/global/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/global/plugins/dropzone/css/basic.css" rel="stylesheet" type="text/css" />
        <script src="../assets_/global/plugins/dropzone/dropzone.js" type="text/javascript"></script>
        <script src="../assets_/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>
</head>

<body >
    <div class="container "   >
<?php

// include("lv_header.php"); 
include("includes/config.php");
include("includes/config.leave.php");

// $cc = 'KSD001';
// $cc = 'SRA426';
echo $cc = $_GET['cc'];

    $dt = date('Y-m-d');
    $mdy = explode('-',$dt);
    $month = $mdy[1];
    $year = $mdy[0];

?>


<!-- <div class="row">
                <div class="col-md-6"> -->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>Document Uploader
            <!-- <h5>Upload documents for printing</h5> -->
        </div>
    </div>
    <div class="portlet light">
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="post/uploaddocvisitor.php" class="dropzone" id="my-dropzone">
                        <input type="hidden" name="ccode1" value="<?php echo $cc; ?>" >
                        <h3>Click here or Drag and Drop File to Upload</h3>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- </div> 
</div>  -->



<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>Uploaded documents
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <div id="tableHolder" > 







            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
      refreshTable();
    });

    function refreshTable(){
        $('#tableHolder').load('cmk_visitor.php?cc1=<?php echo $cc; ?>', function(){
           setTimeout(refreshTable, 1000);
        });
    }

// $(document).ready(function () {
//     // alert('reatttttttttttttt');
//     // setInterval(function () {
//     //     // alert('rea');
//     //     $("#tableHolder").load();
//     //     // alert('Loaded');
//     // }, 1000);

//     $('#tableHolder').load('cmk.php', function(){
//            setTimeout(refreshTable, 1000);
//         });

// });


</script>


<?php //include("lv_footer.php"); ?>



<script src="../assets_/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets_/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets_/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets_/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets_/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets_/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- <script src="../assets_/global/plugins/moment.min.js" type="text/javascript"></script> -->
<!-- <script src="../assets_/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script> -->
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
<!-- <script src="../assets_/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script> -->
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
<script src="../assets_/global/scripts/app.min.js" type="text/javascript"></script>
<script src="../assets_/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<script src="../assets_/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets_/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets_/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="../assets_/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets_/global/plugins/select2/js/select2.min.js"></script>
<script src="../assets_/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="../assets_/pages/scripts/components-select2.min.js" type="text/javascript"></script>
<!-- <script src="../assets_/global/plugins/moment.min.js" type="text/javascript"></script> -->
<!-- <script src="../assets_/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script> -->
<!-- <script src="../assets_/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script> -->
<script src="../assets_/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<!-- <script src="../assets_/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script> -->
<script src="../assets_/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
<!-- <script src="../assets_/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script> -->