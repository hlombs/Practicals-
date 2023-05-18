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

     $dates = $_REQUEST['date'];
    echo "This bill will be due on " . date("d-M-Y", strtotime($dates . "+30 days"));

    ?>

    
    


</body>
</html>