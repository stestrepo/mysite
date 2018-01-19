<?php

$sanc_verify = "Dear #username , #1#1 Leave application has been raised by #name
							#1  Type of Leave : #type_leave
							#1  Leave From : #lfrom
							#1  Leave To : #lto 
							#1  Reason : #reason
						    #1 Please give your decision at: #urlf/sanc_verify.php?r=#r&t=#t  " ;

$reco_verify = "Dear #username , #1#1 Leave application has been raised by #name
							#1  Type of Leave : #type_leave
							#1  Leave From : #lfrom
							#1  Leave To : #lto 
							#1  Reason : #reason
						    #1 Please give your decision at: #urlf/reco_verify.php?r=#r&t=#t  " ;

$recopi_verify = "Dear #username , #1#1 Leave application has been raised by #name
							#1  Type of Leave : #type_leave
							#1  Leave From : #lfrom
							#1  Leave To : #lto 
							#1  Reason : #reason
						    #1 Please give your decision at: #urlf/recopi_verify.php?r=#r&t=#t  " ;


$initiate_verify = "Dear #username , #1#1 Leave application has been raised by #name
							#1  Type of Leave : #type_leave
							#1  Leave From : #lfrom
							#1  Leave To : #lto 
							#1  Reason : #reason
						    #1 Please give your decision at: #urlf/recopi_verify.php?r=#r&t=#t  " ;
							

$casual_admin = "Dear #Administrator, #1#1 #name has raised a leave request. 
					#1  Type of Leave : #type_leave
					#1  Leave From : #lfrom
					#1  Leave To : #lto
					#1  Reason : #reason 
					#1 Please do verify at #urlf/office.php?r=#r&t=#t #1#1 " ;


$casual_chair_approve = "Dear #name, #1#1 Your leave application for the period from #lfrom to #lto is sanctioned by chair. ";


//$casual_sanc_admin = "Dear Administrator,#1#1 Leave application of #name for the period from #lfrom to #lto is sanctioned by chair. Please take neccessary actions. #1 Please do print application at #urlf/AppAdmin/Leave/printcl.php?r=#r #1#1 " ;
$casual_sanc_admin = "Dear #Administrator ,#1#1 Leave application of #name for the period from #lfrom to #lto is sanctioned by chair. Application print is available at #urlf/complete_print.php?r=#r&d=#d&t=#t . Please take neccessary actions. " ;


$casual_decline = "Dear #name, #1#1"."Your leave application for the period, from #lfrom to #lto  has been declined by #authority stating reason: #reason.";

$budget_decline = "Dear #name, #1#1"."Your leave application for the period, from #lfrom to #lto  has been declined by budget approval authority.";

$leave_cancel_user = "Dear #name, #1#1"." #usrname has cancelled leave for the period, from #lfrom to #lto .";




$all_sub = "[TIFR] Leave Application - #leavetype ";

$all_sub_budget = "[TIFR] Leave Application - #leavetype - Budget Approval ";
            
$admin_all_msg = "Dear #Administrator, #1#1 #name has raised a leave request. 
					#1  Type of Leave : #type_leave
					#1  Leave From : #lfrom
					#1  Leave To : #lto
					#1  Reason : #reason 
					#1 Please do verify at #urlf/office_lv.php?r=#r&t=#t #1#1 " ;

$office_review = "Dear #name, #1#1 Your leave application for the period from #lfrom to #lto is rejected by the #dpt_admin for following reason: #1 #comment. #1#1 Visit the following URL : #urlf/request_leave.php?r=#r&t=#t   and submit the form with corrections for review. " ; 

$budget_msg = "Dear #deptadmin, #1 #name has raised a leave request for which your approval is required in the capacity of PI.
						#1  Type of Leave : #type_leave
						#1  Leave From : #lfrom
						#1  Leave To : #lto 
						#1  Reason : #reason
						#1  Budget Code : #budget
						#1 Please do verify at #urlf/budget_verify.php?r=#r&t=#t#1#1 " ;




$visitor_all_sub = "[TIFR] Visitor Approval Request ";

$visitor_sanc = "Dear #sanc_name,#1#1 #applicant_name would like to request that we invite #visitor of #institute to visit DTP from #lfrom to #lto. #1 Please do verify at #urlf/visitor_sanc_verify.php?r=#r&t=#t#1#1 ";

$visitor_chair_approve = "Dear #name, #1#1 Your visitor request application for #visitorname of #institute for the period from #lfrom to #lto is sanctioned by chair. ";

$visitor_chair_decline = "Dear #name, #1#1 Your visitor request application for #visitorname of #institute for the period from #lfrom to #lto is declined by chair, stating reason: #comment . ";

$admin_visitor_msg = "Dear #Administrator, #1 Chair has approved visitor approval request raised by #applicant_name. The visitor details are:
						#1 Visitor Name: #visitor_name
						#1 Institue: #institute
						#1 Designation: #Designation
						#1 Visit Period: #lfrom to #lto
	#1 Application print is available at #urlf/visitor_complete_print.php?r=#r&d=#d&t=#t . Please take neccessary actions. ";



// $visitor_office = 


$admin_visitor_msg = "Dear #Administrator, #1#1 Chair has approved visitor approval request raised by #applicant_name. The visitor details are:

                                                #1 Visitor Name: #visitor_name
                                                #1 Institue: #institute
                                                #1 Designation: #Designation
                                                #1 Visit Period: #lfrom to #lto
                            #1 Application print is available at #urlf/visitor_complete_print.php?r=#r&d=#d&t=#t . Please take neccessary actions. ";

$visitor_chair_decline = "Dear #name, #1#1 Your visitor request application for #visitorname of #institute for the period from #lfrom to #lto is declined by chair, stating reason: #comment . ";


$visitor_sanc = "Dear #sanc_name,#1#1 #applicant_name would like to request that we invite #visitor of #institute to visit DTP from #lfrom to #lto. #1 Please do verify at: #urlf/visitor_sanc_verify.php?r=#r&t=#t#1#1 ";


?>

