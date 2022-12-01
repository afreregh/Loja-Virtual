-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Nov-2022 às 19:11
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'Andre O. Frere', 'aoliveirafrere@gmail.com', 'aoliveirafrere@gmail.com', '$2y$10$pPEVFlsNVXfEb7UcCQTR..Ia9VzhAjIA/DM7ZVF5Jb3RzjU3izOk.'),
(2, 'Andre O. Frere', 'aoliveirafrere@gmail.com', 'aoliveirafrere@gmail.com', '$2y$10$Gc8JSqeUy8JktLNMgNSRkOTIn.F4luzcl3X.cUZNfZ52nHBhBRHRW'),
(3, 'Andre O. Frere', 'aoliveirafrere@gmail.com', 'aoliveirafrere@gmail.com', '$2y$10$FmeHDvXPddXeE0OqTjyN7.lCsFCJ/LPNtlgc1wu4lCK0pFLV3pJuO'),
(4, 'Érica S. P. Frere', 'ericaspfrere@gmail.com', 'ericaspfrere@gmail.com', '$2y$10$HTQESH6WkUUGdupD0DYHtu1C5IsLxxj6L6gr6I9l7o6OY38cfU4Mi'),
(5, 'Fernando Dias', 'fernandod@gmail.com', 'fernandod@gmail.com', '$2y$10$leP17qQTeNqTu.hG/Pl53OSbiq12y77gRHeD3I6G9NiHkkN13XLmC');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
