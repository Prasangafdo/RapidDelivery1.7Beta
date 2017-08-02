<?php
include("couriercheck.php");   
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rapid Delivery</title>
    
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
     
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">


</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Rapid Delivery</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Find-couriers">Find Parcels</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Switch-Vehicle">Switch Vehicle</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#View-completed-jobs">View Jobs</a>
                    </li>
                </ul>
                <ul>
                <div class="userName">               
<?php 
echo "<h3> $login_user </h3>";
?>

                    
                    <form action="logout.php" method="post">
                    <div class="logout">
                    <input name="btn_logout" type="submit" value="Logout">
				</form>
            </div>
            </ul>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="courier_intro-section" class="courier_intro-section">
        <div class="container">
            <div class="row">
                <div class="welcomePane">
                    <h1>Welcome to Rapid Delivery</h1>
                 <!--   <div class="welcomePane-img">
                    	
                </div>-->
                <img class="img-responsive" src="images/courier-services-2.jpg">
                <h1>About Rapid Deliery </h1>
                   	<p align="justify"> 
                    Rapid Delivery is a 24/7 courier service, located in Colombo, Sri Lanka. Our company was founded in mid-2017 by a final year software engineering student of the University of the west of England with the aim of providing a better courier service that is focused on delivery transparency with the support of GPS. 
Packages are collected from any Sri Lankan address and taken to any final destination requested by the client. Although “Rapid Delivery” originally only delivers parcels to Sri Lankan addresses, they now deliver parcels to any global location requested by incorporated clients.  
Rapid Delivery us, utilize Intelligent Dispatch, which is an artificial intelligence and fleet management system to allocate a booking to the most appropriate vehicle for transport mode (including bicycles, motorbikes and vans of varying sizes).
</p>
            </div>
        </div>        
    </section>


    <section id="Find-couriers" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Find Parcels</h1>
                    	<p align="justify"> 
                      
                         <form  method="post" action="courierparcels.php" >
 						 <input type="text" name="pickupaddress" id="pickupaddress" placeholder="Pickup state">
                         <input type="text" name="stateaddress" id="stateaddress" placeholder="Delivery state">
                        <input type="submit" Value="Search" id="" class="submitBtn">
                        </form>
                        </p>
                     
                </div>
            </div>
        </div>
    </section>


    <section id="Switch-Vehicle" class="exchange-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Switch Vehicle</h1>
                    <p align="justify"> 
                      
                         <form  method="post" action="shiftVehicle.php" >
 						 <input type="text" name="vehicleID" id="vehicleID" placeholder="Vehicle ID">
                        <input type="submit" Value="Shift Package" id="" class="submitBtn">
                        </form>
                        </p>
                </div>
            </div>
        </div>
    </section>


    <section id="View-completed-jobs" class="completedJobs-section">
        <div class="container">
            <div class="row"> 
            <div class="col-lg-12">
                    <h1>Your Jobs</h1>
                    
  <table class="container">
	<thead>
		<tr>
			<th><h1>Customer ID</h1></th>
			<th><h1>Parcel ID</h1></th>
			<th><h1>Status</h1></th>
			<th><h1>Vehicle ID</h1></th>
		</tr>
	</thead>
	<tbody>
<?php
$sql = "SELECT id from courier where username = '$login_user'";

    
$results = mysqli_query($db, $sql) or die(mysql_error());
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

extract($row);

//echo $id;//Getting  the customer_ID	
}

$sql = "SELECT * FROM parcel_status where courier_id = $id";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		extract($row);	
	  echo	"
		<tr>
			<td> $customer_id  </td>
			<td>$parcel_ID</td>
			<td>$status</td>
			<td>$Vehicle_ID</td>
		</tr>
		";
    }
} else {
    echo "0 results";
}

echo "";
$db->close();
?>
</tbody>
</table>
            </div>
        </div>
        
    </section>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>