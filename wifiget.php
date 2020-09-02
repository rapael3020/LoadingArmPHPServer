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

        $query = "INSERT INTO mockup_working_now_info(substop_01,substop_02) VALUES('$sensor1','$sensor2')";
        mysqli_query($mysqli,$query);

        echo"</br>success!!";
    }

    else{
        echo "유빈아 연결안됐어";
    }

    mysqli_close($mysqli);
    ?>