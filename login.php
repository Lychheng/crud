<?php
    require_once "sql.php";
    
    if (!isset($_SESSION['error'])) 
	{
		$_SESSION['error']="";
    }
    if (isset($_SESSION['uname']) && ($_SESSION['error'] ==" "))
    {
		header("Location: detail.php");	
    }
    if(isset($_POST['submit']))
    {
        session_start();
        $_SESSION['uname']=$_POST['uname'];
        $_SESSION['password']=$_POST['password'];
        $sql="select * from users where userName='".$_SESSION['uname']."'AND password='".$_SESSION['password']."' limit 1";
        $result = $connect->query($sql);
        if(mysqli_num_rows($result)==1)
        {
            header("Location: "."detail.php");
        }
        else
        {
            $_SESSION['error']= "Incorrect Username or Password";
            header("Location: "."index.php");
        }
    }
    
?>