<h1>processing stu data</h1>
<?php

$fname = $_POST['First_Name'];
$lname = $_POST['Last_Name'];
$birth_day = $_POST['Birthday_day'];
$birth_month = $_POST['Birthday_Month'];
$birth_year = $_POST['Birthday_Year'];
$email = $_POST['Email_Id'];
$mobile_number = $_POST['Mobile_Number'];
$gender = $_POST['Gender'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$Country = $_POST['Country'];


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

//............select student database...........
if (!mysqli_select_db($connection, "studentDb"))
    echo "Error in adminDb database selection->" . $connection->error;
$connection->close();
?>