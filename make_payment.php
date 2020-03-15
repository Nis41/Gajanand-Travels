<?php 
	include('includes/config.php');
	session_start();
	$uid = $_SESSION['User_Id'];


	include('footer_insert.php');



 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Make Payments</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    	<!-- favicon -->
	<link rel="icon" href="logo/favicon.ico" type="image/gif" >


	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/login_form.css">
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

	<!-- Header end -->



<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row" style="margin-left: 35%;"> 
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Debit Card</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Make Payment</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate" onsubmit="return confirm();">
                                        	<!-- <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> -->
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                                                <input id="cc-pament" name="paisa" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $_SESSION['total_paisa'] ?>"disabled>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Name on card</label>
                                                <input id="cc-name" name="holderName" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Card number</label>
                                                <input id="cc-number" name="cardNum" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                                        <input id="cc-exp" name="expDate" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Security code</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="cvv" type="password" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>
                                            <div>

                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block" style="background-color: #17A2B8; color: #fff; margin-left: 15%;" name="payBtn" >
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Pay &#8377;<?php echo $_SESSION['total_paisa'] ?></span>
                                                </button> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





		<footer>
		<div class="footer-content">

			<div class="help" >
				<h5 class="help-title"> Support </h5>
				<a class="help-links" href="#" style="text-decoration: none;">Help & Support</a><br>
				<a class="help-links" href="project/cancellation.html" style="text-decoration: none;">Cancel Reservation Guide</a><br>
	     		<a class="help-links" href="project/privacypolicy.html" style="text-decoration: none;">Privacy & Policy</a><br>
			    <a class="help-links" href="project/FAQs.html" style="text-decoration: none;">FAQs</a>

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
					<textarea class="feedback-content"
						cols="35" rows="3" placeholder="Message" name="feedMsg">
					</textarea>
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



    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/mainForm.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
    	function confirm() {
    		swal("Payment Done", "Your Booking is Confirmed!", "success");
    		return false;
    	}
    </script>


</body>
</html>

<?php 

	if (isset($_POST['payBtn'])) {

		 // $paisa = $_SESSION['total_paisa'];
		 $holderName = $_POST['holderName'];
		 $cardNum = $_POST['cardNum'];
		 $expDate = $_POST['expDate'];
		 $cvv = $_POST['cvv'];

		 $card_insert = "INSERT into payment_detail values (null,'$holderName','$cardNum','$expDate','$cvv', $uid )";

		 $status_update = "UPDATE booking_info set Status = 'Confirm' Where User_Id = $uid";

		 if(mysqli_query($con,$card_insert)) {

		 	if(mysqli_query($con,$status_update)){

		 		echo "<script>alert('Your Bookings is Confirmed');</script>";

		 	}
		 	
		 }
		 else {
		 	echo mysqli_error($con);
		 }


	}

?>

  