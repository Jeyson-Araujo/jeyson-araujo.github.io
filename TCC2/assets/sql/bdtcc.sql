-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Fev-2022 às 17:54
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdtcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nomeCompleto` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `turma` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `periodo` varchar(50) NOT NULL,
  `confSenha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `cpf`, `nomeCompleto`, `email`, `campus`, `curso`, `turma`, `matricula`, `periodo`, `confSenha`) VALUES
(5, '11', '123', '', '', '', '', '', '', '', '', ''),
(7, '125', '202cb962ac59075b964b07152d234b70', '125', '', '', '', '', '', '', '', ''),
(9, '1', '1234', '1', '', '', '', '', '', '', '', ''),
(10, '52103336801', '827ccb0eea8a706c4c34a16891f84e7b', '52103336801', '', '', '', '', '', '', '', ''),
(12, '521033368011', '827ccb0eea8a706c4c34a16891f84e7b', '52103336801', 'Jeyson Araujo', 'jeysonleonardoo@gmail.com', 'Campus Coxim', 'Técnico em Informática', '1029-A', '333', '1° Periodo', '12345');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
