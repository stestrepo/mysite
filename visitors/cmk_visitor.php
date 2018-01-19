<?php 

session_start(); 
 $cc=$_SESSION['ccode'];
include("includes/config.leave.php");
 $cc12 = $_GET['cc1'];

?>

<table class="table">
    <thead>
        <tr>
            <th>Sr.No. </th>
            <th> Name Of File </th>
            <th>Delete</th>  
            <th>Preview</th>                                                                                            
        </tr>
    </thead  >

    <?php

    $result=$mysqli1->query("SELECT * from upload_files_holdingtable_visitors where ccode='$cc12'  ");

    $i=0;
    while($row = mysqli_fetch_array($result))
    {
    $id=$row['id'];
    $ccode56=$row['ccode'];
    $uploadfiles=$row['uploadfiles'];

    if($uploadfiles){

            if(  stripos($uploadfiles, '.') !== FALSE  ){
                $v_extract = explode(".", $uploadfiles);
                $v_ex = $v_extract[1];
            }else{
                $v_ex = $uploadfiles;
            }
    }


    $i++;
    ?>


    <tbody>
        <tr>
            <td> <?php echo $i; ?> </td>
            <!-- <td> --> <?php //echo $ccode56; ?><!-- </td> -->
            <td><?php echo $v_ex ; ?></td>
            <!-- <a href="leavefiles/<?php echo $v; ?>" target="new"> -->

            <td><a href="post/delete_tmp_files_visitor.php?id=<?php echo $id; ?>" role="button" class="btn red" id="<?php echo $id;?>" > Delete </a></td>

            <td> <a href="temp_visitorfiles/<?php echo $uploadfiles; ?>" target="new">
                <button class="demo-loading-btn btn btn-primary" name="filename" value="<?php echo $id;?>">View</button> 
                </a>
            </td>
        </tr>
    </tbody>


    <?php
    }
    $records = mysqli_num_rows($result);
    ?>

</table>



                               