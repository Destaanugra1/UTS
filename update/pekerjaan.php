<?php
include '../koneksi.php';
$dbkasir = $_POST['tipe_bangunan_020'];
$nama = $_POST['lama_pekerjaan_020'];
$alamat = $_POST['jumlah_tukang_020'];
$telephone = $_POST['id_kontraktor'];
$harga = $_POST['harga_unit_020'];
mysqli_query($mysqli, "UPDATE pekerjaan_020 SET lama_pekerjaan_020='$nama', id_kontraktor='$telephone', jumlah_tukang_020='$alamat', harga_unit_020='$harga' WHERE tipe_bangunan_020='$dbkasir'");

header("location:../database/pekerjaan.php?pesan=update");
?>