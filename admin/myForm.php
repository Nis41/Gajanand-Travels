<?php 

	// $error_msg ="Invalid Username and Password";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gajanand Travels | Admin login</title>
</head>
	<link rel="stylesheet" type="text/css" href="css/admin_main.css">
	<link rel="icon" href="../logo/favicon.ico" type="image/gif" >

<body style="background-image: url('images/index_bg.jpg');">

	<div class="login-container">
		<div class="logo">
			<img src="../logo/nis8.jpg">
		</div>
		
		<form action="">
			  <div class="container">
			  	<span style="color: red;"><?php if(isset($error_msg)) echo $error_msg . "<br><br>"; ?></span>
			    <label style="color: #505050;"><b>Username</b></label>
			    <input class="input" type="text" placeholder="Enter Username" name="uname" required>

			    <label style="color: #505050;"><b>Password</b></label>
			    <input class="input" type="password" placeholder="Enter Password" name="psw" required>

			    <button type="submit" class="login-btn">Login</button>
			   
			    <a href="#" class="forgot">Forgot Password?</a>
			
			  </div>
			
		</form>

	</div>

</body>
</html>