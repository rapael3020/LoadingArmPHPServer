<?php
$host = 'localhost';
$user = 'root';
$password = '111111';
$database_name = 'LoadingArm';
 
$conn = new mysqli($host, $user, $password, $database_name);

if($conn){
    echo "MySQL 접속 성공";
}else{
    echo "MySQL 접속 실패";
}
?>
