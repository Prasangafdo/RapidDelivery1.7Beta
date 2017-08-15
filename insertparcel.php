<html>
<body>
  <div class="body"></div>
		<div class="grad"></div>
<?php
include ("customercheck.php");

$pickup_address = $_POST['pickup_address'];//Getting posted data
$delivery_address = $_POST['delivery_address'];
$package_type = $_POST['package_type'];
$contact_no = $_POST['contact_no'];
$state_address = $_POST['state_address'];
$note = $_POST['note'];

$sql = "SELECT `id` FROM `customer` WHERE `username` = '$login_user'";//Selecting customer ID automatically
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$realID = $row["id"];
    }
    $insert = "INSERT INTO parcel (customer_id, pickup_address, delivery_address, package_type, contact_no, state_address, note) 
VALUES ('$realID', '$pickup_address', '$delivery_address', '$package_type', '$contact_no', '$state_address', '$note')";

	mysqli_query($db, $insert);
    echo "<script language=\"javascript\">";
	echo 'if(confirm("Parcel Added successfully")) document.location = \'Customerhome.php\'';//Redirecting to cutomer homepage
	echo '</script>';
} 
	else {
   echo "Error: " . $sql . "<br>" . mysqli_error($db);
} 

?>
</body>
</html>