<?php
    require_once "sql.php";
    if(!isset($_SESSION['errorimg']))
    {
        $_SESSION['errorimg']=" ";
    }
    if(isset($_POST['submit']))
    {
        $uname=$_POST['user'];
        $sql_register= "Select * from users where username='".$uname."' limit 1";
        $result_register=$connect->query($sql_register);
        if(mysqli_num_rows($result_register)==1)
        {
            $_SESSION['error']="Username Already use*";
            header("Location: register.php");
        }
        else
        {
            $pass= $_POST['pass'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $phone=$_POST['txtEmpPhone'];
            $gender=$_POST['gender'];
            $errors= array();
            $file_name = $_FILES['image']['name']; 
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
            $expensions = array("jpeg","jpg","png");
            if(in_array($file_ext,$expensions) === false)
            {
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            if(empty($errors)==true)
            {
                $file_name = $uname.".".$file_ext;

                move_uploaded_file($file_tmp,"uploadImg/".$file_name); 
                // rename("uploadImg/".$file_name,"uploadImg/".$uname.".".$file_ext);

                $sql = "INSERT INTO users(userName,`password`, gender, firstName,lastName,email,phone,pro_img) VALUES
                ('$uname','$pass','$gender','$fname','$lname','$email','$phone','$file_name')";
                // execute query
                $result = $connect->query($sql);
                $_SESSION['error']="Register successfully";
                header("Location: index.php");
            }
            else
            {
                $_SESSION['errorimg']="file need to be jpeg,jpg,png*";
                header("Location: register.php");
            }
        }
    }
?>