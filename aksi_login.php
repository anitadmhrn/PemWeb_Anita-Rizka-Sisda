<!DOCTYPE html>
<html lang="en">
<head>
<title>[Review Book] Tengok Kanan</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="web.css"/>
</head>

<div class="fixed-bg">
<body>
<?php

include 'index.php';
 ?>
<div class="header">
    <img src="logo.png" height= "60" width= "60">
    <h1>- Tengok Kanan -</h1>
    <h3>Review Book</h3>
  <p></p>
</div>


  <div class="topnav" id="myTopnav">
    <a href="#home" class="active">Home</a>
    <div class="dropdown">
      <button class="dropbtn">Fiction 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Fantasy</a>
        <a href="#">Romance</a>
        <a href="#">Comedy</a>
        <a href="#">Mystery</a>
      </div>
    </div> 
    <div class="dropdown">
        <button class="dropbtn">Non-Fiction 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="#">History</a>
          <a href="#">Biography</a>
          <a href="#">Essay</a>
          <a href="#">Text-Book</a>
        </div>
      </div> 
    <a href=about.html>About</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

    <a href=data.php>Data Reviewer</a>
  </div>




  <style>
    .mySlides {display:none;
      width: 500px;
      height:400px;
      position: relative;
}
</style><center><?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $query_mysql= mysqli_query($host, "SELECT * FROM user WHERE username = '$username'") or die (mysql_error());
   $hasil = $query_mysql->fetch_assoc();
   if($query_mysql->num_rows == 0) {
     echo "<div align='center'>Username haven't registered yet! kuy join!<a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Oopsss! Wrong Password! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:web.php');
     }
   }
?></center>

</html>
