<?php
// include("includes/config.leave.php");


// if($_SESSION['ou'] == 'CCCF'){
// 	$database="LeaveCCCF";
// }

	$database="LeaveCCCF";

$mysqli1 = new mysqli("localhost","ksri","gan2mysql", $database);
//Output any connection error
if ($mysqli1->connect_error) {
    die('Error : ('. $mysqli1->connect_errno .') '. $mysqli1->connect_error);
}



// echo $mysqli1;

echo  $date = date('Y-m-d');

$result = $mysqli1->query( " SELECT * FROM `visitor_approve` " );
// $result = $mysqli1->query( " SELECT * FROM `visitor_approve` WHERE `to` >= '$date'  " );

// $result = $mysqli1->query( " SELECT * FROM `visitor_approve` " );
var_dump($result);

// header("Content-Type:application/csv"); 
// header("Content-Disposition:attachment;filename=file123.csv");

$output = fopen("/var/www/newmodules/AppAdmin/Leave/visitorfiles/file1234.csv",'w+') or die("Can't open php://output");
fputcsv($output, array('visitorid','desk_space','phone'));

foreach($result as $key => $value ){
	$visitorid = $value["visitorid"];

	$results1 = $mysqli1->query( " SELECT * FROM `visitor_location` WHERE `visitorid`='$visitorid' " );
	$desk_space=null;
	$phone=null;

	if( $row = $results1 ->fetch_assoc() ){
		$visitorid=$row['visitorid'];
		$desk_space=$row['desk_space'];
		$phone=$row['phone'];
		
		fputcsv($output, array($visitorid,$desk_space,$phone));
	}

}

 

fclose($output) or die("Can't close php://output");

?>