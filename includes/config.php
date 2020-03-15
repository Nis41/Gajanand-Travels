<?php 

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "Gajanand_Travels";

	$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	if(!$con) {
		echo "Connection to database not established...";
	}

 ?>