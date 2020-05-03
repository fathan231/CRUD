<?php
include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tinggi_badan = $_POST['tinggi_badan'];
$berat_badan = $_POST['berat_badan'];
$status_pasien = $_POST['status_pasien'];

$query = "INSERT INTO tabel_pasien (nama,alamat,tinggi_badan,berat_badan,status_pasien)
          VALUES ('$nama', '$alamat', '$tinggi_badan', '$berat_badan','$status_pasien')";
$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasil Menambah Data";
}else{
    echo "GAGAL";
}

    echo "<a href='tambah.php'>Lihat Data</a>";