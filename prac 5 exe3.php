<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        <?php
        require_once("config.php");
        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE ) or die("mope");
        $query = "SELECT customerName, sum(amount)
        FROM payments
        INNER JOIN customers
        ON payments.customerNumber = customers.customerNumber
        GROUP BY payments.customerNumber, customers.customerNumber
        ORDER BY sum(amount) DESC
        LIMIT 5";

        $result = mysqli_query($conn, $query) or die("waaa");

        echo "var data = google.visualization.arrayToDataTable([";
          echo " ['Task', 'Hours per Day'],";
        while($row = mysqli_fetch_array($result)){
            echo "['{$row['customerName']}',   {$row['sum(amount)']} ],";
        }
        echo "]);";
        mysqli_close($conn);
        ?>
    var options = {
          title: 'My Daily Activities', 
          hAxis: {
            title: 'yah'
          },
          vAxis: {
            title: 'ah'
          }
        };


        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="columnchart" style="width: 900px; height: 500px;"></div>
  </body>

</body>
</html>