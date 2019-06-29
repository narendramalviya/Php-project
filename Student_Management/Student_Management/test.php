<?php
$var = "naremw";
        
     echo '<form action="#" method="post">
            <input type="text" name="CourseID" value="'.$var.'"> 
    
            <button type="submit">clik</button>        
        </form>';

     echo"if here".$_POST['CourseID'];
 echo '
    
<table>
    <tr>  <th>FirstName</th> <th>LastName</th>< th>Date_Of_Birth</th> <th>Gender</th> <th>Address</th> <th>Class</th> 
          <th>Email</th> <th>MobileNumber</th> <th>UserName</th> <th>Password</th>
    </tr>
  
    <tr>  <th>'.$row['id'] .' </th> <th>'.$row['FirstName'] .' </th> < th>'.$row['LastName'] .'</th> 
         <th>  '.$row['Date_Of_Birth'].'</th> <th>    '.$row['Gender'] .'</th> <th> '.$row['City'] .'</th> 
          <th>  '.$row['Class'] .' </th> <th>  '.$row['Email'] .'</th> <th>   
          '.$row['MobileNumber'] .'</th> <th>'.$row['UserName'].'</th> 
          <th> '.$row['Password'].' </th> 
    </tr> 

</table>  
          ';
            ?>
............................

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
            'UserName : '.$row['UserName'].', '.
            'Password : '.$row['Password'].'<br><br>';

........................

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
         