<?php
include('../includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN - Gajanand travel</title>
	<link rel="stylesheet" type="text/css" href="css/project.css">
	<link rel="icon" href="../Logo/favicon.ico">
</head>
<body class="body-color">
 <form method="post">
 	<div class="login-form">
 		<br>
 		<br>

		<div>
			<h1 class="admin-header">Gajanand Travels</h1>
		</div>

		<div class="user-input-wrp">
  			<br/>
  			<input type="text" class="inputText" name="uname">
  			<span class="floating-label">User Name</span>
		</div>
		<div class="user-input-wrp">
  			<br/>
  			<input type="Password" class="inputText" name="upass">
  			<span class="floating-label">Password</span>
		</div>
		<div>
			<input type="submit" name="login" class="login-button">
		</div>
	
	</div>
</form>
</body>
</html>


<?php 

	if(isset($_POST['login'])) {
		$userName = $_POST['uname'];
		$userPassword = $_POST['upass'];


		$checkLogin = "SELECT * from admin_info where UserName = '$userName' and Password = '$userPassword'";
        $checkLogin_rs = mysqli_query($con,$checkLogin);
		if($checkLogin_rs) {
			if(mysqli_num_rows($checkLogin_rs) == 1) {

				header("location:home.php");
			}
			else {
				echo "<script>alert('Wrong Password');</script>";

			}
		} else {
				echo "<script>alert('Wrong UserName and Password');</script>";
		}
 	}

 ?>