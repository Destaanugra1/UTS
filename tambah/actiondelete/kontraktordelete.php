<?php
include '../../koneksi.php';

$kd = $_GET['id_020'];
mysqli_query($mysqli, "DELETE FROM desta_2359201020 WHERE id_020 = '$kd'");

header("location: ../../database/kontraktor.php");
exit;
?>