-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Abr-2018 às 14:55
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fisiopar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `CEP` varchar(20) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `Cidade` int(11) DEFAULT NULL,
  `Logradouro` varchar(55) DEFAULT NULL,
  `Numero` int(11) DEFAULT NULL,
  `Bairro` varchar(55) DEFAULT NULL,
  `Complemento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `etnia`
--

CREATE TABLE `etnia` (
  `ID` int(11) NOT NULL,
  `TIPO` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `etnia`
--

INSERT INTO `etnia` (`ID`, `TIPO`) VALUES
(1, 'Branca'),
(2, 'Preta'),
(3, 'Parda'),
(4, 'Amarela'),
(5, 'Indígena');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `sexo` int(11) DEFAULT NULL,
  `etnia` int(11) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `tel_prim` int(20) DEFAULT NULL,
  `tel_sec` int(20) DEFAULT NULL,
  `endereco` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `est_civ` varchar(50) DEFAULT NULL,
  `cns` varchar(55) DEFAULT NULL,
  `valid_cart` date DEFAULT NULL,
  `nome_mae` varchar(50) DEFAULT NULL,
  `nome_pai` varchar(50) DEFAULT NULL,
  `convenio` varchar(55) DEFAULT NULL,
  `dat_hr` datetime DEFAULT NULL,
  `observacoes` varchar(50000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sexo`
--

CREATE TABLE `sexo` (
  `ID` int(11) NOT NULL,
  `TIPO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sexo`
--

INSERT INTO `sexo` (`ID`, `TIPO`) VALUES
(1, 'Feminino'),
(2, 'Masculino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etnia`
--
ALTER TABLE `etnia`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `endereco` (`endereco`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `etnia` (`etnia`);

--
-- Indexes for table `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`id`),
  ADD CONSTRAINT `paciente_ibfk_2` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`ID`),
  ADD CONSTRAINT `paciente_ibfk_3` FOREIGN KEY (`etnia`) REFERENCES `etnia` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
