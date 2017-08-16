<?php
include ("admincheck.php");
$CID = $_POST['sentCourierID'];


$sql = "UPDATE courier SET Approved=\"Yes\" WHERE id= $CID";

if (mysqli_query($db, $sql)) {
    echo "<script language=\"javascript\">";
	echo 'if(confirm("Courier approved")) document.location = \'confirmCourier.php\'';//Redirecting to cutomer homepage
	echo '</script>';
} 	else {
   echo "Error: " . $sql . "<br>" . mysqli_error($db);
}   
?>