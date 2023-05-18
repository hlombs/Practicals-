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
    $emp_ID = $_REQUEST['id'];
    require_once("config.php");
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("nope");
    $query = "DELETE FROM employees WHERE employeeNumber = $emp_ID";
    $result = mysqli_query($conn, $query) or die("waa");

    mysqli_close($conn);
    header("Location:exe1.php");
    ?>
</body>
</html>