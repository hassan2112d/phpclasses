<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
<h1>Welcome Login</h1>

<form action="login.php" method="post">
  <div class="form-group ">
    <label for="exampleInputEmail1">Email :</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password :</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" name="submit" value="login" class="btn btn-primary">Submit</button>
</form>
</div>

 

<!-- // $_SESSION :  Is much secure than cookie and its store in the cache data .








//$_COOKIE :  Is not muh secure for login data and it is used for server side or web site .



// session_start();
// session_destroy();
// session_unset();
 -->
<?php 
session_start();

if(isset($_POST['submit'])) {

    include '../Loginsystem/db_connect.php';

    $useremail = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE user_email = '$useremail'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['user_pass'])) {
               
            $_SESSION['useremail'] = $useremail;

            header("Location: Welcomepage.php");
            exit(); // Always use exit after header redirection
        } else {
            echo "Invalid password.";
        }

    } else {
        echo "No user found with that username.";
    }
}
?>


