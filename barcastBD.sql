CREATE DATABASE  IF NOT EXISTS `barcast` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `barcast`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: barcast
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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
-- Table structure for table `dias`
--

DROP TABLE IF EXISTS `dias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dias` (
  `idDias` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`idDias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Catalogo dias';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dias`
--

LOCK TABLES `dias` WRITE;
/*!40000 ALTER TABLE `dias` DISABLE KEYS */;
/*!40000 ALTER TABLE `dias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `negocio`
--

DROP TABLE IF EXISTS `negocio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `negocio` (
  `idNegocio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `fecha_Alta` date NOT NULL,
  `fecha_Modificacion` date NOT NULL,
  PRIMARY KEY (`idNegocio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contendra la información del negocio';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `negocio`
--

LOCK TABLES `negocio` WRITE;
/*!40000 ALTER TABLE `negocio` DISABLE KEYS */;
/*!40000 ALTER TABLE `negocio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `negocioubicaciones`
--

DROP TABLE IF EXISTS `negocioubicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `negocioubicaciones` (
  `idNegocioUbicaciones` int(11) NOT NULL AUTO_INCREMENT,
  `idNegocio` int(11) NOT NULL,
  `idUbicaciones` int(11) NOT NULL,
  PRIMARY KEY (`idNegocioUbicaciones`),
  KEY `FK_NegocioUbicaciones_Negocio_idx` (`idNegocio`),
  KEY `FK_NegocioUbicaciones_Ubicaciones_idx` (`idUbicaciones`),
  CONSTRAINT `FK_NegocioUbicaciones_Negocio` FOREIGN KEY (`idNegocio`) REFERENCES `negocio` (`idNegocio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_NegocioUbicaciones_Ubicaciones` FOREIGN KEY (`idUbicaciones`) REFERENCES `ubicaciones` (`idUbicaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que relacionara los negocios con sus ubicaciones';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `negocioubicaciones`
--

LOCK TABLES `negocioubicaciones` WRITE;
/*!40000 ALTER TABLE `negocioubicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `negocioubicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permisos`
--

DROP TABLE IF EXISTS `permisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permisos` (
  `idPermisos` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idTipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idPermisos`),
  KEY `idTipoUsuario_idx` (`idTipoUsuario`),
  CONSTRAINT `FK_TipoUsuario_Permisos` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Permisos para cada usuario';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisos`
--

LOCK TABLES `permisos` WRITE;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promociones`
--

DROP TABLE IF EXISTS `promociones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promociones` (
  `idPromociones` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) NOT NULL,
  `idDia` int(11) NOT NULL,
  `fecha_Inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `activo` bit(1) NOT NULL,
  `idNegocio` int(11) NOT NULL,
  PRIMARY KEY (`idPromociones`),
  KEY `FK_Promociones_Dias_idx` (`idDia`),
  KEY `FK_Promociones_Negocio_idx` (`idNegocio`),
  CONSTRAINT `FK_Promociones_Dias` FOREIGN KEY (`idDia`) REFERENCES `dias` (`idDias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Promociones_Negocio` FOREIGN KEY (`idNegocio`) REFERENCES `negocio` (`idNegocio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contendra las promociones del negocio';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promociones`
--

LOCK TABLES `promociones` WRITE;
/*!40000 ALTER TABLE `promociones` DISABLE KEYS */;
/*!40000 ALTER TABLE `promociones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fechaAlta` date NOT NULL,
  `fechaModificacion` date NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Tipos de usuario';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousuario`
--

LOCK TABLES `tipousuario` WRITE;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` VALUES (1,'Administrador','2017-02-19','2017-03-27',''),(4,'BÃ¡sico','2017-03-11','2017-03-11','');
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicaciones`
--

DROP TABLE IF EXISTS `ubicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubicaciones` (
  `idUbicaciones` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(80) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `telefono` varchar(25) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `fecha_Alta` date NOT NULL,
  `fecha_Modificacion` date NOT NULL,
  PRIMARY KEY (`idUbicaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contendra las diversas ubicaciones del negocio';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicaciones`
--

LOCK TABLES `ubicaciones` WRITE;
/*!40000 ALTER TABLE `ubicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `ubicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_negocio`
--

DROP TABLE IF EXISTS `usuario_negocio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_negocio` (
  `idUsuarioNegocio` int(11) NOT NULL AUTO_INCREMENT,
  `idNegocio` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idTipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idUsuarioNegocio`),
  KEY `FK_UsuarioNegocio_Negocio_idx` (`idNegocio`),
  KEY `FK_UsuarioNegocio_Usuarios_idx` (`idUsuario`),
  KEY `FK_UsuarioNegocio_TipoUsuario_idx` (`idTipoUsuario`),
  CONSTRAINT `FK_UsuarioNegocio_Negocio` FOREIGN KEY (`idNegocio`) REFERENCES `negocio` (`idNegocio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_UsuarioNegocio_TipoUsuario` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_UsuarioNegocio_Usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que relacionara los usuarios con su negocio';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_negocio`
--

LOCK TABLES `usuario_negocio` WRITE;
/*!40000 ALTER TABLE `usuario_negocio` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_negocio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `idTipoUsuario` int(11) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `FK_tipousuario_idx` (`idTipoUsuario`),
  CONSTRAINT `FK_tipousuario` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla de control de usuarios';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-02 19:10:06
