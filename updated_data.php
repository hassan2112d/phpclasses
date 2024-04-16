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

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $id = $_GET['updated_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Password = $_POST['pass'];

    $sql2 =  "UPDATE `users` SET `user_name` = '$name', `user_email` = '$email', `user_password` = '$Password' WHERE `users`.`user_id` = $id;";
    $result2 = mysqli_query($conn,$sql2);

    if($result2){

        header('Location:  forminsert.php');
    }
    else{

        echo "Data not Updated sucessfully";
    }
}

}

?>