-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Ago-2017 às 16:52
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invitefut`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `confirmar_senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `confirmar_senha`) VALUES
(16, 'Diego', 'diego@diego.com', 'diego123', NULL),
(17, 'Fabiano', 'fabiano@fabiano.com', 'fabiano123', NULL),
(18, 'Gustavo', 'gustavo@gustavo.com', 'gustavo123', NULL),
(19, 'Joao', 'joao@joao.com', 'joao123', NULL),
(20, 'Vitor', 'vitor@vitor.com', 'vitor123', NULL),
(21, 'Bruno', 'bruno@bruno', 'bruno123', NULL),
(22, 'Carolos', 'carlos@carlos.com', 'carlos123', NULL),
(23, 'Ramon', 'ramon@ramon.com', '123456', NULL),
(25, 'Teste', 'teste@teste.com', 'teste123', NULL),
(26, 'Teste2', 'teste2@teste.com', 'teste2123', NULL),
(27, 'Teste3', 'teste3@teste.com', 'teste3123', NULL),
(28, 'teste4', 'teste4@teste4.com', 'teste4123', NULL),
(38, 'Monet & Renoir', 'jorge@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(40, 'Monet & Renoir', 'bruno@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
