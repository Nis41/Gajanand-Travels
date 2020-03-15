<?php 

	session_start();

	include("includes/config.php");

    $bookingId = $_GET['bid'];

	$remove_booking = "DELETE from booking_info where Id = $bookingId";

	$remove_booking_rs = mysqli_query($con,$remove_booking);

	header("location:booking_page.php");


 ?>