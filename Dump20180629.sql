CREATE DATABASE  IF NOT EXISTS `challenge` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `challenge`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: challenge
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.33-MariaDB

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
-- Table structure for table `atendentes`
--

DROP TABLE IF EXISTS `atendentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atendentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atendentes`
--

LOCK TABLES `atendentes` WRITE;
/*!40000 ALTER TABLE `atendentes` DISABLE KEYS */;
INSERT INTO `atendentes` VALUES (4,'Anderson'),(5,'André'),(6,'Otávio');
/*!40000 ALTER TABLE `atendentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `empresa` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Jefferson','Pixel Inc'),(2,'Máximo','York Research'),(3,'Gabriella','Faraday Co');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incidente`
--

DROP TABLE IF EXISTS `incidente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incidente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `atendente` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `descricao` varchar(512) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `creation_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_incidente_atendente_idx` (`atendente`),
  KEY `fk_incidente_clientes1_idx` (`cliente`),
  CONSTRAINT `fk_atendente` FOREIGN KEY (`atendente`) REFERENCES `atendentes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incidente`
--

LOCK TABLES `incidente` WRITE;
/*!40000 ALTER TABLE `incidente` DISABLE KEYS */;
INSERT INTO `incidente` VALUES (1,4,2,'Desc do problema ','Encerrado','2018-06-19 04:12:48'),(35,6,3,'teste','Encerrado','2018-06-28 20:57:26'),(36,5,1,'teste1','Encerrado','2018-06-28 21:23:01'),(37,6,2,'teste2','Encerrado','2018-06-28 21:23:09'),(43,4,1,'teste 5','Aberto','2018-06-29 21:14:40'),(44,5,3,'teste6','Aberto','2018-06-29 21:14:55');
/*!40000 ALTER TABLE `incidente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'challenge'
--

--
-- Dumping routines for database 'challenge'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-29 18:33:52
