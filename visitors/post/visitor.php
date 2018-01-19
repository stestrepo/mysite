<?php

session_start();
// echo $_SESSION['ou'];
include("../includes/config.leave.php");
include("../includes/messages.php");
// echo $database;

// $database="LeaveCCCF";
// $mysqli1 = new mysqli("localhost","ksri","gan2mysql", $database);
// //Output any connection error
// if ($mysqli1->connect_error) {
//     die('Error : ('. $mysqli1->connect_errno .') '. $mysqli1->connect_error);
// }


$wbm = $WEB;
$urlf = $APP_URL.$BASE_URL;

 $fname12=$_POST['fname'];
 $lname12=$_POST['lname'];
 $name12=$fname12." ".$lname12;
 $ds_vis=$_POST['ds'];

 $date = date('Y-m-d');

// echo "from -- ";
 $lfrom=$_POST['lfrom'];
// echo " -- ";
// echo $lfrom = date("Y/m/d", strtotime($lfrom));
// echo $lfrom = date("d-m-Y", strtotime($lfrom));
 $lfrom = str_replace('/', '-', $lfrom);
// echo " -- ";
 $lfrom1 = date("Y-m-d", strtotime($lfrom));

// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "to-- -- ";
 $lto=$_POST['lto'];
// echo " -- ";
// echo $lto = date("Y/m/d", strtotime($lto));
// echo $lto = date("d-m-Y", strtotime($lto));
 $lto = str_replace('/', '-', $lto);

// echo " -- ";
 $lto1 = date("Y-m-d", strtotime($lto));


 $Seminar=$_POST['Seminar'];
 $series=$_POST['Series'];
 $Title=$_POST['Title'];
 $Abstract=$_POST['Abstract'];

 $Comment=$_POST['Comment'];

 $Institute=$_POST['Institute'];
 $desksp=$_POST['desksp'];

 $hono=$_POST['hono'];
 $diem=$_POST['diem'];

 $travel=$_POST['travel'];
 $apoxcost=$_POST['apoxcost'];

 $acco_req=$_POST['acco_req'];
 $acpl=$_POST['acpl'];
 $acc_amount=$_POST['acc_amount'];
 
 $cc=$_SESSION['ccode']; 
 include('../ppl.php');
  $dept12=$dept;
 $applicant_name=ucwords(strtolower( $title." ".$restname." ".$surname )) ;




if($lto1<$lfrom1){
	echo "<script type='text/javascript'> alert('Please enter proper dates. To date is less than from date. '); </script> " ;
	echo "<script> window.location.href='../visitor.php' </script>" ;
}else{






$insert1 = $mysqli1->query("INSERT INTO `visitor_details`( `firstname`, `lastname`, `institute`, `designation`,  `lfrom`, `lto`, `honorarium`, `perdiem`, `travel_alw`, `travel_amt`, `seminar`, `series`, `title`, `abstract`, `accomo`, `place`, `acc_amt`, `comment` ,`applicant_ccode` ) VALUES ('$fname12' ,'$lname12' ,'$Institute' ,'$ds_vis'  ,'$lfrom1' ,'$lto1' ,'$hono' ,'$diem' ,'$travel'  , '$apoxcost','$Seminar' ,'$series' ,'$Title' ,'$Abstract' ,'$acco_req' ,'$acpl' ,'$acc_amount' ,'$Comment','$cc' ) " );

// var_dump($insert1);





$results1 = $mysqli1->query("SELECT (visitorid) FROM visitor_details WHERE firstname='$fname12' and lastname='$lname12' and institute='$Institute'    " );
// echo '<br>';
// var_dump($results1);
foreach ($results1 as $key => $value) {
	// echo $key,$value['visitorid'];
	$e[] = $value['visitorid'];
}
 $r=max($e);


$sanc_token=uniqid();
$office_token=uniqid();
$sanc_flag=0;

$log1 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'visitor $firstname $surname entry initiatised ' ) " );

include("../includes/config.php");

// $dept = 'CCCF';

	if($ldapconn) 
	{
	    if ($ldapbind) 
		{       

			 $depttest=$dept12;
			$rest="Faculty";
			$rest12="TRUE";
	        $result = ldap_search($ldapconn,$ldaptree, "(&(deptcode=$depttest)(deptCHAIRPERSON=$rest12) )") or die ("Error in search query: ".ldap_error($ldapconn));
	        $data = ldap_get_entries($ldapconn, $result);
	        $avbl=ldap_count_entries($ldapconn, $result);
	        if($avbl != 0)
			{        
				for ($i=0; $i<$data["count"]; $i++) 
				{
					$email=$data[$i]["mail"][0];
					$sn=$data[$i]["sn"][0];
					$gn=$data[$i]["givenname"][0];
					$tt=$data[$i]["title"][0];
					$sanc_ccode=$data[$i]["ccode"][0];
					$username=$tt." ".$gn." ".$sn;


					// $visitor_sanc = "Dear #sanc_name, #applicant_name would like to request that we invite #visitor of #institute to visit DTP from #lfrom to #lto. #1 Please do verify at #urlf/visitor_sanc_verify.php?r=#r&t=#t#1#1 ";


					$mail_to  = $chair_email;
					// $mail_to  = "sayali.goregaonkar@tifr.res.in";
					// echo $mail_to  = "pes@tifr.res.in";

							
					$message = $visitor_sanc ;

			        $patterns = array();
					$patterns[0] = '/#sanc_name/';
					$patterns[1] = '/#applicant_name/';
					$patterns[2] = '/#visitor/';
					$patterns[3] ='/#institute/';
					$patterns[4] = '/#lfrom/';
					$patterns[5] ='/#lto/';
					$patterns[6] ='/#urlf/';
					$patterns[7] ='/#r/';
					$patterns[8] ='/#t/';

					$replacements = array();
					$replacements[0] =  ucwords(strtolower($username));
					$replacements[1] =  ucwords(strtolower($applicant_name));	
				    $replacements[2] =  ucwords(strtolower($name12));
					$replacements[3] =  $Institute;
				    $replacements[4] =  $lfrom1;
					$replacements[5] =  $lto1;
					$replacements[6] =  $urlf;
					$replacements[7] =  $r;
					$replacements[8] =  $sanc_token;

					$message=str_replace ( "#1" , "\n" ,$message);
					$message= preg_replace($patterns, $replacements, $message);

					$message .= "\n-- \nBest Regards,\n";
			        $message .= "TIFR \n(System Mail)\n";
			        $message  = wordwrap($message);

			        
			        $subject  = $visitor_all_sub ;
					
			        $headers  = "From: $wbm\n";
			        $headers .= "Return-Path: $wbm\n";
			        $headers .= "Reply-To: $wbm\n";
				    $headers .= "X-Mailer: FSF-I Mailer\n";
			        $headers .= "Content-Type: text/plain\n";

			        mail($mail_to , $subject, $message, $headers);
					

			        $log2 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'mail send to chairperson $sanc_ccode ' ) " );


					echo "<script type='text/javascript'> alert('Visitor approval request of '".ucwords(strtolower($name12))."' has been forwarded to chairperson '". ucwords(strtolower($username)) ."' for sanctioning. '); </script> " ;
				}
			}else{
				$log3 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'mail not send to chairperson $sanc_ccode ' ) " );

			}


		}
	}

$insert2 = $mysqli1->query("INSERT INTO `visitor_flags`( `visitor_id`, `sanc_flag`, `sanc_ccode`, `sanc_token`, `office_token`) VALUES ('$r' ,'$sanc_flag' , '$sanc_ccode' ,'$sanc_token' , '$office_token' ) " );

							 echo "<script> window.location.href='../index.php' </script>" ;







} //to date end


?>




