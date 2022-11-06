<?php
require_once("conn_db.php");
$var="ch1";
$sql="SELECT COUNT(*) n FROM cart_OBS";
$result=mysql_query($sql,$conn) or die(mysql_error()) ;
if($newArray = mysql_fetch_array($result)) 
	$cnt=$newArray['n'];

$n=1;
$list="";
$cnt=10-$cnt;

while($n<=$cnt)
{
	
	$var="ch".$n;
	if(isset($_POST[$var]))
	{
		$isbn=$_POST[$var];
		$sql="insert into cart_obs values('$isbn')";
		$result=mysql_query($sql,$conn) or die(mysql_error()) ;
	}
	$n++;
}
if($result)
{
	header("location: cart_added.php");
}	
?>

