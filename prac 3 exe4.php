<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Orders</h2>
    <form action="exe4.php" method="POST">
        <table>
            <tr>     
       <td><input type="submit" name="submit" value="Shipped"></td> 
       <td><input type="submit" name="submit" value="Resolved"></td>
       <td><input type="submit" name="submit" value="On Hold"></td>
       <td><input type="submit" name="submit" value="Cancelled"></td>
       <td><input type="submit" name="submit" value="Disputed"></td>
       <td><input type="submit" name="submit" value="In Process"></td>
            </tr>
        </table>

    <?php
    if(isset($_REQUEST['submit'])){
        require_once("config.php");
        $name = $_REQUEST['submit'];

        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("nope");
        $query = "";
        if($name == "Shipped"){
            $query = "SELECT * FROM orders WHERE status = 'Shipped'";
        }elseif($name == "Resolved"){
            $query = "SELECT * FROM orders WHERE status = 'Resolved'";
        }elseif($name == "On Hold"){
            $query = "SELECT * FROM orders WHERE status = 'on Hold'";
        }elseif($name == 'Cancelled'){
            $query = "SELECT * FROM orders WHERE status = 'Cancelled'";
        }elseif($name == "Disputed"){
            $query = "SELECT * FROM orders WHERE status = 'Disputed'";
        }else{
            $query = "SELECT * FROM orders WHERE status = 'In Process'";
        }
        $result = mysqli_query($conn, $query) or die ("waaa");

        echo "<table>
              <tr>
              <th> Order Number </th>
              <th> Order Date </th>
              <th> Required Date </th>
              <th> Shipped Date </th>
              <th> Comment </th>
              <th> Customer Number </th>
              </tr>";

              while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>{$row['orderNumber']}</td>";
                echo "<td>{$row['orderDate']}</td>";
                echo "<td>{$row['requiredDate']}</td>";
                echo "<td>{$row['shippedDate']}</td>";
                echo "<td>{$row['comments']}</td>";
                echo "<td>{$row['customerNumber']}</td>";
                echo "</tr>";
              }
              echo "</table>";
              mysqli_close($conn);
    }
    ?>
</body>
</html>