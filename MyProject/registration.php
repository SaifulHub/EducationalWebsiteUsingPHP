<?php

    

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "mydatabase";

    $con = mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die("<script>alert('Connection Failed')</script>");
    }

    if (isset($_POST['submit'])){
        $name = $_POST['user'];
        $email = $_POST['email'];
        $class = $_POST['class'];
        $pass = $_POST['password'];

        $s = "INSERT INTO registration(name,email,class,password) 
                    VALUES('$name','$email','$class','$pass')";
        $res = mysqli_query($con,$s);

        if ($res){
			echo "<script>alert('Registration Successful.')</script>";
		}
		else{
			echo "<script>alert('Something Wrong.')</script>";
		}
    }
?>