-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Jun-2023 às 20:58
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `looking_for_ink_database`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipodeconta` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `cidade` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contatos` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avaliacao` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipodeconta`, `nome`, `senha`, `email`, `telefone`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`, `descricao`, `contatos`, `avaliacao`) VALUES
(2, 'tatuador', 'Mateus', 'mateus123', 'teste@teste.com', '5531986578922', 'masculino', '2000-02-21', 'Belo', 'MinasGerais', 'Rua', '', '', 4),
(3, 'usuario', 'Mateus de Almeida Rodrigues', 'mateusaa', 'mateusdealmeidarodrigues5@gmail.com', '5531986578922', 'masculino', '2000-09-21', 'Belo Horizonte', 'Minas Gerais', 'Rua das floresss', '', '', 0),
(13, 'tatuador', 'aaaaaaaaa', 'teste123', 'teste@gmail.com', '55319888888', 'masculino', '2000-11-11', 'bh', 'mg', 'rua', 'agdfgsdg', 'dssdfgsdg', 4),
(14, 'admin', 'Mateus Rodrigues', 'admin123@', 'mateus@admin.com', '(31) 97766-8899', 'masculino', '2000-10-21', 'bh', 'mg', 'rua a', '', '', 5),
(15, 'admin', 'teste', 'teste123', 'teste@teste1', '(33) 33333-3333', 'masculino', '2000-11-11', 'sp', 'sp', 'rua b', '', '', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
