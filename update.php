<?php 

$servername = "localhost";

$username = "root";

$password = "";

$database = "demo";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo "Not connected" . mysqli_connect_error();
}
else{

    $user_name = "Ali";
    $user_salary = "500000";
    $sql = "UPDATE `users` SET `user_name` =  '$user_name' , `user_salary` = '$user_salary' WHERE `users`.`user_id` = 4";
    $result = mysqli_query($conn,$sql);

    if($result){

        echo "Updated Successfully";
    }
    else{

        echo "Not Updated Successfully".mysqli_error($conn);
    }

}




