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
<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="web.php">Back</a>
    <center>
    <a href="data.php">View All Data</a>


    <?php
    include "koneksi.php";
    $id= $_GET['id'];
    $query_mysql= mysqli_query($host, "SELECT * FROM reviewer WHERE id='$id'") or die (mysql_error());
    $nomor= 1;
    while ($data= mysqli_fetch_array($query_mysql)){
        ?>
        <br><br>
        <div class="container">
        <h3>Edit Data</h3>
        <form action="proses_edit.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id']?>">
                        <input type="text" name="nama" value="<?php echo $data['nama_reviewer']?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td><input type="text" name="email" value="<?php echo $data['email']?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div></center>
    <?php } ?>

</body>
</html>

    
