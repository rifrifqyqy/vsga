<?php
include 'config.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
// query sql untuk input data

$query = "INSERT INTO db_mhs SET nim='$nim', nama='$nama', jurusan='$jurusan',jenis_kelamin='$jenis_kelamin', alamat='$alamat'";

mysqli_query($conn, $query);
header("location:crud14.php");
