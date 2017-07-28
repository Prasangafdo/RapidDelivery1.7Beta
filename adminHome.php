<?php
include("admincheck.php");   
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
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>


<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

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
                        <a class="page-scroll" href="#Couriers">Couriers</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Customers">Customers</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Receivers">Receivers</a>
                    </li>
                    <li>
                    	<a class="page-scroll" href="#Parcels">Parcels</a>
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
        </div>
    </nav>

    <!-- Intro Section -->
    <section id="Couriers" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="welcomePane">
                    <h1>Welcome to Rapid Delivery</h1>
                    <div class="welcomePane-img">
                    <img class="img-responsive" src="images/Courier-hands-960x360.jpg">
                    	<p>&nbsp;</p>
                   <!-- <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a> -->
                </div>
                
            </div>
        </div>
    </section>

    <section id="Customers" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>All Couriers</h1>
                    
                      <table class="container">
	<thead>
		<tr>
			<th><h1>Courier ID</h1></th>
			<th><h1>Username</h1></th>
			<th><h1>Address</h1></th>
            <th><h1>Telephone</h1></th>
			<th><h1>Vehicle ID</h1></th>
		</tr>
	</thead>
	<tbody>
<?php

$sql = "SELECT * from courier";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		extract($row);	//Password is not extracting due to security issues.
	  echo	"
		<tr>
			<td>$id</td>
			<td>$username</td>
			<td>$address</td>
			<td>$telephone</td>
			<td>$vehicle_ID</td>
		</tr>
		";
    }
} else {
    echo "0 results";
}

echo "";
?>
</tbody>
</table>
                </div>
            </div>
        </div>
    </section>

    <section id="Receivers" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>All Customers (Senders)</h1>
                     
                      <table class="container">
	<thead>
		<tr>
			<th><h1>Customer ID</h1></th>
			<th><h1>Username</h1></th>
			<th><h1>Email Address</h1></th>
            <th><h1>Address</h1></th>
			<th><h1>Telephone</h1></th>
		</tr>
	</thead>
	<tbody>
<?php

$sql = "SELECT * from customer";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		extract($row);	//Password is not extracting due to security issues.
	  echo	"
		<tr>
			<td>$id</td>
			<td>$username</td>
			<td>$email</td>
			<td>$address</td>
			<td>$tel</td>
		</tr>
		";
    }
} else {
    echo "0 results";
}

echo "";
?>
</tbody>
</table>
        
                </div>
            </div>
        </div>
    </section>

    <section id="Parcels" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>All Receivers</h1>
                      <table class="container">
	<thead>
		<tr>
			<th><h1>Receiver ID</h1></th>
			<th><h1>Username</h1></th>
		</tr>
	</thead>
	<tbody>
<?php

$sql = "SELECT * from receiver";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		extract($row);	//Password is not extracting due to security issues.
	  echo	"
		<tr>
			<td>$id</td>
			<td>$username</td>
		</tr>
		";
    }
} else {
    echo "0 results";
}

echo "";
?>
</tbody>
</table>
        
                </div>
            </div>
        </div>
    </section>

    <section id="track" class="track-section">
        <div class="container">
            <div class="row">
                <div class="">
                    <h1>All Parcels</h1>
                      <table class="container">
	<thead>
		<tr>
			<th><h1>Parcel ID</h1></th>
			<th><h1>Customer ID</h1></th>
			<th><h1>Pickup Address</h1></th>
            <th><h1>Delivery Address</h1></th>
			<th><h1>Package Type</h1></th>
            <th><h1>Contact number</h1></th> <!-- Need to add state address for pickup location and delivery location.-->
		</tr>
	</thead>
	<tbody>
<?php

$sql = "SELECT * from parcel";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		extract($row);	//Password is not extracting due to security issues.
	  echo	"
		<tr>
			<td>$id</td>
			<td>$customer_ID</td>
			<td>$pickup_address</td>
			<td>$delivery_address</td>
			<td>$package_type</td>
			<td>$contact_no</td>
		</tr>
		";
    }
} else {
    echo "0 results";
}

echo "";
//$db->close();
?>
</tbody>
</table>
</div>
</div>

             
        <!--       
       <div class="map-Border">
        <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          //center: {lat: 7.8731, lng: 80.7718},
		  center: {lat: 7.1824795, lng: 79.9043215},
          //zoom: 8
		  zoom:15
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPtg5NhcYerzCS0sHvWAff9XqUipqY8LU&callback=initMap"
    async defer></script>
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
