<?php
include 'config.php';
$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($conn, "SELECT * from db_mhs where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);
$jurusan = array(
    'TEKNIK INFORMATIKA',
    'TEKNIK MESIN',
    'TEKNIK KIMIA'
);
function active_radio_button($value, $input)
{
    // apabila value dari radio dama dengan yang di input
    $result = $value == $input ? 'checked' : '';
    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Update Data Mahasiswa</h2>
        <form action="method_update.php" method="post">
            <input type="hidden" name="id_mhs" value="<?= $row['id_mhs'] ?>" />

            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo  $row['nim']; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo  $row['nama']; ?>">
                </div>
            </div>

            <fieldset class="mb-3 row">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="laki" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?> />
                        <label class="form-check-label" for="laki">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?> />
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </fieldset>

            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <select class="form-select" id="jurusan" name="jurusan">
                        <?php
                        foreach ($jurusan as $j) {
                            echo "<option value='$j'" . ($j == $row['jurusan'] ? "selected" : "") . ">$j</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo  $row['alamat']; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="crud14.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </form>
    </div>

    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>