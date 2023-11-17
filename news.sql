-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2023 pada 06.42
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_uts_backend`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `published_at` datetime NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `author`, `description`, `content`, `url`, `url_image`, `published_at`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Tuyul dalam Sangkar', 'Jurnal Lisa', 'Ditemukan sebuah botol yang berisikan tuyul yang dibuang diperkarangan rumah warga', 'Seorang warga perumahan bukit waringin menemukan sebuah botol diperkarangan rumah tetangganya yyang sudah 2 tahun kosong, sebut saja warga itu mamun karena kepo mamun mengambil botol tersebut dan terkejut dengan apa yang ada didalam botol tersebut', 'http://tuyul_dalam_sangkar', 'https://img.antaranews.com/cache/1200x899/2023/11/10/IMG-20231199-WA0033_copy_1596x1196-01.jpeg.webp', '2023-11-17 02:42:00', 'Horor', '2023-11-16 19:24:27', '2023-11-16 19:24:27'),
(3, 'Hasil Survei Terbaru Pilpres 2024: Anies Vs Prabowo Vs Ganjar', 'Lalisa', 'Jaringan Survei Pemuda Pelajar (JSPP) bersama Ragaplasma Research merilis hasil survei elektabilitas Pasangan Calon Presiden dan Wakil Presiden menjelang Pemilu 2024 mendatang.', 'Dalam keterangannya, JSPP mencatat tingkat elektabilitas Prabowo-Gibran mencapai 48 persen. Sementara 2 pesaingnya, yaitu Anies Baswedan-Muhaimin Iskandar mendapat elektabilitas 26 persen dan Ganjar Pranowo-Mahfud Md 15 persen.', 'https://www.cnbcindonesia.com', 'https://akcdn.detik.net.id/visual/2023/08/14/infografis-koalisi-terkini-partai-pendukung-capres-2024_169.jpeg?w=715&q=90', '2023-11-19 00:00:00', 'politik', '2023-11-16 19:33:49', '2023-11-16 20:07:00'),
(4, 'PLTS Terapung Cirata Sukses', 'Firda Dwi Muliawati', 'Indonesia baru saja membangun PLTS Terapung Cirata dan proyek tersebut berhasil', 'Kementerian Energi dan Sumber Daya Mineral (ESDM) mengungkapkan bahwa saat ini pemerintah akan melelang dua proyek Pembangkit Listrik Tenaga Surya (PLTS) terapung lagi setelah sukses meresmikan PLTS Terapung Cirata berkapasitas 192 Mega Watt peak (MWp).', 'https://www.cnbcindonesia.com/news/20231110113125-4-488006/plts-terapung-cirata-sukses-ri-bakal-lelang-2-proyek-lagi', 'https://akcdn.detik.net.id/visual/2023/11/09/plts-cirata-dok-pln-5_169.jpeg?w=715&q=90', '2023-11-10 11:15:00', 'minerba', '2023-11-16 22:40:06', '2023-11-16 22:40:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
