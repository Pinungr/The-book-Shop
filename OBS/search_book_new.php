<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Book Details</title>
<?php include("style.php");?>
</head>
<body class="thrColElsHdr">

<div id="container">
 <?php include("header.php");?>
 <?php include("sidebar1_user.php");?>
 <?php include("sidebar2.php");?>
 
  <div id="mainContent">  	
<form name="srch_book" method="POST"  action="search_book_details_type.php" >
<div align="center">
	<b><font face="Arial Narrow" size="5">Search Book details</font></b><p>&nbsp;</p>
<table border="0" width="43%" id="table1">
	<tr>
		<td width="130">Choose Type of Book:</td>
		<td>
        <select name="type" id="type">
        <option value="0" selected="selected">CHOOSE CATEGORY</option>
        <option value="1">ART</option>
        <option value="2">BUSINESS &amp; ECONOMICS</option>
        <option value="3">CHILDREN BOOK</option>
        <option value="4">COMPUTERS</option>
        <option value="5">DENTISTRY</option>
        <option value="6">EDUCATION</option>
        <option value="7">ENGINEERING</option>
        <option value="8">GENERAL_MAIN</option>
        <option value="9">HEALTH, FAMILY &amp; LIFESTYLE</option>
        <option value="10">HOUSE &amp; HOME</option>
        <option value="11">LAW</option>
        <option value="12">MEDICAL</option>
        <option value="13">MILITARY</option>
        <option value="14">MISC</option>
        <option value="15">NATURE</option>
        <option value="16">NURSING</option>
        <option value="17">REFERENCE</option>
        <option value="18">RELIGION</option>
        <option value="19">SCIENCE</option>
        <option value="20">SOCIAL SCIENCE</option>
        <option value="21">SPORTS</option>
        <option value="22">TECHNOLOGY</option>
        <option value="23">TRAVEL</option>
		</select>
    </td>
	</tr>
	<tr>
		<td width="130">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="130">
		<input type="submit" value="Get Book Details" name="B1" style="float: right"></td>
		<td><input type="reset" value="Reset" name="B2"></td>
	</tr>
</table>
</div>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</form><br class="clearfloat" />
</div>
<?php include("footer.php"); ?>

</body>
</html>