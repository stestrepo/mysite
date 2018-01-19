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
                <?php include("../sidebar.php"); ?> 
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
                                <a href="index.php">Vistor Approval </a>
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
// include("lv_header.php"); 
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<?php

  $r = $_GET['r'];
 $t = $_GET['t'];

  $sess_ccode = $_SESSION['ccode'];

$results1 = $mysqli1->query("SELECT * FROM visitor_flags where sanc_token='$t'  " );

if(mysqli_num_rows($results1) == 0)
{
    echo "<h1><font color='red'>Invalid URL</font></h1>";
    die();
}else{
    if($row = $results1->fetch_assoc()) {

         $sanc_flag = $row["sanc_flag"] ;
         $sanc_ccode = $row["sanc_ccode"] ;
        
    }
}

                                         

$results2 = $mysqli1->query("SELECT * FROM visitor_details where visitorid='$r' " );

// var_dump($results2);

if($row = $results2->fetch_assoc()) {
      $firstname = $row["firstname"] ;
    $lastname = $row["lastname"] ;
    $visitor_name = $firstname." ".$lastname;

    $vvvvv = $row['visitorid'];
    $institute = $row["institute"] ;
    $designation = $row["designation"] ;
    $lfrom = $row["lfrom"] ;
    $lto = $row["lto"] ;
    $honorarium = $row["honorarium"] ;
    $perdiem = $row["perdiem"] ;
    $travel_alw = $row["travel_alw"] ;
    $travel_amt = $row["travel_amt"] ;
    $seminar = $row["seminar"] ;
    $series = $row["series"] ;
	
    $title_visitor = $row["title"] ;
    $abstract = $row["abstract"] ;
    $accomo = $row["accomo"] ;
    $place = $row["place"] ;
    $acc_amt = $row["acc_amt"] ;
    $comment = $row["comment"] ;
    $applicant_ccode = $row["applicant_ccode"] ;
}
$cc=$applicant_ccode;
include('ppl.php');
// echo "<br>";
  $applicant_name=$name;



        include("../Leave/datediff.php");

        list ($period, $yr_diff, $mon_diff, $day_diff)=datediff($lfrom,$lto);

        $phpdatediff=$period+1;
      
    $total_diem = $phpdatediff * $perdiem;
    $total = $total_diem + $acc_amt + $travel_amt ;


     $mdy = explode('-',$lfrom);
    $month = $mdy[1];
    $year = $mdy[0];

// echo $_SESSION['ccode'];

if( $sess_ccode == 'KRA181' || $sess_ccode == $sanc_ccode)
{
	// echo $sanc_ccode;
if(  $sanc_flag == 0  )  
{


?>




<form method="post" class="form-horizontal" name="san" id="myForm" action="post/visitor_sanc_verify.php" onSubmit="return validate()"  >
    
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption"> Visitor Approval Sanction Form </div>
        </div>
        <div class="portlet-body form">
            <div class="form-body">
            <div class="row">
            <div class="col-md-6 container" >
                    
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Applicant Name </label>
                            <div class="col-md-9">
                                <input type="text" name="appliname"  readonly size="40" value="<?php echo $applicant_name; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Visitors Name  </label>
                            <div class="col-md-9">
                                <input type="text" name="name"  readonly size="40" value="<?php echo $visitor_name; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Visitors Affiliation  </label>
                            <div class="col-md-9">
                                <input type="text" name="aff"  readonly size="40" value="<?php echo $institute; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-2"> Visit </label>
                            <label class="control-label col-md-1"> From </label>
                            <div class="col-md-2">
                                <input type="text" name="type" size="10" readonly value="<?php echo $lfrom;?>" >
                            </div>
                            <label class="control-label col-md-1"> To </label>
                            <div class="col-md-2">
                                <input type="text" name="type" size="10" readonly value="<?php echo $lto;?>" >
                            </div>

                        </div>
                    </div>
                    <div class="row "><b>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Total duration </label>
                            <div class="col-md-4">
                                <input type="text" name="duration" size="5" readonly value="<?php echo $phpdatediff; ?>" > <label class="control-label " > days </label>
                            </div>
                        </div></b>
                    </div>
					
					<!-- 
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Proposed desk space </label>
                            <div class="col-md-4">
                                <input type="text" name="desk_space" size="20" readonly value="<?php //echo $desk_space; ?>" >
                            </div>
                        </div>
                    </div> -->

                    <br>

                    <font color="661199"> 
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Is Honorarium involved ? </label>
                            <div class="col-md-4">
                                <input type="text" name="honor" readonly size="20" value="<?php echo $honorarium; ?>">
                            </div>
                        </div>
                    </div>
                    <?php if($honorarium=="yes"){ ?>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Per-diem </label>
                            <div class="col-md-5">
                                <!-- <label class="control-label col-md-1" > Rs. </label> -->
                                <input type="text" name="deim" readonly size="30" value="<?php echo $perdiem; ?>">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    </font>

                    <br>

                    <font color="661919">
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Seminar </label>
                            <div class="col-md-4">
                                <input type="text" name="honor" readonly size="20" value="<?php echo $seminar; ?>">
                            </div>
                        </div>
                    </div>
                    <?php if($seminar=="yes"){ ?>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Series </label>
                            <div class="col-md-9">
                                <input type="text" name="series" readonly size="40" value="<?php echo $series; ?>">
                            </div>
                        </div>
                    </div>
					<!--
					<div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Venue </label>
                            <div class="col-md-9">
                                <input type="text" name="deim" readonly size="30" value="<?php //echo $venue; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Title </label>
                            <div class="col-md-9">
                                <input type="text" name="deim" readonly size="30" value="<?php //echo $title_visitor; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Abstract </label>
                            <div class="col-md-9">
                                <input type="text" name="deim" readonly size="30" value="<?php //echo $abstract; ?>">
                            </div>
                        </div>
                    </div> 
					-->
                    <?php } ?>
                    </font>

                    <br>


                    <font color="225522">
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Travel Allowance </label>
                            <div class="col-md-4">
                                <input type="text" name="honor" readonly size="20" value="<?php echo $travel_alw; ?>">
                            </div>
                        </div>
                    </div>
                    <?php if($travel_alw=="yes"){ ?>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Approximate Cost </label>
                            <div class="col-md-5">
                                <label class="control-label col-md-1" > Rs. </label>
                                <input type="text" name="deim" readonly size="30" value="<?php echo $travel_amt; ?>">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    </font>

                    <br>

                    <font color="225599">
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Accommodation Request </label>
                            <div class="col-md-4">
                                <input type="text" name="honor" readonly size="20" value="<?php echo $accomo; ?>">
                            </div>
                        </div>
                    </div>
                    <?php if($accomo=="yes"){ ?>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Place </label>
                            <div class="col-md-9">
                                <input type="text" name="deim" readonly size="30" value="<?php echo $place; ?>">
                            </div>
                        </div>
                    </div>
					<?php if($place=="External"){ ?>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Amount </label>
                            <div class="col-md-5">
                                <label class="control-label col-md-1" > Rs. </label>
                                <input type="text" name="deim" readonly size="30" value="<?php echo $acc_amt; ?>">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                    </font>

                    <br>
					<!--
                    <div class="row ">
                        <div class="form-group"><b>
                            <label class="control-label col-md-3"> Total Amount </label>
                            <div class="col-md-5">
                                <label class="control-label col-md-1" > Rs. </label>
                                <input type="text" name="total" readonly size="30" value="<?php //echo $total; ?>">
                            </div></b>
                        </div>
                    </div>
					-->


                    <br>
                    



                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3"> Your Decision </label>
                            <div class="col-md-9">
                                <td> 
                                <input type="radio" name="desc" value="1" onclick="javascript:showhide(this.value)"> Approve
                                <input type="radio"  name="desc" id ="desc" value="2" onclick ="javascript:showhide(this.value)"  > Reject
                                </td>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group">
                            <label class="control-label col-md-3" name="comment1" id="comment1" > Comment </label>
                            <div class="col-md-6">
                                <input type="text" name="comment" size="25" id="comment" onKeyDown="limitText(this.form.comment,this.form.countdown1,50);" onKeyUp="limitText(this.form.comment,this.form.countdown1,50);"   >
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="form-group control-label col-md-5 ">
                            <input class="" type="submit" name="submit" id="sub" value="Submit"> 
                        </label>
                        <input type="hidden" name="r" value="<?php echo $r;?>">
                        
                    </div>
            </div>
            </div>


            </div>
            </div>
        </div>
    </div>
</form>
    </div>


<script type='text/javascript'>
function showhide(data) {
    if(data=="1"){
        document.getElementById('comment').style.display="none";
        document.getElementById('comment1').style.display="none";
    }
    else if(data=="2"){
        document.getElementById('comment').style.display="block";
        document.getElementById('comment1').style.display="block";
    }
}


function validate(){

    var errors = [];
    var desc = document.forms["san"]["desc"].value;
    console.log(desc);
    var reason = document.forms["san"]["comment"].value;
    console.log(reason);

    if (desc == "") {
            errors[errors.length] = "Please select the decision . ";

    }
    
    if (desc == "2") {
        if (reason=='') {
            errors[errors.length] = "Please state the reason for rejecting. ";
        }
    }

    if (errors.length > 0) 
    {
        reportErrors(errors);
        return false;
    }
    return true;


}


function reportErrors(errors){
    var msg = "Please Enter Valid Data...\n";
    for (var i = 0; i<errors.length; i++) {
        var numError = i + 1;
        msg += "\n" + numError + ". " + errors[i];
    }
    alert(msg);
}




</script>


<?php


}else{
    echo "Decision already given.";
}

}else{
echo "You do not have the permission to perform this action. ";
}//end of ccode

?>





<!-- </div> -->
<!-- END DASHBOARD STATS 1-->
<?php include("lv_footer.php"); ?>  
