<?php
include "./koneksi.php";

$no_pasien = $_POST['no_pasien'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tinggi_badan = $_POST['tinggi_badan'];
$berat_badan = $_POST['berat_badan'];
$status_pasien = $_POST['status_pasien'];

$query = "UPDATE tabel_pasien SET nama = '$nama', alamat = '$alamat', tinggi_badan = '$tinggi_badan', berat_badan = '$berat_badan', status_pasien = '$status_pasien' WHERE no_pasien = '$no_pasien' ";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if ($num > 0){
    echo "Berhasil Update Data <br>";

} else {
    echo "Gagal Update Data <br>";
}
echo "<a href='pasien.php'>Lihat Data</a>";
?>