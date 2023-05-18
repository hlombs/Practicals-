<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Name</h3>
    <?php
     echo "<table>";
     foreach($_REQUEST as $value){
        echo "<tr>";
        echo "<td> $value</td>";
        echo "</tr>";
  

     }
     echo "</table>";
     
    ?>
</body>
</html>