CREATE DATABASE  IF NOT EXISTS `homer` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `homer`;
-- MySQL dump 10.13  Distrib 5.5.28, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: homer
-- ------------------------------------------------------
-- Server version	5.5.28-0ubuntu0.12.04.3

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
-- Table structure for table `customer_info`
--

DROP TABLE IF EXISTS `customer_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_info` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `street_address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `state_address` varchar(10) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `fk_custinfo_country` (`country_id`),
  CONSTRAINT `fk_custinfo_country` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_info`
--

LOCK TABLES `customer_info` WRITE;
/*!40000 ALTER TABLE `customer_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `base_service_info`
--

DROP TABLE IF EXISTS `base_service_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `base_service_info` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(255) NOT NULL,
  `charges_amount` decimal(50,2) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`),
  UNIQUE KEY `service_name` (`service_name`),
  KEY `fk_baseserv_curr` (`currency_id`),
  KEY `fk_serv_dept` (`dept_id`),
  CONSTRAINT `fk_baseserv_curr` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`curr_id`),
  CONSTRAINT `fk_serv_dept` FOREIGN KEY (`dept_id`) REFERENCES `infra_dept_info` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `base_service_info`
--

LOCK TABLES `base_service_info` WRITE;
/*!40000 ALTER TABLE `base_service_info` DISABLE KEYS */;
INSERT INTO `base_service_info` (`service_id`, `service_name`, `charges_amount`, `currency_id`, `dept_id`) VALUES (1,'Healthy food',500.00,4,1);
/*!40000 ALTER TABLE `base_service_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infra_dept_info`
--

DROP TABLE IF EXISTS `infra_dept_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infra_dept_info` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(255) NOT NULL,
  PRIMARY KEY (`dept_id`),
  UNIQUE KEY `dept_name` (`dept_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infra_dept_info`
--

LOCK TABLES `infra_dept_info` WRITE;
/*!40000 ALTER TABLE `infra_dept_info` DISABLE KEYS */;
INSERT INTO `infra_dept_info` (`dept_id`, `dept_name`) VALUES (1,'Food and Beverage');
/*!40000 ALTER TABLE `infra_dept_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resto_billing_order`
--

DROP TABLE IF EXISTS `resto_billing_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resto_billing_order` (
  `resto_billing_id` int(11) NOT NULL AUTO_INCREMENT,
  `table_id` int(11) NOT NULL,
  `billing_date` date NOT NULL,
  `room_id` int(11) NOT NULL,
  `menu_card_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `transf_to_room` varchar(1) NOT NULL COMMENT 'Y means transfer order to room, N means don''t',
  `tax_scheme_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`resto_billing_id`),
  KEY `fk_restobill_roominfo` (`room_id`),
  KEY `fk_restobill_restotable` (`table_id`),
  KEY `fk_restobill_cardmenuinfo` (`menu_card_id`),
  KEY `fk_restobill_taxschemeinfo` (`tax_scheme_id`),
  KEY `fk_restobill_custinfo` (`customer_id`),
  CONSTRAINT `fk_restobill_roominfo` FOREIGN KEY (`room_id`) REFERENCES `infra_room_info` (`room_id`),
  CONSTRAINT `fk_restobill_cardmenuinfo` FOREIGN KEY (`menu_card_id`) REFERENCES `menu_card_info` (`menu_card_id`),
  CONSTRAINT `fk_restobill_custinfo` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`),
  CONSTRAINT `fk_restobill_restotable` FOREIGN KEY (`table_id`) REFERENCES `infra_resto_table_info` (`table_id`),
  CONSTRAINT `fk_restobill_taxschemeinfo` FOREIGN KEY (`tax_scheme_id`) REFERENCES `fin_tax_scheme_info` (`tax_scheme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resto_billing_order`
--

LOCK TABLES `resto_billing_order` WRITE;
/*!40000 ALTER TABLE `resto_billing_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `resto_billing_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_category_info`
--

DROP TABLE IF EXISTS `menu_category_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_category_info` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `taxable` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'Y means yes, N means no',
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_category_info`
--

LOCK TABLES `menu_category_info` WRITE;
/*!40000 ALTER TABLE `menu_category_info` DISABLE KEYS */;
INSERT INTO `menu_category_info` (`category_id`, `category`, `taxable`) VALUES (1,'italian food','Y');
/*!40000 ALTER TABLE `menu_category_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currency` (
  `curr_id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_code` varchar(3) NOT NULL,
  `numeric_code` varchar(100) DEFAULT NULL,
  `currency_name` varchar(255) NOT NULL,
  `currency_symbol` varchar(3) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`curr_id`),
  UNIQUE KEY `currency_code` (`currency_code`),
  KEY `fk_currency_country` (`country_id`),
  CONSTRAINT `fk_currency_country` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currency`
--

LOCK TABLES `currency` WRITE;
/*!40000 ALTER TABLE `currency` DISABLE KEYS */;
INSERT INTO `currency` (`curr_id`, `currency_code`, `numeric_code`, `currency_name`, `currency_symbol`, `country_id`) VALUES (4,'USD',NULL,'US Dollar','$',1);
/*!40000 ALTER TABLE `currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `po_order_payable`
--

DROP TABLE IF EXISTS `po_order_payable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `po_order_payable` (
  `po_id` int(11) NOT NULL,
  `po_payable_id` int(11) NOT NULL,
  PRIMARY KEY (`po_id`,`po_payable_id`),
  KEY `fk_orderpayable_poinfo` (`po_id`),
  KEY `fk_orderpayable_popayable` (`po_payable_id`),
  CONSTRAINT `fk_orderpayable_poinfo` FOREIGN KEY (`po_id`) REFERENCES `inv_po_info` (`po_id`),
  CONSTRAINT `fk_orderpayable_popayable` FOREIGN KEY (`po_payable_id`) REFERENCES `inv_po_payable` (`po_payable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `po_order_payable`
--

LOCK TABLES `po_order_payable` WRITE;
/*!40000 ALTER TABLE `po_order_payable` DISABLE KEYS */;
/*!40000 ALTER TABLE `po_order_payable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bar_billing_order`
--

DROP TABLE IF EXISTS `bar_billing_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bar_billing_order` (
  `bar_billing_id` int(11) NOT NULL AUTO_INCREMENT,
  `table_id` int(11) NOT NULL,
  `billing_date` date NOT NULL,
  `room_id` int(11) NOT NULL,
  `menu_card_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tax_scheme_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`bar_billing_id`),
  KEY `fk_barbill_roominfo` (`room_id`),
  KEY `fk_barbill_restotable` (`table_id`),
  KEY `fk_barbill_cardmenuinfo` (`menu_card_id`),
  KEY `fk_barbill_taxschemeinfo` (`tax_scheme_id`),
  KEY `fk_barbill_custinfo` (`customer_id`),
  CONSTRAINT `fk_barbill_cardmenuinfo` FOREIGN KEY (`menu_card_id`) REFERENCES `menu_card_info` (`menu_card_id`),
  CONSTRAINT `fk_barbill_custinfo` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`),
  CONSTRAINT `fk_barbill_restotable` FOREIGN KEY (`table_id`) REFERENCES `infra_resto_table_info` (`table_id`),
  CONSTRAINT `fk_barbill_taxschemeinfo` FOREIGN KEY (`tax_scheme_id`) REFERENCES `fin_tax_scheme_info` (`tax_scheme_id`),
  CONSTRAINT `fk_barbill_roominfo` FOREIGN KEY (`room_id`) REFERENCES `infra_room_info` (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bar_billing_order`
--

LOCK TABLES `bar_billing_order` WRITE;
/*!40000 ALTER TABLE `bar_billing_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `bar_billing_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_metric_unit_info`
--

DROP TABLE IF EXISTS `inv_metric_unit_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_metric_unit_info` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_code` varchar(5) NOT NULL,
  `unit_label` varchar(20) NOT NULL,
  PRIMARY KEY (`unit_id`),
  UNIQUE KEY `unit_code` (`unit_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_metric_unit_info`
--

LOCK TABLES `inv_metric_unit_info` WRITE;
/*!40000 ALTER TABLE `inv_metric_unit_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_metric_unit_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fin_payment_mode_info`
--

DROP TABLE IF EXISTS `fin_payment_mode_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fin_payment_mode_info` (
  `payment_mode_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_mode_code` varchar(5) NOT NULL,
  `payment_mode_name` varchar(20) NOT NULL,
  PRIMARY KEY (`payment_mode_id`),
  UNIQUE KEY `payment_mode_code` (`payment_mode_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fin_payment_mode_info`
--

LOCK TABLES `fin_payment_mode_info` WRITE;
/*!40000 ALTER TABLE `fin_payment_mode_info` DISABLE KEYS */;
INSERT INTO `fin_payment_mode_info` (`payment_mode_id`, `payment_mode_code`, `payment_mode_name`) VALUES (1,'CC','Credit Card');
/*!40000 ALTER TABLE `fin_payment_mode_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_check_out`
--

DROP TABLE IF EXISTS `res_check_out`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_check_out` (
  `check_out_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount_due` decimal(50,2) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`check_out_id`),
  KEY `fk_checkout_reservinfo` (`res_id`),
  CONSTRAINT `fk_checkout_reservinfo` FOREIGN KEY (`res_id`) REFERENCES `res_room` (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_check_out`
--

LOCK TABLES `res_check_out` WRITE;
/*!40000 ALTER TABLE `res_check_out` DISABLE KEYS */;
/*!40000 ALTER TABLE `res_check_out` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infra_room_type_info`
--

DROP TABLE IF EXISTS `infra_room_type_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infra_room_type_info` (
  `room_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(50) NOT NULL,
  `bed_size` varchar(50) NOT NULL,
  `charge_amount` decimal(50,2) NOT NULL,
  `handicap_support` varchar(1) DEFAULT 'N' COMMENT 'has support for handicapped people,  ''Y'' for yes or ''N'' for no',
  `remarks` text,
  `currency_id` int(11) NOT NULL,
  PRIMARY KEY (`room_type_id`),
  UNIQUE KEY `room_type` (`room_type`),
  KEY `fk_roomtype_curr` (`currency_id`),
  CONSTRAINT `fk_roomtype_curr` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`curr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infra_room_type_info`
--

LOCK TABLES `infra_room_type_info` WRITE;
/*!40000 ALTER TABLE `infra_room_type_info` DISABLE KEYS */;
INSERT INTO `infra_room_type_info` (`room_type_id`, `room_type`, `bed_size`, `charge_amount`, `handicap_support`, `remarks`, `currency_id`) VALUES (1,'Standard','Standard',5000.00,'Y',NULL,4);
/*!40000 ALTER TABLE `infra_room_type_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_keeping`
--

DROP TABLE IF EXISTS `house_keeping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE  TABLE IF NOT EXISTS `homer`.`house_keeping` (
  `entry_id` INT(11) NOT NULL AUTO_INCREMENT ,
  `room_id` INT(11) NOT NULL ,
  `person_name` VARCHAR(45) NOT NULL ,
  `type_of_work` TEXT NULL DEFAULT NULL ,
  `assign_date` DATE NOT NULL ,
  `assign_time` VARCHAR(5) NOT NULL COMMENT 'format : HH:mm' ,
  `expected_completion_date` DATE NOT NULL ,
  `expected_completion_time` VARCHAR(5) NOT NULL COMMENT 'format : HH:mm' ,
  `status` VARCHAR(2) NOT NULL COMMENT 'status : CO = complete, IP = in progress, PN = pending' ,
  `dept_id` INT NOT NULL ,
  PRIMARY KEY (`entry_id`) ,
  INDEX `fk_house_keeping_room_info` (`room_id` ASC) ,
  INDEX `fk_house_keeping_infra_dept_info` (`dept_id` ASC) ,
  CONSTRAINT `fk_house_keeping_room_info`
    FOREIGN KEY (`room_id` )
    REFERENCES `homer`.`infra_room_info` (`room_id` ),
  CONSTRAINT `fk_house_keeping_infra_dept_info`
    FOREIGN KEY (`dept_id` )
    REFERENCES `homer`.`infra_dept_info` (`dept_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_keeping`
--

LOCK TABLES `house_keeping` WRITE;
/*!40000 ALTER TABLE `house_keeping` DISABLE KEYS */;
INSERT INTO `house_keeping` (`entry_id`, `room_id`, `type_of_work`, `assign_date`, `assign_time`, `expected_completion_date`, `expected_completion_time`, `status`) VALUES (1,1,'test','2012-07-05','10:20','2012-07-26','20:12','PN');
/*!40000 ALTER TABLE `house_keeping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_inward_goods_payable`
--

DROP TABLE IF EXISTS `inv_inward_goods_payable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_inward_goods_payable` (
  `in_payable_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_amount` decimal(50,2) NOT NULL COMMENT 'as percentage',
  `discount` decimal(50,2) NOT NULL,
  `total_amount` decimal(50,2) NOT NULL,
  `net_total_amount` decimal(50,2) NOT NULL,
  PRIMARY KEY (`in_payable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_inward_goods_payable`
--

LOCK TABLES `inv_inward_goods_payable` WRITE;
/*!40000 ALTER TABLE `inv_inward_goods_payable` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_inward_goods_payable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_service_provided`
--

DROP TABLE IF EXISTS `room_service_provided`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_service_provided` (
  `room_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `service_date` date NOT NULL,
  `service_time` varchar(5) NOT NULL COMMENT 'Format HH:mm',
  `dept_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `service_desc` text,
  `other_service` text,
  `charges_amount` decimal(50,2) NOT NULL,
  `expected_completion_date` date NOT NULL,
  `expected_completion_time` varchar(5) NOT NULL COMMENT 'Format HH:mm',
  `status` varchar(2) NOT NULL COMMENT 'status : CO = complete, IP = in progress, PN = pending',
  PRIMARY KEY (`room_service_id`),
  KEY `fk_servprov_dept` (`dept_id`),
  KEY `fk_servprov_roominfo` (`room_id`),
  KEY `fk_roomservprov_servinfo` (`service_id`),
  KEY `fk_roomserv_custinfo` (`customer_id`),
  CONSTRAINT `fk_roomservprov_servinfo` FOREIGN KEY (`service_id`) REFERENCES `base_service_info` (`service_id`),
  CONSTRAINT `fk_roomserv_custinfo` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`),
  CONSTRAINT `fk_servprov_dept` FOREIGN KEY (`dept_id`) REFERENCES `infra_dept_info` (`dept_id`),
  CONSTRAINT `fk_servprov_roominfo` FOREIGN KEY (`room_id`) REFERENCES `infra_room_info` (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_service_provided`
--

LOCK TABLES `room_service_provided` WRITE;
/*!40000 ALTER TABLE `room_service_provided` DISABLE KEYS */;
/*!40000 ALTER TABLE `room_service_provided` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_goods_issue_order`
--

DROP TABLE IF EXISTS `inv_goods_issue_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_goods_issue_order` (
  `issue_id` int(11) NOT NULL AUTO_INCREMENT,
  `issue_date` date NOT NULL,
  `request_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` decimal(50,0) NOT NULL,
  PRIMARY KEY (`issue_id`),
  KEY `fk_goodsissue_goodsreq` (`request_id`),
  CONSTRAINT `fk_goodsissue_goodsreq` FOREIGN KEY (`request_id`) REFERENCES `inv_goods_request` (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_goods_issue_order`
--

LOCK TABLES `inv_goods_issue_order` WRITE;
/*!40000 ALTER TABLE `inv_goods_issue_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_goods_issue_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_item_type_info`
--

DROP TABLE IF EXISTS `inv_item_type_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_item_type_info` (
  `item_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_type_name` varchar(20) NOT NULL,
  `ingredient` varchar(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`item_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_item_type_info`
--

LOCK TABLES `inv_item_type_info` WRITE;
/*!40000 ALTER TABLE `inv_item_type_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_item_type_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fin_tax_scheme_info`
--

DROP TABLE IF EXISTS `fin_tax_scheme_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fin_tax_scheme_info` (
  `tax_scheme_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_scheme_name` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  PRIMARY KEY (`tax_scheme_id`),
  UNIQUE KEY `tax_scheme_name` (`tax_scheme_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fin_tax_scheme_info`
--

LOCK TABLES `fin_tax_scheme_info` WRITE;
/*!40000 ALTER TABLE `fin_tax_scheme_info` DISABLE KEYS */;
INSERT INTO `fin_tax_scheme_info` (`tax_scheme_id`, `tax_scheme_name`, `from_date`) VALUES (1,'Tax Scheme July','2012-07-24');
/*!40000 ALTER TABLE `fin_tax_scheme_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infra_resto_table_info`
--

DROP TABLE IF EXISTS `infra_resto_table_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infra_resto_table_info` (
  `table_id` int(11) NOT NULL AUTO_INCREMENT,
  `table_number` varchar(100) NOT NULL,
  `nbr_of_chair` int(11) NOT NULL,
  `table_type_id` int(11) NOT NULL,
  PRIMARY KEY (`table_id`),
  UNIQUE KEY `table_number` (`table_number`),
  KEY `fk_restotable_typeinfo` (`table_type_id`),
  CONSTRAINT `fk_restotable_typeinfo` FOREIGN KEY (`table_type_id`) REFERENCES `infra_resto_table_type_info` (`table_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infra_resto_table_info`
--

LOCK TABLES `infra_resto_table_info` WRITE;
/*!40000 ALTER TABLE `infra_resto_table_info` DISABLE KEYS */;
INSERT INTO `infra_resto_table_info` (`table_id`, `table_number`, `nbr_of_chair`, `table_type_id`) VALUES (1,'103',4,1);
/*!40000 ALTER TABLE `infra_resto_table_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_room_info`
--

DROP TABLE IF EXISTS `res_room_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_room_info` (
  `res_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`res_id`,`room_id`),
  KEY `fk_roominfo_infra` (`room_id`),
  KEY `fk_roominfo_reservinfo` (`res_id`),
  CONSTRAINT `fk_roominfo_infra` FOREIGN KEY (`room_id`) REFERENCES `infra_room_info` (`room_id`),
  CONSTRAINT `fk_roominfo_reservinfo` FOREIGN KEY (`res_id`) REFERENCES `res_room` (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_room_info`
--

LOCK TABLES `res_room_info` WRITE;
/*!40000 ALTER TABLE `res_room_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `res_room_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fin_scheme_tax_info`
--

DROP TABLE IF EXISTS `fin_scheme_tax_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fin_scheme_tax_info` (
  `tax_id` int(11) NOT NULL,
  `tax_scheme_id` int(11) NOT NULL,
  PRIMARY KEY (`tax_id`,`tax_scheme_id`),
  KEY `fk_taxschemeinfo_taxinfo` (`tax_id`),
  KEY `fk_scheme_taxinfo` (`tax_scheme_id`),
  CONSTRAINT `fk_scheme_taxinfo` FOREIGN KEY (`tax_scheme_id`) REFERENCES `fin_tax_scheme_info` (`tax_scheme_id`),
  CONSTRAINT `fk_taxschemeinfo_taxinfo` FOREIGN KEY (`tax_id`) REFERENCES `fin_tax_info` (`tax_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fin_scheme_tax_info`
--

LOCK TABLES `fin_scheme_tax_info` WRITE;
/*!40000 ALTER TABLE `fin_scheme_tax_info` DISABLE KEYS */;
INSERT INTO `fin_scheme_tax_info` (`tax_id`, `tax_scheme_id`) VALUES (1,1);
/*!40000 ALTER TABLE `fin_scheme_tax_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fin_tax_info`
--

DROP TABLE IF EXISTS `fin_tax_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fin_tax_info` (
  `tax_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_name` varchar(50) NOT NULL,
  `charge_amount` decimal(50,2) NOT NULL,
  `is_live` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'Y means yes, N means no',
  PRIMARY KEY (`tax_id`),
  UNIQUE KEY `tax_name` (`tax_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fin_tax_info`
--

LOCK TABLES `fin_tax_info` WRITE;
/*!40000 ALTER TABLE `fin_tax_info` DISABLE KEYS */;
INSERT INTO `fin_tax_info` (`tax_id`, `tax_name`, `charge_amount`, `is_live`) VALUES (1,'Tax July',5000.00,'Y');
/*!40000 ALTER TABLE `fin_tax_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `base_facility_info`
--

DROP TABLE IF EXISTS `base_facility_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `base_facility_info` (
  `facility_id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_name` varchar(255) NOT NULL,
  `charge_amount` decimal(50,2) NOT NULL,
  `currency_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`facility_id`),
  UNIQUE KEY `facility_name` (`facility_name`),
  KEY `fk_basefclt_curr` (`currency_id`),
  CONSTRAINT `fk_basefclt_curr` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`curr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `base_facility_info`
--

LOCK TABLES `base_facility_info` WRITE;
/*!40000 ALTER TABLE `base_facility_info` DISABLE KEYS */;
INSERT INTO `base_facility_info` (`facility_id`, `facility_name`, `charge_amount`, `currency_id`) VALUES (2,'Swimming Pool',5000.00,4);
/*!40000 ALTER TABLE `base_facility_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infra_floor_info`
--

DROP TABLE IF EXISTS `infra_floor_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infra_floor_info` (
  `floor_id` int(11) NOT NULL AUTO_INCREMENT,
  `floor_name` varchar(255) NOT NULL,
  PRIMARY KEY (`floor_id`),
  UNIQUE KEY `floor_name` (`floor_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infra_floor_info`
--

LOCK TABLES `infra_floor_info` WRITE;
/*!40000 ALTER TABLE `infra_floor_info` DISABLE KEYS */;
INSERT INTO `infra_floor_info` (`floor_id`, `floor_name`) VALUES (1,'First floor');
/*!40000 ALTER TABLE `infra_floor_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_vendor_info`
--

DROP TABLE IF EXISTS `inv_vendor_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_vendor_info` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(20) NOT NULL,
  `street_address` varchar(100) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `state_address` varchar(10) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  PRIMARY KEY (`vendor_id`),
  UNIQUE KEY `vendor_name` (`vendor_name`),
  KEY `fk_vendor_country` (`country_id`),
  CONSTRAINT `fk_vendor_country` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_vendor_info`
--

LOCK TABLES `inv_vendor_info` WRITE;
/*!40000 ALTER TABLE `inv_vendor_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_vendor_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infra_room_info`
--

DROP TABLE IF EXISTS `infra_room_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infra_room_info` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_number` varchar(10) NOT NULL,
  `adult_guest` int(11) NOT NULL DEFAULT '1',
  `child_guest` int(11) DEFAULT '0',
  `infant_guest` int(11) DEFAULT '0',
  `smoking_area` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'smoking area : Y means yes, or N means no',
  `room_type_id` int(11) NOT NULL,
  `floor_id` int(11) NOT NULL,
  PRIMARY KEY (`room_id`),
  UNIQUE KEY `room_number` (`room_number`),
  KEY `fk_room_fl` (`floor_id`),
  KEY `fk_roominfo_roomtype` (`room_type_id`),
  CONSTRAINT `fk_roominfo_roomtype` FOREIGN KEY (`room_type_id`) REFERENCES `infra_room_type_info` (`room_type_id`),
  CONSTRAINT `fk_room_fl` FOREIGN KEY (`floor_id`) REFERENCES `infra_floor_info` (`floor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infra_room_info`
--

LOCK TABLES `infra_room_info` WRITE;
/*!40000 ALTER TABLE `infra_room_info` DISABLE KEYS */;
INSERT INTO `infra_room_info` (`room_id`, `room_number`, `adult_guest`, `child_guest`, `infant_guest`, `smoking_area`, `room_type_id`, `floor_id`) VALUES (1,'101',1,0,0,'N',1,1);
/*!40000 ALTER TABLE `infra_room_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_adv_payment`
--

DROP TABLE IF EXISTS `res_adv_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_adv_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_date` date NOT NULL,
  `payment_time` varchar(5) NOT NULL COMMENT 'format : HH:mm',
  `payment_mode_code` varchar(5) NOT NULL,
  `bank_name` varchar(10) NOT NULL,
  `amount_value` decimal(50,2) NOT NULL,
  `payment_code` varchar(20) NOT NULL COMMENT 'pregenerated payment code',
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_adv_payment`
--

LOCK TABLES `res_adv_payment` WRITE;
/*!40000 ALTER TABLE `res_adv_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `res_adv_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_goods_request`
--

DROP TABLE IF EXISTS `inv_goods_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_goods_request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_date` date NOT NULL,
  `due_date` date NOT NULL,
  `dept_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`request_id`),
  KEY `fk_goodsreq_dept` (`dept_id`),
  KEY `fk_goodsreq_inviteminfo` (`item_id`),
  CONSTRAINT `fk_goodsreq_dept` FOREIGN KEY (`dept_id`) REFERENCES `infra_dept_info` (`dept_id`),
  CONSTRAINT `fk_goodsreq_inviteminfo` FOREIGN KEY (`item_id`) REFERENCES `inv_item_info` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_goods_request`
--

LOCK TABLES `inv_goods_request` WRITE;
/*!40000 ALTER TABLE `inv_goods_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_goods_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_type_facility`
--

DROP TABLE IF EXISTS `room_type_facility`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_type_facility` (
  `room_type_id` int(11) NOT NULL DEFAULT '0',
  `facility_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`room_type_id`,`facility_id`),
  KEY `fk_roomtype_fclt` (`facility_id`),
  KEY `fk_roomtypefclt_roomtypeinfo` (`room_type_id`),
  CONSTRAINT `fk_roomtypefclt_roomtypeinfo` FOREIGN KEY (`room_type_id`) REFERENCES `infra_room_type_info` (`room_type_id`),
  CONSTRAINT `fk_roomtype_fclt` FOREIGN KEY (`facility_id`) REFERENCES `base_facility_info` (`facility_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_type_facility`
--

LOCK TABLES `room_type_facility` WRITE;
/*!40000 ALTER TABLE `room_type_facility` DISABLE KEYS */;
INSERT INTO `room_type_facility` (`room_type_id`, `facility_id`) VALUES (1,2);
/*!40000 ALTER TABLE `room_type_facility` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_po_payable`
--

DROP TABLE IF EXISTS `inv_po_payable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_po_payable` (
  `po_payable_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_scheme_id` int(11) DEFAULT NULL,
  `total_amount` decimal(50,2) NOT NULL,
  `net_total_amount` decimal(50,2) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `payment_ref` varchar(30) NOT NULL,
  `due_date` date NOT NULL,
  `payable_amount` decimal(50,2) NOT NULL,
  PRIMARY KEY (`po_payable_id`),
  KEY `fk_popayable_taxschemeinfo` (`tax_scheme_id`),
  CONSTRAINT `fk_popayable_taxschemeinfo` FOREIGN KEY (`tax_scheme_id`) REFERENCES `fin_tax_scheme_info` (`tax_scheme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_po_payable`
--

LOCK TABLES `inv_po_payable` WRITE;
/*!40000 ALTER TABLE `inv_po_payable` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_po_payable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_vendor_item_info`
--

DROP TABLE IF EXISTS `inv_vendor_item_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_vendor_item_info` (
  `item_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`,`vendor_id`),
  KEY `fk_invvendor_inviteminfo` (`item_id`),
  KEY `fk_vendorinfo_iteminfo` (`vendor_id`),
  CONSTRAINT `fk_invvendor_inviteminfo` FOREIGN KEY (`item_id`) REFERENCES `inv_item_info` (`item_id`),
  CONSTRAINT `fk_vendorinfo_iteminfo` FOREIGN KEY (`vendor_id`) REFERENCES `inv_vendor_info` (`vendor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_vendor_item_info`
--

LOCK TABLES `inv_vendor_item_info` WRITE;
/*!40000 ALTER TABLE `inv_vendor_item_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_vendor_item_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_room`
--

DROP TABLE IF EXISTS `res_room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_room` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `checkin_date` date NOT NULL,
  `checkin_time` varchar(5) NOT NULL COMMENT 'format : HH:mm',
  `checkout_date` date NOT NULL,
  `checkout_time` varchar(5) NOT NULL COMMENT 'format : HH:mm',
  `nbr_adult` bigint(20) NOT NULL,
  `nbr_child` bigint(20) DEFAULT NULL,
  `nbr_infant` bigint(20) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `res_code` varchar(10) NOT NULL COMMENT 'pregenerated reservation code',
  PRIMARY KEY (`res_id`),
  KEY `fk_roomreserv_custinfo` (`customer_id`),
  KEY `fk_reservroom_payment` (`payment_id`),
  CONSTRAINT `fk_reservroom_payment` FOREIGN KEY (`payment_id`) REFERENCES `res_adv_payment` (`payment_id`),
  CONSTRAINT `fk_roomreserv_custinfo` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_room`
--

LOCK TABLES `res_room` WRITE;
/*!40000 ALTER TABLE `res_room` DISABLE KEYS */;
/*!40000 ALTER TABLE `res_room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_item_info`
--

DROP TABLE IF EXISTS `inv_item_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_item_info` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  `item_type_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `opening_stock` int(11) NOT NULL,
  `max_qty` int(11) NOT NULL,
  `min_qty` int(11) NOT NULL,
  `std_qty` int(11) NOT NULL,
  `std_rate` int(11) NOT NULL,
  `current_balance` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `item_name` (`item_name`),
  KEY `fk_invitem_metricunitinfo` (`unit_id`),
  KEY `fk_invitem_invitemtype` (`item_type_id`),
  CONSTRAINT `fk_invitem_invitemtype` FOREIGN KEY (`item_type_id`) REFERENCES `inv_item_type_info` (`item_type_id`),
  CONSTRAINT `fk_invitem_metricunitinfo` FOREIGN KEY (`unit_id`) REFERENCES `inv_metric_unit_info` (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_item_info`
--

LOCK TABLES `inv_item_info` WRITE;
/*!40000 ALTER TABLE `inv_item_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_item_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inward_goods_order_payable`
--

DROP TABLE IF EXISTS `inward_goods_order_payable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inward_goods_order_payable` (
  `in_order_id` int(11) NOT NULL,
  `in_payable_id` int(11) NOT NULL,
  PRIMARY KEY (`in_order_id`,`in_payable_id`),
  KEY `fk_orderpayable_inwardgoods` (`in_order_id`),
  KEY `fk_inwardgoods_orderpayable` (`in_payable_id`),
  CONSTRAINT `fk_inwardgoods_orderpayable` FOREIGN KEY (`in_payable_id`) REFERENCES `inv_inward_goods_payable` (`in_payable_id`),
  CONSTRAINT `fk_orderpayable_inwardgoods` FOREIGN KEY (`in_order_id`) REFERENCES `inv_goods_inward_order` (`in_order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inward_goods_order_payable`
--

LOCK TABLES `inward_goods_order_payable` WRITE;
/*!40000 ALTER TABLE `inward_goods_order_payable` DISABLE KEYS */;
/*!40000 ALTER TABLE `inward_goods_order_payable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_info`
--

DROP TABLE IF EXISTS `hotel_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel_info` (
  `hotel_id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `state_address` varchar(10) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `fax_number` varchar(100) DEFAULT NULL,
  `email_address` varchar(200) NOT NULL,
  `site_url` varchar(250) NOT NULL,
  `reg_number` varchar(100) DEFAULT NULL,
  `logo_url` varchar(500) DEFAULT NULL,
  `hotel_chain_code` varchar(200) DEFAULT NULL,
  `latitude` decimal(50,0) DEFAULT NULL,
  `longitude` decimal(50,0) DEFAULT NULL,
  PRIMARY KEY (`hotel_id`),
  UNIQUE KEY `reg_number` (`reg_number`),
  UNIQUE KEY `hotel_chain_code` (`hotel_chain_code`),
  KEY `fk_hotel_country` (`country_id`),
  CONSTRAINT `fk_hotel_country` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='hotel information data';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_info`
--

LOCK TABLES `hotel_info` WRITE;
/*!40000 ALTER TABLE `hotel_info` DISABLE KEYS */;
INSERT INTO `hotel_info` (`hotel_id`, `hotel_name`, `company_name`, `street_address`, `state_address`, `city`, `country_id`, `zip_code`, `phone_number`, `fax_number`, `email_address`, `site_url`, `reg_number`, `logo_url`, `hotel_chain_code`, `latitude`, `longitude`) VALUES (2,'Hotel California','Calif Inc','Calif Ave',NULL,'CA',1,'12343','12321312312312',NULL,'vigong@free.fr','www.free.fr',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `hotel_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_info`
--

DROP TABLE IF EXISTS `menu_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_info` (
  `menu_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`menu_info_id`),
  UNIQUE KEY `menu_name` (`menu_name`),
  KEY `fk_menuinfo_categoryinfo` (`category_id`),
  CONSTRAINT `fk_menuinfo_categoryinfo` FOREIGN KEY (`category_id`) REFERENCES `menu_category_info` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_info`
--

LOCK TABLES `menu_info` WRITE;
/*!40000 ALTER TABLE `menu_info` DISABLE KEYS */;
INSERT INTO `menu_info` (`menu_info_id`, `menu_name`, `category_id`) VALUES (1,'spaghetti carbonara',1);
/*!40000 ALTER TABLE `menu_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_goods_receive_info`
--

DROP TABLE IF EXISTS `inv_goods_receive_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_goods_receive_info` (
  `receive_id` int(11) NOT NULL AUTO_INCREMENT,
  `receive_date` date NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  PRIMARY KEY (`receive_id`),
  KEY `fk_goodsreceive_goodsissue` (`issue_id`),
  CONSTRAINT `fk_goodsreceive_goodsissue` FOREIGN KEY (`issue_id`) REFERENCES `inv_goods_issue_order` (`issue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_goods_receive_info`
--

LOCK TABLES `inv_goods_receive_info` WRITE;
/*!40000 ALTER TABLE `inv_goods_receive_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_goods_receive_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_card_menu_info`
--

DROP TABLE IF EXISTS `menu_card_menu_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_card_menu_info` (
  `menu_info_id` int(11) NOT NULL,
  `menu_card_id` int(11) NOT NULL,
  PRIMARY KEY (`menu_info_id`,`menu_card_id`),
  KEY `fk_cardmenuinfo_menuinfo` (`menu_info_id`),
  KEY `fk_cardmenu_menuinfo` (`menu_card_id`),
  CONSTRAINT `fk_cardmenuinfo_menuinfo` FOREIGN KEY (`menu_info_id`) REFERENCES `menu_info` (`menu_info_id`),
  CONSTRAINT `fk_cardmenu_menuinfo` FOREIGN KEY (`menu_card_id`) REFERENCES `menu_card_info` (`menu_card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_card_menu_info`
--

LOCK TABLES `menu_card_menu_info` WRITE;
/*!40000 ALTER TABLE `menu_card_menu_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_card_menu_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `base_language`
--

DROP TABLE IF EXISTS `base_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `base_language` (
  `language_id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_code` varchar(2) NOT NULL COMMENT 'language 2 letter code : en, fr, in, etc',
  `locale_id` varchar(255) DEFAULT NULL COMMENT 'locale id : en_us, en_uk, fr_fr, fr_be, etc',
  `lang_label` varchar(255) NOT NULL COMMENT 'language label : english for en, french for fr, etc.',
  PRIMARY KEY (`language_id`),
  UNIQUE KEY `lang_code` (`lang_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `base_language`
--

LOCK TABLES `base_language` WRITE;
/*!40000 ALTER TABLE `base_language` DISABLE KEYS */;
INSERT INTO `base_language` (`language_id`, `lang_code`, `locale_id`, `lang_label`) VALUES (1,'en','en_US','English US');
/*!40000 ALTER TABLE `base_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_card_info`
--

DROP TABLE IF EXISTS `menu_card_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_card_info` (
  `menu_card_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_card_name` varchar(20) NOT NULL,
  `quantity` decimal(50,0) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price_amount` decimal(50,2) NOT NULL,
  `currency_id` int(11) NOT NULL,
  PRIMARY KEY (`menu_card_id`),
  UNIQUE KEY `menu_card_name` (`menu_card_name`),
  KEY `fk_cardinfo_curr` (`currency_id`),
  KEY `fk_cardmenu_metricunitinfo` (`unit_id`),
  CONSTRAINT `fk_cardinfo_curr` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`curr_id`),
  CONSTRAINT `fk_cardmenu_metricunitinfo` FOREIGN KEY (`unit_id`) REFERENCES `inv_metric_unit_info` (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_card_info`
--

LOCK TABLES `menu_card_info` WRITE;
/*!40000 ALTER TABLE `menu_card_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_card_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_po_info`
--

DROP TABLE IF EXISTS `inv_po_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_po_info` (
  `po_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `po_date` date NOT NULL,
  `po_time` varchar(5) NOT NULL COMMENT 'Format HH:mm',
  `quantity` decimal(50,0) NOT NULL,
  `rate` decimal(50,2) NOT NULL,
  `amount_value` decimal(50,2) NOT NULL,
  PRIMARY KEY (`po_id`),
  KEY `fk_poinfo_inviteminfo` (`item_id`),
  KEY `fk_poinfo_invvendorinfo` (`vendor_id`),
  CONSTRAINT `fk_poinfo_inviteminfo` FOREIGN KEY (`item_id`) REFERENCES `inv_item_info` (`item_id`),
  CONSTRAINT `fk_poinfo_invvendorinfo` FOREIGN KEY (`vendor_id`) REFERENCES `inv_vendor_info` (`vendor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_po_info`
--

LOCK TABLES `inv_po_info` WRITE;
/*!40000 ALTER TABLE `inv_po_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_po_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `base_occasion_info`
--

DROP TABLE IF EXISTS `base_occasion_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `base_occasion_info` (
  `occassion_id` int(11) NOT NULL AUTO_INCREMENT,
  `occassion_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`occassion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `base_occasion_info`
--

LOCK TABLES `base_occasion_info` WRITE;
/*!40000 ALTER TABLE `base_occasion_info` DISABLE KEYS */;
INSERT INTO `base_occasion_info` (`occassion_id`, `occassion_name`) VALUES (1,'Honeymoon');
/*!40000 ALTER TABLE `base_occasion_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_goods_inward_order`
--

DROP TABLE IF EXISTS `inv_goods_inward_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_goods_inward_order` (
  `in_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `inward_date` date NOT NULL,
  `po_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `vendor_name` varchar(30) NOT NULL,
  `quantity` decimal(50,0) NOT NULL,
  `rate` decimal(50,2) NOT NULL,
  `amount_value` decimal(50,2) NOT NULL,
  PRIMARY KEY (`in_order_id`),
  KEY `fk_goodsinward_poinfo` (`po_id`),
  CONSTRAINT `fk_goodsinward_poinfo` FOREIGN KEY (`po_id`) REFERENCES `inv_po_info` (`po_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_goods_inward_order`
--

LOCK TABLES `inv_goods_inward_order` WRITE;
/*!40000 ALTER TABLE `inv_goods_inward_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_goods_inward_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infra_resto_table_type_info`
--

DROP TABLE IF EXISTS `infra_resto_table_type_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infra_resto_table_type_info` (
  `table_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `table_type` varchar(255) NOT NULL,
  PRIMARY KEY (`table_type_id`),
  UNIQUE KEY `table_type` (`table_type`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infra_resto_table_type_info`
--

LOCK TABLES `infra_resto_table_type_info` WRITE;
/*!40000 ALTER TABLE `infra_resto_table_type_info` DISABLE KEYS */;
INSERT INTO `infra_resto_table_type_info` (`table_type_id`, `table_type`) VALUES (1,'private');
/*!40000 ALTER TABLE `infra_resto_table_type_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_check_in`
--

DROP TABLE IF EXISTS `res_check_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_check_in` (
  `checkin_id` int(11) NOT NULL AUTO_INCREMENT,
  `come_from` varchar(10) NOT NULL,
  `going_to` varchar(10) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`checkin_id`),
  KEY `fk_checkin_reservinfo` (`res_id`),
  CONSTRAINT `fk_checkin_reservinfo` FOREIGN KEY (`res_id`) REFERENCES `res_room` (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_check_in`
--

LOCK TABLES `res_check_in` WRITE;
/*!40000 ALTER TABLE `res_check_in` DISABLE KEYS */;
/*!40000 ALTER TABLE `res_check_in` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_code_iso3166` varchar(3) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`country_id`),
  UNIQUE KEY `country_code` (`country_code`),
  KEY `fk_country_lang` (`lang_id`),
  CONSTRAINT `fk_country_lang` FOREIGN KEY (`lang_id`) REFERENCES `base_language` (`language_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` (`country_id`, `country_code`, `country_name`, `country_code_iso3166`, `lang_id`) VALUES (1,'US','United States',NULL,1);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-12-17 14:16:51
