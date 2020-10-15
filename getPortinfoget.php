<?php
header("Content-Type: text/html;charset=UTF-8");

$host = '';
$user = '';
$pw = '';
$dbname = '';
$mysqli = new mysqli($host, $user, $pw, $dbname);

    if($mysqli){
        echo "MySQL successfully connected!<br/>";

        $id = $_GET["id"];
        $name = $_GET["name"];
        $pw = $_GET["pw"];
        $area = $_GET["area"];
        $number = $_GET["number"];

        $query = "INSERT INTO Port_information(p_id, p_name, p_pw, p_area, loadingarm_num) VALUES('$id','$name','$pw', '$area', '$number')";
        mysqli_query($mysqli,$query);

        echo"</br>success!!";
    }

    else{
        echo "error to connected";
    }

    mysqli_close($mysqli);
    ?>