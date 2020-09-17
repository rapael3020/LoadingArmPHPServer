<?php
$host = 'localhost';
$user = 'root';
$password = '111111';
$database_name = 'LoadingArm';
 
$conn = new mysqli($host, $user, $password, $database_name);
$query = "select s_x1, s_y1, s_z1 from Simulation";
//ex) [0]=123,[1]=323, [2]=434 -> 아두이노가 문자열로 받을 수 있어서 json형식 고려필요

$result = mysqli_query($conn, $query);

//mysql에서 꺼내기
while($data = mysqli_fetch_row($result)){
   print_r($data);
   echo '<br>';
}
?>