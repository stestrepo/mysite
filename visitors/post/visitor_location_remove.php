<?php

    session_start();


include("../includes/config.leave.php");



$loc = $_GET['loc'];
$sem_loc = $_GET['sem'];

$insert1 = $mysqli1->query("DELETE FROM `seminar_details` WHERE `seminar_id`='$sem_loc' and `visitorid`='$loc' 
  " );


echo "<script> alert('Seminar entry removed.');  </script>";

 echo "<script> window.location.href='../seminardetails.php' </script>" ;



?>