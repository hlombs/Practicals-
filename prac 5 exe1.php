<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Search</h2>
    <form action="exe1.php" method="POST">
        <input type="text" name="search">
        <input type="submit" name="submit" value="Go">
    </form>
    <?php
    if(isset($_REQUEST['submit'])){
        $search = $_REQUEST['search'];
      require_once("config.php");
      
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("noo");
    $query = "SELECT customerNumber, customerName FROM customers
    WHERE customerName LIKE '%$search%'
    ORDER BY customerName ASC";
    $result = mysqli_query($conn, $query) or die("waaa");

    echo "<ol>";
    while($row = mysqli_fetch_array($result)){
        echo "<li>  <a href=\"credit.php?id={$row['customerNumber']}\">{$row['customerName']}</a></li>";
    }
    echo "</ol>";
    mysqli_close($conn);
    }
   
    ?>
</body>
</html>