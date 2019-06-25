<!-- this is Admin Registration process -->
<?php


$servername = "localhost";
$dBusername = "nkmalviya";
$dBpassword = "123";
                 
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


$dbname = "adminDb";
$msg = "";
//create connection
$connection = new mysqli($servername, $dBusername, $dBpassword,$dbname);

//check connection is created
if ($connection->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

 
// prepare sql statement
 $sql = $connection->prepare("INSERT INTO admin (FirstName,LastName,Date_Of_Birth,
   Gender,Address,City,Class,Email,MobileNumber,UserName,Password)
   VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  
 //bind query
  $sql->bind_param("sssssssssss",$fname,$lname,$birth_day,$gender,
                 $address,$city,$class,$email,$mobile_number,$UserName,$Password);
  


 if($sql->execute()){
    $msg = "Data inserted successfully";
 }else{
    $msg ="Error while inserting data->".$connection->error;
 }


 $sql->close();
$connection->close(); 
?>

<h1>
  <?php echo $msg?>
</h1>
<br>
<h2>
    <br>
    <a href="adminRegis.php">Go Back</a>
</h2>
