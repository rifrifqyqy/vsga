<?php
include 'configwisata.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$endpoint = isset($_GET['endpoint']) ? $_GET['endpoint'] : '';

// Inisialisasi respon
$response = [
    'status' => 'error',
    'data_pesanan' => null,
    'message' => 'Invalid endpoint'
];

// Handle endpoint
if ($endpoint === 'daftarpemesanan') {
    $sql = "SELECT * FROM tb_pemesanan";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $data_wisata = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data_wisata[] = $row;
        }
        $response['status'] = 'success';
        $response['data_pesanan'] = $data_wisata;
        $response['message'] = 'Data retrieved successfully';
    } else {
        $response['message'] = 'No data found';
    }
}

echo json_encode($response);
