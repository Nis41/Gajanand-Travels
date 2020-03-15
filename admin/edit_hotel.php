<?php
session_start();
    include('hotel_table.php');
    
    echo $hid = $_GET['hotelid'];

    $edit_hotel = "SELECT * from hotel_info where Id = $hid ";

    $edit_hotel_rs = mysqli_query($con,$edit_hotel);

    $edit_hotel_data = mysqli_fetch_array($edit_hotel_rs);


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
    <title>Gajanand Travels | Admin</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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


<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/my1.css" rel="stylesheet" media="all">

    <link rel="icon" href="../logo/favicon.ico" type="image/gif" >

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../Logo/nisFinal.png" alt="Cool Admin"  />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                         <li class="has-sub">
                            <a href="home.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-archway"></i>Tour Packages
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="all_packages.php">
                                        <i class="fas fa-archway"></i>View Packages</a>
                                </li>
                                <li>
                                    <a href="add_package.php">
                                        <i class="fas fa-archway"></i>Add Package</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub active">
                            <a class="js-arrow " href="#">
                                <i class="fas fa-hotel"></i>Hotels
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="all_hotels.php">
                                        <i class="fas fa-hotel"></i>View Hotels</a>
                                </li>
                                <li>
                                    <a href="add_hotel.php">
                                        <i class="fas fa-hotel"></i>Add Hotel</a>
                                </li>
                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-face"></i> Guide
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="all_guides.php">
                                        <i class="zmdi zmdi-face"></i>View Guides</a>
                                </li>
                                <li>
                                    <a href="add_guide.php">
                                        <i class="zmdi zmdi-face"></i>Add Guide</a>
                                </li>
                                <!-- <li>
                                    <a href="forget-pass.html">
                                        <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                </li> -->
                            </ul>
                        </li>
                       <li class="has-sub">
                            <a href="all_users.php">
                                <i class="fas fa-users"></i>View Users
                            </a>
                        </li>

                        <li class="has-sub">
                            <a href="view_bookings.php">
                                <i class="fas fa-money"></i>View Bookings
                            </a>
                        </li>
                        <li class="has-sub">
                            <a href="view_feedback.php">
                                <i class="fa fa-envelope-open"></i>View Feedback
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                           <div class="account-wrap" >
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/admin.jpg" alt="Admin"  />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Prahalad Bhai</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/admin.jpg" alt="Admin" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Prahalad Bhai</a>
                                                    </h5>
                                                    <span class="email">Prahalad467@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="fas fa-unlock-alt"></i>Change Password</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="index.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="home.php">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Edit Hotel</li>
                                        </ul>
                                    </div>
                                    <!-- <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->


                        <!-- STATISTIC-->
            

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row rrow" style="margin-top: -8%;">
                            <div class="two-box-text">
                        <h4 class="two-box-title">
                        Edit Hotel Details
                    </h4>
                    <span class="two-box-desc">
                        your home away from home
                    </span>
                    </div>
                            <div class="col-lg-18" style="width: 100%; padding: 2%;">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Hotel Name</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="hotelName" placeholder="" class="form-control" value="<?php echo $edit_hotel_data['Hotel_Name']; ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Hotel Type</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input" name="hotelType" placeholder="" class="form-control " value="<?php echo $edit_hotel_data['Hotel_Type']; ?>">
                                                    <!-- <small class="help-block form-text">Please enter your email</small> -->
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">City</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="hotelCity" placeholder="" class="form-control" value="<?php echo $edit_hotel_data['Hotel_City']; ?>">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">State</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="hotelState" placeholder=""  class="form-control" value="<?php echo $edit_hotel_data['Hotel_State']; ?>">
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Price</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="hotelPrice" placeholder=""  class="form-control" value="<?php echo $edit_hotel_data['Hotel_Price']; ?>">
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Detail</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <textarea name="hotelDetail" id="textarea-input" rows="4" placeholder="" class="form-control"><?php echo $edit_hotel_data['Hotel_Detail']; ?>"</textarea>
                                            </div>
                                    </div>

                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Total Rooms</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="totalRoom" placeholder="" class="form-control" value="<?php echo $edit_hotel_data['Total_Room']; ?>">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                            </div>
                                    </div>

                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Check-In</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="checkin" placeholder="" class="form-control" value="<?php echo $edit_hotel_data['Check_In']; ?>">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                            </div>
                                    </div>


                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Checkout</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="checkout" placeholder="" class="form-control" value="<?php echo $edit_hotel_data['Check_Out']; ?>">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                            </div>
                                    </div>


                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Map Link</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="hotelMap" placeholder="" class="form-control" value="<?php echo $edit_hotel_data['Hotel_Map']; ?>">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                            </div>
                                    </div>

                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Phone</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="hotelNumber" placeholder="" class="form-control" value="<?php echo $edit_hotel_data['Hotel_Number']; ?>">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                            </div>
                                    </div>

                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Email-Id</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                    <input type="email" id="password-input" name="hotelMail" placeholder="" class="form-control" value="<?php echo $edit_hotel_data['Hotel_Mail']; ?>">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                            </div>
                                    </div>


                                    <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm" name="updateHotel">
                                                    <i class="fa fa-dot-circle-o"></i> Update
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                            </button>
                                    </div>
                            </form>

                            </div>
                         
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Gajanand Travels. All rights reserved. Designed by <a href="#">Nisarg Patel & Dharmik Soni</a>.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
