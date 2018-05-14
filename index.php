<html>
<head>
    <title>CRUD</title>
<head>
<link rel="stylesheet" href="index.css"/>
<body>
<form style="width: 900px" class="posisi";>
    <center><h2>Data <i>Reviewer</i></h2></center>
    <table style="width: 840px;">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Opsi</th>
        </tr>

        <?php
        include "koneksi.php";
        $query_mysql= mysqli_query($host, "SELECT * FROM reviewer")or die(mysql_error());
        $nomor=1;

        while($data= mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><center><?php echo $nomor++;?></center></td>
                <td><?php echo $data['nama_reviewer'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><center>
                    <a class="edit" href ="edit.php?id=<?php echo $data ['id'];?>">Edit</a>
                    <a class="hapus" href ="proses_hapus.php?id=<?php echo $data ['id'];?>">Hapus</a>
            </center></td>
            </tr>
          <?php  
        }
            ?>
    </table><br>
    <a href="input.php">Tambah Data Baru</a>
    </form>
</body>
</html>
