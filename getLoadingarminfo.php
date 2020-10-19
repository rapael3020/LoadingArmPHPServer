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
        $item = $_GET["item"];
        $userid = $_GET["userid"];
        $portnum = $_GET["portnum"];

        $query = "INSERT INTO Loadingarm_information(t_num, t_item, user_id, port_num) VALUES('$id','$item','$userid', '$portnum')";
        mysqli_query($mysqli,$query);

        echo"</br>success!!";
    }

    else{
        echo "error to connected";
    }

    mysqli_close($mysqli);
    ?>