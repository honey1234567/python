<?php
  session_start();
  session_destroy();
  unset($_SESSION['dname']);
  $_SESSION['message'] = "You are now logged out";
  header("location:home.php");


?>