
<?php

session_start();   
require 'pageValidation.php';

  
$fname = $_POST['First_Name'];
$lname = $_POST['Last_Name'];
$birth_day = $_POST['Birthday_day']."/".$_POST['Birthday_Month']."/".$_POST['Birthday_Year'];

$email = $_POST['Email_Id'];
$mobile_number = $_POST['Mobile_Number'];
$gender = $_POST['Gender'];
$address = $_POST['Address'];
$city = $_POST['City'];
$class = $_POST['Class'];

$country = $_POST['Country'];
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];




$servername = "localhost";
$dBusername = "nkmalviya";
$dBpassword = "123";
                 





$dbname = "studentDb";
$msg = "$dbname";
 

//create connection
$connection = new mysqli($servername, $dBusername, $dBpassword,$dbname);

//check connection is created
if ($connection->connect_error) {
     die("Connection failed: " . mysqli_connect_error());
}




 $studentId = $_POST['studentId'];
 echo 'student id : ' .$_POST['studentId'];

 
    $sql = $connection->prepare("UPDATE studentList SET FirstName = ?,LastName= ?,Date_Of_Birth= ?,
   Gender= ?,Address = ?,City= ?,Class= ?,Email= ?,MobileNumber= ?,UserName= ?,Password= ? WHERE id= $studentId ");
   
  
 //bind query
  $sql->bind_param("sssssssssss",$fname,$lname,$birth_day,$gender,
                 $address,$city,$class,$email,$mobile_number,$UserName,$Password);
    if($connection->error){
      echo "error ".$connection->error;
    }




 if($sql->execute()){
   echo "Data inserted successfully";
 }else{
    echo "Error while inserting data->".$connection->error;
 }


 header("Location:student_list.php") or die("Error in file updateData.php");
?>