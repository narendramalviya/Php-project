<?php 
  session_start();

  if($_SESSION['log'] == true) {
       echo "first logout then click on register ";
       ?>
       <br>
       <a href="home.php"> Click to back</a>
       <?php 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user registration</title>
</head>
<body>
     <div align="center">
         <h1>User Registration</h1>
          <label for="fname">First Name</label> <input type="text" id="fname" name="username">
          <label for="lname">Last Name</label> <input type="text" id="lname" name="lastname"><br>
          <label for="pas">Password</label> <input type="password" id="pas" name="password1">
          <label for="pas">Conform Password</label> <input type="password" id="pas" name="password2">
     </div>
   
</body>
</html>

