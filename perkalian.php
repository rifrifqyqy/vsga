<?php

// Nama program: program perkalian, pembagian dan modulus
//  penulis: Rifqy Hamdani | versi: 1.0.0
// deskripsi: program untuk program perkalian, pembagian dan modulus


function perkalian($bil_1, $bil_2)
{
    $hasil = $bil_1 * $bil_2;
    return $hasil;
}

echo "5 x 10 = " . perkalian(5, 10);

function pembagian($bil_1, $bil_2)
{
    $bagi = $bil_1 / $bil_2;
    return $bagi;
}

echo "<br> 10 / 5 = " . pembagian(10, 5);


function modulus($bil_1, $bil_2)
{
    $mod = $bil_1 % $bil_2;
    return $mod;
}

echo "<br> 10 % 5 = " . modulus(10, 5);
