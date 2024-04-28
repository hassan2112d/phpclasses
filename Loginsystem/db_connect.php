<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "projects";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo 'Database is not connected' . mysqli_connect_error();
}




?>