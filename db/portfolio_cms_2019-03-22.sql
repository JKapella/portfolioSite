# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.43)
# Database: portfolio_cms
# Generation Time: 2019-03-22 11:09:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about_me_data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about_me_data`;

CREATE TABLE `about_me_data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(3000) NOT NULL DEFAULT '',
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_deleted` tinyint(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `about_me_data` WRITE;
/*!40000 ALTER TABLE `about_me_data` DISABLE KEYS */;

INSERT INTO `about_me_data` (`id`, `content`, `post_time`, `is_deleted`)
VALUES
	(28,'I\'m a Full Stack Developer-in-training with The Mayden Academy who\'s enthusiastic about both front-end design and back-end systems. I\'m also a Certified Scrum Master with training in Agile methodologies. I\'m fascinated by games and games design, and have been jamming and creating in my spare time for several years. Away from keyboards and screens I can also be found making loud noises with electric guitars, and stroking all the good dogs.','2019-03-01 14:52:42',0);

/*!40000 ALTER TABLE `about_me_data` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table security_data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `security_data`;

CREATE TABLE `security_data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL DEFAULT '',
  `password` varchar(256) NOT NULL DEFAULT '',
  `is_deleted` tinyint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `security_data` WRITE;
/*!40000 ALTER TABLE `security_data` DISABLE KEYS */;

INSERT INTO `security_data` (`id`, `username`, `password`, `is_deleted`)
VALUES
	(1,'JKapella','$2y$10$KavLOxZfciplmaBp2OG/zuv5JWQqqoqJ/Ty60DFDylgQIVX6srmbG',0);

/*!40000 ALTER TABLE `security_data` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
