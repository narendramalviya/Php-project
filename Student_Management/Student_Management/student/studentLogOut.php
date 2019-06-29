<?php 
   session_start();
   unset($_SESSION['student']); 
  
   session_destroy();
  //here am using seelp function for delay smoooth user experience  
   sleep(2);

    header("Location:http://localhost/PhpPractice/Student_Management/index.php") or die("erro in studentLogOut.php");
?>
