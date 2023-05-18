<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>sccscs</h1>
    <form action="exe4.php" method="POST" enctype="multipart/form-data">
        <input type="submit" name="submit" value="Export textfile">
    </form>
    <?php
    if(isset($_REQUEST['submit'])){
        require_once("config.php");

        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("NOOO");
        $query = "SELECT customerName, creditLimit FROM customers ORDER BY customerName ASC";
        $result = mysqli_query($conn, $query) or die("waaa");

        $filename = "lihle.txt";
        $file = fopen($filename, "a") or die("could not open");
        while($row = mysqli_fetch_array($result)){
            $name = $row['customerName'];
            $credit = $row['creditLimit'];
            
            $text = $name . "= R" . number_format($credit, 0) . "\n";
            fwrite($file, $text);

        }
        fclose($file); 
        mysqli_close($conn);
        
        echo "exported";
    
    }
    ?>
</body>
</html>