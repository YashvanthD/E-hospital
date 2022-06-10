<?php
session_start();
include '../assets/conn.php';

$p=$_POST['did'];

$sql = "delete from doctor where did=$p;";  

$result = mysqli_query($conn, $sql);


$errorr=mysqli_error($conn);
if ($errorr ){
    $_SESSION['emsg']='Sorry Something Went Wrong';
    echo $errorr;
    echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">'; 
        
		}
else {
    $_SESSION['emsg']='Successfully Updated';
        echo '<meta http-equiv="refresh" content="0; url=../assets/success.php">';
	}
    
    
    ?>
