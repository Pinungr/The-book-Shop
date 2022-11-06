<?php
require_once("conn_db.php");
$sql="delete from publisher_obs where pname='$_POST[pname]'";
$result=mysql_query($sql,$conn) or die(mysql_error());
if ($result)
	header("location: publisher_deleted.php");
?>