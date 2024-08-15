<?php
// membuat array assosiatif
$colors = [
    "judul" => "Belajar PHP",
    "penulis" => "Digtal Talent",
    "view" => 128

];
echo $colors["judul"] . "<br>";
// array_push($colors, "black");
$cars = [
    "merk" => [
        "bmw",
        "honda",
        "toyota",
    ],
    "type" => [
        "sedan",
        "suv",
        "hatchback",
    ],
];
// array dua dimensi
$matriks = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
// mengakses isinya
echo $matriks[1][0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .view {
        font-size: 14px;
        color: gray;
    }
</style>

<body>
    <h1><?php echo $colors['judul'] ?></h1>
    <?php foreach ($cars['merk'] as $mobil) : ?>
        <h2><?php echo $mobil ?></h2>
    <?php endforeach; ?>

</body>

</html>