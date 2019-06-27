<?php
session_start();   
   if(!isset($_SESSION['adminusername']) && $_SESSION['adminusername'] != true){
          header("Location:http://localhost/PhpPractice/Student_Management/admin/errorPage.php");die();
   }
?>
