<?php
require "conn.php";
// require 'login.php';
$lat = $_POST["latitude"];
$long = $_POST["longitude"];
$VID= $_POST["vehicle_ID"];

 
$mysql_query = "insert into location (vehicle_ID, Longitude, Latitude, parcel_status) values ('$VID', '$long', '$lat', 'pickedup')";

if($con->query($mysql_query) === TRUE){
echo "Success!";
}

else{
echo "Error: " .$mysql_query. "<br/>".$con->error;
}
$con->close();
?>