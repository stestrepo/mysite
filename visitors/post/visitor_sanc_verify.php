<?php

session_start();

include("../includes/config.leave.php");
include("../includes/messages.php");
include("../includes/config.php");

$wbm = $WEB;
// $BASE_URL='/AppAdmin/visitors';
$urlf=$APP_URL.$BASE_URL;


 $submit = $_POST['submit'];
 $r = $_POST['r'];
 $desc = $_POST['desc'];
 $comment_from = $_POST['comment'];

$update1 = $mysqli1->query("UPDATE visitor_flags set sanc_flag='".$desc."',sanc_comment='".$comment_from."'  WHERE  visitor_id = '".$r."'  " );



    $results1 = $mysqli1->query("SELECT * FROM visitor_details where visitorid = '".$r."'  " );
    if($row = $results1->fetch_assoc()) {
        $visitorid = $row["visitorid"] ;
        $visitor_firstname = $row["firstname"] ;
        $visitor_lastname = $row["lastname"] ;
        $visitor_name = $row["firstname"]." ".$row["lastname"] ;
        $institute = $row["institute"] ;
        $designation12 = $row["designation"] ;
        $desk_space = $row["desk_space"] ;
        $lfrom = $row["lfrom"] ;
        $lto = $row["lto"] ;
        $honorarium = $row["honorarium"] ;
        $perdiem = $row["perdiem"] ;
        $travel_alw = $row["travel_alw"] ;
        $travel_amt = $row["travel_amt"] ;
        $seminar = $row["seminar"] ;
        $series = $row["series"] ;
        $title = $row["title"] ;
        $abstract = $row["abstract"] ;
        $accomo = $row["accomo"] ;
        $place = $row["place"] ;
        $acc_amt = $row["acc_amt"] ;
        $comment = $row["comment"] ;
        $applicant_ccode = $row["applicant_ccode"] ;
    }

    $results2 = $mysqli1->query("SELECT `office_token` FROM `visitor_flags` WHERE `visitor_id`= '".$r."'  " );
    if($row = $results2->fetch_assoc()) {
        $office_token = $row["office_token"] ;

    }


    $cc=$applicant_ccode;
    include ('../ppl.php');
     $applicant_name=$name;
    //echo $dept;
    
    if($dept=='CCCF'){
        $chair_email = $chair_email_cc ;
        $dept_admin = $dept_admin_cc ;
    }
    if($dept=='DTP'){
        $chair_email = $chair_email_dtp ;
        $dept_admin = $dept_admin_dtp ;
    }


if($desc==1)
{

    $log1 = $mysqli1->query("INSERT INTO `log` ( `application_no`, `comment`) VALUES ( '$r', 'approved by sanctioning authority' ) " );

    $cc=$applicant_ccode;
    include('../ppl.php');

      $mail_to  = $email;
     // $mail_to  = 'pes@tifr.res.in';
    // $mail_to  = "sayali.goregaonkar@tifr.res.in";
  
    // $visitor_chair_approve = "Dear #name, #1#1 Your visitor request application for #visitorname of #institute for the period from #lfrom to #lto is sanctioned by chair. ";
    $msg = $visitor_chair_approve;

    $message = $msg;

    $patterns = array();
    $patterns[0] = '/#name/';
    $patterns[1]= '/#visitorname/';
    $patterns[2]='/#institute/';
    $patterns[3]='/#lfrom/';
    $patterns[4]='/#lto/';
    
    $replacements = array();
    $replacements[0] =  ucwords(strtolower($applicant_name)); 
    $replacements[1] =  ucwords(strtolower($visitor_name));
    $replacements[2] =  $institute;
    $replacements[3] =  $lfrom;
    $replacements[4] =  $lto;

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

    $log1 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'approval mail sent to user at  $email ' ) " );






                $depttest=$dept;
                $rest12="TRUE";

                $result1 = ldap_search($ldapconn,$ldaptree, "(&(deptcode=$depttest)(deptADMIN=$rest12) )") or die ("Error in search query: ".ldap_error($ldapconn));
                $data = ldap_get_entries($ldapconn, $result1);
                $avbl=ldap_count_entries($ldapconn, $result1);

                if($avbl != 0)
                {        
                    for ($i=0; $i<$data["count"]; $i++) 
                    {
                        $orgrole=$data[$i]["orgrole"][0];               
                        $title=$data[$i]["title"][0];               
                        $OU=$data[$i]["deptcode"][0];
                        $ccode=$data[$i]["ccode"][0];
                        $sn=$data[$i]["sn"][0];
                        $gn=$data[$i]["givenname"][0];
                        $email=$data[$i]["mail"][0];
                        $deptadmin=$title." ".$gn." ".$sn;

                        $mail_to=$dept_admin;
                        // $mail_to=$email;
                        // $mail_to  = 'sayali.goregaonkar@tifr.res.in';
                        // $mail_to  = 'pes@tifr.res.in';
                        // here select the mail from the fetch part ie email

                        // $admin_visitor_msg = "Dear #Administrator, #1#1 Chair has approved visitor approval request raised by #applicant_name. The visitor details are: #1

                        //                         #1 Visitor Name: #visitor_name
                        //                         #1 Institue: #institute
                        //                         #1 Designation: #Designation
                        //                         #1 Visit Period: #lfrom to #lto
                        //     #1 Application print is available at #urlf/visitor_complete_print.php?r=#r&d=#d&t=#t . Please take neccessary actions. ";

                        $msg =$admin_visitor_msg;

                        $message = $msg;

                        $patterns = array();
                        $patterns[0] = '/#Administrator/';
                        $patterns[1]= '/#applicant_name/';
                        $patterns[2]='/#visitor_name/';
                        $patterns[3]='/#institute/';
                        $patterns[4]='/#Designation/';
                        $patterns[5]='/#lfrom/';
                        $patterns[6]='/#lto/';
                        $patterns[7]='/#urlf/';
                        $patterns[8]='/#r/';
                        $patterns[9]='/#d/';
                        $patterns[10]='/#t/';

                        $replacements = array();
                        $replacements[0] =  ucwords(strtolower($deptadmin)); 
                        $replacements[1] =  ucwords(strtolower($applicant_name)); 
                        $replacements[2] =  ucwords(strtolower($visitor_name)); 
                        $replacements[3] =  $institute;
                        $replacements[4] =  $designation12;
                        $replacements[5] =  $lfrom;
                        $replacements[6] =  $lto;
                        $replacements[7] =  $urlf;
                        $replacements[8] =  $r;
                        $replacements[9] =  $dept;
                        $replacements[10] = $office_token;

                        $message=str_replace ( "#1" , "\n" ,$message);
                        $message= preg_replace($patterns, $replacements, $message);

                        $message .= "\n-- \nBest Regards,\n";
                        $message .= "TIFR \n(System Mail)\n";
                        $message  = wordwrap($message);

                        
                        $subject  = $visitor_all_sub ;

                        $headers  = "From: $wbm\n";
                        $headers .= "Cc: $dept_admin \n";
                        $headers .= "Return-Path: $wbm\n";
                        $headers .= "Reply-To: $wbm\n";
                        $headers .= "X-Mailer: FSF-I Mailer\n";
                        $headers .= "Content-Type: text/plain\n";
                        mail($mail_to , $subject, $message, $headers);

                        $log3 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'approval mail sent to the deptadmin at $dept_admin $email ' ) " );
                    }
                }
                else
                {
                    $log3 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'mail not send to deptadmin $dept_admin $email ' ) " );
                }




    $insert3 = $mysqli1->query("INSERT INTO `visitor_approve`(`visitorid`, `firstname`, `lastname`, `institute`, `designation`,  `from`, `to`, `honorarium`, `perdiem`, `travel_alw`, `travel_amt`, `seminar`, `series`, `title`, `abstract`, `accomo`, `place`, `acc_amt`, `comment`, `applicant_ccode`) VALUES ('$r' , '$visitor_firstname', '$visitor_lastname' , '$institute' , '$designation12' ,  '$lfrom' , '$lto' , '$honorarium' , '$perdiem' , '$travel_alw' , '$travel_amt' , '$seminar' , '$series' , '$title' , '$abstract' , '$accomo' , '$place' , '$acc_amt' , '$comment' , '$applicant_ccode' )   " );

    // var_dump($insert3);

    $log3 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'data $firstname $lastname moved to visitor_approve ' ) " );


}else{

        $mail_to=$email;
        // $mail_to="pes@tifr.res.in";
        // $mail_to="sayali.goregaonkar@tifr.res.in";

        // $visitor_chair_decline = "Dear #name, #1#1 Your visitor request application for #visitorname of #institute for the period from #lfrom to #lto is declined by chair, stating reason: #comment . ";

        $msg = $visitor_chair_decline;
        $message = $msg;

        $patterns = array();
        $patterns[0] = '/#name/';
        $patterns[1]= '/#visitorname/';
        $patterns[2]='/#institute/';
        $patterns[3]='/#lfrom/';
        $patterns[4]='/#lto/';
        $patterns[5]='/#comment/';
        
        $replacements = array();
        $replacements[0] =  ucwords(strtolower($applicant_name)); 
        $replacements[1] =  ucwords(strtolower($visitor_name)); 
        $replacements[2] =  $institute;
        $replacements[3] =  $lfrom;
        $replacements[4] =  $lto;
        $replacements[5] =  $comment_from;

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


    $insert3 = $mysqli1->query("INSERT INTO `visitor_reject`(`visitorid`, `firstname`, `lastname`, `institute`, `designation`, `from`, `to`, `honorarium`, `perdiem`, `travel_alw`, `travel_amt`, `seminar`, `series`, `title`, `abstract`, `accomo`, `place`, `acc_amt`, `comment`, `applicant_ccode`) VALUES ('$r' , '$visitor_firstname', '$visitor_lastname' , '$institute' , '$designation12' ,  '$lfrom' , '$lto' , '$honorarium' , '$perdiem' , '$travel_alw' , '$travel_amt' , '$seminar' , $series , '$title' , '$abstract' , '$accomo' , '$place' , '$acc_amt' , '$comment' , '$applicant_ccode' )   " );


    $log3 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'rejection-from sanc autho mail sent to user at $email and data moved to visitor_reject' ) " );
}



$insert12 = $mysqli1->query("DELETE FROM `visitor_details` WHERE `visitorid`='$r' " );
$log3 = $mysqli1->query("INSERT INTO `log_visitor` ( `application_no`, `comment`) VALUES ( '$r', 'data removed from visitor_details' ) " );

echo "<script>  window.location.href='../index.php'</script>";


?>  