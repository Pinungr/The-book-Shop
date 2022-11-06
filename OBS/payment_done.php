<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to PBP</title>
<script>
function close_window()
{
	window.close();
}
</script>
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
	$sql="select * from cart_obs";
	$result=mysql_query($sql,$conn) or die(mysql_error());
	while($arr=mysql_fetch_array($result))
	{
			$isbn=$arr['isbnno'];
			$sql1="insert into tran_obs values(null,'$_POST[uname]',curdate(),$isbn)";
			
			$result1=mysql_query($sql1,$conn) or die(mysql_error());
	}
	$sql="DELETE FROM cart_OBS";

	$result=mysql_query($sql,$conn) or die(mysql_error()) ;
	
	$sql="select max(tran_id) tm,curdate() cdt from tran_obs";
	$result=mysql_query($sql,$conn) or die(mysql_error());
	$arr=mysql_fetch_array($result);
	$trn=$arr['tm'];
	$cdt=$arr['cdt'];
	$dok=$trn.$cdt;
	$disp="<h3><p>Your Doket No: $dok</p></h3>";
	print $disp;
?>
    <p align="right"><img src="image/user_book.gif" alt="customer" width="112" height="138" align="right" /></p>
    <h3><p>Thank you for shopping with Us.<br />You Parcel will reach you shortly</p></h3>
  </p>
  <p align="center"><form>
    <label>
    <input type="submit" name="button" id="button" value="Please Click here for acknowledgement" onclick="close_window();" />
    </label>
  </form><br class="clearfloat" />
  </div>
	<?php include("footer.php");?>
</body>
</html>
