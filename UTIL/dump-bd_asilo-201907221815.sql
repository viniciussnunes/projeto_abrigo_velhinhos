-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: bd_asilo
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.40-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro` (
  `id_cadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_idoso` varchar(64) DEFAULT NULL,
  `nascimento_idoso` varchar(10) DEFAULT NULL,
  `aposentado` tinyint(1) DEFAULT NULL,
  `doenca` varchar(1000) DEFAULT NULL,
  `alimentacao` varchar(1000) DEFAULT NULL,
  `medicacao` varchar(1000) DEFAULT NULL,
  `alergia` varchar(1000) DEFAULT NULL,
  `obs` varchar(1000) DEFAULT NULL,
  `nome_responsavel` varchar(64) DEFAULT NULL,
  `nascimento_responsavel` varchar(10) DEFAULT NULL,
  `whatsapp` tinyint(1) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `parentesco` varchar(64) DEFAULT NULL,
  `cidade` varchar(64) DEFAULT NULL,
  `tel_fixo` varchar(14) DEFAULT NULL,
  `tel_cel` varchar(17) DEFAULT NULL,
  PRIMARY KEY (`id_cadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro`
--

LOCK TABLES `cadastro` WRITE;
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
INSERT INTO `cadastro` VALUES (5,'Gustavo4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'e3424234',NULL,1,NULL,NULL,NULL,NULL,NULL,'wrferger',NULL,0,'gustavo_gonzaga@estudante.sc.senai.br','57575675765','Tubarão','(48) 9848-2807','(56) 7.5756-7575'),(7,'teste completo','12/31/2312',0,'doenca','alimentacao','medicacao','alergia','obs','Gustavo Pacheco','12/12/1221',0,'dougdougtbb@gmail.com','tio','Tubarão','(48) 9848-2807','(56) 7.5756-7575');
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticia`
--

LOCK TABLES `noticia` WRITE;
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voluntario`
--

DROP TABLE IF EXISTS `voluntario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voluntario` (
  `id_voluntario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `tel_cel` varchar(20) NOT NULL,
  `whatsapp` tinyint(4) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `habilidades` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_voluntario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voluntario`
--

LOCK TABLES `voluntario` WRITE;
/*!40000 ALTER TABLE `voluntario` DISABLE KEYS */;
INSERT INTO `voluntario` VALUES (1,'sdfdsfds','45645645',1,'sadasdsadsad','sadsadsadasd'),(2,'asdsada','(56) 7.5756-7575',0,'gustavo_gonzaga@estudante.sc.senai.br','sadad'),(3,'asdsadasd','(56) 7.5756-7575',0,'gustavo_gonzaga@estudante.sc.senai.br',NULL);
/*!40000 ALTER TABLE `voluntario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bd_asilo'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-22 18:15:36
