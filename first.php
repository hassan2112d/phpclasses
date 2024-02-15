<?php 

$servername = "localhost";

$username = "root";

$password = "";

$database = "demo";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){

    echo "You are connected successfully";
}
else{

    echo "You are not connected successfully" . mysqli_connect_error();
}





?>