
<?php

session_start();   
require 'pageValidation.php';

$servername = "localhost";
$dBusername = "nkmalviya";
$dBpassword = "123";
                 

$dbname = "studentDb";
$msg = "$dbname";
 

 $studentId = $_POST['studentId'];
//create connection
$connection = new mysqli($servername, $dBusername, $dBpassword,$dbname);


$sql = "DELETE FROM studentList WHERE id=$studentId";

if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$connection->close();

header("Location:student_list.php") or die("Error in deleteStudentData.php");
 ?>
 
   
  