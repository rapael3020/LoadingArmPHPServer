<?php
   $sensor4 = $_GET["sensor4"];
   $sensor5 = $_GET["sensor5"];
   $sensor6 = $_GET["sensor6"];
?>

<!doctype html>
<html lang="ko">
  <head>
  <meta charset="utf-8">
    <title>HTML</title>
    <style>
      * {
        font-size: 16px;
        font-family: Consolas, sans-serif;
      }
    </style>
  </head>
  <body>
    <p>Sensor1 is <?php echo $sensor4 ?>.</p>
    <p>Sensor2 is <?php echo $sensor5 ?>.</p>
    <p>Sensor3 is <?php echo $sensor6 ?>.</p>
  </body>
</html>