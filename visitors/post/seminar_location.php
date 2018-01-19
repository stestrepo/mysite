<!-- INSERT INTO `seminar_details`(`seminar_id`, `visitorid`, `title`, `speaker`, `affiliation`, `venue`, `date`, `Canteen Services`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]) -->

<?php

session_start();
include("../includes/config.php");
include("../includes/config.leave.php");


 $seminarid=$_POST['seminarid'];
 $visitorid=$_POST['visitorid'];
 // $title=$_POST['title'];
 // $speaker=$_POST['speaker'];
 // $affiliation=$_POST['affiliation'];
 // $venue=$_POST['venue'];
 //  $seminar_date1=$_POST['seminar_date'];
 // $seminar_date = date("Y-m-d", strtotime($seminar_date1));
 //  $seminar_time=$_POST['seminar_time'];
 // $canteen_services=$_POST['canteen_services'];
 $link=$_POST['link'];


if($seminarid){
	
	$update = $mysqli1->query(" UPDATE `seminar_details` SET `link`= '$link' WHERE `visitorid`='$visitorid' and `seminar_id`='$seminarid' " );

}else{
	$insert1 = $mysqli1->query("INSERT INTO `seminar_details` (`seminar_id`, `visitorid`, `link`) VALUES ('$seminarid', '$visitorid', '$link' )  " );
}

// if($seminarid){
	
// 	$update = $mysqli1->query(" UPDATE `seminar_details` SET `title`= '$title' ,`speaker`='$speaker', `affiliation`='$affiliation' , `venue`='$venue' , `date`='$seminar_date' , `time`='$seminar_time' , `Canteen Services`='$canteen_services'  WHERE `visitorid`='$visitorid' and `seminar_id`='$seminarid' " );

// }else{
// 	$insert1 = $mysqli1->query("INSERT INTO `seminar_details` (`seminar_id`, `visitorid`, `title`, `speaker`, `affiliation`, `venue`, `date`, `time`, `Canteen Services`) VALUES ('$seminarid', '$visitorid', '$title', '$speaker', '$affiliation', '$venue', '$seminar_date', '$seminar_time' , '$canteen_services' )  " );
// }

 echo "<script> window.location.href='../seminardetails.php' </script>" ;
// 
?>
