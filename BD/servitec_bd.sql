-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para servitec_bd
CREATE DATABASE IF NOT EXISTS `servitec_bd` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `servitec_bd`;

-- Volcando estructura para tabla servitec_bd.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_doc` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `n_doc` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pwd` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `telefono` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `perfil` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ultimo_login` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `n_doc` (`n_doc`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `telefono` (`telefono`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla exclusiva para datos de los usuarios de servitec_bd';

-- Volcando datos para la tabla servitec_bd.usuarios: ~2 rows (aproximadamente)
INSERT INTO `usuarios` (`id_usuario`, `tipo_doc`, `n_doc`, `nombre`, `correo`, `pwd`, `telefono`, `perfil`, `estado`, `foto`, `ultimo_login`) VALUES
	(1, 'CC', '1119217998', 'Jose Bohorquez', 'bd@gmail.com', 'abc123', '3178773186', 'Dueño', 1, 'no', '2022-05-13 14:43:17'),
	(2, 'RC', '1025564526', 'Aaron', 'asbg@gmail.com', 'cba321', '3196866820', 'heredero', 1, 'si', '2022-05-13 15:56:25');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
