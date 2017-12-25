<?php
	session_start();
	if($_SESSION["u_name"]==null)
	    header("location:Sign_up.php");

	require "connection.php";
?> 

<!DOCTYPE html>
<html>

    <head>
        <title>Toll Payment</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="styleCalc.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="script.js"></script>
        <style type="text/css">
		#map {
		float: right;
        height:30em;
        width: 48%;
        margin-right: 10%;
        margin-top: 1.2%;
       }
       </style>
    </head>

    <body>

        <div class=".container">

            <?php include 'header.php';?>
			
            <div class="nav_section" id="nav">
                <a class="nav" href="index.php">Home</a>
                <a class="nav" href="payment.php">Payment</a>
                <a class="nav" id="active" href="Calc.php">Calculate</a>
                <a class="nav" href="profile.php">Profile</a>
                <a class="nav" href="logout.php" id="logout">Logout</a>
            </div>
            
            <div class="con">
            <div style="color:white;text-shadow:3px 2px #112222;font-size: 2.0em;text-align: center;">
					Toll Calculator:
			</div>
            
				<form id="f1" method="post" action="Calc_ctrl.php">
					
					<label class="labelip">Source:</label>
					<select  class = "cen1" name="source">
						<option value="CST">CST</option>
						<option value="Pune">Pune</option>
					</select> 
					<br><br>
					<label class="labelip">End:</label>
					<select  class = "cen1" name="end">
						<option value="Pune">Pune</option>
						<option value="Nag">Nagpur</option>								
						<option value="Nas">Nashik</option>
						<option value="Awb">Aurangabad</option>
						<option value="CST">CST</option>
					</select> 
					<br><br>
					<label class="labelip">Pay By:</label>
					<select  class = "cen1" name="wallet">
						<option value="pref_1">PayTM</option>
						<option value="pref_2">Oxigen</option>
						<option value="pref_3">ICICI pocket</option>
					</select> 
					<br><br>
					<label class="labelip">Vehicle_type:</label>
					<select  class = "cen1" name="vehicle_type">
						<option value="car">Car</option>
						<option value="3-axle">3-axle</option>
						<option value="4-6-axle">4-6-axle</option>
						<option value="7+axle">7+axle</option>
					</select> 
					<br><br>
					<label class="labelip">Trip:</label>
					<select  class = "cen1" name="trip">
						<option value="one_way">One_way</option>
						<option value="round_trip">Round_trip</option>
					</select> 
					<br><br>
					<span>Calculated Toll is : <?php 
						if($_SESSION['one_way'] != "/0")
							echo $_SESSION['one_way'];
						else
							echo $_SESSION['round_trip'];
					?></span><br><br>
					<input type="submit" name="submit" id="b1" value="Calculate Your Toll">
				</form>

				<div id="map"></div>
				<br>
			
			</div>
			
			<script>			
		      function initMap() {
		        var pntA = new google.maps.LatLng(19.0759733, 72.87764829999999),
		            pntB  = new google.maps.LatLng(18.5206624, 73.8567415);
		        var uluru = {lat: 19.0327801, lng: 72.896345};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 15,
		          center: pntA
		        });
		        markerA = new google.maps.Marker({
		            position: pntA,
		            title: "point A",
		            label: "A",
		            map: map
		        }),
		        markerB = new google.maps.Marker({
		            position: pntB,
		            title: "point B",
		            label: "B",
		            map: map
		        });
		        directionsService = new google.maps.DirectionsService,
		        directionsDisplay = new google.maps.DirectionsRenderer({
		            map: map
		        });
		        displayRoute(directionsService, directionsDisplay, pntA, pntB);
		      }
		      function displayRoute(directionsService, directionsDisplay, pointA, pointB){
		        directionsService.route({
		          origin: pointA,
		          destination: pointB,
		          avoidTolls: false,
		          travelMode: google.maps.TravelMode.DRIVING
		        }, (res, status)=>{
		          if(status === google.maps.DirectionsStatus.OK){
		            directionsDisplay.setDirections(res);
		          }else {
		            window.alert('Directions request failed due to ' + status);
		        }
		        });
		      }
		    </script>
		    <script async defer
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5jyqlYTh1pTBxlnN28dwYkuTdGOatzs0&callback=initMap">
		    </script>
		</div>
			<div class="footer" id="footer">
			
            </div>

        </div>
<?php require"footer.php"; ?>
    </body>

</html>