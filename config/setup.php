<?php

require_once('database.php');

try {
	$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die('Connection failed: ' . $e->getMessage());
}

$ctUsers = '
	CREATE TABLE IF NOT EXISTS `users` (
		`id` bigint(20) NOT NULL AUTO_INCREMENT,
		`email` varchar(255) NOT NULL,
		`login` varchar(255) NOT NULL,
		`password` varchar(255) NOT NULL,
		PRIMARY KEY (`id`)
	) ENGINE=INNODB DEFAULT CHARSET=utf8;
';

$ctPictures = '
	CREATE TABLE IF NOT EXISTS `pictures` (
		`id` bigint(20) NOT NULL AUTO_INCREMENT,
		`user_id` bigint(20) NOT NULL,
		PRIMARY KEY (`id`)
	) ENGINE=INNODB;
';

$ctComments = '
	CREATE TABLE IF NOT EXISTS `comments` (
		`id` bigint(20) NOT NULL AUTO_INCREMENT,
		`user_id` bigint(20) NOT NULL,
		`pic_id` bigint(20) NOT NULL,
		`text` text,
		PRIMARY KEY(`id`)
	) ENGINE=INNODB DEFAULT CHARSET=utf8;
';
