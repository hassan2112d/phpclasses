<?php

$servername = "localhost";

$username = "root";

$password = "";

$database = "demo";

$conn = mysqli_connect($servername,$username,$password,$database);


if($conn){

    

    $sql = "INSERT INTO `users` ( `user_name`, `user_salary`) VALUES ('hassan', '80000')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Your data has been submited Successfully";
    }
    else{
        echo "Your data is not submited due to ",mysqli_connect_error();
    }

}

else{

    echo "You are not connected ";
}





?>