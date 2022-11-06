<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Payment Online</title>
<?php include("style.php");?>
</head>
<body class="thrColElsHdr">

<div id="container">
 <?php include("header.php"); ?>
 <?php include("sidebar1_user.php"); ?>
 <?php include("sidebar2.php");?>
  <div id="mainContent">

<h3 align="center">Confirm Address</h3>
<table width="384" height="250" border="0">
  <form id="form11" name="form11" method="post" action="credit_card_data.php">
  <tr>
    <td width="130">Full Name</td>
    <td width="244">
      <label for="textfield"></label>
      <?php
	  $disp="
      <input type=\"text\" name=\"fname\" id=\"fname\" value=\"$_POST[fname]\" />
    </td>
  </tr>
  <tr>
    <td>Address</td>
    <td>
      <label for=\"textarea\"></label>
      <textarea name=\"addr\" id=\"addr\">$_POST[addr]</textarea>
    </td>
  </tr>
  <tr>
    <td>Email_id</td>
    <td>
      <label for=\"textfield3\"></label>
      <input type=\"text\" name=\"email\" id=\"email\" value=\"$_POST[email]\"/>
    </td>
  </tr>
 
  <tr>
    <td>Cell No</td>
    <td>
      <label for=\"textfield4\"></label>
      <input type=\"text\" name=\"cellno\" id=\"cellno\" value=\"$_POST[cellno]\"/>
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type=\"submit\" name=\"button\" id=\"button\" value=\"Make Payment\" /> <input type=\"reset\" name=\"reset\" id=\"reset\" value=\"reset\" />";
	  print $disp;
	  ?>
    </form></td>
  </tr>
</table>
<br>
         
	
  <!-- end #mainContent --></div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
<?php include("footer.php"); ?>
</body>
</html>
