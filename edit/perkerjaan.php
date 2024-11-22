<!DOCTYPE html>
<html>
<head>
    <title>Ubah data Kontraktor</title>
</head>
<body>
    <h3>UBAH data Penjual</h3>
    <?php
    include_once('../koneksi.php');
    $tipe_bangunan_020 = $_GET['tipe_bangunan_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM pekerjaan_020 WHERE tipe_bangunan_020='$tipe_bangunan_020'");
    $nomor = 1; 
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/pekerjaan.php" method="post">
        <table>
            <tr>
                <td>lama_pekerjaan</td>
                <td>
                    <input type="hidden" name="tipe_bangunan_020" value="<?php echo $user_data['tipe_bangunan_020'] ?>">
                    <input type="text" name="lama_pekerjaan_020" value="<?php echo $user_data['lama_pekerjaan_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jumlah Tukang</td>
                <td><input type="text" name="jumlah_tukang_020" value="<?php echo $user_data['jumlah_tukang_020'] ?>"></td>
            </tr>
            <tr>
                <td>id Kontraktor</td>
                <td><input type="text" name="id_kontraktor" value="<?php echo $user_data['id_kontraktor'] ?>"></td>
            </tr>
            <tr>
                <td>Harga Unit</td>
                <td><input type="text" name="harga_unit_020" value="<?php echo $user_data['harga_unit_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>