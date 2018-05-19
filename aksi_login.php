<html>
    <style>body{
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
       header('location:index.php');
     }
   }
?></center>

</html>