<?php   
    session_start();
    include'config.php';


    $username= $_POST['username'];
    $password= $_POST['password'];

    $query= mysqli_query($host,"SELECT * FROM user where username='".$username."' and password='".$password."'");
    $x= mysqli_num_rows($query);

    if($x==TRUE){
        $_SESSION ['username']= $username;
        header("location:index.php");
    }
    else{
        echo"<script> alert('Username atau Password Salah');
        location='home.php';
        </script>";
    }
    

?>