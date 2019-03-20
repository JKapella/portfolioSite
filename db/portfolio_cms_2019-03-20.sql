# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.43)
# Database: portfolio_cms
# Generation Time: 2019-03-20 11:37:33 +0000
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
	(1,'This will be where the test content for the about me page goes. It\'s gonna be really great, I hope you enjoy it.','2019-02-28 07:06:16',1),
	(2,'I?m a Full Stack Developer-in-training with The Mayden Academy who?s enthusiastic about both front-end design and back-end systems. I?m also a Certified Scrum Master with training in Agile methodologies. I?m fascinated by games and games design, and have been jamming and creating in my spare time for several years. Away from keyboards and screens I can also be found making loud noises with electric guitars, and stroking all the good dogs.','2019-02-28 08:07:26',1),
	(3,'I?m a Full Stack Developer-in-training with The Mayden Academy who?s enthusiastic about both front-end design and back-end systems. I?m also a Certified Scrum Master with training in Agile methodologies. I?m fascinated by games and games design, and have been jamming and creating in my spare time for several years. Away from keyboards and screens I can also be found making loud noises with electric guitars, and stroking all the good dogs.','2019-02-28 09:21:21',1),
	(5,'testing the query','2019-02-28 09:21:31',1),
	(6,'text','2019-02-28 09:23:07',1),
	(7,'This is a lovely new post, doeth it work?','2019-02-28 09:47:36',1),
	(8,'New post who dis?','2019-02-28 09:48:58',1),
	(9,'I am james, and I am the best, the bestest ever, no one ith better, yeah?','2019-02-28 09:52:26',1),
	(11,'Does this still work?','2019-02-28 09:58:18',1),
	(12,'Hello Here is a nice new about me page!','2019-02-28 12:33:10',1),
	(13,'Chicken and chips','2019-02-28 13:33:19',1),
	(14,'did this work x2','2019-02-28 13:44:51',1),
	(15,'did this work?','2019-02-28 13:44:52',1),
	(16,'If this works, i\'m gonna be pretty frigging happy','2019-02-28 15:47:45',1),
	(18,'Uh, whut?','2019-02-28 15:47:45',1),
	(19,'All still good?','2019-02-28 15:47:45',1),
	(20,'I am editing my lovely post post','2019-02-28 15:49:20',1),
	(21,'Editing my post','2019-02-28 16:16:07',1),
	(22,'About me, I am a super cool dude, yeah?','2019-02-28 18:00:39',1),
	(23,'I am james, and I will do a code for you VERY NICE 100%','2019-02-28 18:05:42',1),
	(24,'I DO GOOD WEBSITE FOR YOU VERY NICE 100%','2019-02-28 18:05:54',0);

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
