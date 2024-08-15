

<?php
// Nama program: program perulangan dengan do dan while
//  penulis: Rifqy Hamdani | versi: 1.0.0
// date: 24 Juli 2024
// deskripsi: program untuk mengetahui perbedaan do dan while

$value = 1;
while ($value <= 10) {
    echo "perulangan ke-" . $value . "<br/>";
    $value++;
}

"<br/> perulangan do";

$i = 1;
do {
    echo "perulangan ke-" . $i . "<br/>";
    $i++;
} while ($i <= 10);
?>




<?php
// Nama program: program perulangan dengan for dan foreach
//  penulis: Rifqy Hamdani | versi: 1.0.0
// date: 24 Juli 2024
// deskripsi: program untuk mengetahui perbedaan for dan foreach


// for loop
$nama = ["Adi", "Budi", "Carli", "Dedi"];
for ($i = 0; $i < count($nama); $i++) {
    echo $nama[$i] . "<br/>";
}

// foreach loop
foreach ($nama as $value) {
    echo $value . "<br/>";
}
?>
<?php

$mahasiswa = [
    [
        "nama" => "Rifqy",
        "umur" => "21",
        "jurusan" => "Informatika",
        "universitas" => "Universitas Indonesia",
    ],
    [
        "nama" => "Hamdani",
        "umur" => "21",
        "jurusan" => "Informatika",
        "universitas" => "Universitas Indonesia",
    ]
];

// foreach ($mahasiswa as $key => $value) {
//     echo $key . " : " . $value . "<br>";
// }

foreach ($mahasiswa as $value) {
    echo $value['nama'] . "<br/>";
}
?>
<?php
// Nama program: mendefinisikan fungsi prosedur
//  penulis: Rifqy Hamdani | versi: 1.0.0
// date: 24 Juli 2024
// deskripsi: program untuk mendefinisikan fungsi prosedur

function sapaan($nama, $umur=10)
{
    echo "Hai, $nama" . " " . "Umur Kamu, $umur";
}

sapaan("Furina", "21")

?>
