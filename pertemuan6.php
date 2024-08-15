<?php
// program inisialisai variabel php
// author: Rifqy Hamdani
$nama = "John Doe";
$umur = 25;
$tinggi_cm = 175.5;
$status_menikah = true;

// variabel angka
$angka1 = 10;
$angka2 = 5;
// penjumlahan
$penjumlahan = $angka1 + $angka2;
// perkalian
$perkalian = $angka1 * $angka2;
// pembagian
$pembagian = $angka1 / $angka2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 6</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container-fluid mt-5">
        <div class="d-flex flex-column gap-1">
            <h5>Nama</h5>
            <p><?= $nama ?></p>
        </div>
        <div class="d-flex flex-column gap-1">
            <h5>Umur</h5>
            <p><?= $umur ?></p>
        </div>
        <div class="d-flex flex-column gap-1">
            <h5>Tinggi Badan</h5>
            <p><?= $tinggi_cm ?></p>
        </div>
        <div class="d-flex flex-column gap-1">
            <h5>Status Menikah</h5>
            <p><?= $status_menikah ? "Menikah" : "Belum menikah" ?></p>
        </div>
    </main>
    <main class="container-fluid mt-5">
        <h5>Angka 1 = <?= $angka1 ?></h5>
        <h5>Angka 2 = <?= $angka2 ?></h5>
        <div class="d-flex flex-column gap-1 mt-2">
            <h5>Penjumlahan</h5>
            <p><?= $penjumlahan ?></p>
        </div>
        <div class="d-flex flex-column gap-1 mt-2">
            <h5>Perkalian</h5>
            <p><?= $perkalian ?></p>
        </div>
        <div class="d-flex flex-column gap-1 mt-2">
            <h5>Pembagian</h5>
            <p><?= $pembagian ?></p>
        </div>
    </main>
</body>

</html>
<?php
// Nama program: program penulisan string
//  penulis: Rifqy Hamdani | versi: 1.0.0
// deskripsi: program untuk program penulisan string
$string1 = 'ini adalah string sederhana';
$string2 = "ini adalah string yang memiliki beberapa baris";
$string3 = 'Dia Berkata: "I\'ll be back"';
$string4 = "Dia berkata: \"I'll be back\"";
$string5 = "Variabel akan otomatis ditampilkan: $string1 dan $string3";

echo $string1;
echo "<br>";
echo $string2;
echo "<br>";
echo $string3;
echo "<br>";
echo $string4;
echo "<br>";
echo $string5;
