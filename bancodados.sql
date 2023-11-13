-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Nov-2023 às 03:16
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `exemplo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `confidencial`
--

DROP TABLE IF EXISTS `confidencial`;
CREATE TABLE IF NOT EXISTS `confidencial` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `conteudo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `confidencial`
--

INSERT INTO `confidencial` (`codigo`, `conteudo`) VALUES
(1, 'Conteúdo confidencial 1'),
(2, 'Conteúdo confidencial 2'),
(3, 'Conteúdo confidencial 3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `nivel` varchar(15) DEFAULT NULL,
  `duracao` varchar(10) DEFAULT NULL,
  `periodo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`codigo`, `nome`, `nivel`, `duracao`, `periodo`) VALUES
(1, 'Técnico em Informática', 'Técnico', '2 anos', 'Vespertino'),
(2, 'Técnico em Administração', 'Técnico', '2 anos', 'Vespertino'),
(3, 'Tecnologia em Análise e Desenvolvimento de Sistemas', 'Graduação', '3 anos', 'Noturno'),
(4, 'Tecnologia em Processos Gerenciais', 'Graduação', '2 anos', 'Noturno'),
(5, 'Especialização em Segurança da Informação', 'Pós-graduação', '1 ano', 'Noturno'),
(6, 'Especialização em Gestão de Projetos', 'Pós-graduação', '1 ano', 'Noturno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(10) DEFAULT NULL,
  `senha` char(32) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `usuario`, `senha`, `tipo`) VALUES
(1, 'aluno', '0f359740bd1cda994f8b55330c86d845', 'A'),
(2, 'professor', '0f359740bd1cda994f8b55330c86d845', 'P');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
