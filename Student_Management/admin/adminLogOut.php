<?php 
   session_start();
   unset($_SESSION['adminusername']); 
   //session_destroy();
  //here am using seelp function for delay smoooth user experience  
   sleep(1);

    header("Location:http://localhost/PhpPractice/Student_Management/index.php");
?>
