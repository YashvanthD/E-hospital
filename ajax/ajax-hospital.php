<?php
require_once "../assets/conn.php";
$state_id = $_POST["specialization"];

$result = mysqli_query($conn,"SELECT * FROM doctor where specialization = '$state_id' ");
?>
<option value="">Select Hospital </option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["hospital"];?>"><?php echo $row["hospital"];?></option>
<?php
}
?>