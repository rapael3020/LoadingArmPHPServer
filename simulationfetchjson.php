<?php
$host = '3.34.94.167';
$user = 'test';
$password = 'testtest';
$database_name = 'loadingarm';
$host = '3306';
 
$con = new mysqli($host, $user, $password, $database_name, $host);
if (mysqli_connect_errno($con))
 { echo "MySQL접속 실패: " . mysqli_connect_error(); }


 mysqli_set_charset($con,"utf8");
 $res = mysqli_query($con, "select*from simulation");
 $result = array();
 while ($row = mysqli_fetch_array($res)) {
    array_push($result, array('s_x1'=>$row[0],'s_y1'=>$row[1],'s_z1'=>$row[2]));
 }
 echo json_encode(array("result"=>$result),JSON_UNESCAPED_UNICODE);

 mysqli_close($con);
 ?>

