# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.43)
# Database: portfolio_CMS
# Generation Time: 2019-03-20 14:53:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about_me_section
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about_me_section`;

CREATE TABLE `about_me_section` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `section` varchar(1000) NOT NULL DEFAULT '',
  `deleted` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `about_me_section` WRITE;
/*!40000 ALTER TABLE `about_me_section` DISABLE KEYS */;

INSERT INTO `about_me_section` (`id`, `section`, `deleted`)
VALUES
	(1,'Hello! My name is Aldo and I`m a 23 year old Italian fella from a small town near Rome. I am currently studying at the renowned Mayden Academy in Bath to become a Full Stack web developer. I enjoy the highs and lows of coding, especially the time spent in front of the laptop with a good problem to solve. I particularly love the feeling of creating something, wether a product or a service that people can use. I currently feel confident in HTML and CSS and I look forward to learning the other languages the course has in store for us to expand my knowledge: PHP, Javascript and MySQL.',0),
	(2,'I migrated in the UK for a scenery change and worked in casinos for about 3 years before I moved to Bath. Whilst considering other opportunities I remembered how much I had enjoyed the software development I experienced at high school, so decided to apply for the Mayden Academy to help change my career and life! In my free time I like to cook, as a proud Italian, for my friends and girlfriend. I also love relaxing at home watching movies.',0),
	(3,'CIAO BELLO!!!!CHE SCHIFO LA VITA DIOCANE',1),
	(4,'sdfdfsaafdsadsfasdf',1);

/*!40000 ALTER TABLE `about_me_section` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
