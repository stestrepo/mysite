<?php 

session_start();

date_default_timezone_set("Asia/Calcutta");
$server=$_SERVER['SERVER_NAME'];
$accessip=$_SERVER['REMOTE_ADDR'];
$DOCROOT=$_SERVER['DOCUMENT_ROOT'];

$DOCROOT_URL='http://'.$server;
$APP_URL='https://'.$server;
$BASE_URL='/AppAdmin/visitors';
$WEB = 'webmaster@tifr.res.in';

$chair_email_dtp='chmtpdc@theory.tifr.res.in';
$dept_admin_dtp='theophys@theory.tifr.res.in';
// $dept_admin_dtp='bathija@theory.tifr.res.in';

$chair_email_cc = 'pes@tifr.res.in';
$dept_admin_cc = 'pes@tifr.res.in';

// $chair_email_dtp='sayali.goregaonkar@tifr.res.in';
// $dept_admin_dtp='sayali.goregaonkar@tifr.res.in';
//======= DB Connection details

// $mysqli1 = new mysqli("localhost","dtp_dept","DB@dpt#17", "dtp_dept");
 // $mysqli1 = new mysqli("localhost","dtp_dept","DB@dpt#17", "LeaveDTP");

if($_SESSION['ou'] == 'DTP'){
	$database="LeaveDTP";
	// $database="dtp_dept";
	$chair_email=$chair_email_dtp;
	$dept_admin=$dept_admin_dtp;
}
if($_SESSION['ou'] == 'CCCF'){
	$database="LeaveCCCF";
	// $database="cccf_dept";
	$chair_email=$chair_email_cc;
	$dept_admin=$dept_admin_cc;
}


$mysqli1 = new mysqli("localhost","ksri","gan2mysql", $database);
//Output any connection error
if ($mysqli1->connect_error) {
    die('Error : ('. $mysqli1->connect_errno .') '. $mysqli1->connect_error);
}

$mysqli3 = new mysqli("www.tifr.res.in","ldapuser","AD@ldap$14","web");
//Output any connection error
if ($mysqli3->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$mysqli2 = new mysqli("ccweb.tifr.res.in","dtp_dept","DB@dpt#17", "glpi");
//Output any connection error
if ($mysqli2->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}



// ERROR REPORTING AND DISPLAY
// Turn off error reporting
// error_reporting(0);
// Turn on error reporting
/*error_reporting(1);
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/

?>
