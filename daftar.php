<html>
<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16;
    background-color: powderblue;
}

input[type=text]{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password]{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16;
    width: 100%;
    background-color: salmon;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: salmon;
}

.container{
	width:60%;
	height:250px;
	padding:20px;
	position: fixed;
	top: 190px;
	left: 35%;
	margin-top: -120px;
	margin-left: -220px;
}

div {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16;
    width: 70%;
    border-radius: 5px;
    background-color: whitesmoke;
    padding: 20px;
}
</style>
<body>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>


<title>Form Pendaftaran</title>
<center><h2>Register</h2></center>

<div class="container">
<form action="proses_daftar.php" method="post">
    <label for="uname">Username</label>
    <input name="username" type="text">

    <label for="pwd">Password</label>
     <input name="password" type="password">
     <input value="Daftar" type="submit"> <input value="Batal" type="reset">
     Already have an account? <a href="login.php"><b>Login</b></a>
  </form>
</div>
</body>
</html>
