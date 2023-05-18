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
    $query = "SELECT * FROM employees WHERE employeeNumber = $id ";
    $result = mysqli_query($conn, $query) or die("waa"); 

    while($row = mysqli_fetch_array($result)){
        $name = $row['firstName'];
        $surname = $row['lastName'];
        $job = $row['jobTitle'];
        $ext = $row['extension'];
        $email = $row['email'];
        $office = $row['officeCode'];
        $report = $row['reportsTo'];
    }
    mysqli_close($conn);
    ?>
    <?php echo "<h2> $name $surname </h2>"; ?>
    <form action="change.php" method="POST">
        <label for="job">Job Title:</label><br>
        <input type="text" name="job" value="<?php echo $job; ?>"><br>
        <label for="exe">Extension:</label><br>
        <input type="text" name="exe" value="<?php echo $ext; ?>"><br>
        <label for="email">eMail:</label><br>
        <input type="text" name="email" value="<?php echo $email; ?>"><br>
        <label for="office">Office Code:</label><br>
        <input type="text" name="office" value="<?php echo $office; ?>"><br>
        <label for="report">Report To:</label><br>
        <input type="text" name="report" value="<?php echo $report; ?>"><br>
        <input type="hidden" name="id" value="<?php echo $id ?>"><br><br>
        <input type="submit" name="submit" value="Updated Record">
    </form>
</body>
</html>