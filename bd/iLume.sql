-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: iLume
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `causa_denuncia`
--

DROP TABLE IF EXISTS `causa_denuncia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `causa_denuncia` (
  `id_causa_denuncia` int(11) NOT NULL AUTO_INCREMENT,
  `causa_denuncia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_causa_denuncia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `causa_denuncia`
--

LOCK TABLES `causa_denuncia` WRITE;
/*!40000 ALTER TABLE `causa_denuncia` DISABLE KEYS */;
INSERT INTO `causa_denuncia` VALUES (1,'vandalismo'),(2,'furto'),(3,'evento climatíco'),(4,'acidente rodoviário'),(5,'falta de infraestrutura'),(6,'queda de energia'),(7,'outros');
/*!40000 ALTER TABLE `causa_denuncia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `denuncia`
--

DROP TABLE IF EXISTS `denuncia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `denuncia` (
  `id_denuncia` int(11) NOT NULL AUTO_INCREMENT,
  `cep_denuncia` varchar(9) NOT NULL,
  `causa_denuncia` int(11) NOT NULL,
  `arquivo_denuncia` varchar(100) NOT NULL,
  `ref_denuncia` varchar(100) DEFAULT NULL,
  `num_residencia_denuncia` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_denuncia`),
  KEY `fk_denuncia_causa_denuncia` (`causa_denuncia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `denuncia`
--

LOCK TABLES `denuncia` WRITE;
/*!40000 ALTER TABLE `denuncia` DISABLE KEYS */;
INSERT INTO `denuncia` VALUES (1,'o',0,'o','o','o'),(2,'sd',0,'',NULL,NULL),(3,'bbfggfdgs',0,'',NULL,NULL),(4,'cwddqwqd',0,'',NULL,NULL);
/*!40000 ALTER TABLE `denuncia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suporte`
--

DROP TABLE IF EXISTS `suporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suporte` (
  `id_suporte` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `mensagem_suporte` varchar(500) NOT NULL,
  `arquivo_suporte` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_suporte`),
  KEY `fk_suporte_usuario` (`id_usuario`),
  CONSTRAINT `fk_suporte_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suporte`
--

LOCK TABLES `suporte` WRITE;
/*!40000 ALTER TABLE `suporte` DISABLE KEYS */;
INSERT INTO `suporte` VALUES (1,NULL,'[deasd]',NULL),(2,NULL,'deasd',NULL);
/*!40000 ALTER TABLE `suporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `desc_tipo_usuario` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_usuario`),
  CONSTRAINT `tipo_usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES (0,'comun'),(1,'administrador');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(60) DEFAULT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(70) NOT NULL,
  `id_tipo_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_usuario_tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1000,'vitorVasconcellos47','vitor@gmail.com','c4ca4238a0b923820dcc509a6f75849b',0),(1001,'Igor Giovani','vitormatador@gmail.com','202cb962ac59075b964b07152d234b70',1),(1002,'BrunoPires13','vitormatador2010@gmail.com','202cb962ac59075b964b07152d234b70',2),(1003,'leonardo','leo.sidon@gmail.com','202cb962ac59075b964b07152d234b70',2),(1004,'v','vitormatador2010@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',2),(1005,'v','vitormatador2010@gmail.com','c20ad4d76fe97759aa27a0c99bff6710',2),(1006,'v','vitormatador2010@gmail.com','202cb962ac59075b964b07152d234b70',2),(1007,'emilly','emilly@gmail.com','5f5db66425bfe2d528f30ca588d0133c',2);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-24 15:13:27
