<?php
include 'koneksi.php';
$nama= $_POST['nama'];
$email= $_POST['email'];

mysqli_query($host,"INSERT INTO reviewer VALUES(' ', '$nama','$email')");

header("location:index.php");

?>