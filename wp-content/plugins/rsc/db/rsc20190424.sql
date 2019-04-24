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
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (1,'Unknown column \'lastEventDate\' in \'field list\' (SQL: update `rsc_pagamento` set `id_status` = 3, `lastEventDate` = 2019-04-04T16:49:38.000-03:00, `codigo_transacao` = 33713E69-D080-46DA-8A43-54825B9E0878 where `id_contrato` = 3)','2019-04-04 20:47:23','2019-04-04 20:47:23'),(2,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 32587572, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:48:56 where `id` = 4)','2019-04-10 18:48:56','2019-04-10 18:48:56'),(3,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 32587572, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:53:09 where `id` = 4)','2019-04-10 18:53:09','2019-04-10 18:53:09'),(4,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 32587572s, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:58:57 where `id` = 4)','2019-04-10 18:58:57','2019-04-10 18:58:57'),(5,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:59:45 where `id` = 4)','2019-04-10 18:59:45','2019-04-10 18:59:45'),(6,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 16:01:27 where `id` = 4)','2019-04-10 19:01:27','2019-04-10 19:01:27'),(7,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 16:04:41 where `id` = 4)','2019-04-10 19:04:42','2019-04-10 19:04:42'),(8,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 16:06:02 where `id` = 4)','2019-04-10 19:06:02','2019-04-10 19:06:02'),(9,'Cannot add or update a child row: a foreign key constraint fails (`rsc`.`rsc_cliente`, CONSTRAINT `fk_estado_civil` FOREIGN KEY (`id_estado_civil`) REFERENCES `rsc_estado_civil` (`id`)) (SQL: update `rsc_cliente` set `id_usuario` = 7, `id_sexo` = , `id_estado_civil` = , `nome` = , `rg` = , `cpf` = , `orgao_rg` = , `data_emissao_rg` = 1969-12-31, `data_nascimento` = 1969-12-31, `email` = , `ddd` = , `telefone_residencial` = , `telefone_celular` = , `rua` = , `numero` = , `cep` = , `bairro` = , `complemento` = , `cidade` = , `estado` = , `updated_at` = 2019-04-15 14:48:02 where `id` = 6)','2019-04-15 17:48:02','2019-04-15 17:48:02'),(10,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 8, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-04-15 14:48:39\', \'2019-04-15 14:48:39\'))','2019-04-15 17:48:39','2019-04-15 17:48:39'),(11,'E-mail or token is invalid: seu@email.com.br - BD65179DCD806314A77B774DF6148CA9','2019-04-17 14:04:18','2019-04-17 14:04:18'),(12,'API is not available in sandbox environment','2019-04-17 14:12:06','2019-04-17 14:12:06'),(13,'Não oferecemos plano para os dados fornecidos. Por favor entre em contato conosco enviando um email para cadastro@rsccontabilidade.com.br.','2019-04-23 20:17:15','2019-04-23 20:17:15'),(14,'Não oferecemos plano para os dados fornecidos. Por favor entre em contato conosco enviando um email para cadastro@rsccontabilidade.com.br.','2019-04-24 17:13:09','2019-04-24 17:13:09'),(15,'Não foi possível listar dados de planos!','2019-04-24 17:14:51','2019-04-24 17:14:51');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_boletos`
--

DROP TABLE IF EXISTS `rsc_boletos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_boletos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contrato` int(11) NOT NULL,
  `codigo_transacao` varchar(100) DEFAULT NULL,
  `codigo_barras` varchar(100) DEFAULT NULL,
  `data_vencimento` date DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contrato_idx` (`id_contrato`),
  CONSTRAINT `fk_contrato1` FOREIGN KEY (`id_contrato`) REFERENCES `rsc_contrato` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_boletos`
--

LOCK TABLES `rsc_boletos` WRITE;
/*!40000 ALTER TABLE `rsc_boletos` DISABLE KEYS */;
/*!40000 ALTER TABLE `rsc_boletos` ENABLE KEYS */;
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
  `completou` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_idx` (`id_usuario`),
  KEY `fk_estado_civil_idx` (`id_estado_civil`),
  KEY `fk_sexo_idx` (`id_sexo`),
  CONSTRAINT `fk_estado_civil` FOREIGN KEY (`id_estado_civil`) REFERENCES `rsc_estado_civil` (`id`),
  CONSTRAINT `fk_sexo` FOREIGN KEY (`id_sexo`) REFERENCES `rsc_genero` (`id`),
  CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `rsc_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_cliente`
--

LOCK TABLES `rsc_cliente` WRITE;
/*!40000 ALTER TABLE `rsc_cliente` DISABLE KEYS */;
INSERT INTO `rsc_cliente` VALUES (1,3,2,2,'Maria de la Cruz Garcia Luz','0392999239','91425057047','SSP-SP','1995-03-20','1994-04-20','maria_cruz@sandbox.pagseguro.com.br',11,'34524562','983451067','Avenida 24 de Agosto',244,'08421-510','Conjunto Habitacional Fazenda do Carmo','conjunto','São Paulo','SP',1,'2019-03-29 13:20:16','2019-03-29 13:20:16'),(2,4,2,2,'Maria de la Cruz Garcia Luz','0392999239','91425057047','SSP-SP','1995-03-20','1994-04-20','maria_cruz@sandbox.pagseguro.com.br',11,'34524562','983451067','Avenida 24 de Agosto',244,'08421-510','Conjunto Habitacional Fazenda do Carmo','conjunto','São Paulo','SP',1,'2019-04-03 20:36:50','2019-04-03 20:36:50'),(4,5,1,2,'Claudio Pablo Silva Santos','0309447820063','04172473385','SSP-MA','2007-06-14','1990-07-12','claudiopablosilva@sandbox.pagseguro.com.br',98,'325875722','988197084','Avenida Santos Dumont',1,'65046-660','Anil','residencial canaã','São Luís','MA',1,'2019-04-04 19:51:16','2019-04-10 19:36:07'),(14,10,1,1,'Braulio Roberto Silva Santos','929123003','38433473875','34234234','1995-03-14','1993-11-08','braulio@sandbox.pagseguro.com.br',98,'932587572','985672451','Avenida Santos Dumont',1,'65046-660','Anil','residencial canaã','São Luís','MA',1,'2019-04-16 11:59:56','2019-04-16 12:06:17'),(15,11,1,2,'Guillermo Garcia Muñoz','4456456456','33278646673','SSP-SP','1992-03-20','1991-06-23','guille@sandbox.pagseguro.com.br',11,'34565278','986451892','Avenida Morumbi',34,'05606-300','Morumbi','Vila Sônia','São Paulo','SP',1,'2019-04-16 13:08:28','2019-04-16 13:09:23'),(16,12,1,1,'Mauro Soriano Mendez','0124525354','85561881256','ssp-ma','1998-03-20','1986-10-08','ppp@sandbox.pagseguro.com.br',98,'32456789','987654321','Avenida Santos Dumont',3,'65046-660','Anil','residencial canaã','São Luís','MA',0,'2019-04-17 14:02:48','2019-04-17 14:02:48');
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
  `id_cliente` int(11) NOT NULL,
  `id_plano` int(11) NOT NULL,
  `id_status_assinatura` int(11) NOT NULL,
  `codigo_assinatura` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cliente_idx` (`id_cliente`),
  KEY `fk_plano_idx` (`id_plano`),
  KEY `fk_status_assinatura_idx` (`id_status_assinatura`),
  CONSTRAINT `fk_cliente2` FOREIGN KEY (`id_cliente`) REFERENCES `rsc_cliente` (`id`),
  CONSTRAINT `fk_plano` FOREIGN KEY (`id_plano`) REFERENCES `rsc_plano` (`id`),
  CONSTRAINT `fk_status_assinatura` FOREIGN KEY (`id_status_assinatura`) REFERENCES `rsc_status_assinatura` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_contrato`
--

LOCK TABLES `rsc_contrato` WRITE;
/*!40000 ALTER TABLE `rsc_contrato` DISABLE KEYS */;
INSERT INTO `rsc_contrato` VALUES (1,1,41,3,'EDC54B48ADADD8CAA4A25F98BF1A9C4A','2019-03-29 13:20:54','2019-03-29 13:22:09'),(3,4,1,3,'4BD71CAB5959C6988468BF9BE5038722','2019-04-04 19:51:32','2019-04-11 18:49:55'),(13,14,1,3,'7D169F8CBEBE95E664358F8F2B89C57E','2019-04-16 12:00:08','2019-04-16 12:06:16'),(14,15,1,3,'459A14096363DF46644BDFA44BD32CDC','2019-04-16 13:08:41','2019-04-16 13:09:23'),(15,16,1,3,NULL,'2019-04-17 14:03:02','2019-04-17 14:03:02');
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
  `nome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_pagamento`
--

LOCK TABLES `rsc_pagamento` WRITE;
/*!40000 ALTER TABLE `rsc_pagamento` DISABLE KEYS */;
INSERT INTO `rsc_pagamento` VALUES (1,1,1,1,NULL,NULL,90.00),(2,3,3,1,'33713E69-D080-46DA-8A43-54825B9E0878','2019-04-04 17:43:04',80.00),(3,3,2,1,'5BE0BE1468E442FC9E99BB2155BDD7E6','2019-04-05 10:00:00',80.00),(4,3,3,1,'5BE0BE14-68E4-42FC-9E99-BB2155BDD7E6','2019-04-05 10:09:57',80.00),(5,3,2,1,'7E392F6D-B436-4EB8-BF90-2315C40AB798','2019-04-11 11:19:36',80.00),(13,3,3,1,'7E392F6D-B436-4EB8-BF90-2315C40AB798','2019-04-11 11:22:42',80.00),(14,13,1,NULL,NULL,NULL,80.00),(15,14,1,NULL,NULL,NULL,80.00);
/*!40000 ALTER TABLE `rsc_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_plano`
--

DROP TABLE IF EXISTS `rsc_plano`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_plano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_empresa` int(255) NOT NULL,
  `id_faturamento` int(255) NOT NULL,
  `socios_minimo` int(255) DEFAULT NULL,
  `socios_maximo` int(255) DEFAULT NULL,
  `funcionarios_minimo` int(255) DEFAULT NULL,
  `funcionarios_maximo` int(255) DEFAULT NULL,
  `valor` decimal(9,2) DEFAULT NULL,
  `codigo_pagseguro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_tipo_empresa` (`id_tipo_empresa`) USING BTREE,
  KEY `fk_faturamento` (`id_faturamento`) USING BTREE,
  CONSTRAINT `fk_faturamento` FOREIGN KEY (`id_faturamento`) REFERENCES `rsc_faturamento` (`id`),
  CONSTRAINT `fk_tipo_empresa` FOREIGN KEY (`id_tipo_empresa`) REFERENCES `rsc_tipo_empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_plano`
--

LOCK TABLES `rsc_plano` WRITE;
/*!40000 ALTER TABLE `rsc_plano` DISABLE KEYS */;
INSERT INTO `rsc_plano` VALUES (1,1,1,1,1,0,0,80.00,'2ACDF5DD2E2E2002246A9FAEBA3FD2B6'),(2,1,1,1,1,1,2,150.00,'2E6EC1BC76769A17746B4FB6D963C39F'),(3,1,1,1,2,2,3,180.00,'33054108ECEC17D6649FEF8EA43BCBF8'),(4,1,1,1,3,3,4,216.00,'361D10EC37378C4EE4308F8AAFE4E46C'),(5,1,1,1,4,4,5,259.20,'3B5D56D27878F8F554579F82BC6FD2D3'),(6,1,1,1,5,5,6,311.04,'3DFC139E0606C4FDD49FFFBFBF26C5A6'),(7,1,1,1,6,6,20,373.25,'40E1F9B4393915CCC4C68FA38687CA74'),(8,1,1,7,100,20,500,0.00,NULL),(9,1,2,1,1,0,0,160.00,'444E8AA5DADAF065546F0FAB7999C79F'),(10,1,2,1,1,1,2,192.00,'48ACC6F347471EC114728F80183995CC'),(11,1,3,1,2,2,3,230.40,'52D8765CA2A223B114E0BFB3BB356F2C'),(12,1,4,1,3,3,4,276.48,'56B41EC1B3B3382884543F86DEE626A8'),(13,1,5,1,4,4,5,331.78,'5B2BEB077777CFFAA4416FB3B854CCAC'),(14,1,6,1,5,5,6,398.13,'5EC5AD9DF0F06B8334CEAFB8726C310F'),(15,1,7,1,6,6,20,477.76,'6499970919197FBCC4564F9823A36C76'),(16,1,8,7,100,20,500,0.00,NULL),(17,1,9,1,1,0,0,320.00,'6809BD114646D3FFF47A6F90E50C2310'),(18,1,9,1,1,1,2,384.00,'6B7D1F667E7E48F33449DFA2FAF8DB25'),(19,1,10,1,2,2,3,460.80,'6E8473687878E7BAA429EF9BFCA332CE'),(20,1,11,1,3,3,4,552.96,'71B5C2590909AEC774C9EF8AAA7A2CCC'),(21,1,12,1,4,4,5,663.55,'75519FA32A2AB034448CEF83212CDB77'),(22,1,13,1,5,5,6,796.26,'780AF71C86867BCDD4E05F97C9024659'),(23,1,14,1,6,6,20,955.51,'7CBBA312EDED25B884906F85216C879A'),(24,1,15,7,100,20,500,0.00,NULL),(25,1,16,1,1,0,0,640.00,'8060C025F3F390BBB4479F8AA1F3ECF3'),(26,1,16,1,1,1,2,768.00,'83B31A64C4C43F55547DBFB466ADB37A'),(27,1,17,1,2,2,3,921.60,'8639EC88C8C802888465AFA05568B536'),(28,1,18,1,3,3,4,1105.92,'8A7891E1B1B1C6A004276F9206CC54E6'),(29,1,19,1,4,4,5,1327.10,'8DD1D9A48B8BA8C664F40F88EE5D03F3'),(30,1,20,1,5,5,6,1592.52,'92E216451010C10114B3CFBFA8C0B6E1'),(31,1,21,1,6,6,20,1911.03,'975929B53939BB8994A28F85923CBFAD'),(32,1,22,7,100,20,500,0.00,NULL),(33,1,23,1,1,0,0,1280.00,'11D1C48E7C7C65E44453DF8584311659'),(34,1,23,1,1,1,2,1536.00,'15F3A4FFB2B2F220047E3F91B809E79A'),(35,1,25,1,2,2,3,1612.80,'1921B3BDD8D8B861142E0FB7CC242DFC'),(36,1,26,1,3,3,4,1935.36,'1EB7E5045151FAD0047E0F8712CEF9C6'),(37,1,27,1,4,4,5,2322.43,'22C800775F5F0D2114504FB9138DCA0E'),(38,1,28,1,5,5,6,2786.92,'26FD5CADD1D14F5774A66F942CE3BCD8'),(39,1,29,1,6,6,20,3344.30,'2B4722846D6DFD2334986FB339B2A942'),(40,1,30,7,100,20,500,0.00,NULL),(41,2,1,1,1,0,0,90.00,'317DB8B721216B3884FBAF81EB9EA90A'),(42,2,1,1,1,1,2,180.00,'35E1C89C010159E664CC7F8842C0AD3E'),(43,2,1,1,2,2,3,216.00,'3900AD121B1B206774BCDFADD7BB1A89'),(44,2,1,1,3,3,4,259.20,'3C6D5D204B4BD11884068F9D87B4BA4C'),(45,2,1,1,4,4,5,311.04,'427F2BEB8484F35444B42FB365188008'),(46,2,1,1,5,5,6,373.25,'47C02A2D2F2F97AEE4888FBE11928B4D'),(47,2,1,1,6,6,20,447.90,'4CCE4210D6D6DA4664B55FBB9845D4FF'),(48,2,1,7,100,20,500,0.00,NULL),(49,2,2,1,1,0,0,180.00,'502C07670B0B586DD4C5FF936ABC9CE5'),(50,2,2,1,1,1,2,216.00,'54D0EE29C6C6524EE4329F8B74E046EC'),(51,2,3,1,2,2,3,259.20,'5AC1118C5A5AECD7747C4FB7F32F040F'),(52,2,4,1,3,3,4,311.04,'5EAF19ED48488E4EE4D4BFBA0AF71C44'),(53,2,5,1,4,4,5,373.25,'63EA84431B1B4408848E5F88F42035B4'),(54,2,6,1,5,5,6,447.90,'68AB9AFBA1A1496334BBBF91E2D2E532'),(55,2,7,1,6,6,20,537.48,'6F7520374E4EF1E224AFCF941BADA8A1'),(56,2,8,7,100,20,500,0.00,NULL),(57,2,9,1,1,0,0,360.00,'74FD94E6B3B3ABCDD4F8DF9C3E141947'),(58,2,9,1,1,1,2,432.00,'7B1248D8D8D8B5A22407CFAF75332AC8'),(59,2,10,1,2,2,3,518.40,'7E7197E1ADAD6CFCC4CD6FB5975E1A46'),(60,2,11,1,3,3,4,622.08,'81AAF8673838260AA408CF86F9A35B0A'),(61,2,12,1,4,4,5,746.50,'860D96224141CADDD41BCFB7212C87DE'),(62,2,13,1,5,5,6,895.80,'8ACBC896D5D5161004C5FF8424DC219A'),(63,2,14,1,6,6,20,1074.95,'8D560E204747EAA444E5CF90C24287FD'),(64,2,15,7,100,20,500,0.00,NULL),(65,2,16,1,1,0,0,720.00,'907F09914E4E23DFF4875F9EC52D864F'),(66,2,16,1,1,1,2,864.00,'951B4135CBCBBB93340BFF9C998D80BE'),(67,2,17,1,2,2,3,1036.80,'98D320E85E5EE038840CFFAE8A18F395'),(68,2,18,1,3,3,4,1244.16,'9C455D1FAAAA5F58844F9F86FFF8084D'),(69,2,19,1,4,4,5,1492.99,'9FE5649EDDDD6E088471BF9F964FDA7E'),(70,2,20,1,5,5,6,1791.59,'A29B9F26F1F1E52884081FA3A8E08B18'),(71,2,21,1,6,6,20,2149.91,'A575802DF2F23168848F9F846A4B7D58'),(72,2,22,7,100,20,500,0.00,NULL),(73,2,23,1,1,0,0,1440.00,'AB6FB3217878A7711478EFB3A9FEB691'),(74,2,23,1,1,1,2,1728.00,'AE802E591A1A150664345F84CEE6F243'),(75,2,25,1,2,2,3,1814.40,'B2FCE4EF48484D0FF40C2FB9D801D952'),(76,2,26,1,3,3,4,2177.28,'B90B04BB1A1A3FEBB46C8FB13AB88C7D'),(77,2,27,1,4,4,5,2612.74,'BCAEAEBCB5B5151884AF5FA546B6872F'),(78,2,28,1,5,5,6,3135.28,'BF930C0682827B92241ECFA3BD7F3CE5'),(79,2,29,1,6,6,20,3762.34,'C3818A535555BD8AA4480F8392C0FD0E'),(80,2,30,7,100,20,500,0.00,NULL),(81,3,1,1,1,0,0,150.00,'C6F50D80C9C923CBB45DBF9002AD69DA'),(82,3,1,1,1,1,2,230.00,'C9C9DAD452524B6BB4DC8F82B54920CB'),(83,3,1,1,2,2,3,276.00,'CDE276AD8989635AA458CF94CA239591'),(84,3,1,1,3,3,4,331.20,'D1702C8E868604CFF4CE2FAEA4681994'),(85,3,1,1,4,4,5,397.44,'D5C99CF95353C85BB4038FB55435725D'),(86,3,1,1,5,5,6,476.93,'D93F0C2C7B7BD11CC42E8FB91DE422A5'),(87,3,1,1,6,6,20,715.39,'DEBF9EFEBDBDC42CC4289F9195D2BA30'),(88,3,1,7,100,20,500,0.00,NULL),(89,3,2,1,1,0,0,300.00,'AF1A31489595510EE4C05F94355EB9E4'),(90,3,2,1,1,1,2,360.00,'B44CBB23A9A96493346C1F8065C04085'),(91,3,3,1,2,2,3,432.00,'BA591632ACAC1F7994860F893FE4684C'),(92,3,4,1,3,3,4,518.40,'BFACE13C9B9B89FDD432EF8ABDBF6D46'),(93,3,5,1,4,4,5,622.08,'C66F3896505008E554E99FB8C9FCB9A6'),(94,3,6,1,5,5,6,746.50,'C9DDBBB6646406ECC43FFFA1284FBB83'),(95,3,7,1,6,6,20,1119.74,'D1B8CB5F6D6D6E3AA4257F85DA68A377'),(96,3,8,7,100,20,500,0.00,NULL),(97,3,9,1,1,0,0,600.00,'D9F9606C282849E664807F9C65217050'),(98,3,9,1,1,1,2,720.00,'E46FE79E9696042AA4577FA288335503'),(99,3,10,1,2,2,3,864.00,'E8DAE4AB4B4BA46EE4A08FAA5BFAACE1'),(100,3,11,1,3,3,4,1036.80,'EDCC997F7A7AB39EE4E4FF93D54FE862'),(101,3,12,1,4,4,5,1244.16,'F7E7B62ACACA92F7746F8F9578246DAB'),(102,3,13,1,5,5,6,1492.99,'FC6BD7924E4EC5C224039FABC4EFC9D7'),(103,3,14,1,6,6,20,1791.59,'004DDD509C9C134AA4737F97FD0DD388'),(104,3,15,7,100,20,500,0.00,NULL),(105,3,16,1,1,0,0,1000.00,'04D70068888813D4444AFFBD7A401792'),(106,3,16,1,1,1,2,1200.00,'08E88E58888890122440FFAAC8130587'),(107,3,17,1,2,2,3,1440.00,'0D32EA624A4A085EE4322F9A7C2E81BF'),(108,3,18,1,3,3,4,1728.00,'12F98757040428B994E8DF95A7B6B6C0'),(109,3,19,1,4,4,5,2073.60,'16AEEE6F2323B9AAA4930FA254CB4BDE'),(110,3,20,1,5,5,6,2488.32,'1B168FD8BCBCB1A114000F8C248BA108'),(111,3,21,1,6,6,20,2985.98,'57FD892B707077033412AFA2C6FA5145'),(112,3,22,7,100,20,500,0.00,NULL),(113,3,23,1,1,0,0,1500.00,'5D2918B7F8F8A80EE4D11F92F93DDD7B'),(114,3,23,1,1,1,2,2000.00,'61377090B9B9431CC4983F8C2D9B78F3'),(115,3,25,1,2,2,3,2100.00,'6884BB060D0D130BB4E8FFB922C678A7'),(116,3,26,1,3,3,4,2520.00,'6E6129161414975AA42EEF8652E2259C'),(117,3,27,1,4,4,5,3024.00,'71FA7F775C5CB83664B15F80D3BC49C9'),(118,3,28,1,5,5,6,3628.80,'76BC46A90E0E99BEE40B3FB26E8E99EF'),(119,3,29,1,6,6,20,4354.56,'80A6E4412121B31DD4964F97B55BFDB1'),(120,3,30,7,100,20,500,0.00,NULL),(121,4,1,1,1,0,0,180.00,'8810689461612B4774CC5FBF0998C9CC'),(122,4,1,1,1,1,2,230.00,'8C4BEC403030D9BCC4F55F98B1FBBA95'),(123,4,1,1,2,2,3,276.00,'91593D8557571F1DD4324FBD964F376F'),(124,4,1,1,3,3,4,331.20,'988DAD6BA3A3171BB47CAF94BCFE26EB'),(125,4,1,1,4,4,5,397.44,'9D754F21F0F07E50042DBFBEBC759A21'),(126,4,1,1,5,5,6,476.93,'A139B2F749490AAAA4F5FF850152C059'),(127,4,1,1,6,6,20,715.39,'A6FC5D35A2A29C4884EECFBADBC4B351'),(128,4,1,7,100,20,500,0.00,NULL),(129,4,2,1,1,0,0,300.00,'AC9DE19EDEDE809CC4AC8FAF80EFED25'),(130,4,2,1,1,1,2,360.00,'B1F922E997979F03348F6FAD683C580B'),(131,4,3,1,2,2,3,432.00,'B5E4F7056C6C77DAA4F61FAD39301E51'),(132,4,4,1,3,3,4,518.40,'BA7DF326848489B004494F80A3E2E361'),(133,4,5,1,4,4,5,622.08,'C35AA107B6B6193DD4E10F93C396BA08'),(134,4,6,1,5,5,6,746.50,'0F2BB58C6060CE7994444FB811916469'),(135,4,7,1,6,6,20,1119.74,'1265DFC5E2E255E334009FAEACBB3649'),(136,4,8,7,100,20,500,0.00,NULL),(137,4,9,1,1,0,0,600.00,'27DAF9093A3A5588847C6F9AFEDB645D'),(138,4,9,1,1,1,2,720.00,'2C7ED361B2B20A6334828FB73AE1CA89'),(139,4,10,1,2,2,3,864.00,'44C8C46C7F7F43D444959F9FC0EB407F'),(140,4,11,1,3,3,4,1036.80,'48C29CDB3A3A296CC4CECF9C6AF7FA04'),(141,4,12,1,4,4,5,1244.16,'4F634D2F9696CEAFF403CF9363FD6873'),(142,4,13,1,5,5,6,1492.99,'5415E0DC9C9CA77AA4108FA0A4762EA6'),(143,4,14,1,6,6,20,1791.59,'5880B25D98982F72240E5F82047EC3C6'),(144,4,15,7,100,20,500,0.00,NULL),(145,4,16,1,1,0,0,1000.00,'5D726D97D9D9FB9EE4B38F82CF58FC16'),(146,4,16,1,1,1,2,1200.00,'615A3D605A5A95EDD4803F9C236B0B0D'),(147,4,17,1,2,2,3,1440.00,'65ABD0131717D7177468FFA036CC5FD3'),(148,4,18,1,3,3,4,1728.00,'6C0FA4788484604444BDBFBC19F6FD36'),(149,4,19,1,4,4,5,2073.60,'708149A513136A5994A4AF838AA88BB7'),(150,4,20,1,5,5,6,2488.32,'75376E0AC7C7C23994CB4F82F45E9279'),(151,4,21,1,6,6,20,2985.98,'78F597942D2D00BFF422DFB299A3747F'),(152,4,22,7,100,20,500,0.00,NULL),(153,4,23,1,1,0,0,1500.00,'7C353D695353FB4334D1EF9877850CAD'),(154,4,23,1,1,1,2,2000.00,'8E9EA92DD5D556CBB4FFFF9188F4A421'),(155,4,25,1,2,2,3,2100.00,'91A33E551616455EE4D42F8508FC4453'),(156,4,26,1,3,3,4,2520.00,'943CE3862F2F74E4448D4FA2F7166A4C'),(157,4,27,1,4,4,5,3024.00,'971F6FEA707070800447FFBA2FD7EB6A'),(158,4,28,1,5,5,6,3628.80,'9B0B620737371DCEE4BC3F80F1759E7F'),(159,4,29,1,6,6,20,4354.56,'9E6F80C4B0B0556114944FA75C12A9D5'),(160,4,30,7,100,20,500,0.00,NULL);
/*!40000 ALTER TABLE `rsc_plano` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
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
-- Table structure for table `rsc_status_assinatura`
--

DROP TABLE IF EXISTS `rsc_status_assinatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `rsc_status_assinatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_status_assinatura`
--

LOCK TABLES `rsc_status_assinatura` WRITE;
/*!40000 ALTER TABLE `rsc_status_assinatura` DISABLE KEYS */;
INSERT INTO `rsc_status_assinatura` VALUES (1,'Iniciado'),(2,'Pendente'),(3,'Ativo'),(4,'Cartão Expirado, Cancelado ou Bloqueado'),(5,'Suspenso'),(6,'Cancelado'),(7,'Cancelado pelo Vendedor'),(8,'Cancelado pelo Comprador'),(9,'Expirado');
/*!40000 ALTER TABLE `rsc_status_assinatura` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_usuario`
--

LOCK TABLES `rsc_usuario` WRITE;
/*!40000 ALTER TABLE `rsc_usuario` DISABLE KEYS */;
INSERT INTO `rsc_usuario` VALUES (3,'91425057047','ca0f72e54db126bc394f444e77131fee','2019-03-29 13:20:16','2019-03-29 13:20:16'),(4,'91425057047','714bc72d0b0354306b7d726a159aed8f','2019-04-03 20:36:50','2019-04-03 20:36:50'),(5,'04172473385','b369a59b8044a9359864e4fa16a05e77','2019-04-04 19:37:17','2019-04-04 19:37:17'),(6,'40795134614','2dcfcb2010ce1f293f7481ec5c721e53','2019-04-15 13:19:56','2019-04-15 13:19:56'),(9,'55408776751','2dcfcb2010ce1f293f7481ec5c721e53','2019-04-15 19:40:42','2019-04-15 19:40:42'),(10,'38433473875','2dcfcb2010ce1f293f7481ec5c721e53','2019-04-16 11:59:56','2019-04-16 11:59:56'),(11,'33278646673','fe458e214a06e76e1f38ec557810d2cf','2019-04-16 13:08:28','2019-04-16 13:08:28'),(12,'85561881256','2dcfcb2010ce1f293f7481ec5c721e53','2019-04-17 14:02:48','2019-04-17 14:02:48');
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

-- Dump completed on 2019-04-24 18:02:26
