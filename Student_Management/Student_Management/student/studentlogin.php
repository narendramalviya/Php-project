
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>student login</title>
</head>

<body>
     <div align="center" id="container" > 
        <form method="post" action="studentHome.php">
             <h1>This is student login page</h1>
            <h3> only for registered student</h3><br>
            UserName: <br><input type="text" name="studentusername" id=""><br>
            Password: <br><input type="password" name="studentpass" id=""><br>
            <input type="submit" value="Log in"> <br>
            <h3>If you are not registered please contact admin</h3>

        </form>
    </div>
</body>

</html>