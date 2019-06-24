<?php 
   session_start();
   if (!isset($_SESSION['log']) && $_SESSION['log'] != true) {
      header("Location:index.php");die();
   }
      session_destroy();
?>

<h1>You have been logged Out</h1><br> 

<a href="index.php"> Click to back</a>