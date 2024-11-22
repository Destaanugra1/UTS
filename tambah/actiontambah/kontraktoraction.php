<?php
include_once('../../koneksi.php');

$id_020 = $_POST['id_020'];
$nama_020 = $_POST['nama_020'];
$alamat_020 = $_POST['alamat_020'];
$no_nara_020 = $_POST['no_nara_020'];

mysqli_query($mysqli, "INSERT INTO desta_2359201020 (id_020, no_nara_020, nama_020, alamat_020) VALUES ('$id_020', '$no_nara_020', '$nama_020', '$alamat_020')");
header("location: ../../database/kontraktor.php");
?>