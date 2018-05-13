<?php

    session_start();

    include 'config.php';

    if(!isset($_SESSION['username'])){
        header("location:web.html");
        exit();
    }
    if(isset($_SESSION['username'])){
        $username=$_SESSION['username'];
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    Welcome, <?php echo $_SESSION ['username'];
    echo " "?>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>

