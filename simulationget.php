<?php
header("Content-Type: text/html;charset=UTF-8");

$host = 'localhost';
$user = 'root';
$pw = '111111';
$dbname = 'LoadingArm';
$mysqli = new mysqli($host, $user, $pw, $dbname);

    if($mysqli){
        echo "MySQL successfully connected!<br/>";

        $sensor3 = $_GET["sensor3"];
        $sensor4 = $_GET["sensor4"];

        $query = "INSERT INTO Loadingarm_working_now_info(substop_03,substop_04) VALUES('$sensor3','$sensor4')";
        mysqli_query($mysqli,$query);

        echo"</br>success!!";
    }

    else{
        echo "유빈아 연결안됐어";
    }

    mysqli_close($mysqli);
    ?>