<?php
header("Content-Type: text/html;charset=UTF-8");

$host = 'localhost';
$user = 'root';
$pw = '111111';
$dbname = 'LoadingArm';
$mysqli = new mysqli($host, $user, $pw, $dbname);

    if($mysqli){
        echo "MySQL successfully connected!<br/>";
        //x,y,z 관절값 받아오기

        $sensor4 = $_GET["sensor4"];
        $sensor5 = $_GET["sensor5"];
        $sensor6 = $_GET["sensor6"];

        $query = "INSERT INTO Loadingarm_working_now_info(substop_04,substop_05,substop_06) VALUES('$sensor4','$sensor5','$sensor6')";
        mysqli_query($mysqli,$query);

        echo"</br>success!!";
    }

    else{
        echo "error to connected";
    }

    mysqli_close($mysqli);
    ?>