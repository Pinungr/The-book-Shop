<?php
require_once("conn_db.php");
$sql="select uname,password from user_OBS where uname='$_POST[uname]'";
$result=mysql_query($sql,$conn) or die(mysql_error()) ;
$arr=mysql_fetch_array($result);

$pas=$arr['password'];
$un=$arr['uname'];

$epass=$_POST['pass']; //Source of error
if ($pas==$epass)
{
	if($un=='Admin')
		header("location: admin.php");
	else
		header("location:user.php");
}
else
		header("location: error_login.php");
?>
