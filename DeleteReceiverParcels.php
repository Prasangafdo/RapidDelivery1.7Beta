<?php

require 'connect.php';
$parcel_ID = $_POST['parcel_ID'];

    $update = "update parcel_status SET status = 'Delivered' WHERE parcel_ID = '$parcel_ID'";

	if(mysqli_query($db, $update)){
		echo "<script language=\"javascript\">";
	echo 'if(confirm("Parcel marked as delivered")) document.location = \'Receiverhome.php\'';//Redirecting to cutomer homepage
	echo '</script>';
	}
	else {
   echo "Error: " . $sql . "<br>" . mysqli_error($db);
} 

?>