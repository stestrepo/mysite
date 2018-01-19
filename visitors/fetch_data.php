<?php

$database="LeaveCCCF";

$mysqli1 = new mysqli("webdev.tifr.res.in","ksri","gan2mysql", $database);
//Output any connection error
if ($mysqli1->connect_error) {
    die('Error : ('. $mysqli1->connect_errno .') '. $mysqli1->connect_error);
}


$delimiter = "|";

$date = date('Y-m-d');

$result = $mysqli1->query("SELECT * FROM `visitor_approve` WHERE `to` >= '$date' " );

var_dump($result);

$file_name= "visitors12.dbs";

$output = fopen("/var/www/newmodules/AppAdmin/Leave/visitorfiles/".$file_name,'w+') or die("Can't open php://output");
fputcsv($output, array( 'Lastname' , 'Firstname',  'Institute' , 'Deskspace','Phone' , 'From date' , 'To date'  ) , $delimiter );

foreach($result as $key => $value ){
	$visitorid = $value["visitorid"];
	$firstname = $value["firstname"];
	$lastname = $value["lastname"];
	$institute = $value["insttute"];
	$to = $value["to"];
	$from = $value["from"];

	$results1 = $mysqli1->query( " SELECT * FROM `visitor_location` WHERE `visitorid`='$visitorid' " );
	$desk_space=null;
	$phone=null;

	if( $row = $results1 ->fetch_assoc() ){
		echo $visitorid=$row['visitorid'];
		$desk_space=$row['desk_space'];
		$phone=$row['phone'];
		
		// fputcsv($output, array($firstname,$lastname,$institute,$desk_space,$phone,$from,$to [, string $delimiter = "|"] ));
		fputcsv($output, array($firstname,$lastname,$institute,$desk_space,$phone,$from,$to ),$delimiter);
	}

}

fclose($output) or die("Can't close php://output");




?>