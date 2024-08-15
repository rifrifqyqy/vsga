<?php
include 'configwisata.php';

// menyimpan data id dalam variabel
$id_customer = $_GET['id_customer'];
// query sql untukk insert data
$query = "DELETE from tb_pemesanan where id_customer = '$id_customer'";
mysqli_query($conn, $query);

// mengalihkan
header("location:tabel_pemesanan.php");
