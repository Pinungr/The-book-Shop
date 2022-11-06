<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Book Details</title>
<?php include("style.php");?>
</head>
<body class="thrColElsHdr">

<div id="container">
 <?php include("header.php");?>
 <?php include("sidebar1_admin.php");?>
 <?php include("sidebar2.php");?>
 
  <div id="mainContent">  	
<form name="Update_book" method="POST"  action="update_book_details.php" >
<div align="center">
	<b><font face="Arial Narrow" size="5">Update Book details</font></b><p>&nbsp;</p>
<table border="0" width="43%" id="table1">
	<tr>
		<td width="130">Enter ISBN No:</td>
		<td><input type="text" name="isbn" size="20"></td>
	</tr>
	<tr>
		<td width="130">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="130">
		<input type="submit" value="Get Details" name="B1" style="float: right"></td>
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