<?php


session_start();
// echo $_SESSION['ou'];
include("../includes/config.php");
include("../includes/config.leave.php");


 $slab=$_POST['slab'];
 $details=$_POST['details'];
 $visitorid=$_POST['visitorid'];

$results1 = $mysqli1->query( " SELECT * FROM `visitor_accom` WHERE `visitorid`='$visitorid' " );
if( $row = $results1 ->fetch_assoc() ){
	$visitorid22=$row['visitorid'];
	$details22=$row['details'];
	$slab22=$row['slab'];
}

if($visitorid22){


$update = $mysqli1->query(" UPDATE `visitor_accom` SET `details`= '$details' ,`slab`='$slab' WHERE `visitorid`='$visitorid' " );

}else{
$insert1 = $mysqli1->query("INSERT INTO `visitor_accom` ( `visitorid`,`slab`, `details`) VALUES ('$visitorid', '$slab', '$details' )  " );
	
}


// $log1 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'visitor entry initiatised' ) " );


// include("../csn.php");

echo "<script> window.location.href='../accodo_details.php' </script>" ;


?>





