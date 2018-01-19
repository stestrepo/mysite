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




// [, string $delimiter = "," [, string $enclosure = '"' [, string $escape_char = "\" ]]]

// int fputcsv ( $handle , array $fields [, string $delimiter = "," [, string $enclosure = '"' [, string $escape_char = "\" ]]] )




// echo $mysqli1;

$delimiter = "|";

 $date = date('Y-m-d');

$result = $mysqli1->query( " SELECT * FROM `visitor_approve` WHERE `to` >= '$date' " );
// $result = $mysqli1->query( " SELECT * FROM `visitor_approve` WHERE `to` >= '$date'  " );

// $result = $mysqli1->query( " SELECT * FROM `visitor_approve` " );
// var_dump($result);

// header("Content-Type:application/csv"); 
// header("Content-Disposition:attachment;filename=file123.csv");

// $file_name= "visitorslist".$date.'_'.time().".dbs";
// $file_name= "visitors_try.dbs";


// $output = fopen("/var/www/newmodules/AppAdmin/visitors/visitorfiles/visitors.dbs",'w+') or die("Can't open php://output");
$output = fopen("/var/www/newmodules/AppAdmin/visitors/visitors.dbs",'w+') or die("Can't open php://output");
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
		$visitorid=$row['visitorid'];
		$desk_space=$row['desk_space'];
		$phone=$row['phone'];
		
		// fputcsv($output, array($firstname,$lastname,$institute,$desk_space,$phone,$from,$to [, string $delimiter = "|"] ));
		fputcsv($output, array($firstname,$lastname,$institute,$desk_space,$phone,$from,$to ),$delimiter);
	}

}

fclose($output) or die("Can't close php://output");



// exec( ' scp /var/www/newmodules/AppAdmin/Leave/visitorfiles/visitors.dbs opr@158.144.1.173:/home/depts/opr/files/visitors.dbs ' );
	
// echo "one";
// echo $connection = ssh2_connect('www_test_laravel.tifr.res.in', 22);
// echo "one1";
// // ssh2_auth_password($connection, 'opr', 'shankar|135*');
// echo "one2";

// ssh2_scp_send(ssh2_connect('158.144.1.173', 22), '/var/www/newmodules/AppAdmin/Leave/visitorfiles/visitors.dbs', '/home/depts/opr/files/visitors.dbs',0666);

// echo "one3";


// scp <source> <destination>
// To copy a file from B to A while logged into B:

// scp /path/to/file username@a:/path/to/destination
// $connection = ssh2_connect('shell.example.com', 22);
// ssh2_auth_password($connection, 'username', 'password');
// ssh2_scp_send($connection, '/local/filename', '/remote/filename', 0644);


?>
