

<?php
// here validate user name and password 
  require 'adminValidation.php'; 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>admin Home</title>
</head>
<body> <div align="center">
      <h1 > Admin Home</h1> <br>
     <h3><a href="admininfo.php">Admin Data</a> <br>
     <a href="http://localhost/PhpPractice/Student_Management/admin/studentData/studentinfo.php">Student Data</a>
    </h3>  
    <h3> 
      <a href="createDatabase.php">Click to create Database</a> </h3>
      <a href="adminLogOut.php">LogOut</a>

      </div>
</body>
</html>