<html>
<head>
    <title>Input Data</title>
</head>

<body>
    <a href="index.php">Lihat Semua Data</a>
    <br/>
    <h3>Input Data Baru</h3>

     <form action="proses_input.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
</body>
</html>