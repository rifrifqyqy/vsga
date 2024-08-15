<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_wisata";

$db = mysqli_connect($server, $user, $password, $nama_database)
    or die("Gagal terhubung ke database: " . mysqli_connect_error());

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


