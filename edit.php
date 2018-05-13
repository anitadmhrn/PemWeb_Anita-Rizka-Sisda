<html>
<head>
    <title>Edit Data</title>
</head>

<body>

    <a href="index.php">Lihat Semua Data</a>

    <br/>
    <h3>Edit Data</h3>

    <?php
    include "koneksi.php";
    $id= $_GET['id'];
    $query_mysql= mysqli_query($host, "SELECT * FROM reviewer WHERE id='$id'") or die (mysql_error());
    $nomor= 1;
    while ($data= mysqli_fetch_array($query_mysql)){
        ?>
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

    <?php } ?>

</body>
</html>

    