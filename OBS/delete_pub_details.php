<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Publisher Details</title>
<?php include("style.php");?>
</head>
<body class="thrColElsHdr">

<div id="container">
 <?php include("header.php");?>
 <?php include("sidebar1_admin.php");?>
 <?php include("sidebar2.php");?>
 
  <div id="mainContent">

<form name="update_pub" method="POST"  action="update_pub_db.php" >
<div align="center">
<b><font face="Arial Narrow" size="5"><br /><br />Publisher Details</font></b><p>&nbsp;</p>
<table border="0" width="43%" id="table1">

	<?php
		require_once("conn_db.php");

		$sql="select * from publisher_obs where pname= '$_POST[pname]'";
		$result=mysql_query($sql,$conn) or die(mysql_error());
			
		if($arr=mysql_fetch_array($result))
		{
			$pname=$arr['pname'];
			$addr=$arr['pubaddr'];
			$email=$arr['pemail'];
			$fname=$arr['fname'];
			$lname=$arr['lname'];
			$cellno=$arr['cellno'];
		}		
		$disp="  <tr>
    <td width=\"130\">Publisher Name</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"pname\" id=\"pname\" value=\"$pname\" />
    </td>
  </tr>
  <tr>
    <td>Publisher Address</td>
    <td>
      <label for=\"textarea\"></label>
      <textarea name=\"pubaddr\" id=\"pubaddr\">$addr</textarea>
    </td>
  </tr>
  <tr>
    <td>Email_id</td>
    <td>
      <label for=\"textfield3\"></label>
      <input type=\"text\" name=\"pemail\" id=\"pemail\" value=\"$email\"/>
    </td>
  </tr>
  
  <tr>
    <td colspan=\"2\"><b>Contact Person</b></td>
  </tr>
  
  <tr>
    <td width=\"130\">First Name</td>
    <td width=\"244\">
      <label for=\"textfield\"></label>
      <input type=\"text\" name=\"fname\" id=\"fname\" value=\"$fname\"/>
    </td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td>
      <label for=\"textfield2\"></label>
      <input type=\"text\" name=\"lname\" id=\"lname\" value=\"$lname\"/>
    </td>
  </tr>
  <tr>
    <td>Cell No</td>
    <td>
      <label for=\"textfield4\"></label>
      <input type=\"text\" name=\"cellno\" id=\"cellno\" value=\"$cellno\"/>
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type=\"submit\" name=\"button\" id=\"button\" value=\"Delete\" /> 
	  <input type=\"reset\" name=\"reset\" id=\"reset\" value=\"reset\" />
    </form></td>
  </tr>";
  print $disp;
  ?>
</table>
<br>
         
	
  <!-- end #mainContent --></div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
<?php include("footer.php"); ?>
</body>
</html>
