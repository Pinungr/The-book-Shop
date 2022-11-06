<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to PBP</title>
<?php include("style.php");?>
</head>
<body class="thrColElsHdr">

<div id="container">
 <?php include("header.php");?>
 <?php include("sidebar1_user.php");?>
 <?php include("sidebar2.php");?>
  <div id="mainContent">  	
  	
     <p align="right"><img src="image/user_book.gif" alt="customer" width="112" height="138" align="right" /></p>
  		<p><h3>Thank for Purchasing with PBP.<br/><br/> Please Visit Again</h3><br/><br/></p>
  
    <?php
require_once("conn_db.php");
$var="ch1";
$sql="SELECT COUNT(*) n FROM cart_OBS";
$result=mysql_query($sql,$conn) or die(mysql_error()) ;
if($newArray = mysql_fetch_array($result)) 
	$cnt=$newArray['n'];

$n=1;
$tot=0;
$disp="<form name=\"bill_cart\" method=\"POST\"  action=\"payment.php\" ><table border=\"1\" width=\"100%\" id=\"table1\" cellspacing=\"0\" cellpadding=\"5\"> <tr><th scope=\"col\"  width=\"250\">ISBN No</th>
    <th scope=\"col\"  width=\"290\">price</th></tr>";

while($n<=$cnt)
{
	
	$var="ch".$n;
	if(isset($_POST[$var]))
	{
		$isbn=$_POST[$var];
		$sql="select price from book_obs where isbn='$isbn'";
		$result=mysql_query($sql,$conn) or die(mysql_error()) ;
		if($newArray = mysql_fetch_array($result)) 
		{
			$price=$newArray['price'];
			$tot=$tot+$newArray['price'];
		}
		$disp.="<tr><td>$isbn</td>
    <td scope=\"col\">Rs.&nbsp;$price/-</td></tr>";

	}
	$n++;
}
	$disp.="<tr><td><b>Total Billed Amount</b></td><td><b>Rs.&nbsp;$tot/-</b></td></tr></table><br><br><table border=\"0\" width=\"100%\" id=\"table1\" cellspacing=\"0\"><tr><td align=\"center\"><input type=\"submit\" name=\"button\" id=\"button\" value=\"Make Payment\"/></td><td align=\"center\"><input type=\"reset\" name=\"button\" id=\"button\" value=\"Discard\"/></td></tr></table></form>";

print $disp;	
?>
</p>
</div>
<br class="clearfloat" />
<?php include("footer.php");?>
</body>
</html>