<?php 
session_start();
// echo $total = count($_FILES['file']['name']);
include("../includes/config.leave.php");

echo  $ccode1=$_POST['ccode1'];
// alert($_FILES['file']['name']);

// for($i=0; $i<$total; $i++) {
	//Get the temp file path
	echo $tmpFilePath = $_FILES['file']['tmp_name'];
	// alert("openout");
	$file_type=$_FILES['file']['type'];
	//Make sure we have a filepath
	//Setup our new file path
  	// $fil_name=$_FILES['file']['name'] ;
  	$fil_name=$ccode1 . '.'.$_FILES['file']['name'] ;
  	// /var/www/newmodules/AppAdmin/assets_/global/plugins/dropzone
	$newFilePath = "/var/www/newmodules/AppAdmin/Leave/temp_visitorfiles/".$fil_name ;
	// $newFilePath = "../../../../Leave/leavefiles/".$fil_name ;
	if($file_type =="application/x-msdownload")
	{
		// alert("open");
		echo'<script type="text/javascript" > alert("File format not supported" )</script>';
	}
	else
	{
		// alert("opencl");
		if (move_uploaded_file($tmpFilePath, $newFilePath) ) {
		  // $upload_files[]=$fil_name ;
			// alert("openclll");
			

			$insert1 = $mysqli1->query(" INSERT INTO `upload_files_holdingtable_visitors`(`ccode`, `uploadfiles`) VALUES ( '$ccode1' , '$fil_name' ) ");

		 echo "The file ". basename( $_FILES['file']['name']). " has been uploaded.<br>";


		} else {
		 echo "Sorry, there was an error uploading your file.<br>";
		}
	}



?>