<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://localhost:3000'); //domain frontend //domain frontend
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Include konfigurasi database
include 'configwisata.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari POST request
    $data = json_decode(file_get_contents("php://input"), true);
    $nama = $data['nama'];
    $tanggalMulai = $data['tanggalMulai'];
    $tanggalSelesai = $data['tanggalSelesai'];
    $jumlahPeserta = $data['jumlahPeserta'];
    $noPonsel = $data['noponsel'];
    $emailUser = $data['emailuser'];
    $paket = $data['paket']; // Menyimpan array paket sebagai JSON string
    $totalDays = $data['totalDays'];
    $totalBill = $data['totalBill'];
    $hargaPaket = $data['hargaPaket'];

    // SQL query untuk menyimpan data
    $query = "INSERT INTO tb_pemesanan (nama, tanggal_mulai, tanggal_selesai, jumlah_peserta, no_ponsel, email, paket, total_hari, total_harga, harga_paket) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Menyiapkan statement
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssiissiii", $nama, $tanggalMulai, $tanggalSelesai, $jumlahPeserta, $noPonsel, $emailUser, $paket, $totalDays, $totalBill, $hargaPaket);

    // Eksekusi query dan cek hasil
    if ($stmt->execute()) {
        echo json_encode(["message" => "Data berhasil disimpan"]);
    } else {
        echo json_encode(["error" => "Gagal menyimpan data: " . $stmt->error]);
    }

    // Menutup statement
    $stmt->close();
} else {
    echo json_encode(["error" => "Invalid request method"]);
}

// Menutup koneksi database
$conn->close();
