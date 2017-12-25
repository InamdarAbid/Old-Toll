<?php
	session_start();
	if(isset($_SESSION['email'])){
		header("location:profile.php");
	}
	
?>

<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Day 001 Login Form</title>
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
	<link rel="stylesheet" href="vehicle.css">  
</head>

<body>

  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Vehicle Detail</label>
		
		<div class="login-form">
			
			<form action="signup.php" method="post">
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label">Licanse_No</label>
						<input id="user" type="text" class="input"  name="lic_no">
					</div>

					<div class="group">
						<label for="pass" class="label">Vehicle_No</label>
						<input id="pass" type="text" class="input" name="veh_type">
					</div>

					<div class="group">
						<label for="pass" class="label">Vehicle_type</label>
						<input id="pass" type="text" class="input"  name="veh_type">
					</div>
					
					<div class="group">
						<input type="submit" class="button" value="Next">
					</div>
			</div>
			</form>
			
		</div>
	</div>
</div>
  
  
</body>
</html>