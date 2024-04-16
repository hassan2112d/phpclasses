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



$id = $_GET['delete_id'];

$sql = "DELETE FROM `users` WHERE `user_id` = $id";

$result = mysqli_query($conn,$sql);

if($result){

    
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='http://localhost/practisephp/forminsert.php';
    </script>");

       
    
    

}
else{
    echo "Your data not successfully".mysqli_connect_error();
}

}


