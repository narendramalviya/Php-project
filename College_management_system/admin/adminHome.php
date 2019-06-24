<!DOCTYPE html>
<!-- 
//<?php
//    session_start();
       
// $adminUser = $_POST['adminusername'];
// $adminPass = $_POST['adminpass'];
// if(!isset($_SESSION['adminlog'])|| $_SESSION['adminlog'] != true){
//      if ( $adminUser == "admin" && $adminPass == "0000") {
//                $_SESSION['adminlog'] = true; 
// }
// else{
//     header("Location:errorPage.php"); die();
// } 
//     }
//?> -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin Home</title>
</head>
<body>

     <h1><a href="admininfo.php">Admin Data</a> <br>
     <a href="http://localhost/PhpPractice/College_management_system/admin/studentData/studentinfo.php">Student Data</a></h1> 
    <br>
      <a href="createDatabase.php">Click to create Database</a>
</body>
</html>