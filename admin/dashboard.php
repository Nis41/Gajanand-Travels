<?php
session_start();
	include('package_table.php');
	include('hotel_table.php');
	include('user_table.php');
	// include('guide_table.php');
	include('three_box.php');
	// include('package_insert.php');
	include('sidebar.php');
 ?>

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

		<!-- <header class="header">

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


				</a>

				<a class="todo-btn" type="button" data-toggle="collapse" data-target="#tour-inner" aria-expanded="false" aria-controls="collapseExample">
					<i class="fas fa-archway todo-icon "> </i> Tour Packages
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

				</a>

				<a class="todo-btn feedback-btn" type = "button">
					<i class="fa fa-envelope-open todo-icon"> </i> View Feedback


				</a>


			</div>

		</div> -->

	<div class="admin-content">
		<div class="dashboard">
			<span class="home-text"><i class="fa fa-home"></i> &nbsp;Home / Dashboard</span>

			<div class="four-box">
				<div class="today-view">
					<span class="view-icon"><i class="fa fa-eye"></i></span>
					<div class="view-text">
						<p class="text-value"><i class="fa  fa-arrow-up up"></i> Total Views </p>
						<h3 class="number-value"><?php 	echo $_SESSION['views']; ?></h3>
					</div>
				</div>

				<div class="today-earning"> <span
				class="earning-icon"><i>&#8377;</i></span> <div class="earning-text"> <p
				class="text-value"><i class="fa fa-arrow-up up"></i>
				Total Earnings </p> <h3 class="number-value">22700 </h3> </div> </div>

				<div class="total-users">
					<span class="users-icon"><i class="fa fa-users"></i></span>
					<div class="users-text">
						<p class="text-value"><i class="fa fa-arrow-up up"></i> Total Users </p>
						<h3 class="number-value"><?php echo $user_count_rows ?> </h3>
					</div>
				</div>

			</div>


<!-- ======================================================================================= -->
											<!-- Package Detail Home page -->
<!-- ======================================================================================= -->


			<div class="two-box">
				<div class="tour-package">
					<div class="two-box-text">
						<h4 class="two-box-title">
							Tour Packages
						</h4>
						<span class="two-box-desc">
							Age is no barrier when it comes to travel.
						</span>
					</div>
					<!-- <hr> -->

					<table class="table table-hover">
						  <thead>
						    <tr>
						      <th scope="col">Tour Name</th>
						      <th scope="col">Tour State</th>
						      <th scope="col">Price</th>
						      <th scope="col">Book Status</th>
						    </tr>


						  </thead>
						  <tbody>
								<?php
									while($package_detail_data = mysqli_fetch_array($package_detail_rs)){
											$endDate = $package_detail_data['End'];
											$current = date("Y-m-d");
								 ?>
						    <tr>
									<td><?php echo $package_detail_data['Package_Name'];?></td>
 								 <td><?php echo $package_detail_data['State'];?></td>
 								 <td><?php echo $package_detail_data['Price'];?></td>
						      <td>
										<?php
												if ($endDate<$current) {
													echo "<span class='badge badge-danger'>Closed</span>";
												}
												else {
													echo "<span class='badge badge-success'>Active</span>";
												}
										?>



									</td>
						    </tr>
								<?php
								}
								?>




						  </tbody>
						</table>
				</div>

<!-- ======================================================================================= -->
											<!-- Hotel Detail Home page -->
<!-- ======================================================================================= -->


				<div class="hotels">
					<div class="two-box-text">
						<h4 class="two-box-title">
							Hotels
						</h4>
						<span class="two-box-desc">
							your home away from home
						</span>
					</div>

					<!-- <hr> -->

					<table class="table table-hover">
					 	  <thead>
						    <tr>
						      <th scope="col">Hotel Name</th>
						      <th scope="col">Hotel City</th>
						      <th scope="col">Phone</th>
						      <th scope="col">Hotel Status</th>
						    </tr>
						  </thead>
						  <tbody>
								<?php
									while($hotel_detail_data = mysqli_fetch_array($hotel_detail_rs)){
								 ?>
						    <tr>
						      <td><?php echo $hotel_detail_data['Hotel_Name'];?></td>
						      <td><?php echo $hotel_detail_data['Hotel_City'];?></td>
						      <td><?php echo $hotel_detail_data['Hotel_Number'];?></td>
						      <td><span class="badge badge-success">Open</span></td>
						    </tr>
								<?php
								}
								?>




						  </tbody>
						</table>

				</div>
			</div>

<!-- ======================================================================================= -->
											<!-- User detail table home page -->
<!-- ======================================================================================= -->

			<div class="one-box">
				<div class="two-box-text">
						<h4 class="two-box-title">
							User Details
						</h4>
						<span class="two-box-desc">
							Description of users
						</span>
					</div>

					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">First Name</th>
					      <th scope="col">Last Name</th>
					      <th scope="col">Phone</th>
					      <th scope="col">Email</th>
					      <th scope="col">Bookings</th>

					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>Ramesh</td>
					      <td>Bhai</td>
					      <td>9876543210</td>
					      <td>ramesh@gmail.com</td>
					      <td><span class="badge badge-success">24</span></td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					      <td>@fat</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td colspan="2">Larry the Bird</td>
					      <td>@twitter</td>
					    </tr>
					  </tbody>
					</table>
			</div>
		</div>



	


		<!-- =============================================================================================================================== -->
										<!-- All Guide  -->
		<!-- =============================================================================================================================== -->

						<div class="add-guide">

						</div>


					</div>
	  </div>

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
</body>
</html>
