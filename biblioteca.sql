-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 05-Jun-2022 às 04:16
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `numero_paginas` int(11) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `editora` varchar(60) DEFAULT NULL,
  `ano_lancamento` int(11) DEFAULT NULL,
  `autor` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `descricao`, `numero_paginas`, `genero`, `editora`, `ano_lancamento`, `autor`) VALUES
(3, 'Manga mushoku no tenseii', 'manga de acao e magia', 993, 'ação e magia', 'TOKYO', 2015, 'ITADORI'),
(5, 'Harry Potter', 'Filme do ano', 655, 'Ação', '', 2001, 'Mac Laren');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `nome` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `tipo`, `nome`) VALUES
(7, 'admin@gmail.com', '123', 'admin', 'Administrador');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
