-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Nov-2023 às 10:34
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
-- Banco de dados: `loginauth`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `confidencial`
--

DROP TABLE IF EXISTS `confidencial`;
CREATE TABLE IF NOT EXISTS `confidencial` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `conteudo` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `nivel` varchar(25) NOT NULL,
  `duracao` varchar(15) NOT NULL,
  `periodo` varchar(15) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`codigo`, `nome`, `nivel`, `duracao`, `periodo`) VALUES
(1, 'Técnico em Informática', 'tecnico', '2 anos', 'vespertino'),
(2, 'Técnico em Administração', 'tecnico', '2 anos', 'vespertino'),
(3, 'Tecnologia em Análise e Desenvolvimento de Si', 'graducacao', '3 anos', 'noturno'),
(4, 'Tecnologia em Processos Gerenciais', 'graducacao', '2 anos', 'noturno'),
(5, 'Tecnologia em Processos Gerenciais', 'posgraduacao', '1 ano', 'noturno'),
(6, 'Especialização em Gestão de Projetos', 'posgraduacao', '1 ano', 'noturno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `tipo` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'A',
  `sexo` varchar(15) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `endereco` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `cartaocredito` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `telefone`, `tipo`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`, `cpf`, `cartaocredito`) VALUES
(1, '', 'aluno', '0f359740bd1cda994f8b55330c86d845', '', '', 'A', NULL, NULL, NULL, NULL, '', '', ''),
(2, '', 'professor', '0f359740bd1cda994f8b55330c86d845', '', '', 'P', NULL, NULL, NULL, NULL, '', '', ''),
(3, 'Sidnei Mitani', '', '123', 'sidnei@mitani.com', '1989891929292', 'A', 'masculino', '2023-11-13', 'Capivari', 'São Paulo', 'avenida piratininga, 424', '102044823897', '3214654732159875'),
(5, 'Maria José', '', '123', 'maria@jose.com', '564635454', 'A', 'feminino', '2023-10-29', 'Capivari', 'são paulo', 'asdlfkaslj', '213132', '65465465'),
(6, 'criptografado', '', '$2y$10$Axd8eG9JxzW740MSu/CPZuQ/E', 'criptogr@fado.com', '987654321', 'A', 'masculino', '2023-11-07', 'mombuca', 'são paulo', 'rua das casas, 123', '321654987', '32132132');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitantes`
--

DROP TABLE IF EXISTS `visitantes`;
CREATE TABLE IF NOT EXISTS `visitantes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `tipo` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'A',
  `sexo` varchar(15) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `endereco` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `cartaocredito` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `visitantes`
--

INSERT INTO `visitantes` (`id`, `nome`, `usuario`, `senha`, `email`, `telefone`, `tipo`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`, `cpf`, `cartaocredito`) VALUES
(12, 'Maria José', '', '$2y$10$GX3L15mXxeI7MgyQe4X1c.xSkuP/.zcwsXtxHAj71gD3HLqTolbmO', 'maria@jose.com', '19999999999', 'A', 'feminino', '2023-10-31', 'Mombuca', 'São Paulo', 'Rua das casas, 123', '32165498712', '32146547654198746');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
