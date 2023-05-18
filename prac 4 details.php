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
    $id = $_REQUEST['id'];
    require_once("config.php");
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("nope");
    $query = "SELECT * FROM employees WHERE employeeNumber = $id";
    $result = mysqli_query($conn, $query) or die("waaa");

    while($row = mysqli_fetch_array($result)){
        echo "<h2> {$row['firstName']} {$row['lastName']}</h2>";
        echo "<strong> Job Title: </strong> {$row['jobTitle']}<br>";
        echo "<strong> Exetension: </strong> {$row['extension']}<br>";
        echo "<strong> eMail: </strong> {$row['email']}<br>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>