<?php 
	
	include('includes/config.php');

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>hotel_add</title>
 </head>
 <body>
 

 	<form method="POST" enctype="multipart/form-data">
 		<label>Hotel Name:</label>
 		<input type="text" name="hname">
 		<br>
		<label>hotel type:</label>
 		<input type="text" name="htype">
 		<br>
 		<label>hotel detail:</label>
 		<input type="text" name="hdetail" >
 		<br>
 		<label>hotel State:</label>
 		<input type="text" name="hstate">
 		<br>
 		<label>hotel city:</label>
 		<input type="text" name="hcity">
 		<br>
 		<label>total room:</label>
 		<input type="text" name="troom">
 		<br>
 		<label>check in:</label>
 		<input type="text" name="checkin">
 		<br>
 		<label>check out:</label>
 		<input type="text" name="checkout">
 		<br>
 		<label>hotel mail:</label>
 		<input type="text" name="hmail">
 		<br>
 		<label>hotel number:</label>
 		<input type="text" name="hnumber">
 		<br>
 		<label>hotel map:</label>
 		<input type="text" name="hmap">
 		<br>
 		<label>hotel fb:</label>
 		<input type="text" name="hfb">
 		<br>
 		<label>hotel twitter:</label>
 		<input type="text" name="htwitter">
 		<br>
 		<label>hotel insta:</label>
 		<input type="text" name="hinsta">
 		<br>
 		<label>hotel youtube:</label>
 		<input type="text" name="htube">
 		<br>
 		<label>Package Image1:</label>
 		<input type="file" name="pimage1">
 		<br>
 		<label>Package Image2:</label>
 		<input type="file" name="pimage2">
 		<br>
 		<label>Package Image3:</label>
 		<input type="file" name="pimage3">
 		<br>
 		<label>Package Image4:</label>
 		<input type="file" name="pimage4">
 		<br>
 		<label>Package Image5:</label>
 		<input type="file" name="pimage5">
 		<br>
 		<label>Package Image6:</label>
 		<input type="file" name="pimage6">
 		<br>
 		<label>Package Image7:</label>
 		<input type="file" name="pimage7">
 		<br> 		
 		<input type="submit" name="add" value="add">
 	</form>


 </body>
 </html>

 <?php 

 		if(isset($_POST['add'])) {
 			 $name = $_POST['hname'] ;
 			 $type = $_POST['htype'] ;
 			 $detail = $_POST['hdetail'] ;
 			 $city = $_POST['hcity'] ;
 			 $state = $_POST['hstate'] ;
 			 $troom = $_POST['troom'] ;
 			
			 $checkin = $_POST['checkin'] ;
 			 $checkout = $_POST['checkout'] ;
 			 $mail = $_POST['hmail'] ;
 			 $number = $_POST['hnumber'] ;
 			 $map = $_POST['hmap'] ;
 			
			 $fb = $_POST['hfb'] ;
 			 $twitter = $_POST['htwitter'] ;
 			 $insta = $_POST['hinsta'] ;
 			 $tube = $_POST['htube'] ;
 			

 			$photo1 = $_FILES['pimage1']['name'];
 			$photo2 = $_FILES['pimage2']['name'];
			$photo3 = $_FILES['pimage3']['name'];
 			$photo4 = $_FILES['pimage4']['name'];
 			$photo5 = $_FILES['pimage5']['name'];
 			$photo6 = $_FILES['pimage6']['name'];
 			$photo7 = $_FILES['pimage7']['name'];


			$photo1_tmp_name = $_FILES['pimage1']['tmp_name'];
			$photo2_tmp_name = $_FILES['pimage2']['tmp_name'];
			$photo3_tmp_name = $_FILES['pimage3']['tmp_name'];
			$photo4_tmp_name = $_FILES['pimage4']['tmp_name'];
			$photo5_tmp_name = $_FILES['pimage5']['tmp_name'];
			$photo6_tmp_name = $_FILES['pimage6']['tmp_name'];
			$photo7_tmp_name = $_FILES['pimage7']['tmp_name'];
		
			$upload_location1 = "hotel_hd/" . $photo1;
			$upload_location2 = "hotel_hd/" . $photo2;
			$upload_location3 = "hotel_hd/" . $photo3;
			$upload_location4 = "hotel_hd/" . $photo4;
			$upload_location5 = "hotel_hd/" . $photo5;
			$upload_location6 = "hotel_hd/" . $photo6;
			$upload_location7 = "hotel_hd/" . $photo7;

			move_uploaded_file($photo1_tmp_name, $upload_location1);
			move_uploaded_file($photo2_tmp_name, $upload_location2);
			move_uploaded_file($photo3_tmp_name, $upload_location3);
			move_uploaded_file($photo4_tmp_name, $upload_location4);
			move_uploaded_file($photo5_tmp_name, $upload_location5);
			move_uploaded_file($photo6_tmp_name, $upload_location6);
			move_uploaded_file($photo7_tmp_name, $upload_location7);



 			$imageArr = array(
 					$upload_location1,$upload_location2,$upload_location3,$upload_location4,$upload_location5,$upload_location6,$upload_location7
 				);
 			
 			// print_r($imageArr);


 			$query = "INSERT INTO hotel_links VALUES(Null, '$fb', '$twitter', '$insta', '$tube','$city')";

 			$sub_query = "INSERT INTO hotel_info VALUES(Null, '$name', '$type', '$detail','$state','$city',$troom,'$checkin','$checkout','$mail','$number','$map', (SELECT Package_Id FROM package_info WHERE State = '$state'), (SELECT Id from hotel_links WHERE Hotel_City = '$city'))";	

 			$rs = mysqli_query($con, $query);

 			if($rs){

 				$rs1 = mysqli_query($con, $sub_query);


 				if($rs1){

 					 echo "Maja Ma?";

 					for($i = 0; $i < 7; $i++){

 						$imageQuery =  "INSERT INTO hotel_image VALUES(Null, '$imageArr[$i]' , (SELECT Id FROM hotel_info WHERE Hotel_City = '$city'), '$city')";
 						$rs2 = mysqli_query($con,$imageQuery);

 						if($rs2){
 							echo "Thai gyu!";
						 }
						 else
						 {
							 echo "image query fail:" . mysqli_error($con);
						 }

 					}
 				}else{
 					echo " subquery fail : " . mysqli_error($con);
 				}

 			}
 			else{
 				echo "False";
 				  echo("Error description: " . mysqli_error($con));
 			}
 		}

  ?>
