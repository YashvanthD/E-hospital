<?php
require_once "../assets/conn.php";
$state_id = $_POST["hosp"];

$result = mysqli_query($conn,"SELECT * FROM doctor where hospital = '$state_id' ");
?>
<option value="">Select Doctor</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["name"];?>"><?php echo $row["name"];?></option>
<?php
}
?>