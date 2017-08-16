<?php
require 'connect.php';
$uname = $_POST['uname'];
$pss = $_POST['pss'];
$pss = md5($pss);
$email = $_POST['email'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];

$sql = "INSERT INTO customer (username, password, email, address, tel)
VALUES ('$uname', '$pss', '$email', '$address', '$telephone')";

if (mysqli_query($db, $sql)) {
     echo "<script language=\"javascript\">";
	echo 'if(confirm("Registration complete")) document.location = \'customer.php\'';//Redirecting to cutomer homepage
	echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
} 
?>





