<?php

require 'connect.php';
$uname = $_POST['uname'];
$pss = $_POST['pss'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$vehicle_ID = $_POST['vehicle_ID'];

$pss = md5($pss);
$sql = "INSERT INTO courier (username, password, address, telephone, vehicle_ID, Approved) 
VALUES ('$uname', 'pss', '$address', '$telephone', '$vehicle_ID', 'No')";//Setting Apptoved no for admin approval

if (mysqli_query($db, $sql)) {
    echo "<script language=\"javascript\">";
	echo 'if(confirm("Details sent for verification")) document.location = \'index.php\'';//Redirecting to cutomer homepage
	echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}  
?>