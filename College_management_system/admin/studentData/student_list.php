<?php 
$servername = "localhost";
$username = "nkmalviya";
$password = "123";

  //create connection
  $connection = new mysqli($servername,$username,$password);

  //check connection is create
  if($connection->connect_error){
      die("Connection failed: ".$connection->connect_error);
  }
  echo "Connected successfully";

//    create database
   
  
  $connection->close();
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
       

    </div> 
</body>
</html>