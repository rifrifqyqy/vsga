<?php
function hitungDiskon($totalBelanja)
{
    if ($totalBelanja >= 100000) {
        return 0.10;
    } elseif ($totalBelanja >= 50000) {
        return 0.05;
    } else {
        return 0.00;
    }
}

function hitungTotalBayar($totalBelanja)
{
    $diskon = hitungDiskon($totalBelanja);
    $jumlahDiskon = $totalBelanja * $diskon;
    $totalBayar = $totalBelanja - $jumlahDiskon;

    echo "Total Belanja: Rp. " . number_format($totalBelanja) . "<br>";
    echo "Diskon: " . ($diskon * 100) . "%<br>";
    echo "Jumlah Diskon: Rp. " . number_format($jumlahDiskon) . "<br>";
    echo "Total yang harus dibayar: Rp. " . number_format($totalBayar) . "<br>";
}

$totalBelanjaSaya = 50000;
hitungTotalBayar($totalBelanjaSaya);
