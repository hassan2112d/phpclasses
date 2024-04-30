<?php   

include '../loginsystem/db_connect.php';


echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<h2 class="text-center mt-4"> Sign Up </h2>    
<div class="container mt-4">
<form action="signup_insert.php" method="Post">
<div class="form-group">
  <label for="exampleInputEmail1">Name :</label>
  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
</div>
<div class="form-group">
  <label for="exampleInputEmail1">Email :</label>
  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Email">
</div>
<div class="form-group">
  <label for="exampleInputEmail1">Age :</label>
  <input type="integer" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Age">
</div>
<div class="form-group">
  <label for="exampleInputEmail1">Image Upload :</label>
  <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password:</label>
  <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

';





?>

