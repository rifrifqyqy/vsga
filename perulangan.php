<?php
$mahasiswa = [
    "nama" => "Rifqy",
    "npm" => "213040023",
    "umur" => 21,
    "jurusan" => "informatika",
    "universitas" => "Universitas Bhayangkara Jakarta Raya"
];

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
