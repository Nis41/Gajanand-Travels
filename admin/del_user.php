<?php 

	// echo $_GET['userid'];
include('../includes/config.php');

  $uid = $_GET['userid'];
  $del_user = "DELETE from user_info where Id = $uid  ";

  $user_detail_rs = mysqli_query($con,$del_user);

  header("location:all_users.php");


 ?>