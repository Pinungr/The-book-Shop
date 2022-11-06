<?php
require_once("conn_db.php");
$sql="update publisher_obs set pubaddr='$_POST[pubaddr]',pemail='$_POST[pemail]',fname='$_POST[fname]',lname='$_POST[lname]',cellno='$_POST[cellno]' where pname='$_POST[pname]'";
$result=mysql_query($sql,$conn) or die(mysql_error());
if ($result)
	header("location: publisher_modified.php");
?>