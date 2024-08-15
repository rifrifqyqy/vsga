<?php

// Nama program: menghitung luas Segitiga
// penulis: Rifqy Hamdani | versi: 1.0.0
// date: 25 Juli 2024
// deskripsi: program untuk menghitung luas Segitiga
?>


<!DOCTYPE html>
<html>

<head>
    <title>Hitung Luas Segitiga</title>
</head>

<body>

    <h2>Hitung Luas Segitiga</h2>

    <form method="post" action="">
        <label for="p">alas :</label>
        <input type="number" name="alas" required><br><br>

        <label for="l">tinggi:</label>
        <input type="number" name="tinggi" required><br><br>

        <input type="submit" name="submit" value="Hitung Luas Segitiga">
    </form>

</body>

</html>


<?php

/** 
 *@param float $alas
 *@param float $tinggi
 *@return float

 */
define("Setengah", 0.5);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    // Function to calculate luas segitiga
    function hitungLuas($alas, $tinggi)
    {
        $luas = Setengah * $alas * $tinggi;
        return $luas;
    }

    // display
    echo "Luas segitiga = " . hitungLuas($alas, $tinggi);
}
