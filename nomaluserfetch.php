<?php
$host = '';
$user = '';
$password = '';
$database_name = 'LoadingArm';
 
$conn = new mysqli($host, $user, $password, $database_name);
$query = "select n_id, n_name, n_num, n_phone, n_addr, n_pw from nomal_user"; //가져올 쿼리

$result = mysqli_query($conn, $query);

while($data = mysqli_fetch_row($result)){
   print_r($data);
   echo '<br>';
}
?>