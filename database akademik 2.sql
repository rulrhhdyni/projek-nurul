-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table akademik 2.dosen
CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `nrp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel akademik 2.dosen: ~2 rows (lebih kurang)
INSERT INTO `dosen` (`id`, `nama`, `nrp`) VALUES
	(2, 'hamdani', '12345'),
	(3, 'nbaj', '890');

-- membuang struktur untuk table akademik 2.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `prodi` int DEFAULT NULL,
  `dosen` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel akademik 2.kelas: ~1 rows (lebih kurang)
INSERT INTO `kelas` (`id`, `nama`, `prodi`, `dosen`) VALUES
	(0, 'candra', 0, 0);

-- membuang struktur untuk table akademik 2.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nim` int DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel akademik 2.mahasiswa: ~1 rows (lebih kurang)
INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `prodi`, `kelas`) VALUES
	(25, 'ipan', 56789, 'sains', '9');

-- membuang struktur untuk table akademik 2.prodi
CREATE TABLE IF NOT EXISTS `prodi` (
  `id` int DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `singkatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel akademik 2.prodi: ~0 rows (lebih kurang)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
