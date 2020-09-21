<?php
   $sensorA = $_GET["sensorA"];
   $sensorB = $_GET["sensorB"];
   $sensorC = $_GET["sensorC"];
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
    <p>Sensor1 is <?php echo $sensorA ?>.</p>
    <p>Sensor2 is <?php echo $sensorB ?>.</p>
    <p>Sensor3 is <?php echo $sensorC ?>.</p>
  </body>
</html>