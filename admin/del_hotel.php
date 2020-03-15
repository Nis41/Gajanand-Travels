<?php 

	// echo $_GET['userid'];
include('../includes/config.php');

  echo $hid = $_GET['hotelid'];

  $del_image = "DELETE from hotel_image where Hotel_Id = $hid";
  
  $del_image_rs = mysqli_query($con,$del_image);


  $del_hotel = "DELETE from hotel_info where Id = $hid  ";

  $hotel_detail_rs = mysqli_query($con,$del_hotel);

  header("location:all_hotels.php");


 ?>