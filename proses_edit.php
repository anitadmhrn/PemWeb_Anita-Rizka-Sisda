<?php
include 'koneksi.php';
$id= $_POST['id'];
$nama= $_POST['nama'];
$email= $_POST['email'];

mysqli_query($host, "UPDATE reviewer SET nama_reviewer='$nama', email='$email' WHERE id='$id'");

header("location:index.pho");

?>