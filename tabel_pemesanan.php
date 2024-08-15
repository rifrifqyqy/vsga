<?php
include 'configwisata.php';
$customer = mysqli_query($conn, "SELECT * from tb_pemesanan");
$jumlahData = mysqli_num_rows($customer);
$no = 1;

// buatkan fungsi untuk menjumlahkan semua total_harga dari semua data
function totalHarga($data)
{
    $total = 0;
    while ($row = mysqli_fetch_assoc($data)) {
        $total += $row['total_harga'];
    }
    return $total;
}


// buat fungsi untuk menghitung semua total paket dipesan, berarti  paket diuabh ke bentuk json dlu
// Simpan data ke dalam array
$customerData = [];
while ($row = mysqli_fetch_assoc($customer)) {
    $customerData[] = $row;
}

function totalPaket($data)
{
    $total = 0;
    foreach ($data as $row) {
        $total += count(explode(', ', $row['paket']));
    }
    return $total;
}


// buatkan fungsi untuk merubah harga ke format rupiah
function rupiah($angka)
{
    $rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $rupiah;
}

// fungsi format tanggal
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

// fungsi format time created_at
function formatCreatedAt($tanggal)
{
    $bulan = [
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];
    $tanggalArray = explode(' ', $tanggal);
    $tanggalPart = explode('-', $tanggalArray[0]);

    $tanggalIndo = $tanggalPart[2] . ' ' . $bulan[(int)$tanggalPart[1]] . ' ' . $tanggalPart[0];

    // Jika ingin menambahkan waktu
    if (isset($tanggalArray[1])) {
        $tanggalIndo .= ' ' . $tanggalArray[1];
    }

    return $tanggalIndo;
}

// re-request query untuk permasalahan limit consume
$customer = mysqli_query($conn, "SELECT * from tb_pemesanan");
// kumpulan perhitungan untuk header dashboard
$totalHargaSemuaData = totalHarga($customer);
$totalPaketDipesan = totalPaket($customerData);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/customer.css">

</head>

<body>
    <section class="container-fluid mt-5 px-sm-4 px-lg-5 px-3 header-data">
        <div class="card-data">
            <h1><?= $jumlahData ?></h1>
            <p>Total Pesanan</p>
            <div class="icon-data rounded-2" id="total-pesanan">
                <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.375 9.79175H19.5833C15.2571 9.79175 11.75 13.2989 11.75 17.6251V29.3751C11.75 33.7013 15.2571 37.2084 19.5833 37.2084H29.375C33.7012 37.2084 37.2083 33.7013 37.2083 29.3751V17.6251C37.2083 13.2989 33.7012 9.79175 29.375 9.79175Z" stroke="#A22900" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M30.3542 18.375C30.7685 18.375 31.1042 18.0392 31.1042 17.625C31.1042 17.2108 30.7685 16.875 30.3542 16.875V18.375ZM18.6042 16.875C18.19 16.875 17.8542 17.2108 17.8542 17.625C17.8542 18.0392 18.19 18.375 18.6042 18.375V16.875ZM30.3542 24.25C30.7685 24.25 31.1042 23.9142 31.1042 23.5C31.1042 23.0858 30.7685 22.75 30.3542 22.75V24.25ZM18.6042 22.75C18.19 22.75 17.8542 23.0858 17.8542 23.5C17.8542 23.9142 18.19 24.25 18.6042 24.25V22.75ZM24.4792 30.125C24.8935 30.125 25.2292 29.7892 25.2292 29.375C25.2292 28.9608 24.8935 28.625 24.4792 28.625V30.125ZM18.6042 28.625C18.19 28.625 17.8542 28.9608 17.8542 29.375C17.8542 29.7892 18.19 30.125 18.6042 30.125V28.625ZM30.3542 16.875H18.6042V18.375H30.3542V16.875ZM30.3542 22.75H18.6042V24.25H30.3542V22.75ZM24.4792 28.625H18.6042V30.125H24.4792V28.625Z" fill="#A22900" />
                </svg>


            </div>
        </div>
        <div class="card-data">
            <h1><?= $totalPaketDipesan ?></h1>
            <p>Total Paket Dipesan</p>
            <div class="icon-data rounded-2" id="total-paket">
                <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.79175 18.9313V14.3605C9.79175 11.8373 11.8373 9.79175 14.3605 9.79175H32.6377C33.8497 9.79123 35.0123 10.2724 35.8696 11.1292C36.7268 11.9861 37.2084 13.1485 37.2084 14.3605V18.9313H9.79175Z" stroke="#399000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.5417 18.9313C10.5417 18.5171 10.206 18.1813 9.79175 18.1813C9.37753 18.1813 9.04175 18.5171 9.04175 18.9313H10.5417ZM37.9584 30.3542C37.9584 29.94 37.6226 29.6042 37.2084 29.6042C36.7942 29.6042 36.4584 29.94 36.4584 30.3542H37.9584ZM37.9584 18.9313C37.9584 18.5171 37.6226 18.1813 37.2084 18.1813C36.7942 18.1813 36.4584 18.5171 36.4584 18.9313H37.9584ZM36.4584 30.3542C36.4584 30.7685 36.7942 31.1042 37.2084 31.1042C37.6226 31.1042 37.9584 30.7685 37.9584 30.3542H36.4584ZM37.2084 31.1042C37.6226 31.1042 37.9584 30.7685 37.9584 30.3542C37.9584 29.94 37.6226 29.6042 37.2084 29.6042V31.1042ZM23.5001 29.6042C23.0859 29.6042 22.7501 29.94 22.7501 30.3542C22.7501 30.7685 23.0859 31.1042 23.5001 31.1042V29.6042ZM22.7501 18.9313C22.7501 19.3455 23.0859 19.6813 23.5001 19.6813C23.9143 19.6813 24.2501 19.3455 24.2501 18.9313H22.7501ZM24.2501 9.79175C24.2501 9.37753 23.9143 9.04175 23.5001 9.04175C23.0859 9.04175 22.7501 9.37753 22.7501 9.79175H24.2501ZM9.04175 18.9313V30.3542H10.5417V18.9313H9.04175ZM9.04175 30.3542C9.04175 34.5539 12.4462 37.9584 16.6459 37.9584V36.4584C13.2747 36.4584 10.5417 33.7255 10.5417 30.3542H9.04175ZM16.6459 37.9584H30.3542V36.4584H16.6459V37.9584ZM30.3542 37.9584C34.5539 37.9584 37.9584 34.5539 37.9584 30.3542H36.4584C36.4584 33.7255 33.7255 36.4584 30.3542 36.4584V37.9584ZM36.4584 18.9313V30.3542H37.9584V18.9313H36.4584ZM37.2084 29.6042H23.5001V31.1042H37.2084V29.6042ZM24.2501 18.9313V9.79175H22.7501V18.9313H24.2501Z" fill="#399000" />
                </svg>

            </div>
        </div>
        <div class="card-data">
            <h1><?= rupiah($totalHargaSemuaData) ?></h1>
            <p>Total Income</p>
            <div class="icon-data rounded-2" id="total-income">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M37.5001 17.7376C37.7605 31.9688 29.2542 38.023 24.4313 39.4501C24.1118 39.5449 23.7717 39.5449 23.4522 39.4501C18.7084 38.0459 10.4459 32.1709 10.4167 18.4459C10.4451 17.2583 11.1138 16.1791 12.1647 15.6251C19.5063 11.4876 23.0376 10.4167 23.9355 10.4167C24.8334 10.4167 28.6438 11.5584 36.473 16.0417C37.0894 16.3875 37.4792 17.0312 37.5001 17.7376Z" stroke="#ff9900" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M23.9585 30.2022C23.5442 30.2022 23.2085 30.538 23.2085 30.9522C23.2085 31.3664 23.5442 31.7022 23.9585 31.7022V30.2022ZM21.6147 23.3334L22.1544 22.8127C22.1284 22.7856 22.1003 22.7606 22.0705 22.7378L21.6147 23.3334ZM20.8335 21.6667L21.5828 21.6974C21.5833 21.6872 21.5835 21.677 21.5835 21.6667L20.8335 21.6667ZM23.9585 19.798C24.3727 19.798 24.7085 19.4622 24.7085 19.048C24.7085 18.6338 24.3727 18.298 23.9585 18.298V19.798ZM23.9585 31.7022C24.3727 31.7022 24.7085 31.3664 24.7085 30.9522C24.7085 30.538 24.3727 30.2022 23.9585 30.2022V31.7022ZM21.5835 26.9792C21.5835 26.565 21.2477 26.2292 20.8335 26.2292C20.4193 26.2292 20.0835 26.565 20.0835 26.9792H21.5835ZM24.7085 30.9522C24.7085 30.538 24.3727 30.2022 23.9585 30.2022C23.5442 30.2022 23.2085 30.538 23.2085 30.9522H24.7085ZM23.2085 33.3334C23.2085 33.7476 23.5442 34.0834 23.9585 34.0834C24.3727 34.0834 24.7085 33.7476 24.7085 33.3334H23.2085ZM23.9585 18.298C23.5443 18.298 23.2085 18.6338 23.2085 19.048C23.2085 19.4622 23.5443 19.798 23.9585 19.798V18.298ZM26.3335 22.6855C26.3335 23.0997 26.6692 23.4355 27.0835 23.4355C27.4977 23.4355 27.8335 23.0997 27.8335 22.6855H26.3335ZM23.2085 19.048C23.2085 19.4622 23.5442 19.798 23.9585 19.798C24.3727 19.798 24.7085 19.4622 24.7085 19.048H23.2085ZM24.7085 16.6667C24.7085 16.2525 24.3727 15.9167 23.9585 15.9167C23.5442 15.9167 23.2085 16.2525 23.2085 16.6667H24.7085ZM23.9585 31.7022C24.5781 31.7022 25.5045 31.5482 26.3029 31.06C27.1405 30.5477 27.8335 29.6605 27.8335 28.3022H26.3335C26.3335 29.0584 25.9847 29.4962 25.5203 29.7803C25.0166 30.0884 24.3805 30.2022 23.9585 30.2022V31.7022ZM27.8335 28.3022C27.8335 27.4494 27.5869 26.7736 27.1409 26.2241C26.7162 25.7007 26.1455 25.3372 25.5898 25.0312C24.4242 24.3891 23.2228 23.92 22.1544 22.8127L21.075 23.8542C22.3503 25.176 23.8834 25.8037 24.8662 26.345C25.3847 26.6307 25.7418 26.8804 25.9762 27.1693C26.1894 27.432 26.3335 27.7675 26.3335 28.3022H27.8335ZM22.0705 22.7378C21.7482 22.4912 21.5662 22.103 21.5828 21.6974L20.0841 21.6361C20.0475 22.5298 20.4485 23.3854 21.1589 23.929L22.0705 22.7378ZM21.5835 21.6667C21.5835 21.147 21.691 20.8071 21.8231 20.5808C21.9537 20.3569 22.1341 20.1995 22.3543 20.0838C22.8272 19.8352 23.4411 19.798 23.9585 19.798V18.298C23.4342 18.298 22.4855 18.3202 21.6564 18.756C21.2255 18.9825 20.82 19.3234 20.5274 19.825C20.2363 20.324 20.0835 20.9365 20.0835 21.6667H21.5835ZM23.9585 30.2022C23.6004 30.2022 23.0073 30.0582 22.5117 29.6046C22.0388 29.1718 21.5835 28.3916 21.5835 26.9792H20.0835C20.0835 28.7461 20.6698 29.9523 21.499 30.7112C22.3055 31.4492 23.2748 31.7022 23.9585 31.7022V30.2022ZM23.2085 30.9522V33.3334H24.7085V30.9522H23.2085ZM23.9585 19.798C24.3908 19.798 24.9804 19.8964 25.448 20.2641C25.881 20.6047 26.3335 21.2741 26.3335 22.6855H27.8335C27.8335 20.9177 27.2442 19.7684 26.3752 19.085C25.5407 18.4287 24.5678 18.298 23.9585 18.298V19.798ZM24.7085 19.048V16.6667H23.2085V19.048H24.7085Z" fill="#ff9900" />
                </svg>
            </div>
        </div>
    </section>
    <section class="container-fluid mt-5 px-sm-4 px-lg-5 px-3 header">

        <div class="title">
            <h2>Tabel Pemesanan</h2>
            <p>Daftar pemesanan ticket wisata</p>
        </div>
        <div>
            <!-- search bar -->
            <div class="search-container rounded-pill">
                <input type="text" class="search-input" placeholder="Cari data pemesanan...">
                <button class="search-button">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5303 14.4697C15.2374 14.1768 14.7626 14.1768 14.4697 14.4697C14.1768 14.7626 14.1768 15.2374 14.4697 15.5303L15.5303 14.4697ZM20.4697 21.5303C20.7626 21.8232 21.2374 21.8232 21.5303 21.5303C21.8232 21.2374 21.8232 20.7626 21.5303 20.4697L20.4697 21.5303ZM10 16.25C6.54822 16.25 3.75 13.4518 3.75 10H2.25C2.25 14.2802 5.71979 17.75 10 17.75V16.25ZM16.25 10C16.25 13.4518 13.4518 16.25 10 16.25V17.75C14.2802 17.75 17.75 14.2802 17.75 10H16.25ZM10 3.75C13.4518 3.75 16.25 6.54822 16.25 10H17.75C17.75 5.71979 14.2802 2.25 10 2.25V3.75ZM10 2.25C5.71979 2.25 2.25 5.71979 2.25 10H3.75C3.75 6.54822 6.54822 3.75 10 3.75V2.25ZM14.4697 15.5303L20.4697 21.5303L21.5303 20.4697L15.5303 14.4697L14.4697 15.5303Z" fill="#fff" />
                    </svg>

                </button>
            </div>
        </div>
    </section>

    <main class="container-fluid mt-4 px-sm-4 px-lg-5 px-3">

        <p class="mb-2">Total pesananan <?= $jumlahData ?> data</p>
        <div class="row">
            <?php foreach ($customer as $row) : ?>
                <?php $paketArray = explode(', ', $row['paket']); ?>

                <section class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <section class="card-pemesanan">
                        <div class="card-header">
                            <img src="./public/images/pfp.png" alt="" class="pfp">
                            <div class="card-title">
                                <h5 class="text-truncate name"><?= $row['nama'] ?></h5>
                                <p class="text-truncate id-pelanggan">ID <?= $row['id_customer'] ?></p>
                                <div class="label-wrapper mt-1 d-flex flex-wrap gap-2">

                                    <p class="label rounded-pill"><?= count($paketArray) ?> Paket</p>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h3 class="price my-auto"><?= rupiah($row['total_harga']) ?></h3>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-lihat" data-bs-toggle="modal" data-bs-target="#modalPesanan<?= $row['id_customer'] ?>">
                                Lihat
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalPesanan<?= $row['id_customer'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body d-flex flex-column gap-2">
                                            <main class="">
                                                <aside>
                                                    <img src="./public/images/pfp.png" alt="" class="img-modal rounded-circle">
                                                    <p class="id-label rounded-pill">ID Pesanan <?= $row['id_customer'] ?></p>
                                                    <div class="d-flex flex-column align-items-center">
                                                        <h5 class="text-center"><?= $row['nama'] ?></h5>
                                                        <p><?= $row['email'] ?></p>
                                                    </div>
                                                    <section class="d-flex gap-4">
                                                        <div class="d-flex flex-column align-items-center">
                                                            <h3><?= $row['jumlah_peserta'] ?></h3>
                                                            <p class="person-package">Persons</p>
                                                        </div>
                                                        <div class="divide"></div>
                                                        <div class="d-flex flex-column align-items-center">
                                                            <h3><?= count($paketArray) ?></h3>
                                                            <p class="person-package">Packages</p>
                                                        </div>
                                                    </section>
                                                    <div class="mt-5 total-price rounded-3"><?= rupiah($row['total_harga']) ?></div>

                                                </aside>
                                                <section class="field-section">
                                                    <article class="field-wrapper">
                                                        <div class="field">
                                                            <h5>Tanggal Mulai</h5>
                                                            <p><?= tgl_indo($row['tanggal_mulai']) ?></p>
                                                        </div>
                                                        <div class="field">
                                                            <h5>Tanggal Akhir</h5>
                                                            <p><?= tgl_indo($row['tanggal_selesai']) ?></p>
                                                        </div>
                                                    </article>
                                                    <article class="field-wrapper" id="single">
                                                        <div class="field">
                                                            <h5>Kontak</h5>
                                                            <p><?= $row['no_ponsel'] ?></p>
                                                        </div>
                                                    </article>
                                                    <article class="field-wrapper" id="single">
                                                        <div class="field">
                                                            <h5>Paket Wisata</h5>
                                                            <p><?= $row['paket'] ?></p>
                                                        </div>
                                                    </article>
                                                    <article class="field-wrapper" id="single">
                                                        <div class="field">
                                                            <h5>Harga Paket</h5>
                                                            <p><?= rupiah($row['harga_paket']) ?></p>
                                                        </div>
                                                    </article>

                                                </section>
                                            </main>

                                        </div>
                                        <div class="modal-footer border-0 d-flex justify-content-between">
                                            <a class="btn btn-delete rounded-2" href='del_pesanan.php?id_customer=<?= $row['id_customer'] ?>' onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            <?php endforeach; ?>
        </div>
    </main>



    <!-- script -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script>
        // search function for data pesanan
        document.querySelector('.search-button').addEventListener('click', function() {
            const searchQuery = document.querySelector('.search-input').value.toLowerCase();
            const customerCards = document.querySelectorAll('.col-md-6');

            customerCards.forEach(function(card) {
                const customerName = card.querySelector('.name').textContent.toLowerCase();
                const customerID = card.querySelector('.id-pelanggan').textContent.toLowerCase();

                if (customerName.includes(searchQuery) || customerID.includes(searchQuery)) {
                    card.style.display = ''; // Show the card
                } else {
                    card.style.display = 'none'; // Hide the card
                }
            });
        });
    </script>
</body>

</html>