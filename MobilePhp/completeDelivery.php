<?php
require "conn.php";

$PID = $_POST["parcelID"];

$sql = "UPDATE parcel_status SET status= 'Delivered'
where parcel_ID= '$PID'";

if (mysqli_query($con, $sql)) {
   echo ".$PID";
   }
?>