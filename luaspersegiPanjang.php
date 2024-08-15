<?php

// Nama program: menghitung luas persegi panjang
//  penulis: Rifqy Hamdani | versi: 1.0.0
// date: 25 Juli 2024
// deskripsi: program untuk menghitung luas persegi panjang
?>

<!DOCTYPE html>
<html>

<head>
    <title>Hitung Luas Persegi Panjang</title>
</head>

<body>

    <h2>Hitung Luas Persegi Panjang</h2>

    <form method="post" action="">
        <label for="p">Panjang (p):</label>
        <input type="number" id="p" name="p" required><br><br>

        <label for="l">Lebar (l):</label>
        <input type="number" id="l" name="l" required><br><br>

        <input type="submit" name="submit" value="Hitung Luas">
    </form>

</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $p = $_POST['p'];
    $l = $_POST['l'];

    // Function to calculate luas persegi panjang
    function hitungLuas($p, $l)
    {
        $luas = $p * $l;
        return $luas;
    }

    // display
    echo "Luas persegi panjang = " . hitungLuas($p, $l);
}
?>

