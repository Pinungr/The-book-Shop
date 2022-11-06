<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Details</title>
<?php include("style.php");?>
</head>
<body class="thrColElsHdr">

<div id="container">
 <?php include("header.php");?>
 <?php include("sidebar1_admin.php");?>
 <?php include("sidebar2.php");?>
 
  <div id="mainContent">

<form name="update_book" method="POST"  action="update_book_db.php" >
<div align="center">
<b><font face="Arial Narrow" size="5">Book Details</font></b><p>&nbsp;</p>
<table border="0" width="43%" id="table1">

	<?php
		require_once("conn_db.php");
		$sql="select * from book_obs where isbn='$_POST[isbn]'";
		$result=mysql_query($sql,$conn) or die(mysql_error());
			
		if($arr=mysql_fetch_array($result))
		{
		
			$isbn=$arr['isbn'];
			$title=$arr['title'];
			$photo=$arr['photo'];
			$edition=$arr['edition'];
			$author=$arr['author'];
			$pname=$arr['pname'];
			$nop=$arr['nop'];
			$descr=$arr['descr'];
			$price=$arr['price'];
			$type=$arr['type'];
			$remark=$arr['remark'];
		}		
		if($type=="1")
			$typ="ART";
		else if($type=="2")
			$typ="BUSINESS &amp; ECONOMICS";
		else if($type=="3")
			$typ="CHILDREN BOOK";
		else if($type=="4")
			$typ="COMPUTERS";
		else if($type=="5")
			$typ="DENTISTRY";
		else if($type=="6")
			$typ="EDUCATION";
		else if($type=="7")
			$typ="ENGINEERING";
		else if($type=="8")
			$typ="GENERAL_MAIN";
		else if($type=="9")
			$typ="HEALTH, FAMILY &amp; LIFESTYLE";
		else if($type=="10")
			$typ="HOUSE &amp; HOME";
		else if($type=="11")
			$typ="LAW";
		else if($type=="12")
			$typ="MEDICAL";
		else if($type=="13")
			$typ="MILITARY";
		else if($type=="14")
			$typ="MISC";
		else if($type=="15")
			$typ="NATURE";
		else if($type=="16")
			$typ="NURSING";
		else if($type=="17")
			$typ="REFERENCE";
		else if($type=="18")
			$typ="RELIGION";
		else if($type=="19")
			$typ="SCIENCE";
		else if($type=="20")
			$typ="SOCIAL SCIENCE";
		else if($type=="21")
			$typ="SPORTS";
		else if($type=="22")
			$typ="TECHNOLOGY";
		else if($type=="23")
			$typ="TRAVEL";
		if($remark=="0")
			$remr="Nothing";
		else if($remark=="1")
			$remr="NEW";
		else if($remark=="2")
			$remr="RECOMMENDED";
		else if($remark=="3")
			$remr="BEST SELLER";
		else if($remark=="4")
			$remr="BEST BUY";
		
		$disp="  
  <tr>
    <td width=\"130\">ISBN No:</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"isbn\" id=\"isbn\" value=\"$isbn\"/>
    </td>
  </tr>
  <tr>
    <td>Book Title</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"title\" id=\"title\" value=\"$title\"/>
    </td>
  </tr>
  <tr>
    <td>Image</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"photo\" id=\"photo\" value=\"$photo\"/>
    </td>
  </tr>
  		<tr>
		<td></td>
		<td><img src=\"image/$photo\" alt=\"customer\" align=\"middle\" width=\"128\" height=\"148\"/></td></tr>
<tr>
    <td>Edition</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"edition\" id=\"edition\" value=\"$edition\"/>
    </td>
 </tr>
  <tr>
    <td>Author</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"author\" id=\"author\" value=\"$author\" />
    </td>
  </tr>
  <tr>
    <td>Publisher Name</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"pname\" id=\"pname\" value=\"$pname\" />
    </td>
  </tr>
  <tr>
    <td>No. of Pages</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"nop\" id=\"nop\" value=\"$nop\"/>
    </td>
  </tr>
 <tr>
    <td>Description</td>
    <td>
     <label for=\"textarea\"></label>
      <textarea name=\"descr\" id=\"descr\">$descr</textarea>
    </td>
  </tr>
  <tr>
    <td>Price</td>
    <td>
      <label for=\"textfield3\"></label>
      <input type=\"text\" name=\"price\" id=\"price\" value=\"$price\" />
    </td>
  </tr>
  <tr>
    <td>Selected Book Category</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"cat\" id=\"cat\" value=\"$typ\"/>
    </td>
  </tr>
  
  <tr>
    <td>Choose Book Category</td>
    <td>
      <label for=\"select\"></label>
        <select name=\"type\" id=\"type\">
        <option value=\"0\" selected=\"selected\">CHOOSE CATEGORY</option>
        <option value=\"1\">ART</option>
        <option value=\"2\">BUSINESS &amp; ECONOMICS</option>
        <option value=\"3\">CHILDREN BOOK</option>
        <option value=\"4\">COMPUTERS</option>
        <option value=\"5\">DENTISTRY</option>
        <option value=\"6\">EDUCATION</option>
        <option value=\"7\">ENGINEERING</option>
        <option value=\"8\">GENERAL_MAIN</option>
        <option value=\"9\">HEALTH, FAMILY &amp; LIFESTYLE</option>
        <option value=\"10\">HOUSE &amp; HOME</option>
        <option value=\"11\">LAW</option>
        <option value=\"12\">MEDICAL</option>
        <option value=\"13\">MILITARY</option>
        <option value=\"14\">MISC</option>
        <option value=\"15\">NATURE</option>
        <option value=\"16\">NURSING</option>
        <option value=\"17\">REFERENCE</option>
        <option value=\"18\">RELIGION</option>
        <option value=\"19\">SCIENCE</option>
        <option value=\"20\">SOCIAL SCIENCE</option>
        <option value=\"21\">SPORTS</option>
        <option value=\"22\">TECHNOLOGY</option>
        <option value=\"23\">TRAVEL</option>
        <option value=\"24\">VETERINARY MEDICINE</option>
		</select>
       </td>
  </tr>
  <tr>
    <td>Selected Book Remark</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"remr\" id=\"remr\" value=\"$remr\"/>
    </td>
  </tr>
  
  <tr>
    <td>Remarks</td>
    <td>
    <select name=\"remark\" id=\"remark\">
        <option value=\"0\" selected=\"selected\">PUT REMARK</option>
        <option value=\"1\">NEW</option>
        <option value=\"2\">RECOMMENDED</option>
        <option value=\"3\">BEST SELLER</option>
        <option value=\"4\">BEST BUY</option>
	</select>
    </td>
  </tr>
  <tr>
  	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type=\"submit\" name=\"button\" id=\"button\" value=\"Update Book\" /> <input type=\"reset\" name=\"reset\" id=\"reset\" value=\"reset\" />
    </td>
  </tr>
</table></form>";
  print $disp;
  ?>
</table>
<br>
         
	
  <!-- end #mainContent --></div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
<?php include("footer.php"); ?>
</body>
</html>
