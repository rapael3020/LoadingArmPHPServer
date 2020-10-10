<?php
$host = '';
$user = 'test';
$password = '';
$database_name = '';
$host = '3306';
 
$con = new mysqli($host, $user, $password, $database_name, $host); //connect
if (mysqli_connect_errno($con))
 { echo "MySQL접속 실패: " . mysqli_connect_error(); } //error


 mysqli_set_charset($con,"utf8");
 $res = mysqli_query($con, "select*from simulation"); //db
 $result = array();
 while ($row = mysqli_fetch_array($res)) {
    array_push($result, array('s_x1'=>$row[0],'s_y1'=>$row[1],'s_z1'=>$row[2])); //array
 }
 echo json_encode(array("result"=>$result),JSON_UNESCAPED_UNICODE); //json

 mysqli_close($con); //exit
 ?>

