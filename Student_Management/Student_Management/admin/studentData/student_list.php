
<?php 
 require_once 'pageValidation.php';



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
  /////////////
  function fun(){
    echo 'button click';
  }
//ECHO STUDENT DATA

  $sql = "SELECT * FROM studentList";

   $list = $connection->query($sql);

   if($list->num_rows > 0){
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
</style>


<table  >
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
              <th>Update</th>
              <th>Delete</th>
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
                   
                    <td style="text-align:center"> 

                      <form action="updateDataForm.php" method="post">
                         <input type="hidden" value="'.$row['id'] .'" name = "studentId">
                         <input align="center" type="image" id="image" alt="update" height="20x" width="20x"
                         src="update.png">
                       </form>
                    </td>
                  
                    <td style="text-align:center" > 
                   
                       <form action="deleteStudentData.php" method="post">
                         <input type="hidden" value="'.$row['id'] .' " name = "studentId">
                         <input align="center" type="image" id="image" alt="delete" height="25x" width="20x"
                         src="delete.png">
                       </form>
                   </td>
                 
                


                   
              </tr> ';
    
             }
             echo '</table> ';
   }
   else{
     echo "There are no student data";
   }


   //function recceive id and $connection as global argument ;
   //this funtion call by onclick by pressing button 
   function removeStudentById($id,$connection)  {
   

   $sqlQuery = "DELETE FROM studentList WHERE id = $id"; 
     $connection->query($sqlQuery);

}

function updateRecord($id,$connection){
      require_once 'updateForm.php';
   
    





      //.................update data
      $sqlQuery = "UPDATE studentList SET FirstName = ?,LastName = ?,Date_Of_Birth = ?,
      Gender = ?,Address = ?,City = ?,Class = ?,Email = ?,MobileNumber = ?,UserName = ?,
      Password = ? WHERE id = $id " ;

      $sql = $connection->prepare($sqlQuery);

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
  
 //bind query
  $sql->bind_param("sssssssssss",$fname,$lname,$birth_day,$gender,
                 $address,$city,$class,$email,$mobile_number,$UserName,$Password);
  


 if($sql->execute()){
    $msg = "Data inserted successfully";
 }else{
    $msg ="Error while inserting data->".$connection->error;
 }


}

//removeStudent(123

      
  $connection->close();
  
?>
<a href="studentinfo.php">Go back</a> <br>



