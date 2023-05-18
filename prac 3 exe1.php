<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
<h2>Add new employee</h2>
    <form action="exe1.php" method="post">
        <label for="employeeNumber">Employee Number:</label><br>
        <input type="text" name="employeeNumber" size="5" maxlength="4" required><br>
        <label for="lastName">Last Name:</label><br>
        <input type="text" name="lastName" size="25" required><br>
        <label for="firstName">First Name:</label><br>
        <input type="text" name="firstName" size="25" required><br>
        <label for="extension">Extension:</label><br>
        <input type="text" name="extension" size="5" maxlength="5" pattern="[x]+[0-9]{3,4}"><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email" size="25" required><br>
        <label for="Officecode">Office code:</label><br>
        <input type="text" name="officeCode" maxlength="1" size="5" required><br>
        <label for="Reportsto">Reports to:</label><br>
        <input type="text" name="Reportsto" maxlength="4" size="5" required><br>
        <label for="jobTitle">Job Title</label><br>
        <select name="JobTitle" id="JobTitle">
            <option value="SalesRep">Sales Rep</option>
            <option value="VPSales">VP Sales</option>
            <option value="president">President</option>
            <option value="VPMarketing">VP Marketing</option>
            <option value="SalesMan1">Sales Manager(APAC)</option>
            <option value="SalesMan2">Sales Manager(EMEA)</option>
            <option value="SalesMan3">Sales Manager(NA)</option>
        </select><br><br>
        <input type="submit" name="submit" value="Add">
    </form>

    <?php
    if(isset($_REQUEST['submit'])){
        require_once("config.php");
        $employeeNu = $_REQUEST['employeeNumber'];
        $lastN = $_REQUEST['lastName'];
        $firstNa = $_REQUEST['firstName'];
        $ext = $_REQUEST['extension'];
        $em = $_REQUEST['email'];
        $officeC = $_REQUEST['officeCode'];
        $Reports = $_REQUEST['Reportsto'];
        $JobT = $_REQUEST['JobTitle'];

        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("nope");
        $query = "INSERT INTO employees(employeeNumber, lastName, firstName, extension, email, officeCode, reportsTo, jobTitle)
        VALUES ('$employeeNu', '$lastN', '$firstNa', '$ext', '$em', '$officeC', '$Reports', '$JobT')";
        $result = mysqli_query($conn, $query) or die("waaa");

    }
        
    
    mysqli_close($conn);
    echo "added"; 
    ?>
</body>
</html>