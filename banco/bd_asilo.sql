-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jun-2019 às 22:12
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste007`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id_cidade` int(11) NOT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `nome` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo_evento`
--

CREATE TABLE `conteudo_evento` (
  `id_conteudo` int(11) NOT NULL,
  `titulo01` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `titulo02` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `titulo03` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `img01` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `img02` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `img03` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `texto01` text COLLATE utf8_unicode_ci NOT NULL,
  `texto02` text COLLATE utf8_unicode_ci NOT NULL,
  `texto03` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sigla` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `descricao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_conteudo_evento` int(11) NOT NULL,
  `total_arrecadado` float NOT NULL,
  `valor_ingresso` float NOT NULL,
  `hora_abertura` time NOT NULL,
  `hora_fechamento` time NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `id_responsavel` int(11) DEFAULT NULL,
  `id_telefone` int(11) DEFAULT NULL,
  `nome` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_nasci` date DEFAULT NULL,
  `id_cidade` int(11) DEFAULT NULL,
  `rua` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `obs` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `id_responsavel`, `id_telefone`, `nome`, `email`, `data_nasci`, `id_cidade`, `rua`, `bairro`, `numero`, `cep`, `obs`) VALUES
(1, NULL, NULL, 'Fernando', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `id_prontuario` int(11) NOT NULL,
  `id_pessoa` int(11) DEFAULT NULL,
  `tipo_sanguineo` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `obs_alimentacao` text COLLATE utf8_unicode_ci,
  `obs_doenca` text COLLATE utf8_unicode_ci,
  `obs_medicacao` text COLLATE utf8_unicode_ci,
  `obs_alergia` text COLLATE utf8_unicode_ci,
  `obs_geral` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacao_tipodepessoa_pessoa`
--

CREATE TABLE `relacao_tipodepessoa_pessoa` (
  `id_tipo_pessoa` int(11) DEFAULT NULL,
  `id_pessoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `id_telefone` int(11) NOT NULL,
  `numero` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` tinyint(1) DEFAULT NULL,
  `descricao` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_pessoa`
--

CREATE TABLE `tipo_pessoa` (
  `id_tipo_pessoa` int(11) NOT NULL,
  `descricao` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id_cidade`),
  ADD KEY `fk_estado` (`id_estado`);

--
-- Indexes for table `conteudo_evento`
--
ALTER TABLE `conteudo_evento`
  ADD PRIMARY KEY (`id_conteudo`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `fk_conteudo_evento` (`id_conteudo_evento`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`),
  ADD KEY `fk_telefone` (`id_telefone`),
  ADD KEY `fk_responsavel` (`id_responsavel`),
  ADD KEY `fk_cidade` (`id_cidade`);

--
-- Indexes for table `prontuario`
--
ALTER TABLE `prontuario`
  ADD PRIMARY KEY (`id_prontuario`),
  ADD KEY `fk_pessoa` (`id_pessoa`);

--
-- Indexes for table `relacao_tipodepessoa_pessoa`
--
ALTER TABLE `relacao_tipodepessoa_pessoa`
  ADD KEY `fk_tipo_pessoa` (`id_tipo_pessoa`),
  ADD KEY `fk_pessoa` (`id_pessoa`) USING BTREE;

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`id_telefone`);

--
-- Indexes for table `tipo_pessoa`
--
ALTER TABLE `tipo_pessoa`
  ADD PRIMARY KEY (`id_tipo_pessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id_cidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prontuario`
--
ALTER TABLE `prontuario`
  MODIFY `id_prontuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `id_telefone` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_pessoa`
--
ALTER TABLE `tipo_pessoa`
  MODIFY `id_tipo_pessoa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Limitadores para a tabela `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `fk_conteudo_evento` FOREIGN KEY (`id_conteudo_evento`) REFERENCES `conteudo_evento` (`id_conteudo`);

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `fk_cidade` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id_cidade`),
  ADD CONSTRAINT `fk_responsavel` FOREIGN KEY (`id_responsavel`) REFERENCES `pessoa` (`id_pessoa`),
  ADD CONSTRAINT `fk_telefone` FOREIGN KEY (`id_telefone`) REFERENCES `telefone` (`id_telefone`);

--
-- Limitadores para a tabela `prontuario`
--
ALTER TABLE `prontuario`
  ADD CONSTRAINT `fk_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`);

--
-- Limitadores para a tabela `relacao_tipodepessoa_pessoa`
--
ALTER TABLE `relacao_tipodepessoa_pessoa`
  ADD CONSTRAINT `fk_pessoa2` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`),
  ADD CONSTRAINT `fk_tipo_pessoa` FOREIGN KEY (`id_tipo_pessoa`) REFERENCES `tipo_pessoa` (`id_tipo_pessoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
