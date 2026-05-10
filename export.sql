-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: work
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `cautari`
--

DROP TABLE IF EXISTS `cautari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cautari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cuvant_cheie` varchar(255) NOT NULL,
  `pagina` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cautari`
--

LOCK TABLES `cautari` WRITE;
/*!40000 ALTER TABLE `cautari` DISABLE KEYS */;
INSERT INTO `cautari` VALUES (1,'test','Atestat.php'),(2,'anxietate','Atestat.php'),(3,'contact','Atestat.php'),(4,'somn','camere.php'),(5,'chakra','camere.php'),(6,'jurnal','camere.php'),(7,'echipa','sesiune.php'),(8,'psihologi','sesiune.php'),(9,'programare','sesiune.php'),(10,'galerie','echilibru.php'),(11,'relaxare','Atestat.php'),(12,'acasa','Atestat.php'),(13,'scop','Atestat.php'),(14,'site','Atestat.php'),(15,'navigare','Atestat.php'),(16,'meditatie','camere.php'),(17,'calm','camere.php'),(18,'resurse','camere.php'),(19,'video','camere.php'),(20,'pdf','camere.php'),(21,'formular','sesiune.php'),(22,'rezervare','sesiune.php'),(23,'locuri','sesiune.php'),(24,'calendar','sesiune.php'),(25,'terapie','sesiune.php'),(26,'echilibru','echilibru.php'),(27,'respiratie','echilibru.php'),(28,'stres','echilibru.php'),(29,'emotii','echilibru.php'),(30,'mindfulness','echilibru.php');
/*!40000 ALTER TABLE `cautari` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagini`
--

DROP TABLE IF EXISTS `imagini`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagini` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) NOT NULL,
  `imagine` blob DEFAULT NULL,
  `descriere` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagini`
--

LOCK TABLES `imagini` WRITE;
/*!40000 ALTER TABLE `imagini` DISABLE KEYS */;
INSERT INTO `imagini` VALUES (187,'Teodora Ioan','p1.jpg','Teodora Ioan este un psiholog cu o experienta vasta in domeniul sanatatii mentale. Cu o abordare empatica si personalizata, Teodora ajuta pacientii sa depaseasca provocarile emotionale si sa isi descopere resursele interioare pentru a trai o viata echilibrata. Este specializata in consilierea individuala si terapia de cuplu, avand o pasiune pentru intelegerea dinamicii relatiilor si sprijinirea dezvoltarii personale.'),(188,'Florin Martinescu','p2.jpg','Florin Martinescu este un psiholog dedicat sanatatii mentale si emotionale, cu o abordare bazata pe stiinta si empatie. Florin este cunoscut pentru abilitatea sa de a crea un mediu sigur si confortabil pentru pacienti, unde acestia pot explora provocarile vietii fara teama de judecata. Este specializat in terapia cognitiv-comportamentala, lucrand cu persoane care se confrunta cu anxietate, depresie sau dificultati de adaptare la schimbari majore.'),(189,'Iulia Minculescu','p3.jpg','Iulia Minculescu este un psiholog pasionat de sprijinirea oamenilor in procesul de autodescoperire si vindecare. Cu o abordare calda si prietenoasa, Iulia ajuta pacientii sa isi depaseasca traumele trecutului si sa isi construiasca un viitor mai luminos. Este specializata in terapia integrativa, combinand diverse tehnici pentru a raspunde nevoilor individuale ale fiecarui pacient. De asemenea, Iulia ofera sprijin in gestionarea stresului si dezvoltarea rezilientei emotionale.');
/*!40000 ALTER TABLE `imagini` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opinii`
--

DROP TABLE IF EXISTS `opinii`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opinii` (
  `nume` varchar(20) DEFAULT NULL,
  `opinie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opinii`
--

LOCK TABLES `opinii` WRITE;
/*!40000 ALTER TABLE `opinii` DISABLE KEYS */;
INSERT INTO `opinii` VALUES ('Ion Popescu','Ma simt mult mai relaxat dupa fiecare sesiune. Recomand cu incredere!'),('Maria Ionescu','Un loc minunat pentru linistea interioara. Va multumesc pentru tot!'),('Andrei Georgescu','M-a ajutat sa inteleg mai bine cum sa gestionez stresul cotidian. Multumesc!'),('Elena Radu','Multumesc pentru sesiuni! M-au ajutat sa imi gasesc echilibrul interior.'),('Lucian Popa','Un loc de relaxare adevarat. Dupa fiecare intalnire, ma simt mult mai bine!'),('Popa Ioana','A fost o experienta cu adevarat benefica!');
/*!40000 ALTER TABLE `opinii` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programari`
--

DROP TABLE IF EXISTS `programari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `nume` varchar(100) NOT NULL,
  `varsta` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gand` text NOT NULL,
  `psiholog` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programari`
--

LOCK TABLES `programari` WRITE;
/*!40000 ALTER TABLE `programari` DISABLE KEYS */;
INSERT INTO `programari` VALUES (14,'2025-05-05','Ionescu Medeea',24,'test@gmail.com','Buna! Sunt o fire timida, dar comunicativa. Imi doresc sa ma descopar pe mine si sa invat tehnici de relaxare. Va multumesc!','Teodora Ioan'),(15,'2025-05-05','Patrascu Teodora',20,'teop@gmail.com','Buna! Sunt o fire sociabila, o persoana deschisa si comunicativa, care se simte confortabil in mijlocul altora, construind rela?ii usor si fiind mereu dornica sa interactioneze cu cei din jur. Totusi, mi-ar placea sa imi explorez mai mult lumea interioara si sa descopar credinte limitative.','Teodora Ioan'),(16,'2025-05-06','Istratuca Magdalena',40,'magdaistra@gmail.com','Salut! Mă confrunt cu o stare de oboseală emoțională constantă. Aș vrea să învăț cum să îmi gestionez mai bine energia și relațiile.','Florin Martinescu'),(17,'2025-05-05','Cantor Mihaela',22,'miha@gmail.com','Bună! Aș vrea să încep un proces de autocunoaștere. Simt că mă pierd uneori în așteptările altora și mi-ar plăcea să îmi găsesc vocea interioară.','Teodora Ioan'),(18,'2025-05-06','Ionescu Andreea',19,'andre@gmail.com','Bună ziua! Am trecut printr-o perioadă agitată și simt că nu mai reușesc să mă conectez cu mine. Aș vrea să vorbim despre echilibru și anxietate.','Iulia Minculescu'),(19,'2025-05-07','Danciu Ovidiu',25,'ovidan@gmail.com','Salut! De ceva timp simt că nu mai găsesc bucurie în lucruri. Aș vrea să explorăm împreună ce ar putea fi în spatele acestei stări.','Teodora Ioan'),(20,'2025-05-07','Doroban Mihael',24,'doromih@gmail.com','Bună! Am dificultăți în a-mi gestiona emoțiile în relațiile apropiate. M-ar ajuta să înțeleg de unde pornește această reacție și cum o pot schimba.','Teodora Ioan'),(21,'2025-05-07','Luca Cristina',22,'criss@gmail.com','Bună! Îmi doresc să discutăm despre neîncrederea în sine și despre cum pot învăța să fiu mai blândă cu mine.','Florin Martinescu'),(22,'2025-05-08','Tinciu Naomi',22,'test2@gmail.com','Buna ziua! Ma simt adesea blocata intre ceea ce vreau si ce se asteapta de la mine. As vrea sa discutăm despre directia mea în viata.','Teodora Ioan'),(23,'2025-05-08','Patrascu Teodora',25,'teop@gmail.com','Bună! Am dificultăți în a-mi gestiona emoțiile în relațiile apropiate. M-ar ajuta să înțeleg de unde pornește această reacție și cum o pot schimba.','Teodora Ioan'),(24,'2025-05-12','Moldovean Mihai',26,'moldo@gmail.com','Salut! Simt că am nevoie de un spațiu sigur în care să pot să mă exprim fără teamă. Aș vrea să încep acest proces cu tine.','Teodora Ioan'),(25,'2025-05-12','Ghinda Daniel',20,'dadag@gmail.com','Bună! Trec printr-o perioadă de confuzie și aș vrea să înțeleg mai bine ce se întâmplă cu mine, ce simt și ce îmi doresc cu adevărat.','Florin Martinescu'),(26,'2025-05-13','Coca Andrei',19,'andre@gmail.com','Bună! Am început să am atacuri de panică și nu le înțeleg pe deplin. Aș vrea să vorbim despre ele și să învăț cum să le gestionez.','Florin Martinescu'),(27,'2025-05-14','Iovanovici Medeea',29,'test3@gmail.com','Bună ziua! Mă simt adesea blocată între ceea ce vreau și ce se așteaptă de la mine. Aș vrea să discutăm despre direcția mea în viață.','Teodora Ioan'),(28,'2025-05-15','Dima Andrei',19,'andred@gmail.com','Buna! In ultima vreme simt ca ma lupt cu perfectionismul si frica de esec. Mi-ar placea sa invat cum sa fiu mai tolerant cu mine.','Teodora Ioan'),(29,'2025-05-15','Oana Petrescu',26,'oanapetre@gmail.com','Salut! Sunt într-o etapă în care mă simt blocată profesional. Nu mai știu ce îmi place și ce mi se potrivește. Simt nevoia de claritate.','Teodora Ioan'),(30,'2025-05-15','Cristian Ilie',22,'iliecri@yahoo.com','Bună ziua! Am crescut într-un mediu destul de critic și acum îmi este greu să am încredere în oameni sau în propriile mele decizii. Aș vrea să lucrez pe asta.','Florin Martinescu'),(31,'2025-05-15','Laura Neagu',35,'lauran@gmail.com','Buna! Am inceput o relatie noua, dar imi dau seama ca imi e teama sa ma apropii emotional. Poate are legatura cu experientele din trecut.','Florin Martinescu'),(32,'2025-05-15','Vlad Moraru',48,'vladmoraru@yahoo.com','Salut! Mă gândesc deseori la sensul vieții și la faptul că timpul trece, dar eu simt că stagnez. Mi-ar prinde bine o discuție sinceră despre direcție și valori.','Iulia Minculescu'),(33,'2025-05-03','Ionescu Andreea',26,'ionean@yahoo.com','Simt ca port o masca in fata celorlalti si nu mai stiu cine sunt cu adevarat. Mi-ar placea sa invat cum sa fiu autentic fara frica.','Teodora Ioan');
/*!40000 ALTER TABLE `programari` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-06 17:16:06
