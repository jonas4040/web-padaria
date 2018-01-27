-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 31-Out-2015 às 15:46
-- Versão do servidor: 5.6.24-0ubuntu2
-- PHP Version: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `padaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas`
--

CREATE TABLE IF NOT EXISTS `encomendas` (
`id_encomenda` int(11) NOT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `descricao` varchar(20) DEFAULT NULL,
  `data_ped` date DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  `total` decimal(30,2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `encomendas`
--

INSERT INTO `encomendas` (`id_encomenda`, `idProduto`, `descricao`, `data_ped`, `data_entrega`, `total`) VALUES
(1, NULL, 'teste', NULL, NULL, NULL),
(2, NULL, 'asdf', NULL, NULL, 3.50),
(3, NULL, 'a', NULL, NULL, NULL),
(4, NULL, 'b', NULL, NULL, NULL),
(5, NULL, 'c', NULL, NULL, NULL),
(6, NULL, 'd', NULL, NULL, NULL),
(7, NULL, 'e', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
`id_funcionario` int(2) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `admin` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE IF NOT EXISTS `mensagens` (
`id_mensagem` int(3) NOT NULL,
  `nome` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagensf`
--

CREATE TABLE IF NOT EXISTS `mensagensf` (
`id_mensagem` int(11) NOT NULL,
  `nome_fantasia` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `mensagem` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
`id_produto` int(2) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `descricao` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_tipo` int(3) NOT NULL,
  `qtde` int(11) NOT NULL,
  `preco` decimal(20,2) NOT NULL,
  `validade` date NOT NULL,
  `unidade` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `id_fornecedor`, `descricao`, `id_tipo`, `qtde`, `preco`, `validade`, `unidade`) VALUES
(5, 3, 'tijolo azul', 0, 2, 5.00, '1980-08-19', 'k');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
`id_tipo` int(3) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `imagem` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
`id_venda` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encomendas`
--
ALTER TABLE `encomendas`
 ADD PRIMARY KEY (`id_encomenda`), ADD KEY `idProduto` (`idProduto`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
 ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
 ADD PRIMARY KEY (`id_mensagem`);

--
-- Indexes for table `mensagensf`
--
ALTER TABLE `mensagensf`
 ADD PRIMARY KEY (`id_mensagem`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY (`id_produto`,`id_fornecedor`);

--
-- Indexes for table `tipos`
--
ALTER TABLE `tipos`
 ADD PRIMARY KEY (`id_tipo`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
 ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encomendas`
--
ALTER TABLE `encomendas`
MODIFY `id_encomenda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
MODIFY `id_funcionario` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
MODIFY `id_mensagem` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mensagensf`
--
ALTER TABLE `mensagensf`
MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY `id_produto` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tipos`
--
ALTER TABLE `tipos`
MODIFY `id_tipo` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
