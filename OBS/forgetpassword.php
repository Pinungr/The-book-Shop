<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forget Password</title>
<?php include("style.php");?>
</head>
<body class="thrColElsHdr">

<div id="container">
 <?php include("header.php"); ?>
 <?php include("sidebar1.php"); ?>
 <?php include("sidebar2.php");?>
  <div id="mainContent">

<form method="post" action="forget_password.php">
<p>&nbsp;</p>
<p>&nbsp;</p>
<table border="0" align="center">
  <tr>
    <td>User Name</td>
    <td><label>
      <input type="text" name="uname" id="uname" />
    </label></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="forpass" id="forpass" value="Forget Password" />
      <input type="reset" name="reset" id="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
    <p>Copyright Pinaki</p>
    <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
