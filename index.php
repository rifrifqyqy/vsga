<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php';
$data_wisata = query("SELECT * FROM paket_wisata");
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JWD</title>
  <link href="./css/home.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>

<body>
  <main class="container">
    <div>
      <h1>Form Pemesanan</h1>
      <form action="" method="POST">
        <label for="Nama">Nama Pemesan</label>
        <input type="text" name="namapemesan" />
        <label for="Nohp">Nomor HP</label>
        <input type="text" name="nohp" />
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
      $namapemesan = $_POST['namapemesan'];
      $nohp = $_POST['nohp'];
      echo "Resume Pemesanan <br>";
      echo "Nama Pemesan: " . $namapemesan . "<br>";
      echo "Nomor HP: " . $nohp . "<br>";
    }
    ?>
    <div class="container">
      <h1>Daftar Tempat Wisata</h1>
      <?php if (!empty($data_wisata)) : ?>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Tempat</th>
              <th>Deskripsi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data_wisata as $wisata) : ?>
              <tr>
                <td><?php echo $wisata['id']; ?></td>
                <td><?php echo $wisata['paket_wisata']; ?></td>
                <td><?php echo $wisata['deskripsi']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php else : ?>
        <p>Tidak ada data ditemukan.</p>
      <?php endif; ?>
      <?php
      $i;
      $nama = "asep";
      $umur = 19;
      $tinggi_cm;
      $Status_menikah;

      var_dump($nama);
      ?>
    </div>
  </main>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>