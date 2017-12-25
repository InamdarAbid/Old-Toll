<!DOCTYPE html>
<html>

    <head>
        <title>Toll Details</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="confirm.css">
        <meta name="viewport" content="width=device-width, initial-scale=0.5">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script> 			
    </head>

    <body>
        <div class="container">
            <?php include 'header.php';?>
            <div class="nav_section" id="nav">
                <a class="nav" href="index.php">Home</a>
                <a class="nav" id="active" href="payment.php">Payment</a>
                <a class="nav" href="Calc.php">Calculate</a>
                <a class="nav" href="profile.php">Profile</a>
            </div>
			<div class="con">
				<div class="content">
					This is payment page. 				
				</div>
				<div class="payment" >
					<ol class="list">					
						<li class="pay" >Vehical Details</li>
						<li class="pay" >Trip</li>
						<li class="pay" >Payment</li>
						<li class="pay" id="active1">Confirm</li>
					</ol>
				</div>
				<div id="text">
					<strong>4. Confirm</strong>
				</div>							
				<div class="cont">
					<strong style="color: black;">Your payment is successful.</strong><br>
					<strong >Use this QR code at tolls as your payment receipt.</strong><br>
					<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8" title="Link to Google.com" />
				</div> 			  
			</div>
			<div class="footer" id="footer">
				
			</div>
        </div>
<?php require"footer.php"; ?>
    </body>

</html>

