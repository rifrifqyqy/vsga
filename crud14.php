<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Data Mahasiswa</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $mahasiswa = mysqli_query($conn, "SELECT * from db_mhs");
                $no = 1;
                foreach ($mahasiswa as $row) {
                    $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-Laki';
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['nim'] . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $jenis_kelamin . "</td>
                    <td>" . $row['jurusan'] . "</td>
                    <td>" . $row['alamat'] . "</td>
                    <td>
                        <a href='update.php?id_mhs=$row[id_mhs]' class='btn btn-sm btn-warning'>Edit</a>
                        <a href='delete.php?id_mhs=$row[id_mhs]' class='btn btn-sm btn-danger' onclick='return confirm(\"Yakin ingin menghapus data ini?\");'>Delete</a>
                    </td>
                    </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- script -->
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>