-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: karate
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `administartor`
--

DROP TABLE IF EXISTS `administartor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administartor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administartor`
--

LOCK TABLES `administartor` WRITE;
/*!40000 ALTER TABLE `administartor` DISABLE KEYS */;
/*!40000 ALTER TABLE `administartor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf16 NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `description` text CHARACTER SET utf16,
  `preview_src` varchar(255) DEFAULT NULL,
  `src` varchar(100) CHARACTER SET utf16 NOT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `sort_order` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instructor`
--

DROP TABLE IF EXISTS `instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instructor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `description` text,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `rang` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
INSERT INTO `instructor` VALUES (1,'Ivan','sdasd','Ivanov','<p>\r\n	<span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\">Scelerisque parturient nec cursus, cursus odio pellentesque mauris a tincidunt sociis nec, placerat, nunc sit magna?<strong> Enim ultricies lacus odio. </strong></span></p>\r\n<p>\r\n	<span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\"><em>&nbsp;Purus pulvinar, quis, pellentesque a ridiculus et eros pellentesque</em>, magna proin ut auctor adipiscing nunc, a nascetur magna urna sagittis, montes nisi odio, proin adipiscing, augue integer, nisi rhoncus, magna odio ac penatibus! Scelerisque vel etiam pid nunc ut in ac lorem? Sociis et est.</span></p>\r\n','test@test.com','11','1374-IMG_0138.JPG','sad',1,1,'0000-00-00 00:00:00','2013-09-15 00:46:50'),(2,'Anton','','Matiyenko','<p>\r\n	<u><strong><span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\">Scelerisque porttitor porta ultricies ac. Ridiculus egestas augue nunc pulvinar magna! Purus, montes pulvinar porttitor. A. Dictumst pid, nisi?</span><br />\r\n	</strong></u></p>\r\n<p>\r\n	<span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\">Et tincidunt sed? Tristique, a nisi placerat enim porta tincidunt velit ac? Ac elit, sed ac. Ultrices a amet magna, sociis odio magna sit pulvinar ut mattis mid, ac porta lorem. Urna mus et eros dignissim. Porttitor magna tempor nec, integer a sed diam sed velit, ac turpis, sagittis et proin in? In et diam elit auctor mauris. Ac urna rhoncus. Arcu in ultrices augue elementum phasellus adipiscing, turpis dictumst. Nunc nunc, vel urna lundium montes, enim nec tempor a! Nec tempor mid nec, dictumst et! Risus turpis? Etiam porta, parturient vut tincidunt lorem, turpis tempor phasellus odio! Vel nascetur.</span></p>\r\n','amatiyenko@gmail.com','111-122-2332','4562-131.JPG','',1,1,'2013-01-19 23:08:00','2013-09-15 00:47:06'),(3,'Jack',NULL,'Nikoo','<p>\r\n	<span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\">Aenean scelerisque augue placerat magna elit a, a mid porta enim in, dictumst lundium nascetur! Ac ridiculus tortor? Quis arcu in integer ac tempor? Ultrices hac turpis?</span></p>\r\n<p>\r\n	<span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\">Porta dis turpis porttitor cursus vel tincidunt dolor nunc? Rhoncus vut et aliquet facilisis porta scelerisque scelerisque dis.</span></p>\r\n<p>\r\n	<span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\">Sed dignissim tempor, porttitor pellentesque? Augue? Mauris et rhoncus. Elementum, tortor dictumst integer tortor porttitor, magnis parturient magna dolor magnis! Ridiculus, platea dis diam dolor, ultrices penatibus dapibus tincidunt, vut. Augue ac porta vel odio a ac pellentesque et sociis quis urna et porta phasellus? Hac et montes pellentesque sit et? In proin tempor, in est arcu, nec sed. Aliquam eu duis vel non enim diam, augue, mauris, odio, odio, tincidunt! Ut tincidunt eros. Lundium.</span></p>\r\n','jack@none.com','232-343-3423','2560-',NULL,1,3,'2013-01-30 23:27:26','2013-07-22 22:34:19'),(4,'Aaron',NULL,'Tess','<p>\r\n	<span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\">Ut vut porttitor tempor porta, sit, mauris porttitor et aenean placerat, ut a arcu hac cras pellentesque, adipiscing aliquam sed. Enim nunc elementum! Nec nascetur penatibus porttitor? Porttitor platea, dolor ut, odio ut elementum, parturient, natoque elit lundium porttitor, vel natoque! Porta? </span></p>\r\n<p>\r\n	<span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\">Sit scelerisque. In, magna nunc nec habitasse placerat elementum! </span></p>\r\n<p>\r\n	<span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\">Eu enim augue porta, aliquet ridiculus urna mid. Mus dictumst! Turpis penatibus ac lectus, magna aenean ut rhoncus, lorem massa scelerisque velit amet? Lorem augue etiam!&nbsp;</span></p>\r\n','jacffk@none.com','123-33-3333','8756-33yq6.jpg',NULL,1,4,'2013-01-30 23:30:23','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `parent_page_id` int(11) DEFAULT NULL,
  `alias` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,NULL,NULL,'about','О нас','<p>\r\n	Placerat tincidunt mauris integer massa vel tristique, lacus odio est tristique, turpis quis vel platea non sed facilisis mauris. Tristique vel adipiscing eu amet lectus, lundium magna vel dictumst. Augue risus! In ultrices pid habitasse ut mus elit aliquet aliquam nisi! Vut diam pulvinar elementum augue et ac egestas duis ut dis pid. Pulvinar? Nisi, penatibus enim elementum elementum! Enim rhoncus dis, adipiscing et amet porttitor velit, eu magna. Natoque sed, a eros in platea? Et porttitor rhoncus enim. Enim odio enim egestas! Rhoncus risus nec proin odio platea egestas placerat ridiculus urna! Nisi nascetur, porta phasellus lundium. Sit urna rhoncus turpis sit risus adipiscing placerat nunc, penatibus tortor! Integer cum massa placerat, tincidunt aliquet hac! Lectus, elit turpis. Turpis ut aliquam, a sagittis hac turpis, urna phasellus! Montes tristique? Egestas urna? Lundium, a, non placerat adipiscing sed. Non odio auctor et? Sit, elementum? Scelerisque arcu egestas, aenean urna sed ut ut? Sit magnis elit elementum urna! Sociis, sit nunc. Phasellus! Adipiscing in, dapibus ac habitasse? Ultricies tortor lorem, pulvinar sit vut magna turpis? Lundium enim augue sed, facilisis, pulvinar, amet ridiculus? Cursus, diam in est, pellentesque. Turpis facilisis nec porttitor mauris elementum platea! Aliquam placerat, lectus augue. Lundium a, risus! Mid et integer. Rhoncus, est et. Ut? A mauris ultricies enim diam, dapibus ut etiam, eros. Dictumst! Velit augue lectus magna, porta habitasse vut hac, ac a ut nec, eros dignissim, scelerisque, ut. Ac mattis platea sed.</p>\r\n',1,1,'0000-00-00 00:00:00','2013-09-17 23:39:28'),(7,NULL,NULL,'links','Ссылки','<p>\r\n	<span style=\"font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);\">Tempor, urna placerat nec, aenean, sagittis quis odio, tempor! Aenean magnis nec vel adipiscing nec urna sit? Nascetur sagittis. Tempor ultricies natoque cras, elit aliquet scelerisque, in elementum cursus, placerat a tincidunt sociis! Pulvinar odio, nisi natoque nec ridiculus, nascetur in? Tempor phasellus arcu scelerisque adipiscing a! A eu, lundium, magna rhoncus lacus sed, magna, sociis elit odio pellentesque, et amet, ut duis etiam mattis mid vel? Sit ultricies lorem eros in in ut. Tempor nisi non aliquam, tortor! Ultrices facilisis tempor pellentesque scelerisque, rhoncus tincidunt auctor, nascetur in, placerat proin? Habitasse mid ultrices turpis! Habitasse cum mauris magna placerat dis. Ridiculus a, dignissim? Ultricies augue dictumst, vut odio porttitor! Diam in a, in ridiculus, elementum et ac quis.</span></p>\r\n',1,2,'2013-01-19 19:17:43','2013-01-19 19:17:43'),(9,NULL,NULL,'contacts','Contacts','<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	A vel, nisi mauris mattis, sociis pulvinar nec porttitor nunc hac, integer nunc a odio ut urna montes cum porta tortor urna tempor? Aenean? Porttitor mattis aenean! Amet sed est. Lacus elementum et cum arcu ultrices enim mid dapibus, urna ac lectus adipiscing et odio auctor velit augue tincidunt nunc placerat? Porttitor? Mattis enim, ut. Ac? Aliquet ac sit in? Ac mattis ut enim, tortor, enim, in porta purus, enim? Aliquam turpis ultricies ultrices ut, penatibus, mid dapibus enim auctor. Sagittis odio amet tincidunt hac porttitor sociis risus enim rhoncus augue magna natoque enim nec, est cum auctor! Natoque in ac tincidunt! Porta non. Magnis elementum in odio nascetur in, a enim porttitor cursus, aliquam, ultrices aliquam cursus augue et.</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Tempor in rhoncus pulvinar turpis, magna risus ac vel ut! Porttitor dignissim augue non? Pellentesque, sit dictumst nascetur nisi. Mid mattis, arcu a, nisi amet enim, proin placerat massa turpis mauris pulvinar vut sagittis nascetur. Magnis mauris lorem mus, nunc sit, ridiculus auctor vel integer nisi. Quis. Ut, cursus, magna ut tempor et, in, amet! Porta est lacus a, augue pellentesque, amet, tincidunt porttitor mattis dapibus elementum dignissim sed purus et arcu montes enim, purus porttitor nascetur odio dictumst, duis ultricies mus sit duis et. Egestas platea sociis nec, sed tempor, platea proin urna pellentesque porta? Enim ridiculus eros? Pulvinar integer, pid rhoncus mauris, mid ac placerat, hac dictumst ut penatibus ac sed cursus egestas. Augue sit. Odio vel.</p>\r\n',1,0,'2013-08-27 01:18:08','2013-08-27 01:18:08'),(10,NULL,1,'about_sub','Subpage 1','<p>\r\n	Est hac aliquet placerat lundium duis. Enim aliquet ridiculus, elementum? Augue placerat, turpis diam sit ut. Porta ac enim lectus tincidunt cursus placerat aenean? Magna porta proin pid in sed ridiculus est rhoncus, cum? Duis urna? Integer cras, nec habitasse massa scelerisque parturient mus rhoncus, turpis ultrices placerat eros hac augue platea, nascetur sed porttitor sociis etiam penatibus ac dictumst, sit ac massa! Phasellus! Purus? A lectus sociis! Hac! Hac porta, duis. Enim porta, lectus nunc adipiscing augue ac pid ac dignissim, amet et ridiculus ultricies! Tincidunt risus, duis ut? Ultrices dapibus amet rhoncus lacus hac placerat porta, lorem? Elementum, porta augue, cras tristique penatibus dignissim magnis eu lectus turpis porta turpis, tempor nisi eu? Risus enim in nascetur, natoque.</p>\r\n',1,0,'2013-09-17 23:42:23','2013-09-17 23:42:23'),(11,NULL,1,'about_sub_2','Subpage 2','<p>\r\n	Cras platea. In sagittis ut! Ac in nunc odio mattis quis. Enim sed, amet quis facilisis amet ultrices porttitor phasellus turpis, diam nec, mattis ultrices risus cum, montes enim, adipiscing urna ut scelerisque cras, elementum, pulvinar nisi turpis quis dignissim rhoncus odio sit augue nisi augue quis? Nec mid! Tempor a ut mattis duis, pid! In dolor? Auctor sed hac lundium. Elementum magna montes duis adipiscing tincidunt. Tincidunt, sit vel lundium! Lectus eros enim turpis vel habitasse ac a dictumst pid augue egestas, lacus dolor lectus pulvinar in proin, aenean dictumst urna enim in nunc, parturient augue, odio adipiscing augue! Facilisis cum vel adipiscing sociis odio tincidunt, ac et ut et! Augue nisi? Mattis et diam augue! Porta cursus.</p>\r\n',1,2,'2013-09-17 23:42:59','2013-09-17 23:42:59'),(12,NULL,7,'links_sub_1','Links Sub 1','<p>\r\n	asdasd as</p>\r\n',1,1,'2013-09-19 00:26:26','2013-09-19 00:26:26');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `photo_album_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (19,NULL,6,'1','1378764590-IMG_0020.JPG','',1,0,'2013-09-09 23:42:48','2013-09-10 00:09:50'),(20,NULL,6,'2','1378764729-IMG_0349.JPG','',1,0,'2013-09-09 23:43:14','2013-09-10 00:12:09'),(21,NULL,6,'preview album 1','1378764743-IMG_0020.JPG','',1,0,'2013-09-09 23:52:24','2013-09-10 00:12:23'),(22,NULL,6,'2','1379452738-BestHDWallpapersPack967_1.jpg','',1,0,'2013-09-17 23:18:58','0000-00-00 00:00:00'),(23,NULL,6,'23','1379452746-BestHDWallpapersPack967_3.jpg','',1,0,'2013-09-17 23:19:06','0000-00-00 00:00:00'),(24,NULL,6,'er','1379452757-BestHDWallpapersPack967_14.jpg','',1,0,'2013-09-17 23:19:17','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo_album`
--

DROP TABLE IF EXISTS `photo_album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_photo_album_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `preview_photo_id` int(12) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo_album`
--

LOCK TABLES `photo_album` WRITE;
/*!40000 ALTER TABLE `photo_album` DISABLE KEYS */;
INSERT INTO `photo_album` VALUES (6,NULL,NULL,'1',NULL,19,'',1,0,'2013-09-09 23:42:37','2013-09-09 23:52:46'),(7,6,NULL,'1-1',NULL,0,'test 1 1',1,0,'2013-09-17 23:43:29','2013-09-17 23:44:16'),(8,6,NULL,'1-2',NULL,0,'test 1 2',1,2,'2013-09-17 23:43:41','2013-09-17 23:44:07'),(9,NULL,NULL,'2',NULL,0,'',1,0,'2013-09-17 23:44:40','2013-09-17 23:44:40'),(10,9,NULL,'2-1',NULL,0,'',1,0,'2013-09-17 23:44:52','2013-09-17 23:44:52'),(11,6,NULL,'1-3',NULL,0,'',1,0,'2013-09-18 00:26:11','2013-09-18 00:26:11'),(12,6,NULL,'1-4',NULL,0,'',1,0,'2013-09-18 00:26:20','2013-09-18 00:26:20'),(13,6,NULL,'1-5',NULL,0,'',1,0,'2013-09-18 00:26:28','2013-09-18 00:26:28');
/*!40000 ALTER TABLE `photo_album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `short_message` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `alias` varchar(50) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,NULL,'Post #1',' 1Aenean mus, mus lundium placerat phasellus? Porttitor turpis! Purus, sed sagittis augue! Proin enim sed hac a turpis tincidunt porttitor! Nisi massa ac magna duis porttitor elit, habitasse est ultricies pid aliquet nascetur. Nascetur cum?','<p>\r\n	Ut ridiculus natoque, et tempor urna mauris, et elit, magnis augue, sit, lectus vel ridiculus. Mid vel cras. Pid lundium, porttitor, mattis penatibus sagittis, odio duis lundium sed, magna aenean odio dis phasellus? Magna turpis et augue est magna! Phasellus? Aenean mus, mus lundium placerat phasellus? Porttitor turpis! Purus, sed sagittis augue! Proin enim sed hac a turpis tincidunt porttitor! Ridiculus pellentesque aliquam, aenean porta odio! Et non amet! Turpis, cras sed tincidunt porta, pulvinar. Nisi massa ac magna duis porttitor elit, habitasse est ultricies pid aliquet nascetur. Nascetur cum? Diam! Integer, arcu odio turpis, mauris, massa magnis mid pulvinar. Quis a in elit nisi et cum turpis urna velit amet tortor? Tincidunt auctor aliquet et. Cursus. Ultricies dapibus sed.</p>\r\n','p1,pppp','p1',1,1,'2012-12-18 00:03:56','2013-01-26 01:26:57'),(2,NULL,'Пост №2','Proin ut scelerisque pellentesque placerat auctor amet, natoque urna ultricies pulvinar in nascetur massa porta enim scelerisque penatibus porttitor enim in vel sit rhoncus, ac augue proin, enim montes scelerisque.','<p>\r\n	&nbsp;</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	<img alt=\"\" height=\"200\" src=\"http://sandiegodogbeach.files.wordpress.com/2010/05/bulldogs1.jpg?w=300\" width=\"300\" />is. Adipiscing sit, dictumst sit sed ut non ultrices, sit nec habitasse ridiculus? Odio velit, nec. Cras placerat natoque. Porttitor pulvinar dictumst magna in platea tincidunt proin porttitor, vel odio, massa in phasellus, adipiscing tristique, scelerisque vel velit vut purus, in elementum proin.</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	http://sandiegodogbeach.files.wordpress.com/2010/05/bulldogs1.jpg?w=300</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Proin ut scelerisque pellentesque placerat auctor amet, natoque urna ultricies pulvinar in nascetur massa porta enim scelerisque penatibus porttitor enim in vel sit rhoncus, ac augue proin, enim montes scelerisque.</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Lectus in odio</p>\r\n','bulldog,dog','p2',0,0,'2013-01-02 23:48:17','2013-01-23 00:30:15'),(3,NULL,'Пост №3','Elit elementum ut! Et, sociis porttitor vel! Enim aenean amet lectus magna nunc, ultrices, ridiculus massa vel, odio, eros, risus nec turpis, augue cursus ut.','<p>\r\n	&nbsp;</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Dapibus! Rhoncus porttitor pulvinar cum, elit est phasellus arcu enim turpis, lectus ridiculus. Porttitor odio tincidunt vel magna augue sit scelerisque mus, aliquam proin porta. In augue hac dapibus nascetur mauris, dapibus sit adipiscing in aenean? Elit elementum ut! Et, sociis porttitor vel! Enim aenean amet lectus magna nunc, ultrices, ridiculus massa vel, odio, eros, risus nec turpis, augue cursus ut.</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	<img alt=\"\" src=\"http://www.spcaotago.org.nz/thumb.php?src=files/1321856638204.jpg&amp;x=400&amp;y=700\" /></p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Sed penatibus ultricies, mauris placerat hac habitasse magnis auctor, placerat aenean adipiscing sit in porttitor. Turpis et aliquam, sit, est pulvinar amet duis! Arcu phasellus diam cras eros ac, et natoque. Nisi, ut dapibus? Scelerisque, cras dis nec urna, porttitor, porta, ridiculus vut velit? Vel sociis amet et a rhoncus habitasse quis in velit arcu ac, sed purus natoque, sociis ultricies dapibus magnis lectus placerat mattis lacus placerat? Elit aliquet cum, enim enim magnis ac natoque phasellus, quis natoque placerat ac sit ridiculus, quis, vel risus. Urna? Augue et? Rhoncus dignissim, habitasse! Habitasse magna nascetur? Diam placerat dolor et? Egestas ac quis in ut nisi ac sociis, adipiscing porttitor, purus dictumst, scelerisque arcu adipiscing facilisis montes dignissim sit amet.</p>\r\n','','p3',1,0,'2013-01-22 23:39:39','2013-01-22 23:39:39'),(4,NULL,'Пост №4','Dapibus! Rhoncus porttitor pulvinar cum, elit est phasellus arcu enim turpis, lectus ridiculus. Porttitor odio tincidunt vel magna augue sit scelerisque mus, aliquam proin porta. ','<p>\r\n	&nbsp;</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Ultricies lacus ac? Odio dolor. Cursus nec proin ultricies in, eu, lectus mattis in in, dolor nec massa nascetur. Integer? Velit, auctor nunc? Dapibus porta nunc sit, porttitor tincidunt ridiculus massa magnis odio tempor augue, nisi, in pellentesque duis mid. Porta in et lacus aliquam, dis dis ac? Ridiculus risus. Ultricies enim? Ut ac dolor integer rhoncus mauris scelerisque! Dapibus! Rhoncus porttitor pulvinar cum, elit est phasellus arcu enim turpis, lectus ridiculus. Porttitor odio tincidunt vel magna augue sit scelerisque mus, aliquam proin porta. In augue hac dapibus nascetur mauris, dapibus sit adipiscing in aenean? Elit elementum ut! Et, sociis porttitor vel! Enim aenean amet lectus magna nunc, ultrices, ridiculus massa vel, odio, eros, risus nec turpis, augue cursus ut.</p>\r\n<div>\r\n	<img alt=\"\" src=\"http://www.google.com.ua/imgres?hl=en&amp;sa=X&amp;tbo=d&amp;biw=1600&amp;bih=809&amp;tbm=isch&amp;tbnid=ObsqVQ5g9yLrrM:&amp;imgrefurl=http://supercuter.com/two-kittens-hug-it-out/&amp;docid=mL0XQ-pVIppGMM&amp;imgurl=http://supercuter.com/wp-content/uploads/2012/09/kittens-hug-it-out.jpg&amp;w=800&amp;h=600&amp;ei=FRX_UOfaCYSwhAfX1oHQAg&amp;zoom=1&amp;iact=hc&amp;vpx=1071&amp;vpy=486&amp;dur=400&amp;hovh=191&amp;hovw=255&amp;tx=184&amp;ty=74&amp;sig=111889070510851528478&amp;page=2&amp;tbnh=137&amp;tbnw=193&amp;start=32&amp;ndsp=36&amp;ved=1t:429,r:37,s:0,i:264\" /></div>\r\n','','p4',1,0,'2013-01-22 23:40:47','2013-01-22 23:40:47'),(6,NULL,'Пост №5','Dapibus! Rhoncus porttitor pulvinar cum, elit est phasellus arcu enim turpis, lectus ridiculus. Porttitor odio tincidunt ','<p>\r\n	&nbsp;</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Est vut phasellus turpis lacus tristique pellentesque et. Auctor adipiscing, eu a, urna vel duis? Placerat? Sed montes natoque in velit tortor in nisi. Enim placerat augue, sit. Auctor sed! Tincidunt aliquam quis adipiscing? Amet lacus, nec duis dapibus, scelerisque. Pellentesque elementum? Ut tempor turpis, lundium facilisis magna cum, nunc etiam sit? Elementum in, turpis et, egestas pulvinar! Turpis dis, scelerisque massa urna rhoncus. Tincidunt! Etiam? In et nisi rhoncus lacus ridiculus? Et cum, arcu aliquet augue in, rhoncus ac! Porta, phasellus ac aliquet, tortor urna amet ut non eu! Porta mus nec! Placerat mid tortor ut, scelerisque augue nisi? Facilisis massa, purus! Magna pid eros sit rhoncus, ultricies rhoncus. Elementum sed, integer ultricies cras platea, mid. Tempor odio non.</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	<img alt=\"\" src=\"http://www.google.com.ua/imgres?hl=en&amp;sa=X&amp;tbo=d&amp;biw=1600&amp;bih=809&amp;tbm=isch&amp;tbnid=2TAo13Tj0JRUkM:&amp;imgrefurl=http://www.fanpop.com/clubs/cats/images/5979907/title/kittens&amp;docid=sT75dbL6Qhu5qM&amp;imgurl=http://images2.fanpop.com/images/photos/5900000/Kittens-cats-5979907-2560-1817.jpg&amp;w=2560&amp;h=1817&amp;ei=FRX_UOfaCYSwhAfX1oHQAg&amp;zoom=1&amp;iact=rc&amp;dur=263&amp;sig=111889070510851528478&amp;page=1&amp;tbnh=144&amp;tbnw=195&amp;start=0&amp;ndsp=32&amp;ved=1t:429,r:5,s:0,i:162&amp;tx=100&amp;ty=93\" /></p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Nec mus lorem augue aliquam, dapibus ridiculus! Tempor odio, nascetur sociis placerat tincidunt, arcu. Massa, sit porttitor, enim scelerisque. Vel, nisi est turpis? Cras sed vut magnis tempor magnis in scelerisque, arcu, cum dolor lundium, et adipiscing integer velit augue mus sed cras sed proin vel parturient! Rhoncus auctor. Cras parturient, duis risus eu massa. Nisi ultrices nascetur tempor? Mid tortor mattis turpis penatibus nunc? Nec risus, aliquam porttitor ultricies odio, porttitor integer est! Dignissim, in sit, parturient pellentesque proin tortor, augue penatibus habitasse! Dolor in placerat, egestas in, rhoncus platea magna? In porttitor scelerisque facilisis vut dis lacus et. Eros! Et nisi pulvinar egestas adipiscing non ultricies lectus integer turpis dignissim a! A sagittis, tempor, massa phasellus turpis.</p>\r\n','','p5',1,0,'2013-01-22 23:41:50','2013-01-22 23:41:50'),(7,NULL,'Пост №6','Eu urna tincidunt turpis massa purus! Augue, nec cursus placerat ac elementum cursus ac lectus, sociis phasellus integer nec eros urna. ','<p>\r\n	&nbsp;</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Ac porttitor aliquet ultricies nascetur, lectus vel? Sit dapibus sed aenean non proin auctor nunc adipiscing adipiscing odio dis odio lundium lacus diam tempor! Integer, cras. Et platea dignissim massa dignissim sit. Etiam dolor urna lacus, dis et, rhoncus phasellus, mus diam, ac dictumst? Adipiscing. Nascetur dignissim est, tristique phasellus urna, urna. Mus arcu montes? Cursus, tincidunt ac elementum magna ac, augue porttitor ac sed parturient mus pid integer sed proin. Facilisis dictumst integer et ut phasellus aliquet phasellus! In. Nec magna integer vel, magna lorem sed elementum? Cras nisi placerat rhoncus auctor et amet magna ut ac lectus egestas porta in urna aliquet a ac, facilisis, dictumst nisi lectus. Proin habitasse. Amet dictumst nisi integer. Elit, aenean auctor in.</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	<img alt=\"\" src=\"http://www.google.com.ua/imgres?hl=en&amp;sa=X&amp;tbo=d&amp;biw=1600&amp;bih=809&amp;tbm=isch&amp;tbnid=0MQCjEie7Rx2yM:&amp;imgrefurl=http://www.ghostwoods.com/2010/08/and-now-kittens-1276/&amp;docid=RahB1NXVI_HzWM&amp;imgurl=http://www.ghostwoods.com/wp-content/uploads/2010/08/90-750x426.jpg&amp;w=750&amp;h=426&amp;ei=FRX_UOfaCYSwhAfX1oHQAg&amp;zoom=1&amp;iact=rc&amp;dur=381&amp;sig=111889070510851528478&amp;page=1&amp;tbnh=138&amp;tbnw=234&amp;start=0&amp;ndsp=32&amp;ved=1t:429,r:14,s:0,i:189&amp;tx=117&amp;ty=49\" /></p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Massa aenean, augue augue vut porttitor nec, mattis augue porttitor in! Ultrices elit dis, lorem elit cras massa magna, parturient urna pellentesque tristique, urna diam urna! Eu urna tincidunt turpis massa purus! Augue, nec cursus placerat ac elementum cursus ac lectus, sociis phasellus integer nec eros urna. Non quis ut egestas augue nisi? Dapibus lectus scelerisque adipiscing tincidunt porttitor, nisi sagittis, dolor risus, placerat dapibus sociis, nunc purus? Scelerisque sociis, est? Odio sed et sed sociis sociis penatibus proin? Cras proin. Egestas purus? Mus dictumst pid arcu urna, vel habitasse odio augue integer pid ultricies, a rhoncus aliquam nunc lectus risus penatibus proin, facilisis porta. Mauris porttitor odio elementum pid sagittis, nunc porta a porttitor elementum elit placerat diam.</p>\r\n','','p6',1,0,'2013-01-22 23:42:39','2013-01-22 23:42:39'),(8,NULL,'Пост №7',' Egestas! Eros tincidunt tincidunt etiam enim et magna mauris. Augue mus nascetur rhoncus, ac lacus, scelerisque integer scelerisque ac purus ac, porta nisi sagittis rhoncus.','<p>\r\n	&nbsp;</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Turpis turpis, cum in sociis in porttitor, cursus ac diam, tincidunt et rhoncus cum tristique, et, et aenean purus et! Mus in proin egestas! Ac etiam, quis facilisis rhoncus porta! Facilisis turpis facilisis cum elit nec, elementum porta integer porta! Hac, nisi aenean diam et ultrices amet lundium nec, pulvinar integer enim parturient habitasse diam natoque lorem mid tincidunt non? Magna odio pellentesque, elit, ac, egestas? Lundium sed nascetur scelerisque in integer, pid massa enim dictumst nunc dolor! Odio. Pulvinar, ultricies, montes, aliquet integer. Ut augue, elementum sagittis penatibus risus lorem auctor turpis, lacus turpis? Egestas! Eros tincidunt tincidunt etiam enim et magna mauris. Augue mus nascetur rhoncus, ac lacus, scelerisque integer scelerisque ac purus ac, porta nisi sagittis rhoncus.</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial;\">\r\n	Cursus urna ac rhoncus porttitor, ut pulvinar sit pid natoque tortor rhoncus magnis tempor facilisis eros? Arcu vel turpis amet, risus mattis ut placerat auctor massa etiam ac amet! Cursus adipiscing mid nunc sociis dapibus? Ac? In ut. Auctor, eros, elementum dolor lacus cum? Non urna parturient. Et nunc? Non dictumst in mattis aenean. Mid, parturient turpis non urna! Mauris! Proin tristique pulvinar, sociis integer, cursus ac? Aenean, in massa placerat aliquam placerat cras aliquam mus platea, ac a integer dignissim tincidunt placerat! Dapibus aliquet platea nisi. In massa, porta nisi tincidunt a sit penatibus ac enim in enim eros et montes nunc. Scelerisque turpis penatibus est facilisis ut turpis placerat et in. Porta ac, pulvinar ultrices cum sagittis.</p>\r\n','','p7',1,0,'2013-01-22 23:43:04','2013-01-22 23:43:04'),(9,NULL,'Onepost','TEST','<p>\r\n	<iframe frameborder=\"0\" height=\"300\" src=\"http://www.blogkuip.home/photo/embed_v2/195/ZmxpY2ty?t=iframe&amp;s=alpha&amp;sls=0\" width=\"1050\"></iframe></p>\r\n','','aa',1,0,'2013-02-15 20:30:12','2013-02-15 20:32:40');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_member`
--

DROP TABLE IF EXISTS `team_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `description` text,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `rang` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_member`
--

LOCK TABLES `team_member` WRITE;
/*!40000 ALTER TABLE `team_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `last_logged` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `video_album_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `service` varchar(100) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,NULL,NULL,'Massive Attack - Teardrop','http://youtu.be/u7K72X4eo_s','u7K72X4eo_s','youtube','',1,1,'2013-01-19 19:53:35','2013-01-31 00:26:04'),(2,NULL,NULL,'Sinéad O\'Connor - Nothing Compares 2U','http://youtu.be/iUiTQvT0W_0','iUiTQvT0W_0','youtube','',2,1,'2013-01-19 20:02:46','2013-01-31 00:26:19'),(3,NULL,NULL,'Gorillaz - Dirty Harry','http://youtu.be/f3gUPs5JS30','f3gUPs5JS30','youtube','',3,1,'2013-01-19 20:11:27','2013-01-31 00:26:30'),(4,NULL,NULL,'Gorillaz - Tomorrow Comes Today','http://youtu.be/PiNdcBg3xC8','PiNdcBg3xC8','youtube','',4,1,'2013-01-19 20:11:58','2013-01-31 00:26:35'),(5,NULL,NULL,'The Killing Joke','http://vimeo.com/27561214','27561214','vimeo','',5,1,'2013-01-19 20:15:00','2013-01-31 00:26:43');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video_album`
--

DROP TABLE IF EXISTS `video_album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_video_album_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `preview_photo_id` int(12) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video_album`
--

LOCK TABLES `video_album` WRITE;
/*!40000 ALTER TABLE `video_album` DISABLE KEYS */;
/*!40000 ALTER TABLE `video_album` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-17 14:34:25
