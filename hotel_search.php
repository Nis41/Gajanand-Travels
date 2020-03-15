<?php 

	include("includes\config.php");

    $cityName = $_GET['city'];
	// $hotelType = $_GET['hotelType'];
    
    // if($hotelType=='null'){
		$hotel_query = "SELECT Id, Hotel_Name , Hotel_Type , Hotel_City , (SELECT Image FROM hotel_image WHERE Hotel_Id = hotel_info.Id LIMIT 1) AS Image FROM hotel_info 
						WHERE Hotel_City = '$cityName'";
    // }
    // else {
	    // $sql = "SELECT * from hotel_list where City = '$cityName' and Hotel_Type = '$hotelType'";
    // }
	
    $hotel_rs = mysqli_query($con,$hotel_query);
	
	$jsonData  = array();



	if(mysqli_num_rows($hotel_rs)>0) {
		while($hotel_data = mysqli_fetch_array($hotel_rs) ) {
			// var_dump($hotel_data);
			array_push($jsonData,$hotel_data);   
		}
		
		echo json_encode($jsonData); // encoding whole array and returing the jsondata 
	}

 ?>