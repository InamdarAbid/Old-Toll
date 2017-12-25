<?php

require "connection.php";
	session_start();	
	$_SESSION["i"]=$_POST["veh_type"];
	echo $_SESSION["i"];
	header("location:paymentTrip1.php");
?>