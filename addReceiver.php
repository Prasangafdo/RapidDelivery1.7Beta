<?php
include("customercheck.php");  
?>
<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
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
                <a class="navbar-brand page-scroll" href="customerHome.php" style="color:#fff">Rapid Delivery</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul>
                <div class="userName">    
<?php 
echo "<h3 style=\"color:#fff\"> $login_user </h3>";
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

<body>
<div class="body">
</div>
<div class="grad"></div>
		<div class="header">
			<div>Register a <br/><br/>
            <span>Receiver</span></div>
		</div>
		<br>
		<div class="login">
           <form action="insertreceiver.php" method="post">
<br/>
				<input id="uname" name="uname" placeholder="Username" type="text">
        		<input id="pss" name="pss" placeholder="Password" type="password">
				<input name="submit" type="submit" value="Register">
                               
				</form>      
</body>



</html>
