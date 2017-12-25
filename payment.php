<?php
session_start();
if($_SESSION["u_name"]==null)
    header("location:Sign_up.php");
require "connection.php";
?> 
<!DOCTYPE html>
<html>

    <head>
        <title>Toll Details</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="stylePayment.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#f1").validate({
				rules:
				{
					plate_no:
					{
						required:true,
						maxlength:10
					},
					lic_no:
					{
						required:true,						
						maxlength:15
					}
				},
				messages:
				{
					plate_no:
					{
						required:"This fiels is required",
						maxlength:"Max length is 10"
					},
					lic_no:
					{
						required:"This fiels is required",						
						maxlength:"Max length is 15"
					}					
				},
				submitHandler: function(form){
						form.submit();
					}
			});
		});
		</script>
    </head>

    <body>
	
        <div class="container">

            <?php include 'header.php';?>

			<div class="nav_section" id="nav">
				<a class="nav" href="index.php">Home</a>
				<a class="nav" id="active" href="payment.php">Payment</a>
				<a class="nav" href="Calc.php">Calculate</a>
				<a class="nav" href="profile.php">Profile</a>
				<a class="nav" href="logout.php" id="logout">Logout</a>
			</div>
		<div class="con">
            <div class="content">
                This Section will contain payment discounts and info (if applicable on that root).				
			</div>		
			<div class="payment">
				<ol class="list">					
					<li class="pay" id="active1">1.Vehical Details</li>
					<li class="pay">2.Trip</li>
					<li class="pay">3.Payment</li>
					<li class="pay">4.Confirm</li>
				</ol>
            </div>
			<div  id="text">
				<strong>1. Vehical Details</strong>
			</div>
			
				<form id="f1" method="post" action="payment_ctrl.php">
					<fieldset>					
					<label class="labelip">Plate Number * :</label>
					<input type='text' class = "cen1" name='plate_no' id="palte" value="<?php 
						$username = $_SESSION['u_name'];
						$query = "SELECT plate_no from vehicle_details as vd,user_details as ud where vd.license_no=ud.license_no and ud.user_name = '$username'";						
					 	$sql = $conn->query($query);
						$result = mysqli_fetch_assoc($sql);
						echo $result['plate_no'];						
						?>"><br>
					<label class="labelip">Driving License Number * :</label>
					<input type='text' class = "cen1" name='lic_no'  placeholder="Enter your License NO" value="<?php
					$query = "SELECT license_no from user_details where user_name = '$username'";
					 	$sql = $conn->query($query);
						$result = mysqli_fetch_assoc($sql);
						echo $result['license_no'];							
					?>"><br>
					<label class="labelip">State * :</label>
					<input type='text' class = "cen1" name='state' value="maharashtra" disabled="true" /><br>
					<label class="labelip">Vehicle Type* :</label>
					<select class="cen1" name="veh_type">
						<option value="car">Car</option>
							<option value="3-axle">Upto 3-axle</option>
							<option value="4-6-axle">4 to 6 axle</option>
							<option value="7+axle">7+ axle</option>
					</select>
					<br>
					
					<input type='submit' class="b1" class = "cen1" value="Next" />
					</fieldset>
				</form>	
			
			<div class="news">
			<h3>News</h3>
			<p>Duis imperdiet nulla non tellus placerat, nec tempor leo fermentum. Vivamus vitae nunc lacinia, tempor ipsum non, tristique neque. Morbi congue leo sit amet congue mattis. Sed elit diam, pulvinar in nulla et, tincidunt scelerisque ligula. Phasellus lobortis sapien metus, in tempus odio venenatis eu. Ut a neque a nisi lobortis consectetur. In turpis risus, condimentum tempus feugiat ac, venenatis vel tortor. Fusce luctus dui vitae interdum lacinia. Suspendisse feugiat, mi quis pulvinar tempus, nisl justo vulputate odio, nec vulputate erat lectus vel erat. Donec magna nibh, tristique non risus a, ornare consequat mi. Suspendisse nibh magna, maximus eu felis id, lacinia consequat massa. Etiam ex urna, dapibus at nisl commodo, scelerisque lacinia magna. Vestibulum imperdiet, quam sagittis maximus maximus, eros sapien placerat risus, sed fermentum enim est dapibus eros. Morbi scelerisque nulla nec justo egestas, quis aliquet nisi ornare. Vestibulum neque sapien, fermentum non vestibulum ac, suscipit quis enim.</p>
			</div>
		</div>	           

        </div>
			<div class="footer" id="footer">
			
            </div>
            <?php require"footer.php"; ?>
    </body>

</html>