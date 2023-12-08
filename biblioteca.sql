-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2023 às 17:31
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

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
  `nome` text NOT NULL,
  `autor` text NOT NULL,
  `secao` text NOT NULL,
  `codigo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `nome`, `autor`, `secao`, `codigo`) VALUES
(1, 'A Cabana', 'WILLIAM P. YOUNG', 'Suspense', '8404'),
(2, 'diego', 'WILLIAM P. YOUNG', 'ação', '2323'),
(3, 'banana', 'WILLIAM P. YOUNG', 'Suspense', '8404'),
(4, 'norte', 'WILLIAM P. YOUNG', 'Suspense', '2323');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `livro` varchar(255) NOT NULL,
  `data_emprestimo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`id`, `nome`, `livro`, `data_emprestimo`) VALUES
(1, 'dudao', 'a busca', '2023-12-13'),
(2, 'Kauã', 'a cabana', '2023-11-24'),
(3, 'Kauã', 'a cabana', '2023-11-16'),
(4, 'caio', 'a busca', '2023-12-01'),
(5, 'garoto1', 'diario', '2023-12-20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nomecompleto` varchar(255) NOT NULL,
  `nomeusuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `niveis_permissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nomecompleto`, `nomeusuario`, `email`, `senha`, `endereco`, `cep`, `niveis_permissao`) VALUES
(1, 'Kauã Aparecido da Silva', 'Kauã silva', 'kaua60033@gmail.com', 'Kau@silv', 'rua padre anchieta', '19707048', 1),
(2, 'Maria Eduarda Akiyama de Campos', 'duda', 'duda.akyiama@gmail.com', '171222', 'rua marechal costa e silva', '19700130', 2),
(5, 'ale', 'ale1', 'ale@gmail.com', '123', 'rua d ela', '19700000', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
