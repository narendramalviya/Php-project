<?php 



$servername = "localhost";
$dBusername = "nkmalviya";
$dBpassword = "123";
                 




$dbname = "studentDb";



//create connection
$connection = new mysqli($servername, $dBusername, $dBpassword,$dbname);

//check connection is created
if ($connection->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

 ?>