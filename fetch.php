<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
      
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn,$sql);

    
    $num = mysqli_num_rows($result);
    // echo $num ."<br>";
    
    if($num > 0){

        $row = mysqli_fetch_array($result);

        echo 'MY name is '.$row['user_name'].' His salary is '.$row["user_salary"].'the joining date of his '.$row["added_on"].' ';

        
        
    }
    else{
        echo "No data there";
    }
    

}
else{
    echo "Connection failded" . mysqli_connect_error();
}




// echo var_dump($row);


?>