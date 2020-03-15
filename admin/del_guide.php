<?php 

	// echo $_GET['userid'];
include('../includes/config.php');

  echo $gid = $_GET['guideid'];

 
  $del_guide = "DELETE from tour_guide where Guide_Id = $gid  ";

  $guide_detail_rs = mysqli_query($con,$del_guide);

  header("location:all_guides.php");


 ?>