<?php

    session_start();


include("../includes/config.leave.php");



$loc = $_GET['loc'];

$insert1 = $mysqli1->query("DELETE FROM `visitor_accom` WHERE `visitorid`='$loc' 
  " );


echo "<script> alert('Visitor accomodation entry removed.');  </script>";

 echo "<script> window.location.href='../accodo_details.php' </script>" ;



?>