<?php 

	// echo $_GET['userid'];
include('../includes/config.php');

  echo $pid = $_GET['packageid'];

  $del_image = "DELETE from package_image where Package_Id = $pid";
  
  $del_image_rs = mysqli_query($con,$del_image);


  $del_package_info = "DELETE from package_info where Package_Id = $pid  ";

  $package_info_rs = mysqli_query($con,$del_package_info);


  $del_package_detail = "DELETE from package_detail where Id = $pid  ";

  $package_detail_rs = mysqli_query($con,$del_package_detail);


  header("location:all_packages.php");


 ?>