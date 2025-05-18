<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <h2>Data Inventaris Barang Tahun 2024</h2>
    <table border="1" width="80%" align="center" style="background-color: lavender;">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Harga</td>
        </tr>

        <?php
        include 'koneksi.php';
        $ambil=mysqli_query($koneksi, "select * from barang");
        $no=1;

        while($tampung=mysqli_fetch_array($ambil)){
        ?>


        <tr>
            <td><?= $no++ ?></td>
            <td><?= $tampung['nama barang'] ?></td>
            <td><?= $tampung['harga'] ?></td>
        </tr>

<?php
        }
?>


    </table>
    <form action="" method="post" align="center" margin-top="200px">
        <label for="barang">Nama Barang</label>
        <input type="text" name="barang" id="barang">
        <label for="alamat">harga</label>
        <input type="text" name="harga" id="harga">
        <button type="submit" name="submit">Send</button>
    </form>
</body>
</html>