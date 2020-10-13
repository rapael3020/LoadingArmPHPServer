<?php
header("Content-Type: text/html;charset=UTF-8");

$host = '3.34.94.167';
$user = '';
$pw = '';
$dbname = '';
$host = '3306';
$mysqli = new mysqli($host, $user, $pw, $dbname, $host);

    if($mysqli){
        echo "MySQL successfully connected!<br/>";
        

        $id = $_GET["shipid"];
        $data = $_GET["data"];
        $num = $_GET["loadingarm_num"];
        

        $query = "INSERT INTO simulation(t_shipid,t_date,loadingarm_num) VALUES('$id','$data','$num')";
        mysqli_query($mysqli,$query);

        echo"</br>success!!!";
    }

    else{
        echo "error to connected";
    }

    mysqli_close($mysqli);
    ?>