<?php
require_once("conn_db.php");
$sql="insert into publisher_obs values(NULL,'$_POST[pname]','$_POST[pubaddr]','$_POST[pemail]','$_POST[fname]','$_POST[lname]','$_POST[cellno]')";
$result=mysql_query($sql,$conn) or die(mysql_error()) ;
if($result)
	header("location: publisher_added.php");
?>