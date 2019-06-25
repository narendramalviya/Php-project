<a href="studentinfo.php">Go back</a> <br>
<?php 
$servername = "localhost";
$username = "nkmalviya";
$password = "123";

$dbname = "studentDb";
  //create connection
  $connection = new mysqli($servername,$username,$password,$dbname);

  //check connection is create
  if($connection->connect_error){
      die("Connection failed: ".$connection->connect_error);
  }
  echo "Connected successfully";

//ECHO STUDENT DATA

  $sql = "SELECT * FROM studentList";

   $list = $connection->query($sql);

   if($list->num_rows > 0){
   echo "FirstName LastName Date_Of_Birth Gender Address City Class Email MobileNumber UserName Password <br>";
             while($row = $list->fetch_assoc()){

            echo 'ID : '.$row['id'] .' '.
            'FirstName : '.$row['FirstName'] .', '.
            'LastName : '.$row['LastName'] .', '.
            'Date_Of_Birth : '.$row['Date_Of_Birth'] .', '.
            'Gender : '.$row['Gender'] .', '.
            //'Address : '.$row['Address'] .', '.
            'City : '.$row['City'] .', '.
            'Class : '.$row['Class'] .', '.
            'Email : '.$row['Email'] .', '.
            'MobileNumber : '.$row['MobileNumber'] .', '.
            'UserName : '.$row['Password'].'<br>';


             }
   }
   else{
     echo "There are no student data";
   }

   
  
  $connection->close();
  
?>
br


