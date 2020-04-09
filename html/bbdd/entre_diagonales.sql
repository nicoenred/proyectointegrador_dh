CREATE DATABASE  IF NOT EXISTS `entre_diagonales` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `entre_diagonales`;
-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: entre_diagonales
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAdmin`),
  UNIQUE KEY `idAdmin_UNIQUE` (`idAdmin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'nicoorona','nicolasoronards@gmail.com','admin','2216039271');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `imgprofile` tinytext,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `idCliente_UNIQUE` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'clienteadmin','cliente@entrediagonales.com','$2y$10$.7.8LNrGhFe9z4f19THWeu8BveqJLOvHSvBZW4h/MnwCiLYas6oUi','Administrador','Cliente','12345678910','admin_4.jpeg'),(5,'nicofishq','nico@entrediagonales.com','$2y$10$ltUPZAZih1Cp7sifFM8afes7N3HOEQdrtu7n/j.Li4qt08wUNlqsC','Orona','Nico','12345678910','nicoorona_5.jpeg');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compra` (
  `idcompra` int(11) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL,
  `id_Cliente` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idcompra`),
  KEY `fk_factura_Clientes` (`id_Cliente`),
  CONSTRAINT `fk_factura_Clientes` FOREIGN KEY (`id_Cliente`) REFERENCES `clientes` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle`
--

DROP TABLE IF EXISTS `detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalle` (
  `idDetalle` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `id_Producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDetalle`),
  KEY `fk_factura_has_Producto_Producto1_idx` (`id_Producto`),
  KEY `fk_factura_has_Producto_factura1_idx` (`id_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle`
--

LOCK TABLES `detalle` WRITE;
/*!40000 ALTER TABLE `detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `subtitulo` text,
  `precio` text NOT NULL,
  `descripcion` text,
  `tag` text,
  `estado` tinyint(1) NOT NULL DEFAULT '0',
  `imagen_principal` text,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (3,'Visita la Republica de los niños','Un recorrido por la ciudad pensada para los mÃ¡s chicos','$500','La RepÃºblica de los NiÃ±os es un parque educativo ubicado en la localidad de Manuel B. Gonnet, partido de La Plata, Provincia de Buenos Aires. Es considerado el primer parque temÃ¡tico de AmÃ©rica y reproduce un conglomerado urbano y rural en escala acorde a niÃ±os de 10 aÃ±os, con todas las instituciones correspondientes al sistema democrÃ¡tico: parlamento, casa de gobierno, palacio de justicia, iglesia, puerto, teatro, aeropuerto, restaurantes, hoteles','zona_norte',0,'ConocÃ© la Republica de los NiÃ±os.jpg'),(5,'Visita a Punta Lara','ConocÃ© el rÃ­o mÃ¡s grande de Argentina','400','AdemÃ¡s del atractivo que puede presentar la excepcional selva, a su costado sur se presenta el balneario de Punta Lara y, en sus inmediaciones la curiosa isla Santiago, es tambiÃ©n Punta Lara uno de los accesos posibles hacia el viejo fuerte espaÃ±ol de la Ensenada de BarragÃ¡n, desde el cual, se organizÃ³ la defensa del incipiente pueblo argentino durante las invasiones inglesas.',NULL,0,'Visita a Punta Lara.jpg'),(6,'Visita a la Catedral de La Plata','El edificio mÃ¡s alto de la ciudad de las diagonales','700','Es un recorrido al que se accede con un guÃ­a. Se puede realizar el ascenso de martes a domingos a partir de las 10.30 de la maÃ±ana. Cada 30 o 45 minutos. Los horarios no son fijos y se reservan con la misma entrada (el prÃ³ximo disponible que haya en ese momento). Generalmente de martes a viernes se hacen paradas en los dos niveles, y los fines de semana, hasta los 63 metros.',NULL,0,'Visita a la Catedral de La Plata.jpg');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-07 23:23:12
