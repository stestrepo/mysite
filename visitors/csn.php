<?php

// $database="LeaveCCCF";

// $mysqli1 = new mysqli("localhost","ksri","gan2mysql", $database);
// if ($mysqli1->connect_error) {
//     die('Error : ('. $mysqli1->connect_errno .') '. $mysqli1->connect_error);
// }
include("includes/config.leave.php");

$delimiter = "|";

$date = date('Y-m-d');

$result = $mysqli1->query( " SELECT * FROM `visitor_approve` WHERE `to` >= '$date' " );

$output = fopen("/var/www/newmodules/AppAdmin/visitors/visitorfiles/".$_SESSION['ou']."visitors.dbs",'w+') or die("Can't open php://output");
//fputcsv($output, array( 'Lastname' , 'Firstname',  'Institute' , 'Deskspace','Phone' , 'From date' , 'To date'  ) , $delimiter );

foreach($result as $key => $value ){
	$visitorid = $value["visitorid"];
	$firstname = ucwords(strtolower($value["firstname"]));
	$lastname = ucwords(strtolower($value["lastname"]));
	$institute = $value["institute"];
	$to = $value["to"];
	$from = $value["from"];
	$to = str_replace('-', '.', $to);
	$from = str_replace('-', '.', $from);


	$results1 = $mysqli1->query( " SELECT * FROM `visitor_location` WHERE `visitorid`='$visitorid' " );
	$desk_space=null;
	$phone=null;

	if( $row = $results1 ->fetch_assoc() ){
		$visitorid=$row['visitorid'];
		$desk_space=$row['desk_space'];
		$phone=$row['phone'];
		$arr = array($lastname,$firstname,$institute,$desk_space,$phone,$from,$to ) ;
		$array = str_replace('"', '', $arr);

		// var_dump($array);
		
		fputcsv($output, $array ,$delimiter);
	}
}

fclose($output) or die("Can't close php://output");



	// echo $file = fopen("/var/www/newmodules/AppAdmin/visitors/visitorfiles/".$_SESSION['ou']."visitors.dbs",'w+') or die("Can't open php://output");
	// $target_file = "/var/www/newmodules/AppAdmin/visitors/visitorfiles/".$_SESSION['ou']."visitors.dbs";
	// echo  $file = new SplFileObject($target_file);

	// $lines = file($target_file);
    
 //    $lineNumber=0;
 //    $file->seek($lineNumber);
	// $contents = $file->current();
	// echo '<br>';

	// while (!$file->eof()) 
	// {
	    // echo $data = ( $file->fgetcsv() );
	    // var_dump($data);
		// echo count($data);
	 //    foreach ($data as $key => $value) 
	 //    {
	 //    	echo $key;
		// 	echo '<br>';
	 //    	echo $value;
	    // }
	// }



try {

	if($_SESSION['ou'] == 'CCCF' ){
		shell_exec("sh /var/www/newmodules/AppAdmin/visitors/transferCCCF.sh");
		system("scp /var/www/newmodules/AppAdmin/visitors/visitorfiles/CCCFvisitors.dbs kausalya@home.theory.tifr.res.in:public_html");

		// include('tranfer.sh');
	}

	if($_SESSION['ou'] == 'DTP' ){
		shell_exec("sh /var/www/newmodules/AppAdmin/visitors/transferDTP.sh");
		system("scp /var/www/newmodules/AppAdmin/visitors/visitorfiles/DTPvisitors.dbs kausalya@home.theory.tifr.res.in:public_html");
	}


	// system("scp /var/www/newmodules/AppAdmin/visitors/visitorfiles/visitors.dbs kausalya@home.theory.tifr.res.in:public_html"); //comment

	// echo '<script> alert("File is copied to successfully to home.theory.tifr.res.in  .") </script>';

} catch (Exception $e) {
	// echo '<script> alert("File is not copied to successfully, pls check.") </script>';
}




?>
