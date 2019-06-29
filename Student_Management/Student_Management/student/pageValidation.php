<?php
session_start();   
   if(!isset($_SESSION['student']) && $_SESSION['student'] != true){
          header("Location:http://localhost/PhpPractice/Student_Management/student/errorPage.php") or die('error ');
   }
?>
