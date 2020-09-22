<?php
header("Content-Type: text/html;charset=UTF-8");

$host = '3.34.94.167';
$user = '';
$pw = '';
$dbname = 'loadingarm';
$host = '3306';
$mysqli = new mysqli($host, $user, $pw, $dbname, $host);

    if($mysqli){
        echo "MySQL successfully connected!<br/>";
        

        $id = $_GET["id"];
        $name = $_GET["name"];
        $num = $_GET["num"];
        $phone = $_GET["phone"];
        $address = $_GET["address"];
        $password = $_GET["password"];

        $query = "INSERT INTO simulation(n_id,n_name,n_num,n_phone,n_addr,n_pw) VALUES('$id','$name','$num','$phone','$address','$password')";
        mysqli_query($mysqli,$query);

        echo"</br>success!!!";
    }

    else{
        echo "error to connected";
    }

    mysqli_close($mysqli);
    ?>