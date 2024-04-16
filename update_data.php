<?php 


$id = $_GET['update_id'];


$servername = "localhost";
$username = "root";
$password = "";

$database = "insert";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo "You are not connected Successfully".mysqli_connect_error();
}
else{



$sql ="SELECT * FROM `users` WHERE `user_id` = $id";

$result = mysqli_query($conn,$sql);


$row = mysqli_fetch_array($result);
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
            <form action="updated_data.php?updated_id='.$row['user_id'].'" method="post">
                <div class="form-group ">
                    <label for="exampleInputEmail1">Name :</label>
                    <input type="name" value="'.$row['user_name'].'" class="form-control" id="exampleInputEmail1" name="name"
                        aria-describedby="emailHelp" placeholder="Enter Name:">
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1">Email address :</label>
                    <input type="email" value="'.$row['user_email'].'" class="form-control" id="exampleInputEmail1" name="email"
                        aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password :</label>
                    <input type="password" value="'.$row['user_password'].'" class="form-control" name="pass" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
                

                <button type="submit" class="btn btn-dark btn-lg btn-block mt-4 py-2">Update</button>
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




}



?>