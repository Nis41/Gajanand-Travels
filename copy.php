<?php 
	
	include('includes/config.php');

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
	<link rel="icon" href="logo/favicon.ico" type="image/gif" >

	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<link rel="stylesheet" type="text/css" href="css/login_form.css">

	
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
	            <a class="nav-a bracket" href="#">Package List</a>
	          </li>
	          <li class="navigation-li">
	            <a class="nav-a bracket" href="#">Hotels</a>
	          </li>
	          <li class="navigation-li">
	            <a class="nav-a bracket" href="#" data-toggle="modal" data-target="#myModal">Login & Signup</a>
	          </li>
	          <li class="navigation-li">
	            <a class="nav-a bracket" href="#">About</a>
	          </li>
	          <li class="navigation-li">
	            <a class="nav-a bracket" href="#">Contact Us</a>
	          </li>
	        </ul>
        </nav>


	
	</header>

	<!-- Header end -->
 
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <span id="close" class="closeBtn close " data-dismiss="modal" >&times;</span>
	   
	   <div class="main">
		 <div class="firstPart">
			<button class="btn selected-btn" id="Btn1">SIGN UP</button>
			<button class="btn" id="Btn2">SIGN IN</button>
		 </div>
			
		<div class="secondPart1">
			<h1 class="firstLine">Create your Travel account</h1>
			<form>
			<input type="text" name="firstname" class="input" placeholder="First Name*"
				 autofocus required> 
			<input type="text" name="lastname" class="lastName input" placeholder="Last Name*" 		required>
			<input type="email" name="e-mail" class="E-mail input" 
				   placeholder="Email Address*" required>
			
			<input type="text" name="phoneNo" placeholder="Phone No*" class="E-mail input"       required >
			<input type="password" name="password" placeholder="Password*" 
					class="E-mail input" required>

			<p class="policy">By clicking Sign Up, you agree to our <a class="login-a" href="#">Terms of Use</a> and our <a class="login-a" href="#">Privacy Policy</a>.</p>

			<button type="submit" class="signupBtn">SIGN UP</button>
			</form>
			<hr>
		</div>
		<div class="secondPart2">
			<h1 class="firstLine">Sign in to your account</h1>
			<p class="login-p" style="font-weight: normal;">Your student account is your portal to all things Udacity: your <br>
			classroom, projects, forums, career resources, and more!</p>
			<form>
			<input type="email" name="E-Mail" placeholder="Email Address" class="E-mail input"
					autofocus required>
			<input type="password" name="E-mail" placeholder="Password" class="E-mail input" 
					required>

			<p class="login-p">By clicking Sign Up, you agree to our <a class="login-a" href="#">Terms of Use</a> and our <a class="login-a" href="#">Privacy Policy</a>.</p>

			<button type="submit" class="signinBtn">SIGN IN</button>

			<a href="#" class="fp">Forgot your password?</a>
			</form>
			<hr>

			<p style="margin-left: 20px;">or sign in with one of these services</p>

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

		<div class="lastPart">
			
		</div>
	</div>

    </div>
  </div>
</div>

    <!-- Login Modal End-->

	<!-- slideshow start -->

		<div id="carouselExampleIndicators" class="carousel slide slide-div " data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<form action = 'package_detail.php' method = 'POST'>
				<img src="Locations/howrah.jpg" class="d-block w-100 slide-img " alt="...">
				<div class="carousel-caption d-none d-md-block">
    				<div class="text-bg">
						<input type="hidden" name="id" value="4">
    				<h1 class="place animated bounceInDown">Kolkata</h1>	
    				<h5 class="price animated bounceInLeft">Start From 10000/-</h5>
    				<p class="description animated bounceInRight">
    					Lorem ipsum dolor sit amet, consectetur adipisicing 		elit,ed do eiusmodtempor
    				</p>
    				<button class="StartTour animated bounceInUp" type = "submit">Start Tour</button>
    				</div>
  			</div>
				</form>
			</div>
			<div class="carousel-item">
				<img src="Locations/keralahd.jpg" class="d-block w-100 slide-img" alt="...">
				<div class="carousel-caption d-none d-md-block">
    				<div class="text-bg">
    				
    				<h1 class="place animated bounceInDown">Kerala</h1>
    				<h5 class="price animated bounceInLeft">Start From 11000/-</h5>
    				<p class="description animated bounceInRight">
    					Lorem ipsum dolor sit amet, consectetur adipisicing 		elit,ed do eiusmodtempor
    				</p>
    				<button class="StartTour animated bounceInUp">Start Tour</button>
    			    </div>
  				</div>
			</div>
			<div class="carousel-item">
				<img src="Locations/goahd.jpg" class="d-block w-100 slide-img" alt="...">
				<div class="carousel-caption d-none d-md-block">
    				
    				<div class="text-bg">

    				<h1 class="place animated bounceInDown">Goa</h1>
    				<h5 class="price animated bounceInLeft">Start From 15000/-</h5>
    				<p class="description animated bounceInRight">
    					Lorem ipsum dolor sit amet, consectetur adipisicing 		elit,ed do eiusmodtempor
    				</p>
    				<button class="StartTour animated bounceInUp ">Start Tour</button>
    			    </div>
  				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!--  -->

	<!-- slideshow end -->

	<!-- hotel and location search div starts -->

	<div class="search">
		
		<div class="top">

			<button class="loc-button buttons target">
				<i class='fas fa-search-location icon'></i>&nbsp;&nbsp;&nbsp;&nbsp;     Holidays 
			</button>
			
			<button class="hotel-button buttons">
				<i class='fas fa-hotel icon' ></i>&nbsp;&nbsp;&nbsp;&nbsp; Hotel & Resorts
			</button>			

		</div>

		<hr>

		<form method="GET" onsubmit="loc_search();return false;">

			<div class="location-search">
				<p class="label" style="margin-left: 50px;">Location</p><p class="label" style="margin-left: -25px;">Check-in-date</p><p class="label" style="margin-left: -25px;">Guest</p>
				<br>
				<div class="location-search-content">
				
					<select class="select-location" required>
					
						<option>Select a Location</option>
						<option value="Gujarat">Gujarat</option>
						<option value="Delhi">Delhi</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Punjab">Punjab</option>
						<option value="Uttarpradesh">Uttarpradesh</option>
						<option value="West Bengal">West Bengal</option>
						<option value="Himachalpradesh">Himachalpradesh</option>


				
					</select>

					<input type="date" name="" class="check-in-date" placeholder="check-in-date" required>
					<input type="number" name="" class="guest" min="1" max="50" placeholder="Number of Guest" required  >

					<button class="search-loc-button" type="submit">Search</button>
				</div>
			</div>
		</form>

		<form method="GET" onsubmit="hotel_search();return false;">

			<div class="hotel-search">
				<p class="label" style="margin-left: 50px;">Location</p><p class="label" style="margin-left: -25px;">Hotel Type</p><p class="label" style="margin-left: -25px;">Room Type</p>
				<br>
				<div class="hotel-search-content">
					
					<select class="select-city" required>
						
						<option>Select a Location</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Delhi">Delhi</option>
						<option value="Rajkot">Rajkot</option>
						<!-- <option value="Amritsar">Amritsar</option> -->
				
					</select>

					<select class="Hotel-Type" required>
						
						<option value="null">Hotel Type</option>
						<option value="3 Star">3 Star</option>
						<option value="5 Star">5 Star</option>
						<option value="7 Star">7 Star</option>
				
					</select>

					<select class="Room-Type" required>
						
						<option>Room Type</option>
						<option value="Single Room">Single Room</option>
						<option value="Double Room">Double Room</option>
						<option value="Luxury Room">Luxury Room</option>
						<option value="Family Room">Family Room</option>
						<option value="Deluxe Room">Deluxe Room</option>
				
					</select>
					
					<button class="search-hotel-button" type="submit">Search</button>
				</div>
			</div>
		</form>

	</div>
	
	<!-- hotel and location search div ends -->

	<!-- Popular Packages Starts -->

	<div class="package">
		<h5 class="title">Popular Packages</h5>
		<h6 class="detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h6>

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
  				echo "<center><h3>We don't have any packages now...</h3></center>";
  		}
?>
	</div>

	<div class="discount">
		<!-- <img src="Locations/kerala.jpg"> -->

		<div class="txt-bg">
			<h2 class="discount-title">
				Get 10% Off On Your Next Travel
			</h2>

			<p class="discount-detail">Travel between 25th May to 2nd August and get exciting offers along with a sure
				   <br>10% cash discount.
			</p>

			<button class="discount-btn hvr-glow">Explore Tour</button>	
		</div>

	</div>


	<div class="top-destination">
		<h5 class="title">Top Destination</h5>
		<h6 class="detail">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</h6>
		<hr>
		<div class="boxes">
			<div class="box">
				<img src="clip_art/tajmahal.png">
				<h6 class="des-city">Agra</h6>
				<p class="des-name">Taj Mahal</p>
			</div>
			<div class="box">
				<img src="clip_art/shaniwarwada2.png">
				<h6 class="des-city">Pune</h6>
				<p class="des-name" style="margin-left: 20%;">Shaniwarwada</p>
			</div>
			<div class="box">
				<img src="clip_art/redfort1.png">
				<h6 class="des-city">Delhi</h6>
				<p class="des-name" style="margin-left: 32%;">Red Fort</p>
			</div>
			<div class="box">
				<img src="clip_art/gatewayofindia1.png">
				<h6 class="des-city" style="margin-left: 32%;">Mumbai</h6>
				<p class="des-name" style="margin-left: 20%;">Gateway Of India</p>
			</div>
			<div class="box">
				<img src="clip_art/indiagate2.png">
				<h6 class="des-city">Delhi</h6>
				<p class="des-name">India Gate</p>
			</div>
			<div class="box">
				<img src="clip_art/goldentemple.png">
				<h6 class="des-city" style="margin-left: 31%;">Amritsar</h6>
				<p class="des-name" style="margin-left: 24%;">Golden Temple</p>
			</div>
		</div>
	</div>

	
	<div class="incredible">
		<h5 class="incredible-title">INCREDIBLE PLACES</h5>
		<h6 class="incredible-detail">Let us help you find the perfect place. Ideal destinations for a weekend</h6>
		<hr class="white-hr">

		<div class="incredible-box">
			<div class="hover-img-container">
				<img src="Locations/sardarsaheb.jpg">
			</div>
			<div class="box-text">
				<article><h5 class="place-detail" >The Statue of Unity is Located on the Sadhu Bet island, near Rajpipla on the Narmada river.</h5></article>
				<span class="date">May 18,19 2019</span>
			</div>
		</div>

		<div class="incredible-box">
			<div class="hover-img-container">
				<img src="Locations/vijayvilas.jpg">
			</div>
			<div class="box-text">
				<article><h5 class="place-detail" >Vijay Vilas Palace is the center of attractions at Mandvi,Kutch.This is build by Maharaos of kutch. </h5>      </article>
				<span class="date">May 18,19 2019</span>
			</div>
		</div>

		<div class="incredible-box">
			<div class="hover-img-container">
				<img src="Locations/somnath.jpg">
			</div>
			<div class="box-text">
				<article><h5 class="place-detail" >The Somnath temple located in Saurashtra is believed to be the first among twelve jyotirlinga of Shiva.</h5></article>
				<span class="date">May 18,19 2019</span>	
			</div>
		</div>

	</div>
	  
	<div class="total-tours">
		<h5 class="total-tours-title">Tours we have arranged</h5>
		<h6 class="total-tours-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h6>
    
		<hr style="padding-bottom:5%;">

		<div class="total-tour-grid">
			<div class="first">
	    
	      		<img src="total_tours/total_tours5.jpg">
	    
	    	</div>
	    
	    	<div class="second">
	      
	      		<div class="second-imgs">
	        
	        		<img src="total_tours/total_tours4.jpg">
	      
	      		</div>

	      		<div class="second-imgs">
	        
	        		<img src="total_tours/total_tours3.jpeg">
	      
	      		</div>

	      		<div class="second-imgs">
	        
	        		<img src="total_tours/total_tours2.jpg">
	      
	      		</div>

	      		<div class="second-imgs">
	        
	        		<img src="total_tours/total_tours1.jpeg">
	      
	      		</div>

	      	</div>
	    
	    </div>
	</div>


	<footer>
		<div class="footer-content">
		
			<div class="help">
				<h5 class="help-title"> Support </h5>
				<a class="help-links" href="#">Help & Support</a><br>
				<a class="help-links" href="#">Cancel Reservation Guide</a><br>
	     		<a class="help-links" href="#">Privacy & Policy</a><br>
			    <a class="help-links" href="#">FAQs</a>

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
				
				<form>
					<input type="text" class="feedback-name" placeholder="Name" >
					<br>
					<input type="email" class="feedback-email" placeholder="Email">
					<br>
					<textarea class="feedback-content" 
						cols="35" rows="3" placeholder="Message">		
					</textarea>
					<br>

					<input type="text" name="" class="code-verify" placeholder="Verify Code">

					<input type="text" name="" class="code" 
						value="<?php echo $random; ?>" disabled>
					<br>
					<input type="button" name="" class="send" value="Send">

				</form>

			</div>	
		
		</div>

		<div class="copyright">
			<p class="copyright-content">
     			&copy; 2019 Gajanand Travels All Rights Reserved.
     		</p>
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
  <script type="text/javascript" src="js/search.js"></script>

</body>
</html>