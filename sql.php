<?php
    session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $database="loginfrom";
    $connect=mysqli_connect($host,$user,$pass,$database);
    if(!$connect)
    {
        die("can't");
    }

?>
