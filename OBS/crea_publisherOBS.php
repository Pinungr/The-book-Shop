<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require_once("conn_db.php");

$sql="create table publisher_obs (pub_id int not null primary key auto_increment,pname varchar(30), pubaddr varchar(50), pemail varchar(30), fname varchar(30),lname varchar(30),cellno varchar(12))";
$result=mysql_query($sql,$conn) or die(mysql_error()) ;
print $result;
?>

</body>
</html>
