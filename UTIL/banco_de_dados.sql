/*
SQLyog Community v13.1.4  (64 bit)
MySQL - 10.1.40-MariaDB : Database - bd_asilo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bd_asilo` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bd_asilo`;

/*Table structure for table `cadastro` */

DROP TABLE IF EXISTS `cadastro`;

CREATE TABLE `cadastro` (
  `id_cadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_idoso` varchar(64) DEFAULT NULL,
  `nascimento_idoso` date DEFAULT NULL,
  `aposentado` tinyint(1) DEFAULT NULL,
  `doenca` varchar(1000) DEFAULT NULL,
  `alimetacao` varchar(1000) DEFAULT NULL,
  `medicacao` varchar(1000) DEFAULT NULL,
  `alergia` varchar(1000) DEFAULT NULL,
  `obs` varchar(1000) DEFAULT NULL,
  `nome_responsavel` varchar(64) DEFAULT NULL,
  `nascimento_responsavel` date DEFAULT NULL,
  `whatsapp` tinyint(1) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `parentesco` varchar(64) DEFAULT NULL,
  `cidade` varchar(64) DEFAULT NULL,
  `tel_fixo` int(15) DEFAULT NULL,
  `tel_cel` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_cadastro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cadastro` */

/*Table structure for table `cidade` */

DROP TABLE IF EXISTS `cidade`;

CREATE TABLE `cidade` (
  `id_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `id_estado` int(11) DEFAULT NULL,
  `nome` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `fk_estado` (`id_estado`),
  CONSTRAINT `fk_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cidade` */

/*Table structure for table `conteudo_evento` */

DROP TABLE IF EXISTS `conteudo_evento`;

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
  `texto03` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_conteudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `conteudo_evento` */

/*Table structure for table `estado` */

DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sigla` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `estado` */

/*Table structure for table `evento` */

DROP TABLE IF EXISTS `evento`;

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `descricao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_conteudo_evento` int(11) NOT NULL,
  `total_arrecadado` float NOT NULL,
  `valor_ingresso` float NOT NULL,
  `hora_abertura` time NOT NULL,
  `hora_fechamento` time NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  PRIMARY KEY (`id_evento`),
  KEY `fk_conteudo_evento` (`id_conteudo_evento`),
  CONSTRAINT `fk_conteudo_evento` FOREIGN KEY (`id_conteudo_evento`) REFERENCES `conteudo_evento` (`id_conteudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `evento` */

/*Table structure for table `pessoa` */

DROP TABLE IF EXISTS `pessoa`;

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
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
  `obs` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_pessoa`),
  KEY `fk_telefone` (`id_telefone`),
  KEY `fk_responsavel` (`id_responsavel`),
  KEY `fk_cidade` (`id_cidade`),
  CONSTRAINT `fk_cidade` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id_cidade`),
  CONSTRAINT `fk_responsavel` FOREIGN KEY (`id_responsavel`) REFERENCES `pessoa` (`id_pessoa`),
  CONSTRAINT `fk_telefone` FOREIGN KEY (`id_telefone`) REFERENCES `telefone` (`id_telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pessoa` */

insert  into `pessoa`(`id_pessoa`,`id_responsavel`,`id_telefone`,`nome`,`email`,`data_nasci`,`id_cidade`,`rua`,`bairro`,`numero`,`cep`,`obs`) values 
(1,NULL,NULL,'Fernando',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(2,NULL,NULL,'Zaqueu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(10,NULL,NULL,'Vinícius',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(11,NULL,NULL,'Gustavo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(19,NULL,NULL,'qweqwewqe',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(20,NULL,NULL,'qweqwewqe',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(21,NULL,NULL,'ahullll',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(22,NULL,NULL,'daddsf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(23,NULL,NULL,'daddsf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(24,NULL,NULL,'daddsf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(25,NULL,NULL,'fwfwqrq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `prontuario` */

DROP TABLE IF EXISTS `prontuario`;

CREATE TABLE `prontuario` (
  `id_prontuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) DEFAULT NULL,
  `tipo_sanguineo` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `obs_alimentacao` text COLLATE utf8_unicode_ci,
  `obs_doenca` text COLLATE utf8_unicode_ci,
  `obs_medicacao` text COLLATE utf8_unicode_ci,
  `obs_alergia` text COLLATE utf8_unicode_ci,
  `obs_geral` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_prontuario`),
  KEY `fk_pessoa` (`id_pessoa`),
  CONSTRAINT `fk_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `prontuario` */

/*Table structure for table `relacao_tipodepessoa_pessoa` */

DROP TABLE IF EXISTS `relacao_tipodepessoa_pessoa`;

CREATE TABLE `relacao_tipodepessoa_pessoa` (
  `id_tipo_pessoa` int(11) DEFAULT NULL,
  `id_pessoa` int(11) DEFAULT NULL,
  KEY `fk_tipo_pessoa` (`id_tipo_pessoa`),
  KEY `fk_pessoa` (`id_pessoa`) USING BTREE,
  CONSTRAINT `fk_pessoa2` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`),
  CONSTRAINT `fk_tipo_pessoa` FOREIGN KEY (`id_tipo_pessoa`) REFERENCES `tipo_pessoa` (`id_tipo_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `relacao_tipodepessoa_pessoa` */

/*Table structure for table `telefone` */

DROP TABLE IF EXISTS `telefone`;

CREATE TABLE `telefone` (
  `id_telefone` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` tinyint(1) DEFAULT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_telefone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `telefone` */

/*Table structure for table `tipo_pessoa` */

DROP TABLE IF EXISTS `tipo_pessoa`;

CREATE TABLE `tipo_pessoa` (
  `id_tipo_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_tipo_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tipo_pessoa` */

insert  into `tipo_pessoa`(`id_tipo_pessoa`,`descricao`) values 
(1,'Paciente'),
(2,'Colaborador'),
(3,'Gerência'),
(4,'Voluntário');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
