<?php

require_once 'database.php';

try {
    $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

$ctUsers = '
    CREATE TABLE IF NOT EXISTS `users` (
        `id` bigint(20) NOT null AUTO_INCREMENT,
        `email` varchar(255) NOT null,
        `login` varchar(255) NOT null,
        `password` varchar(255) NOT null,
        PRIMARY KEY (`id`)
    ) ENGINE=INNODB DEFAULT CHARSET=utf8;
';

$ctPictures = '
    CREATE TABLE IF NOT EXISTS `pictures` (
        `id` bigint(20) NOT null AUTO_INCREMENT,
        `user_id` bigint(20) NOT null,
        PRIMARY KEY (`id`)
    ) ENGINE=INNODB;
';

$ctComments = '
    CREATE TABLE IF NOT EXISTS `comments` (
        `id` bigint(20) NOT null AUTO_INCREMENT,
        `user_id` bigint(20) NOT null,
        `pic_id` bigint(20) NOT null,
        `text` text,
        PRIMARY KEY(`id`)
    ) ENGINE=INNODB DEFAULT CHARSET=utf8;
';
