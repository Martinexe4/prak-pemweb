<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $query = "SELECT * FROM students WHERE id=$id";
    $result = $koneksi->query($query);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE students SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id";
    $result = $koneksi->query($query);

    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error updating record: " . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<h2>Edit Mahasiswa</h2>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
    <label>NIM:</label>
    <input type="text" name="nim" value="<?php echo $row['nim']; ?>" required><br>
    <label>Jurusan:</label>
    <input type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>" required><br>
    <button type="submit">Simpan</button>
</form>

</body>
</html>
