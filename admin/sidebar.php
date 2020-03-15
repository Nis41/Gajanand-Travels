<!DOCTYPE html>
<html>
<head>
	<title>Gajanand Travels | Admin</title>


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
	<link rel="icon" href="../logo/favicon.ico" type="image/gif" >
	<link rel="stylesheet" type="text/css" href="css/admin_main1.css">




</head>
<body>

		<header class="header">

			<div class="logo">

				<img src="../Logo/nis7.jpg" class="logo-img" >

			</div>


			 <div class="dropdown">

			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Admin
			  </button>

			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

			    <a class="dropdown-item cpw">Change Password</a>
			    <a class="dropdown-item logout">Logout</a>

			  </div>

			</div>
		</header>

	<div class="admin-body">
		<div class="sidebar">

			<div class="admin-detail">
				<img src="../Guide_img/guide4.jpg">
				<h5 class="admin-name">Ramesh Bhai	<br>
					<span>Founder</span>
				</h5>
			</div>

			<div class="todo">
				<a class="todo-btn selected dashboard-btn" type = "button">
					<i class="fa fa-bar-chart todo-icon"> </i> Dashboard
					<!-- <i class="fa fa-angle-right angle"> </i> -->
					<!-- <i class="sign plus"></i> -->

				</a>

				<a class="todo-btn" type="button" data-toggle="collapse" data-target="#tour-inner" aria-expanded="false" aria-controls="collapseExample">
					<i class="fas fa-archway todo-icon "> </i> Tour Packages
					<!-- <i class="fa fa-angle-right angle"> </i> -->
					<i class="sign plus"></i>


				</a>
				<div class="collapse" id="tour-inner">
				  <div class="inner-btn-div">
				    <a class="inner-btn all-package-btn" type="button"> All Packages </a>
					<a class="inner-btn add-package-btn" type="button"> Add New Package </a>
				  </div>
				</div>

				<a class="todo-btn" type="button" data-toggle="collapse" data-target="#hotel-inner" aria-expanded="false" aria-controls="collapseExample">
					<i class="fas fa-hotel todo-icon"> </i> Hotels
					<!-- <i class="fa fa-angle-right angle"> </i> -->
					<i class="sign plus"></i>


				</a>
				<div class="collapse" id="hotel-inner">
				  <div class="inner-btn-div">
				    <a class="inner-btn all-hotels-btn" type="button"> All Hotels </a>
					<a class="inner-btn add-hotel-btn" type="button"> Add New Hotel </a>
				  </div>
				</div>

				<a class="todo-btn" type="button" data-toggle="collapse" data-target="#user-inner" aria-expanded="false" aria-controls="collapseExample">
					<i class="fas fa-users todo-icon"> </i> Users
					<!-- <i class="fa fa-angle-right angle"> </i> -->
					<i class="sign plus"></i>


				</a>
				<div class="collapse" id="user-inner">
				  <div class="inner-btn-div">
				    <a class="inner-btn all-users-btn" type="button"> All Users </a>
					<a class="inner-btn add-user-btn" type="button"> Add New User </a>
				  </div>
				</div>

				<a class="todo-btn" type="button" data-toggle="collapse" data-target="#guide-inner" aria-expanded="false" aria-controls="collapseExample">
					<i class="fas fa-user todo-icon"> </i> &nbsp;Guide
					<!-- <i class="fa fa-angle-right angle"> </i> -->
					<i class="sign plus"></i>


				</a>
				<div class="collapse" id="guide-inner">
				  <div class="inner-btn-div">
				    <a class="inner-btn all-guides-btn" type="button"> All Guides </a>
					<a class="inner-btn add-guide-btn" type="button"> Add New Guide </a>
				  </div>
				</div>

				<a class="todo-btn booking-btn" type = "button">
					<i class="fa fa-money todo-icon"> </i> View Bookings
					<!-- <i class="fa fa-angle-right angle"> </i> -->
					<!-- <i class="sign plus"></i> -->


				</a>

				<a class="todo-btn feedback-btn" type = "button">
					<i class="fa fa-envelope-open todo-icon"> </i> View Feedback
					<!-- <i class="fa fa-angle-right angle"> </i> -->
					<!-- <i class="sign plus"></i> -->


				</a>


			</div>

		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script
    	src="https://code.jquery.com/jquery-3.4.0.js"
    	integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
    	crossorigin="anonymous">

    </script>
    <script type="text/javascript" src="js/main1.js"></script>
