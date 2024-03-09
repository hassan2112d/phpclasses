<?php

$servername = "localhost";
$username = "root";
$password = "";

$database = "insert";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo "You are not connected Successfully".mysqli_connect_error();
}
else{

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass= $_POST['pass'];

        // echo $name;
        // echo $email;
        // echo $pass;

        $sql = "INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES (NULL,'$name', '$email', '$pass')";
        $result = mysqli_query($conn,$sql);

        if($result){

            echo "You are Data inserted Successfully";
        }
        else{

            echo "Not Inserted Successfully".mysqli_connect_error($result);
        }
    }
    else{

        echo "Not Get the data Successfully";
    }
}

// $name = "Hassan";
// echo "hello $name";
// echo 'Hello '.$name;
?>