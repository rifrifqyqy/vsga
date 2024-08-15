<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Makanan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Form Pemesanan Makanan</h1>
        <form method="POST">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Nama Makanan</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nasi Goreng</td>
                        <td>Rp10.000</td>
                        <td><input type="number" class="form-control" name="jumlah_nasgor" value="0" min="0"></td>
                    </tr>
                    <tr>
                        <td>Ayam Goreng</td>
                        <td>Rp12.000</td>
                        <td><input type="number" class="form-control" name="jumlah_ayam" value="0" min="0"></td>
                    </tr>
                    <tr>
                        <td>Es Teh</td>
                        <td>Rp2.000</td>
                        <td><input type="number" class="form-control" name="jumlah_esteh" value="0" min="0"></td>
                    </tr>
                    <tr>
                        <td>Kopi</td>
                        <td>Rp3.000</td>
                        <td><input type="number" class="form-control" name="jumlah_kopi" value="0" min="0"></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary btn-block" name="hitung_total">Hitung Total</button>
        </form>

        <?php
        if (isset($_POST['hitung_total'])) {
            // Harga satuan untuk setiap item
            $harga_nasgor = 10000;
            $harga_ayam = 12000;
            $harga_esteh = 2000;
            $harga_kopi = 3000;

            // Mengambil jumlah pesanan dari input form
            $jumlah_nasgor = intval($_POST['jumlah_nasgor']);
            $jumlah_ayam = intval($_POST['jumlah_ayam']);
            $jumlah_esteh = intval($_POST['jumlah_esteh']);
            $jumlah_kopi = intval($_POST['jumlah_kopi']);

            // Menghitung total harga pesanan
            $total_nasgor = $jumlah_nasgor * $harga_nasgor;
            $total_ayam = $jumlah_ayam * $harga_ayam;
            $total_esteh = $jumlah_esteh * $harga_esteh;
            $total_kopi = $jumlah_kopi * $harga_kopi;

            $total_pesanan = $total_nasgor + $total_ayam + $total_esteh + $total_kopi;

            // Menampilkan total harga pesanan
            echo "<div class='alert alert-success mt-4 text-center'>";
            echo "<h4>Total Pesanan: Rp" . number_format($total_pesanan, 0, ',', '.') . "</h4>";
            echo "</div>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="./js/main.js"></script>
    <script></script>
</body>

</html>