<?php
header("Content-Type: text/html;charset=UTF-8");

$host = '';
$user = '';
$pw = '';
$dbname = '';
$host = '3306';
$mysqli = new mysqli($host, $user, $pw, $dbname, $host);

    if($mysqli){
        echo "MySQL successfully connected!<br/>";
        //x,y,z 관절값 받아오기

        $sensor4 = $_GET["sensor4"];
        $sensor5 = $_GET["sensor5"];
        $sensor6 = $_GET["sensor6"];

        $query = "INSERT INTO simulation(s_x1,s_y1,s_z1) VALUES('$sensor4','$sensor5','$sensor6')";
        mysqli_query($mysqli,$query);

        echo"</br>success!!";
    }

    else{
        echo "error to connected";
    }

    mysqli_close($mysqli);
    ?>