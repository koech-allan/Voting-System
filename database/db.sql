DROP DATABASE IF EXISTS `VOTING`;
CREATE DATABASE `VOTING`;
USE `VOTING`;
SET NAMES utf8;
SET character_set_client=utf8mb4;

CREATE TABLE `VOTERS`(
`userId` varchar(15) NOT NULL,
`firstname` varchar(30) NOT NULL,
`lastname`varchar(30) NOT NULL,
`school` varchar(80) NOT NULL,
`gender` varchar(10) NOT NULL,
`profilephoto` varchar(50) NOT NULL,
`email`varchar(50) NOT NULL,
`password` varchar(20) NOT NULL,
`status` varchar(20) NOT NULL,
PRIMARY KEY (`UserId`)
)ENGINE=Innodb DEFAULT charset=utf8mb4;

INSERT INTO `VOTERS` (`userId`,`firstname`,`lastname`,`school`,`gender`,`profilephoto`,`email`,`password`,`status`)
VALUES ('INF/006/2018','JAMES','MAINA','infocoms','MALE','PHOTO.JPG','JAMES@GMAIL.COM','12345678','');

CREATE TABLE `CANDIDATE`(
`candidate` varchar(30) NOT NULL,
`authorizationCode` varchar(30) NOT NULL,
`currentVotes` varchar(30) NOT NULL,
`userId` varchar(20) NOT NULL,
PRIMARY KEY (`candidate`)
)ENGINE=Innodb DEFAULT charset=utf8mb4;

CREATE TABLE `system`(
`id` int(255) NOT NULL AUTO_INCREMENT,
`stime` time NOT NULL,
`etime` time NOT NULL,
`dday` date NOT NULL,
PRIMARY KEY (`id`)
)ENGINE=Innodb DEFAULT charset=utf8mb4;

INSERT INTO `system` (`id`,`stime`,`etime`,`dday`) 
VALUES (NULL,'07:00:00:000000','04:30:00:000000','2012-06-09');

CREATE TABLE `CANDIDATES`(
`userId` varchar(15) NOT NULL,
`firstname` varchar(30) NOT NULL,
`lastname`varchar(30) NOT NULL,
`school` varchar(80) NOT NULL,
`gender` varchar(10) NOT NULL,
`profilephoto` varchar(50) NOT NULL,
`email`varchar(50) NOT NULL,
`password` varchar(20) NOT NULL,
`position` varchar(20) NOT NULL,
`status` varchar(20) NOT NULL,
`currentVotes` varchar(30) NOT NULL,
`post` varchar(30) NOT NULL,
PRIMARY KEY (`UserId`)
)ENGINE=Innodb DEFAULT charset=utf8mb4;

INSERT INTO `CANDIDATES` (`userId`,`firstname`,`lastname`,`school`,`gender`,`profilephoto`,`email`,`password`,`status`,`post`,`currentVotes`)
VALUES ('INF/006/2018','JAMES','MAINA','INFOCOMS','MALE','PHOTO.JPG','JAMES@GMAIL.COM','12345678','','academic rep',0);

CREATE TABLE `admin`(
`adminId` int(20) NOT NULL AUTO_INCREMENT,
`username` varchar(20) NOT NULL,
`password` varchar(30) NOT NULL,
PRIMARY KEY (`adminId`)

)ENGINE=Innodb DEFAULT charset=utf8mb4;

INSERT INTO `admin` (`adminId`,`username`,`password`)
VALUES (NULL,'admin@gmail.com','admin12021');
