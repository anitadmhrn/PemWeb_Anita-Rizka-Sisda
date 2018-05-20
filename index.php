<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center'>
   Hola, <b><?php echo $username;?></b>!
    
   <a href="logout.php" style="float:right"><b>Logout</b></a>
</div>
