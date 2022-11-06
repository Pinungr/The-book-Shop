<?php
require_once("conn_db.php");
$sql="delete from book_obs where isbn='$_POST[isbn]'";
$result=mysql_query($sql,$conn) or die(mysql_error());
if ($result)
	header("location: book_deleted.php");
?>