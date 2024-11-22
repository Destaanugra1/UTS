<?php
include '../../koneksi.php';

$kd = $_GET['tipe_bangunan_020'];
mysqli_query($mysqli, "DELETE FROM pekerjaan_020 WHERE tipe_bangunan_020 = '$kd'");

header("location: ../../database/pekerjaan.php");
exit;
?>