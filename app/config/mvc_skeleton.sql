-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.54-0ubuntu0.14.04.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             9.4.0.5154
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mvc_skeleton
CREATE DATABASE IF NOT EXISTS `mvc_skeleton` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mvc_skeleton`;

-- Dumping structure for table mvc_skeleton.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol_name_es` varchar(100) NOT NULL,
  `rol_name_ca` varchar(100) NOT NULL,
  `rol_name_en` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table mvc_skeleton.rol: ~2 rows (approximately)
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`id_rol`, `rol_name_es`, `rol_name_ca`, `rol_name_en`) VALUES
	(1, 'Administrador', 'Administrador', 'Administrator'),
	(2, 'Usuario', 'Usuari', 'User');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

-- Dumping structure for table mvc_skeleton.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_surname` varchar(200) DEFAULT NULL,
  `user_lang` varchar(2) DEFAULT NULL,
  `user_active` tinyint(4) DEFAULT NULL,
  `user_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table nominas.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `user_email`, `user_password`, `user_name`, `user_surname`, `user_lang`, `user_active`, `user_creation`) VALUES
	(1, 'email@domain.com', '$2y$11$1PnfJ81GnPoLfsISPCNOzOlkRFE657aW4tkY9mAh02GrDiISpg0J2', 'Name', 'Surname', 'es', 1, '2016-08-12 09:57:31');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
