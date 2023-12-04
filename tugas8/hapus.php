<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id=$id";
    $result = $koneksi->query($query);

    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error deleting record: " . $koneksi->error;
    }
}
?>
