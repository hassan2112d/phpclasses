<?php


echo ' 

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <h1 class="text-center mt-4 ">Contact Form</h1>
        <div class="container mt-4 ">
            <form action="forminsert.php" method="post">
                <!-- //Name INPUT -->
                <div class="form-group ">
                    <label for="exampleInputEmail1">Name :</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" name="name"
                        aria-describedby="emailHelp" placeholder="Enter Name:">
                </div>
                <!-- //
  //email iNPUT -->
                <div class="form-group ">
                    <label for="exampleInputEmail1">Email address :</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                        aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <!-- //
  //Password Input -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Password :</label>
                    <input type="password" class="form-control" name="pass" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password :</label>
                    <input type="password" class="form-control" name="confirm_pass" id="exampleInputPassword1"
                        placeholder="Confirm Password">
                </div>
                <!-- // -->

                <button type="submit" class="btn btn-dark btn-lg btn-block mt-4 py-2">Submit</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>';


$servername = "localhost";
$username = "root";
$password = "";

$database = "insert";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo "You are not connected Successfully".mysqli_connect_error();
}
else{
    //Insertion Code
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass= $_POST['pass'];
        $confirm_pass = $_POST['confirm_pass'];


        if($pass == $confirm_pass){

        // echo $name;
        // echo $email;
        // echo $pass;

        $sql = "INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES (NULL,'$name', '$email', '$pass')";
        $result = mysqli_query($conn,$sql);

        if($result){

            echo "<script>alert('Data Inserted  Successfully');</script>";
            
           
        }
        else{

            echo "Not Inserted Successfully".mysqli_connect_error($result);
        }
       }
       else{

        echo '<script>alert("Your Password Does not match the confirm Password"); </script>';
       }
   
}

};

//Insertion Code End

//Fetching Code
$sql2 = "SELECT * FROM `users`";
$result2 = mysqli_query($conn,$sql2);


if($result2){

echo '<table class="container mt-4">
  <thead>
    <tr class="mb-4">
      <th>No</th>
      <th >Name</th>
      <th >Email</th>
      <th >Password</th>
      <th> Actions </th>
    </tr>
  </thead>
  ';
  
while ($row = mysqli_fetch_array($result2) ) {
    echo ' 
    <tbody>
    <tr>
      <td>'.$row['user_id'].'</td>
      <td>'.$row['user_name'].'</td>
      <td>'.$row['user_email'].'</td>
      <td>'.$row['user_password'].'</td>
      <td><a href="update_data.php?update_id='.$row['user_id'].'" ><button class="btn btn-dark">Update</button></a>
      <a href="delete_data.php?delete_id='.$row['user_id'].'"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
  </tbody>';



}

echo '</table>';
}

//Fetching code

// $name = "Hassan";
// echo "hello $name";
// echo 'Hello '.$name;

