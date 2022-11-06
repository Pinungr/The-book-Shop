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
<?php include("sidebar1.php");?>
<?php include("sidebar2.php");?>  
<div id="mainContent">
    <p>
<?php

	$ans="";
	$pass="";
	// open the connection
require_once("conn_db.php");
	// create the SQL statement
	$sql = "SELECT ans,password FROM user_obs where uname='$_POST[uname]'";
	// execute the SQL statement

	$result = mysql_query($sql, $conn) or die(mysql_error());
	//go through each row in the result set and display data
	$disp = "<h3>Your Password :</h3>";
	while ($newArray = mysql_fetch_array($result)) 
	{
		// give a name to the fields
		$ans = $newArray['ans'];
		$pass = $newArray['password'];
		if ($_POST['answer'] == $ans)
			$disp .= "<p><h4> $pass </h4></p>";
	}
	print $disp;
?>
 </p></form>
 </div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
    <p>Copyright PINAKI</p>
    <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
