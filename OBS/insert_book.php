<?php
require_once("conn_db.php");
$sql="insert into book_obs values('$_POST[isbn]','$_POST[title]','$_POST[photo]','$_POST[edition]','$_POST[author]','$_POST[pname]',$_POST[nop],'$_POST[descr]',$_POST[price],'$_POST[type]','$_POST[remark]')";
$result=mysql_query($sql,$conn) or die(mysql_error()) ;
if($result)
	header("location: book_added.php");
?>
