<?php
session_start();   
   if(!isset($_SESSION['adminusername']) && $_SESSION['adminusername'] != true){
          header("Location:http://localhost/PhpPractice/Student_Management/admin/errorPage.php") or die("error page not found");
   }
?>
