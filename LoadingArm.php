<?php
$host = '';
$user = 'test';
$password = '';
$database_name = '';
$host = '3306';
 
$conn = new mysqli($host, $user, $password, $database_name, $host);

if($conn){
    echo "MySQL 접속 성공";
}else{
    echo "MySQL 접속 실패";
}
?>
