-- MySQL dump 10.19  Distrib 10.3.34-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: heritagefountain_dbb
-- ------------------------------------------------------
-- Server version	10.3.34-MariaDB-cll-lve

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
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` (`id`, `title`, `image`, `pdf`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES (1,'About Us','1641292497.jpeg','','Heritage Nepal was founded in 2060 B.S , serving high-quality works in the sector of Water Fountain Installation and Maintenance. We also provide water fountain equipment along with Legero Light Fixtures and Skava Switches & Sockets. We are moving ahead with the motive of providing quality works and quality equipment at a reasonable price. Currently, we are serving Corporates, Government Agencies, NGOs and INGOs throughout  Nepal. Our proven team of engineers   help agencies  with every kind of water fountain works in Nepal',NULL,NULL,NULL,'2022-01-03 03:43:39','2022-01-04 10:34:57');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enabled` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `title`, `image`, `enabled`, `created_at`, `updated_at`) VALUES (3,'Heritage Nepal','1641291020.jpeg','1','2022-01-04 10:10:20','2022-01-04 12:38:14'),(4,'Heritage Nepal','1641291055.jpeg','1','2022-01-04 10:10:55','2022-01-04 10:11:06'),(5,'Heritage Nepal','1641292687.jpeg','1','2022-01-04 10:38:07','2022-01-04 10:38:14');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `slug`, `image`, `author`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES (1,'Lorem Ipsum is dummy text','lorem-ipsum-is-dummy-text','1641182078.jpg','Admin','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',NULL,NULL,NULL,'2022-01-03 03:54:38','2022-01-03 03:54:38'),(2,'Lorem Ipsum is dummy','lorem-ipsum-is-dummy','1641182112.jpg','Author','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',NULL,NULL,NULL,'2022-01-03 03:55:12','2022-01-03 03:55:12'),(3,'Lorem Ipsum is lorem Ipsum','lorem-ipsum-is-lorem-ipsum','1641182150.jpg','ABC','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',NULL,NULL,NULL,'2022-01-03 03:55:50','2022-01-03 03:55:50'),(4,'Lorem Ipsum Lorem Ipsum Lorem','lorem-ipsum-lorem-ipsum-lorem','1641182187.jpg','ABC Sharma','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',NULL,NULL,NULL,'2022-01-03 03:56:27','2022-01-03 03:56:27');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brochures`
--

DROP TABLE IF EXISTS `brochures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brochures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brochures`
--

LOCK TABLES `brochures` WRITE;
/*!40000 ALTER TABLE `brochures` DISABLE KEYS */;
INSERT INTO `brochures` (`id`, `title`, `image`, `pdf`, `created_at`, `updated_at`) VALUES (1,'Heritage Nepal','1641286153.png','Rai School_1640938259.pdf','2021-12-28 12:19:50','2022-01-04 12:35:14');
/*!40000 ALTER TABLE `brochures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_created_by_foreign` (`created_by`),
  CONSTRAINT `categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_by`, `created_at`, `updated_at`) VALUES (1,'Lights','lights',1,'2021-12-28 12:20:11','2021-12-28 12:20:11'),(2,'Fountains','fountains',1,'2021-12-28 12:20:27','2021-12-28 12:20:27'),(3,'Aquarium','aquarium',1,'2022-01-03 03:35:11','2022-01-03 03:35:11');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chooses`
--

DROP TABLE IF EXISTS `chooses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chooses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chooses`
--

LOCK TABLES `chooses` WRITE;
/*!40000 ALTER TABLE `chooses` DISABLE KEYS */;
INSERT INTO `chooses` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES (3,'\"We Serve Excellence\"','1641289607.jpeg','2022-01-04 09:46:47','2022-01-04 09:46:47');
/*!40000 ALTER TABLE `chooses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`, `title`, `image`, `enabled`, `created_at`, `updated_at`) VALUES (1,'Facebook Lite','1641544734.png',1,'2022-01-07 08:38:54','2022-01-07 08:45:20'),(2,'Twitter','1641544753.png',1,'2022-01-07 08:39:13','2022-01-07 08:39:13'),(3,'Youtube','1641545064.png',1,'2022-01-07 08:44:24','2022-01-07 08:44:24');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` (`id`, `sender_name`, `sender_email`, `subject`, `message`, `created_at`, `updated_at`) VALUES (1,'It Arrow','info@itarrow.com','Nihil aut ipsum et','Hello I am testing data','2022-01-03 04:14:09','2022-01-03 04:14:09'),(2,'gZBoyJAktcm','reynoldslola21@gmail.com','sETmFVAXtb','fzsJciNXmuAlwB','2022-01-05 08:07:08','2022-01-05 08:07:08'),(3,'ZpMqgNCJOyKbYT','reynoldslola21@gmail.com','CQJnbZqXga','HeAJbRPOfG','2022-01-05 08:07:10','2022-01-05 08:07:10'),(4,'Eulalia','nsamuelvale101@yaungshop.com','3chawki.berrada@onlyu.link','Submit your site to over 1000 directories all with one click here> https://1mdr.short.gy/add-your-website','2022-01-09 02:23:57','2022-01-09 02:23:57'),(5,'ElenaWip','mariaWip@mail.com','Can I find here serious man?!','Hello all, guys! I know, my message may be too specific, \r\nBut my sister found nice man here and they married, so how about me?! :) \r\nI am 26 years old, Maria, from Romania, know English and Russian languages also \r\nAnd... I have specific disease, named nymphomania. Who know what is this, can understand me (better to say it immediately) \r\nAh yes, I cook very tasty! and I love not only cook ;)) \r\nIm real girl, not prostitute, and looking for serious and hot relationship... \r\nAnyway, you can find my profile here: http://erbraminbusgaicred.tk/chk/1','2022-01-14 11:54:30','2022-01-14 11:54:30'),(6,'Monserrate','monserrate.leggo@outlook.com','monserrate.leggo@outlook.com','Stay warm with a portable fan heater.\r\n\r\nhttps://bit.ly/3K7fNZi\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nhttps://bit.ly/3fhszGn','2022-01-15 10:33:35','2022-01-15 10:33:35'),(7,'Rosalie','gumm.rosalie@gmail.com','gumm.rosalie@gmail.com','http://ssl2.42web.io/Rosalie\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n5','2022-01-17 14:22:30','2022-01-17 14:22:30'),(8,'seo_courses','87654325565@devioplus.ru','Thanks','Useful information \r\n<a href=https://matnat.ru/> </a> \r\nlink <a href=https://golfsimulatorbuddy.com/best-golf-simulator-for-under-1000/>Thanks</a> d394400','2022-01-23 23:35:28','2022-01-23 23:35:28'),(9,'mQWxZTuy','mcgrathlowery350444@gmail.com','TkoqYhGmi','KfZgBlXyi','2022-01-25 02:18:47','2022-01-25 02:18:47'),(10,'bnkPumvYOdtxsZHw','mcgrathlowery350444@gmail.com','oIUeWmqtfwYFslTu','mzjEoanRWvqLQrph','2022-01-25 02:18:48','2022-01-25 02:18:48'),(11,'Jacquie','bchakka111975s@ronell.me','jaouadhifarah0@bebekpenyet.buzz','Congrats on your new site, get it listed here for free and we\'ll start sending people to your site https://1mdr.short.gy/submit-your-site','2022-02-02 14:00:40','2022-02-02 14:00:40'),(12,'zgwrSNAXlYLRMKdB','yrttiaho81atmospheric@gmail.com','YwJTHaAXCZIrn','SciWKsRnUv','2022-02-09 19:51:34','2022-02-09 19:51:34'),(13,'dxgvepzDhYOb','yrttiaho81atmospheric@gmail.com','oVAahHkEY','VmsiPgMIkrn','2022-02-09 19:51:35','2022-02-09 19:51:35'),(14,'Dieter','omaima.1919w@lokasur.com','umonircio@joinm3.com','Submit your site to over 1000 advertising websites for free now https://bit.ly/submityoursite1000','2022-02-17 18:36:43','2022-02-17 18:36:43'),(15,'aXGNOZfykLBV','kimvickisjsj@gmail.com','NZYHOaCyeb','mBRbAMpiZxgsFCVK','2022-02-18 04:54:28','2022-02-18 04:54:28'),(16,'VsYOPKpiX','kimvickisjsj@gmail.com','IhZwyqOXovAY','eZJFBNHMzqs','2022-02-18 04:54:30','2022-02-18 04:54:30'),(17,'AbIVPDvkqo','fennmsbn@gmail.com','GNQojuzClpitkw','HVIiAdme','2022-02-22 18:00:11','2022-02-22 18:00:11'),(18,'tvIcuXjThfwmeFM','fennmsbn@gmail.com','HBzRpmJKnrAu','AHoihbKNRY','2022-02-22 18:00:13','2022-02-22 18:00:13'),(19,'Lauren Phomsoukha','LinoGauvin@gmail.com','Joslyn Kurpinski','Good job on the new site! Now go ahead and submit it to our free directory here https://1mdr.short.gy/submityourwebsite','2022-02-24 15:10:26','2022-02-24 15:10:26'),(20,'Mikhailit','itmikhailr85@gmail.com','Useful information for your site','Hello. I could help you to solve the problems with your site. I can make it more visited and more profitable. Attracting more visitors and conversion enhancement are my strong points. I have been engaged in site making, updating and promotion thereof since 2004, with both commercial and information projects. My rates are quite moderate. \r\n \r\nI’m specializing in the following: \r\n \r\n1. Website promotion in search engines. I could make it possible to bring your site to the top of the search results that are of interest to you. \r\n \r\n2. Error correcting and site debugging. I will help make your site the highest quality and relevant to the requirements of search engines. I work on identifying and eliminating bugs, increasing conversions, speeding up site loading, etc. I deal with all kinds of issues, from code to design. \r\n \r\n3. Site-making. I am engaged in the creation of sites of various types. \r\n \r\n4. Start-up, content management and promotion of groups and channels in social networks (YouTube, Face book, etc.). \r\n \r\n5. Customer feedback. Making and promoting good reviews on the Internet, removing and reducing the visibility of bad ones. \r\n \r\n6. Various types of mailing lists selected from my databases for your business. I am engaged in the following mailings: e-mailing, feedback mailing, mailing by chats on websites, and on social network profiles. \r\n \r\n7. There is much more that I could be of assistance to you with. \r\n \r\nTo contact me, please write to the following e-mail: itmikhailr85@gmail.com','2022-02-28 04:18:39','2022-02-28 04:18:39'),(21,'MariaMero','mariaMero@hotmail.com','Сan I find herе sеriоus mаn? :)','Ηello all, guуs! I know, mу messagе mаy be tоo sреcific,\r\nВut my sister found nice mаn һere аnd tһey marriеd, sо hоw аbout mе?! :)\r\nI аm 24 yеars old, Maria, frоm Rоmania, know English аnd Russian languagеs аlsо\r\nΑnd... I һаve spеcifiс diseаse, named nymрһоmаniа. Whо know what is this, саn understand mе (bеttеr tо say it immеdiatelу)\r\nАh уеs, I соok vеrу tasty! and I lоve not оnly соok ;))\r\nIm rеal girl, nоt prоstitute, and lооking for seriоus аnd һot rеlаtionsһip...\r\nΑnyway, you сan find my рrofile һerе: http://eaninmet.ga/user/139233','2022-02-28 20:02:54','2022-02-28 20:02:54'),(22,'KarinaMero','karinaMero@mail.com','Cаn I find һere sеriоus man? :)','Hellо аll, guуs! I know, my mеssаgе may bе tоo spесific,\r\nΒut my sistеr found nicе man here аnd theу mаrriеd, sо hоw аbout mе?! :)\r\nI am 23 yеars old, Κarina, from Rоmаniа, know English and Russiаn lаnguаges alsо\r\nАnd... I һave specific diseаsе, namеd nуmphоmaniа. Wһo know whаt is this, cаn understаnd mе (bеtter tо sау it immediаtеly)\r\nАһ yеs, I сoоk very tаsty! and I lоvе nоt onlу cook ;))\r\nIm reаl girl, not рrostitute, аnd looking fоr serious аnd һot rеlatiоnshiр...\r\nАnywaу, уou сan find mу profilе һere: http://tinviasanrainchab.tk/user/129657','2022-03-07 22:25:54','2022-03-07 22:25:54'),(23,'wUNtIQHKsEZLyulW','saritabasnetzjfff@gmail.com','FmHYJIsGPZUAqnLd','qmthGfUvVbdHuNBA','2022-03-08 22:46:46','2022-03-08 22:46:46'),(24,'aSITjoptZYcLE','saritabasnetzjfff@gmail.com','QgbLyheZPialm','vkXUoefRjFYwPhT','2022-03-08 22:46:48','2022-03-08 22:46:48'),(25,'Celina','3chawki.berrada@onlyu.link','5hoss@gmailup.com','I was wondering if you wanted to submit your new site to our free business directory? https://bit.ly/submit-your-site-now','2022-03-11 17:33:45','2022-03-11 17:33:45'),(26,'phillips609@gmail.com','phillips609@gmail.com','phillips609@gmail.com','In case you didn\'t realize, the word \"commited\" on your site is spelled incorrectly.  I had similar issues on my website which hurt my credibility until someone pointed it out and I discovered some of the services like SpellHelper.com or SpellingCheck.com which help with these type of issues.','2022-03-13 01:11:26','2022-03-13 01:11:26'),(27,'PWyusCqo','fonsecaskwkuwskiveth@gmail.com','erEwImoQAykvtc','VxfEYhBviUlsk','2022-03-13 01:59:40','2022-03-13 01:59:40'),(28,'bOFcgLRkZ','fonsecaskwkuwskiveth@gmail.com','qiIbstVX','BvnpWyVoI','2022-03-13 01:59:44','2022-03-13 01:59:44'),(29,'NataliaOr','nataliaOr@gmail.com','I\'m lоoking for ѕеrіоuѕ mаnǃ..','Ηello all, guysǃ I know, my messagе mаy bе too ѕpeсific,\r\nBut mу sіѕter found nicе mаn һere and tһеу marrіеd, ѕо how аbоut mе?ǃ :)\r\nI аm 23 yeаrs old, Nаtaliа, from Ukraіnе, I know Еngliѕһ аnd German lаnguages alsо\r\nAnd... Ι һаve ѕреcіfiс diѕеаse, nаmed nymphomаnіа. Who know wһаt іѕ thіѕ, сan undеrѕtаnd me (better to say it immediаtеlу)\r\nAh уes, I coоk vеrу tаѕty! and Ι love nоt оnlу cоok ;))\r\nIm reаl girl, not prоstіtutе, and loоking fоr serіouѕ аnd hоt rеlatіоnsһip...\r\nAnуwаy, уоu саn find mу рrofіlе here: http://themertitassiser.cf/user/14951','2022-03-15 06:43:43','2022-03-15 06:43:43'),(30,'tdlXacgivPDe','howardanabelle888@gmail.com','MzQGdqrxXNDs','MXxjqHDsFGKgaREu','2022-03-16 05:58:33','2022-03-16 05:58:33'),(31,'SfCnMWgdoF','howardanabelle888@gmail.com','hSeKWAvMjcZGf','MYOKUPwEh','2022-03-16 05:58:34','2022-03-16 05:58:34'),(32,'Ignacio Barrack','BethanieSeamon64225@gmail.com','Stacia Toudle','Add your site to 1000 business directories with one click here-> https://bit.ly/submit-yoursite-now','2022-03-25 18:50:18','2022-03-25 18:50:18'),(33,'nyUNQVoWxJ','gsjjssmsb@gmail.com','qRaIQziCvKyN','xaZNgCjDhLYBWU','2022-03-26 11:28:14','2022-03-26 11:28:14'),(34,'iSPufrVaX','gsjjssmsb@gmail.com','wrLkzpFU','DNxVshYvP','2022-03-26 11:28:15','2022-03-26 11:28:15'),(35,'OayhxPvVE','devertonlisenna@gmail.com','EQLOfkaYduelrVNW','MOpSVZbghYEFlykA','2022-03-29 11:07:15','2022-03-29 11:07:15'),(36,'BYslXdeutA','devertonlisenna@gmail.com','HtRVYmbkXUri','kMYGfwSjudQnETe','2022-03-29 11:07:19','2022-03-29 11:07:19'),(37,'xtMHpAnqkN','samira6985setor@gmail.com','BoSXKtOsvYgcj','tZquNkghGQ','2022-04-04 05:07:47','2022-04-04 05:07:47'),(38,'knVINPFO','samira6985setor@gmail.com','AFXQNekZxuCq','rRZPOufWYxtDN','2022-04-04 05:07:48','2022-04-04 05:07:48'),(39,'ngTiCUpdovhOX','christineyoungjgf@gmail.com','pAmqXxoyGIalWPFf','mXvOAwht','2022-04-11 11:58:39','2022-04-11 11:58:39'),(40,'MqisLgQREHtmnYS','christineyoungjgf@gmail.com','gHrtxpqRwyF','ZHWjprbewPtE','2022-04-11 11:58:42','2022-04-11 11:58:42'),(41,'SuGnMLxwgNVfF','Laurammsandraux9454@gmail.com','xSQjkTGMuFvf','SHReFtGys','2022-04-17 07:52:05','2022-04-17 07:52:05'),(42,'NkRuMCHbXl','Laurammsandraux9454@gmail.com','wtKZEkuvo','FkDAsKJzqbUYp','2022-04-17 07:52:06','2022-04-17 07:52:06'),(43,'Brandy','ohora@somitata.com','umonircio@joinm3.com','I was wondering if you wanted to submit your new site to our free business directory? https://1mdr.short.gy/submityoursite','2022-04-19 15:42:42','2022-04-19 15:42:42'),(44,'Jenae Arno','KirkRupard@gmail.com','Rita Menke','Good job on the new site! Now go ahead and submit it to our free directory here https://bit.ly/submit-your-site-here-now','2022-04-22 20:56:11','2022-04-22 20:56:11'),(45,'Florida','gemooboy.lovej@bucol.net','3chawki.berrada@onlyu.link','Congrats on your new site, get it listed here for free and we\'ll start sending people to your site https://1mdr.short.gy/submityoursite','2022-04-24 14:43:26','2022-04-24 14:43:26'),(46,'SUBODH KHADKA','SBDHKHADKA12@HOTMAIL.COM','WATER FOUNTAIN','WE ARE PLANNING TO HAVE WATER FOUNTAIN  IN OUR HOUSE','2022-04-25 00:24:52','2022-04-25 00:24:52'),(47,'nqdfcZLiYTVmulFp','crommurl@gmail.com','qBKCTcJDMtO','PbjBzlEQZt','2022-04-25 03:59:13','2022-04-25 03:59:13'),(48,'SMnizWTZFqGbam','crommurl@gmail.com','XoqjYyBrVzZgHQGR','nrjdhtiTXWM','2022-04-25 03:59:14','2022-04-25 03:59:14'),(49,'FbOrUwSG','rezayiireza784@gmail.com','BFvgSlYouLPyGqXI','pbnSPswzjD','2022-04-28 20:43:46','2022-04-28 20:43:46'),(50,'npJNXPQmCcKDIGR','rezayiireza784@gmail.com','IaOQYDVPKJou','qWAdyPtle','2022-04-28 20:43:48','2022-04-28 20:43:48'),(51,'FMbCUTjaghsSy','amirpakdeinbadassa@gmail.com','fSVwgmHWQhDXCvY','ihuLAtIOjRxwsCY','2022-05-01 15:49:39','2022-05-01 15:49:39'),(52,'LDABNZRiMUpevoST','amirpakdeinbadassa@gmail.com','xdGiMIBHPOy','hEGvpOdcSxDsFVYi','2022-05-01 15:49:40','2022-05-01 15:49:40'),(53,'Clayton Langwell','LelandAkram@gmail.com','Augustina Konakowitz','Submit your site to over 1000 advertising websites for free now https://bit.ly/submit-your-site-here-now','2022-05-08 10:45:15','2022-05-08 10:45:15'),(54,'tXUbhzRBrDAk','newpotatonalx22@gmail.com','ypxYSNmOZj','lVDsHXtYkdMvuy','2022-05-14 22:28:06','2022-05-14 22:28:06'),(55,'RMxWAXfmSI','newpotatonalx22@gmail.com','rvgbxCzE','GDetslkBuWEnQr','2022-05-14 22:28:07','2022-05-14 22:28:07'),(56,'ChristinaBus','christinaBus@yahoo.com','Сan I fіnd hеre sеrіouѕ mаn? :)','Неllо аll, guуѕ! Ι know, mу meѕsage mау bе toо ѕрeсifіс,\r\nΒut mу siѕter fоund nісe mаn herе аnd theу marrіеd, sо hоw abоut me?ǃ :)\r\nΙ am 23 yearѕ old, Сhrіѕtina, from Rоmanіa, I know Еnglish and Gеrman languаges alsо\r\nAnd... I have spеcifіс diѕеase, nаmed nуmphоmania. Whо knоw whаt іs thіs, саn underѕtаnd mе (bеttеr to saу it іmmedіаtelу)\r\nΑh уeѕ, Ι cооk very tastу! аnd I lovе not оnly соok ;))\r\nIm rеаl girl, not prоѕtіtutе, аnd loоkіng for ѕеrious аnd hot relаtionѕhip...\r\nAnуwаy, you cаn fіnd mу profіle hеrе: http://blogpilfizasarda.cf/user/4580/','2022-05-25 22:29:37','2022-05-25 22:29:37');
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dealer_profiles`
--

DROP TABLE IF EXISTS `dealer_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dealer_profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dealer_profiles_user_id_foreign` (`user_id`),
  CONSTRAINT `dealer_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dealer_profiles`
--

LOCK TABLES `dealer_profiles` WRITE;
/*!40000 ALTER TABLE `dealer_profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `dealer_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_provided` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enabled` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_service_id_foreign` (`service_id`),
  CONSTRAINT `galleries_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` (`id`, `service_id`, `title`, `slug`, `image`, `client_title`, `location`, `service_provided`, `enabled`, `created_at`, `updated_at`) VALUES (1,2,'Bulb','bulb','1646748557.png','ABC','Kathmandu','Good One','1','2022-01-03 04:31:00','2022-03-08 14:09:17'),(2,1,'Fountain VIntage','fountain-vintage','1646748539.png','XYZ','Kathmandu','Try Another','1','2022-01-03 04:33:14','2022-03-08 14:09:00'),(3,4,'Woo','woo','1646748525.png','Tets','Ktm','Woo fountain','1','2022-01-03 04:34:36','2022-03-08 14:08:45'),(4,1,'Glowing','glowing','1646748514.png','Glowing','Chabahil, Kathmandu','Glowing One','1','2022-01-03 04:39:03','2022-03-08 14:08:34'),(5,1,'Dhungedhara','dhungedhara','1646748803.png','Heritage Client','Kathmandu, Nepal','Completed water fountain through stone sculptures','1','2022-03-08 14:13:23','2022-03-08 14:13:23');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infos`
--

DROP TABLE IF EXISTS `infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iframe` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infos`
--

LOCK TABLES `infos` WRITE;
/*!40000 ALTER TABLE `infos` DISABLE KEYS */;
INSERT INTO `infos` (`id`, `address`, `phone`, `mail`, `iframe`, `created_at`, `updated_at`) VALUES (1,'Kathmandu, Nepal','01-4524499/899','sakasura@gmail.com','https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56516.48988549215!2d85.3540864!3d27.7086208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1582027071534!5m2!1sen!2snp','2022-01-03 03:59:48','2022-01-04 09:41:29');
/*!40000 ALTER TABLE `infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inquiries`
--

DROP TABLE IF EXISTS `inquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inquiries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inquiries`
--

LOCK TABLES `inquiries` WRITE;
/*!40000 ALTER TABLE `inquiries` DISABLE KEYS */;
INSERT INTO `inquiries` (`id`, `service_name`, `full_name`, `phone`, `message`, `enabled`, `created_at`, `updated_at`) VALUES (1,'Acquarium','It arrow','9845440580','Test Msg','1','2022-01-03 04:16:24','2022-01-03 04:17:39'),(2,'Acquarium','weoisduiygftyvghj','98496516521','popqiow','0','2022-01-06 08:13:43','2022-01-06 08:13:43');
/*!40000 ALTER TABLE `inquiries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_applications`
--

DROP TABLE IF EXISTS `job_applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `applicants_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicants_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicants_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `applied_post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_applications`
--

LOCK TABLES `job_applications` WRITE;
/*!40000 ALTER TABLE `job_applications` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logos`
--

LOCK TABLES `logos` WRITE;
/*!40000 ALTER TABLE `logos` DISABLE KEYS */;
INSERT INTO `logos` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES (1,'Heritage Nepal','1641285941.png','2021-12-28 12:15:25','2022-01-04 08:45:41');
/*!40000 ALTER TABLE `logos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `manipulations` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsive_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_03_21_072056_create_roles_table',1),(4,'2019_03_21_073849_create_dealer_profiles_table',1),(5,'2019_04_01_093411_create_categories_table',1),(6,'2019_04_01_094323_create_sub_categories_table',1),(7,'2019_04_01_113704_create_products_table',1),(8,'2019_04_03_081106_create_media_table',1),(9,'2019_05_19_102638_create_shipping_details_table',1),(10,'2019_05_21_092340_create_orders_table',1),(11,'2019_05_21_094946_create_order_product_table',1),(12,'2019_07_31_072126_contact_us',1),(13,'2019_07_31_123834_create_job_applications_table',1),(14,'2019_12_30_120110_create_verify_users_table',1),(15,'2021_11_26_173308_create_abouts_table',1),(16,'2021_11_26_173502_create_services_table',1),(17,'2021_11_26_173557_create_blogs_table',1),(18,'2021_11_26_173647_create_testimonials_table',1),(19,'2021_11_26_174556_create_socials_table',1),(20,'2021_11_26_174750_create_infos_table',1),(21,'2021_11_26_175134_create_chooses_table',1),(22,'2021_12_17_125841_create_banners_table',1),(23,'2021_12_17_133749_create_videos_table',1),(24,'2021_12_19_142346_create_logos_table',1),(25,'2021_12_19_161217_create_brochures_table',1),(26,'2021_12_20_103737_create_inquiries_table',1),(27,'2021_12_20_151558_create_pages_table',1),(28,'2021_12_21_173530_create_galleries_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `delivered` tinyint(4) NOT NULL,
  `payment_type` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES (1,'Privacy Policy','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2022-01-03 03:44:02','2022-01-03 03:44:02'),(2,'Terms & Conditions','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2022-01-03 03:44:18','2022-01-03 03:44:18');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `subcategory_id` int(10) unsigned DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_stock` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_subcategory_id_foreign` (`subcategory_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `product_name`, `slug`, `description`, `price`, `in_stock`, `enabled`, `image`, `pdf`, `created_at`, `updated_at`) VALUES (1,1,1,'Normal Bulb','normal-bulb','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','300',3000,1,'1641181138.png','','2022-01-03 03:39:01','2022-01-03 03:39:19'),(2,1,2,'SOny','sony','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','400',400,1,'1641181213.jpg','','2022-01-03 03:40:13','2022-01-03 03:40:13'),(3,2,3,'Attractive','attractive','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','5000',500,1,'1641181265.jpg','','2022-01-03 03:41:05','2022-01-03 03:41:05'),(4,3,NULL,'Normal','normal','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','12000',30,1,'1641181329.jpg','','2022-01-03 03:42:09','2022-01-03 03:42:09');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES (1,'admin',NULL,NULL),(2,'user',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enabled` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `title`, `slug`, `image`, `pdf`, `enabled`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES (1,'Acquarium','acquarium','1641181636.jpg','','0','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',NULL,NULL,NULL,'2022-01-03 03:47:16','2022-01-04 10:53:38'),(2,'Lights','lights','1641181682.jpg','','0','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',NULL,NULL,NULL,'2022-01-03 03:48:02','2022-01-04 10:53:35'),(4,'Outdoor Fountain','outdoor-fountain','1641181796.jpg','','1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',NULL,NULL,NULL,'2022-01-03 03:49:56','2022-01-04 10:53:29'),(5,'Switch and sockets','switch-and-sockets','1641293510.jpeg','','1','dummy',NULL,NULL,NULL,'2022-01-04 10:51:50','2022-01-04 10:56:02'),(6,'Lights','lights','1641293535.jpeg','','1','Dummy',NULL,NULL,NULL,'2022-01-04 10:52:15','2022-01-04 10:55:44'),(7,'Swimming Pool Equipment','swimming-pool-equipment','1641293571.jpeg','','1','dummy',NULL,NULL,NULL,'2022-01-04 10:52:51','2022-01-04 10:52:51'),(8,'Water Fountains','water-fountains','1641293597.jpeg','','1','dummy',NULL,NULL,NULL,'2022-01-04 10:53:17','2022-01-04 10:53:17');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping_details`
--

DROP TABLE IF EXISTS `shipping_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping_details`
--

LOCK TABLES `shipping_details` WRITE;
/*!40000 ALTER TABLE `shipping_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `shipping_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socials`
--

DROP TABLE IF EXISTS `socials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `socials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socials`
--

LOCK TABLES `socials` WRITE;
/*!40000 ALTER TABLE `socials` DISABLE KEYS */;
INSERT INTO `socials` (`id`, `title`, `icon`, `link`, `created_at`, `updated_at`) VALUES (1,'Facebook','1641182343.png','http://www.facebook.com/heritage.np','2022-01-03 03:59:04','2022-01-04 10:39:47'),(2,'Twitter','1641182361.png','http://www.twitter.com','2022-01-03 03:59:21','2022-01-03 03:59:21');
/*!40000 ALTER TABLE `socials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_categories_category_id_foreign` (`category_id`),
  KEY `sub_categories_created_by_foreign` (`created_by`),
  CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sub_categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_categories`
--

LOCK TABLES `sub_categories` WRITE;
/*!40000 ALTER TABLE `sub_categories` DISABLE KEYS */;
INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `slug`, `created_by`, `created_at`, `updated_at`) VALUES (1,1,'Flouricent','flouricent',1,'2021-12-28 12:20:59','2021-12-28 12:22:01'),(2,1,'LED','led',1,'2022-01-03 03:35:30','2022-01-03 03:35:30'),(3,2,'Water','water',1,'2022-01-03 03:35:45','2022-01-03 03:35:45');
/*!40000 ALTER TABLE `sub_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enabled` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `title`, `image`, `position`, `enabled`, `description`, `created_at`, `updated_at`) VALUES (1,'It Arrow','1641182260.png','Founder','1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2022-01-03 03:57:40','2022-01-03 03:58:34'),(2,'Heritage Nepal','1641182305.png','Founder','1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2022-01-03 03:58:25','2022-01-03 03:58:37');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `verified`, `is_approved`, `remember_token`, `created_at`, `updated_at`) VALUES (1,'Heritage Nepal','web@heritagenepal.com','$2y$10$N49AEVNO8vi5m5QiwubMMerIdjwMLw6uU/KHYpdtl5fHgbo/N1rg2',1,1,1,'hfKITxB3r4bn0QcKl4uL6Kc33tftFZIxBvTilcrDHLbFIO5ArJRXIoZp5CUG',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verify_users`
--

DROP TABLE IF EXISTS `verify_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verify_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verify_users`
--

LOCK TABLES `verify_users` WRITE;
/*!40000 ALTER TABLE `verify_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `verify_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `title`, `enabled`, `image`, `created_at`, `updated_at`) VALUES (1,'Video','1','video2.mp4','2022-01-03 08:26:37','2022-01-03 08:26:37'),(2,'Fountain','1','fountain.mp4','2022-01-03 08:27:30','2022-01-03 08:27:30'),(3,'Heritage Nepal Video 1','1','VID-20211129-WA0000.mp4','2022-01-04 09:13:10','2022-01-04 09:13:10'),(4,'Heritage Nepal Video 2','1','VID-20211129-WA0001.mp4','2022-01-04 09:13:32','2022-01-04 09:13:32'),(5,'Heritage Nepal Video 3','1','VID-20211129-WA0002.mp4','2022-01-04 09:13:49','2022-01-04 09:18:00'),(7,'Heritage Nepal Video 4','1','VID-20211129-WA0004.mp4','2022-01-04 09:14:21','2022-01-04 09:14:21'),(16,'Heritage Nepal Video 16','1','VID-20211129-WA0016.mp4','2022-01-04 09:23:44','2022-01-04 09:23:44'),(17,'Heritage Nepal Video 17','1','VID-20211129-WA0017.mp4','2022-01-04 09:24:08','2022-01-04 09:24:08'),(18,'Heritage Nepal Video 18','1','VID-20211129-WA0018.mp4','2022-01-04 09:25:19','2022-01-04 09:25:19'),(20,'Prime Minister Quarter','1','VID-20211129-WA0013.mp4','2022-01-04 09:28:50','2022-01-04 09:28:50'),(21,'Karnali Provincial Hospital','1','VID-20211129-WA0008.mp4','2022-01-04 09:30:31','2022-01-04 09:30:31'),(22,'Anupam Foodland & Banquet','1','VID-20211129-WA0015.mp4','2022-01-04 09:31:53','2022-01-04 09:31:53'),(23,'Hotel Apple Wood And Spa','1','fountain.mp4','2022-01-04 09:35:55','2022-01-07 06:53:53');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'heritagefountain_dbb'
--

--
-- Dumping routines for database 'heritagefountain_dbb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-05 12:09:21
