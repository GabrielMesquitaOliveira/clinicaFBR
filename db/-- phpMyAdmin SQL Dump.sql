-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/06/2024 às 23:35
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

CREATE DATABASE IF NOT EXISTS Clinica;

USE Clinica;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tech_clinic`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `idade` int(11) NOT NULL,
  `categoria` enum('Criança','Adolescente','Adulto','Idoso') NOT NULL,
  `demanda` enum('Medico','Populacao/Ongs','Espontanea') NOT NULL,
  `uso_medicamentos` tinyint(1) NOT NULL,
  `medicamentos` varchar(255) DEFAULT NULL,
  `tempo_medicacao` varchar(100) DEFAULT NULL,
  `quantidade_medicacao` varchar(100) DEFAULT NULL,
  `risco` tinyint(1) NOT NULL,
  `autorizacao` tinyint(1) NOT NULL,
  `historico_familiar` text NOT NULL,
  `relacoes_interpessoais` text NOT NULL,
  `doencas_genograma` text NOT NULL,
  `acompanhamento_rotina` text NOT NULL,
  `descricao_sessoes` text NOT NULL,
  `numero_sessao` int(11) NOT NULL,
  `tipo_declaracao` enum('Escola','Trabalho') NOT NULL,
  `encaminhamento` enum('Medico','Psiquiatra','CAPS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `endereco`, `cpf`, `idade`, `categoria`, `demanda`, `uso_medicamentos`, `medicamentos`, `tempo_medicacao`, `quantidade_medicacao`, `risco`, `autorizacao`, `historico_familiar`, `relacoes_interpessoais`, `doencas_genograma`, `acompanhamento_rotina`, `descricao_sessoes`, `numero_sessao`, `tipo_declaracao`, `encaminhamento`) VALUES
(1, 'paciente 01', '104 t 22', '0222255488', 14, 'Criança', 'Medico', 127, NULL, NULL, NULL, 127, 125, 'ok', 'ok', 'ok', 'ok', 'ok', 1, 'Escola', 'Medico'),
(3, 'Daniel Caixeta', 'CSB 04 Lote 05 Ed. Nícia', '65651828199', 47, 'Adulto', 'Medico', 1, 'Atenolol', '15', '1', 0, 0, 'lkasdkfsjdkfsjkdfsk', 'kcsdfksd', 'lçfsdfsd', 'kçcfsdçlsdç', '~flçsdflsdlç', 5, 'Trabalho', 'Medico'),
(4, 'Daniel Caixeta', 'CSB 04 Lote 05 Ed. Nícia', '65651828199', 47, 'Adulto', 'Medico', 1, 'Atenolol', '15', '1', 0, 0, 'lkasdkfsjdkfsjkdfsk', 'kcsdfksd', 'lçfsdfsd', 'kçcfsdçlsdç', '~flçsdflsdlç', 5, 'Trabalho', 'Medico'),
(5, 'joao', 'assdff', '011111111111', 20, 'Adulto', 'Medico', 0, '', '', '', 0, 0, 'ok', 'ok', 'ok', 'ok', 'ok', 2, 'Escola', 'Medico'),
(6, 'joao', 'assdff', '011111111111', 20, 'Adulto', 'Medico', 0, '', '', '', 0, 0, 'ok', 'ok', 'ok', 'ok', 'ok', 2, 'Escola', 'Medico'),
(7, 'gfggg', 'gregr', '000000000000', 22, 'Criança', 'Medico', 0, '', '', '', 0, 0, 'okl', 'kik', 'kik', 'kuiki', 'kik', 1, 'Escola', 'Medico'),
(8, 'grgerg', 'rgrgr', '111111111', 5, 'Criança', 'Medico', 0, '', '', '', 0, 1, 'jyhjt', 'tgreger', 'gferge', 'gergre', 'gergerg', 2, 'Escola', 'Medico'),
(9, 'grgerg', 'rgrgr', '111111111', 5, 'Criança', 'Medico', 0, '', '', '', 0, 1, 'jyhjt', 'tgreger', 'gferge', 'gergre', 'gergerg', 2, 'Escola', 'Medico'),
(10, 'wefcvwed', 'wedce', '5555555555558', 7, 'Criança', 'Medico', 0, '', '', '', 0, 1, 'cec', 'cece', 'cewwwef', 'weffe', 'fewfew', 5, 'Escola', 'Medico');

-- --------------------------------------------------------

--
-- Estrutura para tabela `relatorios`
--

CREATE TABLE `relatorios` (
  `id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `profissional` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessoes`
--

CREATE TABLE `sessoes` (
  `id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `numero_sessao` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_id` (`paciente_id`);

--
-- Índices de tabela `sessoes`
--
ALTER TABLE `sessoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_id` (`paciente_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `relatorios`
--
ALTER TABLE `relatorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sessoes`
--
ALTER TABLE `sessoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `relatorios`
--
ALTER TABLE `relatorios`
  ADD CONSTRAINT `relatorios_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`);

--
-- Restrições para tabelas `sessoes`
--
ALTER TABLE `sessoes`
  ADD CONSTRAINT `sessoes_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
