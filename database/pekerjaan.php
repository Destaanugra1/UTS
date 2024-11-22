<?php  

include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM pekerjaan_020 ORDER BY tipe_bangunan_020   DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS</title>
</head>
<body>
  
  <a href="../tambah/pekerjaantambah.php">Tambah Data Pekerja</a> <br /> <br />
  <table width='80%' border=1>
    <tr>
      <th>Tipe bangunan</th>
      <th>Lama Pekerjaan</th>
      <th>Jumlah Tukang</th>
      <th>Kode Kontraktor</th>
      <th>Harga Unit Bangunann</th>
      <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['tipe_bangunan_020']."</td>";
        echo "<td>".$user_data['lama_pekerjaan_020']."</td>";
        echo "<td>".$user_data['jumlah_tukang_020']."</td>";
        echo "<td>".$user_data['id_kontraktor']."</td>";  
        echo "<td>".$user_data['harga_unit_020']."</td>";  
        echo "<td>
    <a href='../edit/perkerjaan.php?tipe_bangunan_020=" . $user_data['tipe_bangunan_020'] . "'>Edit</a> | <a href='../tambah/actiondelete/pekerjaandelete.php?tipe_bangunan_020=" . $user_data['tipe_bangunan_020'] . "'>Delete</a></td></tr>";
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>