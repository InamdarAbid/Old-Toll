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
        <link rel="stylesheet" type="text/css" href="StylefinalPayment.css">
        <meta name="viewport" content="width=device-width, initial-scale=0.5">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script> 
		<script type="text/javascript">
			$(document).ready(function(){
			$("#f1").validate({
				rules:
				{
					cname:
					{
						required:true,
						maxlength:16
					},
					cexp:
					{
						required:true,						
						maxlength:4
					},
					cpin:
					{
						required:true,
						minlength:4
					}
				},
				messages:
				{
					plate:
					{
						required:"This fiels is required",
						maxlength:"Max length is 16"
					},
					cplate:
					{
						required:"This fiels is required",						
						maxlength:"Max length is 4"
					},
					state:
					{
						required:"This fiels is required",
						minlength:"Wrong pin number"
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
                <a class="nav"  href="profile.php">Profile</a>
            </div>
			<div class="con">
				<div class="content">
					This is payment page. 				
				</div>
				<div class="payment" >
					<ol class="list">					
						<li class="pay">Vehical Details</li>
						<li class="pay">Trip</li>
						<li class="pay" id="active1">Payment</li>
						<li class="pay">Confirm</li>
					</ol>
				</div>
				<div id="text">
					<strong>3. Payment</strong>
				</div>							
				<form class="form1" method="post" action="confirm.php" id="f1">
				<fieldset>				
					<label class="l1">Card number :	</label>
					<input type="text" class="i1" name="cname" placeholder="•••• •••• •••• ••••"  ><br>
					<label class="l1">Card expiry date : </label>
					<input type="text" class="i1" name="cexp" placeholder="•• / ••"><br>									
					<label class="l1">Pin</label><br>			
					<input type="password" class="i1" name="cpin" placeholder="••••"><br>				
						<a href="paymentTrip1.php"><input type="button" id="prev" value="Prev" ></a>									
					<input type="submit" class="b1" value="Submit">		
				</fieldset>	
				</form>  			  
			</div>
			<div class="footer" id="footer">
				
			</div>
        </div>
<?php require"footer.php"; ?>
    </body>

</html>

