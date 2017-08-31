-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sk_bidikmisi
CREATE DATABASE IF NOT EXISTS `sk_bidikmisi` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sk_bidikmisi`;

-- Dumping structure for table sk_bidikmisi.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nim_mahasiswa` varchar(50) DEFAULT NULL,
  `nama_mahasiswa` varchar(50) DEFAULT NULL,
  `program_studi_mahasiswa` varchar(50) DEFAULT NULL,
  `semester_mahasiswa` int(11) DEFAULT NULL,
  `no_rek_mahasiswa` varchar(50) DEFAULT NULL,
  `bank_mahasiswa` varchar(50) DEFAULT NULL,
  `status_mahasiswa` int(11) DEFAULT NULL,
  `biaya_hidup_mahasiswa` varchar(50) DEFAULT NULL,
  `sk_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa`),
  KEY `FK_mahasiswa_sk` (`sk_id`),
  CONSTRAINT `FK_mahasiswa_sk` FOREIGN KEY (`sk_id`) REFERENCES `sk` (`id_sk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table sk_bidikmisi.mahasiswa: ~2 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim_mahasiswa`, `nama_mahasiswa`, `program_studi_mahasiswa`, `semester_mahasiswa`, `no_rek_mahasiswa`, `bank_mahasiswa`, `status_mahasiswa`, `biaya_hidup_mahasiswa`, `sk_id`) VALUES
	(1, '1116100018', 'Riski Febriantiningrum', 'S1 Fisika', 2, '9000039309274', 'MANDIRI', 2, '3900000', 1),
	(2, '1116100101', 'Bachtiar Yusuf', 'S1 Fisika', 2, '9000039309282', 'MANDIRI', 2, '3900000', 1);
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping structure for table sk_bidikmisi.sk
CREATE TABLE IF NOT EXISTS `sk` (
  `id_sk` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_sk` varchar(50) DEFAULT NULL,
  `tahun_sk` varchar(50) DEFAULT NULL,
  `jenis_sk` varchar(50) DEFAULT NULL,
  `mahasiswa_sk` int(11) DEFAULT NULL,
  `status_pencairan_sk` int(11) DEFAULT NULL,
  `status_sk` int(11) DEFAULT NULL,
  `tanggal_pengajuan_sk` date DEFAULT NULL,
  PRIMARY KEY (`id_sk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table sk_bidikmisi.sk: ~1 rows (approximately)
/*!40000 ALTER TABLE `sk` DISABLE KEYS */;
INSERT INTO `sk` (`id_sk`, `nomor_sk`, `tahun_sk`, `jenis_sk`, `mahasiswa_sk`, `status_pencairan_sk`, `status_sk`, `tanggal_pengajuan_sk`) VALUES
	(1, '015689/IT2/KM.02.00/2017', 'GENAP/2017', 'On-Going', 27, 2, 1, '2017-04-10'),
	(2, '009568/IT2/KM.02.00/2017', 'GENAP/2017', 'On-Going', 2614, 2, 1, '2017-02-21');
/*!40000 ALTER TABLE `sk` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
