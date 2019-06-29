<?php
session_start();

require_once 'dataBaseConfig.php';

$UserName = $_POST['studentusername'];
$Password = $_POST['studentpass'];

// <!-- data base info -->

$sql = "SELECT * FROM studentList";
$list = $connection->query($sql);

 if($list->num_rows > 0){
     while($row = $list->fetch_assoc()){
         if($row['UserName'] == $UserName && $row['Password'] == $Password ){
                      $_SESSION['student'] = true;
                      $_SESSION['studentid'] = $row['id'];
                     
                      break;                    
         }
     }
 }

 if(!isset($_SESSION['student']) || $_SESSION['student'] != true ){
            header("Location:errorPage.php") or die("error in studentValidation.php");
 }

$connection->close();

?>