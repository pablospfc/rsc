-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: rsc
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (1,'Unknown column \'lastEventDate\' in \'field list\' (SQL: update `rsc_pagamento` set `id_status` = 3, `lastEventDate` = 2019-04-04T16:49:38.000-03:00, `codigo_transacao` = 33713E69-D080-46DA-8A43-54825B9E0878 where `id_contrato` = 3)','2019-04-04 20:47:23','2019-04-04 20:47:23'),(2,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 32587572, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:48:56 where `id` = 4)','2019-04-10 18:48:56','2019-04-10 18:48:56'),(3,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 32587572, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:53:09 where `id` = 4)','2019-04-10 18:53:09','2019-04-10 18:53:09'),(4,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 32587572s, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:58:57 where `id` = 4)','2019-04-10 18:58:57','2019-04-10 18:58:57'),(5,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:59:45 where `id` = 4)','2019-04-10 18:59:45','2019-04-10 18:59:45'),(6,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 16:01:27 where `id` = 4)','2019-04-10 19:01:27','2019-04-10 19:01:27'),(7,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 16:04:41 where `id` = 4)','2019-04-10 19:04:42','2019-04-10 19:04:42'),(8,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 16:06:02 where `id` = 4)','2019-04-10 19:06:02','2019-04-10 19:06:02');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_cliente`
--

DROP TABLE IF EXISTS `rsc_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `id_estado_civil` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `rg` varchar(45) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `orgao_rg` varchar(45) DEFAULT NULL,
  `data_emissao_rg` date DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `ddd` int(11) DEFAULT NULL,
  `telefone_residencial` varchar(9) DEFAULT NULL,
  `telefone_celular` varchar(9) NOT NULL,
  `rua` varchar(200) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_idx` (`id_usuario`),
  KEY `fk_estado_civil_idx` (`id_estado_civil`),
  KEY `fk_sexo_idx` (`id_sexo`),
  CONSTRAINT `fk_estado_civil` FOREIGN KEY (`id_estado_civil`) REFERENCES `rsc_estado_civil` (`id`),
  CONSTRAINT `fk_sexo` FOREIGN KEY (`id_sexo`) REFERENCES `rsc_genero` (`id`),
  CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `rsc_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_cliente`
--

LOCK TABLES `rsc_cliente` WRITE;
/*!40000 ALTER TABLE `rsc_cliente` DISABLE KEYS */;
INSERT INTO `rsc_cliente` VALUES (1,3,2,2,'Maria de la Cruz Garcia Luz','0392999239','91425057047','SSP-SP','1995-03-20','1994-04-20','maria_cruz@sandbox.pagseguro.com.br',11,'34524562','983451067','Avenida 24 de Agosto',244,'08421-510','Conjunto Habitacional Fazenda do Carmo','conjunto','São Paulo','SP','2019-03-29 13:20:16','2019-03-29 13:20:16'),(2,4,2,2,'Maria de la Cruz Garcia Luz','0392999239','91425057047','SSP-SP','1995-03-20','1994-04-20','maria_cruz@sandbox.pagseguro.com.br',11,'34524562','983451067','Avenida 24 de Agosto',244,'08421-510','Conjunto Habitacional Fazenda do Carmo','conjunto','São Paulo','SP','2019-04-03 20:36:50','2019-04-03 20:36:50'),(4,5,1,2,'Claudio Pablo Silva Santos','0309447820063','04172473385','SSP-MA','2007-06-14','1990-07-12','claudiopablosilva@sandbox.pagseguro.com.br',98,'325875722','988197084','Avenida Santos Dumont',1,'65046-660','Anil','residencial canaã','São Luís','MA','2019-04-04 19:51:16','2019-04-10 19:36:07');
/*!40000 ALTER TABLE `rsc_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_contrato`
--

DROP TABLE IF EXISTS `rsc_contrato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_contrato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `id_mensalidade` int(11) DEFAULT NULL,
  `codigo_assinatura` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cliente_idx` (`id_cliente`),
  KEY `fk_plano_idx` (`id_mensalidade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_contrato`
--

LOCK TABLES `rsc_contrato` WRITE;
/*!40000 ALTER TABLE `rsc_contrato` DISABLE KEYS */;
INSERT INTO `rsc_contrato` VALUES (1,1,41,'EDC54B48ADADD8CAA4A25F98BF1A9C4A','2019-03-29 13:20:54','2019-03-29 13:22:09'),(3,4,1,'4BD71CAB5959C6988468BF9BE5038722','2019-04-04 19:51:32','2019-04-04 19:52:03');
/*!40000 ALTER TABLE `rsc_contrato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_estado_civil`
--

DROP TABLE IF EXISTS `rsc_estado_civil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_estado_civil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_estado_civil`
--

LOCK TABLES `rsc_estado_civil` WRITE;
/*!40000 ALTER TABLE `rsc_estado_civil` DISABLE KEYS */;
INSERT INTO `rsc_estado_civil` VALUES (1,'Solteiro(a)'),(2,'Casado(a)'),(3,'Divorciado(a)'),(4,'Viúvo(a)');
/*!40000 ALTER TABLE `rsc_estado_civil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_etapa_cadastro`
--

DROP TABLE IF EXISTS `rsc_etapa_cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_etapa_cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_etapa_cadastro`
--

LOCK TABLES `rsc_etapa_cadastro` WRITE;
/*!40000 ALTER TABLE `rsc_etapa_cadastro` DISABLE KEYS */;
INSERT INTO `rsc_etapa_cadastro` VALUES (1,'Cadastro de Cliente'),(2,'Contratação'),(3,'Pagamento');
/*!40000 ALTER TABLE `rsc_etapa_cadastro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_etapa_cadastro_cliente`
--

DROP TABLE IF EXISTS `rsc_etapa_cadastro_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_etapa_cadastro_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_etapa_cadastro` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cliente_idx` (`id_cliente`),
  KEY `fk_etapa_cadastro_idx` (`id_etapa_cadastro`),
  CONSTRAINT `fk_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `rsc_cliente` (`id`),
  CONSTRAINT `fk_etapa_cadastro` FOREIGN KEY (`id_etapa_cadastro`) REFERENCES `rsc_etapa_cadastro` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_etapa_cadastro_cliente`
--

LOCK TABLES `rsc_etapa_cadastro_cliente` WRITE;
/*!40000 ALTER TABLE `rsc_etapa_cadastro_cliente` DISABLE KEYS */;
INSERT INTO `rsc_etapa_cadastro_cliente` VALUES (1,1,1),(2,2,1),(3,3,1);
/*!40000 ALTER TABLE `rsc_etapa_cadastro_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_faturamento`
--

DROP TABLE IF EXISTS `rsc_faturamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_faturamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_faturamento`
--

LOCK TABLES `rsc_faturamento` WRITE;
/*!40000 ALTER TABLE `rsc_faturamento` DISABLE KEYS */;
INSERT INTO `rsc_faturamento` VALUES (1,'Até  30.000,00 '),(2,'De 30.000,00 a 50.000,00'),(3,'De 30.000,00 a 50.000,01'),(4,'De 30.000,00 a 50.000,02'),(5,'De 30.000,00 a 50.000,03'),(6,'De 30.000,00 a 50.000,04'),(7,'De 30.000,00 a 50.000,05'),(8,'De 30.000,00 a 50.000,06'),(9,'De 50.000,00 a 100.000,00'),(10,'De 50.000,00 a 100.000,01'),(11,'De 50.000,00 a 100.000,02'),(12,'De 50.000,00 a 100.000,03'),(13,'De 50.000,00 a 100.000,04'),(14,'De 50.000,00 a 100.000,05'),(15,'De 50.000,00 a 100.000,06'),(16,'De 100.000,00 a 200.000,00'),(17,'De 100.000,00 a 200.000,01'),(18,'De 100.000,00 a 200.000,02'),(19,'De 100.000,00 a 200.000,03'),(20,'De 100.000,00 a 200.000,04'),(21,'De 100.000,00 a 200.000,05'),(22,'De 100.000,00 a 200.000,06'),(23,'De 200.000,00 a 400.000,00'),(25,'De 200.000,00 a 400.000,01'),(26,'De 200.000,00 a 400.000,02'),(27,'De 200.000,00 a 400.000,03'),(28,'De 200.000,00 a 400.000,04'),(29,'De 200.000,00 a 400.000,05'),(30,'De 200.000,00 a 400.000,06');
/*!40000 ALTER TABLE `rsc_faturamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_forma_pagamento`
--

DROP TABLE IF EXISTS `rsc_forma_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_forma_pagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_forma_pagamento`
--

LOCK TABLES `rsc_forma_pagamento` WRITE;
/*!40000 ALTER TABLE `rsc_forma_pagamento` DISABLE KEYS */;
INSERT INTO `rsc_forma_pagamento` VALUES (1,'Cartão de Crédito'),(2,'Boleto Bancário');
/*!40000 ALTER TABLE `rsc_forma_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_genero`
--

DROP TABLE IF EXISTS `rsc_genero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_genero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_genero`
--

LOCK TABLES `rsc_genero` WRITE;
/*!40000 ALTER TABLE `rsc_genero` DISABLE KEYS */;
INSERT INTO `rsc_genero` VALUES (1,'Masculino'),(2,'Feminino'),(3,'Não Informar');
/*!40000 ALTER TABLE `rsc_genero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_mensalidade`
--

DROP TABLE IF EXISTS `rsc_mensalidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_mensalidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_empresa` int(255) DEFAULT NULL,
  `id_faturamento` int(255) DEFAULT NULL,
  `socios_minimo` int(255) DEFAULT NULL,
  `socios_maximo` int(255) DEFAULT NULL,
  `funcionarios_minimo` int(255) DEFAULT NULL,
  `funcionarios_maximo` int(255) DEFAULT NULL,
  `mensalidade` varchar(20) DEFAULT NULL,
  `codigo_pagseguro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_tipo_empresa` (`id_tipo_empresa`) USING BTREE,
  KEY `fk_faturamento` (`id_faturamento`) USING BTREE,
  CONSTRAINT `fk_faturamento` FOREIGN KEY (`id_faturamento`) REFERENCES `rsc_faturamento` (`id`),
  CONSTRAINT `fk_tipo_empresa` FOREIGN KEY (`id_tipo_empresa`) REFERENCES `rsc_tipo_empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_mensalidade`
--

LOCK TABLES `rsc_mensalidade` WRITE;
/*!40000 ALTER TABLE `rsc_mensalidade` DISABLE KEYS */;
INSERT INTO `rsc_mensalidade` VALUES (1,1,1,1,1,0,0,'80,00','013ECDEA8989005AA4FABF9FC1C05071'),(2,1,1,1,1,1,2,'150,00',NULL),(3,1,1,1,2,2,3,'180,00',NULL),(4,1,1,1,3,3,4,'216,00',NULL),(5,1,1,1,4,4,5,'259,20',NULL),(6,1,1,1,5,5,6,'311,04',NULL),(7,1,1,1,6,6,20,'373,25',NULL),(8,1,1,7,100,20,500,'a combinar',NULL),(9,1,2,1,1,0,0,'160,00',NULL),(10,1,2,1,1,1,2,'192,00',NULL),(11,1,3,1,2,2,3,'230,40',NULL),(12,1,4,1,3,3,4,'276,48',NULL),(13,1,5,1,4,4,5,'331,78',NULL),(14,1,6,1,5,5,6,'398,13',NULL),(15,1,7,1,6,6,20,'477,76',NULL),(16,1,8,7,100,20,500,'a combinar',NULL),(17,1,9,1,1,0,0,'320,00',NULL),(18,1,9,1,1,1,2,'384,00',NULL),(19,1,10,1,2,2,3,'460,80',NULL),(20,1,11,1,3,3,4,'552,96',NULL),(21,1,12,1,4,4,5,'663,55',NULL),(22,1,13,1,5,5,6,'796,26',NULL),(23,1,14,1,6,6,20,'955,51',NULL),(24,1,15,7,100,20,500,'a combinar',NULL),(25,1,16,1,1,0,0,'640,00',NULL),(26,1,16,1,1,1,2,'768,00',NULL),(27,1,17,1,2,2,3,'921,60',NULL),(28,1,18,1,3,3,4,'1.105,92',NULL),(29,1,19,1,4,4,5,'1.327,10',NULL),(30,1,20,1,5,5,6,'1.592,52',NULL),(31,1,21,1,6,6,20,'1.911,03',NULL),(32,1,22,7,100,20,500,'a combinar',NULL),(33,1,23,1,1,0,0,'1.280,00',NULL),(34,1,23,1,1,1,2,'1.536,00',NULL),(35,1,25,1,2,2,3,'1.612,80',NULL),(36,1,26,1,3,3,4,'1.935,36',NULL),(37,1,27,1,4,4,5,'2.322,43',NULL),(38,1,28,1,5,5,6,'2.786,92',NULL),(39,1,29,1,6,6,20,'3.344,30',NULL),(40,1,30,7,100,20,500,'a combinar',NULL),(41,2,1,1,1,0,0,'90,00','B7F383C11F1FECBDD4A07F99A906B18F'),(42,2,1,1,1,1,2,'180,00',NULL),(43,2,1,1,2,2,3,'216,00',NULL),(44,2,1,1,3,3,4,'259,20',NULL),(45,2,1,1,4,4,5,'311,04',NULL),(46,2,1,1,5,5,6,'373,25',NULL),(47,2,1,1,6,6,20,'447,90',NULL),(48,2,1,7,100,20,500,'a combinar',NULL),(49,2,2,1,1,0,0,'180,00',NULL),(50,2,2,1,1,1,2,'216,00',NULL),(51,2,3,1,2,2,3,'259,20',NULL),(52,2,4,1,3,3,4,'311,04',NULL),(53,2,5,1,4,4,5,'373,25',NULL),(54,2,6,1,5,5,6,'447,90',NULL),(55,2,7,1,6,6,20,'537,48',NULL),(56,2,8,7,100,20,500,'a combinar',NULL),(57,2,9,1,1,0,0,'360,00',NULL),(58,2,9,1,1,1,2,'432,00',NULL),(59,2,10,1,2,2,3,'518,40',NULL),(60,2,11,1,3,3,4,'622,08',NULL),(61,2,12,1,4,4,5,'746,50',NULL),(62,2,13,1,5,5,6,'895,80',NULL),(63,2,14,1,6,6,20,'1.074,95',NULL),(64,2,15,7,100,20,500,'a combinar',NULL),(65,2,16,1,1,0,0,'720,00',NULL),(66,2,16,1,1,1,2,'864,00',NULL),(67,2,17,1,2,2,3,'1.036,80',NULL),(68,2,18,1,3,3,4,'1.244,16',NULL),(69,2,19,1,4,4,5,'1.492,99',NULL),(70,2,20,1,5,5,6,'1.791,59',NULL),(71,2,21,1,6,6,20,'2.149,91',NULL),(72,2,22,7,100,20,500,'a combinar',NULL),(73,2,23,1,1,0,0,'1.440,00',NULL),(74,2,23,1,1,1,2,'1.728,00',NULL),(75,2,25,1,2,2,3,'1.814,40',NULL),(76,2,26,1,3,3,4,'2.177,28',NULL),(77,2,27,1,4,4,5,'2.612,74',NULL),(78,2,28,1,5,5,6,'3.135,28',NULL),(79,2,29,1,6,6,20,'3.762,34',NULL),(80,2,30,7,100,20,500,'a combinar',NULL),(81,3,1,1,1,0,0,'150,00','B1E46C535A5AED6FF4C93F8299DB981F'),(82,3,1,1,1,1,2,'230,00',NULL),(83,3,1,1,2,2,3,'276,00',NULL),(84,3,1,1,3,3,4,'331,20',NULL),(85,3,1,1,4,4,5,'397,44',NULL),(86,3,1,1,5,5,6,'476,93',NULL),(87,3,1,1,6,6,20,'715,39',NULL),(88,3,1,7,100,20,500,'a combinar',NULL),(89,3,2,1,1,0,0,'300,00',NULL),(90,3,2,1,1,1,2,'360,00',NULL),(91,3,3,1,2,2,3,'432,00',NULL),(92,3,4,1,3,3,4,'518,40',NULL),(93,3,5,1,4,4,5,'622,08',NULL),(94,3,6,1,5,5,6,'746,50',NULL),(95,3,7,1,6,6,20,'1.119,74',NULL),(96,3,8,7,100,20,500,'a combinar',NULL),(97,3,9,1,1,0,0,'600,00',NULL),(98,3,9,1,1,1,2,'720,00',NULL),(99,3,10,1,2,2,3,'864,00',NULL),(100,3,11,1,3,3,4,'1.036,80',NULL),(101,3,12,1,4,4,5,'1.244,16',NULL),(102,3,13,1,5,5,6,'1.492,99',NULL),(103,3,14,1,6,6,20,'1.791,59',NULL),(104,3,15,7,100,20,500,'a combinar',NULL),(105,3,16,1,1,0,0,'1.000,00',NULL),(106,3,16,1,1,1,2,'1.200,00',NULL),(107,3,17,1,2,2,3,'1.440,00',NULL),(108,3,18,1,3,3,4,'1.728,00',NULL),(109,3,19,1,4,4,5,'2.073,60',NULL),(110,3,20,1,5,5,6,'2.488,32',NULL),(111,3,21,1,6,6,20,'2.985,98',NULL),(112,3,22,7,100,20,500,'a combinar',NULL),(113,3,23,1,1,0,0,'1.500,00',NULL),(114,3,23,1,1,1,2,'2.000,00',NULL),(115,3,25,1,2,2,3,'2.100,00',NULL),(116,3,26,1,3,3,4,'2.520,00',NULL),(117,3,27,1,4,4,5,'3.024,00',NULL),(118,3,28,1,5,5,6,'3.628,80',NULL),(119,3,29,1,6,6,20,'4.354,56',NULL),(120,3,30,7,100,20,500,'a combinar',NULL),(121,4,1,1,1,0,0,'180,00','E73A348AF4F4364224752FBA7C8B1F09'),(122,4,1,1,1,1,2,'230,00',NULL),(123,4,1,1,2,2,3,'276,00',NULL),(124,4,1,1,3,3,4,'331,20',NULL),(125,4,1,1,4,4,5,'397,44',NULL),(126,4,1,1,5,5,6,'476,93',NULL),(127,4,1,1,6,6,20,'715,39',NULL),(128,4,1,7,100,20,500,'a combinar',NULL),(129,4,2,1,1,0,0,'300,00',NULL),(130,4,2,1,1,1,2,'360,00',NULL),(131,4,3,1,2,2,3,'432,00',NULL),(132,4,4,1,3,3,4,'518,40',NULL),(133,4,5,1,4,4,5,'622,08',NULL),(134,4,6,1,5,5,6,'746,50',NULL),(135,4,7,1,6,6,20,'1.119,74',NULL),(136,4,8,7,100,20,500,'a combinar',NULL),(137,4,9,1,1,0,0,'600,00',NULL),(138,4,9,1,1,1,2,'720,00',NULL),(139,4,10,1,2,2,3,'864,00',NULL),(140,4,11,1,3,3,4,'1.036,80',NULL),(141,4,12,1,4,4,5,'1.244,16',NULL),(142,4,13,1,5,5,6,'1.492,99',NULL),(143,4,14,1,6,6,20,'1.791,59',NULL),(144,4,15,7,100,20,500,'a combinar',NULL),(145,4,16,1,1,0,0,'1.000,00',NULL),(146,4,16,1,1,1,2,'1.200,00',NULL),(147,4,17,1,2,2,3,'1.440,00',NULL),(148,4,18,1,3,3,4,'1.728,00',NULL),(149,4,19,1,4,4,5,'2.073,60',NULL),(150,4,20,1,5,5,6,'2.488,32',NULL),(151,4,21,1,6,6,20,'2.985,98',NULL),(152,4,22,7,100,20,500,'a combinar',NULL),(153,4,23,1,1,0,0,'1.500,00',NULL),(154,4,23,1,1,1,2,'2.000,00',NULL),(155,4,25,1,2,2,3,'2.100,00',NULL),(156,4,26,1,3,3,4,'2.520,00',NULL),(157,4,27,1,4,4,5,'3.024,00',NULL),(158,4,28,1,5,5,6,'3.628,80',NULL),(159,4,29,1,6,6,20,'4.354,56',NULL),(160,4,30,7,100,20,500,'a combinar',NULL);
/*!40000 ALTER TABLE `rsc_mensalidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_pagamento`
--

DROP TABLE IF EXISTS `rsc_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_pagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contrato` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_forma_pagamento` int(11) DEFAULT NULL,
  `codigo_transacao` varchar(45) DEFAULT NULL,
  `data_transacao` datetime DEFAULT NULL,
  `valor` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_status_idx` (`id_status`),
  KEY `fk_contrato_idx` (`id_contrato`),
  KEY `fk_forma_pagamento_idx` (`id_forma_pagamento`),
  CONSTRAINT `fk_contrato` FOREIGN KEY (`id_contrato`) REFERENCES `rsc_contrato` (`id`),
  CONSTRAINT `fk_forma_pagamento` FOREIGN KEY (`id_forma_pagamento`) REFERENCES `rsc_forma_pagamento` (`id`),
  CONSTRAINT `fk_status` FOREIGN KEY (`id_status`) REFERENCES `rsc_status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_pagamento`
--

LOCK TABLES `rsc_pagamento` WRITE;
/*!40000 ALTER TABLE `rsc_pagamento` DISABLE KEYS */;
INSERT INTO `rsc_pagamento` VALUES (1,1,1,1,NULL,NULL,90.00),(2,3,3,1,'33713E69-D080-46DA-8A43-54825B9E0878','2019-04-04 17:43:04',80.00),(3,3,2,1,'5BE0BE1468E442FC9E99BB2155BDD7E6','2019-04-05 10:00:00',80.00),(4,3,3,1,'5BE0BE14-68E4-42FC-9E99-BB2155BDD7E6','2019-04-05 10:09:57',80.00);
/*!40000 ALTER TABLE `rsc_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_status`
--

DROP TABLE IF EXISTS `rsc_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_status`
--

LOCK TABLES `rsc_status` WRITE;
/*!40000 ALTER TABLE `rsc_status` DISABLE KEYS */;
INSERT INTO `rsc_status` VALUES (1,'Aguardando pagamento'),(2,'Em análise'),(3,'Paga'),(4,'Disponível'),(5,'Em disputa'),(6,'Devolvida'),(7,'Cancelada');
/*!40000 ALTER TABLE `rsc_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_tipo_empresa`
--

DROP TABLE IF EXISTS `rsc_tipo_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_tipo_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_tipo_empresa`
--

LOCK TABLES `rsc_tipo_empresa` WRITE;
/*!40000 ALTER TABLE `rsc_tipo_empresa` DISABLE KEYS */;
INSERT INTO `rsc_tipo_empresa` VALUES (1,'SIMPLES NACIONAL - COMÉRCIO'),(2,'SIMPLES NACIONAL - SERVIÇO'),(3,'LUCRO PRESUMIDO - COMÉRCIO'),(4,'LUCRO PRESUMIDO - SERVIÇO');
/*!40000 ALTER TABLE `rsc_tipo_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_tipo_status`
--

DROP TABLE IF EXISTS `rsc_tipo_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_tipo_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_tipo_status`
--

LOCK TABLES `rsc_tipo_status` WRITE;
/*!40000 ALTER TABLE `rsc_tipo_status` DISABLE KEYS */;
INSERT INTO `rsc_tipo_status` VALUES (1,'Assinatura'),(2,'Transação');
/*!40000 ALTER TABLE `rsc_tipo_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_unidade`
--

DROP TABLE IF EXISTS `rsc_unidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_unidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_unidade`
--

LOCK TABLES `rsc_unidade` WRITE;
/*!40000 ALTER TABLE `rsc_unidade` DISABLE KEYS */;
INSERT INTO `rsc_unidade` VALUES (1,'	SÃO JOÃO DOS PATOS'),(2,'	PARAIBANO'),(3,'	BARÃO DE GRAJAÚ'),(4,'	PASSAGEM FRANCA'),(5,'	BURITI BRAVO'),(6,'	SUCUPIRA RIACHÃO'),(7,'	SUCUPIRA DO NORTE'),(8,'	COLINAS'),(9,'	SÃO DOMINGOS DO MARANHÃO'),(10,'	SÃO DOMINGO DO AZEITÃO'),(11,'	PRESIDENTE DUTRA'),(12,'	BALSAS'),(13,'	SÃO RAIMUNDO DAS MANGABEIRAS'),(14,'	SÃO LUÍS'),(15,'	SÃO JOSÉ DE RIBAMAR'),(16,'	RAPOSA'),(17,'	PAÇO DO LUMIAR'),(18,'	BALSAS');
/*!40000 ALTER TABLE `rsc_unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_usuario`
--

DROP TABLE IF EXISTS `rsc_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_usuario`
--

LOCK TABLES `rsc_usuario` WRITE;
/*!40000 ALTER TABLE `rsc_usuario` DISABLE KEYS */;
INSERT INTO `rsc_usuario` VALUES (3,'91425057047','ca0f72e54db126bc394f444e77131fee','2019-03-29 13:20:16','2019-03-29 13:20:16'),(4,'91425057047','714bc72d0b0354306b7d726a159aed8f','2019-04-03 20:36:50','2019-04-03 20:36:50'),(5,'04172473385','b369a59b8044a9359864e4fa16a05e77','2019-04-04 19:37:17','2019-04-04 19:37:17');
/*!40000 ALTER TABLE `rsc_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-10 17:53:19
