/*
SQLyog Community v11.52 (64 bit)
MySQL - 5.6.26 : Database - vhrms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vhrms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `vhrms`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `code` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `pwd` varchar(250) DEFAULT NULL,
  `org_pwd` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`code`,`name`,`username`,`email`,`mobile`,`address`,`profile_pic`,`pwd`,`org_pwd`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,'123','Admin',NULL,'admin@gmail.com','8500050944','Flat-306, Fortune Signature Building, Nizampet X Roads, Sardar Patel Nagar (Near JNTU Metro station), KPHB, Hyderabad- 500072, Telangana, INDIA','1560921278.jpg','e10adc3949ba59abbe56e057f20f883e','123456',1,'2019-05-17 14:12:30','2019-05-21 18:46:35',0),(21,2,'123','praveen',NULL,'praveen@gmail.com','8528528522',NULL,NULL,'e10adc3949ba59abbe56e057f20f883e','123456',1,NULL,NULL,1),(22,3,NULL,'Dr Siva',NULL,'sivam@gmail.com','8688683222','kothapalli  village  kadapa  dist','','e10adc3949ba59abbe56e057f20f883e','123456',1,NULL,NULL,1),(23,2,'123','test one',NULL,'testone@gmail.com','1233321223',NULL,NULL,'e10adc3949ba59abbe56e057f20f883e','123456',1,NULL,'2019-06-25 11:04:08',1);

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`d_id`,`name`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'Department one',1,'2019-05-22 11:55:15','2019-05-22 11:19:15',1),(2,'Department two',1,'2019-05-22 11:16:18','0000-00-00 00:00:00',1),(3,'Department three',1,'2019-05-22 11:54:52','2019-05-22 11:54:52',1);

/*Table structure for table `modules` */

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(250) DEFAULT NULL,
  `m_status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `modules` */

insert  into `modules`(`m_id`,`m_name`,`m_status`,`created_at`,`updated_at`,`created_by`) values (1,'Hospital Info',0,'2019-07-02 20:29:25','2019-07-02 20:29:25',1),(6,'OP',1,'2019-06-12 15:06:19',NULL,1),(7,'Pharmacy Master',0,'2019-07-02 20:29:31','2019-07-02 20:29:31',1),(8,'Pharmacy Sales',0,'2019-07-02 20:29:34','2019-07-02 20:29:34',1),(9,'Reports',0,'2019-07-02 20:29:37','2019-07-02 20:29:37',1),(10,'saradhi',2,'2019-06-18 20:46:47','2019-06-18 20:46:47',1),(11,'Report',1,'2019-07-02 20:49:14',NULL,1);

/*Table structure for table `modules_menu` */

DROP TABLE IF EXISTS `modules_menu`;

CREATE TABLE `modules_menu` (
  `m_m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` int(11) DEFAULT NULL,
  `m_menu_name` varchar(250) DEFAULT NULL,
  `m_menu_url` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `modules_menu` */

insert  into `modules_menu`(`m_m_id`,`m_name`,`m_menu_name`,`m_menu_url`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,'Roles','user/roles',1,'2019-05-20 10:22:03',NULL,1),(2,1,'Users Rights','user/rights',1,'2019-05-20 10:22:21',NULL,1),(3,1,'Users','user/add',1,'2019-05-20 10:22:38',NULL,1),(12,1,'Department','department',1,'2019-05-22 10:58:15',NULL,1),(13,1,'Specialty','specialty',1,'2019-05-22 10:58:32',NULL,1),(19,1,'Hospital Info','hospital',1,'2019-06-12 15:10:04',NULL,1),(20,1,'Doctor','doctor',1,'2019-06-12 15:10:23',NULL,1),(21,6,'Consultation','patient/consultation',1,'2019-06-12 15:14:50',NULL,1),(22,6,'Registration','patient/registration',1,'2019-06-12 15:16:20',NULL,1),(23,7,'Medicine Master','medicine',1,'2019-06-12 15:17:22',NULL,1),(24,7,'Generic','medicine/generic',1,'2019-06-12 15:18:18',NULL,1),(25,7,'Medicine Type ','medicine/type',1,'2019-06-12 15:18:46',NULL,1),(26,7,'Manufacturers','medicine/manufacture',1,'2019-06-12 15:19:19',NULL,1),(27,7,'Suppliers','suppliers',1,'2019-06-12 15:19:41',NULL,1),(28,7,'Stock adjustments','medicine/stockadjustment',1,'2019-06-12 15:20:29','2019-06-18 21:03:02',1),(29,7,'Tax Category ','tax',1,'2019-06-12 15:21:01',NULL,1),(30,8,'Purchase','purchase',1,'2019-06-13 17:38:58',NULL,1),(31,8,'Sale','sales',1,'2019-06-13 17:39:16',NULL,1),(32,8,' Purchase Payments ','purchase/payments',1,'2019-06-13 17:39:48',NULL,1),(33,1,'Procedure Type ','procedure/type',1,'2019-06-15 15:59:11','2019-06-22 16:55:28',1),(34,1,'Procedure ','procedure',1,'2019-06-15 15:59:45','2019-06-22 16:55:33',1),(36,9,'Sale Report ','reports/sales',1,'2019-06-17 17:39:54',NULL,1),(37,9,'Purchase Report ','reports/purchasereport',1,'2019-06-17 17:41:15',NULL,1),(38,9,'Day collection report','reports/daycollection',1,'2019-06-17 17:42:11',NULL,1),(39,6,'Op procedure','op/procedure ',0,'2019-06-22 16:57:20','2019-07-02 20:29:58',1),(40,6,'IP','ip',1,'2019-07-02 20:30:11',NULL,1),(41,11,'Patients','reports/patients',1,'2019-07-02 20:49:51',NULL,1),(42,11,'OP Reports','Reports/opreports',1,'2019-07-02 20:50:49',NULL,1),(43,11,'IP Reports','reports/ipreports',1,'2019-07-02 20:51:09',NULL,1);

/*Table structure for table `role_name` */

DROP TABLE IF EXISTS `role_name`;

CREATE TABLE `role_name` (
  `r_n_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) DEFAULT NULL,
  `role_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `role_name` */

insert  into `role_name`(`r_n_id`,`m_id`,`role_name`,`status`,`created_at`,`updated_at`,`created_by`) values (5,6,'OP Module',1,'2019-06-19 10:03:07','0000-00-00 00:00:00',1),(6,1,'testing one',1,'2019-06-25 11:01:47','0000-00-00 00:00:00',1);

/*Table structure for table `role_options` */

DROP TABLE IF EXISTS `role_options`;

CREATE TABLE `role_options` (
  `r_p_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_n_id` int(11) DEFAULT NULL,
  `r_option_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `role_options` */

insert  into `role_options`(`r_p_id`,`r_n_id`,`r_option_id`,`status`,`created_at`,`updated_at`,`created_by`) values (10,5,21,1,'2019-06-19 10:03:07','0000-00-00 00:00:00',1),(11,5,22,1,'2019-06-19 10:03:07','0000-00-00 00:00:00',1),(12,6,1,1,'2019-06-25 11:01:47','0000-00-00 00:00:00',1),(13,6,3,1,'2019-06-25 11:01:47','0000-00-00 00:00:00',1),(14,6,13,1,'2019-06-25 11:01:47','0000-00-00 00:00:00',1);

/*Table structure for table `specialty` */

DROP TABLE IF EXISTS `specialty`;

CREATE TABLE `specialty` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `specialty` */

insert  into `specialty`(`s_id`,`name`,`status`,`created_at`,`updated_at`,`created_by`) values (4,'Specialty one',0,'2019-05-22 12:12:12','2019-05-22 12:11:52',1),(5,'Specialty two',1,'2019-05-22 12:06:58','0000-00-00 00:00:00',1),(6,'Specialty three',1,'2019-05-22 12:12:15','2019-05-22 12:11:48',1);

/*Table structure for table `state` */

DROP TABLE IF EXISTS `state`;

CREATE TABLE `state` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(250) DEFAULT NULL,
  `s_code` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `state` */

insert  into `state`(`s_id`,`state`,`s_code`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'AP','36',1,'2019-06-13 12:35:43','0000-00-00 00:00:00',1),(2,'TS','45',1,'2019-06-13 12:35:46','0000-00-00 00:00:00',1);

/*Table structure for table `suppliers` */

DROP TABLE IF EXISTS `suppliers`;

CREATE TABLE `suppliers` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `pincode` varchar(250) DEFAULT NULL,
  `fax` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `apgst_no` varchar(250) DEFAULT NULL,
  `cst_no` varchar(250) DEFAULT NULL,
  `contact_per` varchar(250) DEFAULT NULL,
  `tin_no` varchar(250) DEFAULT NULL,
  `dl_no` varchar(250) DEFAULT NULL,
  `gst_in_no` varchar(250) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `state_code` varchar(250) DEFAULT NULL,
  `pan_no` varchar(250) DEFAULT NULL,
  `address` text,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `suppliers` */

insert  into `suppliers`(`sp_id`,`name`,`pincode`,`fax`,`mobile`,`email`,`apgst_no`,`cst_no`,`contact_per`,`tin_no`,`dl_no`,`gst_in_no`,`state`,`state_code`,`pan_no`,`address`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'Reddem','50072','xnvbnv','8500050944','vasudevareddy549@gmail.com','djzgdgnmdsfb','vhjv','8500050944','xcvbvcnxv','bjdsgffhvnm','bnmdgxnmdfbnm',2,'45','dfvndfcjbhcvmb67354','cnbnmbvncbnbvzxmnjkvdgjkgdjkfg',1,'2019-06-13 13:20:05','2019-06-13 13:20:05',1),(2,'Chinna','516172','dzbvnmdbxnm','8019345212','chinna@gmail.com','kfngdfb','bnm','nmb','nmbnmnm','nnmnv','nmbnmbnm',1,'36','djfhghjeghj','nvbndvdsdhf',1,'2019-06-13 14:52:25','2019-06-13 14:52:25',1);

/*Table structure for table `user_role_privileges` */

DROP TABLE IF EXISTS `user_role_privileges`;

CREATE TABLE `user_role_privileges` (
  `u_r_p_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `m_id` int(11) DEFAULT NULL,
  `r_n_id` int(11) DEFAULT NULL,
  `m_m_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`u_r_p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

/*Data for the table `user_role_privileges` */

insert  into `user_role_privileges`(`u_r_p_id`,`u_id`,`m_id`,`r_n_id`,`m_m_id`,`status`,`created_at`,`created_by`) values (4,10,1,1,1,1,'2019-05-21 17:42:36',1),(5,10,1,1,2,1,'2019-05-21 17:42:36',1),(6,10,1,1,3,1,'2019-05-21 17:42:36',1),(29,8,5,NULL,14,1,'2019-05-28 12:08:39',1),(30,8,5,NULL,15,1,'2019-05-28 12:08:39',1),(52,8,5,NULL,16,1,'2019-05-28 12:18:34',1),(53,8,5,NULL,17,1,'2019-05-28 12:18:34',1),(54,8,5,NULL,18,1,'2019-05-28 17:41:27',1),(55,18,10,3,35,1,'2019-06-17 14:09:43',1),(56,20,9,4,37,1,'2019-06-18 20:51:38',1),(57,20,9,4,38,1,'2019-06-18 20:51:38',1),(58,21,6,5,21,1,'2019-06-19 10:03:38',1),(59,21,6,5,22,1,'2019-06-19 10:03:38',1),(65,23,1,6,1,1,'2019-06-25 11:04:08',1),(67,23,1,6,13,1,'2019-06-25 11:04:08',1),(68,23,1,NULL,20,1,'2019-06-25 11:04:39',1);

/*Table structure for table `website_details` */

DROP TABLE IF EXISTS `website_details`;

CREATE TABLE `website_details` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `address` text,
  `logo` varchar(250) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `website_details` */

insert  into `website_details`(`w_id`,`name`,`email`,`mobile`,`address`,`logo`,`website`,`created_at`,`updated_at`) values (1,'Peoples for you','people@gmail.com','8500050944','Old Mumbai Hwy, Near Cyberabad Police Commissionerate, Jayabheri Pine Valley, HITEC City, Hyderabad, Telangana 500032','1558952768.png','http://people.com','2019-06-13 10:12:52','2019-06-13 10:12:52');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
