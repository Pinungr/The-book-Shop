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
	$s="";
	$secr="";
	$unm="";
	// open the connection
require_once("conn_db.php");
	// create the SQL statement
	$sql = "SELECT uname,secr,ans FROM user_obs where uname='$_POST[uname]'";
	// execute the SQL statement

	$result = mysql_query($sql, $conn) or die(mysql_error());
	//go through each row in the result set and display data
	$disp = "<form method=\"post\" action=\"retrieve_password.php\">";
	while ($newArray = mysql_fetch_array($result)) 
	{
		// give a name to the fields
		$unm=$newArray['uname'];
		$s = $newArray['secr'];
		

		if ($s == "1")
			$secr="Your mother's maiden name?";
		else if($s=="2")
			$secr="Your favourite sports?";
		else if($s=="3")
			$secr="Your pet's name?";
		else
			$secr="Your favourite teacher in school?";
		//echo the results onscreen
		$disp .= "<p>User Name :<input type=\"text\" name=\"uname\" id=\"uname\" value=\"$unm\"/></p><p>Your Secret Question :<h4> $secr </h4><br> Answer : <input type=\"text\" name=\"answer\" id=\"answer\" /></p>";
	}
	print $disp;
?>
 <input type="submit" name="forpass1" id="forpass1" value="Retrieve Password" />
 </p></form>
 </div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <?php include("footer.php");?>
  <!-- end #container --></div>
</body>
</html>
