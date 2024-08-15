-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2024 pada 05.10
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_mhs`
--

CREATE TABLE `db_mhs` (
  `nim` varchar(13) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_mhs`
--

INSERT INTO `db_mhs` (`nim`, `id_mhs`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`) VALUES
('202110715092', 1, 'Rifqy Hamdani', 'L', 'TEKNIK INFORMATIKA', 'Setu Avenue East Java, 1442'),
('202110721022', 8, 'Liluo Egamediev', 'L', 'TEKNIK INFORMATIKA', 'Bekasi'),
('202111101', 9, 'Baron Weghorst', 'L', 'TEKNIK MESIN', 'St. Joseph');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_customer` int(13) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `jumlah_peserta` int(5) NOT NULL,
  `no_ponsel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `paket` text NOT NULL,
  `harga_paket` int(12) NOT NULL,
  `total_harga` int(16) NOT NULL,
  `total_hari` int(3) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_customer`, `nama`, `tanggal_mulai`, `tanggal_selesai`, `jumlah_peserta`, `no_ponsel`, `email`, `paket`, `harga_paket`, `total_harga`, `total_hari`, `created_at`) VALUES
(202117, 'Liluo Egamediev', '2024-08-09', '2024-08-13', 2, '89828282', 'leoega22@gmail.com', 'Transportasi, Makanan, Penginapan', 2700000, 21600000, 4, '2024-08-10 23:09:40'),
(202118, 'Lilia Egamedieva', '2024-08-19', '2024-08-20', 15, '8128828883', 'liliaa.egae@gmail.com', 'Penginapan, Transportasi', 2200000, 33000000, 1, '2024-08-10 23:09:40'),
(202119, 'Baron Weghorst Smith Jensey', '2024-08-11', '2024-08-12', 2, '87877721', 'bbbaronweghorst@gmail.com', 'Penginapan', 1000000, 2000000, 1, '2024-08-10 23:09:40'),
(202120, 'Kristoph Gavin', '2024-08-28', '2024-08-29', 2, '99299221222', 'gavkristroph.personal@gmail.com', 'Penginapan', 1000000, 2000000, 1, '2024-08-10 23:09:40'),
(202121, 'Komandan Dilah ODM', '2024-08-20', '2024-08-21', 15, '8989882122', 'komandan.dilah@gmail.com', 'Transportasi, Penginapan', 2200000, 33000000, 1, '2024-08-11 11:54:00'),
(202122, 'Mayene', '2024-08-12', '2024-08-13', 2, '8988671998', 'aaaaaakumau.party@gmail.com', 'Transportasi, Penginapan, Makanan', 2700000, 5400000, 1, '2024-08-11 19:42:25'),
(202125, 'Hutao ', '2024-08-13', '2024-08-15', 2, '9888122288', 'htwvaporize@gmail.com', 'Transportasi, Penginapan', 800000, 3200000, 2, '2024-08-13 12:29:14'),
(202126, 'Furina', '2024-08-21', '2024-08-23', 1, '898797897', 'furfruina@gmail.com', 'Penginapan, Transportasi', 800000, 1600000, 2, '2024-08-13 12:30:08'),
(202127, 'Zongli', '2024-08-13', '2024-08-23', 1, '88898881212', 'zongli@gmail.com', 'Penginapan', 500000, 5000000, 10, '2024-08-13 12:31:57'),
(202136, 'Irwin', '2024-08-15', '2024-08-17', 1, '212121212', 'afdesd@gmail', 'Penginapan', 500000, 1000000, 2, '2024-08-13 12:54:40'),
(202138, 'Nyonge Geming', '2024-08-13', '2024-08-15', 2, '9888721276', 'nyonge@gmail.com', 'Penginapan, Transportasi', 800000, 3200000, 2, '2024-08-13 12:57:01'),
(202139, 'Eric Thoriq', '2024-08-13', '2024-08-15', 2, '988122787', 'ericcantoona@gmail.com', 'Transportasi', 300000, 1200000, 2, '2024-08-14 10:40:56'),
(202140, 'Girla Fradish', '2024-08-14', '2024-08-16', 2, '89888827768', 'girlif22@gmail.com', 'Transportasi, Penginapan', 800000, 3200000, 2, '2024-08-14 18:43:01'),
(202141, 'Girla Fradish', '2024-08-14', '2024-08-16', 2, '89888827768', 'girlif22@gmail.com', 'Transportasi, Penginapan', 800000, 3200000, 2, '2024-08-14 18:43:04'),
(202142, 'Girla Fradish', '2024-08-14', '2024-08-16', 2, '89888827768', 'girlif22@gmail.com', 'Transportasi, Penginapan', 800000, 3200000, 2, '2024-08-14 18:45:48'),
(202143, 'asdasdasd', '2024-08-14', '2024-08-15', 2, '3124132', 'sae@adf', 'Transportasi', 300000, 600000, 1, '2024-08-14 18:46:18'),
(202144, 'asdasdasd', '2024-08-14', '2024-08-15', 2, '3124132', 'sae@adf', 'Transportasi', 300000, 600000, 1, '2024-08-14 18:49:11'),
(202145, 'asdasdasd', '2024-08-14', '2024-08-15', 2, '3124132', 'sae@adf', 'Transportasi', 300000, 600000, 1, '2024-08-14 18:49:12'),
(202146, 'girli', '2024-08-14', '2024-08-15', 1, '2121', 'afdsfda@dfsdf', 'Makanan', 200000, 200000, 1, '2024-08-14 18:49:47'),
(202147, 'girli', '2024-08-14', '2024-08-15', 1, '2121', 'afdsfda@dfsdf', 'Makanan', 200000, 200000, 1, '2024-08-14 18:49:50'),
(202148, 'girli', '2024-08-14', '2024-08-15', 1, '2121', 'afdsfda@dfsdf', 'Makanan', 200000, 200000, 1, '2024-08-14 18:50:02'),
(202149, 'girli', '2024-08-14', '2024-08-15', 1, '2121', 'afdsfda@dfsdf', 'Makanan', 200000, 200000, 1, '2024-08-14 18:50:30'),
(202150, 'qweqwe', '2024-08-14', '2024-08-15', 2, '1212', 'dasda@asfads', 'Transportasi, Penginapan', 800000, 1600000, 1, '2024-08-14 18:51:41'),
(202151, 'asdasda', '2024-08-15', '2024-08-15', 1, '1212', 'asdas@dd', 'Makanan', 500000, 500000, 1, '2024-08-14 18:54:02'),
(202152, 'asdasdasd', '2024-08-14', '2024-08-16', 1, '321', 'qweq@afsdsd', '', 0, 0, 2, '2024-08-14 18:55:32'),
(202153, 'asdasdasd', '2024-08-14', '2024-08-16', 1, '321', 'qweq@afsdsd', '', 0, 0, 2, '2024-08-14 18:55:39'),
(202154, 'asdasdasd', '2024-08-14', '2024-08-15', 1, '212', 'asdas@sad', '', 0, 0, 1, '2024-08-14 18:58:14'),
(202155, 'asdasdasd', '2024-08-07', '2024-08-15', 1, '1212', 'dsaad@sda', '', 0, 0, 8, '2024-08-14 19:05:18'),
(202156, 'asdasdasd', '2024-08-07', '2024-08-15', 1, '1212', 'dsaad@sda', '', 0, 0, 8, '2024-08-14 19:05:27'),
(202157, 'asdasdas', '2024-08-14', '2024-08-15', 1, '12121', 'dsa@asdas', 'Transportasi', 1200000, 1200000, 1, '2024-08-14 19:07:33'),
(202158, 'asdasdas', '2024-08-14', '2024-08-15', 1, '12121', 'dsa@asdas', 'Transportasi', 1200000, 1200000, 1, '2024-08-14 19:08:30'),
(202159, 'mimikri', '2024-08-14', '2024-08-15', 2, '3124132', 'sae@adf', 'Transportasi', 300000, 600000, 1, '2024-08-14 19:10:22'),
(202160, 'RIfqy Hamdani', '2024-08-14', '2024-08-16', 1, '89877782166', 'rifqyh22@gmal.com', 'Transportasi, Penginapan, Makanan', 1000000, 2000000, 2, '2024-08-15 02:46:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_mhs`
--
ALTER TABLE `db_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_customer`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_mhs`
--
ALTER TABLE `db_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_customer` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
