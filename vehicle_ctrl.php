<?php

require "Connection.php";
	session_start();
		$license_no = mysqli_real_escape_string($conn,$_POST['lic_no']);
		$vehicle_no = mysqli_real_escape_string($conn,$_POST['plate_no']);
		$vehicle_type = mysqli_real_escape_string($conn,$_POST['veh_type']);
		
		$sql = "INSERT INTO vehicle_details(license_no,plate_no,vehicle_type,state) VALUES ('" .$license_no."','" .$vehicle_no."','".$vehicle_type."','maharashtra')";
		$result = $conn->query($sql);
		$sql = "UPDATE user_details SET license_no='".$license_no."' WHERE user_name='".$_SESSION['u_name']."'";
		$result = $conn->query($sql);
		header("location:index.php");
	

?>