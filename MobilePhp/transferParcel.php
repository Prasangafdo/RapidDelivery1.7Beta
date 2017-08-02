<?php
require "conn.php";

$VID = $_POST["vehicleID"];
$CID = $_POST["courierID"];
$PID = $_POST["parcelID"];

$sql3 = "UPDATE parcel_status SET Vehicle_ID = '$VID'
where courier_id = '$CID' AND parcel_ID = '$PID'";

if (mysqli_query($con, $sql3)) {
   echo ".$PID";
   }
?>