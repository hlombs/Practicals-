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
    $pounds = 181; 
    $stone = intval($pounds/14, 0);
    $stone1 = $pounds%14;
    $kg = round($pounds*0.453592, 1 );

    echo "<table
           <tr> 
           <th> Pounds </th>
           <th> Stone/Pounds </th>
           <th> Kilograms </th>
           </tr>";
           echo "<tr>
                 <td>  $pounds lb </td>
                 <td>  $stone st - $stone1 lb </td>
                 <td>  $kg kg </td>
                 </tr>";
           echo "</table>";
    

    ?>
</body>
</html>