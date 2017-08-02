<?php //This will establish the connection with the database.
$db_name = "id1106592_rapiddelivery";
$mysql_username = "id1106592_prasanga";
$mysql_password = "Lykan";
$server_name = "localhost";
$con = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

if($con){
echo "DB connection success!";
}

else
echo "Connection failed!";

?>