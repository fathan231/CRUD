<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background : black;
        color: white;
    }
    .judul{
    color : white;
    font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
<?php

include './koneksi.php';
$no_pasien = $_GET['no_pasien'];
$query = "SELECT * FROM tabel_pasien WHERE no_pasien = '$no_pasien'";
$result = $connect->query($query);
$row = $result->fetch_assoc();
?>
<center>
    <h1 class="judul">EDIT DATA PASIEN</h1>
    <br>
    <br>
    <br>
    <form action="update.php" method="post">
    <table>
    <tr>
    <td><label for="nama">Nama Pasien</label></td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>"></td>
    </tr>
    <tr>
    <td><label for="alamat">Alamat</label></td>
    <td>:</td>
    <td><input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>"></td>
    </tr>
    <tr>
    <td><label for="tinggi_badan">Tinggi Badan</label></td>
    <td>:</td>
    <td><input type="text" name="tinggi_badan" id="tinggi_badan" value="<?php echo $row['tinggi_badan']; ?>"></td>
    </tr>
    <tr>
    <td><label for="berat_badan">Berat Badan</label></td>
    <td>:</td>
    <td><input type="text" name="berat_badan" id="berat_badan" value="<?php echo $row['berat_badan']; ?>"></td>
    </tr>
    <tr>
    <td><label for="status_pasien">Status Pasien</label></td>
    <td>:</td>
    <td><input type="text" name="status_pasien" id="status_pasien" value="<?php echo $row['status_pasien']; ?>"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="hidden" name="no_pasien" value="<?php echo $row['no_pasien']; ?>"></td>
    <td><input type="submit" value="Simpan" name="btnSimpan"></td>
    </tr>
    </table>
    </form>
</center>
</body>
</html>