<?php
include('couriercheck.php');
$Vehicle_ID = $_POST['vehicleID'];

$sql1 = "SELECT id FROM
courier where username = '$login_user'";

if (mysqli_query($db, $sql1)) {
    
$results = mysqli_query($db, $sql1) or die(mysql_error());
$x=1;

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

extract($row);
	}
}

$sql3 = "UPDATE courier SET vehicle_ID = '$Vehicle_ID'
where id = '$id'";

if (mysqli_query($db, $sql3)) {
   echo "<script language=\"javascript\">";
	echo 'if(confirm("You have successfully switched the vehicle")) document.location = \'Courierhome.php\'';//Redirecting to cutomer homepage
	echo '</script>';
   }
  else{
  echo "Error: " . $sql3 . "<br>" . mysqli_error($db);
  }
   
?>