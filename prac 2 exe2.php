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
    $price = $_REQUEST['price'];


    if($price >= 0 && $price <= 9999 ){
        echo "Your Laptop falls into the Home category!";
    }elseif($price >= 10000 && $price <= 19999){
        echo "Your Laptop falls into the Mainstream category!";
    }elseif($price >= 20000 && $price <= 29999){
        echo "Your Laptop falls into the High Performance category!";
    }else{
        echo "Your Laptop falls into the Gaming category!";
    }
    ?>


</body>
</html>