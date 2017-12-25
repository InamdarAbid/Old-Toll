<?php
	session_start();
	require "connection.php";
	$user_name = mysqli_real_escape_string($conn,$_POST['u_name']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	$sql = "SELECT * from user_details where user_name = '" .$user_name. "'and password ='". $pwd ."'";
	$result = $conn->query($sql);
	if(!($result->num_rows==0)){
		
		$_SESSION['u_name'] = $_POST['u_name'];		
		header("location:index.php");
	}
	else 
	{
		$message = "Wrong username or password";
		$_SESSION['message'] = $message;
    	header("location:Sign_up.php");
	}

?>