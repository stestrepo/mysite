<?php
include("../includes/config.leave.php");
 $id = $_GET['id'];

 $results1=$mysqli1->query("SELECT * from upload_files_holdingtable_visitors where id='$id'  ");
 if($row = $results1->fetch_assoc()) {
    // echo $id1 = $row["id"] ;
     $ccode = $row["ccode"] ;
     $uploadfiles = $row["uploadfiles"] ;
 }
 $uploadfiles12='../leavefiles/'.$uploadfiles;

$results2 = $mysqli1->query("DELETE FROM upload_files_holdingtable_visitors where id='$id'  " );

unlink($uploadfiles12 );

echo "<script> alert('File deleted Successfully')</script>" ;

echo "<script>  window.location='../uploaddocvisitor.php?cc=".$ccode."'</script>";
?>