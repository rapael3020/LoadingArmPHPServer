<?php
header("Content-Type: text/html;charset=UTF-8");

$host = '';
$user = '';
$pw = '';
$dbname = '';
$mysqli = new mysqli($host, $user, $pw, $dbname);

    if($mysqli){
        echo "MySQL successfully connected!<br/>";

        $sensor1 = $_GET["sensor1"];
        $sensor2 = $_GET["sensor2"];
        $sensor3 = $_GET["sensor3"];

        $query = "INSERT INTO mockup_working_now_info(substop_01, substop_02, substop_03) VALUES('$sensor1','$sensor2','$sensor3')";
        mysqli_query($mysqli,$query);

        echo"</br>success!!";
    }

    else{
        echo "error to connected";
    }

    mysqli_close($mysqli);
    ?>