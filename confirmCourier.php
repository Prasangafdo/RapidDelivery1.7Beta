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
                </div>               
            </div>  
        </div>
        
     <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style4.css">
     <form action="adminHome.php" style=" display: inline-block">
    <button data-hover="Click here"><div>Go Back to home</div></button>
    </form>
    </section>

    <section id="Customers" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Pending Couriers</h1>
                    
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

$sql = "SELECT * from courier where Approved = 'No'";
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
        
        <!--Input form-->
        <section>
        <br>
        <br>
        <ul class="input-list style-2 clearfix">
          <li>
            <form action="confirmCourier-Backend.php" style=" display: inline-block" method="post">
             <input type="text" placeholder="Courier ID" name="sentCourierID">
                <button data-hover="Confirm"><div>Approve courier</div></button>
                </form>
          </li>
                
        </ul>
        
        
      </section>
        
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
