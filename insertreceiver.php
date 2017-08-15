<html>
<body>
  <div class="body"></div>
		<div class="grad"></div>
<?php
include ("customercheck.php");

$uname = $_POST['uname'];
$pss = $_POST['pss'];

$sql = "SELECT `id` FROM `customer` WHERE `username` = '$login_user'";

if (mysqli_query($db, $sql)) {
    
$results = mysqli_query($db, $sql) or die(mysql_error());

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
extract($row);
//echo $id;
	}
}
	                                     
$sql = "INSERT INTO receiver (username, password, customer_ID) 
VALUES ('$uname', '$pss', '$id')";
//Insert receiver to the database
if (mysqli_query($db, $sql)) {
	echo "<script language=\"javascript\">";
	echo 'if(confirm("Receiver added successfully")) document.location = \'Customerhome.php\'';//Redirecting to cutomer homepage
	echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}  
?>