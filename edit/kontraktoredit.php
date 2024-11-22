<!DOCTYPE html>
<html>
<head>
    <title>Ubah data Kontraktor</title>
</head>
<body>
    <h3>UBAH data Penjual</h3>
    <?php
    include_once('../koneksi.php');
    $id_020 = $_GET['id_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM desta_2359201020 WHERE id_020='$id_020'");
    $nomor = 1; 
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/kontraktorupdate.php" method="post">
        <table>
            <tr>
                <td>Nama Kontraktor</td>
                <td>
                    <input type="hidden" name="id_020" value="<?php echo $user_data['id_020'] ?>">
                    <input type="text" name="nama_020" value="<?php echo $user_data['nama_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_020" value="<?php echo $user_data['alamat_020'] ?>"></td>
            </tr>
            <tr>
                <td>No nara</td>
                <td><input type="text" name="no_nara_020" value="<?php echo $user_data['no_nara_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>