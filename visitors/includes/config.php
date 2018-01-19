<?php
//============== Error Checking Code=============//
/*set_time_limit(30);
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);*/

$server="mldap.tifr.res.in";
// $server="ccldap0.tifr.rses.in";
$ldapserver=$server;	
$ldapuser="cn=Manager,";
$ldappass="nfsphy314";
$ldaptree="dc=tifr,dc=res,dc=in";
$ldaplo=$ldapuser.$ldaptree;

$ldapconn=ldap_connect($ldapserver) or die('Could not connect to server');
ldap_set_option($ldapconn , LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldapconn , LDAP_OPT_REFERRALS, 0);
ldap_start_tls($ldapconn);
$ldapbind=ldap_bind($ldapconn,$ldaplo,$ldappass)or die('Unable bind to server');



// $mysqli = new mysqli("www.tifr.res.in","ldapuser","AD@ldap$14","web");
// //Output any connection error
// if ($mysqli->connect_error) {
//     die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
// }



?>