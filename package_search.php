<?php 

	include("includes\config.php");

	$stateName = $_GET['state'];
	
	$sql= "SELECT pin.Package_Id , pin.Package_Name, pin.State , pd.Duration , pd.Price , (SELECT Image FROM package_image WHERE Package_Id = pin.Package_Id LIMIT 1) as Image FROM package_info pin
		   JOIN package_detail pd ON pd.Id = pin.Detail_Id 
		   WHERE pin.State = '$stateName'";
	

	// $sql = "select * from package_list where State = '$stateName'";



	$rs = mysqli_query($con,$sql);
	
	$jsonData  = array();

	if(mysqli_num_rows($rs)>0) {
		while($row = mysqli_fetch_array($rs)) {
			array_push($jsonData,$row);  
			// var_dump($row); 
		}
		echo json_encode($jsonData); // encoding whole array and returing the jsondata 
	}

 ?>