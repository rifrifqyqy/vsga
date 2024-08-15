<?php
// config.php
// pertemuan 5
// program: program koneksi ke database
// author: rifqy hamdani
$host = 'localhost';
$dbname = 'dbWisata';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "koneksi ke database $dbname berhasil";
