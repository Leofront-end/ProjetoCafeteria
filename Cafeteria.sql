-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/12/2024 às 13:42
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Cafeteria`
--
CREATE DATABASE IF NOT EXISTS `Cafeteria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Cafeteria`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Gestao`
--

DROP TABLE IF EXISTS `Gestao`;
CREATE TABLE `Gestao` (
  `id` int(100) NOT NULL,
  `Nome_cafeteria` varchar(150) NOT NULL,
  `Descricao_cafeteria` varchar(150) NOT NULL,
  `Categoria_cafeteria` varchar(150) NOT NULL,
  `NoEstoque_cafeteria` varchar(150) NOT NULL,
  `Fornecedor_cafeteria` varchar(150) NOT NULL,
  `DataDeCadastro_cafeteria` varchar(150) NOT NULL,
  `Preco_cafeteria` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Gestao`
--
ALTER TABLE `Gestao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Gestao`
--
ALTER TABLE `Gestao`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
