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
        if(isset($_REQUEST['submit'])){

      
        $id = $_REQUEST['id'];
        $jobTitle = $_REQUEST['job'];
        $extension = $_REQUEST['exe'];
        $email = $_REQUEST['email'];
        $officeCode = $_REQUEST['office'];
        $reportsTo = $_REQUEST['report'];
        require_once("config.php");

        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("noo");
        $query = "UPDATE employees SET jobTitle = '$jobTitle', extension = '$extension',
        email = '$email', officeCode = '$officeCode',
        reportsTo = '$reportsTo'
        WHERE employeeNumber = $id";

        $result = mysqli_query($conn, $query) or die("waa");
        }
        mysqli_close($conn);
        echo " updated";
    




    ?>
</body>
</html>