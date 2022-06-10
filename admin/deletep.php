<?php
session_start();
include '../assets/conn.php';

$p=$_POST['did'];

$sql = "delete from patient where id=$p;";  

$result = mysqli_query($conn, $sql);


$errorr=mysqli_error($conn);
if ($errorr ){
    $_SESSION['emsg']='Sorry Something Went Wrong';
    echo $errorr;
    echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">'; 
        
		}
else {
    $_SESSION['emsg']='Successfully Deleted';
        echo '<meta http-equiv="refresh" content="0; url=../admin/admin.php">';
	}
    
    
    ?>
