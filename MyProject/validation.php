<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "mydatabase";

    $con = mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die("<script>alert('Connection Failed')</script>");
    }

        $name = $_POST['user'];
        $pass = $_POST['password'];

        $s = "SELECT * FROM registration where name = '$name' && password = '$pass'";

        $result = mysqli_query($con,$s);

        $num = mysqli_num_rows($result);

        if ($num ==1){
            
            header('location:After login.php');
            echo "LogIn Success.";
        }
        else{
            echo "<script>alert('Something Wrong. Try with corrections.')</script>";
        }
?>