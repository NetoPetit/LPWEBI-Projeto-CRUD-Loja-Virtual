-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/05/2025 às 17:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojavirtual`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(16, 'livros'),
(17, 'brinquedos'),
(18, 'alimentos'),
(20, 'peças'),
(21, 'casa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `categoria_id`) VALUES
(7, 'boneca', 30.00, 17),
(8, 'arroz', 26.69, 18),
(9, 'palheta', 45.00, 20),
(10, 'hotweels', 12.99, 17),
(11, 'Fundação', 150.00, 16),
(12, 'bolacha', 2.50, 18),
(13, 'mesa', 240.00, 21);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `data_venda` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`id`, `data_venda`) VALUES
(1, '2025-05-15 19:25:42'),
(2, '2025-05-19 22:13:23'),
(3, '2025-05-19 22:18:26'),
(4, '2025-05-19 22:24:05'),
(5, '2025-05-19 22:26:57'),
(6, '2025-05-20 05:40:36'),
(7, '2025-05-20 05:46:48'),
(8, '2025-05-20 05:47:41'),
(9, '2025-05-20 06:11:58'),
(10, '2025-05-20 17:41:50'),
(11, '2025-05-20 12:43:45'),
(12, '2025-05-20 12:44:52'),
(13, '2025-05-20 13:44:22'),
(14, '2025-05-20 13:46:52'),
(15, '2025-05-20 14:25:56'),
(16, '2025-05-24 01:44:40'),
(18, '2025-05-24 13:53:00'),
(19, '2025-05-24 18:11:31'),
(20, '2025-05-24 18:17:41'),
(28, '2025-05-27 14:39:44'),
(29, '2025-05-27 14:45:18'),
(30, '2025-05-27 14:46:23'),
(31, '2025-05-27 14:49:45'),
(32, '2025-05-27 14:52:06'),
(33, '2025-05-27 14:57:41'),
(34, '2025-05-27 15:11:58'),
(35, '2025-05-27 15:15:28'),
(36, '2025-05-27 15:17:57');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas_itens`
--

CREATE TABLE `vendas_itens` (
  `id` int(11) NOT NULL,
  `venda_id` int(11) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendas_itens`
--

INSERT INTO `vendas_itens` (`id`, `venda_id`, `produto_id`, `quantidade`) VALUES
(1, 1, 11, 1),
(2, 2, 11, 1),
(3, 2, 10, 1),
(4, 2, 8, 1),
(5, 3, 11, 1),
(6, 3, 8, 1),
(7, 3, 7, 1),
(8, 4, 11, 1),
(9, 5, 10, 1),
(10, 6, 10, 1),
(11, 7, 12, 1),
(12, 8, 12, 1),
(13, 9, 8, 1),
(14, 10, 11, 1),
(15, 11, 10, 1),
(16, 12, 11, 1),
(17, 12, 7, 1),
(18, 13, 8, 1),
(19, 14, 9, 1),
(20, 15, 10, 1),
(21, 16, 8, 1),
(22, 16, 12, 7),
(23, 16, 9, 1),
(24, 16, 7, 1),
(26, 18, 7, 2),
(27, 19, 7, 3),
(28, 19, 11, 1),
(29, 20, 13, 1),
(37, 28, 8, 1),
(38, 28, 9, 1),
(39, 29, 7, 1),
(40, 29, 10, 1),
(41, 30, 12, 1),
(42, 31, 8, 1),
(43, 32, 12, 1),
(44, 33, 11, 1),
(45, 34, 7, 1),
(46, 35, 11, 2),
(47, 36, 7, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas_itens`
--
ALTER TABLE `vendas_itens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venda_id` (`venda_id`),
  ADD KEY `produto_id` (`produto_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `vendas_itens`
--
ALTER TABLE `vendas_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Restrições para tabelas `vendas_itens`
--
ALTER TABLE `vendas_itens`
  ADD CONSTRAINT `vendas_itens_ibfk_1` FOREIGN KEY (`venda_id`) REFERENCES `vendas` (`id`),
  ADD CONSTRAINT `vendas_itens_ibfk_2` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
