<?php
$nilai = 105;
function validasiNilai($nilai)
{
    if ($nilai > 100) {
        return "Nilai tidak valid. Nilai maksimal adalah 100.";
    } else {
        return null;
    }
}

$valdi = validasiNilai($nilai);

if ($valdi) {
    echo $valdi;
} else {
    if ($nilai >= 90) {
        echo "Nilai Anda A $nilai, Anda LULUS";
    } elseif ($nilai >= 80) {
        echo "Nilai Anda B $nilai, Anda LULUS";
    } elseif ($nilai >= 70) {
        echo "Nilai Anda C $nilai, Anda LULUS";
    } else {
        echo "Nilai Anda D $nilai, Anda GAGAL";
    }
}
?>

<script>
    // const nilai_js = 105;

    // const validationNilai = (nilai_js) => {
    //     if (nilai_js > 100) {
    //         return "Nilai tidak valid. Nilai maksimal adalah 100.";
    //     } else {
    //         return null;
    //     }
    // }

    // const valdi = validationNilai(nilai_js);
    // if (valdi) {
    //     console.log(valdi);
    // } else {
    //     if (nilai_js >= 90) {
    //         console.log("Nilai Anda A");
    //     } else if (nilai_js >= 80) {
    //         console.log("Nilai Anda B");
    //     } else if (nilai_js >= 70) {
    //         console.log("Nilai Anda C");
    //     } else {
    //         console.log("Nilai Anda D");
    //     }
    // }



    
</script>