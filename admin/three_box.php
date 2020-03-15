<?php

include('../includes/config.php');

	$user_count = "select * from user_info";

	$user_count_rs = mysqli_query($con,$user_count);

	$user_count_rows = mysqli_num_rows($user_count_rs);


	$feedback_count = "select * from feedback_info";

	$feedback_count_rs = mysqli_query($con,$feedback_count);

	$feedback_count_rows = mysqli_num_rows($feedback_count_rs);



	$booking_count = "select Total_Price from booking_info";

	$booking_count_rs = mysqli_query($con,$booking_count);

	$GLOBALS['tot_earning'] = 0;

	while ($booking_data = mysqli_fetch_array($booking_count_rs)) {
		
		$GLOBALS['tot_earning'] += $booking_data['Total_Price'];
		

	}
	



	// session_start();


// 	if(!isset($_SESSION['view'])) {
// 		$_SESSION['view']=1;
// 	}
// 	else {
// 		$_SESSION['view']=$_SESSION['view']+1;
// }
//
// 	echo "<br><br>" . $_SESSION['view'];
 ?>
