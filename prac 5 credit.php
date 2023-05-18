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
    $cust_ID = $_REQUEST['id'];
    require_once("config.php");
    
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("nope");
    $query = "SELECT customerName, creditLimit FROM customers WHERE customerNumber = $cust_ID";
    $result = mysqli_query($conn, $query) or die("waaaaa");

    while($row = mysqli_fetch_array($result)){
        echo "<h2> {$row['customerName']} </h2>";
        echo "Credit Limit: " . number_format($row['creditLimit'], 0);
       
    }
    
    mysqli_close($conn);

    ?>
</body>
</html>