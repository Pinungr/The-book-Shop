<?php
require_once("conn_db.php");
$sql="update book_obs set title='$_POST[title]',photo='$_POST[photo]',edition='$_POST[edition]',author='$_POST[author]',pname='$_POST[pname]',nop=$_POST[nop],descr='$_POST[descr]',price=$_POST[price],type='$_POST[type]',remark='$_POST[remark]' where isbn='$_POST[isbn]'";
$result=mysql_query($sql,$conn) or die(mysql_error());
if ($result)
	header("location: book_modified.php");
?>