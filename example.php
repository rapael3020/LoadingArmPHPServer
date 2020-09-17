<?php
//라이브러리테스트 example
 session_start();
 if (isset($_SESSION["test"]))
 {
     $_SESSION["test"]++;
     echo "welcome again " . $_SESSION["test"];
 }
 else
 {
     $_SESSION["test"] = 0;
     echo "welcome";
 }
 ?> 
 