<?php
session_start();
  unset($_SESSION['UserEmail']);
  // $loc = $_SERVER['PHP_SELF'];
  header("Location: index.php");
?>
