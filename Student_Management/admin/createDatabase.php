<h1>User - Admin </h1> <br>

<?php
require 'pageValidation.php';

$servername = "localhost";
$username = "nkmalviya";
$password = "123";

//create connection
$connection = new mysqli($servername, $username, $password);

//check connection is create
if ($connection->connect_error) {
     die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully ";
?>
<br>
<?php
//  create database for admin

$sql = "CREATE DATABASE adminDb";
if ($connection->query($sql) === true) {
     echo "admin Database created successfully";
} else {
     echo "Error while creating admin database : " . $connection->error;
}
?>

<br>
<?php
//  create database for student
$sql = "CREATE DATABASE studentDb";
if ($connection->query($sql) === true) {
     echo "student Database created successfully";
} else {
     echo "Error while creating student database : " . $connection->error;
}

//use student database 
//mysqli_select_db() return 1 if success 
if (!mysqli_select_db($connection, "studentDb"))
     echo "Error in database selecting " . $connection->error;

//Create Table inside the studentDb
$sql = "CREATE TABLE studentList (
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       FirstName VARCHAR(30) NOT NULL,
       LastName VARCHAR(30) NOT NULL, 
       Date_Of_Birth VARCHAR(30) NOT NULL,
       Gender VARCHAR(6) NOT NULL,
       Address VARCHAR(100) NOT NULL,
       City VARCHAR(20) NOT NULL,
       Class VARCHAR(6) NOT NULL,
       Email VARCHAR(30) NOT NULL,
       MobileNumber BIGINT NOT NULL,  
       UserName VARCHAR(30) NOT NULL,
       Password VARCHAR(30) NOT NULL   
    )";

if ($connection->query($sql)) {
     echo "Student Table successfully created ";
} else {
     echo "Error in student table creation->" . $connection->error;
}

//............select admin database...........
if (!mysqli_select_db($connection, "adminDb"))
     echo "Error in adminDb database selection->" . $connection->error;

//Create Table inside the adminDb
$sql = "CREATE TABLE admin (
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     FirstName VARCHAR(30) NOT NULL,
     LastName VARCHAR(30) NOT NULL, 
     Date_Of_Birth VARCHAR(30) NOT NULL,
     Gender VARCHAR(6) NOT NULL,
     Address VARCHAR(100) NOT NULL,
     City VARCHAR(20) NOT NULL,
     Class VARCHAR(6) NOT NULL,
     Email VARCHAR(30) NOT NULL,
     MobileNumber BIGINT NOT NULL,  
     UserName VARCHAR(30) NOT NULL,
     Password VARCHAR(30) NOT NULL   
  )";

if ($connection->query($sql)) {
     echo "Admin Table successfully created ";
} else {
     echo "Error in admin table creation->" . $connection->error;
}

$connection->close();

?>
<a href="adminHome.php">Go to Admin Home</a>