<?php
	session_start();
	include('includes/config.php');
	include('userRegister.php');
	include('booking_process.php');

	if(isset($_POST['id'])) {
		$_SESSION['package_id'] = $_POST['id'];
	}

	$package_id = $_SESSION['package_id'];

	$package_detail = "SELECT * FROM package_info
						JOIN package_detail ON package_detail.Id = package_info.Detail_Id WHERE package_info.Package_Id =$package_id";

	$package_detail_rs = mysqli_query($con,$package_detail);

	$package_detail_data = mysqli_fetch_array($package_detail_rs);
	// var_dump($package_detail_data);


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Gajanand Travels</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- bootstrap cdn -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  	<!-- button hover cdn -->
	<link href="https://cdn.bootcss.com/hover.css/2.3.1/css/hover-min.css" rel="stylesheet">
	<link href="https://cdn.bootcss.com/hover.css/2.3.1/css/hover.css" rel="stylesheet">

	<!-- icons cdn -->
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- animation  -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<!-- favicon -->
	<link rel="icon" href="logo/favicon.png" type="image/gif" >


	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/login_form.css">
	<link rel="stylesheet" type="text/css" href="css/package_detail1.css">
	<link rel="stylesheet" type="text/css" href="css/footer1.css">



</head>
<body>

	<!-- Header Start -->

	<header class="header">

		<div class="logo">

			<img src="Logo/nis7.jpg" class="logo-img" >

		</div>

		<nav class="navigation">

	        <ul class="menu" >
	          <li class="navigation-li">
	            <a class="nav-a nav-selected" href="#">Home</a>
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
											$uname = "SELECT Id,First_Name from user_info WHERE Email = '$userEmail' ";
											$uname_rs = mysqli_query($con,$uname);

											$uname_data = mysqli_fetch_array($uname_rs);

										    $_SESSION['User_Id'] =  $uname_data['Id'];

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
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <span id="close" class="closeBtn close " data-dismiss="modal" >&times;</span>

	   <div class="main">
		 <div class="firstPart">
			<button class="btn" id="Btn1">SIGN UP</button>
			<button class="btn selected-btn" id="Btn2">SIGN IN</button>
		 </div>

		<div class="secondPart1">
			<h1 class="firstLine">Create your Travel account</h1>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="firstname" class="input" placeholder="First Name*"
				 autofocus required>
			<input type="text" name="lastname" class="lastName input" placeholder="Last Name*" 		required>
			<input type="email" name="email" class="E-mail input"
				   placeholder="Email Address*" required>
			<input type="password" name="password" placeholder="Password*"
					 		class="E-mail input" required>

			<input type="text" name="phoneNo" placeholder="Phone No*" class="E-mail input"   required >


			<p class="policy">By clicking Sign Up, you agree to our <a class="login-a" href="#">Terms of Use</a> and our <a class="login-a" href="#">Privacy Policy</a>.</p>

			<button type="submit" class="signupBtn" name="signup">SIGN UP</button>
			</form>
			<hr>
		</div>
		<div class="secondPart2">
			<h1 class="firstLine">Sign in to your account</h1>
			<p class="login-p" style="font-weight: normal;">Your student account is your portal to all things Udacity: your <br>
			classroom, projects, forums, career resources, and more!</p>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="email" name="email" placeholder="Email Address" class="E-mail input"
					autofocus required>
			<input type="password" name= "pw" placeholder="Password" class="E-mail input"
					required>

			<p class="login-p">By clicking Sign Up, you agree to our <a class="login-a" href="#">Terms of Use</a> and our <a class="login-a" href="#">Privacy Policy</a>.</p>

			<button type="submit" class="signinBtn" name="signin">SIGN IN</button>

			<a href="#" class="fp">Forgot your password?</a>
			</form>
			<hr>

			<p style="margin-left: 20px; display: none;">or sign in with one of these services</p>

			<button class="setImage">
			<img class="login-img" src="social/fb.png">&nbsp;&nbsp;&nbsp;&nbsp;FACEBOOK
			</button>

			<button class="setImage">
			<img class="login-img" src="social/google.png">&nbsp;&nbsp;&nbsp;&nbsp;GOOGLE
			</button>

			<button class="setImage">
			<img class="login-img" src="social/twitter.png">&nbsp;&nbsp;&nbsp;&nbsp;TWITTER
			</button>

		</div>

	</div>

    </div>
  </div>
</div>

    <!-- Login Modal End-->
	<?php

			$img_detail = "SELECT * from package_image where Package_Id = $package_id  limit 1";

			$img_detail_rs = mysqli_query($con,$img_detail);


  	   		$img_detail_data = mysqli_fetch_array($img_detail_rs);

	?>
	<div class="city-img">

		<img src="<?php echo $img_detail_data['Image']; ?>" alt="">

		<h3 class="city-name"><?php echo $package_detail_data['Package_Name']; ?>   </h3>

		<span class="city-text">Home / <?php echo $package_detail_data['State']; ?></span>

	</div>

	<div class="buttons">
		<button class="tour-btn tour-info-btn active-btn ">Tour Info</button>
		<button class="tour-btn tour-guide-btn">Tour Guide</button>
		<button class="tour-btn hotel-info-btn">Hotel Information</button>

		<?php

			if (isset($_SESSION['UserEmail'])) {
		 ?>
		<form method="post">

			<input  type="submit" class="book-btn" name="bookPackage" value="Book Now">
		</form>

	    <?php
			}
			else { ?>
			<!-- <form> -->
			<button class="book-btn-second" data-toggle="modal" data-target="#myModal"	>Book Now</button>
	    	<!-- </form> -->
	    <?php } ?>


	</div>
	<div class="tour-info-content">
			<div class="tour-details">
					<div class="tour-imgs">

				<?php

					$img_detail = "SELECT * from package_image where Package_Id = $package_id order by Id desc limit 6";

					$img_detail_rs = mysqli_query($con,$img_detail);


		  	   		while($img_detail_data = mysqli_fetch_array($img_detail_rs)){

				?>
							<div class="tour-img-container">
									<img src="<?php echo $img_detail_data['Image'] ;?>" alt="">
							</div>

				<?php
					}

				?>

					</div>

					<div class="tour-text">
						<h5 class="tour-text-title">Tour Details</h5>
						<p class="tour-text-p"><?php echo $package_detail_data['Detail'];?></p>
					</div>

					<div class="why">
						<h5 class="why-title">Why you choose this package!</h5>

						<div class="why-content">
							<p class="why-text " style="flex:1;width:30%;" ><span class="correct">&#10003;</span>Luxurious Package</p>
							<p class="why-text" style=" flex:1;width:30%;" ><span class="correct">&#10003;</span>Special Discount</p>
							<p class="why-text" style="flex:1;width:30%;" ><span class="correct">&#10003;</span>Comfortable Journey</p>
							<p class="why-text " style="flex:1;width:30%;" ><span class="correct">&#10003;</span>Pickup and Drop Service</p>
							<p class="why-text" style=" flex:1;width:30%;" ><span class="correct">&#10003;</span>Medication</p>
							<p class="why-text" style="flex:1;width:30%;" ><span class="correct">&#10003;</span>Best Accomodation</p>

						</div>

					</div>

					<div class="mapouter"><div class="gmap_canvas"><iframe width="870" height="480" id="gmap_canvas" src="<?php echo $package_detail_data['Map']; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:480px;width:870px;}.gmap_canvas {overflow:hidden;background:none!important;height:480px;width:870px;}</style>
					</div>

			</div>

			<div class="tour-guide">

				<?php

					$guide_detail = "SELECT * from tour_guide where Package_Id = $package_id";

					$guide_detail_rs = mysqli_query($con,$guide_detail);

					if(mysqli_num_rows($guide_detail_rs)>0){

		  	   		while($guide_detail_data = mysqli_fetch_array($guide_detail_rs))
		  	   		{

				 ?>
					<div class="person">
						<div class="guide-image">
							<img src="<?php echo $guide_detail_data['Guide_Image']; ?>" class="guide-img" alt="">
						</div>
						<div class="guide-info">
							<h5 class="guide-name"><?php echo $guide_detail_data['Guide_Name']; ?></h5>
							<p class="guide-desc"><?php echo $guide_detail_data['Guide_Detail']; ?></p>
					<!-- 		<div class="guide-links">
			    				<i class="fa fa-facebook facebook"></i>
			    				<i class="fa fa-twitter twitter"></i>
			    				<i class="fa fa-google-plus google"></i>
									<i class="fa fa-instagram insta"></i>
			    				<i class="fa fa-youtube youtube"></i>

							</div> -->
						</div>
					</div>

				<?php
						}
					}
					else {
						echo "<h5 class='guide-name'>No Guide Available for this tour.</h5>";
					}



				 ?>

			</div>

			<div class="hotel-info">

				<?php

				$hotel_detail = "SELECT hin.Id , hin.Hotel_Name , hin.Hotel_Detail  , (SELECT Image FROM hotel_image WHERE Hotel_Id = hin.Id LIMIT 1) AS Image FROM hotel_info hin

												 where hin.Package_Id = $package_id";

					$hotel_detail_rs = mysqli_query($con,$hotel_detail);

					if(mysqli_num_rows($hotel_detail_rs)>0){

		  	   		while($hotel_detail_data = mysqli_fetch_array($hotel_detail_rs))
		  	   		{
								// var_dump($hotel_detail_data);
				 ?>


					<div class="hotel">
						<div class="hotel-image">
							<img src="<?php echo $hotel_detail_data['Image']; ?>" class="hotel-img" alt="">
						</div>
						<div class="hotel-detail">
							<form action="hotel_detail.php" method="POST">
							<input type="hidden" name="id" value="<?php echo $hotel_detail_data['Id']; ?>">


							<?php $_SESSION['hotel_id'] = $hotel_detail_data['Id']; ?>


							<h5 class="hotel-name"><?php echo $hotel_detail_data['Hotel_Name']; ?></h5>
							<p class="hotel-desc"><?php echo $hotel_detail_data['Hotel_Detail']; ?></p>
							<div class="hotel-links" style="display:none;">
			    				<a href="<?php echo $hotel_detail_data['Hotel_Fb']; ?>" target="_blank" class="a-link"><i class="fa fa-facebook facebook"></i>
			    				</a>

			    				<a href="<?php echo $hotel_detail_data['Hotel_Twitter']; ?>" target="_blank" class="a-link"><i class="fa fa-twitter twitter"></i>
			    				</a>

			    				<!-- <i class="fa fa-google-plus google"></i> -->
								<a href="<?php echo $hotel_detail_data['Hotel_Insta']; ?>" target="_blank" class="a-link"><i class="fa fa-instagram insta"></i>
								</a>

			    				<a href="<?php echo $hotel_detail_data['Hotel_Youtube']; ?>" target="_blank" class="a-link"><i class="fa fa-youtube youtube"></i>
			    				</a>

							</div>
							<input type="submit" name="" value="View" class="viewHotel">

						</form>
						</div>
					</div>

					<?php
							}
						}
						else {
							echo "<h5 class='hotel-name'> No Hotel Available for this tour.</h5>";
						}
					 ?>

			</div>

			<div class="tour-time">
					<h5 class="add-info">Additional Info</h5>

					<table class="tour-time-table">
						<tr class="tab-row">
							<td class="f-column">Check In : </td>
							<td class="s-column"><?php echo $package_detail_data['Start']; ?></td>
						</tr>
						<tr class="tab-row">
							<td class="f-column">Check Out : </td>
							<td class="s-column"><?php echo $package_detail_data['End']; ?></td>
						</tr>
						<tr class="tab-row">
							<td class="f-column">Duration : </td>
							<td class="s-column"><?php echo $package_detail_data['Duration']; ?></td>
						</tr>
						<!-- <tr class="tab-row">
							<td class="f-column">Person : </td>
							<td class="s-column">3 Person</td>
						</tr> -->
						<tr class="tab-row">
							<td class="f-column">Availability : </td>
							<td class="s-column">40</td>
						</tr>
						<tr class="tab-row">
							<td class="f-column">Price : </td>
							<td class="s-column"><?php echo $package_detail_data['Price']; ?> /-</td>
						</tr>
						<tr class="tab-row">
							<td class="f-column">Location : </td>
							<td class="s-column"><?php echo $package_detail_data['State']; ?></td>
						</tr>
					</table>

					<h5 class="help">Need Help!</h5>
					<p style="padding-left:4%; font-size:0.9rem;">
							We are available anytime <br>
							you need help. <!-- sed do <br>
							eiusmod tempor incididunt. -->
					</p>

					<p class="number" style="padding-left:4%;"><i class="fa fa-phone phone"></i>9876543210</p>
	        <p class="mail" style="padding-left:4%;"><i class="fa fa-envelope email-add"></i>Gajanandtravels@gmail.com</p>

			</div>


	</div>
	<div class="package" style="background:none;margin-top:0;">
		<h5 class="title">Recommanded Packages</h5>

		<hr>
<!-- 	<div class="image-content"> -->
<?php
	$sql = "SELECT pin.Package_Id , pin.Package_Name , pd.Duration , pd.Price , (SELECT Image FROM package_image WHERE Package_Id = pin.Package_Id LIMIT 1) as Image FROM package_info pin
					JOIN package_detail pd ON pd.Id = pin.Detail_Id
					ORDER BY pin.Package_Id DESC LIMIT 6";

	$rs = mysqli_query($con,$sql);

		if(mysqli_num_rows($rs)>0){

  	   		while($row = mysqli_fetch_array($rs)){

?>
		<form method="POST" action="package_detail.php" class="package-form">

				<div class="img-container">

						<input type="hidden" name="id" value="<?php echo $row['Package_Id'];?>">

						<img src="<?php echo $row['Image']; ?>" class="images">

						<p class="info"><?php echo $row['Duration'] ?> Start From Rs <?php echo $row['Price'];?> only</p>
						<h5 class="name"><?php echo $row['Package_Name'];?></h5>

						<button class="overlay">Book Now</button>
				</div>
		</form>
<?php

  			}
  		}else{
  				echo "<center><h1>We don't have any packages now...</h1></center>";
  		}
?>
	</div>

	<hr style="margin-top: 0;margin-bottom: 50px;">


	<footer>
	<div class="footer-content">

		<div class="help">
			<h5 class="help-title"> Support </h5>
			<a class="help-links" href="#">Help & Support</a><br>
			<a class="help-links" href="project/cancellation.html">Cancel Reservation Guide</a><br>
				<a class="help-links" href="project/privacypolicy.html">Privacy & Policy</a><br>
				<a class="help-links" href="project/FAQs.html">FAQs</a>

				<h5 class="contact-title"> Stay Connected  </h5>

				<div class="">
					<i class="fa fa-facebook social fb"></i>
					<i class="fa fa-twitter social tw"></i>
					<i class="fa fa-google-plus social gp"></i>
					<i class="fa fa-instagram social in"></i>
			</div>


		</div>

		<div class="address">
			<h5 class="address-header"><i class="fa fa-map-marker"></i> Where we are!</h5>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.992496843512!2d72.1212232145266!3d23.85440018453824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c87739fc9b15d%3A0x543b3c8b7b3de00!2sGajanand+Travels+Patan!5e0!3m2!1sen!2sin!4v1556042122205!5m2!1sen!2sin" class="gt-loc"></iframe>

			<h3 class="address-title">Gajanand Travels</h3>
				<p class="address-content">F-102/Panchmukhi Shopping Center, <br>
						Near Veraichakla, <br>
						Patan-384265.
				</p>
		</div>
<?php

$codeString = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$random =  substr(str_shuffle($codeString), 0, 6);

?>
		<div class="feedback">

				<h5 class="feedback-title"> Give Your Feedback  </h5>

			<form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?> ">
				<input type="text" class="feedback-name" placeholder="Name" name="feedName" >
				<br>
				<input type="email" class="feedback-email" placeholder="Email" name="feedMail">
				<br>
				<textarea class="feedback-content" cols="35" rows="3" placeholder="Message" name="feedMsg"></textarea>
				<br>
<!--
				<input type="text" name="" class="code-verify" placeholder="Verify Code">

				<input type="text" name="" class="code"
					value="<?php //echo $random; ?>" disabled>
				<br>
 -->				<input type="submit" name="send" class="send" value="Send">

			</form>

		</div>

	</div>

	<div class="copyright">
		<p class="copyright-content">
				&copy; 2019 Gajanand Travels All Rights Reserved.
			</p>
			<p class= "designed-by">designed by <span style="color: #00aeef">Nisarg H Patel</span></p>
	</div>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script
		src="https://code.jquery.com/jquery-3.4.0.js"
		integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
		crossorigin="anonymous">
	</script>

	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
	<script type="text/javascript" src="js/new_search.js"></script>
	<script type="text/javascript" src="js/package_detail1.js"></script>


</body>
</html>
