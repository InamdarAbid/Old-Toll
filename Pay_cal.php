<?php 
	session_start();
	if($_SESSION["u_name"]==null)
	    header("location:Sign_up.php");
	require "connection.php";
		
		$source = $_POST['source'];
		$end = $_POST['destination'];
		$vehicle_type = $_POST['vehicle_type'];
		$trip = $_POST['trip'];
		
		if($trip == "one_way"){
			$sql = $conn->query("SELECT one_way from tolls where start ='".$source."' and end = '".$end."' and type='".$vehicle_type."'");	
			$row = $sql->fetch_assoc();
			$_SESSION['one_way'] = $row['one_way'];
			$_SESSION['round_trip'] = "/0";
			header("location:Calc.php");

		}else if($trip == "round_trip"){
			$sql = $conn->query("SELECT round_trip from tolls where start ='".$source."' and end = '".$end."' and type='".$vehicle_type."'");	
			$row = $sql->fetch_assoc();
			$_SESSION['round_trip'] = $row['round_trip'];
			$_SESSION['one_way'] = "/0";
			header("location:Calc.php");
		}
		else{
			$_SESSION['one_way'] = "--";
			$_SESSION['round_trip'] = "--";
		}
	

	
?>