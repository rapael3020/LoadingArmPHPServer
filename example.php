<?php
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
//aaa
 