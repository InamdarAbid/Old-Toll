<?php
session_start();
if(!empty($_SESSION['message'])) 
{
   $message = $_SESSION['message'];
   echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
	<link rel="stylesheet" href="login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script>

		$(document).ready(function(){
			$("#f1").validate({
				rules:
				{
					u_name:
					{
						required:true,
						minlength:8
					},
					pwd:
					{
						required:true,						
						minlength:8
					}
					
				},
				messages:
				{
					u_name:
					{
						required:"This fiels is required",
						minlength:"Username must be minimum 8 alphabet"
					},
					pwd:
					{
						required:"This fiels is required",						
						minlength:"Password must be minimum 8 alphabet"
					}
				},
				submitHandler: function(form)
				{
					form.submit();
				}

			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("#f2").validate({
				rules:
				{
					name:
					{
						required:true						
					},
					address:
					{
						required:true					
					},
					pincode:
					{
						required:true,
						maxlength:6
					},
					state:
					{
						required:true,
						minlength:3
					},
					city:
					{
						required:true,
						minlength:3
					},
					contact_no:
					{
						required:true,
						maxlength:10
					},
					email:
					{
						required:true,
						email:true
					},
					u_name:
					{
						required:true,
						minlength:8						
					},
					pwd:
					{
						required:true,
						minlength:8
					},
					confirm_pwd:
					{
						required:true,
						minlength:8						
					}
				},
				messages:
				{
					name:
					{
						required:"This field is mandatory."						
					},
					address:
					{
						required:"This field is mandatory."	
					},
					pincode:
					{
						required:"This field is mandatory."	,
						maxlength:"Ener the vakid pincode"
					},
					state:
					{
						required:"This field is mandatory."	,
						minlength:"Enter a valid state name."
					},
					city:
					{
						required:"This field is mandatory."	,
						minlength:"Enter a valid city name."
					},
					contact_no:
					{
						required:"This field is mandatory."	,
						maxlength:"Enter a valild contact number"
					},
					email:
					{
						required:"This field is mandatory."	,
						email:"Enter a valid email address"
					},
					u_name:
					{
						required:"This field is mandatory."	,
						minlength:"Username must be minimum 8 bit long"						
					},
					pwd:
					{
						required:"This field is mandatory."	,
						minlength:"Password must be minimum 8 bit long"

					},
					confirm_pwd:
					{
						required:"This field is mandatory."	,
						minlength:"Password must be minimum 8 bit long"
						
					}
				},
				submitHandler: function(form){
						form.submit();
					}

			});
		});
	</script>
	<style>
		.error
		{
			color:red;
		}
	</style>
</head>

<body>

  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<form method="post" action="login_ctrl.php" id="f1">
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">UserName</label>
						<input id="user" type="text" class="input"  name="u_name">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password" name="pwd">
					</div>
					
					<div class="group">
						<input type="submit" class="button" value="Sign In">
					</div>
					
					
				</div>
			</form>
			
			<form action="Sign_up_ctrl.php" method="post" id="f2">
				<div class="sign-up-htm">
					

					<div class="group">
						<label for="user" class="label">Name</label>
						<input id="user" type="text" class="input" name="name" >
					</div>

					<div class="group">
						<label for="user" class="label">Address</label>
						<input id="user" type="text" class="input" name="address">
					</div>

					<div class="group">
						<label for="user" class="label">Pincode</label>
						<input id="user" type="text" class="input" name="pincode">
					</div>

					<div class="group">
						<label for="user" class="label">State</label>
						<input id="user" type="text" class="input" name="state">
					</div>

					<div class="group">
						<label for="user" class="label">City</label>
						<input id="user" type="text" class="input" name="city">
					</div>
					<div class="group">
						<label for="pass" class="label">Contact_No</label>
						<input id="pass" type="number" maxlength="10" class="input"  name="contact_no">
					</div>
					
					<div class="group">
						<label for="pass" class="label">Email</label>
						<input id="pass" type="email"  class="input"  name="email">
					</div>

					<div class="group">
						<label for="user" class="label">UserName</label>
						<input id="user" type="text" class="input" name="u_name" >
					</div>					

					<div class="group">
						<label for="user" class="label">Password</label>
						<input id="user" type="password" class="input" id="psd" name="pwd">
					</div>

					<div class="group">
						<label for="user" class="label">Confirm Password</label>
						<input id="user" type="password" class="input" name="confirm_pwd">
					</div>

					<div class="group">
						<input type="submit" class="button" name="Sub" value="Sign Up">
					</div>
					<div class="foot-lnk">
						<label for="tab-1">Already Member?</a>
					</div>
				</div>	
					
					
			</div>
			</form>
			
		</div>
	</div>
</div>
<?php require"footer.php"; ?>
</body>
</html>