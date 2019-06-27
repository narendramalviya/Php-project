<?php
session_start();
// <!-- data base info -->
$servername = "localhost";
$dBusername = "nkmalviya";
$dBpassword = "123";
                 

$UserName = $_POST['adminusername'];
$Password = $_POST['adminpass'];


$dbname = "adminDb";
$msg = "";


//create connection
$connection = new mysqli($servername, $dBusername, $dBpassword,$dbname);

//check connection is created
if ($connection->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

 
$sql = "SELECT * FROM admin";
$list = $connection->query($sql);

 if($list->num_rows > 0){
     while($row = $list->fetch_assoc()){
         if($row['UserName'] == $UserName && $row['Password'] == $Password ){
                      $_SESSION['adminusername'] = true;
                      break;                    
         }
     }
 }

 if(!isset($_SESSION['adminusername']) || $_SESSION['adminusername'] != true ){
            header("Location:errorPage.php");die();
 }

$connection->close();

?>