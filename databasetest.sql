-- Active: 1745583296991@@127.0.0.1@3306@php_test
-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for php_login_test
CREATE DATABASE IF NOT EXISTS `php_test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `php_test`;

-- Dumping structure for table php_login_test.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `id_cart` int NOT NULL AUTO_INCREMENT,
  `id_customer` int DEFAULT NULL,
  `id_product` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_detail_product` int DEFAULT NULL,
  `id_motif_produk` int DEFAULT NULL,
  PRIMARY KEY (`id_cart`),
  KEY `id_customer` (`id_customer`),
  KEY `id_product` (`id_product`),
  KEY `id_detail_product` (`id_detail_product`),
  KEY `id_motif_produk` (`id_motif_produk`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`id_detail_product`) REFERENCES `detail_product` (`id`),
  CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`id_motif_produk`) REFERENCES `motif_produk` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.cart: ~1 rows (approximately)
INSERT INTO `cart` (`id_cart`, `id_customer`, `id_product`, `qty`, `created_at`, `updated_at`, `id_detail_product`, `id_motif_produk`) VALUES
	(48, 1, 93, 1, '2025-05-05 14:53:09', '2025-05-05 14:53:09', 1, 2);

-- Dumping structure for table php_login_test.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` text,
  `detail` varchar(30) DEFAULT NULL,
  `kode_pos` int DEFAULT NULL,
  `kata_sandi` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reset_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.customer: ~3 rows (approximately)
INSERT INTO `customer` (`id_customer`, `nama`, `email`, `no_hp`, `alamat`, `detail`, `kode_pos`, `kata_sandi`, `created_at`, `updated_at`, `reset_token`) VALUES
	(1, 'IAN roery qw', 'ianroeri@gmail.com', '+62812256211517', 'jl.Cempaka, Jatirejo 55C, RT.07/RW.21, Jatirejo, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285', 'rumah ', NULL, '$2y$10$72CihYeeod8r/qjNpZ.MAuzEiJNMCpZs2GXpqUWMmXctmpFYF/s7C', '2025-04-29 13:59:27', '2025-05-05 02:09:14', NULL),
	(2, 'l', 'elvirayolanda828@gmail.com', '81274269421', '', NULL, NULL, '$2y$10$ayP1UJpS1hEqgdyGG4X3Z.m8PDC8uvf18Hm4Lw7s.gQp1o9/koqkm', '2025-05-02 04:16:24', '2025-05-02 04:16:24', NULL),
	(3, 'Elvira', 'elvirayolanda00@gmail.com', '81274269421', '', NULL, NULL, '$2y$10$CkhpCjWsqZOQeAXuHVqOoeHpQ55UKa/ZVYqX.tCgknBxO6LBDNwzy', '2025-05-05 01:38:20', '2025-05-05 01:38:20', NULL);

-- Dumping structure for table php_login_test.detail_product
CREATE TABLE IF NOT EXISTS `detail_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_sku` varchar(20) DEFAULT NULL,
  `id_product` int DEFAULT NULL,
  `warna` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `detail_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.detail_product: ~1 rows (approximately)
INSERT INTO `detail_product` (`id`, `id_sku`, `id_product`, `warna`, `created_at`, `updated_at`) VALUES
	(1, 'SKU001', 93, 'Kuning', '2025-04-29 13:18:04', '2025-04-29 13:18:04');

-- Dumping structure for table php_login_test.jenis_pengiriman
CREATE TABLE IF NOT EXISTS `jenis_pengiriman` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `diskon` int DEFAULT '0',
  `harga` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.jenis_pengiriman: ~3 rows (approximately)
INSERT INTO `jenis_pengiriman` (`id`, `nama`, `diskon`, `harga`, `created_at`, `updated_at`) VALUES
	(1, 'Reguler', 0, 20000, '2025-05-02 00:58:50', '2025-05-02 00:58:50'),
	(2, 'Express', 10000, 40000, '2025-05-02 00:58:50', '2025-05-05 07:22:14'),
	(3, 'Same Day', 20000, 60000, '2025-05-02 00:58:50', '2025-05-05 07:22:14');

-- Dumping structure for table php_login_test.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `id_parent_kategori` int DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`),
  KEY `id_parent_kategori` (`id_parent_kategori`),
  CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_parent_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.kategori: ~4 rows (approximately)
INSERT INTO `kategori` (`id_kategori`, `id_parent_kategori`, `nama`, `created_at`, `updated_at`) VALUES
	(7, NULL, 'Living', '2025-04-28 10:32:27', '2025-04-28 10:32:27'),
	(8, NULL, 'Bedroom', '2025-04-28 10:32:27', '2025-04-28 10:32:27'),
	(9, NULL, 'Kitchen', '2025-04-28 10:32:27', '2025-04-28 10:32:27'),
	(10, NULL, 'Dinning', '2025-04-28 10:32:27', '2025-04-28 10:32:27');

-- Dumping structure for table php_login_test.motif_produk
CREATE TABLE IF NOT EXISTS `motif_produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_product` int DEFAULT NULL,
  `id_detail_product` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `motif` varchar(100) DEFAULT NULL,
  `foto_kanan` varchar(255) DEFAULT NULL,
  `foto_kiri` varchar(255) DEFAULT NULL,
  `foto_depan` varchar(255) DEFAULT NULL,
  `foto_belakang` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  KEY `id_detail_product` (`id_detail_product`),
  CONSTRAINT `motif_produk_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  CONSTRAINT `motif_produk_ibfk_2` FOREIGN KEY (`id_detail_product`) REFERENCES `detail_product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.motif_produk: ~2 rows (approximately)
INSERT INTO `motif_produk` (`id`, `id_product`, `id_detail_product`, `qty`, `motif`, `foto_kanan`, `foto_kiri`, `foto_depan`, `foto_belakang`, `created_at`, `updated_at`) VALUES
	(1, 93, 1, 0, 'Polos', 'UT M03 2.png', 'UT M03 1.png', 'UT M01 3.png', 'UT M01 2.png', '2025-04-29 13:19:25', '2025-05-05 12:05:08'),
	(2, 93, 1, 7, 'Kurep', 'UT M03 2.png', 'UT M03 1.png', 'UT M01 3.png', 'UT M01 2.png', '2025-04-29 13:19:25', '2025-05-05 13:30:41');

-- Dumping structure for table php_login_test.pesanan
CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesanan` int NOT NULL AUTO_INCREMENT,
  `nomor_pesanan` varchar(100) DEFAULT NULL,
  `id_customer` int DEFAULT NULL,
  `id_product` int DEFAULT NULL,
  `id_detail_product` int DEFAULT NULL,
  `id_motif_produk` int DEFAULT NULL,
  `id_pricelist` int DEFAULT NULL,
  `id_promo` int DEFAULT NULL,
  `id_jenis_pengiriman` int DEFAULT NULL,
  `id_toko` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `total_harga` int DEFAULT NULL,
  `tanggal_pesanan` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT 'waiting',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `done_payment` datetime DEFAULT NULL,
  `limit_payment` datetime DEFAULT NULL,
  `status_pembayaran` varchar(50) DEFAULT NULL,
  `foto_pembayaran` varchar(100) DEFAULT NULL,
  `payment_token` varchar(100) DEFAULT NULL,
  `bank_pengirim` varchar(100) DEFAULT NULL,
  `no_rek_pengirim` varchar(50) DEFAULT NULL,
  `nama_rekening` varchar(100) DEFAULT NULL,
  `jumlah_transfer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pesanan`),
  KEY `id_customer` (`id_customer`),
  KEY `id_product` (`id_product`),
  KEY `id_pricelist` (`id_pricelist`),
  KEY `id_promo` (`id_promo`),
  KEY `fk_detail_product` (`id_detail_product`),
  KEY `fk_motif_produk` (`id_motif_produk`),
  KEY `fk_pesanan_jenis_pengiriman` (`id_jenis_pengiriman`),
  KEY `fk_pesanan_toko` (`id_toko`),
  CONSTRAINT `fk_detail_product` FOREIGN KEY (`id_detail_product`) REFERENCES `detail_product` (`id`),
  CONSTRAINT `fk_motif_produk` FOREIGN KEY (`id_motif_produk`) REFERENCES `motif_produk` (`id`),
  CONSTRAINT `fk_pesanan_jenis_pengiriman` FOREIGN KEY (`id_jenis_pengiriman`) REFERENCES `jenis_pengiriman` (`id`),
  CONSTRAINT `fk_pesanan_toko` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id`),
  CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_pricelist`) REFERENCES `pricelist` (`id_pricelist`),
  CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`id_promo`) REFERENCES `promo` (`id_promo`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.pesanan: ~33 rows (approximately)
INSERT INTO `pesanan` (`id_pesanan`, `nomor_pesanan`, `id_customer`, `id_product`, `id_detail_product`, `id_motif_produk`, `id_pricelist`, `id_promo`, `id_jenis_pengiriman`, `id_toko`, `qty`, `total_harga`, `tanggal_pesanan`, `status`, `created_at`, `updated_at`, `done_payment`, `limit_payment`, `status_pembayaran`, `foto_pembayaran`, `payment_token`, `bank_pengirim`, `no_rek_pengirim`, `nama_rekening`, `jumlah_transfer`) VALUES
	(1, NULL, 1, 93, NULL, NULL, NULL, 2, 2, NULL, 1, 19980, '2025-05-03 03:18:41', 'waiting', '2025-05-03 03:18:41', '2025-05-03 03:18:41', NULL, '2025-05-03 05:18:41', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(3, NULL, 1, 93, 1, 1, NULL, 2, 2, NULL, 4, 79920, '2025-05-03 03:57:05', 'waiting', '2025-05-03 03:57:05', '2025-05-03 03:57:05', NULL, '2025-05-03 05:57:05', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(4, NULL, 1, 93, 1, 1, NULL, 2, 1, NULL, 2, 39960, '2025-05-03 03:58:53', 'waiting', '2025-05-03 03:58:53', '2025-05-03 03:58:53', NULL, '2025-05-03 05:58:53', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(8, NULL, 1, 93, 1, 1, NULL, 2, NULL, 5, 1, 19980, '2025-05-03 04:07:33', 'waiting', '2025-05-03 04:07:33', '2025-05-03 04:07:33', NULL, '2025-05-03 06:07:33', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(9, NULL, 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 19980, '2025-05-03 04:10:05', 'waiting', '2025-05-03 04:10:05', '2025-05-03 04:10:05', NULL, '2025-05-03 06:10:05', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(10, NULL, 1, 93, 1, 1, NULL, 2, 1, NULL, 1, 19980, '2025-05-03 06:21:05', 'waiting', '2025-05-03 04:21:05', '2025-05-03 04:21:05', NULL, '2025-05-03 06:21:05', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(11, NULL, 1, 93, 1, 1, NULL, 2, 3, NULL, 1, 19980, '2025-05-03 04:30:24', 'waiting', '2025-05-03 04:30:24', '2025-05-03 04:30:24', NULL, '2025-05-03 06:30:24', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(12, NULL, 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 19980, '2025-05-03 11:44:21', 'waiting', '2025-05-03 04:44:21', '2025-05-03 04:44:21', NULL, '2025-05-03 13:44:21', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(13, NULL, 1, 93, 1, 1, NULL, 2, 1, NULL, 2, 39960, '2025-05-03 16:24:07', 'waiting', '2025-05-03 09:24:07', '2025-05-03 09:24:07', NULL, '2025-05-03 18:24:07', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(14, NULL, 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 19980, '2025-05-03 16:28:42', 'waiting', '2025-05-03 09:28:42', '2025-05-03 09:28:42', NULL, '2025-05-03 18:28:42', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(15, NULL, 1, 93, 1, 1, NULL, 2, 3, NULL, 1, 19980, '2025-05-03 16:32:40', 'waiting', '2025-05-03 09:32:40', '2025-05-03 09:32:40', NULL, '2025-05-03 18:32:40', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(16, NULL, 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 19980, '2025-05-03 16:36:37', 'waiting', '2025-05-03 09:36:37', '2025-05-03 09:36:37', NULL, '2025-05-03 18:36:37', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(17, NULL, 1, 93, 1, 1, NULL, 2, 1, NULL, 1, 19980, '2025-05-03 16:52:07', 'waiting', '2025-05-03 09:52:07', '2025-05-03 09:52:07', NULL, '2025-05-03 18:52:07', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(18, NULL, 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 19980, '2025-05-03 17:04:26', 'waiting', '2025-05-03 10:04:26', '2025-05-03 10:04:26', NULL, '2025-05-03 19:04:26', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(19, NULL, 1, 93, 1, 1, NULL, 2, 3, NULL, 3, 59940, '2025-05-05 08:57:36', 'waiting', '2025-05-05 01:57:36', '2025-05-05 01:57:36', NULL, '2025-05-05 10:57:36', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(20, NULL, 1, 93, 1, 1, NULL, 2, 1, NULL, 1, 19980, '2025-05-05 09:19:54', 'waiting', '2025-05-05 02:19:54', '2025-05-05 02:19:54', NULL, '2025-05-05 11:19:54', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(21, NULL, 1, 93, 1, 1, NULL, 2, 1, NULL, 1, 19980, '2025-05-05 11:27:41', 'waiting', '2025-05-05 04:27:41', '2025-05-05 04:27:41', NULL, '2025-05-05 13:27:41', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(22, NULL, 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 19980, '2025-05-05 11:32:21', 'waiting', '2025-05-05 04:32:21', '2025-05-05 04:32:21', NULL, '2025-05-05 13:32:21', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(23, NULL, 1, 93, 1, 1, NULL, 2, 3, NULL, 1, 19980, '2025-05-05 11:36:42', 'waiting', '2025-05-05 04:36:42', '2025-05-05 04:36:42', NULL, '2025-05-05 13:36:42', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(24, NULL, 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 19980, '2025-05-05 11:43:16', 'waiting', '2025-05-05 04:43:16', '2025-05-05 04:43:16', NULL, '2025-05-05 13:43:16', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(25, NULL, 1, 93, 1, 1, NULL, 2, 3, NULL, 1, 19980, '2025-05-05 11:49:51', 'waiting', '2025-05-05 04:49:51', '2025-05-05 04:49:51', NULL, '2025-05-05 13:49:51', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(26, NULL, 1, 93, 1, 1, NULL, 2, 3, NULL, 1, 19980, '2025-05-05 11:58:26', 'waiting', '2025-05-05 04:58:26', '2025-05-05 04:58:26', NULL, '2025-05-05 13:58:26', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(27, 'INV/20250505/2469', 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 16000, '2025-05-05 14:00:50', 'waiting', '2025-05-05 07:00:50', '2025-05-05 07:00:50', NULL, '2025-05-05 16:00:50', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(28, 'INV/20250505/4983', 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 16000, '2025-05-05 14:14:31', 'waiting', '2025-05-05 07:14:31', '2025-05-05 07:14:31', NULL, '2025-05-05 16:14:31', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(29, 'INV/20250505/1072', 1, 93, 1, 1, NULL, 2, 3, NULL, 1, 16000, '2025-05-05 14:24:34', 'waiting', '2025-05-05 07:24:34', '2025-05-05 07:24:34', NULL, '2025-05-05 16:24:34', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(30, 'INV-20250505-4544', 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 16000, '2025-05-05 14:43:33', 'waiting', '2025-05-05 07:43:33', '2025-05-05 07:43:33', NULL, '2025-05-05 16:43:33', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(31, 'INV-20250505-8012', 1, 93, 1, 1, NULL, 2, 3, NULL, 1, 16000, '2025-05-05 14:45:17', 'waiting', '2025-05-05 07:45:17', '2025-05-05 07:45:17', NULL, '2025-05-05 16:45:17', 'menunggu pembayaran', NULL, NULL, NULL, NULL, NULL, NULL),
	(32, 'INV-20250505-6090', 1, 93, 1, 1, NULL, 2, 2, NULL, 1, 16000, '2025-05-05 15:01:26', 'waiting', '2025-05-05 08:01:26', '2025-05-05 08:01:26', NULL, '2025-05-05 17:01:26', 'menunggu pembayaran', NULL, '4659a8eab734060c272b43e7be1b0429', NULL, NULL, NULL, NULL),
	(33, 'INV-20250505-8324', 1, 93, 1, 1, NULL, 2, 3, NULL, 1, 16000, '2025-05-05 15:11:38', 'waiting', '2025-05-05 08:11:38', '2025-05-05 08:11:38', NULL, '2025-05-05 17:11:38', 'menunggu pembayaran', NULL, '75cff5f8be8333044720c86938d384ff', NULL, NULL, NULL, NULL),
	(34, 'INV-20250505-1163', 1, 93, 1, 1, NULL, 2, 3, NULL, 1, 16000, '2025-05-05 15:13:40', 'waiting', '2025-05-05 08:13:40', '2025-05-05 08:13:40', NULL, '2025-05-05 17:13:40', 'menunggu pembayaran', NULL, 'ac5840ed3b4051bd9162381b2a0fe72d', NULL, NULL, NULL, NULL),
	(35, 'INV-20250505-7751', 1, 93, 1, 1, NULL, 2, 1, NULL, 1, 16000, '2025-05-05 19:05:06', 'waiting', '2025-05-05 12:05:06', '2025-05-05 12:05:06', NULL, '2025-05-05 21:05:06', 'menunggu pembayaran', NULL, '2698f048191b6226a1ec9cf2b732222b', NULL, NULL, NULL, NULL),
	(36, 'INV-20250505-7751', 1, 93, 1, 1, NULL, 2, 1, NULL, 1, 16000, '2025-05-05 19:05:06', 'waiting', '2025-05-05 12:05:08', '2025-05-05 12:05:08', NULL, '2025-05-05 21:05:06', 'menunggu pembayaran', NULL, 'f41d21b35b5c2773e10854480c6787c9', NULL, NULL, NULL, NULL),
	(37, 'INV-20250505-5620', 1, 93, 1, 2, NULL, 2, 3, NULL, 3, 48000, '2025-05-05 20:30:41', 'waiting', '2025-05-05 13:30:41', '2025-05-05 15:58:00', NULL, '2025-05-05 22:30:41', 'dibatalkan', NULL, 'cef94a4b9c17f17fe48637c9ac6d6907', NULL, NULL, NULL, NULL);

-- Dumping structure for table php_login_test.pricelist
CREATE TABLE IF NOT EXISTS `pricelist` (
  `id_pricelist` int NOT NULL AUTO_INCREMENT,
  `id_product` int DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pricelist`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `pricelist_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.pricelist: ~0 rows (approximately)

-- Dumping structure for table php_login_test.product
CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int NOT NULL AUTO_INCREMENT,
  `nama_product` varchar(100) DEFAULT NULL,
  `id_kategori` int DEFAULT NULL,
  `uom` varchar(10) DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `nama_vendor` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `tipe_product` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `beli` int DEFAULT NULL,
  `informasi_product` text,
  `spesifikasi` json DEFAULT NULL,
  `id_promo` int DEFAULT NULL,
  PRIMARY KEY (`id_product`),
  KEY `id_kategori` (`id_kategori`),
  KEY `fk_product_promo` (`id_promo`),
  CONSTRAINT `fk_product_promo` FOREIGN KEY (`id_promo`) REFERENCES `promo` (`id_promo`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.product: ~17 rows (approximately)
INSERT INTO `product` (`id_product`, `nama_product`, `id_kategori`, `uom`, `qty`, `harga`, `nama_vendor`, `foto`, `deskripsi`, `tipe_product`, `created_at`, `updated_at`, `beli`, `informasi_product`, `spesifikasi`, `id_promo`) VALUES
	(76, 'Sofa Minimalis', 7, 'pcs', 10, 20000000, 'Vendor A', 'ZULU CHAIR WHITE.png', '1', 'Furniture', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 10, NULL, NULL, 1),
	(77, 'Meja TV Kayu', 8, 'pcs', 5, 15, 'Vendor B', 'ZULU CHAIR WHITE.png', 'Meja TV dari kayu jati', 'Furniture', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 20, NULL, NULL, 2),
	(78, 'Rak Dinding', 9, 'pcs', 20, 20, 'Vendor A', 'ZULU CHAIR WHITE.png', 'Rak tempel dinding minimalis', 'Dekorasi', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 11, NULL, NULL, 1),
	(79, 'Tempat Tidur Queen', 10, 'pcs', 7, NULL, 'Vendor C', 'ZULU CHAIR WHITE.png', 'Ranjang queen size nyaman', 'Furniture', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 15, NULL, NULL, 2),
	(80, 'Lemari Pakaian 3 Pintu', 10, 'pcs', 4, 200000, 'Vendor D', 'ZULU CHAIR WHITE.png', 'Lemari besar untuk kamar tidur', 'Furniture', '2025-04-28 10:35:12', '2025-05-01 16:49:37', 30, NULL, NULL, 1),
	(81, 'Meja Rias', 9, 'pcs', 8, NULL, 'Vendor B', 'ZULU CHAIR WHITE.png', 'Meja rias dengan cermin bulat', 'Furniture', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 12, NULL, NULL, 2),
	(82, 'Meja Makan 4 Kursi', 8, 'set', 6, 500000, 'Vendor A', 'ZULU CHAIR WHITE.png', 'Meja makan untuk keluarga kecil', 'Furniture', '2025-04-28 10:35:12', '2025-05-01 16:50:07', 33, NULL, NULL, 1),
	(83, 'Kabinet Dapur', 7, 'pcs', 3, NULL, 'Vendor E', 'ZULU CHAIR WHITE.png', 'Kabinet atas dan bawah dapur', 'Kitchen Set', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 10, NULL, NULL, 2),
	(84, 'Rak Bumbu', 7, 'pcs', 15, NULL, 'Vendor A', 'ZULU CHAIR WHITE.png', 'Rak kecil untuk bumbu dapur', 'Aksesoris Dapur', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 10, NULL, NULL, 1),
	(85, 'Kursi Tamu Kayu', 8, 'pcs', 12, NULL, 'Vendor F', 'ZULU CHAIR WHITE.png', 'Kursi klasik untuk tamu', 'Furniture', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 23, NULL, NULL, 2),
	(86, 'Matras Tidur', 9, 'pcs', 10, NULL, 'Vendor G', 'ZULU CHAIR WHITE.png', 'Matras empuk dan nyaman', 'Kasur', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 14, NULL, NULL, 1),
	(87, 'Gorden Jendela', 10, 'pcs', 0, NULL, 'Vendor H', 'ZULU CHAIR WHITE.png', 'Gorden polos warna netral', 'Dekorasi', '2025-04-28 10:35:12', '2025-05-01 10:56:15', 19, NULL, NULL, 2),
	(88, 'Dispenser Dapur', 7, 'pcs', 9, NULL, 'Vendor I', 'ZULU CHAIR WHITE.png', 'Dispenser air minum stainless', 'Peralatan', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 10, NULL, NULL, 1),
	(89, 'Lemari Dapur Gantung', 9, 'pcs', 4, NULL, 'Vendor J', 'ZULU CHAIR WHITE.png', 'Lemari gantung dapur atas', 'Kitchen Set', '2025-04-28 10:35:12', '2025-05-01 15:07:27', 15, NULL, NULL, NULL),
	(90, 'Cermin Hias', 10, 'pcs', 14, NULL, 'Vendor A', 'ZULU CHAIR WHITE.png', 'Cermin bundar untuk kamar tidur', 'Dekorasi', '2025-04-28 10:35:12', '2025-05-01 09:18:50', 14, 'Produk ini dirancang untuk kenyamanan dan daya tahan tinggi. Cocok digunakan di dalam maupun luar ruangan Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab magnam dolor, numquam illum eveniet modi repellendus voluptatibus ', NULL, 1),
	(93, 'Kursi Kantor', 10, 'Unit', 10, 20000, 'Vendor A', 'UT M01 2.png', 'Kursi Kantor Nyaman untuk kantor', 'Furniture', '2025-04-29 13:17:10', '2025-05-05 15:58:00', 12, 'Produk ini dirancang untuk kenyamanan dan daya tahan tinggi. Cocok digunakan di dalam maupun luar ruangan Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab magnam dolor, numquam illum eveniet modi repellendus voluptatibus ', '{"Warna": "Red & Yellow", "Dimensi": "40×36×51cm", "Material": "Polypropylene, Metal", "Tinggi Kursi": "35cm"}', 2),
	(94, 'Meja Belajar', 10, 'Unit', 10, 200000, 'Vendor B', 'UT M01 2.png', 'Meja Nyaman', 'Furniture', '2025-05-01 13:17:10', '2025-05-01 15:08:06', 12, 'Produk ini dirancang untuk kenyamanan dan daya tahan tinggi. Cocok digunakan di dalam maupun luar ruangan Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab magnam dolor, numquam illum eveniet modi repellendus voluptatibus ', '{"Warna": "Red & Yellow", "Dimensi": "40×36×51cm", "Material": "Polypropylene, Metal", "Tinggi Kursi": "35cm"}', NULL);

-- Dumping structure for table php_login_test.promo
CREATE TABLE IF NOT EXISTS `promo` (
  `id_promo` int NOT NULL AUTO_INCREMENT,
  `nama_promo` varchar(100) DEFAULT NULL,
  `jenis_promo` varchar(100) DEFAULT NULL,
  `total_promo` decimal(10,2) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_promo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.promo: ~2 rows (approximately)
INSERT INTO `promo` (`id_promo`, `nama_promo`, `jenis_promo`, `total_promo`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
	(1, 'Promo Diskon Lebaran', 'Diskon', 10.00, '2025-04-10', '2025-05-20', '2025-05-01 09:17:55', '2025-05-01 09:22:04'),
	(2, 'Promo Akhir Pekan', 'Cashback', 20.00, '2025-04-10', '2025-05-20', '2025-05-01 09:17:55', '2025-05-01 09:22:04');

-- Dumping structure for table php_login_test.review
CREATE TABLE IF NOT EXISTS `review` (
  `id_review` int NOT NULL AUTO_INCREMENT,
  `id_customer` int DEFAULT NULL,
  `id_product` int DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_review`),
  KEY `id_customer` (`id_customer`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.review: ~0 rows (approximately)

-- Dumping structure for table php_login_test.session
CREATE TABLE IF NOT EXISTS `session` (
  `id_session` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_session`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.session: ~8 rows (approximately)
INSERT INTO `session` (`id_session`, `id_user`, `created_at`, `updated_at`) VALUES
	(1, 1, '2025-04-29 13:59:38', '2025-04-29 13:59:38'),
	(2, 1, '2025-04-30 13:00:54', '2025-04-30 13:00:54'),
	(3, 1, '2025-05-02 03:20:44', '2025-05-02 03:20:44'),
	(4, 1, '2025-05-03 09:23:01', '2025-05-03 09:23:01'),
	(5, 1, '2025-05-04 17:07:41', '2025-05-04 17:07:41'),
	(6, 1, '2025-05-05 00:50:39', '2025-05-05 00:50:39'),
	(7, 3, '2025-05-05 01:38:52', '2025-05-05 01:38:52'),
	(8, 1, '2025-05-05 01:53:08', '2025-05-05 01:53:08');

-- Dumping structure for table php_login_test.toko
CREATE TABLE IF NOT EXISTS `toko` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.toko: ~5 rows (approximately)
INSERT INTO `toko` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
	(1, 'Toko Sinar Baru', 'Jl. Melati No. 12, Desa Sukamaju, Kec. Sukatani, Kab. Bandung', '2025-05-02 01:08:31', '2025-05-02 01:08:31'),
	(2, 'Toko Makmur Sentosa', 'Jl. Kenanga No. 45, Kel. Kebon Jeruk, Kec. Bojong, Kota Tasikmalaya', '2025-05-02 01:08:31', '2025-05-02 01:08:31'),
	(3, 'Toko Serba Ada', 'Jl. Anggrek No. 3, Desa Margahayu, Kec. Cibiru, Kab. Garut', '2025-05-02 01:08:31', '2025-05-02 01:08:31'),
	(4, 'Toko Laris Manis', 'Jl. Mawar No. 77, Kel. Cibadak, Kec. Antapani, Kota Bandung', '2025-05-02 01:08:31', '2025-05-02 01:08:31'),
	(5, 'Toko Grosir Murah', 'Jl. Teratai No. 5, Desa Cileunyi, Kec. Rancaekek, Kab. Bandung', '2025-05-02 01:08:31', '2025-05-02 01:08:31');

-- Dumping structure for table php_login_test.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `token` varchar(50) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `no_telpon` varchar(20) DEFAULT NULL,
  `jabatan_user` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role_akses` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.users: ~2 rows (approximately)
INSERT INTO `users` (`id_user`, `token`, `nama_user`, `password`, `no_telpon`, `jabatan_user`, `email`, `role_akses`, `created_at`, `updated_at`) VALUES
	(1, 'abc123token', 'Admin Satu', 'admin123', NULL, 'Admin Utama', NULL, 1, '2025-04-28 10:28:54', '2025-04-28 10:28:54'),
	(2, 'xyz789token', 'User Dua', 'user123', NULL, 'Staff Operasional', NULL, 2, '2025-04-28 10:28:54', '2025-04-28 10:28:54');

-- Dumping structure for table php_login_test.wishlist
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id_customer` int NOT NULL,
  `id_product` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customer`,`id_product`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table php_login_test.wishlist: ~1 rows (approximately)
INSERT INTO `wishlist` (`id_customer`, `id_product`, `created_at`) VALUES
	(1, 93, '2025-05-05 01:53:26');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
