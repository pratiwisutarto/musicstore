-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2023 pada 14.59
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
-- Database: `musicstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admn_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admn_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Pratiwi', 'admin', 'admin', '0888992233', 'admin@gmail.com', 'Jln. Doang Jadian Kagak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`category_id`, `category_name`) VALUES
(1, 'Drum'),
(2, 'Gitar'),
(3, 'Vinyl'),
(4, 'Piano');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_created`) VALUES
(0, 4, 'Korg B1 Digital Piano', 5900000, 'stok: 5', 'produk1686644221.jpg', 1, '2023-06-13 08:17:01'),
(0, 4, 'Roland RP102 Digital Piano', 10000000, 'stok: 5', 'produk1686644278.jpg', 1, '2023-06-13 08:17:58'),
(0, 1, 'Yamaha Drum Gloss Finish', 50000000, 'stok: 5', 'produk1686644360.jpg', 1, '2023-06-13 08:19:21'),
(0, 1, 'pearl DRUMKIT TGC625C', 40000000, 'stok: 5', 'produk1686644414.jpg', 1, '2023-06-13 08:20:14'),
(0, 2, 'Fender Electric Guitar', 12599160, 'stok: 10', 'produk1686644453.jpg', 1, '2023-06-13 08:20:53'),
(0, 2, 'Yamaha Acoustic FG 820', 3376000, 'stok: 10', 'produk1686644484.jpg', 1, '2023-06-13 08:21:24'),
(0, 3, 'Taylor Swift Midnight Vinyl', 400000, 'stok: 20', 'produk1686644562.jpg', 1, '2023-06-13 08:22:42'),
(0, 3, 'Niall Horan The Show Vinyl', 400000, 'stok: 20', 'produk1686644620.jpg', 1, '2023-06-13 08:23:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
