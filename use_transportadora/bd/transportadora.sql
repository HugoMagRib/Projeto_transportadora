-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/04/2016 às 21:18
-- Versão do servidor: 10.1.8-MariaDB
-- Versão do PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `transportadora`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `encomenda`
--

CREATE TABLE `encomenda` (
  `idencomenda` int(11) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `origem` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `datapostagem` date NOT NULL,
  `dataentrega` date NOT NULL,
  `destino` varchar(255) NOT NULL,
  `entregador` varchar(255) NOT NULL,
  `situacao` varchar(255) NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `encomenda`
--

INSERT INTO `encomenda` (`idencomenda`, `cliente`, `origem`, `info`, `datapostagem`, `dataentrega`, `destino`, `entregador`, `situacao`, `obs`) VALUES
(4, '', 'Fortaleza', 'teste 2', '1111-11-11', '0011-11-11', 'Fortaleza', 'entregador1', 'Postado', 'obs'),
(5, '', 'Fortaleza', 'teste 3', '0111-11-11', '0111-11-11', '11111', '11111', 'Postado', 'dsffsd'),
(6, 'chico', 'fortaleza', 'caixa preta', '0111-11-11', '0011-11-11', 'fortaleza', 'entregador1', 'Postado', 'asd'),
(16, 'hugo', 'fortaleza', 'huehauahe', '1993-06-17', '1110-11-20', 'fortaleza', 'entregador1', 'Postado', 'dfsdfsd'),
(20, 'hugo', 'fortaleza', 'sadsad', '0000-00-00', '1111-11-11', 'fortaleza', 'entregador1', 'Postado', '12321312312312312312');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `senha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `nome`, `senha`) VALUES
(1, 'funcionario1', 123456),
(2, 'funcionario2', 123456);

-- --------------------------------------------------------

--
-- Estrutura para tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `email` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `coleta` varchar(255) NOT NULL,
  `destino` varchar(255) NOT NULL,
  `tipoentrega` varchar(255) NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `orcamento`
--

INSERT INTO `orcamento` (`email`, `quantidade`, `coleta`, `destino`, `tipoentrega`, `obs`) VALUES
('admin@admin.com', 5, 'fortaleza', 'fortaleza', 'medio', 'asas'),
('admin@admin.com', 5, 'Fortaleza', 'Fortaleza', 'medio', 'asdasdsadas'),
('hugomag35@ymail.com', 1, 'Fortaleza', 'Fortaleza', 'caro', 'asasasa');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `encomenda`
--
ALTER TABLE `encomenda`
  ADD PRIMARY KEY (`idencomenda`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `encomenda`
--
ALTER TABLE `encomenda`
  MODIFY `idencomenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
