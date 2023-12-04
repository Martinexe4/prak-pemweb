<?php
$host = 'localhost';
$user = 'martin'; // Ganti dengan username MySQL Anda
$password = '123'; // Ganti dengan password MySQL Anda
$database = 'mahasiswa';

$koneksi = new mysqli($host, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>