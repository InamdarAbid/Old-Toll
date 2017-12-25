<?php

require "connection.php";
	session_start();
		$u1 = $_SESSION["i"];
		$date1 = mysqli_real_escape_string($conn,$_POST['date1']);
		$source = mysqli_real_escape_string($conn,$_POST['source']);
		$destination = mysqli_real_escape_string($conn,$_POST['destination']);
		$road = mysqli_real_escape_string($conn,$_POST['road']);
		$amount = mysqli_real_escape_string($conn,$_POST['amount']);
		echo $_POST['date1'];		
		$sql = "INSERT INTO user_journey(date1,source,destination,route,amount,way,type) VALUES ('" .$date1."','" .$source."','".$destination."','" .$road."','".$amount."','one_way','".$u1."')";
		$result = $conn->query($sql);
		header("location:finalPayment.php");
?>