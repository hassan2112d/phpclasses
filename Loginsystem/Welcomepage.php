
<?php

session_start();


if(!isset($_SESSION['useremail'])){


    header("Location: login.php");

    exit();
}
?>

<h2>Welcome, <?php echo $_SESSION['useremail']; ?>!</h2>
<a href="logout.php">Logout</a>



?>