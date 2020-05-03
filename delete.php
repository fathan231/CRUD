<?php

include './koneksi.php';
$no_pasien = $_GET['no_pasien'];
$query = "DELETE FROM tabel_pasien WHERE no_pasien = '$no_pasien'";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if ($num > 0){
    echo "Berhasil Hapus Data <br>";

} else {
    echo "Gagal Hapus Data <br>";
}
echo "<a href='pasien.php'>Lihat Data</a>";
?>