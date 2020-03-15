<?php

include('../includes/config.php');
$guide_detail = "SELECT * from tour_guide ";

$guide_detail_rs = mysqli_query($con,$guide_detail);



// insert

	if(isset($_POST['addGuide'])) {

		$guideName = $_POST['guideName'];
		$guideState = $_POST['guideState'];
		$guideDetail = $_POST['guideDetail'];

		$imageName = $_FILES['guideImage']['name'];
		$tmpImage = $_FILES['guideImage']['tmp_name'];

		$uploadLocation = '../Guide_img/'.$imageName;
		$insertLocation = "Guide_img/".$imageName; 

		move_uploaded_file($tmpImage, $uploadLocation);

		$guide_insert = "INSERT into tour_guide values (null,'$guideName','$guideDetail','$guideState','$insertLocation',(SELECT Package_Id from package_info where State = '$guideState')) ";

		$guide_insert_rs = mysqli_query($con,$guide_insert);

		if($guide_insert_rs) {
			echo "<script>alert('Guide Added');</script>";
		}else {
			echo "<script>alert('Query Error');</script>";
		}
	}


	if(isset($_POST['editGuide'])) {
		// $guide_id = $_POST['guide_id'];
		$guideName = $_POST['guideName'];
		$guideState = $_POST['guideState'];
		$guideDetail = $_POST['guideDetail'];

		$guide_update = "UPDATE tour_guide SET Guide_Name = '$guideName' , Guide_Detail = '$guideDetail', Guide_State = '$guideState' , Package_Id = (SELECT Package_Id from package_info where State = '$guideState') where Guide_Id = 2 ";

		$guide_update_rs = mysqli_query($con,$guide_update);

		if($guide_update_rs) {
			echo "<script>alert('Guide Details Updated');</script>";
		}else {
			echo "<script>alert('Query Error');</script>";
		}

	// 	header("location:all_guides.php");
	}

?>
