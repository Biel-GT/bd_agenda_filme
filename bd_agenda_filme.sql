-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Nov-2021 às 03:11
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_agenda_filme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_filme`
--

DROP TABLE IF EXISTS `agenda_filme`;
CREATE TABLE IF NOT EXISTS `agenda_filme` (
  `id_agenda_filme` int NOT NULL AUTO_INCREMENT,
  `id_filme` int NOT NULL,
  `nick` varchar(15) NOT NULL,
  `data_agenda_filme` date NOT NULL,
  PRIMARY KEY (`id_agenda_filme`),
  KEY `id_filme` (`id_filme`),
  KEY `nick` (`nick`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `agenda_filme`
--

INSERT INTO `agenda_filme` (`id_agenda_filme`, `id_filme`, `nick`, `data_agenda_filme`) VALUES
(1, 1, 'Biel_GT', '2021-11-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_serie`
--

DROP TABLE IF EXISTS `agenda_serie`;
CREATE TABLE IF NOT EXISTS `agenda_serie` (
  `id_agenda_serie` int NOT NULL AUTO_INCREMENT,
  `id_serie` int NOT NULL,
  `nick` varchar(15) NOT NULL,
  `data_agenda_serie` date NOT NULL,
  PRIMARY KEY (`id_agenda_serie`),
  KEY `id_serie` (`id_serie`),
  KEY `nick` (`nick`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `agenda_serie`
--

INSERT INTO `agenda_serie` (`id_agenda_serie`, `id_serie`, `nick`, `data_agenda_serie`) VALUES
(1, 1, 'Biel_GT', '2021-11-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

DROP TABLE IF EXISTS `filmes`;
CREATE TABLE IF NOT EXISTS `filmes` (
  `id_filme` int NOT NULL AUTO_INCREMENT,
  `nome_filme` varchar(30) NOT NULL,
  `genero_filme` varchar(20) NOT NULL,
  `desc_filme` varchar(120) NOT NULL,
  PRIMARY KEY (`id_filme`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id_filme`, `nome_filme`, `genero_filme`, `desc_filme`) VALUES
(1, 'Homem-Aranha 2', 'Ação/Aventura', 'Quando uma falha na experiência de fusão nuclear resulta em uma explosão que mata sua esposa, o Dr. Otto Octavius é tran');

-- --------------------------------------------------------

--
-- Estrutura da tabela `serie`
--

DROP TABLE IF EXISTS `serie`;
CREATE TABLE IF NOT EXISTS `serie` (
  `id_serie` int NOT NULL AUTO_INCREMENT,
  `nome_serie` varchar(30) NOT NULL,
  `genero_serie` varchar(20) NOT NULL,
  `desc_serie` varchar(120) NOT NULL,
  PRIMARY KEY (`id_serie`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `serie`
--

INSERT INTO `serie` (`id_serie`, `nome_serie`, `genero_serie`, `desc_serie`) VALUES
(1, 'The Flash', 'Drama', 'Acompanhe as aventuras do homem mais veloz do planeta, o cientista da Central City Police Barry Allen, que após um trági');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usu`
--

DROP TABLE IF EXISTS `usu`;
CREATE TABLE IF NOT EXISTS `usu` (
  `id_usu` int NOT NULL AUTO_INCREMENT,
  `nick` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telefone` bigint DEFAULT NULL,
  PRIMARY KEY (`id_usu`),
  UNIQUE KEY `nick` (`nick`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usu`
--

INSERT INTO `usu` (`id_usu`, `nick`, `telefone`) VALUES
(1, 'Biel_GT', 11985426483),
(2, 'Gx1Sb5ToX', 11948531675),
(3, 'Mario12Gamer', 11948567258),
(4, 'Rob10X', 11925786163),
(5, 'Gabriel', 11976570086),
(6, 'Daniel', 11984563258),
(7, 'Wag10', 11987108450);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
