-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/04/2024 às 02:24
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
-- Banco de dados: `tcc24`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `mensagem` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `user_id`, `mensagem`, `timestamp`) VALUES
(2, 7, 'ass', '2024-04-09 00:07:48'),
(3, 7, 'sasa', '2024-04-09 00:07:49'),
(4, 7, 'dsdsd', '2024-04-09 00:11:00'),
(5, 7, 'aaaaaaaaaaaaaaaa', '2024-04-09 00:11:07'),
(6, 7, 'as', '2024-04-09 00:12:05'),
(7, 7, 'aa', '2024-04-09 00:12:06'),
(8, 8, 'oi', '2024-04-09 00:19:41'),
(9, 8, 'oiiiiiiiiiiiiiiiiii', '2024-04-09 00:21:33'),
(10, 8, 'oi\r\n', '2024-04-09 00:23:17'),
(11, 8, 'asas', '2024-04-09 00:23:19');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `senha`, `nome`, `email`, `data_criacao`) VALUES
(8, 'Kalidade', '$2y$10$FxsL7xBJHrg9949UMUyH8Oay591c3EO18v9MMIKlFweynrq3Aq/pW', NULL, 'cauagalvao30900@gmail.com', '2024-04-09 00:15:05');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
