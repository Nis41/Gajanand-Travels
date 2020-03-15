<?php

include('includes/config.php');

  if (isset($_POST['signup'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phoneNo'];


    $signupUser = "INSERT into user_info values (null,'$firstname','$lastname','$email','$password','$phone')";

    if(mysqli_query($con,$signupUser)) {
      echo "<script>alert('Insert');</script>";
    }
    else {
      echo "<script>alert('Nope');</script>";
    }

}

if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $password = $_POST['pw'];

  $signinUser = "SELECT Email , Password from user_info where Email = '$email' AND Password = '$password'";

  $signinRs = mysqli_query($con,$signinUser);

  if(mysqli_fetch_row($signinRs) > 0) {

    // session_start();

     $_SESSION['UserEmail'] = $email;

  }
  else {
    echo "<script>alert('wrong id');</script>";

  }

}


 ?>
