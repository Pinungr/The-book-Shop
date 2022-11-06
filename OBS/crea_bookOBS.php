<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require_once("conn_db.php");
$sql="create table book_obs(isbn varchar(20),title varchar(30), photo varchar(50), edition int, author varchar(30), pname varchar(30), nop int, descr varchar(50),price int, type varchar(30),remark varchar(100))";
$result=mysql_query($sql,$conn) or die(mysql_error()) ;
print $result;
?>
</body>
</html>
