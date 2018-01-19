<?php

    session_start();


include("../includes/config.leave.php");



$loc = $_GET['loc'];

$insert1 = $mysqli1->query("DELETE FROM `visitor_location` WHERE `visitorid`='$loc' 
  " );


echo "<script> alert('Visitor location entry removed.');  </script>";

 echo "<script> window.location.href='../visitorsdetails.php' </script>" ;



?>