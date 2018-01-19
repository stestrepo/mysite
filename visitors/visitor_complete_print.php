<?php
 $database12 = $_GET['d'];
 $_SESSION['ou']=$database12;

include("includes/config.php");
include("includes/config.leave.php");
$cc=$_SESSION['ccode'];
$name=$_SESSION['name'];

if($_SESSION['ccode']  )
{
?>
        <link href="../assets_/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets_/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/layouts/layout1/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets_/layouts/layout1/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets_/layouts/layout1/css/custom.min.css" rel="stylesheet" type="text/css" />
<?php
 $r = mysqli_real_escape_string($mysqli1,$_GET['r']);

    $results1 = $mysqli1->query("SELECT * FROM visitor_approve where visitorid = '".$r."'  " );
    // var_dump($results1);

    if($row = $results1->fetch_assoc()) {
        $visitorid = $row["visitorid"] ;
        $visitor_name = $row["firstname"]." ".$row["lastname"] ;
        $institute = $row["institute"] ;
        $designation = $row["designation"] ;
        $desk_space = $row["desk_space"] ;
        $lfrom = $row["from"] ;
        $lto = $row["to"] ;
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



        include("../Leave/datediff.php");

        list ($period, $yr_diff, $mon_diff, $day_diff)=datediff($lfrom,$lto);

        $phpdatediff=$period+1;
      
    $total_diem = $phpdatediff * $perdiem;
    $total = $total_diem + $acc_amt + $travel_amt ;





    $results2 = $mysqli1->query("SELECT * FROM `visitor_flags` WHERE `visitor_id`= '".$r."'  " );
    if($row = $results2->fetch_assoc()) {
        $office_token = $row["office_token"] ;
        $sanc_ccode = $row["sanc_ccode"] ;

    }

if($applicant_ccode){
    $results3 = $mysqli3->query(" select title,restname,surname from people1 WHERE ccode='$applicant_ccode'  " );
    if($rr3 = $results3->fetch_assoc()) {
         $applicant_name = $rr3['title']." ".$rr3['restname']." ".$rr3['surname'];
    }
}

$cc=$sanc_ccode;
include("ppl.php") ;


if($sanc_ccode){
    $results4 = $mysqli3->query(" select title,restname,surname from people1 WHERE ccode='$sanc_ccode'  " );
    if($rr4 = $results4->fetch_assoc()) {
         $sanc_name = $rr4['title']." ".$rr4['restname']." ".$rr4['surname'];
    }
}

$results5 = $mysqli1->query(" select link from seminar_details WHERE visitorid='$r'  " );
    


?>

<head>
<link href="../assets_/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../assets_/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="../assets_/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
</head>


<style type="text/css">
  div.ex
  {
  width:600px;
  /*width:378px;*/
  height:850px;
  padding:10px;
  border:2px solid gray;
  margin:4px;
  background-color:WHITE;
  position: relative;
  align-self: center;
  }

  div.in{
    width:500px;
  }

   p.small {line-height:5px;}
   li{ height: 25px; }
   tr.sm{ height: 15px; }

</style>
    <body class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid  "  >

<div class="portlet">
<div class="portlet-body ">
<div class=" form-body"> 
<div class="ex form-body"> 
<p class="small">
    <div class=" form-group  "> 
    <div align="center" class="row" > <h3> TATA INSTITUTE OF FUNDAMENTAL RESEARCH </h3> </div> 
    </div>
    <div class=" form-group  "> 
    <div align="center" class="row" > <strong><h4> VISITOR APPROVAL </h4> </strong> </div>
    </div>


    <div class=" form-group  "> 
    <div class="row ">
          <label class="form-control  " > Applicant Name : </label> 
          <input  class="form-control" type="text" name="name"  readonly size="30" value="<?php echo $applicant_name; ?>">
    </div>
    </div>
    <br>
    <div class="row ">
        <label class="control-label "> Visitors Name : </label>
        <input type="text" name="gender" readonly size="30" value="<?php echo ucwords(strtolower($visitor_name)); ?>">
    </div>
    <br>
    <div class="row ">
        <label class="control-label "> Affiliation : </label>
        <input type="text" name="desk_space" size="20" readonly value="<?php echo ucwords(strtolower($institute)); ?>" >
    </div>
    <br>
    <div class="row ">
        <label class="control-label  "> Visit   </label>
        <label class="control-label  "> From : </label>
        <input type="text" name="type" size="10" readonly value="<?php echo $lfrom;?>" >
        <label class="control-label  "> To : </label>
        <input type="text" name="type" size="10" readonly value="<?php echo $lto;?>" >
    </div>
    <br>
    <div class="row "><b>
        <label class="control-label  "> Total duration : </label>
        <input type="text" name="duration" size="5" readonly value="<?php echo $phpdatediff; ?>" > <label class="control-label " > days </label>
    </div>
    <br>

    <br>
    <br>

    <font color="661199"> 
    <div class="row ">
        <label class="control-label"> Is Honorarium involved ? </label>
        <input type="text" name="honor" readonly size="20" value="<?php echo $honorarium; ?>">
    </div>
    <br>
    <?php if($honorarium=="yes"){ ?>
    <div class="row ">
        <label class="control-label"> Per-diem : </label>
        <label class="control-label " > Rs. </label>
        <input type="text" name="deim" readonly size="30" value="<?php echo $perdiem; ?>">
    </div>
    <?php } ?>
    </font>

    <br>
    <br>

    <font color="661919">
    <div class="row "> <label class="control-label"> Seminar: </label>  </div>
    <br> 
    <div class="row ">
        <label class="control-label col-md-3"> Is going to be conducted:  </label>
        <input type="text" name="honor" readonly size="20" value="<?php echo $seminar; ?>">
    </div>
    <br>
    <?php if($seminar=="yes"){ ?>
    <div class="row ">
        <label class="control-label  "> Series : </label>
        <input type="text" name="deim" readonly size="30" value="<?php echo $series; ?>">
    </div>
    <br>

    <?php if($results5){ ?>
    <?php  foreach($results5 as $key1 => $value1 ){    ?>
    <div class="row ">
        <label class="control-label"> Indico Seminar Link : </label>
        <input type="text" name="deim" readonly size="30" value="<?php echo $value1['link']; ?>">
        <br>
    </div>    
    <?php } ?>
    <?php } ?>
        

    
    <?php } ?>
    </font>

    <br>
    <br>


    <font color="225522">
    <div class="row "> <label class="control-label"> Travel Allowance: </label>  </div>
    <br>        
    <div class="row ">
        <label class="control-label"> Requested </label>
        <input type="text" name="honor" readonly size="20" value="<?php echo $travel_alw; ?>">
    </div>
    <br>
    <?php if($travel_alw=="yes"){ ?>
    <div class="row ">
        <label class="control-label "> Approximate Cost : </label>
        <label class="control-label  " > Rs. </label>
        <input type="text" name="deim" readonly size="30" value="<?php echo $travel_amt; ?>">
    </div>
    <?php } ?>
    </font>

    <br>
    <br>

    <font color="225599">
    <div class="row "> <label class="control-label"> Accommodation: </label>  </div>
    <br>
    <div class="row ">
        <label class="control-label "> Request </label>
        <input type="text" name="honor" readonly size="20" value="<?php echo $accomo; ?>">
    </div>
    <br>
    <?php if($accomo=="yes"){ ?>
    <div class="row ">
        <label class="control-label"> Place </label>
        <input type="text" name="deim" readonly size="30" value="<?php echo $place; ?>">
    </div>
    <br>
    <?php } ?>
    </font>

<!-- </p> -->
</div>
</div>


<?php       
}
else
{       
    echo "<script>window.location.href='../login.php' </script>";
}
?>      