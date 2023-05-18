<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Customers</h3>
    <form action="exe3.php">
        <input type="submit" name="submit" value="Show Customer">
    </form>
    <?php 
    if(isset($_REQUEST['submit'])){
        require_once("config.php"); 

        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("nope");
        $query = "SELECT * FROM customers ORDER BY customerName";
        $result = mysqli_query($conn, $query) or die("waa");

        echo "<table>
             <tr> 
             <th> Customer Name </th>
             <th> Contact Name </th>
             <th> Telephone </th>
             <th> Address </th>
             <th> City </th>
             <th> Country </th>
             <th> Credit Limit </th>
             </tr>";

             while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td> {$row['customerName']} </td>";
                echo "<td> {$row['contactFirstName']}{$row['contactLastName']}";
                echo "<td> {$row['phone']} </td>";
                echo "<td> {$row['addressLine1']}{$row['addressLine2']}</td>";
                echo "<td> {$row['city']} </td>";
                echo "<td> {$row['country']} </td>";
                echo "<td> {$row['creditLimit']} </td>";
                echo "</tr>";

             }
             echo "</table>";
             mysqli_close($conn);
    }
    ?>
</body>
</html>