<?php
include("includes/config.leave.php");


$results1 = $mysqli3->query(" select * from people1 WHERE ccode='$cc'  " );

	if($result = $results1->fetch_assoc()) {

		$surname = $result['surname'];
		$restname = $result['restname'];
		$dept =  $result['dept'] ;
		$gender = $result['gender'];
		$email = $result['email'];
		$cc = $result['ccode'];
		$designation = ucwords(strtolower( $result['designation'] )) ;
		$role = $result['role'];
		$dob = $result['dob'];
		$expiry = $result['expiry'];
		$telid = $result['telid'];
		$title = $result['title'];
		$name=ucwords(strtolower( $title." ".$restname." ".$surname )) ;	
	}																							
?>