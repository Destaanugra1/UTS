<?php  

include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM desta_2359201020 ORDER BY id_020 DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS</title>
</head>
<body>
  
  <a href="../tambah/kontraktortambah.php">Tambah Data Kontraktor</a> <br /> <br />
  <table width='80%' border=1>
    <tr>
      <th>id Kontraktor</th>
      <th>Nama Kontraktor</th>
      <th>Alamat</th>
      <th>No Nara</th>
      <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_020']."</td>";
        echo "<td>".$user_data['nama_020']."</td>";
        echo "<td>".$user_data['alamat_020']."</td>";
        echo "<td>".$user_data['no_nara_020']."</td>";  
        echo "<td>
        <a href='../edit/kontraktoredit.php?id_020=" . $user_data['id_020'] . "'>Edit</a> | <a href='../tambah/actionDelete/kontraktordelete.php?id_020=" . $user_data['id_020'] . "'>Delete</a></td></tr>";
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>