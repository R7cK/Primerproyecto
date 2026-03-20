-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para proyectolaravel
CREATE DATABASE IF NOT EXISTS `proyectolaravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `proyectolaravel`;

-- Volcando estructura para tabla proyectolaravel.paginas
CREATE TABLE IF NOT EXISTS `paginas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `paginas_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectolaravel.paginas: ~5 rows (aproximadamente)
INSERT INTO `paginas` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `telefono`, `calle`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Mario Hugo Pech Valencia', 'hugo200@gmail.com', '2026-03-19 19:25:23', 'hugo200_20', NULL, '9992734512', 'Calle 77 #20', 1, '2026-03-19 19:25:52', '2026-03-19 19:25:53'),
	(2, 'Luis Bernando Hernandez Pizarro', 'luisB400@hotmail.com', '2026-03-19 19:27:33', 'luisbe40082_dun', NULL, '9991364821', 'Calle 22 #12', 1, '2026-03-19 19:28:03', '2026-03-19 19:28:03'),
	(3, 'Jimena Mariana Cauich Dzul', 'jimeX20_cauich@yahoo.com', '2026-03-19 19:31:42', 'jime12mjas', NULL, '9993456123', 'Calle 100 #14', 1, '2026-03-19 19:32:07', '2026-03-19 19:32:07'),
	(4, 'Nuria Elizabeth', 'nuri90122@hotmail.com', '2026-03-19 19:44:22', 'nuri20nuri', NULL, '9999651245', 'Calle 31 #86', 1, '2026-03-19 19:44:44', '2026-03-19 19:44:45'),
	(5, 'Mariana Angelica', 'mari1291@gmail.com', NULL, '', NULL, '9991456124', 'Calle 40 #248', 1, '2026-03-19 19:46:40', '2026-03-19 19:46:40');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
