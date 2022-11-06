<?php
require_once("conn_db.php");
$sql="insert into addtocart values($_POST[isbnno],'$_POST[cattype]','$_POST[bookname]','$_POST[description]','$_POST[publisher_id]','$_POST[author_name]','$_POST[edition]',$_POST[bookpages],'$_POST[bookprice]','$_POST[img]')";
mysql_query($sql,$conn) or die(mysql_error());
?>
<p><font color="#CC0000" size="+3" face="Tahoma, Geneva, sans-serif">selected book is added to your cart</font></p>
<form id="form1" name="form1" method="post" action="atcshow.php">
  <input type="submit" name="button" id="button" value="show cart" />
</form>
<p>&nbsp;</p>
