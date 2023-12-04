<!--
Martin Ompusunggu
121140144
Pemweb RC
-->

<?php
include 'koneksi.php';

$query = "SELECT * FROM students";
$result = $koneksi->query($query);
?>
<!--Disini untuk mengambil semua kolom yang ada di database-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<h2>Data Mahasiswa</h2>
<a href="tambah.php">Tambah Mahasiswa</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['nim']}</td>
                <td>{$row['jurusan']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a>
                    <a href='hapus.php?id={$row['id']}'>Hapus</a>
                </td>
              </tr>";
      //melakukan perulangan supaya kolom selalu terupdate ketika terdapat data baru
    }
    ?>
</table>

</body>
</html>