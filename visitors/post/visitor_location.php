<?php


session_start();
// echo $_SESSION['ou'];
include("../includes/config.php");
include("../includes/config.leave.php");


 $phone=$_POST['phone'];
 $desk_space=$_POST['desk_space'];
 $visitorid=$_POST['visitorid'];

$results1 = $mysqli1->query( " SELECT * FROM `visitor_location` WHERE `visitorid`='$visitorid' " );
if( $row = $results1 ->fetch_assoc() ){
	$visitorid22=$row['visitorid'];
	$desk_space22=$row['desk_space'];
	$phone22=$row['phone'];
}

if($visitorid22){


$update = $mysqli1->query(" UPDATE `visitor_location` SET `desk_space`= '$desk_space' ,`phone`='$phone' WHERE `visitorid`='$visitorid' " );

}else{
$insert1 = $mysqli1->query("INSERT INTO `visitor_location` ( `visitorid`,`phone`, `desk_space`) VALUES ('$visitorid', '$phone', '$desk_space' )  " );
	
}


$log1 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'visitor entry initiatised' ) " );

 include("../csn.php");

echo "<script> window.location.href='../visitorsdetails.php' </script>" ;


?>


