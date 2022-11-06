<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include("style.php");?>
</head>
<body class="thrColElsHdr">

<div id="container">
 <?php include("header.php"); ?>
 <?php include("sidebar1_admin.php"); ?>
 <?php include("sidebar2.php");?>
  <div id="mainContent">

<h3 align="center">Add Publisher</h3>
<table width="384" height="350" border="0">
  <form id="form11" name="form11" method="post" action="insert_pub.php">
  <tr>
    <td width="130">Publisher Name</td>
    <td width="244">
      <label for="textfield"></label>
      <input type="text" name="pname" id="pname" />
    </td>
  </tr>
  <tr>
    <td>Publisher Address</td>
    <td>
      <label for="textarea"></label>
      <textarea name="pubaddr" id="pubaddr"></textarea>
    </td>
  </tr>
  <tr>
    <td>Email_id</td>
    <td>
      <label for="textfield3"></label>
      <input type="text" name="pemail" id="pemail" />
    </td>
  </tr>
  
  <tr>
    <td colspan="2"><b>Contact Person</b></td>
  </tr>
  
  <tr>
    <td width="130">First Name</td>
    <td width="244">
      <label for="textfield"></label>
      <input type="text" name="fname" id="fname" />
    </td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td>
      <label for="textfield2"></label>
      <input type="text" name="lname" id="lname" />
    </td>
  </tr>
  <tr>
    <td>Cell No</td>
    <td>
      <label for="textfield4"></label>
      <input type="text" name="cellno" id="cellno" />
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Submit" /> <input type="reset" name="reset" id="reset" value="reset" />
    </form></td>
  </tr>
</table>
<br>
         
	
  <!-- end #mainContent --></div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
<?php include("footer.php"); ?>
</body>
</html>
