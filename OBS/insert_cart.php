<?php
require_once("conn_db.php");
$var="ch1";
if(isset($_POST[$var]))
{
		$isbn=$_POST[$var];
$sql="insert into cart_obs 
values('$isbn')";
}
$result=mysql_query($sql,$conn) or die(mysql_error());
if($result)
{
	header("location: cart_added.php");
}	
?>

