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
    if(isset($_REQUEST['submit'])){
        require_once("config.php");
        $prod = $_REQUEST['Productline'];
        $des = $_REQUEST['Description'];
        $picture = time() . $_FILES['picture']['name'];

        $destination = "file/" . $picture;
        move_uploaded_file($_FILES['picture']['tmp_name'], $destination);

        $html = "<p> $des </p>";
        
        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("nope");
        $query = "INSERT INTO productlines (productLine, textDescription, htmlDescription, image)
        VALUES ('$prod',  '$des', '$html', '$picture' )";
        $result = mysqli_query($conn, $query) or die("waa");
        
        mysqli_close($conn); 
        echo "added";

        
    }
    

    ?>
<h1>Add new product line</h1>
    <form action="exe2.php" method="post" enctype="multipart/form-data">
        <label for="productline">Product line:</label><br>
        <input type="text" name="Productline" size="25"><br>
        <label for="description">Description:</label><br>
        <textarea name="Description" id="description" cols="40" rows="3"></textarea><br>
        <label for="picture">Picture:</label><br>
        <input type="file" name="picture"><br><br>
        <input type="submit" name="submit" value="Add">

    </form>
</body>

</body>
</html>