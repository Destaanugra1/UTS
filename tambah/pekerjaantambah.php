<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Elektronik</title>
</head>
<body>
    <h3>TAMBAH DATA ELEKTRONIK</h3>
    <form method="post" action="./actiontambah/pekerjaanaction.php">
        <table>
            <tr>
                <td>Tipe bangunan</td>
                <td><input type="text" maxlength="5" name="tipe_bangunan_020"></td>
            </tr>
            <tr>
                <td>lama Pekerjaan</td>
                <td><input type="text" name="lama_pekerjaan_020"></td>
            </tr>
            <tr>
                <td>Jumlah tukang</td>
                <td><input type="text" name="jumlah_tukang_020"></td>
            <tr>
                <td>ID kontraktor</td>
                <td><input type="text" name="id_kontraktor"></td>
            </tr>
            <tr>
                <td>Harga Unit</td>
                <td><input type="text" name="harga_unit_020"></td>
            </tr>
            <tr>
                <td>Update</td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="dataelektronik.php">Kembali</a>
</body>
</html>