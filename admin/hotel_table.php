
<?php

include('../includes/config.php');
$hotel_info = "SELECT hi.Id, hi.Hotel_Name,hi.Hotel_Type,hi.Hotel_City,hi.Hotel_Number,hi.Hotel_Price,( SELECT Image from hotel_image where Hotel_Id = hi.Id   limit 1 ) as Image FROM hotel_info hi
          ";

$hotel_info_rs = mysqli_query($con,$hotel_info);

$hotel_detail = "SELECT hi.Hotel_Name,hi.Hotel_City,hi.Hotel_Number FROM hotel_info hi limit 5
          ";

          $hotel_detail_rs = mysqli_query($con,$hotel_detail);




if(isset($_POST['addHotel'])) {

    $hotelName = $_POST['hotelName'];
    $hotelType = $_POST['hotelType'];
    $hotelCity = $_POST['hotelCity'];
    $hotelState = $_POST['hotelState'];
    $hotelDetail = $_POST['hotelDetail'];
    $hotelPrice = $_POST['hotelPrice'];
    $totalRoom = $_POST['totalRoom'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $hotelMap = $_POST['hotelMap'];
    $hotelNumber = $_POST['hotelNumber'];
    $hotelMail = $_POST['hotelMail'];

// var_dump($_FILES);
	// Count total files
	 $countfiles = count($_FILES['hotelImages']['name']);
	 
	 
		  	$hotel_info_insert = "INSERT into hotel_info values (null,'$hotelName','$hotelType',      '$hotelDetail','$hotelState','$hotelCity',$totalRoom,$hotelPrice,'$checkin','$checkout','$hotelMail','$hotelNumber','$hotelMap',(SELECT Package_Id from package_info where State = '$hotelState')) ";
            $hotel_insert_rs = mysqli_query($con,$hotel_info_insert);

            if($hotel_insert_rs) {
					
				   for($i=0;$i<$countfiles;$i++){
				   		$filename = $_FILES['hotelImages']['name'][$i];
				   		$upload_location1 = 'hotel_hd/'.$filename;
				   		$upload_location2 = '../hotel_hd/'.$filename; 

					   // Upload file

				   		$tmpFile = $_FILES['hotelImages']['tmp_name'][$i];

				   		
					      move_uploaded_file($tmpFile, $upload_location2);


	      			   $hotel_image_insert = "INSERT into hotel_image values (null,'$upload_location1',(SELECT Id from hotel_info where Hotel_City = '$hotelCity'),'$hotelCity') ";
		               $hotel_image_rs = mysqli_query($con,$hotel_image_insert);

		               
            	 }
            		 if($hotel_image_rs) {
          					
          					echo "<script>alert('Hotel Added...');</script>";

		               }
		               else {
          				
          					echo "<script>alert('hotel_image error');</script>";

		               }


            }
            else {
          		echo("Error description: " . mysqli_error($con));

          }

    


}

?>


<!-- 
INSERT into hotel_info values (null,'oberoi','5 star','Hotel The Oberoi Hotel in Mumbai, India is a luxurious hotel located on the Marine Drive with ocean-front views in the business district. It has a 24-hour spa, concierge, and large skylight within.
Each room has silk armchairs, peal dresser and contrasting antique and modern decorated walls, and an en-suite bathroom. There is a DVD player with LCD television, tea/coffee maker, and an iPod docking station.','maharastra','mumbai',220,4000,'3 vagya pachi','2 vagya pchi','oberoi@gmail.co','9876541230','google.com',6) -->