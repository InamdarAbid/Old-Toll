<?php
session_start();
if($_SESSION["u_name"]==null)
    header("location:Sign_up.php");
?> 
 <!DOCTYPE html>
<html>

    <head>
        <title>Toll Details</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="stylepaymentTrip.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script>
		$(document).ready(function() {
			$("#datepicker").datepicker();
		});
		</script>        
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#f1").validate({
				rules:
				{
					date:
					{
						required:true	
					}
				},
				messages:
				{
					date:
					{
						required:"This fiels is required"
					}
				},
				submitHandler: function(form){
						form.submit();
					}

			});
		});
		</script>
		

		<style type="text/css">
		#map {
        height:25.5em;
        width: 38.5%;
        margin-right: 10%;
        margin-top: 1.2%;
       }
       </style>
       <style type="text/css">
   		.amount
   		{
   			clear: both;
   			width: 35%;
   			margin: 1% 1%;
   			padding: 10px;
   			font-size: 3em;
   		}
   		#b3
   		{
   			padding: 10px 15px; 
			margin :2.5% 0%;		
	        border-radius: 50px;
			color: white;
			background-color: #00802b;
   		}
   		#b3:hover 
		{
			background-color:#006622;		
			cursor: pointer;
		}
   		#l1
   		{
   			width: 80%;
   			padding: 10px 15px; 
			margin:1%;			
	        border-radius: 50px;
			color: white;
			background-color: #00802b;
   		}
   		#l1:hover 
	{		
		background-color:#006622;		
		cursor: pointer;
	}
       </style>
    </head>

    <body>

        <div class="container">

            <?php
             	include 'header.php';
             ?>
			
            <div class="nav_section" id="nav">
                <a class="nav" href="index.php">Home</a>
                <a class="nav" id="active" href="payment.php">Payment</a>
                <a class="nav" href="Calc.php">Calculate</a>
                <a class="nav"  href="profile.php">Profile</a>
                <a class="nav" href="logout.php" id="logout">Logout</a>
            </div>
		<div class="con">
            <div class="content">
                This Section will contain payment discounts and info (if applicable on that root).				
			</div >
		
			<div class="payment" >
				<ol class="list">					
					<li class="pay" >Vehical Details</li>
					<li class="pay" id="active1">Trip</li>
					<li class="pay">Payment</li>
					<li class="pay">Confirm</li>
            </div>
			<div id="text">
				2. Trip (One-way)
			</div>
			
				<form action="payment_ctrl1.php" method="post" id="f1">
					<fieldset>
					<label class="labelip">Date * :</label>
					<input id="datepicker" name="date1">					
					<br>
					<label class="labelip">Journey Start Point * :</label>
					<select class = "cen1" name='source'>
						<option value="CST">Mumbai</option>
						<option value="Pune">Pune</option>
						<option value="Nag">Nagpur</option>
						<option value="Nas">Nashik</option>
						<option value="Awb">Aurangabad</option>
						
					</select>						
					<label class="labelip">Journey Destination Point * :</label>
					<select class = "cen1" name='destination'>
						<option value="Pune">Pune</option>
						<option value="CST">Mumbai</option>	
						<option value="Nag">Nagpur</option>
						<option value="Nas">Nashik</option>						
						<option value="Awb">Aurangabad</option>
						
					</select>				
									 
					<label class="labelip">Select Road * :</label>
					<select class="cen1" name="road">
						<option value="Highway 48">Highway 48/</option>	
						<option value="Highway 50">Highway 50</option>											
					</select>					
					<br>
					<a href="Pay_cal.php"><input type="button" name="submit" id="b3" value="Calculate Your Toll"></a>
					<label for="amount" class = "amount">300</label><br>
					<input type="hidden" value="300" name="amount">
					<a href="#"><input type="button" class="trip" id="active2" value="One-way" ></a>
					<a href="paymentTrip2.php"><input type="button" class="trip" id="notact" value="Round Trip"></a>
					<br><br>	
					<div class="prevnext">
					<a href="payment.php"><input type="button" id="prev" value="Prev" ></a>
					<a href="finalPayment.php"><input type='submit' id="b1"  value="Next" ></a>
					</div>
					</fieldset>
				</form>					
			
			<div id="map"></div>
			<br>	
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

    </body>

</html>