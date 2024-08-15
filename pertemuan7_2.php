<?php
// Nama program: program switch case dan else if
//  penulis: Rifqy Hamdani | versi: 1.0.0
// deskripsi: program untuk program switch case dan else if
$nilai_php = 85;
if ($nilai_php >= 90) {
    echo "Nilai anda A";
} elseif ($nilai_php >= 80) {
    echo "Nilai anda B";
} elseif ($nilai_php >= 70) {
    echo "Nilai anda C";
} else {
    echo "Nilai anda D";
}

echo "<br>";
$plat_nomor = strtoupper("aB");
switch ($plat_nomor) {
    case "AX":
    case "AB":
        echo "Yogyakarta";
        break;
    case "AD":
        echo "Surakarta";
        break;
    case "BX":
    case "BE":
        echo "Lampung";
        break;
    case  "B":
        echo "Jakarta";
        break;
    default:
        echo "Plat kendaraan tidak tersedia";
        break;
}
?>
<!-- dengan javascript -->
<script>
    let nilai_js = 85;
    document.write("<div class='mt-3'/>")
    if (nilai_js >= 90) {
        document.write("Nilai anda A");
    } else if (nilai_js >= 80) {
        document.write("Nilai anda B");
    } else if (nilai_js >= 70) {
        document.write("Nilai anda C");
    } else {
        document.write("Nilai anda D");
    }
</script>