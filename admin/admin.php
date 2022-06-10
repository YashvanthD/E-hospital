<?php
session_start();

if(! isset( $_SESSION['admin'])  ){
  echo '<meta http-equiv="refresh" content="100; url=/hospital">';
}
else{
$u=$_SESSION['admin'];

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $u;?></title>
<style>

</style>
<link rel="stylesheet" href="../style.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

</head>
<body>

<div class="header sticky-100" >
  <center><h2>Siddaganga Instutute of Technology</h2></center>
</div>
<div></div>
<div class="sidenav sticky-25 left" >
<button class="tablink" onclick="openCity('home', this, 'blue')" id="defaultOpen">Home</button><br>
<button class="tablink" onclick="openCity('profile', this, 'green')">Profile</button><br>
<button class="tablink" onclick="openCity('update', this, 'red')">Update</button><br>
<button class="tablink" onclick="openCity('adddoctors', this, 'gray')">Manage Doctors</button>
<button class="tablink" onclick="openCity('viewdoctors', this, 'pink')">Doctor list</button>
<button class="tablink" onclick="openCity('addpatients', this, '	#87CEEB')">Add Patients</button>
<button class="tablink" onclick="openCity('patients', this, 'black')">Patient list</button>
<button class="tablink" onclick="openCity('app', this, 'maroon')">Appointments</button>
<button class="tablink" onclick="openCity('querry', this, 'purple')">querry</button>
<button class="tablink" onclick="openCity('download', this, 'purple')">Download Data</button>
<button class="tablink" onclick="window.location='logout.php';">Logout</button>
</div>
</head>



<div class="main ">
  

<form style="float: right;">
<input class="sticky-100" type="text" size="30" placeholder="Search" onkeyup="show_result(this.value)">
</form>

<h2 style="margin-left:3%;">Hi <?php echo $u; ?></h2>


<div>


<div id="live_search"></div>
</div>
  <div class="content">
  <div id="home" class="tabcontent">
   Hi  <?php echo $u; ?>
      
</div>

<div id="profile" class="tabcontent">
  <h1>Profile</h1>
  <hr>
  <h3>I am <?php echo $u; ?> handling the Electronic Hospital Records. 
I am honarable on my Works. </h3> 
</div>

<div id="update" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <button style="border:unset;width:250px;height:40px;font-size:25px; background-color:white"onclick="openCity('passreset', this, 'white')">Update Password</button>
</div>

<div id="passreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
  <form action="updatepassword" method=POST>
      <table style="padding:20px;margin:15px;border:unset;background-color:white">
      <tr>
        <td> Password : </td><td><input type="text" name="pass"><br></td>
      </tr>
      <tr>
        <td> Reenter Password : </td> <td> <input type="text" name="pass2"><br></td>
      </tr>
    <tr>  <td colspan="2"><input  style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Reset"></td></tr>
      </table>
   
</form>
</center>
</div>



<div id="viewapp" class="tabcontent">
<h1>list Appointment</h1>
<hr>
<?php include '../assets/listappointments.php';?>

</div>


<div id="viewdoctors" class="tabcontent">
<h1>View Doctors</h1>
<hr>

<?php include '../data/doctorlist.php';
echo $table;
?>

</div>


<div id="adddoctors" class="tabcontent">
<h1>Add Doctors</h1>
<hr>
<center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
<form action="../assets/adddoctors.php"  method=POST>
    <tr>
      <td>Name</td><td><input type="text" name="dname" required></td>
    </tr>
    <tr>
      <td>phone</td><td><input type="number" name="dnumber" required ></td>
    </tr>
    <tr>
      <td>speacialization</td><td><input type="text" name="dspecialization" required></td>
    </tr>
    <tr>
      <td>Hospital</td><td><input type="text" name="dhospital" required></td>
    </tr>
    <tr>
      <td>address</td><td><input type="address" name="dadress" required></td>
    </tr>
    <tr>
      <td>date of birth</td><td><input type="date" name="ddob" required></td>
    </tr>
    <tr>
      <td>email</td><td><input type="address" name="dmail" required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit"  style="width:100%;height:40px;font-size:20px; background-color:white" value="Add"> </td>
    </tr>
    </table>
    </form>

    </center>
</div>




<div id="querry" class="tabcontent">
<h1>Querries</h1>
<hr>
<?php include '../assets/queries.php';?>
</div>



<div id="addpatients" class="tabcontent">
<h1>Add Patient</h1>
<hr>
<center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
<form action="../assets/addpatients.php"  method=POST>
    <tr>
      <td>Name</td><td><input type="text" name="dname" required></td>
    </tr>
    <tr>
      <td>phone</td><td><input type="number" name="dnumber"  pattren="[0-9]{10}" required ></td>
    </tr>
    <tr>
      <td>Aadhar</td><td><input type="number" name="daadhar" pattren="[0-9]{12}" required></td>
    </tr>
    <tr>
      <td>Gender</td><td> male <input type="radio" name="dgender" value="male" required> Female <input type="radio" name="dgender" value="female" required></td>
    </tr>
    <tr>
      <td>address</td><td><input type="address" name="dadress" required></td>
    </tr>
    <tr>
      <td>date of birth</td><td><input type="date" name="ddob" required></td>
    </tr>
    <tr>
      <td>email</td><td><input type="mail" name="dmail" required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit"  style="width:100%;height:40px;font-size:20px; background-color:white" value="Add"> </td>
    </tr>
    </table>
    </form>

    </center>
</div>

<div id="viewpatientsdetails" class="tabcontent">
<h1> Name of the Patient </h1>

<?php 

include '../data/viewpatient.php';
echo $table;
?>
</div>



<div id="patients" class="tabcontent">
<h1> Patients </h1>
<hr>
<?php include '../data/patientlist.php';
echo $table;
?>
</div>


<div id="app" class="tabcontent">
<table class="stick" style="float:right">
<?php include '../data/listapp.php';?>  

<tr><td style="background-color:#F8E0E0">Pending - <?php echo $s0;?> </td> <td style="background-color:#CECEF6">On Progress - <?php echo $s1;?></td><td style="background-color:#BFE8AE">Completed - <?php echo $s2;?></td></tr>
</table>
<h1> All Appointments </h1>

<hr>


<?php 
echo $table;
?>
</div>


</div>
</div>




<div id="download" class="tabcontent">
<h1> Data Center </h1>
<hr>

<a href="../download/patient.php"><button  id="down" styele="border:unset;">Patient Data base</button></a>
<a href="../download/doctor.php"><button  id="down" styele="border:unset;">Doctor Data base</button></a>
<a href="../download/diabetes.php"><button  id="down" styele="border:unset;">Diabetes Data base</button></a>
<a href="../download/appointments.php"><button  id="down" styele="border:unset;">All appointments Data base</button></a>

</div>



<script src="../js.js"></script>
<style>

 #down{
   border: unset; 
 padding:30px;
 border-radius: 30px;font-size:20px;}
</style>

</body>
</html>

   
</body>
</html> 
<?php 


}
?>


<script>
function show_result(str) {
  if (str.length==0) { 
    document.getElementById("live_search").innerHTML="";
    document.getElementById("live_search").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
// script for browser version above IE 7 and the other popular browsers (newer browsers)
    xmlhttpreq=new XMLHttpRequest();
  } else { 
// script for the IE 5 and 6 browsers (older versions)
    xmlhttpreq=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpreq.onreadystatechange=function() {
//check if server response is ready  
    if (this.readyState==4 && this.status==200) {
      document.getElementById("live_search").innerHTML=this.responseText;
      document.getElementById("live_search").style.border="1px solid #A5ACB2";
    }
  }

  xmlhttpreq.open("GET","../ajax/ajax-search.php?q="+str,true);
  xmlhttpreq.send();
}
</script>
</head>
<body>


