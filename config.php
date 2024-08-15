<?php
// konfigurasi koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "dbWisata";
$port = '3306';
// mmembuat koneksi
$conn = new mysqli($host, $user, $password, $database, $port);

// memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal : " . $conn->connect_error);
}
echo "koneksi ke database $database berhasil";

// close koneksi
// $conn->close();
