-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for yuri_coins
DROP DATABASE IF EXISTS `yuri_coins`;
CREATE DATABASE IF NOT EXISTS `yuri_coins` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `yuri_coins`;

-- Dumping structure for table yuri_coins.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `nasc` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table yuri_coins.usuario: ~2 rows (approximately)
INSERT INTO `usuario` (`usuario_id`, `email`, `senha`, `nome`, `cpf`, `nasc`, `cep`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
	(16, 'teste@teste.com', '123456', 'luric', '', '', '', '', '', '', '', 0),
	(18, 'elianelilica1@hotmail.com', '123456', 'Luric de Souza Oliveira', '1', '02/01/1995', '12225-170', '', '', 'Jardim Paraíso do Sol', 'Rua Doutor João Gomes Batista Neto', 304),
	(62, 'luric.dev@gmail.com', 'teste', 'Luric de Souza Oliveira', '130.719.456-71', '02/01/1995', '12225-170', 'SP', 'São José dos Campos', 'Jardim Paraíso do Sol', 'Rua Doutor João Gomes Batista Neto', 304);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
