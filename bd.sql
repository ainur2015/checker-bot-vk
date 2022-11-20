CREATE TABLE bannames (
id int NOT NULL AUTO_INCREMENT,
Name text,
BanSeconds int,
BanReason text,
BanAdmin text,
BanDate date,
PRIMARY KEY (id)
)

DROP TABLE IF EXISTS `fulldostup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fulldostup` (
  `id` int(11) NOT NULL,
  `groups` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
