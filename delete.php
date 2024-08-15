<?php
include 'config.php';

// menyimpan data id dalam variabel
$id_mhs = $_GET['id_mhs'];
// query sql untukk insert data
$query = "DELETE from db_mhs where id_mhs = '$id_mhs'";
mysqli_query($conn, $query);

// mengalihkan
header("location:crud14.php");
