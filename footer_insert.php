<?php 


	if (isset($_POST['send'])) {

		$uname = $_POST['feedName'];
		$email = $_POST['feedMail'];
		$message = $_POST['feedMsg']; 

		
			$sql = "insert into feedback_info(Name,Email,Message) values ('$uname','$email','$message')";
			$rs = mysqli_query($con,$sql);

			if($rs) {
				echo "<script>alert('Feedback Inserted...');</script>";
			}
			else {
				echo "<script>alert('nope');</script>";

			}

			
		}


 ?>