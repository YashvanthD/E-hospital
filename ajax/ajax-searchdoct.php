<?php

include "../assets/conn.php";

if (isset($_GET['q'])) {

   $Name = $_GET['q'];


   $Query2 = "SELECT * FROM patient WHERE name LIKE '%$Name%' or  id LIKE '%$Name%'LIMIT 25";


   $ExecQuery2 = MySQLi_query($conn, $Query2);

   echo '
 <center><div> 
 
 <table style="float:left">
 <tr><td><h3>Patients</h3></td></tr>

   ';


   while ($Result2 = MySQLi_fetch_array($ExecQuery2)) {
       ?>

        <tr><td>
        <form action='../data/viewpatientsearch.php' method=POST>
            <input type='text' name='did' hidden value='<?php echo $Result2["id"]; ?>'>
             <input type='submit' style='min-width:100%;' value='<?php echo $Result2["id"].'. '.$Result2["name"]; ?>'>
        </form>
   </td>
   <?php
}}
?>
</tr>
</table>




</div> </center>

<style>
    table,tr,td,input[type="submit"]
    {
        border: unset;
        min-width: 100%;
    }

     td:hover{
         background-color: #777;
     }
     td{
         font-size: 20px;;
     }
</style>