<?php
$host = 'localhost';
$user = 'root';
$password = '111111';
$database_name = 'LoadingArm';
 
$conn = new mysqli($host, $user, $password, $database_name);
$query = "select s_x1, s_y1, s_z1 from Simulation";

$result = mysqli_query($conn, $query);

while($data = mysqli_fetch_row($result)){
   print_r($data);
   echo '<br>';
}
?>