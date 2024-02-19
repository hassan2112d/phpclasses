<?php

 $servername = "localhost";

 $username = "root";

 $password = "";

 $database = "demo";


$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){

    $sql = "DELETE FROM `users` WHERE `users`.`user_id` = 3";
    $result = mysqli_query($conn,$sql);

    if($result){

        echo "Deleted Successfully";
    }
    else{
        echo "Not deleted Successfuly" .mysqli_error($conn);
    }

}
else{

    echo "NOT connected sucessfully".mysqli_connect_error();
}



?>