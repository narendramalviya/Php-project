<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:test.php'); die();
        
    }
    session_destroy();
?>
<html>
    <head>
        <title>Admin Page</title>
    </head>
    <body>
        This is admin page view able only by logged in users.

    </body> 
</html>