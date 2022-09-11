-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para luric_coins
CREATE DATABASE IF NOT EXISTS `luric_coins` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `luric_coins`;

-- Copiando estrutura para tabela luric_coins.compras
CREATE TABLE IF NOT EXISTS `compras` (
  `compras_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `personagem` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`compras_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela luric_coins.compras: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela luric_coins.estoque_coins
CREATE TABLE IF NOT EXISTS `estoque_coins` (
  `coins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela luric_coins.estoque_coins: ~0 rows (aproximadamente)
INSERT INTO `estoque_coins` (`coins`) VALUES
	(2746);

-- Copiando estrutura para tabela luric_coins.tab_usu_pag
CREATE TABLE IF NOT EXISTS `tab_usu_pag` (
  `id_tab_usu_pag` int(11) NOT NULL,
  `usuarios_id` int(11) DEFAULT NULL,
  `usuarios_pag_id` int(11) DEFAULT NULL,
  `criado` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_tab_usu_pag`) USING BTREE,
  KEY `FK_tab_usu_pag_usuarios` (`usuarios_id`),
  KEY `FK_tab_usu_pag_usuarios_pag` (`usuarios_pag_id`),
  CONSTRAINT `FK_tab_usu_pag_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`usuarios_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_tab_usu_pag_usuarios_pag` FOREIGN KEY (`usuarios_pag_id`) REFERENCES `usuarios_pag` (`usuarios_pag_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela luric_coins.tab_usu_pag: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela luric_coins.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuarios_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `nasc` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `compras_id` int(11) NOT NULL,
  `des_de` datetime NOT NULL DEFAULT current_timestamp(),
  `update` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `personagem` varchar(50) NOT NULL,
  PRIMARY KEY (`usuarios_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela luric_coins.usuarios: ~1 rows (aproximadamente)
INSERT INTO `usuarios` (`usuarios_id`, `email`, `senha`, `celular`, `nome`, `cpf`, `nasc`, `cep`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `compras_id`, `des_de`, `update`, `personagem`) VALUES
	(21, 'teste', 'teste', '', '', '', '', '', '', '', '', '', 0, 0, '2022-09-09 19:47:45', '2022-09-09 19:47:47', '');

-- Copiando estrutura para tabela luric_coins.usuarios_index
CREATE TABLE IF NOT EXISTS `usuarios_index` (
  `usuarios_index_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `nasc` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `compras_id` int(11) NOT NULL,
  `des_de` datetime NOT NULL DEFAULT current_timestamp(),
  `update` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `personagem` varchar(50) NOT NULL,
  PRIMARY KEY (`usuarios_index_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela luric_coins.usuarios_index: ~1 rows (aproximadamente)
INSERT INTO `usuarios_index` (`usuarios_index_id`, `email`, `senha`, `celular`, `nome`, `cpf`, `nasc`, `cep`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `compras_id`, `des_de`, `update`, `personagem`) VALUES
	(23, 'teste', 'teste', '', '', '', '', '', '', '', '', '', 0, 0, '2022-09-09 19:48:36', '2022-09-09 21:47:40', '');

-- Copiando estrutura para tabela luric_coins.usuarios_pag
CREATE TABLE IF NOT EXISTS `usuarios_pag` (
  `usuarios_pag_id` int(11) NOT NULL,
  `chave` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `qnt` int(11) NOT NULL,
  PRIMARY KEY (`usuarios_pag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela luric_coins.usuarios_pag: ~1 rows (aproximadamente)
INSERT INTO `usuarios_pag` (`usuarios_pag_id`, `chave`, `nome`, `valor`, `qnt`) VALUES
	(0, '566.456.546-45', 'AQUARIUS', 65, 500);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
