<?php
    require_once "sql.php";
    if(!isset($_SESSION['uname']))
    {
        header("Location: index.php");
    }
    $sql = "SELECT * FROM users WHERE userName='".$_SESSION['uname']."'";
    $result = $connect->query($sql);
    while($row = $result->fetch_assoc())
    {
        $First_Name=$row["firstName"];
        $Last_Name=$row["lastName"];
        $Gender=$row["gender"];
        $Phone =$row['phone'];
        $Email = $row['email'];
        $image=$row['pro_img'];
    }
    if(isset($_POST["logout"]))
    {
        session_destroy();
        header("Location: index.php");
        session_start();
        $_SESSION['error']="";
    }
    
?>