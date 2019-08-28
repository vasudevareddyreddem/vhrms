/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - ip
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ip` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ip`;

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

/*Table structure for table `doctors` */

DROP TABLE IF EXISTS `doctors`;

CREATE TABLE `doctors` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `speciality` int(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `c_fee` decimal(10,2) DEFAULT NULL,
  `free_days` varchar(250) DEFAULT NULL,
  `no_of_visits` varchar(250) DEFAULT NULL,
  `s_fee` decimal(10,2) DEFAULT NULL,
  `c_doctor` varchar(250) DEFAULT NULL,
  `ip_c_fee` decimal(10,2) DEFAULT NULL,
  `f_time` varchar(250) DEFAULT NULL,
  `t_time` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `doctors` */

insert  into `doctors`(`d_id`,`a_id`,`name`,`email`,`mobile`,`speciality`,`address`,`c_fee`,`free_days`,`no_of_visits`,`s_fee`,`c_doctor`,`ip_c_fee`,`f_time`,`t_time`,`profile_pic`,`status`,`created_at`,`updated_at`,`created_by`) values (1,17,'doctor one','doct@gmail.com','9879879871',5,'kadapa','120.00',NULL,NULL,NULL,NULL,NULL,'01:00 PM','03:00 PM','1560334551.jpg',1,'2019-06-12 15:45:50','2019-06-12 16:34:52',1),(2,22,'Dr Siva','sivam@gmail.com','8688683222',6,'kothapalli  village  kadapa  dist','500.00',NULL,NULL,NULL,NULL,NULL,'09:00 AM','06:00 PM','',1,'2019-06-19 10:10:00',NULL,1);

/*Table structure for table `generic` */

DROP TABLE IF EXISTS `generic`;

CREATE TABLE `generic` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(250) DEFAULT NULL,
  `g_status` int(11) DEFAULT '1',
  `g_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `g_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `g_created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `generic` */

insert  into `generic`(`g_id`,`g_name`,`g_status`,`g_created_at`,`g_updated_at`,`g_created_by`) values (1,'Dffg',1,'2019-06-12 17:39:37','0000-00-00 00:00:00',1),(2,'Babu',1,'2019-06-12 18:17:00','2019-06-12 18:17:00',1),(3,'Uytuty',1,'2019-06-25 11:07:37','0000-00-00 00:00:00',1);

/*Table structure for table `hospital_details` */

DROP TABLE IF EXISTS `hospital_details`;

CREATE TABLE `hospital_details` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `address` text,
  `logo` varchar(250) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_details` */

insert  into `hospital_details`(`h_id`,`name`,`email`,`mobile`,`address`,`logo`,`website`,`created_at`,`updated_at`) values (1,'Peoples for you','people@gmail.com','8500050944','Old Mumbai Hwy, Near Cyberabad Police Commissionerate, Jayabheri Pine Valley, HITEC City, Hyderabad, Telangana 500032','1558952768.png','http://people.com','2019-06-13 10:12:52','2019-06-13 10:12:52');

/*Table structure for table `m_tax` */

DROP TABLE IF EXISTS `m_tax`;

CREATE TABLE `m_tax` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varbinary(250) DEFAULT NULL,
  `t_percent` varchar(250) DEFAULT NULL,
  `t_description` text,
  `t_status` int(11) DEFAULT '1',
  `t_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `t_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `t_created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `m_tax` */

insert  into `m_tax`(`t_id`,`t_name`,`t_percent`,`t_description`,`t_status`,`t_created_at`,`t_updated_at`,`t_created_by`) values (1,' Category Name','12','Description',1,'2019-06-13 12:24:43','2019-06-13 12:24:35',1),(2,'Fgfd','34','vcxcvb',1,'2019-06-13 12:12:43','0000-00-00 00:00:00',1),(3,'Mm','12','ghdghd',1,'2019-06-25 11:09:10','0000-00-00 00:00:00',1);

/*Table structure for table `manufacture` */

DROP TABLE IF EXISTS `manufacture`;

CREATE TABLE `manufacture` (
  `mf_id` int(11) NOT NULL AUTO_INCREMENT,
  `mf_name` varchar(250) DEFAULT NULL,
  `mf_code` varchar(250) DEFAULT NULL,
  `mf_description` text,
  `mf_status` int(11) DEFAULT '1',
  `mf_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mf_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mf_created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`mf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `manufacture` */

insert  into `manufacture`(`mf_id`,`mf_name`,`mf_code`,`mf_description`,`mf_status`,`mf_created_at`,`mf_updated_at`,`mf_created_by`) values (1,'M name','12ma','Testing',1,'2019-06-13 11:00:03','2019-06-13 10:59:52',1),(2,'M name','Code','Descroiption',1,'2019-06-13 10:56:25','2019-06-13 10:56:25',1),(3,'Vv','Vvv','Fdg',1,'2019-06-25 11:09:28','0000-00-00 00:00:00',1);

/*Table structure for table `medicine_type` */

DROP TABLE IF EXISTS `medicine_type`;

CREATE TABLE `medicine_type` (
  `m_t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(250) DEFAULT NULL,
  `description` text,
  `t_status` int(11) DEFAULT '1',
  `t_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `t_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `t_created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_type` */

insert  into `medicine_type`(`m_t_id`,`t_name`,`description`,`t_status`,`t_created_at`,`t_updated_at`,`t_created_by`) values (1,'Testing ','Hello hi ',1,'2019-06-12 18:50:27','2019-06-12 18:50:27',1),(2,'Hyd','Sddsfsd',1,'2019-06-12 18:50:09','2019-06-12 18:50:09',1);

/*Table structure for table `medicines` */

DROP TABLE IF EXISTS `medicines`;

CREATE TABLE `medicines` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `mrp` varchar(250) DEFAULT NULL,
  `rate` varchar(250) DEFAULT NULL,
  `exp_date` varchar(250) DEFAULT NULL,
  `batch_no` varchar(250) DEFAULT NULL,
  `pack_qty` varchar(250) DEFAULT NULL,
  `disease` varchar(250) DEFAULT NULL,
  `generic` varchar(250) DEFAULT NULL,
  `m_type` varchar(250) DEFAULT NULL,
  `schedule` varchar(250) DEFAULT NULL,
  `tax` varchar(250) DEFAULT NULL,
  `manufacturer` varchar(250) DEFAULT NULL,
  `code` varchar(250) DEFAULT NULL,
  `hsn_code` varchar(250) DEFAULT NULL,
  `dosage` varchar(250) DEFAULT NULL,
  `rol` varchar(250) DEFAULT NULL,
  `roq` varchar(250) DEFAULT NULL,
  `method` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`med_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `medicines` */

insert  into `medicines`(`med_id`,`name`,`qty`,`mrp`,`rate`,`exp_date`,`batch_no`,`pack_qty`,`disease`,`generic`,`m_type`,`schedule`,`tax`,`manufacturer`,`code`,`hsn_code`,`dosage`,`rol`,`roq`,`method`,`status`,`created_at`,`updated_at`,`created_by`,`updated_by`) values (1,'Name',55981,'54','','06/30/2019','5345345','54','Disease','1','2','Vzxcvcx','1','1','455345','Dfsdf','Dfsdfsdf','Dfasdf','Dfasdfasd','FIFO',1,'2019-06-13 15:40:19','2019-07-02 14:37:56',1,1),(2,'Med one',7113,'2','','06/29/2019','212345464','2','Tedt','2','2','Nkjgjg','1','2','02123d4fsd','Dsfsdf','Dsfasdf','Dfasdf','Dfasdfasd','',1,'2019-06-13 16:35:16','2019-07-02 14:38:01',1,NULL),(3,'Saradhi',111111,NULL,NULL,NULL,NULL,NULL,'Test one','2','1','Mnvbvbnv','2','1','7878','Bgfjdhjkh','Nmvnmv','N','Hgfhjgdh','FIFO',1,'2019-06-18 20:27:26',NULL,1,NULL),(4,'B',2320,NULL,NULL,NULL,NULL,NULL,'Bb','3','2','Bb','3','3','Bb','Bb','Bb','Bb','Bb','LIFO',1,'2019-06-25 11:09:58','2019-06-25 11:16:26',1,NULL);

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

/*Table structure for table `op_patients` */

DROP TABLE IF EXISTS `op_patients`;

CREATE TABLE `op_patients` (
  `o_p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `doct_id` int(11) DEFAULT NULL,
  `advice` text,
  `c_fee` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`o_p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `op_patients` */

insert  into `op_patients`(`o_p_id`,`p_id`,`doct_id`,`advice`,`c_fee`,`status`,`created_at`,`updated_at`,`created_by`) values (2,1,1,'dfdsfsdf','120.00',1,'2019-06-19 10:33:54','2019-06-14 18:55:49',1),(3,1,1,'some thing web ','120.00',1,'2019-06-19 10:33:56','2019-06-15 10:41:03',1),(4,2,1,'xcZXC','120.00',1,'2019-06-19 10:33:53',NULL,1),(5,4,1,'ndfnvsdfv','120.00',1,'2019-06-19 10:33:52','2019-06-15 12:00:58',1),(6,4,1,'testing ','120.00',1,'2019-06-19 10:33:50','2019-06-18 16:37:45',1),(7,4,1,'xcc','120.00',1,'2019-06-19 10:33:51','2019-06-18 16:41:01',1),(8,5,1,'tesimg','120.00',1,'2019-06-19 10:33:49','2019-06-18 20:22:41',1),(9,7,1,'dfgfg','120.00',1,'2019-06-25 11:13:00',NULL,1),(10,7,1,'dfdf','120.00',1,'2019-06-25 11:14:50','2019-06-25 11:14:50',1),(11,7,1,'dgsdf','120.00',1,'2019-06-25 11:16:26',NULL,1),(12,7,2,'testin gmnfdjh','500.00',1,'2019-06-27 14:34:18','2019-06-27 14:34:18',1),(13,18,2,'fdg','500.00',1,'2019-07-02 14:36:50',NULL,1),(14,7,1,'fdsf','120.00',1,'2019-07-02 14:38:01','2019-07-02 14:38:01',1),(15,7,1,'','120.00',1,'2019-07-02 20:35:51',NULL,1),(16,8,1,'','120.00',1,'2019-07-02 20:37:58',NULL,1);

/*Table structure for table `patient_medicines` */

DROP TABLE IF EXISTS `patient_medicines`;

CREATE TABLE `patient_medicines` (
  `p_m_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_p_id` int(11) DEFAULT NULL,
  `med_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `patient_medicines` */

insert  into `patient_medicines`(`p_m_id`,`o_p_id`,`med_id`,`qty`,`created_at`,`created_by`) values (2,2,2,45,'2019-06-14 18:32:02',1),(4,2,1,25,'2019-06-14 18:55:49',1),(5,3,1,25,'2019-06-15 10:36:29',1),(6,3,2,454,'2019-06-15 10:36:39',1),(7,4,1,3,'2019-06-15 11:34:39',1),(8,5,1,10,'2019-06-15 12:00:52',1),(9,5,2,44,'2019-06-15 12:00:58',1),(10,6,1,2,'2019-06-18 16:37:38',1),(11,6,2,2,'2019-06-18 16:37:45',1),(12,7,1,11,'2019-06-18 16:40:56',1),(13,7,2,33,'2019-06-18 16:41:01',1),(14,8,2,11,'2019-06-18 20:22:33',1),(15,8,1,10,'2019-06-18 20:22:41',1),(16,9,4,22,'2019-06-25 11:13:00',1),(17,10,1,12,'2019-06-25 11:14:43',1),(18,10,2,1,'2019-06-25 11:14:50',1),(19,11,4,3,'2019-06-25 11:16:26',1),(20,12,1,2,'2019-06-27 14:34:12',1),(21,12,2,5,'2019-06-27 14:34:18',1),(22,13,1,12,'2019-07-02 14:36:50',1),(23,14,1,1,'2019-07-02 14:37:56',1),(24,14,2,2,'2019-07-02 14:38:01',1);

/*Table structure for table `patients` */

DROP TABLE IF EXISTS `patients`;

CREATE TABLE `patients` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `address` text,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `patients` */

insert  into `patients`(`p_id`,`name`,`mobile`,`age`,`gender`,`address`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'Vasu','8500050944','26','Male','testing ',1,'2019-06-13 17:31:33',NULL,1),(2,'Praveen','7946456666','28','Male','hyd',1,'2019-06-13 17:31:58',NULL,1),(3,'Satish ','8527410852','29','Male','hyderabad',1,'2019-06-14 16:01:56',NULL,1),(4,'Sajeeth','8528525555','27','Male','kadap',1,'2019-06-15 12:00:02',NULL,1),(5,'Saradhi','8528528520','30','Male','ongoal',1,'2019-06-18 20:21:34',NULL,1),(6,'Anupama','7912345322','26','Female','hyderabad',1,'2019-06-20 10:10:32',NULL,1),(7,'Test','7417417412','25','Male','xvcvzxc',1,'2019-06-25 11:06:04',NULL,1),(8,'Vijay','8985543588','27','Male','kadapa',1,'2019-07-02 20:37:45',NULL,1);

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier` int(11) DEFAULT NULL,
  `t_amt` varchar(250) DEFAULT NULL,
  `p_amt` varchar(250) DEFAULT NULL,
  `d_amt` varchar(250) DEFAULT NULL,
  `c_amt` varchar(250) DEFAULT NULL,
  `c_d_amt` varchar(250) DEFAULT NULL,
  `p_mode` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `payments` */

insert  into `payments`(`pay_id`,`supplier`,`t_amt`,`p_amt`,`d_amt`,`c_amt`,`c_d_amt`,`p_mode`,`date`,`created_at`,`created_by`) values (1,2,'54654','0','54654','50000','4654','cash','2019-06-17','2019-06-17 13:16:29',1),(2,2,'54654','50000','4654','12','4642','cash','2019-06-16','2019-06-17 18:24:31',1),(3,1,'547001091','','547001091','50000','546951091','cash','2019-06-17','2019-06-17 18:26:22',1),(4,1,'547001091','50000','546951091','100000','546851091','cash','2019-06-17','2019-06-17 18:26:47',1),(5,2,'25057212','50012','25007200','10000','24997200','cash','2019-06-18','2019-06-18 20:32:28',1),(6,2,'25057212','60012','24997200','24997200','0','cash','2019-06-18','2019-06-18 20:38:05',1),(7,1,'547001091','150000','546851091','10000','546841091','cash','2019-06-25','2019-06-25 11:17:57',1);

/*Table structure for table `procedure` */

DROP TABLE IF EXISTS `procedure`;

CREATE TABLE `procedure` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `p_t_id` int(11) DEFAULT NULL,
  `code` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `charge` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `procedure` */

insert  into `procedure`(`p_id`,`name`,`p_t_id`,`code`,`description`,`charge`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'Procedure one',1,'12245','testing','123654',1,'2019-05-23 14:03:07','2019-05-23 14:03:07',1),(2,'Procedure Name',2,'4567','testing  purpose','9874',1,'2019-05-22 18:19:19','2019-05-22 18:19:19',1);

/*Table structure for table `procedure_type` */

DROP TABLE IF EXISTS `procedure_type`;

CREATE TABLE `procedure_type` (
  `p_t_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `p_type_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `procedure_type` */

insert  into `procedure_type`(`p_t_id`,`p_type_name`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'p type one ',1,'2019-05-22 17:33:40','2019-05-22 17:33:01',1),(2,'p type two',1,'2019-05-22 17:30:10','2019-05-22 17:30:10',1);

/*Table structure for table `purchase` */

DROP TABLE IF EXISTS `purchase`;

CREATE TABLE `purchase` (
  `m_p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_s_id` int(11) DEFAULT NULL,
  `medicine` varchar(250) DEFAULT NULL,
  `qty` varchar(250) DEFAULT NULL,
  `pack_qty` varchar(250) DEFAULT NULL,
  `pack_rate` varchar(250) DEFAULT NULL,
  `mrp` varchar(250) DEFAULT NULL,
  `freepack` varchar(250) DEFAULT NULL,
  `batch_no` varchar(250) DEFAULT NULL,
  `tax` varchar(250) DEFAULT NULL,
  `exp_date` varchar(250) DEFAULT NULL,
  `disc` varchar(250) DEFAULT NULL,
  `rate` varchar(250) DEFAULT NULL,
  `total_amt` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `purchase` */

insert  into `purchase`(`m_p_id`,`p_s_id`,`medicine`,`qty`,`pack_qty`,`pack_rate`,`mrp`,`freepack`,`batch_no`,`tax`,`exp_date`,`disc`,`rate`,`total_amt`,`date`,`created_at`,`created_by`) values (1,1,'1','454','54','545','54','5455','5345345','5','06/30/2019','454','','454545','2019-06-17','2019-06-17 12:52:21',1),(2,1,'2','3435','4356','5656','45654','5654','56456546','5','07/25/2019','fgfd','','546546546','2019-06-17','2019-06-17 12:52:22',1),(3,2,'2','3435','5446546','56456','546','5654','54654','5654','06/29/2019','5654','','54654','2019-06-17','2019-06-17 12:52:24',2),(4,3,'2','12','2','50','2','22','212345464','2','06/29/2019','10','','25002558','2019-06-18','2019-06-18 20:31:38',2);

/*Table structure for table `purchase_supperliers` */

DROP TABLE IF EXISTS `purchase_supperliers`;

CREATE TABLE `purchase_supperliers` (
  `p_s_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(250) DEFAULT NULL,
  `voucher_no` varchar(250) DEFAULT NULL,
  `supplier` varchar(250) DEFAULT NULL,
  `purchase_type` varchar(250) DEFAULT NULL,
  `inv_no` varchar(250) DEFAULT NULL,
  `dl_no` varchar(250) DEFAULT NULL,
  `pan_no` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `state_code` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `purchase_supperliers` */

insert  into `purchase_supperliers`(`p_s_id`,`date`,`voucher_no`,`supplier`,`purchase_type`,`inv_no`,`dl_no`,`pan_no`,`mobile`,`state_code`,`address`,`created_at`,`updated_at`,`created_by`) values (1,'06/17/2019','dfsd453565','1','Direct','454','bjdsgffhvnm','dfvndfcjbhcvmb67354','8500050944','45','cnbnmbvncbnbvzxmnjkvdgjkgdjkfg','2019-06-17 12:37:02',NULL,1),(2,'06/18/2019','fasdf','2','PurchOrder','rtr','nnmnv','djfhghjeghj','8019345212','36','nvbndvdsdhf','2019-06-17 12:38:25',NULL,1),(3,'06/18/2019','dffnjsdh','2','Direct','cvb,mdsfkjgds','nnmnv','djfhghjeghj','8019345212','36','nvbndvdsdhf','2019-06-18 20:31:38',NULL,1);

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

/*Table structure for table `sales_patient` */

DROP TABLE IF EXISTS `sales_patient`;

CREATE TABLE `sales_patient` (
  `s_p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_type` varchar(250) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `p_name` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `doct_id` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `sales_patient` */

insert  into `sales_patient`(`s_p_id`,`p_type`,`p_id`,`p_name`,`mobile`,`age`,`gender`,`doct_id`,`address`,`created_at`,`updated_at`,`created_by`) values (1,'Others',0,'Geetha','9494346081','21','Female','','proddatur','2019-06-15 15:17:51','2019-06-15 15:17:51',1),(2,'Others',0,'Dfsdfds','445435345435','43','Female','','gsfdg','2019-06-15 15:22:00','0000-00-00 00:00:00',1),(3,'Op',4,'Sajeeth','8528525555','27','Male','','kadap','2019-06-15 15:26:18','0000-00-00 00:00:00',1),(4,'Op',4,'Sajeeth','8528525555','27','Male','','kadap','2019-06-15 15:31:11','2019-06-15 15:31:11',1),(5,'Op',4,'Sajeeth','8528525555','27','Male','Doctor one','kadap','2019-06-15 15:31:45','0000-00-00 00:00:00',1),(6,'Op',4,'Sajeeth','8528525555','27','Male','Doctor one','kadap','2019-06-18 18:27:56','2019-06-18 18:27:56',1),(7,'Others',0,'Saradhi','154567324234','36','Male','','testing  dhfjkshdjk','2019-06-18 20:41:41','2019-06-18 20:41:41',1);

/*Table structure for table `sales_patient_medicines` */

DROP TABLE IF EXISTS `sales_patient_medicines`;

CREATE TABLE `sales_patient_medicines` (
  `s_p_m_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_p_id` int(11) DEFAULT NULL,
  `med_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_p_m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `sales_patient_medicines` */

insert  into `sales_patient_medicines`(`s_p_m_id`,`s_p_id`,`med_id`,`qty`,`created_at`,`created_by`) values (4,1,1,1,'2019-06-15 14:03:23',1),(5,1,2,2,'2019-06-15 14:04:14',1),(6,2,1,1,'2019-06-15 15:22:00',1),(7,3,1,1,'2019-06-15 15:26:18',1),(8,4,2,1,'2019-06-15 15:29:16',1),(9,4,1,2,'2019-06-15 15:31:11',1),(10,5,1,1,'2019-06-15 15:31:45',1),(11,6,1,12,'2019-06-18 18:27:48',1),(12,6,2,22,'2019-06-18 18:27:56',1),(13,7,2,10,'2019-06-18 20:41:33',1),(14,7,1,10,'2019-06-18 20:41:41',1);

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

/*Table structure for table `temp_purchase` */

DROP TABLE IF EXISTS `temp_purchase`;

CREATE TABLE `temp_purchase` (
  `t_p_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_p_s_id` int(11) DEFAULT NULL,
  `medicine` varchar(250) DEFAULT NULL,
  `qty` varchar(250) DEFAULT NULL,
  `pack_qty` varchar(250) DEFAULT NULL,
  `pack_rate` varchar(250) DEFAULT NULL,
  `mrp` varchar(250) DEFAULT NULL,
  `freepack` varchar(250) DEFAULT NULL,
  `batch_no` varchar(250) DEFAULT NULL,
  `tax` varchar(250) DEFAULT NULL,
  `exp_date` varchar(250) DEFAULT NULL,
  `disc` varchar(250) DEFAULT NULL,
  `rate` varchar(250) DEFAULT NULL,
  `total_amt` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `temp_purchase` */

insert  into `temp_purchase`(`t_p_id`,`t_p_s_id`,`medicine`,`qty`,`pack_qty`,`pack_rate`,`mrp`,`freepack`,`batch_no`,`tax`,`exp_date`,`disc`,`rate`,`total_amt`,`created_at`,`created_by`) values (1,1,'4','22','22','22','2','22','22','22','06/29/2019','dd','ewrew','5885','2019-06-25 11:16:08',1);

/*Table structure for table `temp_purchase_supperliers` */

DROP TABLE IF EXISTS `temp_purchase_supperliers`;

CREATE TABLE `temp_purchase_supperliers` (
  `t_p_s_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(250) DEFAULT NULL,
  `voucher_no` varchar(250) DEFAULT NULL,
  `supplier` varchar(250) DEFAULT NULL,
  `purchase_type` varchar(250) DEFAULT NULL,
  `inv_no` varchar(250) DEFAULT NULL,
  `dl_no` varchar(250) DEFAULT NULL,
  `pan_no` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `state_code` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_p_s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `temp_purchase_supperliers` */

insert  into `temp_purchase_supperliers`(`t_p_s_id`,`date`,`voucher_no`,`supplier`,`purchase_type`,`inv_no`,`dl_no`,`pan_no`,`mobile`,`state_code`,`address`,`created_at`,`updated_at`,`created_by`) values (1,'','','1','Direct','','bjdsgffhvnm','dfvndfcjbhcvmb67354','8500050944','45','cnbnmbvncbnbvzxmnjkvdgjkgdjkfg','2019-06-25 11:16:08',NULL,1);

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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
