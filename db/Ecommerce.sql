/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.5.24-log : Database - ecommerce
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

USE `heroku_18d7ca516592eee`;

/*Table structure for table `billing` */

DROP TABLE IF EXISTS `billing`;

CREATE TABLE `billing` (
  `Id` bigint(100) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `UserId` bigint(100) NOT NULL,
  `Pin` int(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `billing` */

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(100) NOT NULL,
  `isactive` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`id`,`CategoryName`,`isactive`) values (1,'Electronic',''),(2,'Food',''),(3,'hey',''),(4,'heyme',''),(5,'jaja',''),(6,'aho','');

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` bigint(80) NOT NULL AUTO_INCREMENT,
  `userId` bigint(60) NOT NULL,
  `data` datetime NOT NULL,
  `rating` int(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `images` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `images` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` bigint(80) NOT NULL AUTO_INCREMENT,
  `MenuName` varchar(100) NOT NULL,
  `isActive` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(`id`,`MenuName`,`isActive`) values (1,'test',''),(2,'About',''),(3,'Privacy Policy',''),(4,'aho','');

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `orderdate` datetime NOT NULL,
  `qty` int(10) NOT NULL,
  `total` bigint(20) NOT NULL,
  `userid` bigint(11) NOT NULL,
  `mop` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tax` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `order` */

insert  into `order`(`id`,`orderdate`,`qty`,`total`,`userid`,`mop`,`status`,`tax`) values (1,'2014-08-06 12:19:16',1,4049,1,'cc','0.00','Silver Grey'),(2,'2014-08-06 12:19:37',1,4049,1,'cc','0.00','Silver Grey'),(3,'2014-08-06 12:19:56',1,4049,1,'cc','0.00','Silver Grey'),(4,'2014-08-06 12:20:25',1,4049,1,'cc','0.00','Silver Grey'),(5,'2014-08-06 12:21:32',1,4049,1,'cc','0.00','Silver Grey'),(6,'2014-08-06 12:21:42',1,4049,1,'cc','0.00','Silver Grey'),(7,'2014-08-06 12:21:56',1,4049,1,'cc','0.00','Silver Grey'),(8,'2014-08-06 12:22:32',1,4049,1,'cc','0.00','Silver Grey'),(9,'2014-08-06 12:23:22',1,4049,1,'cc','0.00','Silver Grey'),(10,'2014-08-06 12:23:33',1,4049,1,'cc','0.00','Silver Grey'),(11,'2014-08-06 12:23:42',1,4049,1,'cc','0.00','Silver Grey'),(12,'2014-08-06 12:24:16',1,4049,1,'cc','0.00','Silver Grey'),(13,'2014-08-06 12:24:52',1,4049,1,'cc','0.00','Silver Grey'),(14,'2014-08-06 12:28:47',1,4049,1,'cc','0.00','Silver Grey'),(15,'2014-08-06 12:32:23',1,4049,0,'cod','0.00','Silver Grey'),(16,'2014-08-06 14:27:28',1,4049,0,'cc','0.00','Light Brown'),(17,'2014-08-06 14:27:35',1,4049,0,'cod','0.00','Light Brown'),(18,'2014-08-06 14:31:51',1,4049,1,'cod','0.00','Medium Brown'),(19,'2014-08-06 14:32:11',1,4049,1,'cc','0.00','Silver Grey'),(20,'2014-09-02 15:28:59',2,7948,0,'cc','0.00','150'),(21,'2014-09-02 15:29:09',2,7948,0,'cc','0.00','150'),(22,'2014-09-02 15:40:27',2,7948,0,'cc','0.00','150'),(23,'2014-09-02 19:23:40',1,4049,0,'cc','0.00','150'),(24,'2014-09-04 13:51:24',1,4049,0,'cc','0.00','150'),(25,'2014-09-06 06:43:57',1,4049,0,'cc','0.00','150'),(26,'2014-09-06 15:41:51',1,4049,9,'cod','0.00','150'),(27,'2014-09-06 15:46:29',1,4049,9,'cod','0.00','150'),(28,'2014-09-09 07:21:41',1,4049,0,'cc','0.00','150'),(29,'2014-09-10 10:47:17',1,4049,0,'cc','0.00','150'),(30,'2014-09-10 10:47:38',1,4049,0,'cc','0.00','150'),(31,'2014-09-10 11:15:20',1,4049,0,'cc','0.00','150'),(32,'2014-09-10 11:15:28',1,4049,0,'cc','0.00','150'),(33,'2014-09-10 13:28:34',1,4049,0,'cc','0.00','150'),(34,'2014-09-11 08:44:31',1,4049,0,'cc','0.00','150'),(35,'2014-09-11 08:45:50',1,4049,0,'cc','0.00','150'),(36,'2014-09-11 08:47:35',1,4049,0,'bp','0.00','150'),(37,'2014-09-11 14:45:23',2,7948,7,'cc','0.00','150'),(38,'2014-09-12 19:57:09',3,11247,10,'cc','0.00','150'),(39,'2014-09-15 08:59:00',1,4049,0,'cc','0.00','150'),(40,'2014-09-15 09:20:07',1,4049,7,'cc','0.00','150'),(41,'2014-09-15 10:54:33',1,4049,12,'cod','0.00','150');

/*Table structure for table `orderdetail` */

DROP TABLE IF EXISTS `orderdetail`;

CREATE TABLE `orderdetail` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `orderid` bigint(20) NOT NULL,
  `pcolor` varchar(100) NOT NULL,
  `Qty` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `orderdetail` */

/*Table structure for table `orderdetails` */

DROP TABLE IF EXISTS `orderdetails`;

CREATE TABLE `orderdetails` (
  `id` bigint(80) NOT NULL AUTO_INCREMENT,
  `orderId` int(80) NOT NULL,
  `personName` varchar(80) NOT NULL,
  `personId` int(60) NOT NULL,
  `price` int(60) NOT NULL,
  `quantity` int(60) NOT NULL,
  `discount` bit(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

/*Data for the table `orderdetails` */

/*Table structure for table `ordermaster` */

DROP TABLE IF EXISTS `ordermaster`;

CREATE TABLE `ordermaster` (
  `id` bigint(80) NOT NULL AUTO_INCREMENT,
  `Qty` int(60) NOT NULL,
  `Total` int(60) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `PaymentMode` int(60) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Billing` bigint(20) NOT NULL,
  `Shipping` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ordermaster` */

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` bigint(80) NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `p_name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `Isactive` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pages` */

insert  into `pages`(`id`,`menu_id`,`title`,`p_name`,`description`,`Isactive`) values (1,0,'vjh','jh','cgjvfv',''),(2,3,'sdfa','asdf','asdf','');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `SubCategoryId` bigint(100) NOT NULL,
  `ProductId` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `Decs` text NOT NULL,
  `Pic` text NOT NULL,
  `price` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product` */

/*Table structure for table `shipping` */

DROP TABLE IF EXISTS `shipping`;

CREATE TABLE `shipping` (
  `Id` bigint(100) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `UserId` varchar(100) NOT NULL,
  `Pin` int(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `shipping` */

/*Table structure for table `stock` */

DROP TABLE IF EXISTS `stock`;

CREATE TABLE `stock` (
  `id` bigint(60) NOT NULL AUTO_INCREMENT,
  `quantity` bigint(60) NOT NULL,
  `sold` bigint(60) NOT NULL,
  `productid` bigint(60) NOT NULL,
  PRIMARY KEY (`id`,`quantity`,`sold`,`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `stock` */

insert  into `stock`(`id`,`quantity`,`sold`,`productid`) values (1,12,0,1);

/*Table structure for table `subcategory` */

DROP TABLE IF EXISTS `subcategory`;

CREATE TABLE `subcategory` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `CategoryId` bigint(20) NOT NULL,
  `SubCategoryName` varchar(100) NOT NULL,
  `isactive` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `subcategory` */

/*Table structure for table `testimonial` */

DROP TABLE IF EXISTS `testimonial`;

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagline` text NOT NULL,
  `detail` text NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `p_line` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `testimonial` */

insert  into `testimonial`(`id`,`tagline`,`detail`,`c_name`,`p_line`) values (1,'hey','hey','hey','me');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `useremail` varchar(60) NOT NULL,
  `password` varchar(64) NOT NULL,
  `registered_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`useremail`,`password`,`registered_date`) values (1,'test@gmail.com','52ed6d3ea3d8acbd7c5c832e68ebd37aaf009cde','2014-08-01'),(2,'hey@gmail.com','52ed6d3ea3d8acbd7c5c832e68ebd37aaf009cde','2014-08-04'),(3,'chak@gmail.com','52ed6d3ea3d8acbd7c5c832e68ebd37aaf009cde','2014-08-04'),(4,'me@me.com','7f550a9f4c44173a37664d938f1355f0f92a47a7','2014-08-04'),(5,'y@gmail.com','52ed6d3ea3d8acbd7c5c832e68ebd37aaf009cde','2014-08-04'),(6,'amith@23a.in','67c99fc19ca58c0f9713b0b065e03726b9e0a65d','2014-09-01'),(7,'sushant@matsofts.com','7fab0a307c8d0d02f812ca3a75cf5008b4650728','2014-09-02'),(8,'varunrocks27.sharma@gmail.com','f077943b4a35d9abd35de799e1ee6a1bfe9e5db7','2014-09-03'),(9,'ramgoyel@gmail.com','6731c7d15a4010074eac42ba2188652d6e53b536','2014-09-06'),(10,'tanmay.patnaik@gmail.com','eb114da449eb67b74789616c3c3eee274777503a','2014-09-12'),(11,'varun@gmail.com','9d325b2fc703f3c642091f36eff52c409a0fded3','2014-09-14'),(12,'nugen@gmail.com','1592346348ea8a10c7b83497cc1d4cf92bee7c7a','2014-09-15');

/*Table structure for table `usersaccount` */

DROP TABLE IF EXISTS `usersaccount`;

CREATE TABLE `usersaccount` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `SecurityQuestion` text NOT NULL,
  `SecurityAnswer` text NOT NULL,
  `IsActive` bit(1) NOT NULL,
  `IsAdmin` bit(1) NOT NULL,
  `RegDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `usersaccount` */

insert  into `usersaccount`(`id`,`UserName`,`Email`,`Password`,`SecurityQuestion`,`SecurityAnswer`,`IsActive`,`IsAdmin`,`RegDate`) values (1,'asdfad','admin@gmail.com','32af2d608c954bcb91ea263c589b0f12','What is your school name?','addd','','','2014-08-16 15:23:51'),(2,'asdfad','add@gmail.com','912ec803b2ce49e4a541068d495ab570','Which is your favourite color?','asdf','','','2014-08-16 15:28:41'),(3,'fasdf','me@me.com','912ec803b2ce49e4a541068d495ab570','What is your pet name?','asdf','','','2014-08-16 15:35:18'),(4,'dsfa','test@gmail.com','0d43fefdde03fc1d207c35ca6bc0ae6b','Which is your fovourite dish?','aho','\0','','2014-08-16 16:01:33'),(5,'test','info@nugeninfo.com','32af2d608c954bcb91ea263c589b0f12','What is your pet name?','ppv','','','2014-08-18 10:43:12'),(6,'aadf','kal@gmail.com','912ec803b2ce49e4a541068d495ab570','Which is your favourite color?','asdf','','\0','2014-08-18 14:06:35'),(7,'Achabacha','asdf@gmail.com','912ec803b2ce49e4a541068d495ab570','What is your pet name?','asdf','','','2014-08-20 16:50:12'),(8,'Aho Aho','ads@gmail.com','d055a8adef405f249a0dd8a72fccf901','What is your pet name?','alsk;dfj','','','2014-08-20 16:54:26'),(9,'asdf','nu@gmail.com','c71a8da22bf4053760a604897627474c','What is your pet name?','askldfj;','','','2014-08-20 17:07:49'),(10,'Checking new one','hey@gmail.com','5e543256c480ac577d30f76f9120eb74','What is your pet name?','nugen','','','2014-08-20 17:34:06'),(11,'aasdf','a@gmail.com','5e543256c480ac577d30f76f9120eb74','What is your pet name?','&lt;div style=&quot;height:100%;width:100%;position:fixed;top:0px;left:0px;background:#000;z-index:10000000000;color:#fff;&quot;&gt;done&lt;/div&gt;','','','2014-08-20 17:36:58'),(12,'Checking sql injection','je@gmail.com','5e543256c480ac577d30f76f9120eb74','What is your pet name?','nugen\'s','','','2014-08-20 17:40:44'),(13,'jai','nugen@gmail.com','5e543256c480ac577d30f76f9120eb74','What is your pet name?','asdf','','','2014-08-20 17:42:09'),(14,'asdf','asdf!@gamilc.omx','5e543256c480ac577d30f76f9120eb74','What is your pet name?','daf','','','2014-09-12 17:18:10'),(15,'asdf','hariom@gm,ail.com','5e543256c480ac577d30f76f9120eb74','What is your pet name?','asdf','','','2014-09-12 17:47:41'),(16,'asdf','harioasdfm@gmail.com','5e543256c480ac577d30f76f9120eb74','What is your pet name?','asdf','','','2014-09-12 17:48:51'),(17,'asdfasdfasdf','asdklfjskldf!@gm,aio.com','5e543256c480ac577d30f76f9120eb74','What is your pet name?','asdfasfd','','','2014-09-12 17:49:45'),(18,'hanji ','nahiji@gnmail.com','5e543256c480ac577d30f76f9120eb74','What is your pet name?','adfa','','','2014-09-13 13:15:14'),(19,'jajajajaj','jajajajja@gmail.com','5e543256c480ac577d30f76f9120eb74','What is your pet name?','asdfas','','','2014-09-13 13:16:43'),(20,'jklasdklasdfjkl','hariom@gmail.com','5e543256c480ac577d30f76f9120eb74','What is your pet name?','asdf my answer','','','2014-09-16 18:05:51');

/*Table structure for table `userspersonal` */

DROP TABLE IF EXISTS `userspersonal`;

CREATE TABLE `userspersonal` (
  `Id` bigint(100) NOT NULL AUTO_INCREMENT,
  `PersonalEmail` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `DOB` int(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `userspersonal` */

insert  into `userspersonal`(`Id`,`PersonalEmail`,`FirstName`,`LastName`,`Phone`,`Address`,`State`,`City`,`Country`,`DOB`,`Gender`) values (1,'admin@gmail.com','Varuna','Shama','9915296866','Nugen','PUNJAB','JALANDHAR','India',2004,'male');

/* Procedure structure for procedure `fetchAllOrdersByUserId` */

/*!50003 DROP PROCEDURE IF EXISTS  `fetchAllOrdersByUserId` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `fetchAllOrdersByUserId`(IN `id` BIGINT)
    NO SQL
SELECT om.id,om.orderdate,om.total,om.mop,om.status,om.tax,od.pcolor,od.qty,od.price FROM `order` AS om
	INNER JOIN orderdetail AS od ON od.orderid = om.id
	WHERE om.userid = id */$$
DELIMITER ;

/* Procedure structure for procedure `pChangePassword` */

/*!50003 DROP PROCEDURE IF EXISTS  `pChangePassword` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `pChangePassword`(IN `userid` BIGINT, IN `pd` VARCHAR(60))
BEGIN
DECLARE result INT DEFAULT 0;
	     UPDATE users SET `password` = pd WHERE id = userid	;
	     SET result =1;
	     SELECT result;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `pCheckUser` */

/*!50003 DROP PROCEDURE IF EXISTS  `pCheckUser` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `pCheckUser`(
	in email varchar(60),
	in pass  varchar(64)
    )
BEGIN
	declare result int default 0;
	if exists(SELECT id FROM users WHERE useremail = email AND `password`= pass) then
	     SELECT id,useremail FROM users WHERE useremail = email AND `password`= pass;
	else
	      select result;
	end if;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `pCheckUserByEmail` */

/*!50003 DROP PROCEDURE IF EXISTS  `pCheckUserByEmail` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `pCheckUserByEmail`(
	IN email VARCHAR(60)
    )
BEGIN
	DECLARE result INT DEFAULT 0;
	IF EXISTS(SELECT id FROM users WHERE useremail = email) THEN
	     SET result =1;
	     SELECT result;
	ELSE
		SET result= 0;
	      SELECT result;
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `pInsertBilling` */

/*!50003 DROP PROCEDURE IF EXISTS  `pInsertBilling` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `pInsertBilling`(
	in orderid bigint,
	in uid bigint,
	in fname varchar(30),
	in lname varchar(30),
	in address text,
	in city varchar(30),
	in state varchar(30),
	in zip varchar(60),
	in country varchar(30),
	in phone varchar(60),
	in email varchar(30)
    )
BEGIN
	declare result int default 0;
	insert into billing(orderid,uid,fname,lname,address,city,state,zip,country,phone,email) values(orderid,uid,fname,lname,address,city,state,zip,country,phone,email);
	SET result =1;
	SELECT result;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `pInsertOrder` */

/*!50003 DROP PROCEDURE IF EXISTS  `pInsertOrder` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `pInsertOrder`(
	in `qty` int,
	in total bigint,
	in `userid` bigint,
	in `mop` varchar(30),
	in `stats` varchar(20),
	in `color` varchar(20),
	IN bfname VARCHAR(30),
	IN blname VARCHAR(30),
	IN baddress TEXT,
	IN bcity VARCHAR(30),
	IN bstate VARCHAR(30),
	IN bzip VARCHAR(60),
	IN bcountry VARCHAR(30),
	IN bphone VARCHAR(60),
	IN bemail VARCHAR(30),
	IN sfname VARCHAR(30),
	IN slname VARCHAR(30),
	IN saddress TEXT,
	IN scity VARCHAR(30),
	IN sstate VARCHAR(30),
	IN szip VARCHAR(60),
	IN scountry VARCHAR(30),
	IN sphone VARCHAR(60),
	IN semail VARCHAR(30)
)
BEGIN
	DECLARE result,id,err BIGINT DEFAULT 0;
	DECLARE exit handler for sqlexception
	BEGIN
		set err = 101;
	ROLLBACK;
	END;
	START TRANSACTION;
	insert into `order`(`orderdate`,`qty`,`total`,`userid`,`mop`,`status`,`color`) values(NOW(),qty,total,userid,mop,stats,color);
	set result =1;
	set id = LAST_INSERT_ID();
	INSERT INTO billing(orderid,uid,fname,lname,address,city,state,zip,country,phone,email) VALUES(id,userid,bfname,blname,baddress,bcity,bstate,bzip,bcountry,bphone,bemail);
	INSERT INTO shipping(orderid,uid,fname,lname,address,city,state,zip,country,phone,email) VALUES(id,userid,sfname,slname,saddress,scity,sstate,szip,scountry,sphone,semail);
	select result,id,err;
	commit;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `pInsertShipping` */

/*!50003 DROP PROCEDURE IF EXISTS  `pInsertShipping` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `pInsertShipping`(
	in orderid bigint,
	in uid bigint,
	in fname varchar(30),
	in lname varchar(30),
	in address text,
	in city varchar(30),
	in state varchar(30),
	in zip varchar(60),
	in country varchar(30),
	in phone varchar(60),
	in email varchar(30)
    )
BEGIN
	declare result int default 0;
	insert into shipping(orderid,uid,fname,lname,address,city,state,zip,country,phone,email) values(orderid,uid,fname,lname,address,city,state,zip,country,phone,email);
	SET result =1;
	SELECT result;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `pInsertUser` */

/*!50003 DROP PROCEDURE IF EXISTS  `pInsertUser` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `pInsertUser`(IN `usermail` VARCHAR(60), IN `password` VARCHAR(60))
begin
declare result,id int default 0;
if(exists(SELECT useremail FROM users WHERE useremail = usermail)) THEN
	set result = 1;
	SELECT  result;
else
	INSERT INTO users(`useremail`,`password`,`registered_date`) VALUES(usermail,password,CURDATE());
	set result = 2;
	set id = (select count(id) from users);
	SELECT  result,id;
end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `pUpdateStatus` */

/*!50003 DROP PROCEDURE IF EXISTS  `pUpdateStatus` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `pUpdateStatus`(IN `id` BIGINT, IN `stats` VARCHAR(80))
    NO SQL
BEGIN
DECLARE result,err BIGINT DEFAULT 0;
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		SET err = 101;
	ROLLBACK;
	END;
	START TRANSACTION;
	UPDATE `order` SET stats=stats WHERE id=id;
	SET result=1;
	SELECT result;
	COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `SelectAllUsers` */

/*!50003 DROP PROCEDURE IF EXISTS  `SelectAllUsers` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectAllUsers`()
BEGIN
SELECT * FROM `users`;
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
