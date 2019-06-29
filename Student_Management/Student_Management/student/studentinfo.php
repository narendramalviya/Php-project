<?php  
  session_start();

require_once 'pageValidation.php';
require_once 'dataBaseConfig.php';
  

$studentid = $_SESSION['studentid'];

  $sql = "SELECT * FROM studentList WHERE id =$studentid";

  $list = $connection->query($sql);

  
  if($list->num_rows > 0){
    $row = $list->fetch_assoc(); 
     echo "LIST OF ALL STUDENTS <br><br>";
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
body {
  
 
   
    height: 500px; /* You must set a specified height */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
    color: black;
   }

div {
    background-color: rgb(174, 208, 219);
    width: 800px;
    margin-top: 10%;
    margin-left: 20%;
    border-radius: 20px;
  }
  input{
    border-radius: 5px; 
    border-color: black;
    border-width: 1px;
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
            
             </tr> 
            
   
            <tr><td>'.$row['id'] .'</td>
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
                  
     
             </tr> 
             </table> ';
  }
  else{
    echo "There are no student data";
  }
   
  
  $connection->close();
  
?>
<h3>
    <a href="studentHome.php">Go back</a>
    <h3>