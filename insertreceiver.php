<?php

require 'connect.php';
include('customerSession.php');
$uname = $_POST['uname'];
$pss = $_POST['pss'];

$sql = "SELECT `id` FROM `customer` WHERE `username` = '$login_session'";

if (mysqli_query($con, $sql)) {
    
$results = mysqli_query($con, $sql) or die(mysql_error());

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
extract($row);
$id;
	}
}
	                                     
$sql = "INSERT INTO receiver (username, password, customer_ID) 
VALUES ('$uname', '$pss', '$id')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}  
?>