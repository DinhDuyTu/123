<?php
$connect = mysqli_connect('localhost','root','');
if($connect){
	$setLang=mysqli_query($connect,'SET NAME "utf8" ');
}
else{
	die("FAILED!".mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE oceansoft_test";
mysqli_query($connect, $sql);

$connect2 = mysqli_connect('localhost','root','','oceansoft_test');
if($connect2){
	$setLang=mysqli_query($connect2,'SET NAME "utf8" ');
}
else{
	die("FAILED!".mysqli_connect_error());
}

echo "<br>";

$sql2 = "CREATE TABLE posts (
id_post int UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
title varchar(255) COLLATE utf8_unicode_ci NOT NULL,
description text COLLATE utf8_unicode_ci NOT NULL,
image varchar(255) COLLATE utf8_unicode_ci NOT NULL,
status int NOT NULL,
create_at datetime NOT NULL,
update_at datetime NOT NULL)";

mysqli_query($connect2, $sql2);

echo "<br>";

$sql3 = "INSERT INTO `posts` (`id_post`,`title`,`description`,image,status,create_at,update_at) VALUES
 (1,'A Foolproof Method for How to Write Catchy Headlines and Titles','What Is a Job Description?','abc1.jpg',1,now(),now()),
 (2,'A Foolproof Method for How to Write Catchy Headlines and Titles','What Is a Job Description?','abc1.jpg',1,now(),now()),
 (3,'A Foolproof Method for How to Write Catchy Headlines and Titles','What Is a Job Description?','abc1.jpg',1,now(),now()),
 (4,'A Foolproof Method for How to Write Catchy Headlines and Titles','What Is a Job Description?','abc1.jpg',1,now(),now()),
 (5,'A Foolproof Method for How to Write Catchy Headlines and Titles','What Is a Job Description?','abc1.jpg',1,now(),now()),
 (6,'A Foolproof Method for How to Write Catchy Headlines and Titles','What Is a Job Description?','abc1.jpg',1,now(),now()),
 (7,'A Foolproof Method for How to Write Catchy Headlines and Titles','What Is a Job Description?','abc1.jpg',1,now(),now()),
 (8,'A Foolproof Method for How to Write Catchy Headlines and Titles','What Is a Job Description?','abc1.jpg',1,now(),now()),
 (9,'A Foolproof Method for How to Write Catchy Headlines and Titles','What Is a Job Description?','abc1.jpg',1,now(),now()),
 (10,'A Foolproof Method for How to Write Catchy Headlines and Titles','What Is a Job Description?','abc1.jpg',1,now(),now())";

mysqli_query($connect2, $sql3);
?>