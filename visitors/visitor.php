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
        <title>Visitor Information App | AppAdmin | CCCF | TIFR</title>
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
                                <a href="index.php">Vistor Approval Form</a>
                                <!-- <i class="fa fa-angle-right"></i> -->
                            </li>
                        </ul>
                        <div class="page-toolbar">
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->







<?php 
// include("lv_header.php"); 
include("ppl.php") ; 

$dt = date('Y-m-d');
    $mdy = explode('-',$dt);
    $month = $mdy[1];
    $year = $mdy[0];

?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<form action="post/visitor.php" method="post" class="form-horizontal" name="acad" enctype="multipart/form-data" onSubmit="return validate()"  >
<!-- <form action="" method="post" class="form-horizontal" name="acad" enctype="multipart/form-data" onSubmit="return validate()"  > -->

    <div class="portlet box grey">
        <div class="portlet-title">
            <div class="caption"> 
                VISITOR APPROVAL REQUEST FORM
                <?php //echo $_SESSION['ou']; ?>
            </div> 
        </div>
        <div class="portlet-body form">
            <div class="form-body">
                <div class="row">

                    <div class="col-md-6">

                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-3">First Name <font color="red">*</font> </label>
                                <div class="col-md-8">
                                    <input class="form-control" placeholder="First Name" type="text" id="fname" name="fname" required  >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-3">Last Name <font color="red">*</font> </label>
                                <div class="col-md-8">
                                    <input class="form-control" placeholder="Last Name" type="text" id="lname" name="lname" required  >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-3"> Designation <font color="red">*</font> </label>
                                <div class="col-md-8">
                                    <input class="form-control" placeholder="Designation"  type="text" name="ds" id="ds" required >
                                </div>
                            </div>
                        </div>

                       
                        <div class="row">
                            <div class="col-md-6" position="absolute" >
                                <label class="control-label col-md-6" padding="5px" text-align="center"  > Visit period <font color="red">*</font> </label>

                                <div class="col-md-6">
                                    <div class="row">

                                        <div class="form-group"> 
                                            <label class="control-label col-md-4"> From </label>
                                            <div class="col-md-8">
                                                <div class="input-group input-medium date date-picker" data-date-format="dd/mm/yyyy" data-date-start-date="-60d" >
                                                    <input class="form-control" namtype="text" name="lfrom" id="lfrom" required onChange="goat1();" >
                                                    <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>

                                                    <script type="text/javascript">
                                                        function goat1(){
                                                            var x11 = document.getElementById("lfrom").value;
                                                            return x11;
                                                        }
                                                    </script>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4"> To </label>
                                            <div class="col-md-8">
                                                <div class="input-group input-medium date date-picker" data-date-format="dd/mm/yyyy" data-date-start-date="-60d" >
                                                    <input class="form-control" type="text" name="lto" id="lto" required onChange="goat2();" >
                                                    <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                 

                                                    <script type="text/javascript">
                                                        function goat2(){
                                                            x1= goat1(); //from date 
                                                            var yourDate1 = new Date(x1.split('/')[2],x1.split('/')[1] -1 ,x1.split('/')[0]);
                                                            
                                                            var x2 = document.getElementById("lto").value;
                                                            var yourDate2 = new Date(x2.split('/')[2],x2.split('/')[1]-1,x2.split('/')[0]);
                                                            
                                                            console.log( yourDate1.getDay() );
                                                            console.log( yourDate2.getDay() );

                                                            function parseDate(str) {
                                                                var mdy = str.split('/');
                                                                var temp = mdy[0];
                                                                mdy[0]=mdy[1];
                                                                mdy[1]=temp;
                                                                return new Date(mdy[2], mdy[0]-1, mdy[1]);
                                                            }

                                                            function daydiff(first, second) {
                                                                return Math.round((second-first)/(1000*60*60*24));
                                                            }
                                                            var dff=daydiff(parseDate(x1), parseDate(x2));

                                                            console.log(dff+">>datediff");
                                                                
                                                              

                                                            if(dff< 0 ){
                                                                
                                                                // $('#lto').datepicker('setDate', null);
                                                                $('#lfrom').datepicker('setDate', null);

                                                                alert("End date should not be before start date");
                                                                // window.location.reload();
                                                            }

                                                        }
                                                            
                                                    </script>



                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


   
                        <div class="row">
                            <div class="form-group" >
                                <label class="control-label col-md-3"  > Seminar <font color="red">*</font> </label >
                                <div class="col-md-9">
                                    <div class="radio-list row " name="sem_rad" id="sem_rad">
                                        <input name="Seminar" value="yes" type="radio" required > Yes 
                                        <input name="Seminar" value="no" type="radio" required > No
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row sem_yes ">
                            <div class="form-group">
                                <label class="control-label col-md-3"> Series </label>
                                <!--<label class="control-label col-md-3"> Venue </label> -->
                                <div class="col-md-9">
                                    <!-- <input class="form-control" placeholder="Series"  type="text" name="Series"  id="Series" > -->
                                   <!-- <input class="form-control" placeholder="Venue"  type="text" name="Venue"  id="Venue" > -->

                                   		<select class="form-control select2 " data-placeholder="Series" tabindex="1" name="Series" id="Series">
                                            <option value=""> Select suggested series </option>
                                            <option value="String Theory Seminars "> String Theory Seminars  </option>
                                            <option value="Theoretical Physics Colloquium"> Theoretical Physics Colloquium </option>
                                            <option value="Free Meson Seminars (HEP)"> Free Meson Seminars (HEP) </option>
                                            <option value="Random Interactions "> Random Interactions </option>
                                            <option value="CMSP Journal Club  "> CMSP Journal Club </option>
                                            <option value="High Energy Physics Journal Club "> High Energy Physics Journal Club  </option>
                                            <option value="Students Seminar "> Students Seminar   </option>
                                        </select>


                                </div>
                            </div>
                        </div>
						<script type="text/javascript">
                            $('.sem_yes').css('opacity', 0.0);
                            $('input[ name="Seminar" ]').click(function(){
                                if($(this).val() == "yes" ){
                                    $('.sem_yes').css('opacity', 1.0);
                                }else{
                                    $('.sem_yes').css('opacity', 0.0);
                                }
                            });
                        </script>
						
						<!--
                        <div class="row sem_yes ">
                            <div class="form-group">
                                <label class="control-label col-md-3"> Title </label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Title"  type="text" name="Title"  id="Title" >
                                </div>
                            </div>
                        </div>
                        <div class="row sem_yes ">
                            <div class="form-group">
                                <label class="control-label col-md-3"> Abstract </label>
                                <div class="col-md-9">
                                    <textarea class="form-control" placeholder="Abstract"  type="text" name="Abstract"  id="Abstract" size="100" rows="5" cols="30" > </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row sem_yes">
                            <label class="col-md-5 control-label">Files to be uploaded</label>
                            <div class="col-md-7">
                                <a href="uploaddocvisitor.php?cc=<?php //echo $cc; ?> " target="new" onclick="window.open(this.href,'targetWindow',' toolbar=no, location=no, status=no, menubar=no,scrollbars=yes, resizable=yes, width=500px, height=700px'); return false;" class="control-label col-md-6" id="upld" name="upld" > Upload Files </a>  
                                <br> <br>
                            </div>  
                        </div>
                        -->
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-3"> Travel Details </label>
                                <div class="col-md-9">
                                    <textarea class="form-control" placeholder="Eg. Arrival/Departure time"  type="text" name="Comment"  id="Comment" size="100" rows="5" cols="30" > </textarea>
                                </div>
                            </div>
                        </div>






                    </div>


                    <div class="col-md-6">

                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-3"> Institute <font color="red">*</font> </label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Institute" type="text"  id="Institute" name="Institute" required   >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-5"> Is Honorarium involved ?  <font color="red">*</font> </label>
                                <div class="col-md-7">
                                    <div class="radio-list row ">
                                        <input name="hono" value="yes" type="radio" required > Yes 
                                        <input name="hono" value="no" type="radio" required > No
                                    </div>
                                </div>
                            </div>
                        </div>

                        


                        <div class="row hono_yes">
                            <div class="form-group">
                                <label class="control-label col-md-3"> Per-diem  </label>
                                <div class="col-md-9">
                                   
                                        <select class="form-control select2 " data-placeholder="Per-diem" tabindex="1" name="diem" id="diem">
                                            <option value="0"> Select suggested per-diem </option>
                                            <option value="Rs.800 for Professors"> Rs.800 for Professors </option>
                                            <option value="Rs.500 for Post Doc Students"> Rs.500 for Post Doc Students </option>
                                            <option value="Rs.300 for Students"> Rs.300 for Students </option>
                                            <option value="Other"> Other </option>
                                        </select>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $('.hono_yes').css('opacity', 0.0);
                            $('input[ name="hono" ]').click(function(){
                                if($(this).val() == "yes" ){
                                    $('.hono_yes').css('opacity', 1.0);
                                }else{
                                    $('.hono_yes').css('opacity', 0.0);
                                }
                            });
                        </script>


                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-5"> Travel Allowance <font color="red">*</font> </label>
                                <div class="col-md-7">
                                    <div class="radio-list row ">
                                        <input name="travel" value="yes" type="radio" required > Yes 
                                        <input name="travel" value="no" type="radio" required > No
                                    </div>
                                </div>
                            </div>
                        </div>
                        


                        <div class="row travel_yes">
                            <div class="form-group">
                                <label class="control-label col-md-3"> Approximate Cost </label>
                                <label class="control-label col-md-1" > Rs. </label>
                                <div class="col-md-6">
                                    <input class="form-control " placeholder="Approximate Cost"  type="text" name="apoxcost"  id="apoxcost" onkeypress="return onlyNumbers(event,this);" >
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $('.travel_yes').css('opacity', 0.0);
                            $('input[ name="travel" ]').click(function(){
                                if($(this).val() == "yes" ){
                                    $('.travel_yes').css('opacity', 1.0);
                                }else{
                                    $('.travel_yes').css('opacity', 0.0);
                                }
                            });
                        </script>

                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-5"> Accommodation Request <font color="red">*</font> </label>
                                <div class="col-md-7">
                                    <div class="radio-list row ">
                                        <input name="acco_req" value="yes" type="radio" required > Yes 
                                        <input name="acco_req" value="no" type="radio" required > No
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="row acco_req_yes ">
                            <div class="form-group">
                                <label class="control-label col-md-3"> Place </label>
                                <div class="col-md-9">
                                    <div class="radio-list row ">
                                        <input name="acpl" value="guesthouse" type="radio" > Guest House 
                                        <input name="acpl" value="External" type="radio" > External
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <script type="text/javascript">
                            $('.acco_req_yes').css('opacity', 0.0);
                            $('.acco_req_yes_cc').css('opacity', 0.0);
                            $('input[ name="acco_req" ]').click(function(){
                                if($(this).val() == "yes" ){
                                    $('.acco_req_yes').css('opacity', 1.0);
									$('.acco_req_yes_cc').css('opacity', 0.0);
									$('input[ name="acpl" ]').click(function(){
										if($(this).val() == "External" ){
											$('.acco_req_yes_cc').css('opacity', 1.0);
										}else{
											$('.acco_req_yes_cc').css('opacity', 0.0);
										}
									});
							
                                }else{
                                    $('.acco_req_yes').css('opacity', 0.0);
                                }
                            });
                        </script>


                        

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="form-actions"> <center>
        <button value="submit" type="submit" class="btn green" name="submit" id="submit" > Apply </button></center>
    </div>


</form>   

<!-- </div> -->
<?php include("lv_footer.php"); ?>     
<link rel="stylesheet" type="text/css" href="../assets_/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<script type="text/javascript" src="../assets_/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>



<script>
    function validate(){
        var Seminar = document.forms["acad"]["Seminar"].value;
        var Series = document.forms["acad"]["Series"].value;
        //var Title = document.forms["acad"]["Title"].value;
         console.log(Series);
         console.log(Seminar);



        var errors = [];
      
        if (Seminar == "yes") {

            
            if(Series == ""){
                errors[errors.length] = " Please enter Series.";
            }



        }
        


        var lfrom = document.forms["acad"]["lfrom"].value;
        var lto = document.forms["acad"]["lto"].value;


        var x1=lfrom;


        var yourDate1 = new Date(x1.split('/')[2],x1.split('/')[1] -1 ,x1.split('/')[0]);
                                                            
        var x2 = lto;
        var yourDate2 = new Date(x2.split('/')[2],x2.split('/')[1]-1,x2.split('/')[0]);
        
        console.log( yourDate1.getDay() );
        console.log( yourDate2.getDay() );

        function parseDate(str) {
            var mdy = str.split('/');
            var temp = mdy[0];
            mdy[0]=mdy[1];
            mdy[1]=temp;
            return new Date(mdy[2], mdy[0]-1, mdy[1]);
        }

        function daydiff(first, second) {
            return Math.round((second-first)/(1000*60*60*24));
        }
        var dff=daydiff(parseDate(x1), parseDate(x2));

        console.log(dff+">>datediff");
            
          

        if(dff< 0 ){
            
            // $('#lto').datepicker('setDate', null);
            $('#lfrom').datepicker('setDate', null);
            

            // alert("End date should not before leave start date");
            errors[errors.length] = "End date should not be before start date ";
            // window.location.reload();
        }









        var hono = document.forms["acad"]["hono"].value;
        var diem = document.forms["acad"]["diem"].value;
    //     if(acc_amount == "" &&  acpl == "External" ){
				// 	errors[errors.length] = "Please enter amount under accommodation request.";
				// }
		
        if(hono == 'yes'){
            if ( ( diem != 'Rs.500 for Post Doc Students' ) && ( diem != 'Rs.300 for Students' ) && ( diem != 'Rs.800 for Professors' )&& (diem != 'Other' ) )
            {
                errors[errors.length] = "Please enter Per-diem ";
            }
        }

        var travel = document.forms["acad"]["travel"].value;
        var apoxcost = document.forms["acad"]["apoxcost"].value;
		console.log(travel);

        if (travel == "yes") {
            if(apoxcost == ""){
                errors[errors.length] = "Please enter approximate cost under travel allowance.";
            }
        }

        var acco_req = document.forms["acad"]["acco_req"].value;
        var acpl = document.forms["acad"]["acpl"].value;
        // var acc_amount = document.forms["acad"]["acc_amount"].value;

        if (acco_req == "yes") {
           
            if (acpl != "guesthouse" && acpl != "External" ) {
                errors[errors.length] = "Please select type of accommodation.";
				 
			
            }
			
			// if(acc_amount == "" &&  acpl == "External" ){
				// 	errors[errors.length] = "Please enter amount under accommodation request.";
				// }
				
				
        }



        if (errors.length > 0) 
        {
            reportErrors(errors);
            return false;
        }else{
        // alert('mail will be sent to the authorised person');
        
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