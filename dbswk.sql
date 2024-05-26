/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 8.0.30 : Database - dbswk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbswk` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `dbswk`;

/*Table structure for table `identitas` */

DROP TABLE IF EXISTS `identitas`;

CREATE TABLE `identitas` (
  `ididentitas` bigint NOT NULL AUTO_INCREMENT,
  `idsentra` bigint DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL COMMENT 'Nama Lapak',
  `penyewa` varchar(255) DEFAULT NULL COMMENT 'Nama penyewa',
  `no_lapak` bigint DEFAULT NULL COMMENT 'No lapak',
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ididentitas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `identitas` */

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `idkategori` bigint NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `kategori` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `idmenu` bigint NOT NULL AUTO_INCREMENT,
  `ididentitas` bigint DEFAULT NULL,
  `idkategori` bigint DEFAULT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `menu` */

/*Table structure for table `penjualan` */

DROP TABLE IF EXISTS `penjualan`;

CREATE TABLE `penjualan` (
  `idpenjualan` bigint NOT NULL AUTO_INCREMENT,
  `ididentitas` bigint DEFAULT NULL,
  `iduser` bigint DEFAULT NULL,
  `idpelanggan` bigint DEFAULT NULL,
  `total` double DEFAULT NULL,
  `bayar` double DEFAULT NULL,
  `metode` varchar(255) DEFAULT NULL,
  `kembali` double DEFAULT NULL,
  PRIMARY KEY (`idpenjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `penjualan` */

/*Table structure for table `penjualan_detail` */

DROP TABLE IF EXISTS `penjualan_detail`;

CREATE TABLE `penjualan_detail` (
  `idpenjualandetail` bigint NOT NULL AUTO_INCREMENT,
  `idpenjualan` bigint DEFAULT NULL,
  `idmenu` bigint DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `diskon` double DEFAULT NULL COMMENT 'nominal diskon',
  `presen_diskon` double DEFAULT NULL COMMENT 'presentase diskon',
  `total` double DEFAULT NULL COMMENT 'total',
  PRIMARY KEY (`idpenjualandetail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `penjualan_detail` */

/*Table structure for table `sentra` */

DROP TABLE IF EXISTS `sentra`;

CREATE TABLE `sentra` (
  `idsentra` bigint NOT NULL AUTO_INCREMENT,
  `nama_sentra` varchar(255) DEFAULT NULL COMMENT 'Nama Sentra',
  `alamat_sentra` varchar(255) DEFAULT NULL COMMENT 'Alamat Sentra',
  `kec_sentra` varchar(255) DEFAULT NULL COMMENT 'Kecamatan Sentra',
  `kel_sentra` varchar(255) DEFAULT NULL COMMENT 'Kelurahan Sentra',
  `luas_sentra` bigint DEFAULT NULL COMMENT 'Luas Sentra',
  `kapasitas_sentra` int DEFAULT NULL COMMENT 'Kapasitas Sentra ( berapa lapak )',
  `jml_pelaku_sentra` int DEFAULT NULL COMMENT 'Jumlah Penjual yang menyewa',
  `biaya_operasional_sentra` double DEFAULT NULL COMMENT 'Biaya sewa',
  PRIMARY KEY (`idsentra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `sentra` */

/*Table structure for table `sewa` */

DROP TABLE IF EXISTS `sewa`;

CREATE TABLE `sewa` (
  `idsewa` bigint NOT NULL AUTO_INCREMENT,
  `ididentitas` bigint DEFAULT NULL,
  `sewa` double DEFAULT NULL COMMENT 'harga sewa',
  `bayar` double DEFAULT NULL COMMENT 'Bayar sewa',
  `metode` varchar(255) DEFAULT NULL COMMENT 'Metode pembayaran',
  `tgl_sewa` datetime DEFAULT NULL COMMENT 'tanggal pembayaran',
  PRIMARY KEY (`idsewa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `sewa` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `iduser` bigint NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) DEFAULT NULL,
  `Alamat` text,
  `Role` bigint DEFAULT NULL COMMENT '1. Pemerintah, 2. Penjual, 3. Pembeli',
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `user` */

insert  into `user`(`iduser`,`Nama`,`Alamat`,`Role`,`Username`,`Password`,`email`,`telp`) values 
(1,'budi','sidoarjo',1,'budi','12345678','budi@gmail.com','0894126436363'),
(2,'Siti','Rungkut',2,'siti','12345678','siti@gmail.com','089215521515');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
