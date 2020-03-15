<?php 
	
	include('includes/config.php');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
	<link rel="stylesheet" type="text/css" href="footer.css">


</head>
<body>


<?php
// $con = mysqli_connect("localhost","root","","gajanand_travels");
	if (isset($_POST['submit'])) {

		$uname = $_POST['name'];
		$email = $_POST['mail'];
		$message = $_POST['mess']; 

		
			$sql = "insert into feedback_info(Name,Email,Message) values ('$uname','$email','$message')";
			$rs = mysqli_query($con,$sql);

			
		}
	

?>


<footer>
		<div class="footer-content">
			<div class="help">
				<h5 class="help-title"> Support </h5>
				<a class="help-links" href="#">Help & Support</a><br>
				<a class="help-links" href="project/cancellation.html">Cancel Reservation Guide</a><br>
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
		<div class="feedback">
			    
			    <h5 class="feedback-title"> Give Your Feedback  </h5>
				
				
			    <!-- feedback form -->


				<form method="post">
					<input type="text" name="name" class="feedback-name" placeholder="Name" pattern="[A-Za-z]{3,}" title="enter more than 3 value and only alphabetic value" required>
					<br>
					<input type="email" name="mail" class="feedback-email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
					<br>
					<textarea placeholder="Message" class="feedback-content" 
						cols="35" rows="3"  name="mess">		
					</textarea>
					<br>
					<br>
					<input type="submit" name="submit" class="send" value="Send">

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

</body>
</html>
