<?php $conn = mysqli_connect( '', 'test', '', 'loadingarm', '3306');//db정보
 if (mysqli_connect_errno())
  {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        function check_mysqli_exist($query){  
            $query_result =  mysqli_query($con, $query);  
            if ($query_result === false){  
            return false;  
            }  
            
            $query_count = mysqli_num_rows($query_result);  
            
            if ($query_count === 1){  
            $row = mysqli_fetch_array($query_count, MYSQLI_BOTH);  //데이터 꺼내기
            return $row;  
            }  
            
            return false;  
            }  
?>

