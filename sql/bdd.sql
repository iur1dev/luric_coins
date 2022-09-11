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


-- Dumping database structure for luric_coins
CREATE DATABASE IF NOT EXISTS `luric_coins` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `luric_coins`;

-- Dumping structure for table luric_coins.coins_bank
CREATE TABLE IF NOT EXISTS `coins_bank` (
  `usuarios_pag_id` int(11) NOT NULL AUTO_INCREMENT,
  `chave` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `qnt` int(11) NOT NULL,
  PRIMARY KEY (`usuarios_pag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table luric_coins.coins_bank: ~2 rows (approximately)
INSERT INTO `coins_bank` (`usuarios_pag_id`, `chave`, `nome`, `valor`, `qnt`) VALUES
	(1, '767.676.767-67', 'Incidunt et labore ', 15, 123),
	(2, '767.676.767-67', 'Incidunt et labore ', 0, 6);

-- Dumping structure for table luric_coins.estoque_coins
CREATE TABLE IF NOT EXISTS `estoque_coins` (
  `coins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table luric_coins.estoque_coins: ~2 rows (approximately)
INSERT INTO `estoque_coins` (`coins`) VALUES
	(2746),
	(2746);

-- Dumping structure for table luric_coins.tab_usuarios_bank_coins_bank
CREATE TABLE IF NOT EXISTS `tab_usuarios_bank_coins_bank` (
  `id_tab_usu_pag` int(11) NOT NULL,
  `usuarios_id` int(11) DEFAULT NULL,
  `usuarios_pag_id` int(11) DEFAULT NULL,
  `criado` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_tab_usu_pag`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table luric_coins.tab_usuarios_bank_coins_bank: ~0 rows (approximately)

-- Dumping structure for table luric_coins.usuarios_bank
CREATE TABLE IF NOT EXISTS `usuarios_bank` (
  `usuarios_bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `nasc` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `criado` datetime NOT NULL DEFAULT current_timestamp(),
  `att` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`usuarios_bank_id`) USING BTREE,
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `celular` (`celular`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table luric_coins.usuarios_bank: ~0 rows (approximately)

-- Dumping structure for table luric_coins.usuarios_coins
CREATE TABLE IF NOT EXISTS `usuarios_coins` (
  `usuarios_coins_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `nasc` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `criado` datetime NOT NULL DEFAULT current_timestamp(),
  `att` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`usuarios_coins_id`) USING BTREE,
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `celular` (`celular`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table luric_coins.usuarios_coins: ~2 rows (approximately)
INSERT INTO `usuarios_coins` (`usuarios_coins_id`, `email`, `celular`, `senha`, `nome`, `cpf`, `nasc`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `numero`, `criado`, `att`) VALUES
	(62, 'luric.dev@gmail.com', '(12) 99663-5605', '666slip999', 'Luric de Souza Oliveira', '130.719.456-71', '02/01/1995', '12225-170', 'Rua Doutor João Gomes Batista Neto', 'Jardim Paraíso do Sol', 'São José dos Campos', 'SP', '304', '2022-09-11 17:18:38', NULL),
	(63, 'luric.dev1@gmail.com', '(12) 29663-5605', 'testeteste', 'Luric de Souza Oliveira', '130.719.256-71', '02/01/1995', '12225-170', 'Rua Doutor João Gomes Batista Neto', 'Jardim Paraíso do Sol', 'São José dos Campos', 'SP', '304', '2022-09-11 17:21:20', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
