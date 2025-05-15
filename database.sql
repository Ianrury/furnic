-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for php_furnic_test
DROP DATABASE IF EXISTS `php_furnic_test`;
CREATE DATABASE IF NOT EXISTS `php_furnic_test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `php_furnic_test`;

-- Dumping structure for table php_furnic_test.cart
DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id_cart` int NOT NULL AUTO_INCREMENT,
  `id_customer` int DEFAULT '0',
  `id_product` int DEFAULT '0',
  `qty` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_detail_product` int DEFAULT '0',
  `id_motif_produk` int DEFAULT '0',
  PRIMARY KEY (`id_cart`),
  KEY `id_customer` (`id_customer`),
  KEY `id_product` (`id_product`),
  KEY `id_detail_product` (`id_detail_product`),
  KEY `id_motif_produk` (`id_motif_produk`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE SET DEFAULT,
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE SET DEFAULT,
  CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`id_detail_product`) REFERENCES `detail_product` (`id`) ON DELETE SET DEFAULT,
  CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`id_motif_produk`) REFERENCES `motif_produk` (`id`) ON DELETE SET DEFAULT
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.customer
DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` text,
  `detail` varchar(30) DEFAULT NULL,
  `kode_pos` int DEFAULT NULL,
  `kata_sandi` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reset_token` varchar(255) DEFAULT NULL,
  `auth_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.detail_alamat
DROP TABLE IF EXISTS `detail_alamat`;
CREATE TABLE IF NOT EXISTS `detail_alamat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_customer` int NOT NULL,
  `detail_alamat` text,
  `detail_rumah` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `utama` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_detail_alamat_customer` (`id_customer`),
  CONSTRAINT `fk_detail_alamat_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.detail_product
DROP TABLE IF EXISTS `detail_product`;
CREATE TABLE IF NOT EXISTS `detail_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_product` int DEFAULT NULL,
  `warna` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `detail_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.history_pembelian
DROP TABLE IF EXISTS `history_pembelian`;
CREATE TABLE IF NOT EXISTS `history_pembelian` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pesanan` int NOT NULL,
  `status` varchar(50) NOT NULL,
  `catatan` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_history_pesanan` (`id_pesanan`),
  CONSTRAINT `fk_history_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.jenis_pengiriman
DROP TABLE IF EXISTS `jenis_pengiriman`;
CREATE TABLE IF NOT EXISTS `jenis_pengiriman` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `diskon` int DEFAULT '0',
  `harga` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.kategori
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `id_parent_kategori` int DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_toko` int DEFAULT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `id_parent_kategori` (`id_parent_kategori`),
  KEY `fk_kategori_toko` (`id_toko`),
  CONSTRAINT `fk_kategori_toko` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id`),
  CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_parent_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.motif_produk
DROP TABLE IF EXISTS `motif_produk`;
CREATE TABLE IF NOT EXISTS `motif_produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_product` int DEFAULT NULL,
  `id_detail_product` int DEFAULT NULL,
  `id_sku` varchar(100) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.pesanan
DROP TABLE IF EXISTS `pesanan`;
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
  `id_detail_alamat` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `total_harga` int DEFAULT NULL,
  `diskon_pemesanan` int DEFAULT '0',
  `diskon_pengiriman` int DEFAULT '0',
  `tanggal_pesanan` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT 'waiting',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `done_payment` datetime DEFAULT NULL,
  `limit_payment` datetime DEFAULT NULL,
  `status_pembayaran` varchar(50) DEFAULT NULL,
  `isbatal` tinyint(1) DEFAULT '0',
  `foto_pembayaran` varchar(100) DEFAULT NULL,
  `payment_token` varchar(100) DEFAULT NULL,
  `bank_pengirim` varchar(100) DEFAULT NULL,
  `no_rek_pengirim` varchar(50) DEFAULT NULL,
  `nama_rekening` varchar(100) DEFAULT NULL,
  `jumlah_transfer` varchar(50) DEFAULT NULL,
  `is_review` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_pesanan`),
  KEY `id_customer` (`id_customer`),
  KEY `id_product` (`id_product`),
  KEY `id_pricelist` (`id_pricelist`),
  KEY `id_promo` (`id_promo`),
  KEY `fk_detail_product` (`id_detail_product`),
  KEY `fk_motif_produk` (`id_motif_produk`),
  KEY `fk_pesanan_jenis_pengiriman` (`id_jenis_pengiriman`),
  KEY `fk_pesanan_toko` (`id_toko`),
  KEY `fk_pesanan_detail_alamat` (`id_detail_alamat`),
  CONSTRAINT `fk_detail_product` FOREIGN KEY (`id_detail_product`) REFERENCES `detail_product` (`id`),
  CONSTRAINT `fk_motif_produk` FOREIGN KEY (`id_motif_produk`) REFERENCES `motif_produk` (`id`),
  CONSTRAINT `fk_pesanan_detail_alamat` FOREIGN KEY (`id_detail_alamat`) REFERENCES `detail_alamat` (`id`) ON DELETE SET NULL,
  CONSTRAINT `fk_pesanan_jenis_pengiriman` FOREIGN KEY (`id_jenis_pengiriman`) REFERENCES `jenis_pengiriman` (`id`),
  CONSTRAINT `fk_pesanan_toko` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id`),
  CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_pricelist`) REFERENCES `pricelist` (`id_pricelist`),
  CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`id_promo`) REFERENCES `promo` (`id_promo`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.pricelist
DROP TABLE IF EXISTS `pricelist`;
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

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.product
DROP TABLE IF EXISTS `product`;
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
  `id_toko` int DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `token` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_product`),
  KEY `id_kategori` (`id_kategori`),
  KEY `fk_product_promo` (`id_promo`),
  KEY `fk_product_toko` (`id_toko`),
  CONSTRAINT `fk_product_promo` FOREIGN KEY (`id_promo`) REFERENCES `promo` (`id_promo`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_product_toko` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.promo
DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `id_promo` int NOT NULL AUTO_INCREMENT,
  `nama_promo` varchar(100) DEFAULT NULL,
  `jenis_promo` varchar(100) DEFAULT NULL,
  `total_promo` decimal(10,2) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_toko` int DEFAULT NULL,
  PRIMARY KEY (`id_promo`),
  KEY `fk_promo_toko` (`id_toko`),
  CONSTRAINT `fk_promo_toko` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.review
DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id_review` int NOT NULL AUTO_INCREMENT,
  `id_customer` int DEFAULT NULL,
  `id_product` int DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` json DEFAULT NULL,
  PRIMARY KEY (`id_review`),
  KEY `id_customer` (`id_customer`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.session
DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `id_session` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_session`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.toko
DROP TABLE IF EXISTS `toko`;
CREATE TABLE IF NOT EXISTS `toko` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.users
DROP TABLE IF EXISTS `users`;
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

-- Data exporting was unselected.

-- Dumping structure for table php_furnic_test.wishlist
DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id_customer` int NOT NULL,
  `id_product` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customer`,`id_product`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
