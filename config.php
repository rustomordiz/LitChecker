<?php
        session_start();
  
        $server = "localhost";
        $user ="root";
        $pass ="";
        $conn=mysqli_connect($server,$user,$pass);
        $db="litcheck";
        mysqli_select_db($conn,$db);
?>
