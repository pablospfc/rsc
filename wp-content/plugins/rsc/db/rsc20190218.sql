-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: rsc
-- ------------------------------------------------------
-- Server version	5.7.13-log

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
-- Table structure for table `rsc_faturamento`
--

DROP TABLE IF EXISTS `rsc_faturamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rsc_faturamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_faturamento`
--

LOCK TABLES `rsc_faturamento` WRITE;
/*!40000 ALTER TABLE `rsc_faturamento` DISABLE KEYS */;
INSERT INTO `rsc_faturamento` VALUES (1,'Até 100.000/mês'),(2,'Acima de 100.000 até 150.000/mês'),(3,'Até 25.000/mês'),(4,'De 25.000 até 50.000/mês'),(5,'De 50.000 até 100.000/mês'),(6,'De 100.000 até 150.000/mês'),(7,'De 150.000 até 200.000/mês'),(8,'Acima de 200.000/mês');
/*!40000 ALTER TABLE `rsc_faturamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_mensalidade`
--

DROP TABLE IF EXISTS `rsc_mensalidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rsc_mensalidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_empresa` int(255) DEFAULT NULL,
  `id_unidade` int(255) DEFAULT NULL,
  `id_faturamento` int(255) DEFAULT NULL,
  `socios_minimo` int(255) DEFAULT NULL,
  `socios_maximo` int(255) DEFAULT NULL,
  `funcionarios_minimo` int(255) DEFAULT NULL,
  `funcionarios_maximo` int(255) DEFAULT NULL,
  `mensalidade` decimal(65,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_unidade` (`id_unidade`),
  KEY `fk_tipo_empresa` (`id_tipo_empresa`),
  KEY `fk_faturamento` (`id_faturamento`),
  CONSTRAINT `fk_faturamento` FOREIGN KEY (`id_faturamento`) REFERENCES `rsc_faturamento` (`id`),
  CONSTRAINT `fk_tipo_empresa` FOREIGN KEY (`id_tipo_empresa`) REFERENCES `rsc_tipo_empresa` (`id`),
  CONSTRAINT `fk_unidade` FOREIGN KEY (`id_unidade`) REFERENCES `rsc_unidade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_mensalidade`
--

LOCK TABLES `rsc_mensalidade` WRITE;
/*!40000 ALTER TABLE `rsc_mensalidade` DISABLE KEYS */;
INSERT INTO `rsc_mensalidade` VALUES (1,1,1,1,1,2,1,5,289),(2,1,1,1,1,2,6,10,489),(3,1,1,1,1,2,11,15,589),(4,1,1,1,1,2,16,20,689),(5,1,1,1,3,3,1,5,318);
/*!40000 ALTER TABLE `rsc_mensalidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_tipo_empresa`
--

DROP TABLE IF EXISTS `rsc_tipo_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rsc_tipo_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_tipo_empresa`
--

LOCK TABLES `rsc_tipo_empresa` WRITE;
/*!40000 ALTER TABLE `rsc_tipo_empresa` DISABLE KEYS */;
INSERT INTO `rsc_tipo_empresa` VALUES (1,'Empresas de Comércio'),(2,'Empresas de Serviços/ Simples Nacional'),(3,'Empresas de Serviços / Lucro Presumido');
/*!40000 ALTER TABLE `rsc_tipo_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_unidade`
--

DROP TABLE IF EXISTS `rsc_unidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rsc_unidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_unidade`
--

LOCK TABLES `rsc_unidade` WRITE;
/*!40000 ALTER TABLE `rsc_unidade` DISABLE KEYS */;
INSERT INTO `rsc_unidade` VALUES (1,'São Luís'),(2,'São João dos Patos');
/*!40000 ALTER TABLE `rsc_unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'rsc'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-18  9:08:29
