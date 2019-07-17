/*
SQLyog Community v13.1.4  (64 bit)
MySQL - 10.1.40-MariaDB : Database - bd_asilo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

DROP DATABASE `bd_asilo`;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bd_asilo` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bd_asilo`;

/*Table structure for table `cadastro` */

DROP TABLE IF EXISTS `cadastro`;

CREATE TABLE `cadastro`
(
  `id_cadastro` int
(11) NOT NULL AUTO_INCREMENT,
  `nome_idoso` varchar
(64) DEFAULT NULL,
  `nascimento_idoso` varchar
(10) DEFAULT NULL,
  `aposentado` tinyint
(1) DEFAULT NULL,
  `doenca` varchar
(1000) DEFAULT NULL,
  `alimetacao` varchar
(1000) DEFAULT NULL,
  `medicacao` varchar
(1000) DEFAULT NULL,
  `alergia` varchar
(1000) DEFAULT NULL,
  `obs` varchar
(1000) DEFAULT NULL,
  `nome_responsavel` varchar
(64) DEFAULT NULL,
  `nascimento_responsavel` varchar
(10) DEFAULT NULL,
  `whatsapp` tinyint
(1) DEFAULT NULL,
  `email` varchar
(64) DEFAULT NULL,
  `parentesco` varchar
(64) DEFAULT NULL,
  `cidade` varchar
(64) DEFAULT NULL,
  `tel_fixo` varchar
(14) DEFAULT NULL,
  `tel_cel` varchar
(17) DEFAULT NULL,
  PRIMARY KEY
(`id_cadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `cadastro` */

insert  into `cadastro`(`
id_cadastro`,`nome_idoso
`,`nascimento_idoso`,`aposentado`,`doenca`,`alimetacao`,`medicacao`,`alergia`,`obs`,`nome_responsavel`,`nascimento_responsavel`,`whatsapp`,`email`,`parentesco`,`cidade`,`tel_fixo`,`tel_cel`) values
(1,'e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(2,'sd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(3,'123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(4,'dee',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(5,'224234','24/22/3242',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),
(6,'24234242342','24/24/2423',1,'2423424234','34242424','234244','23423424','22423424','2324234234','24/24/2424',0,'4242342@qweqe.cc','12312313','1312313133','(24) 2342-4242','(23) 4.2442-4242'),
(7,'Fernando Issao Murate','11/12/1974',0,'Doença','Alimentação','Medicação','Alergia','Observações','João Pedro Vargas','12/11/1980',1,'fernando.murate@bol.com.br','Pai','Tubarão','(48) 3246-5666','111'),
(8,'34345',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'fernando.murate@bol.com.br',NULL,NULL,NULL,'(35) 3.5345-3454'),
(9,'23234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'fernando.murate@bol.com.br',NULL,NULL,NULL,'(23) 4.2424-2342'),
(10,'ewrwerwr',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),
(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),
(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),
(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),
(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),
(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),
(16,'23424243',NULL,1,NULL,NULL,NULL,NULL,NULL,'2423424',NULL,0,NULL,'423424234','2342424',NULL,'(23) 4.234'),
(17,'23424243',NULL,1,NULL,NULL,NULL,NULL,NULL,'2423424',NULL,0,NULL,'423424234','2342424',NULL,'(23) 4.234'),
(18,'12123123',NULL,1,NULL,NULL,NULL,NULL,NULL,'12312313',NULL,0,NULL,'213','3131231',NULL,'(23) 1.2312-3123');

/*Table structure for table `noticia` */

DROP TABLE IF EXISTS `noticia`;

CREATE TABLE `noticia`
(
  `id_noticia` int
(11) NOT NULL AUTO_INCREMENT,
  `conteudo` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY
(`id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `noticia` */

insert  into `noticia`(`
id_noticia`,`conteudo
`,`titulo`) values
(1,'<p>2</p>','2'),
(2,'<ol><li><b><span style=\"font-family: &quot;Arial Black&quot;;\">Teste<span style=\"background-color: rgb(0, 0, 255);\">&nbsp;teste&nbsp; &nbsp;&nbsp;</span></span></b></li></ol><h1><ol><li><b><span style=\"font-family: &quot;Arial Black&quot;;\"><span style=\"background-color: rgb(0, 0, 255);\">ter</span></span></b></li></ol></h1><ol><li><b><span style=\"font-family: &quot;Arial Black&quot;;\"><span style=\"background-color: rgb(0, 0, 255);\"><br></span></span></b></li></ol>','teste');

/*Table structure for table `voluntario` */

DROP TABLE IF EXISTS `voluntario`;

CREATE TABLE `voluntario`
(
  `id_voluntario` int
(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar
(100) NOT NULL,
  `tel_fixo` varchar
(20) NOT NULL,
  `tel_cel` varchar
(20) NOT NULL,
  `whatsapp` tinyint
(4) NOT NULL,
  PRIMARY KEY
(`id_voluntario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `voluntario` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
