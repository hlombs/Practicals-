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
    require_once("config.php"); 
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("nooo");
    $query = "SELECT employeeNumber, lastName, firstName FROM employees";
    $result = mysqli_query($conn, $query) or die("waaa");

    echo "<table>
         <tr> 
         <th> Name </th>
         <th> </th>
         <th> </th>
         <th> </th>

         </tr>";

         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td> {$row['firstName']} {$row['lastName']} </td>";
            echo "<td><a href=\"details.php?id={$row['employeeNumber']}\">Details</a></td>";
            echo "<td><a href=\"update.php?id={$row['employeeNumber']}\">Update</a></td>";
            echo "<td><a href=\"delete.php?id={$row['employeeNumber']}\"" . "onClick=\"return confirm('Are you sure you want to delete: " . strtoupper($row['firstName']) . " " . strtoupper($row['lastName']) . "');\">Delete</a></td>";
            echo "</tr>";
         }
         echo"</table>";
         mysqli_close($conn);
    ?>

</body>
</html>