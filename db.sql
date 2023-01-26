
CREATE TABLE `datas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `app_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

insert  into `datas`(`id`,`app_number`,`id_card`,`com_reg`,`name`,`doc_number`,`status`,`created_at`,`updated_at`) values 
(2,'1','card1','company11','John','1101','on',NULL,NULL),
(3,'2','card1','company12','John','1102','on',NULL,NULL),
(4,'3','card2','company21','martin','1121','on',NULL,NULL),
(5,'4','card2','company22','martin','1122','on',NULL,NULL),
(6,'31','card3','company31','John','1101','on',NULL,NULL),
(7,'32','card3','company12','John','1102','on',NULL,NULL),
(8,'41','card4','company11','cristin','1141','on',NULL,NULL),
(9,'42','card4','company12','cristin','1142','on',NULL,NULL),
(10,'51','card','company11','John','1101','on',NULL,NULL),
(11,'52','card5','company52','nikel','1152','on',NULL,NULL),
(12,'61','card6','company61','niket','1151','on',NULL,NULL),
(13,'2','card6','company62','John6','1162','on',NULL,NULL),
(14,'1','card8','company11','John','1101','on',NULL,NULL),
(15,'72','card7','company72','John7','1172','on',NULL,NULL),
(16,'71','card7','company71','John7','1171','on',NULL,NULL),
(17,'1','card1','company11','John','1101','on',NULL,NULL),
(18,'2','card1','company12','John','1102','on',NULL,NULL),
(19,'3','card2','company21','martin','1121','on',NULL,NULL),
(21,'31','card3','company31','John','1101','on',NULL,NULL),
(22,'32','card3','company12','John','1102','on',NULL,NULL),
(23,'41','card4','company11','cristin','1141','on',NULL,NULL),
(24,'42','card4','company12','cristin','1142','on',NULL,NULL),
(25,'51','card','company11','John','1101','on',NULL,NULL),
(26,'52','card5','company52','nikel','1152','on',NULL,NULL),
(27,'61','card6','company61','niket','1151','on',NULL,NULL),
(28,'2','card6','company62','John6','1162','on',NULL,NULL),
(29,'1','card8','company11','John','1101','on',NULL,NULL),
(30,'72','card7','company72','John7','1172','on',NULL,NULL),
(31,'71','card7','company71','John7','1171','on',NULL,NULL);


