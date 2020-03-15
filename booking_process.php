<?php 

	// session_start();
	include('includes/config.php');
	
	if (isset($_POST['bookPackage'])) {
		$pid = $_SESSION['package_id'];	
		$uid = $_SESSION['User_Id'];	
		$hid = $_SESSION['hotel_id'];	
		$timestamp = date("Y-m-d H:i:s");
		// echo "<script>alert('here');</script>";

		$sql_query = "INSERT into booking_info values (null,$pid,$hid,'$timestamp',1,1,0,$uid,'Pending')";

		mysqli_query($con,$sql_query);

		header("location:booking_page.php");


	}


 ?>