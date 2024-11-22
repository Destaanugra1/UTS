<?php
include_once('../../koneksi.php');

$tipe_bangunan_020 = $_POST['tipe_bangunan_020'];
$lama_pekerjaan_020 = $_POST['lama_pekerjaan_020'];
$jumlah_tukang_020 = $_POST['jumlah_tukang_020'];
$id_kontraktor = $_POST['id_kontraktor'];
$harga_unit_020 = $_POST['harga_unit_020'];

mysqli_query($mysqli, "INSERT INTO pekerjaan_020 (tipe_bangunan_020, id_kontraktor, lama_pekerjaan_020, jumlah_tukang_020, harga_unit_020) VALUES ('$tipe_bangunan_020', '$id_kontraktor', '$lama_pekerjaan_020', '$jumlah_tukang_020', '$harga_unit_020')");
header("location: ../../database/pekerjaan.php");
?>