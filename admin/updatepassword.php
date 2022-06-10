<?php
session_start();
include '../assets/conn.php';
$u=$_SESSION['admin'];
$p=$_POST['pass'];

$sql = "update admin set password='$p' where name='$u';";  

$result = mysqli_query($conn, $sql);


$errorr=mysqli_error($conn);
if ($errorr ){
    $_SESSION['emsg']='Sorry Something Went Wrong';
    echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">'; 
        
		}
else {
    $_SESSION['emsg']='Successfully Updated';
        echo '<meta http-equiv="refresh" content="0; url=../assets/success.php">';
	}
    
    
    ?>
