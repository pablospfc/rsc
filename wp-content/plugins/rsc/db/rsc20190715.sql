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
 SET character_set_client = utf8 ;
CREATE TABLE `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (1,'Unknown column \'lastEventDate\' in \'field list\' (SQL: update `rsc_pagamento` set `id_status` = 3, `lastEventDate` = 2019-04-04T16:49:38.000-03:00, `codigo_transacao` = 33713E69-D080-46DA-8A43-54825B9E0878 where `id_contrato` = 3)','2019-04-04 20:47:23','2019-04-04 20:47:23'),(2,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 32587572, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:48:56 where `id` = 4)','2019-04-10 18:48:56','2019-04-10 18:48:56'),(3,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 32587572, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:53:09 where `id` = 4)','2019-04-10 18:53:09','2019-04-10 18:53:09'),(4,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 32587572s, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:58:57 where `id` = 4)','2019-04-10 18:58:57','2019-04-10 18:58:57'),(5,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 15:59:45 where `id` = 4)','2019-04-10 18:59:45','2019-04-10 18:59:45'),(6,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 16:01:27 where `id` = 4)','2019-04-10 19:01:27','2019-04-10 19:01:27'),(7,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 16:04:41 where `id` = 4)','2019-04-10 19:04:42','2019-04-10 19:04:42'),(8,'Unknown column \'Array\' in \'field list\' (SQL: update `rsc_cliente` set `nome` = Claudio Pablo Silva Santos, `data_nascimento` = 1990-07-12, `id_sexo` = 1, `id_estado_civil` = 1, `cpf` = 04172473385, `rg` = 0309447820063, `orgao_rg` = SSP-MA, `data_emissao_rg` = 2007-06-14, `email` = claudiopablosilva@sandbox.pagseguro.com.br, `ddd` = 98, `telefone_residencial` = 325875723, `telefone_celular` = 988197084, `cep` = 65046-660, `rua` = Avenida Santos Dumont, `numero` = 1, `bairro` = Anil, `complemento` = residencial canaã, `cidade` = São Luís, `estado` = MA, `updated_at` = 2019-04-10 16:06:02 where `id` = 4)','2019-04-10 19:06:02','2019-04-10 19:06:02'),(9,'Cannot add or update a child row: a foreign key constraint fails (`rsc`.`rsc_cliente`, CONSTRAINT `fk_estado_civil` FOREIGN KEY (`id_estado_civil`) REFERENCES `rsc_estado_civil` (`id`)) (SQL: update `rsc_cliente` set `id_usuario` = 7, `id_sexo` = , `id_estado_civil` = , `nome` = , `rg` = , `cpf` = , `orgao_rg` = , `data_emissao_rg` = 1969-12-31, `data_nascimento` = 1969-12-31, `email` = , `ddd` = , `telefone_residencial` = , `telefone_celular` = , `rua` = , `numero` = , `cep` = , `bairro` = , `complemento` = , `cidade` = , `estado` = , `updated_at` = 2019-04-15 14:48:02 where `id` = 6)','2019-04-15 17:48:02','2019-04-15 17:48:02'),(10,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 8, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-04-15 14:48:39\', \'2019-04-15 14:48:39\'))','2019-04-15 17:48:39','2019-04-15 17:48:39'),(11,'E-mail or token is invalid: seu@email.com.br - BD65179DCD806314A77B774DF6148CA9','2019-04-17 14:04:18','2019-04-17 14:04:18'),(12,'API is not available in sandbox environment','2019-04-17 14:12:06','2019-04-17 14:12:06'),(13,'Não oferecemos plano para os dados fornecidos. Por favor entre em contato conosco enviando um email para cadastro@rsccontabilidade.com.br.','2019-04-23 20:17:15','2019-04-23 20:17:15'),(14,'Não oferecemos plano para os dados fornecidos. Por favor entre em contato conosco enviando um email para cadastro@rsccontabilidade.com.br.','2019-04-24 17:13:09','2019-04-24 17:13:09'),(15,'Não foi possível listar dados de planos!','2019-04-24 17:14:51','2019-04-24 17:14:51'),(16,'Unknown column \'id_mensalidade\' in \'where clause\' (SQL: select * from `rsc_contrato` where (`id_cliente` = 17 and `id_mensalidade` is null and `codigo_assinatura` is null) limit 1)','2019-05-03 12:33:48','2019-05-03 12:33:48'),(17,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 14, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-03 09:54:10\', \'2019-05-03 09:54:10\'))','2019-05-03 12:54:10','2019-05-03 12:54:10'),(18,'Cannot add or update a child row: a foreign key constraint fails (`rsc`.`rsc_contrato`, CONSTRAINT `fk_status_assinatura` FOREIGN KEY (`id_status_assinatura`) REFERENCES `rsc_status_assinatura` (`id`)) (SQL: insert into `rsc_contrato` (`id_cliente`, `id_plano`, `codigo_assinatura`, `updated_at`, `created_at`) values (18, 1, null, \'2019-05-03 10:08:10\', \'2019-05-03 10:08:10\'))','2019-05-03 13:08:10','2019-05-03 13:08:10'),(19,'Cannot add or update a child row: a foreign key constraint fails (`rsc`.`rsc_cliente`, CONSTRAINT `fk_estado_civil` FOREIGN KEY (`id_estado_civil`) REFERENCES `rsc_estado_civil` (`id`)) (SQL: update `rsc_cliente` set `id_usuario` = 15, `id_sexo` = , `id_estado_civil` = , `nome` = , `rg` = , `cpf` = , `orgao_rg` = , `data_emissao_rg` = 1969-12-31, `data_nascimento` = 1969-12-31, `email` = , `ddd` = , `telefone_residencial` = , `telefone_celular` = , `rua` = , `numero` = , `cep` = , `bairro` = , `complemento` = , `cidade` = , `estado` = , `updated_at` = 2019-05-03 10:42:56 where `id` = 18)','2019-05-03 13:42:56','2019-05-03 13:42:56'),(20,'Plan not found.','2019-05-06 13:03:25','2019-05-06 13:03:25'),(21,'API is not available in sandbox environment','2019-05-06 13:33:53','2019-05-06 13:33:53'),(22,'API is not available in sandbox environment','2019-05-06 13:36:38','2019-05-06 13:36:38'),(23,'API is not available in sandbox environment','2019-05-06 14:16:25','2019-05-06 14:16:25'),(24,'API is not available in sandbox environment','2019-05-06 14:23:54','2019-05-06 14:23:54'),(25,'API is not available in sandbox environment','2019-05-06 14:28:17','2019-05-06 14:28:17'),(26,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 17, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-07 10:07:00\', \'2019-05-07 10:07:00\'))','2019-05-07 13:07:00','2019-05-07 13:07:00'),(27,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 18, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-07 10:07:32\', \'2019-05-07 10:07:32\'))','2019-05-07 13:07:32','2019-05-07 13:07:32'),(28,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 19, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-07 10:13:13\', \'2019-05-07 10:13:13\'))','2019-05-07 13:13:13','2019-05-07 13:13:13'),(29,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 20, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-07 10:13:44\', \'2019-05-07 10:13:44\'))','2019-05-07 13:13:45','2019-05-07 13:13:45'),(30,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 21, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-07 10:19:11\', \'2019-05-07 10:19:11\'))','2019-05-07 13:19:11','2019-05-07 13:19:11'),(31,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 22, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-07 10:19:20\', \'2019-05-07 10:19:20\'))','2019-05-07 13:19:20','2019-05-07 13:19:20'),(32,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 23, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-07 10:23:48\', \'2019-05-07 10:23:48\'))','2019-05-07 13:23:48','2019-05-07 13:23:48'),(33,'Cannot add or update a child row: a foreign key constraint fails (`rsc`.`rsc_cliente`, CONSTRAINT `fk_estado_civil` FOREIGN KEY (`id_estado_civil`) REFERENCES `rsc_estado_civil` (`id`)) (SQL: update `rsc_cliente` set `id_usuario` = 24, `id_sexo` = , `id_estado_civil` = , `nome` = , `rg` = , `cpf` = , `orgao_rg` = , `data_emissao_rg` = 1969-12-31, `data_nascimento` = 1969-12-31, `email` = , `ddd` = , `telefone_residencial` = , `telefone_celular` = , `rua` = , `numero` = , `cep` = , `bairro` = , `complemento` = , `cidade` = , `estado` = , `updated_at` = 2019-05-07 10:26:54 where `id` = 21)','2019-05-07 13:26:55','2019-05-07 13:26:55'),(34,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 25, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-07 10:27:47\', \'2019-05-07 10:27:47\'))','2019-05-07 13:27:47','2019-05-07 13:27:47'),(35,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 26, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-07 10:27:51\', \'2019-05-07 10:27:51\'))','2019-05-07 13:27:51','2019-05-07 13:27:51'),(36,'Column \'nome\' cannot be null (SQL: insert into `rsc_cliente` (`nome`, `id_usuario`, `data_nascimento`, `id_sexo`, `id_estado_civil`, `cpf`, `rg`, `orgao_rg`, `data_emissao_rg`, `email`, `ddd`, `telefone_residencial`, `telefone_celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `updated_at`, `created_at`) values (null, 27, \'1969-12-31\', null, null, null, null, null, \'1969-12-31\', null, null, null, null, null, null, null, null, null, null, null, \'2019-05-07 10:33:05\', \'2019-05-07 10:33:05\'))','2019-05-07 13:33:05','2019-05-07 13:33:05'),(37,'Não foi possível listar dados de planos!','2019-07-08 12:55:38','2019-07-08 12:55:38');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_boletos`
--

DROP TABLE IF EXISTS `rsc_boletos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `rsc_boletos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contrato` int(11) NOT NULL,
  `codigo_transacao` varchar(100) DEFAULT NULL,
  `codigo_barras` varchar(300) DEFAULT NULL,
  `data_vencimento` date DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contrato_idx` (`id_contrato`),
  CONSTRAINT `fk_contrato1` FOREIGN KEY (`id_contrato`) REFERENCES `rsc_contrato` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_boletos`
--

LOCK TABLES `rsc_boletos` WRITE;
/*!40000 ALTER TABLE `rsc_boletos` DISABLE KEYS */;
INSERT INTO `rsc_boletos` VALUES (1,18,'E3966B16-4E1C-4DA5-A155-BCB7A6AD0D41','03399853012970000028312149601010278840000030150','2019-05-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=19d297c3528c66de23ffcdfda8701f01'),(2,18,'B09C788D-9353-41E4-A92B-5D0A35834C0E','03399853012970000028312151501017979150000030150','2019-06-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=38d1726c74b40a2308f116dd7f9fe5fc'),(3,18,'12E65A7B-3E17-4A08-8AE5-59F19443D7F2','03399853012970000028312152901018479450000030150','2019-07-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=812f8b7875d6678cede40fda781a3f1e'),(4,18,'C64A7096-DFDF-4D3E-9B2D-167209846A5F','03399853012970000028312154101013479760000030150','2019-08-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=4ac5205636644b8d764cd5e8514fd091'),(5,18,'EDF93228-0EA7-4CD3-9F62-F9B73E193C59','03399853012970000028312155601011480070000030150','2019-09-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=d8b35aef34a5b68c8907c99387ca889e'),(6,18,'03037FBC-6F70-4A27-94C2-14062E35AC52','03399853012970000028312157201018780370000030150','2019-10-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=c33e97db1f16c6a6181d78530474268e'),(7,18,'DD9D0C16-8C04-4D13-AFAA-74244183422F','03399853012970000028312158201017180680000030150','2019-11-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=81c3ae9f0fdcc9d8f77ebeff2d2fcd80'),(8,18,'A621C516-F5CE-4284-806E-B18D5C884D4E','03399853012970000028312159701015180980000030150','2019-12-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=c663a3a0aa96ac29949191cd5c58b6e6'),(9,18,'F1269628-F0AD-4020-9B83-909701B95D47','03399853012970000028312161301010281290000030150','2020-01-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=1eea3ae7a5948cdadecee56b365e3e4d'),(10,18,'97C758D9-1C3D-4A83-B6D9-84880DF38B57','03399853012970000028312162101013681600000030150','2020-02-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=214fd0d8ec1d8d628799c885e82730d7'),(11,18,'0C57B515-F38C-44EF-8BE9-A2F4C679B3C3','03399853012970000028312163401016181890000030150','2020-03-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=38224614aaba51ac4f135c65e472fefc'),(12,18,'5BB7153D-A380-4E26-A2CD-8F2B458DD5D1','03399853012970000028312164701018682200000030150','2020-04-09','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=0b2c2e69c72e636af1e6daf3916737e4'),(13,18,'D23258D5-EC7A-4531-8018-94111A627C73','03399853012970000028362823401013978920000030150','2019-05-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=abad545939ebd61ff689f7c69026eb56'),(14,18,'3FD8EE6B-68D2-45A8-96B0-C367839457F9','03399853012970000028362823901012979230000030150','2019-06-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=830b2209244f6908fcf8bf649d936497'),(15,18,'6BA34BC0-997A-4F5A-B124-983E1C065DB2','03399853012970000028362824201016479530000030150','2019-07-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=d0260ced4a3584c0e87729dbd45a93c8'),(16,18,'EBDA0A8A-F5A9-4764-B6FA-A0D987D76714','03399853012970000028362824701015679840000030150','2019-08-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=3a56f5692f47677d89133087287875f2'),(17,18,'1111A38D-3A5C-42E5-B25A-14D42B02DE14','03399853012970000028362825401011180150000030150','2019-09-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=70e416438cc75bcdf505870817d56257'),(18,18,'7C09BD69-978D-470C-A15B-1A09D8F3FE74','03399853012970000028362826101016380450000030150','2019-10-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=cf37ad69cdff0932fb29225b84eda51b'),(19,18,'548CFFC4-9F73-4C2F-903A-54E4C28E4E11','03399853012970000028362826301012180760000030150','2019-11-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=0ce316c5214ab4831b80c7c3f569d848'),(20,18,'A3360C53-B2B6-421D-B6C4-FFB6AAEF0516','03399853012970000028362826701013181060000030150','2019-12-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=497939dd6393c75c46dcdc4b1de18aba'),(21,18,'392955EB-CC4B-4F18-BF7C-DC376A517B0B','03399853012970000028362827101015781370000030150','2020-01-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=e94020211ec5afed0319009910b379e6'),(22,18,'0EE76898-0B3D-42D4-AD1C-FFED8883FB4F','03399853012970000028362827501016481680000030150','2020-02-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=341b58155c300bd56b0b7425a51348fe'),(23,18,'3D782809-5AD9-44E5-968B-AD3FBE27C809','03399853012970000028362828001016381970000030150','2020-03-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=2a24956ed5e364a4897b5db11be2efa9'),(24,18,'5E616E40-6144-49DA-B3E2-FE628F746BFF','03399853012970000028362828501015382280000030150','2020-04-17','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=9f1e63271bc390a6f028c8dbc5e54ba4'),(25,21,'A8F683FB-63CD-452D-9652-31463EB7857D','03399853012970000028375162701017378940000008100','2019-05-19','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=242b5ab15be37c390473f69722d8d7ab2c4594216f6cc90e5254408cf223e6b514125a9a3404f685'),(26,21,'41500FD1-63E3-4DA4-9DF3-1CC4DC5DE056','03399853012970000028375163701016479250000008100','2019-06-19','https://pagseguro.uol.com.br/checkout/payment/booklet/print.jhtml?c=be836cde11b8ca658c9ef3d45cf45dfe3ea0407a22fd28a9fbd0be4e9f67f623a3dc49ce1dff2b28');
/*!40000 ALTER TABLE `rsc_boletos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_cliente`
--

DROP TABLE IF EXISTS `rsc_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `rsc_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `id_estado_civil` int(11) NOT NULL,
  `id_tipo_pessoa` int(11) DEFAULT NULL,
  `nome` varchar(200) NOT NULL,
  `rg` varchar(45) NOT NULL,
  `cpf_cnpj` varchar(20) NOT NULL,
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
  KEY `fk_tipo_pessoa_idx` (`id_tipo_pessoa`),
  CONSTRAINT `fk_estado_civil` FOREIGN KEY (`id_estado_civil`) REFERENCES `rsc_estado_civil` (`id`),
  CONSTRAINT `fk_sexo` FOREIGN KEY (`id_sexo`) REFERENCES `rsc_genero` (`id`),
  CONSTRAINT `fk_tipo_pessoa` FOREIGN KEY (`id_tipo_pessoa`) REFERENCES `rsc_tipo_pessoa` (`id`),
  CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `rsc_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_cliente`
--

LOCK TABLES `rsc_cliente` WRITE;
/*!40000 ALTER TABLE `rsc_cliente` DISABLE KEYS */;
INSERT INTO `rsc_cliente` VALUES (1,3,2,2,NULL,'Maria de la Cruz Garcia Luz','0392999239','91425057047','SSP-SP','1995-03-20','1994-04-20','maria_cruz@sandbox.pagseguro.com.br',11,'34524562','983451067','Avenida 24 de Agosto',244,'08421-510','Conjunto Habitacional Fazenda do Carmo','conjunto','São Paulo','SP',1,'2019-03-29 13:20:16','2019-03-29 13:20:16'),(2,4,2,2,NULL,'Maria de la Cruz Garcia Luz','0392999239','91425057047','SSP-SP','1995-03-20','1994-04-20','maria_cruz@sandbox.pagseguro.com.br',11,'34524562','983451067','Avenida 24 de Agosto',244,'08421-510','Conjunto Habitacional Fazenda do Carmo','conjunto','São Paulo','SP',1,'2019-04-03 20:36:50','2019-04-03 20:36:50'),(4,5,1,2,NULL,'Claudio Pablo Silva Santos','0309447820063','04172473385','SSP-MA','2007-06-14','1990-07-12','claudiopablosilva@sandbox.pagseguro.com.br',98,'325875722','988197084','Avenida Santos Dumont',1,'65046-660','Anil','residencial canaã','São Luís','MA',1,'2019-04-04 19:51:16','2019-04-10 19:36:07'),(14,10,1,1,NULL,'Braulio Roberto Silva Santos','929123003','38433473875','34234234','1995-03-14','1993-11-08','braulio@sandbox.pagseguro.com.br',98,'932587572','985672451','Avenida Santos Dumont',1,'65046-660','Anil','residencial canaã','São Luís','MA',1,'2019-04-16 11:59:56','2019-04-16 12:06:17'),(15,11,1,2,NULL,'Guillermo Garcia Muñoz','4456456456','33278646673','SSP-SP','1992-03-20','1991-06-23','guille@sandbox.pagseguro.com.br',11,'34565278','986451892','Avenida Morumbi',34,'05606-300','Morumbi','Vila Sônia','São Paulo','SP',1,'2019-04-16 13:08:28','2019-04-16 13:09:23'),(16,12,1,1,NULL,'Mauro Soriano Mendez','0124525354','85561881256','ssp-ma','1998-03-20','1986-10-08','ppp@sandbox.pagseguro.com.br',98,'32456789','987654321','Avenida Santos Dumont',3,'65046-660','Anil','residencial canaã','São Luís','MA',0,'2019-04-17 14:02:48','2019-04-17 14:02:48'),(19,13,1,4,NULL,'Jorge José de Vázquez','6726145628','56766247444','SSP-MA','1994-03-20','2000-07-20','jorge@sandbox.pagseguro.com.br',11,'32456175','987619900','Avenida Santos Dumont',1,'65046-660','Anil','residencial primavera','São Luís','MA',0,'2019-05-06 13:02:12','2019-05-06 13:02:12'),(20,16,1,1,NULL,'Alfredo Jiménez','122323123123','94621582232','SSP-MA','1994-03-20','1990-03-20','alfredo@sandbox.pagseguro.com.br',98,'32587126','982712673','Avenida Santos Dumont',1,'65046-660','Anil','residencial canaã','São Luís','MA',0,'2019-05-07 13:06:49','2019-05-07 13:06:49'),(21,16,1,2,NULL,'Alfredo Jiménez','122323123123','94621582232','SSP-MA','1995-05-14','1993-03-30','ccc@gmail.com',98,'32587272','918828398','Avenida Santos Dumont',2,'65046-660','Anil','Residencial canaã','São Luís','MA',0,'2019-05-07 13:26:39','2019-05-07 13:26:39'),(22,5,1,1,NULL,'Jsnuasdu','0102301203','04172473385','SSP-MA','2010-08-20','2009-05-20','cc@sandbox.pagseguro.com.br',98,'36261763','981823817','Avenida Santos Dumont',1,'65046-660','Anil','jhaduasudn jasdjsd','São Luís','MA',0,'2019-05-09 20:21:42','2019-05-09 20:21:42'),(23,5,1,1,NULL,'asdasd  asda as das','9129391293','04172473385','ssp-ma','1992-03-20','1990-06-16','claudiopablosilva@sandbox.pagseguro.com.br',98,'98819708','818238123','Avenida Santos Dumont',21,'65046-660','Anil','hshahd hsdhhas ashdh','São Luís','MA',0,'2019-05-09 20:51:51','2019-05-09 20:51:51'),(24,28,1,1,NULL,'asdasd asd asdasd','12312312312','57625423867','SSP-MA','1998-03-20','2002-11-02','ccc@gmail.com',98,'35617278','987165244','Avenida Santos Dumont',1,'65046-660','Anil','hsgdt shasjh shjau','São Luís','MA',0,'2019-05-10 13:18:37','2019-05-10 13:18:37'),(25,29,1,4,NULL,'ewerwercv sdfsdf sdfsdfsdf','934959903409','37113553150','SSP-SP','1998-05-20','1998-03-20','ppp@gmail.com',98,'37812318','982377127','Avenida Santos Dumont',78,'65046-660','Anil','hsuduas nhduuas','São Luís','MA',0,'2019-05-10 13:32:45','2019-05-10 13:32:45'),(26,5,1,1,NULL,'tescla','0309447820063','04172473385','SSP-MA','1998-03-20','1997-03-20','ccc@gmail.com',98,'81283812','123818238','Avenida Santos Dumont',2,'65046-660','Anil','bhashdhas dahsdhasd','São Luís','MA',0,'2019-05-14 17:57:15','2019-05-14 17:57:15'),(27,30,1,1,NULL,'Santiago Santos Orejuela','8838821893','18367602056','SSP-MA','1997-04-20','1990-06-20','santi_orejuela@gmail.com',98,'32458900','988176523','Avenida Santos Dumont',4,'65046-660','Anil','residencial canaã','São Luís','MA',0,'2019-05-16 14:50:48','2019-05-16 14:50:48'),(28,31,1,1,1,'Claudio Pablo Silva Santos','0309447820063','04172473385','ssp-ma','1990-06-14','1990-07-12','claudiopablosilva@sandbox.pagseguro.com.br',98,'32587572','988197084','Avenida Santos Dumont',1,'65046-660','Anil','residencial canaã','São Luís','MA',1,'2019-07-08 13:01:40','2019-07-08 20:32:17'),(29,32,1,2,NULL,'Robin Jackson Heth','08288128','31099449000182','SSP-SC','2000-03-20','1998-03-20','robin@sandbox.pagseguro.com.br',23,'35251272','982187371','Rua Antônio Conselheiro',344,'88512-420','Santa Catarina','Jardim Boa Ventura','Lages','SC',0,'2019-07-08 13:36:27','2019-07-08 13:36:27');
/*!40000 ALTER TABLE `rsc_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_contrato`
--

DROP TABLE IF EXISTS `rsc_contrato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_contrato`
--

LOCK TABLES `rsc_contrato` WRITE;
/*!40000 ALTER TABLE `rsc_contrato` DISABLE KEYS */;
INSERT INTO `rsc_contrato` VALUES (1,1,41,3,'EDC54B48ADADD8CAA4A25F98BF1A9C4A','2019-03-29 13:20:54','2019-03-29 13:22:09'),(3,28,1,3,'4BD71CAB5959C6988468BF9BE5038722','2019-04-04 19:51:32','2019-04-11 18:49:55'),(13,14,1,3,'7D169F8CBEBE95E664358F8F2B89C57E','2019-04-16 12:00:08','2019-04-16 12:06:16'),(14,15,1,3,'459A14096363DF46644BDFA44BD32CDC','2019-04-16 13:08:41','2019-04-16 13:09:23'),(15,16,1,3,NULL,'2019-04-17 14:03:02','2019-04-17 14:03:02'),(18,19,1,1,NULL,'2019-05-06 13:02:38','2019-05-06 13:02:38'),(19,25,1,1,NULL,'2019-05-10 13:34:35','2019-05-10 13:34:35'),(20,26,1,1,NULL,'2019-05-14 17:57:46','2019-05-14 17:57:46'),(21,27,1,1,NULL,'2019-05-16 14:51:32','2019-05-16 14:51:32'),(22,28,1,1,'E0ECDFB3101047ADD405EFA79B7302C7','2019-07-08 13:01:59','2019-07-08 13:04:37'),(23,29,1,1,NULL,'2019-07-08 13:39:41','2019-07-08 13:39:41');
/*!40000 ALTER TABLE `rsc_contrato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_documentos_cliente`
--

DROP TABLE IF EXISTS `rsc_documentos_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `rsc_documentos_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_documento` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `caminho` varchar(45) DEFAULT NULL,
  `nome_arquivo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contrato_idx` (`id_contrato`),
  KEY `fk_tipo_documento_idx` (`id_tipo_documento`),
  CONSTRAINT `fk_contrato_4` FOREIGN KEY (`id_contrato`) REFERENCES `rsc_contrato` (`id`),
  CONSTRAINT `fk_tipo_documento` FOREIGN KEY (`id_tipo_documento`) REFERENCES `rsc_tipo_documento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_documentos_cliente`
--

LOCK TABLES `rsc_documentos_cliente` WRITE;
/*!40000 ALTER TABLE `rsc_documentos_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `rsc_documentos_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_estado_civil`
--

DROP TABLE IF EXISTS `rsc_estado_civil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
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
 SET character_set_client = utf8 ;
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
 SET character_set_client = utf8 ;
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
 SET character_set_client = utf8 ;
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
 SET character_set_client = utf8 ;
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
 SET character_set_client = utf8 ;
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
 SET character_set_client = utf8 ;
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_pagamento`
--

LOCK TABLES `rsc_pagamento` WRITE;
/*!40000 ALTER TABLE `rsc_pagamento` DISABLE KEYS */;
INSERT INTO `rsc_pagamento` VALUES (1,1,1,1,NULL,NULL,90.00),(2,3,3,1,'33713E69-D080-46DA-8A43-54825B9E0878','2019-04-04 17:43:04',80.00),(3,3,2,1,'5BE0BE1468E442FC9E99BB2155BDD7E6','2019-04-05 10:00:00',80.00),(4,3,3,1,'5BE0BE14-68E4-42FC-9E99-BB2155BDD7E6','2019-04-05 10:09:57',80.00),(5,3,2,1,'7E392F6D-B436-4EB8-BF90-2315C40AB798','2019-04-11 11:19:36',80.00),(13,3,3,1,'7E392F6D-B436-4EB8-BF90-2315C40AB798','2019-04-11 11:22:42',80.00),(14,13,1,NULL,NULL,NULL,80.00),(15,14,1,NULL,NULL,NULL,80.00),(16,22,1,NULL,NULL,NULL,80.00);
/*!40000 ALTER TABLE `rsc_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_plano`
--

DROP TABLE IF EXISTS `rsc_plano`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
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
INSERT INTO `rsc_plano` VALUES (1,1,1,1,1,0,0,80.00,'3521D5D4B6B64EA0043EBF8F229CBC2E'),(2,1,1,1,1,1,2,150.00,'37A867B69A9A25533422DFB727AB4D97'),(3,1,1,1,2,2,3,180.00,'39F596A7CACA02F22442DF8FFE75E735'),(4,1,1,1,3,3,4,216.00,'3CC5939ED5D5313774373FB2ECBD4C02'),(5,1,1,1,4,4,5,259.20,'3F21938E7E7E162BB428EFA040D901D3'),(6,1,1,1,5,5,6,311.04,'41594A9CD0D09B0334068F9116EE2458'),(7,1,1,1,6,6,20,373.25,'45727CBD101070DCC42C8FAB6B21AAD6'),(8,1,1,7,100,20,500,0.00,NULL),(9,1,2,1,1,0,0,160.00,'47D87EE65656F3F004985F924BCC7569'),(10,1,2,1,1,1,2,192.00,'4A5D17155B5B9DADD4682F96702D8D28'),(11,1,3,1,2,2,3,230.40,'4C9A7C18CECEAD62246B4F8CEBFBE269'),(12,1,4,1,3,3,4,276.48,'4ED063FC3C3CCFC114392F8131478D46'),(13,1,5,1,4,4,5,331.78,'50F84EB10202794994E8CF9C159DBB1E'),(14,1,6,1,5,5,6,398.13,'5525DB877070238FF4CB5FA650A78B37'),(15,1,7,1,6,6,20,477.76,'576FFBF6080877B3346DBFB9D98A7132'),(16,1,8,7,100,20,500,0.00,NULL),(17,1,9,1,1,0,0,320.00,'599A48205F5F891AA4F51F9531C4B8EB'),(18,1,9,1,1,1,2,384.00,'5BAAAD8D62622A0BB4A45FA4335617BB'),(19,1,10,1,2,2,3,460.80,'5DA93A086767FD4224DFEFBEF7A2E6DF'),(20,1,11,1,3,3,4,552.96,'5FF3F115F5F594D0042ACFAC9B810E1B'),(21,1,12,1,4,4,5,663.55,'626D03BC1D1D1A0AA45D6F9DDCF14D5F'),(22,1,13,1,5,5,6,796.26,'66B5127A9A9A05433479FF85FD8322BE'),(23,1,14,1,6,6,20,955.51,'691384C3B9B9468FF4874FA0D012A10A'),(24,1,15,7,100,20,500,0.00,NULL),(25,1,16,1,1,0,0,640.00,'6B330AED3434375444561F8D7F5BA3EC'),(26,1,16,1,1,1,2,768.00,'723434788A8AC2A884976F82C2546AC4'),(27,1,17,1,2,2,3,921.60,'7493672167674FF444E32F93C93A47A8'),(28,1,18,1,3,3,4,1105.92,'7774B4715C5CA7E664E74F818E93A903'),(29,1,19,1,4,4,5,1327.10,'79B2C714A5A5172774B8AFBFCE4FBD3D'),(30,1,20,1,5,5,6,1592.52,'7C6A69FB77775ED224D6CF94A413226E'),(31,1,21,1,6,6,20,1911.03,'7EE1360E7E7EFD72249DEFA671B624E9'),(32,1,22,7,100,20,500,0.00,NULL),(33,1,23,1,1,0,0,1280.00,'816BE9FE9191217EE4289F913A6878D9'),(34,1,23,1,1,1,2,1536.00,'839D74020101CB9224705F98B8C5AE73'),(35,1,25,1,2,2,3,1612.80,'85B8E5D51B1B034FF47D5FA040BE746B'),(36,1,26,1,3,3,4,1935.36,'882DE1BB0D0D40977408CFB34C5E9B9D'),(37,1,27,1,4,4,5,2322.43,'8AC0D7F45454D46774616F8CD6DA9532'),(38,1,28,1,5,5,6,2786.92,'8CF2D9AB8080397EE478AF9215EC6B06'),(39,1,29,1,6,6,20,3344.30,'8F2B444275755176648DCF98DACA05C4'),(40,1,30,7,100,20,500,0.00,NULL),(41,2,1,1,1,0,0,90.00,'918E40A15D5D02E8844D8FA9621BEDC8'),(42,2,1,1,1,1,2,180.00,'943E46976767B38BB44FCF9B1A8F5498'),(43,2,1,1,2,2,3,216.00,'9665A0CA91916285545ACFB1626EE161'),(44,2,1,1,3,3,4,259.20,'98B570421414FB37745A5FADB7312CE9'),(45,2,1,1,4,4,5,311.04,'9B6D7D413E3EB60554190F900AF0E745'),(46,2,1,1,5,5,6,373.25,'9E7D74B9FFFFF99DD4E12F9D6D6BAA72'),(47,2,1,1,6,6,20,447.90,'A25EA143F9F9F042242D7F93C7218E28'),(48,2,1,7,100,20,500,0.00,NULL),(49,2,2,1,1,0,0,180.00,NULL),(50,2,2,1,1,1,2,216.00,NULL),(51,2,3,1,2,2,3,259.20,NULL),(52,2,4,1,3,3,4,311.04,NULL),(53,2,5,1,4,4,5,373.25,NULL),(54,2,6,1,5,5,6,447.90,NULL),(55,2,7,1,6,6,20,537.48,NULL),(56,2,8,7,100,20,500,0.00,NULL),(57,2,9,1,1,0,0,360.00,NULL),(58,2,9,1,1,1,2,432.00,NULL),(59,2,10,1,2,2,3,518.40,NULL),(60,2,11,1,3,3,4,622.08,NULL),(61,2,12,1,4,4,5,746.50,NULL),(62,2,13,1,5,5,6,895.80,NULL),(63,2,14,1,6,6,20,1074.95,NULL),(64,2,15,7,100,20,500,0.00,NULL),(65,2,16,1,1,0,0,720.00,NULL),(66,2,16,1,1,1,2,864.00,NULL),(67,2,17,1,2,2,3,1036.80,NULL),(68,2,18,1,3,3,4,1244.16,NULL),(69,2,19,1,4,4,5,1492.99,NULL),(70,2,20,1,5,5,6,1791.59,NULL),(71,2,21,1,6,6,20,2149.91,NULL),(72,2,22,7,100,20,500,0.00,NULL),(73,2,23,1,1,0,0,1440.00,NULL),(74,2,23,1,1,1,2,1728.00,NULL),(75,2,25,1,2,2,3,1814.40,NULL),(76,2,26,1,3,3,4,2177.28,NULL),(77,2,27,1,4,4,5,2612.74,NULL),(78,2,28,1,5,5,6,3135.28,NULL),(79,2,29,1,6,6,20,3762.34,NULL),(80,2,30,7,100,20,500,0.00,NULL),(81,3,1,1,1,0,0,150.00,NULL),(82,3,1,1,1,1,2,230.00,NULL),(83,3,1,1,2,2,3,276.00,NULL),(84,3,1,1,3,3,4,331.20,NULL),(85,3,1,1,4,4,5,397.44,NULL),(86,3,1,1,5,5,6,476.93,NULL),(87,3,1,1,6,6,20,715.39,NULL),(88,3,1,7,100,20,500,0.00,NULL),(89,3,2,1,1,0,0,300.00,NULL),(90,3,2,1,1,1,2,360.00,NULL),(91,3,3,1,2,2,3,432.00,NULL),(92,3,4,1,3,3,4,518.40,NULL),(93,3,5,1,4,4,5,622.08,NULL),(94,3,6,1,5,5,6,746.50,NULL),(95,3,7,1,6,6,20,1119.74,NULL),(96,3,8,7,100,20,500,0.00,NULL),(97,3,9,1,1,0,0,600.00,NULL),(98,3,9,1,1,1,2,720.00,NULL),(99,3,10,1,2,2,3,864.00,NULL),(100,3,11,1,3,3,4,1036.80,NULL),(101,3,12,1,4,4,5,1244.16,NULL),(102,3,13,1,5,5,6,1492.99,NULL),(103,3,14,1,6,6,20,1791.59,NULL),(104,3,15,7,100,20,500,0.00,NULL),(105,3,16,1,1,0,0,1000.00,NULL),(106,3,16,1,1,1,2,1200.00,NULL),(107,3,17,1,2,2,3,1440.00,NULL),(108,3,18,1,3,3,4,1728.00,NULL),(109,3,19,1,4,4,5,2073.60,NULL),(110,3,20,1,5,5,6,2488.32,NULL),(111,3,21,1,6,6,20,2985.98,NULL),(112,3,22,7,100,20,500,0.00,NULL),(113,3,23,1,1,0,0,1500.00,NULL),(114,3,23,1,1,1,2,2000.00,NULL),(115,3,25,1,2,2,3,2100.00,NULL),(116,3,26,1,3,3,4,2520.00,NULL),(117,3,27,1,4,4,5,3024.00,NULL),(118,3,28,1,5,5,6,3628.80,NULL),(119,3,29,1,6,6,20,4354.56,NULL),(120,3,30,7,100,20,500,0.00,NULL),(121,4,1,1,1,0,0,180.00,NULL),(122,4,1,1,1,1,2,230.00,NULL),(123,4,1,1,2,2,3,276.00,NULL),(124,4,1,1,3,3,4,331.20,NULL),(125,4,1,1,4,4,5,397.44,NULL),(126,4,1,1,5,5,6,476.93,NULL),(127,4,1,1,6,6,20,715.39,NULL),(128,4,1,7,100,20,500,0.00,NULL),(129,4,2,1,1,0,0,300.00,NULL),(130,4,2,1,1,1,2,360.00,NULL),(131,4,3,1,2,2,3,432.00,NULL),(132,4,4,1,3,3,4,518.40,NULL),(133,4,5,1,4,4,5,622.08,NULL),(134,4,6,1,5,5,6,746.50,NULL),(135,4,7,1,6,6,20,1119.74,NULL),(136,4,8,7,100,20,500,0.00,NULL),(137,4,9,1,1,0,0,600.00,NULL),(138,4,9,1,1,1,2,720.00,NULL),(139,4,10,1,2,2,3,864.00,NULL),(140,4,11,1,3,3,4,1036.80,NULL),(141,4,12,1,4,4,5,1244.16,NULL),(142,4,13,1,5,5,6,1492.99,NULL),(143,4,14,1,6,6,20,1791.59,NULL),(144,4,15,7,100,20,500,0.00,NULL),(145,4,16,1,1,0,0,1000.00,NULL),(146,4,16,1,1,1,2,1200.00,NULL),(147,4,17,1,2,2,3,1440.00,NULL),(148,4,18,1,3,3,4,1728.00,NULL),(149,4,19,1,4,4,5,2073.60,NULL),(150,4,20,1,5,5,6,2488.32,NULL),(151,4,21,1,6,6,20,2985.98,NULL),(152,4,22,7,100,20,500,0.00,NULL),(153,4,23,1,1,0,0,1500.00,NULL),(154,4,23,1,1,1,2,2000.00,NULL),(155,4,25,1,2,2,3,2100.00,NULL),(156,4,26,1,3,3,4,2520.00,NULL),(157,4,27,1,4,4,5,3024.00,NULL),(158,4,28,1,5,5,6,3628.80,NULL),(159,4,29,1,6,6,20,4354.56,NULL),(160,4,30,7,100,20,500,0.00,NULL);
/*!40000 ALTER TABLE `rsc_plano` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_status`
--

DROP TABLE IF EXISTS `rsc_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
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
 SET character_set_client = utf8 ;
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
-- Table structure for table `rsc_tipo_documento`
--

DROP TABLE IF EXISTS `rsc_tipo_documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `rsc_tipo_documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_tipo_documento`
--

LOCK TABLES `rsc_tipo_documento` WRITE;
/*!40000 ALTER TABLE `rsc_tipo_documento` DISABLE KEYS */;
INSERT INTO `rsc_tipo_documento` VALUES (1,'Fiscal - PGDAS'),(2,'Cadastro');
/*!40000 ALTER TABLE `rsc_tipo_documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_tipo_empresa`
--

DROP TABLE IF EXISTS `rsc_tipo_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
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
-- Table structure for table `rsc_tipo_pessoa`
--

DROP TABLE IF EXISTS `rsc_tipo_pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `rsc_tipo_pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_tipo_pessoa`
--

LOCK TABLES `rsc_tipo_pessoa` WRITE;
/*!40000 ALTER TABLE `rsc_tipo_pessoa` DISABLE KEYS */;
INSERT INTO `rsc_tipo_pessoa` VALUES (1,'Pessoa Física'),(2,'Pessoa Jurídica');
/*!40000 ALTER TABLE `rsc_tipo_pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_tipo_status`
--

DROP TABLE IF EXISTS `rsc_tipo_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
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
 SET character_set_client = utf8 ;
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
INSERT INTO `rsc_unidade` VALUES (1,'SÃO JOÃO DOS PATOS'),(2,'PARAIBANO'),(3,'BARÃO DE GRAJAÚ'),(4,'PASSAGEM FRANCA'),(5,'BURITI BRAVO'),(6,'SUCUPIRA RIACHÃO'),(7,'SUCUPIRA DO NORTE'),(8,'COLINAS'),(9,'SÃO DOMINGOS DO MARANHÃO'),(10,'SÃO DOMINGO DO AZEITÃO'),(11,'PRESIDENTE DUTRA'),(13,'SÃO RAIMUNDO DAS MANGABEIRAS'),(14,'SÃO LUÍS'),(15,'SÃO JOSÉ DE RIBAMAR'),(16,'RAPOSA'),(17,'PAÇO DO LUMIAR'),(18,'BALSAS');
/*!40000 ALTER TABLE `rsc_unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsc_usuario`
--

DROP TABLE IF EXISTS `rsc_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `rsc_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsc_usuario`
--

LOCK TABLES `rsc_usuario` WRITE;
/*!40000 ALTER TABLE `rsc_usuario` DISABLE KEYS */;
INSERT INTO `rsc_usuario` VALUES (3,'91425057047','ca0f72e54db126bc394f444e77131fee','2019-03-29 13:20:16','2019-03-29 13:20:16'),(4,'91425057047','714bc72d0b0354306b7d726a159aed8f','2019-04-03 20:36:50','2019-04-03 20:36:50'),(6,'40795134614','2dcfcb2010ce1f293f7481ec5c721e53','2019-04-15 13:19:56','2019-04-15 13:19:56'),(9,'55408776751','2dcfcb2010ce1f293f7481ec5c721e53','2019-04-15 19:40:42','2019-04-15 19:40:42'),(10,'38433473875','2dcfcb2010ce1f293f7481ec5c721e53','2019-04-16 11:59:56','2019-04-16 11:59:56'),(11,'33278646673','fe458e214a06e76e1f38ec557810d2cf','2019-04-16 13:08:28','2019-04-16 13:08:28'),(12,'85561881256','2dcfcb2010ce1f293f7481ec5c721e53','2019-04-17 14:02:48','2019-04-17 14:02:48'),(13,'56766247444','ca0f72e54db126bc394f444e77131fee','2019-05-03 12:31:47','2019-05-06 13:02:12'),(16,'94621582232','0f3fefa30fd3f9c2eeb8bccaa4d51a92','2019-05-07 13:06:49','2019-05-07 13:26:39'),(28,'57625423867','2dcfcb2010ce1f293f7481ec5c721e53','2019-05-10 13:18:37','2019-05-10 13:18:37'),(29,'37113553150','ca0f72e54db126bc394f444e77131fee','2019-05-10 13:32:45','2019-05-10 13:32:45'),(30,'18367602056','ca0f72e54db126bc394f444e77131fee','2019-05-16 14:50:48','2019-05-16 14:50:48'),(31,'04172473385','ca0f72e54db126bc394f444e77131fee','2019-05-16 14:50:48','2019-05-16 14:50:48'),(32,'31099449000182','b369a59b8044a9359864e4fa16a05e77','2019-07-08 13:36:27','2019-07-08 13:36:27');
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

-- Dump completed on 2019-07-15 17:56:55
