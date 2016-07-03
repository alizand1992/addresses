CREATE DATABASE IF NOT EXISTS `addresses`;

USE addresses;

CREATE TABLE IF NOT EXISTS `users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `fname` VARCHAR(100) NOT NULL,
    `lname` VARCHAR(100) NOT NULL,
    `username` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `user_since` INT NOT NULL,
    `last_login` INT NOT NULL,
    `active` BOOL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `address` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `apt_number` VARCHAR(25),
    `street_address` VARCHAR(128) NOT NULL,
    `city` VARCHAR(128) NOT NULL,
    `state` VARCHAR(2) NOT NULL,
    `zip` INT NOT NULL,
    PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS `customers`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `fname` VARCHAR(100) NOT NULL,
    `lname` VARCHAR(100) NOT NULL,
    `address_id` INT NOT NULL,
    PRIMARY KEY (`id`)
);

