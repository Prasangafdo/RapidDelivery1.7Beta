<?php
require "conn.php";

$VID = $_POST["vehicleID"];
$CID = $_POST["courierID"];
/*
echo $VID;
echo $CID;
*/
$sql3 = "UPDATE courier SET Vehicle_ID = '$VID'
where id = '$CID'";

if (mysqli_query($con, $sql3)) {
   echo "You have switched the vehicle successfully!";
   }
?>