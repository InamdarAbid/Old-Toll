<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
	<style type="text/css">
		html{
			background: url("cov.png") no-repeat center fixed;
			background-size: cover;
		}
		#content{
			margin-top: 0em;
			margin-right: 10em;
			margin-left: 2em;
	    	background-color: #ffffff;
	    	border: 1px solid black;
	    	opacity: 0.6;
	    	filter: alpha(opacity=60);/*for IE versions below 9*/
	    	width: 50%;
	    	height: 98%;
	    	position: absolute;
	    	border-radius: 20px;
	    	border: 2px solid #00695C;
		}
		.com{
			font-size: 1.1em;
			padding: .3em;
		}
		#con_det{
			margin-left: 10em;
		}
		#eml_det{
			margin-left: 5.5em;
		}
		#li_det{
			margin-left: 3.4em;
		}
		#sub{
			font-size: 1em;
			background-color: black;
			color:#18FFFF;
			width: 12em;
			height: 3em;
			margin-left:1em;
			cursor: pointer;
			border-radius: 20px;
		}
	</style>
</head>
<body>
	<form>
		<div id="content" action="">
			<fieldset style="border-radius: 10px;border:4px solid #1e1e1e;margin-top:1em;height:44em;width: 45em;margin-left: 1em;">
			<legend style="text-align: center;font-size:2em;">User_Details</legend><br><br>
			<span class="com"> FirstName:</span>
			<span class="com" style="margin-left: 17em;"> LastName: </span>
			<br><br>
			<span><input type="text" id="box1" class="com" name="f_name" placeholder="Enter FirstName"></span>
			<span style="margin-left:10em;"><input type="text" id="box10" class="com" name="l_name"  placeholder="Enter LastName"></span>
			<br><br><br>
			<span>Address:</span><br><br>
			<textarea  type="message" rows="2" cols="60" id="box3" class="com" name="con_pass" placeholder="Enter Password Again"></textarea>
			<br><br>
			<span class="com">Pincode:</span>
			<span class="com" style="margin-left: 17em;">City:</span>
			<br><br>
			<span><input type="text" id="box1" class="com" name="f_name" placeholder="Enter Pincode"></span>
			<span style="margin-left:10em;"><input type="text" id="box10" class="com" name="l_name"  placeholder="Enter your city"></span>
			<br><br><br><br>
			<span class="com"> State:</span>
			<span class="com" style="margin-left: 18.5em;">Contact_No:</span>
			<br><br>
			<span><input type="text" id="box10" class="com" name="l_name"  placeholder="Enter your State"></span>
			<span><input type="text" maxlength="10"  id="con_det" class="com" name="f_name" placeholder="Enter Contact_No"></span>
			<br><br><br>
			<span class="com">Email:</span>
			<span><input type="Email" maxlength="10"  id="eml_det" class="com" name="f_name" placeholder="Enter your Email"></span>
			<br><br><br>
			<span class="com">License No:</span>
			<span><input type="text"   id="li_det" class="com" name="f_name" placeholder="Enter License No"></span>
			<br><br><br>
			<input type="submit" value="Next" name="sub_button" id="sub">
			</fieldset>
		</div>
	</form>


</body>
</html>