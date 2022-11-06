<?php
require_once("conn_db.php");
$sql="create table cart_OBS(isbnno varchar(20))";
mysql_query($sql,$conn) or die(mysql_error());
?>