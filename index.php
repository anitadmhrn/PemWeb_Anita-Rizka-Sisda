<html>
<head>
    <title>CRUD</title>
<head>
<body>
    <a href="input.php"> + Tambah Data Baru</a>
    <h3>Data <i>Reviewer</i></h3>
    <table border ="1" class=" table">
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
                <td><?php echo $nomor++;?></td>
                <td><?php echo $data['nama_reviewer'];?></td>
                <td><?php echo $data['email'];?></td>
                <td>
                    <a class="edit" href ="edit.php?id=<?php echo $data ['id'];?>">Edit</a>
                    <a class="hapus" href ="proses_hapus.php?id=<?php echo $data ['id'];?>">Hapus</a>
                </td>
            </tr>
          <?php  
        }
            ?>
    </table>
</body>
</html>
