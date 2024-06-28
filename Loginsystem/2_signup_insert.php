<?php

include '../Loginsystem/db_connect.php';

//echo 1;
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  //echo 1;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $age = $_POST['age'];
    $image = $_FILES['image'];

    //echo $image;

    $password = password_hash($pass , PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`user_name`, `user_email`,`user_image`, `user_pass`, `user_age`) VALUES ('$name', '$email','$image', '$password', '$age')";

    $result = mysqli_query($conn,$sql);

    if($result){
//echo 1;

        echo "You are registered Successfully";

        header("Location: login.php");
    }
}




?>