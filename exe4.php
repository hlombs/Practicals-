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
    $name = "Takudzwa Mutyavaviri"; 
    $space = strpos($name, " ");
    $surname = substr($name, $space +1 ); 
    $len = strlen($surname);

    echo "$name's surname is $len characters long!" ; 
    ?>
</body>
</html>