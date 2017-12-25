<?php
	session_start();	
	
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>vehicle Details</title>
  	<style type="text/css">
  		option{
  			background-color:#242943;
  			color:white;
  		}
  	</style>
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
	<link rel="stylesheet" href="login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#f1").validate({
				rules:
				{
					lic_no:
					{
						required:true,
						maxlength:13
					},
					plate_no:
					{
						required:true,						
						maxlength:10
					}					
					
				},
				messages:
				{
					lic_no:
					{
						required:"This field is required",
						maxlength:"Exact 13 characters required"
					},
					plate_no:
					{
						required:"This field is required",						
						maxlength:"Exact Characters required"
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

  <div class="login-wrap">
	<div class="login-html">
		
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Vehicle_Details</label>
		<div class="login-form">
			
			<form id="f1" method="post" action="vehicle_ctrl.php">
				<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">License No</label>
					<input id="user" type="text" class="input" name="lic_no">
				</div>
				<div class="group">
					<label for="user" class="label">plate No</label>
					<input id="user" type="text" class="input" name="plate_no">
				</div>

				<div class="group">
					<label for="user" class="label">Vehicle_type</label>
					<select class="input" name="veh_type">
						<option value="Car">Car</option>
						<option value="Bus">Bus</option>
						<option value="2-axle truck">2-axle truck</option>
						<option value="3 or 4 axle">3 or 4 axle</option>
						<option value="5-axle">5-axle</option>
					</select>
					<br>
					
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Next">
				</div>
				
			</div>
			</form>
			
		</div>
	</div>
</div>
 <?php require"footer.php"; ?> 
  
</body>
</html>