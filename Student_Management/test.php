<?php 
  session_start();

   $user = $_POST['adminusername'] ;
//    $_SESSION[$user] = $user;
//   echo "username is ".$_SESSION[$user];
if(isset($Se['admin']))
  echo $user;

?>


<form action="#" method="post">
<input type="text" name="user" >
click
<input type="submit">
</form>