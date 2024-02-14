<?php 

$servername = "localhost";

$username = "root";

$password = "";

$database = "demo";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){

    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn,$sql);

    if(!$result){

        echo "You are not connected with table ".mysqli_connect_error();
    }
    else{
        echo "Connected Successfully with table";
    }
}
else{

    echo "You are not connected successfully" . mysqli_connect_error();
}





?>