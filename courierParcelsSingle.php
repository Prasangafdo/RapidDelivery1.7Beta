<?php
include("couriercheck.php"); 
$PID = $_POST['parcel_ID'];


$sql1 = "SELECT `id` FROM `courier` WHERE `username` = '$login_user'";//Getting courier ID
$result = $db->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$UID = $row["id"];
      //  echo  "Courier_ID " .$UID ;
      
}

}

$sql2 = "SELECT `customer_id` FROM `parcel` WHERE `id` = '$PID'";//Getting Customer ID
$result = $db->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$CID = $row["customer_id"];
		//echo  "<br/>";
       // echo  "Customer_ID " .$CID ;
     }
}

$sql3 = "SELECT `vehicle_ID` FROM `courier` WHERE `username` = '$login_user'";//Getting vehicle ID
$result = $db->query($sql3);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$VID = $row["vehicle_ID"];
		//echo  "<br/>";
        //echo  "Vehicle_ID " .$VID ;   
	}
}


$sql = "INSERT INTO parcel_status (courier_ID, customer_ID, status, vehicle_ID, parcel_ID) 
VALUES ('$UID', '$CID', 'Pickedup', '$VID', '$PID')";
//Inserting data to Parcel_Status table

if (mysqli_query($db, $sql)) {
  echo "<script language=\"javascript\">";
	echo 'if(confirm("Parcel picked up")) document.location = \'Courierhome.php\'';//Redirecting to cutomer homepage
	echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

/*
$sql = "delete from parcel where id = $PID";
//Deleting data from parcel

if (mysqli_query($db, $sql)) {
   // echo "Value deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}  */ 
?> 

