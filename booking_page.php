<?php 
	session_start();
	include('includes/config.php'); 
	// include('includes/booking_process.php');

	$uid = $_SESSION['User_Id'];
	$render_query = "SELECT bi.* , pi.Package_Name, pd.Start , pd.End , pd.Price , hi.Hotel_Name , 					hi.Hotel_City , hi.Hotel_Type , hi.Hotel_Price , (SELECT Image from 						package_image WHERE Package_Id = bi.Package_Id LIMIT 1) AS Package_Image ,(					SELECT Image from hotel_image WHERE Hotel_Id = bi.Hotel_Id LIMIT 1) AS 						Hotel_Image
						from booking_info bi 
						JOIN package_info pi ON bi.Package_Id = pi.Package_Id
						JOIN package_detail pd ON pi.Detail_Id = pd.Id
						JOIN hotel_info hi on bi.Hotel_Id = hi.Id
						where User_Id = $uid And Status = 'Pending'";

	$render_query_rs = mysqli_query($con,$render_query);

	$GLOBALS['final_price'] = 0;

	$j = 0;

	$person = array();
	$brand_id_array = array();
	$price_array = array();

	

	if(isset($_POST['makePayment'])) {

		header("location:make_payment.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Bookings</title>
	<link rel="stylesheet" type="text/css" href="css/booking_page1.css">
	<link rel="stylesheet" type="text/css" href="css/header1.css">


	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- icons cdn -->
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- favicon -->
	<link rel="icon" href="logo/favicon.ico" type="image/gif" >

</head>
<body>

<div class="main-container">
	
		<!-- Header Start -->

	<header class="header">

		<div class="logo">

			<img src="Logo/nis7.jpg" class="logo-img" >

		</div>

		<nav class="navigation">

	        <ul class="menu" >
	          <li class="navigation-li">
	            <a class="nav-a nav-selected" href="index.php">Home</a>
	          </li>
	          <li class="navigation-li">
	            <a class="nav-a bracket" href="packagelist.php">Package List</a>
	          </li>
	          <li class="navigation-li">
	            <a class="nav-a bracket" href="hotellist.php">Hotels</a>
	          </li>
	          <li class="navigation-li">
	            <a class="nav-a bracket" href="project/aboutus.html">About</a>
	          </li>
	          <li class="navigation-li">
	            <a class="nav-a bracket" href="project/contactus.html">Contact Us</a>
	          </li>

						<?php

									if (isset($_SESSION['UserEmail'])) {
											// echo "maja ma if dikra";
										  $userEmail =	$_SESSION['UserEmail'];
											$uname = "SELECT First_Name from user_info WHERE Email = '$userEmail' ";
											$uname_rs = mysqli_query($con,$uname);

											$uname_data = mysqli_fetch_array($uname_rs);
						 ?>

 						<li class="navigation-li">
							<div class="dropdown">
								<a class="nav-a bracket user-icon dropbtn" ><i class="fas fa-user-circle"> </i></a>

										  <div class="dropdown-content">
																				<a class="cpw"><?php echo $uname_data['First_Name']; ?></a>
																				<!-- unset($_SESSION['UserEmail']); -->
																				<a class="logout" href="logout.php">Logout</a>
										  </div>
							</div>

						</li>

					<?php }else {
						// echo "maja ma else dikra";

						?>
						<li class="navigation-li">
	            <a class="nav-a bracket login-signup" id = "login-signup" href="#" data-toggle="modal" data-target="#myModal">Login & Signup</a>
	          </li>

					<?php } ?>
	        </ul>
        </nav>



	</header>

	<!-- Header end -->

	<div class="container">
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
			<?php 

				if(mysqli_num_rows($render_query_rs)>0){

		  	   		while($render_query_data = mysqli_fetch_array($render_query_rs))
		  	   		{

			 ?>
			<div class="jumbotron">
				<div class="detailBlock">
					<div class="imageContainer">
						<img src="<?php echo $render_query_data['Package_Image']; ?>">
					</div>

					<?php array_push($brand_id_array, $render_query_data['Id'] ); ?>

					<div class="moreDetail">
						<h4>Tour Name</h4>
						<h6><?php echo $render_query_data['Package_Name']; ?></h6>
					</div>

					<div class="moreDetail">
						<h4>Starting Date</h4>
						<h6><?php echo $render_query_data['Start']; ?></h6>
					</div>

					<div class="moreDetail">
						<h4>Ending Date</h4>
						<h6><?php echo $render_query_data['End']; ?></h6>
					</div>

					<div class="moreDetail">
						<h4>Person</h4>
						<input type="number" name="quantityNumber<?php echo $j; ?>" min="1" max="10" value="<?php echo $render_query_data['Person']; ?>">
						<!-- <h6>Detail</h6> -->
					</div>

					<div class="moreDetail">
						<h4>Price/Person</h4>
						<h6><?php echo $render_query_data['Price']; ?></h6>
						<?php  

						$tour_total = $render_query_data['Price'] * $render_query_data['Person'];
						$GLOBALS['final_price'] += $tour_total;  


						array_push($price_array, $tour_total);
						?>
 					</div>
				  

 					<?php $j++; ?>
				</div>

				
				<div>
				  <hr class="my-4">
				</div>

				<div class="detailBlock">
					<div class="imageContainer">
						<img src="<?php echo $render_query_data['Hotel_Image']; ?>">
					</div>

					<div class="moreDetail">
						<h4>Hotel Name</h4>
						<h6><?php echo $render_query_data['Hotel_Name']; ?></h6>
					</div>

					<div class="moreDetail">
						<h4>Hotel City</h4>
						<h6><?php echo $render_query_data['Hotel_City']; ?></h6>
					</div>

					<div class="moreDetail">
						<h4>Hotel Type</h4>
						<h6><?php echo $render_query_data['Hotel_Type']; ?></h6>
					</div>

					<div class="moreDetail">
						<h4>Rooms</h4>
						<input type="number" name="quantityNumber<?php echo $j;  ?>" min="1" max="10" value="<?php echo $render_query_data['Room']; ?>">
						<!-- <h6>Detail</h6> -->
					</div>
					<?php $j++; ?>

					<div class="moreDetail">
						<h4>Price/Room</h4>
						<h6><?php echo $render_query_data['Hotel_Price']; ?></h6>
						<?php   

							$hotel_total = $render_query_data['Hotel_Price'] * $render_query_data['Room'];

							$GLOBALS['final_price'] += $hotel_total ;  
						 
						    array_push($price_array, $hotel_total);


							?>
					</div>
				  

				</div>

				<div class="removeContainer">
					<a class="btn btn-danger btn-md" href="remove_booking.php?bid=<?php echo $render_query_data['Id']; ?>" role="button">Remove</a>
				</div>

				

				</div>
				
				<?php 
						}
					}
					else {
						header("location:index.php");
					}



				?>



 			<div class="jumbotron">

			  	<div class="totalPriceContainer">
 					<h4>Total Price : <?php echo $GLOBALS['final_price']; ?></h4>
 				</div>

		  	
		  		<hr class="my-4">
		  
				<div class="finalButtonContainer">
					<button class="btn btn-primary btn-lg"  role="button" type="submit" name = "update">Update Booking</button>
					<button class="btn btn-success btn-lg" type="submit" role="button" name="makePayment">Make Payment</button>
				<!-- </form> -->
				<!-- style="margin-right: 270px;margin-bottom: -80px;" -->

					                                  <!-- <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> -->



													  <!-- Identify your business so that you can collect the payments. -->
													  <!-- <input type="hidden" name="business" value="nhp264@gmail.com"> -->

													  <!-- Specify a Buy Now button. -->
													  <!-- <input type="hidden" name="cmd" value="_xclick"> -->

													  <!-- Specify details about the item that buyers will purchase. -->
													  <!-- <input type="hidden" name="item_name" value="Hot Sauce-12oz. Bottle"> -->
													  <!-- <input type="hidden" name="amount" value="<?php //echo  $_SESSION['total_paisa']; ?>"> -->
													  <!-- <input type="hidden" name="currency_code" value="INR"> -->

													  <!-- Display the payment button. -->
													  <!-- <input type="image" name="submit" border="0"  src="payment3.png"  alt="Buy Now" style="border-radius: 17%;" >  -->
													  <!-- <img alt="" border="0"  -->
													   <!-- src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > -->
 
													<!-- </form> -->



				</div>

			
			</div>

 			

		</form>
	</div>

</div>


	<!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/main1.js"></script>
  <script type="text/javascript" src="js/search1.js"></script>


</body>
</html>



<?php 
	

	if(isset($_POST['update'])) {

		$_SESSION['total_paisa'] = $GLOBALS['final_price'];

		$k = 0;

		while ( $k < $j ) {
			array_push($person, $_POST['quantityNumber'. $k]);
			$k++;

		}


		// print_r($person);
		// echo "<br>";
		
		$person_chunk = array_chunk($person, 2);
		$price_chunk = array_chunk($price_array, 2);


		// print_r($person_chunk);
		// echo "<br>";

        $total_num_booking = count($brand_id_array);
		
        	for ($i=0; $i < $total_num_booking ; $i++) { 

        		$price_insert = $price_chunk[$i][0] + $price_chunk[$i][1];
        		$tot_person = 0;
        		$tot_room = 0;	
				$tot_person = $person_chunk[$i][0];
				$tot_room = $person_chunk[$i][1];
				$book_id = $brand_id_array[$i];

				$update_number = "UPDATE booking_info set Person = $tot_person , Room = $tot_room , Total_Price = $price_insert where User_Id = $uid  and Id = $book_id ";

				$update_number_rs = mysqli_query($con,$update_number);

        	}

        	if($update_number_rs) {

        	}
        	else {
				echo mysqli_error($con);        		
        	}

		// echo "<br>";
		// print_r($price_array);

	
	}




 ?>