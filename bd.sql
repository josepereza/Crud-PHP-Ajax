-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: automoviles
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `marcas2`
--

DROP TABLE IF EXISTS `marcas2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcas2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `potencia` varchar(10) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `precio` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas2`
--

LOCK TABLES `marcas2` WRITE;
/*!40000 ALTER TABLE `marcas2` DISABLE KEYS */;
INSERT INTO `marcas2` VALUES (1,'jaguar','200cv','rojo',200.00),(2,'jaguar 49 ','200cv','rojo',211.00),(4,'jaguar 49','200cv','rojo',200.00),(35,'Toyota       ','225cv','blanco',35.35),(54,'renault    ','200','verde',33.00),(55,'ford          ','55','gris fa',12.00),(61,'ford ','100','gris',2000.00),(62,'melon','87','negro fursia',500.00),(65,'marico  ','700','balnco',11.00),(66,'marico2  ','33','34',35.00),(69,'Toyota','225cv','blanco',22.00),(71,'chevrolet           ','200cv','blanco',5665.00),(72,'tesla','155','negro',50000.00),(73,'tesla x200','250','rojo',500.00),(75,'seat panda  ','80','rojo claro',300.52),(76,'mercedes  ','500','blanco',25.00),(77,'mercdes 300d ','190','naranja',501.00),(78,'opel astra ','250','ngro',900.00),(79,'mercdes clase','300','verde',99.00),(80,'mercdes clase b','300','verde',99.10),(81,'pegaso ','300','negro',3030.00),(82,'pegaso a','300','negro',3030.00),(83,'pegaso ab','300','negro',3030.00),(84,'pega so ab','300','negro',2.00),(86,'smart','50','negro',100.00),(87,'Robert','200','pardo',300.00),(88,'Robert','200','pardo',300.00),(89,'tirano','200','gris',4.00),(90,'vito','200','blano',22.00);
/*!40000 ALTER TABLE `marcas2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-03 19:20:38
