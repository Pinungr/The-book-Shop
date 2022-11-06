<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Cart</title>
<?php include("style.php");?>
</head>
<body class="thrColElsHdr">

<div id="container">
 <?php include("header.php");?>
 <?php include("sidebar1_user.php");?>
 <?php include("sidebar2.php");?>
 
  <div id="mainContent">


	<?php
		require_once("conn_db.php");
		$sql="select cart_obs.isbnno,book_obs.title,book_obs.photo,book_obs.author,book_obs.pname,book_obs.price from cart_obs,book_obs where cart_obs.isbnno=book_obs.isbn";
		$result=mysql_query($sql,$conn) or die(mysql_error());
		$cnt=0;
		$disp="<form name=\"view_cart\" method=\"POST\"  action=\"bill_cart.php\" ><div align=\"center\">
		<b><font face=\"Arial Narrow\" size=\"5\">Book Details</font></b><p>&nbsp;</p>
		<table border=\"0\" width=\"43%\" id=\"table1\" cellspacing=\"0\">";
		while($arr=mysql_fetch_array($result))
		{
		
			$isbn=$arr['isbnno'];
			$title=$arr['title'];
			$photo=$arr['photo'];
			$author=$arr['author'];
			$pname=$arr['pname'];
			$price=$arr['price'];
			$nm="ch".++$cnt;
			
			$disp.="<tr> <th rowspan=\"5\" scope=\"col\">
  <input type=\"checkbox\" name=\"$nm\" id=\"checkbox\" value=\"$isbn\"/></th>
    <th rowspan=\"5\" scope=\"col\"><img src=\"image/$photo\" alt=\"customer\" align=\"left\" width=\"100\" height=\"148\"></th>
    <th scope=\"col\">ISBN No</th>
    <th scope=\"col\">$isbn</th>
  </tr>
  <tr>
    <td>Title:</td>
    <td>$title</td>
  </tr>
  <tr>
    <td>Author:</td>
    <td>$author</td>
  </tr>
  <tr>
    <td>Publisher</td>
    <td>$pname</td>
  </tr>
  
  <tr>
    <td>Price</td>
    <td>$price</td>
  </tr>";
  }
  $disp.="
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  
  <tr>
  <td>&nbsp;</td>
  <td>
  <input type=\"submit\" name=\"button\" id=\"button\" value=\"Bill Checked Items\"/> </td></tr>
  </table></form>";
  print $disp;
  ?>
</table>
<br>
         
	
  <!-- end #mainContent --></div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
<?php include("footer.php"); ?></div>
</body>
</html>
