<?php
require_once("conn_db.php");
$sql="insert into user_obs 
values('$_POST[fname]','$_POST[lname]','$_POST[email]',
'$_POST[sex]','$_POST[mstatus]','$_POST[dobd]','$_POST[dobm]','$_POST[doby]',
'$_POST[padd]','$_POST[mob]','$_POST[uname]','$_POST[password]','$_POST[secr]','$_POST[ans]')";
$result=mysql_query($sql,$conn) or die(mysql_error());
if($result)
{
	header("location: user_added.php");
}	
?>

