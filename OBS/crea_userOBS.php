<?php
require_once("conn_db.php");
$sql="create table user_obs (fname varchar(20),lname varchar(10),email varchar(30),sex varchar(30),mstatus varchar(30),dobd int,dobm varchar(30),doby varchar(20),padd varchar(100),mob varchar(10),uname varchar(50) not null primary key ,password varchar(50),secr varchar(100),ans varchar(50))";
mysql_query($sql,$conn) or die(mysql_error());
?>