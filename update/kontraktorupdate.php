<?php
include '../koneksi.php';
$dbkasir = $_POST['id_020'];
$nama = $_POST['nama_020'];
$alamat = $_POST['alamat_020'];
$telephone = $_POST['no_nara_020'];
mysqli_query($mysqli, "UPDATE desta_2359201020 SET nama_020='$nama', no_nara_020='$telephone', alamat_020='$alamat' WHERE id_020='$dbkasir'");

header("location:../database/kontraktor.php?pesan=update");
?>