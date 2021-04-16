-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Abr-2021 às 02:55
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testecrud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmedicos`
--

CREATE TABLE `tbmedicos` (
  `medId` int(11) NOT NULL,
  `medNome` varchar(100) NOT NULL,
  `medTelefone` varchar(15) NOT NULL,
  `medCRM` varchar(13) NOT NULL,
  `medEspec1` varchar(30) NOT NULL,
  `medEspec2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbmedicos`
--

INSERT INTO `tbmedicos` (`medId`, `medNome`, `medTelefone`, `medCRM`, `medEspec1`, `medEspec2`) VALUES
(7, 'Leonardo Rocha', '(12) 98103-4326', 'CRM/MA 121212', 'CIRURGIA PEDIÁTRICA', 'CIRURGIA VASCULAR');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbmedicos`
--
ALTER TABLE `tbmedicos`
  ADD PRIMARY KEY (`medId`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbmedicos`
--
ALTER TABLE `tbmedicos`
  MODIFY `medId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
