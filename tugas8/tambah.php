<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO students (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";
    $result = $koneksi->query($query);

    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<h2>Tambah Mahasiswa</h2>
<form method="post" action="">
    <label>Nama:</label>
    <input type="text" name="nama" required><br>
    <label>NIM:</label>
    <input type="text" name="nim" required><br>
    <label>Jurusan:</label>
    <input type="text" name="jurusan" required><br>
    <button type="submit">Simpan</button>
</form>

</body>
</html>
