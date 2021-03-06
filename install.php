<?php
include("lib/db.php");

sql("DROP TABLE IF EXISTS `accounts`;");
sql("CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `referralCode` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `referralFrom` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `level` int(1) NOT NULL,
  `createdAt` datetime,
  `status` int(1) NOT NULL DEFAULT 0,
  `verifyHash` varchar(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;");
sql("INSERT INTO `accounts` (`id`, `email`, `firstname`, `lastname`, `password`, `country`, `referralCode`, `referralFrom`, `level`, `createdAt`, `status`) VALUES
(1, 'admin@4new.com', 'Super', 'Admin', 'Admin!23', '1', '12345', '', 9, now(), 1);");

exec("rm -rf referrals/*");
?>