

<?php
  session_start(); 

  if(isset($_SESSION['adminlog']) && $_SESSION['adminlog'] == true )
            header("Location:adminHome.php");

// <!-- here validate user name and password -->
  require 'adminValidation.php'; 
  
  if(!isset($_SESSION['adminlog']) || $_SESSION['adminlog'] != true )
            header("Location:errorPage.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin Home</title>
</head>
<body>
      <h1 align="center"> Admin Home</h1> <br>
     <h3><a href="admininfo.php">Admin Data</a> <br>
     <a href="http://localhost/PhpPractice/College_management_system/admin/studentData/studentinfo.php">Student Data</a>
    </h3>  
    <h3> 
      <a href="createDatabase.php">Click to create Database</a> </h3>
      <a href="http://localhost/PhpPractice/College_management_system/index.php">LogOut</a>
</body>
</html>