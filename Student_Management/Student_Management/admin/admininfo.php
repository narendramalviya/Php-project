


<?php    
require 'pageValidation.php';

$servername = "localhost";
$username = "nkmalviya";
$password = "123";

$dbname = "adminDb";
  //create connection
  $connection = new mysqli($servername,$username,$password,$dbname);

  //check connection is create
  if($connection->connect_error){
      die("Connection failed: ".$connection->connect_error);
  }
  

//ECHO STUDENT DATA

  $sql = "SELECT * FROM admin";

   $list = $connection->query($sql);

  
   if($list->num_rows > 0){
    echo "LIST OF ALL ADMIN USER <br><br>";
   echo ' 
   <style>
  table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
</style>


<table>
            <tr>  
            <th>Id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Date_Of_Birth</th>
            <th>Gender</th>
            <th>Class</th> 
            <th>Address</th>
            <th>City</th>
            <th>Email</th>
            <th>MobileNumber</th>
            <th>UserName</th>
            <th>Password</th>
            </tr> ';
  
       while($row = $list->fetch_assoc()){ 
          
         echo
           '<tr><td>'.$row['id'] .'</td>
            <td>'.$row['FirstName'] .'</td>
            <td>'.$row['LastName'].'</td> 
                 <td>'.$row['Date_Of_Birth'].'</td>
                 <td>'.$row['Gender'].'</td>
                 <td>'.$row['Class'].'</td>
                 <td>'.$row['Address'].'</td>
                 <td>'.$row['City'].'</td> 
                
                  <td>'.$row['Email'].'</td>
                  <td>'.$row['MobileNumber'].'</td> 
                  <td>'.$row['UserName'].'</td> 
                  <td>'.$row['Password'].'</td> 
            </tr> ';
  
           }
           echo '</table> ';
   }
   else{
     echo "There are no data";
   }

   
  
  $connection->close();
  
?>
<h3>
<a href="adminHome.php">Go back</a>
<h3>

