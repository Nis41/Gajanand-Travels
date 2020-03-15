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


	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/login_form.css">
	<link rel="stylesheet" type="text/css" href="css/footer1.css">
	<link rel="stylesheet" type="text/css" href="css/package_detail1.css">

	
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
	            <a class="nav-a bracket" href="index.php">Home</a>
	          </li>
	          <li class="navigation-li">
	            <a class="nav-a nav-selected" href="#">Package List</a>
	          </li>
	          <li class="navigation-li">
	            <a class="nav-a bracket" href="hotellist.php">Hotels</a>
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
	

	<div class="city-img">
      <img src="location_hd/main.jpg">
      <div class="city-name">PACKAGE LIST</div>
      <div class="city-text">Home / Package List</div>
     </div>


	<!-- package photo detail -->
	<div class="package">
		
<?php
	$sql = "SELECT pin.Package_Id , pin.Package_Name , pd.Duration , pd.Price , (SELECT Image FROM package_image WHERE Package_Id = pin.Package_Id LIMIT 1) as Image FROM package_info pin
					JOIN package_detail pd ON pd.Id = pin.Detail_Id ";

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



		<footer>
		<div class="footer-content">
		
			<div class="help">
				<h5 class="help-title"> Support </h5>
				<a class="help-links" href="#">Help & Support</a><br>
				<a class="help-links" href="project/cancellation.html">Cancel Reservation Guide</a><br>
	     		<a class="help-links" href="project/privacypolicy.html">Privacy & Policy</a><br>
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
					
					<textarea class="feedback-content" cols="35" rows="3" placeholder="Message" name="feedMsg"></textarea>
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
     		<p class= "designed-by">designed by <span style="color: #00aeef">Patel Nisarg & Soni Dharmik </span></p>
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
  
  <script type="text/javascript" src="js/main1.js"></script>
  <script type="text/javascript" src="js/search1.js"></script>

</body>
</html>