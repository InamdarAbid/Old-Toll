<?php

require "connection.php";
	session_start();
	

		$u_name = mysqli_real_escape_string($conn,$_POST['u_name']);
		$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		$pincode = mysqli_real_escape_string($conn,$_POST['pincode']);
		$state = mysqli_real_escape_string($conn,$_POST['state']);
		$city = mysqli_real_escape_string($conn,$_POST['city']);
		$contact_no = mysqli_real_escape_string($conn,$_POST['contact_no']);
		$conf_pwd = mysqli_real_escape_string($conn,$_POST['confirm_pwd']);
		
		if($conf_pwd == $pwd){
			$sql = "INSERT INTO user_details (user_name,password,address,pincode,state,city,contact,email,type) VALUES ('" .$u_name."','" .$pwd."','".$address."','".$pincode."','".$state."','".$city."','".$contact_no."','".$email."','user')";
			$result = $conn->query($sql);
			
			$_SESSION['u_name'] = $_POST['u_name'];
			header("location:vehicle.php");
		}
		else{
			echo "Password Mismatch!!!!!";
			header("location:Sign_up.php");
		}
		
	

?>
