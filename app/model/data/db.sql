DROP DATABASE IF EXISTS `domain`;
CREATE DATABASE `domain`;
USE `domain`;

CREATE TABLE `blog` (
    `blog_id` int(4) AUTO_INCREMENT,
    `post_heading` varchar(255),
    `subheading` varchar(255),
    `date` date,
    `content` longtext,
    PRIMARY KEY (`blog_id`)
);

CREATE TABLE `portfolio` (
    `project_id` int(4) AUTO_INCREMENT,
    `title` varchar(255),
    `class_id` int(4),
    `description` mediumtext,
    `url` varchar(255),
    `category` varchar(50),
    `tags` mediumtext,
    `date` date,
    PRIMARY KEY (`project_id`)
);

CREATE TABLE `class` (
    `class_id` int(4),
    `course` varchar(255),
    `professor` varchar(255),
    `year` char(4),
    `semester` char(25),
    `summary` mediumtext,
    PRIMARY KEY (`class_id`)
);

CREATE TABLE `resume` (
    `info` mediumtext,
    `summary` mediumtext,
    `abilities` mediumtext
);

CREATE TABLE `education` (
    `school_id` int(4),
    `name` varchar(255),
    `year` varchar(15),
    `degree` varchar(50),
    PRIMARY KEY (`school_id`)
);

CREATE TABLE `employment` (
    `job_id` int(4),
    `company` varchar(255),
    `year` varchar(15),
    `description` mediumtext,
    PRIMARY KEY (`job_id`)
);

ALTER TABLE `portfolio`
ADD FOREIGN KEY (class_id)
REFERENCES class(class_id);