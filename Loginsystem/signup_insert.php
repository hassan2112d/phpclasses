<?php

include '../Loginsystem/db_connect.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $age = $_POST['age'];


    $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_pass`, `user_age`) VALUES ('$name', '$email', '$pass', '$age')";

    $result = mysqli_query($conn,$sql);

    if($result){


        echo "You are registered Successfully";

        header("Location: login.php");
    }
}




?>