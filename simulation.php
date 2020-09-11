<?php
header("Content-Type: text/html;charset=UTF-8");

$host = 'localhost';
$user = 'root';
$pw = '111111';
$dbname = 'LoadingArm';
$mysqli = new mysqli($host, $user, $pw, $dbname);

    if($mysqli){
        
        echo "MySQL successfully connected!<br/>";

        $sensor1 = $_GET["sensor1"];
        $sensor2 = $_GET["sensor2"];
        $sensor3 = $_GET["sensor3"];

        $query = "INSERT INTO Simulation(s_x1,s_y1,s_z1) VALUES('$sensor1','$sensor2','$sensor3')";
        mysqli_query($mysqli,$query);

        echo"</br>success!!";
    }

    else{
        echo "세환아 데이터 안와";
    }

    mysqli_close($mysqli);
    ?>