<? php
   session_start();
      
      if(isset($_SESSION['adminlog']) && $_SESSION['adminlog'] == true){
             header("Location:adminHome.php");die();
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div align="center">
        <form method="post" action="adminHome.php">
            <br>
            <h1>This is admin login page</h1><br>
            UserName: <br><input type="text" name="adminusername" id=""><br>
            Password: <br><input type="password" name="adminpass" id=""><br>
            <input type="submit" value="Log in"> <br>
            <a href="adminRegis.php"> Click to Register</a>

        </form>
    </div>
</body>

</html>