-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09-Out-2015 às 21:33
-- Versão do servidor: 5.6.24-0ubuntu2
-- PHP Version: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_padaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas`
--

CREATE TABLE IF NOT EXISTS `encomendas` (
`idEncomenda` int(11) NOT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `descricao` varchar(20) DEFAULT NULL,
  `dataPed` date DEFAULT NULL,
  `dataEntrega` date DEFAULT NULL,
  `total` decimal(30,2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `encomendas`
--

INSERT INTO `encomendas` (`idEncomenda`, `idProduto`, `descricao`, `dataPed`, `dataEntrega`, `total`) VALUES
(1, NULL, 'teste', NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, 3.50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
`idProduto` int(2) NOT NULL,
  `idForn` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `preco` decimal(20,2) NOT NULL,
  `descricao` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `validade` date NOT NULL,
  `unidade` varchar(10) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `idForn`, `qtde`, `preco`, `descricao`, `validade`, `unidade`, `foto`) VALUES
(1, 1, 1, 2.19, 'salgadinho fofura re', '2016-09-11', 'g', ''),
(2, 2, 1, 0.99, 'chiclete +qMUITO', '2023-10-29', 'g', ''),
(3, 3, 1, 7.60, 'sabão em pó alvodeix', '2017-01-31', 'kg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encomendas`
--
ALTER TABLE `encomendas`
 ADD PRIMARY KEY (`idEncomenda`), ADD KEY `idProduto` (`idProduto`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY (`idProduto`,`idForn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encomendas`
--
ALTER TABLE `encomendas`
MODIFY `idEncomenda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY `idProduto` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `encomendas`
--
ALTER TABLE `encomendas`
ADD CONSTRAINT `encomendas_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProduto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
