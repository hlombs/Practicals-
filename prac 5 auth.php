<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "Lihle" && $password == "Lihle1"){
        $_SESSION['access'] = "yes";
        $_SESSION['user'] = $username; 

        header("Location:exe2.php");
    }else{
        header("Location: login.html");
    }
    ?>
</body>
</html>