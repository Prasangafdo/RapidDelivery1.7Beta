<?php
include("receivercheck.php");  
?>

<!DOCTYPE html>
<html>
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/scrolling-nav.css" rel="stylesheet">
     <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
     <link href="css/scrolling-nav.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<title>Track the package</title>
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
        padding-top:5%;
      }
    </style>
    
<body id="map-section" data-spy="scroll" data-target=".navbar-fixed-top" >

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
                <a class="navbar-brand page-scroll" href="Customerhome.php">Rapid Delivery</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="hidden">
                        <a class="page-scroll" href="#map-section"></a>
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
                </div>
                </div>
                </div>
                </nav>

<?php
$parcel_ID = $_POST['parcel_ID'];

$sql1 = "SELECT status FROM
parcel_status where parcel_ID = '$parcel_ID'";//Check whether the parcel is delivered.

if (mysqli_query($db, $sql1)) {
    
$results = mysqli_query($db, $sql1) or die(mysql_error());
$x=1;

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

extract($row);
//echo $status;

if($status == "Pickedup"){//Checking wether the parcel is already delivered or not

$sql2 = "SELECT Vehicle_ID FROM
parcel_status where parcel_ID = '$parcel_ID'";

if (mysqli_query($db, $sql2)) {
    
$results = mysqli_query($db, $sql2) or die(mysql_error());
$x=1;

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

extract($row);

//echo $Vehicle_ID ;


$sql = "SELECT Longitude, Latitude FROM
location where vehicle_ID = '$Vehicle_ID'";

if (mysqli_query($db, $sql)) {
    
$results = mysqli_query($db, $sql) or die(mysql_error());
$x=1;

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
if ($x <= 1)
{
$x = $x + 1;
extract($row);

//echo $Longitude .'<br/>';

//echo $Latitude ;
        }
$x=0;
    }
  }
}
$x=0;

}//End of the sql
}
}
$x=0;

}


?>


<div class="map-Border">
        <div id="map"></div>
    <script>
      var map;
 

      function initMap() {
  var myLatLng = {lat:<?php echo "$Latitude";?>, lng: <?php echo "$Longitude" ?>};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Your parcel'
  });
}

    </script><!--API key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPtg5NhcYerzCS0sHvWAff9XqUipqY8LU&callback=initMap"
    async defer></script>
    
    
    <br/>
    <br/>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style4.css">
     <form action="Receiverhome.php" style=" display: inline-block">
    <button data-hover="Go to page"><div>Go back to Home</div></button>
    </form>
   
    <script type="text/javascript">
   setTimeout(function(){
   window.location.reload(1);
}, 10000);//Reload page for every 10 seconds
</script>

       </div>
       </section>
   

</body>
</html>