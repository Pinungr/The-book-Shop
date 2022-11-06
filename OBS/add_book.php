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

<h3 align="center">Add Book</h3>
<table width="384" height="550" border="0">
  <form id="form11" name="form11" method="post" action="insert_book.php">
  
  
  
  <tr>
    <td width="130">ISBN No:</td>
    <td width="244">
      <label for="textfield"></label>
      <input type="text" name="isbn" id="isbn" />
    </td>
  </tr>
  <tr>
    <td>Book Title</td>
    <td width="244">
      <label for="textfield"></label>
      <input type="text" name="title" id="title" />
    </td>
  </tr>
  <tr>
    <td>Image</td>
    <td width="244">
      <label for="textfield"></label>
      <input type="text" name="photo" id="photo" />
    </td>
  </tr>
  <tr>
    <td>Edition</td>
    <td width="244">
      <label for="textfield"></label>
      <input type="text" name="edition" id="edition" />
    </td>
 </tr>
  <tr>
    <td>Author</td>
    <td width="244">
      <label for="textfield"></label>
      <input type="text" name="author" id="author" />
    </td>
  </tr>
  <tr>
    <td>Publisher Name</td>
    <td width="244">
      <label for="textfield"></label>
      <input type="text" name="pname" id="pname" />
    </td>
  </tr>
  <tr>
    <td>No. of Pages</td>
    <td width="244">
      <label for="textfield"></label>
      <input type="text" name="nop" id="nop" />
    </td>
  </tr>
 <tr>
    <td>Description</td>
    <td>
     <label for="textarea"></label>
      <textarea name="descr" id="descr"></textarea>
    </td>
  </tr>
  <tr>
    <td>Price</td>
    <td>
      <label for="textfield3"></label>
      <input type="text" name="price" id="price" />
    </td>
  </tr>
  
  <tr>
    <td>Book Category</td>
    <td>
      <label for="select"></label>
        <select name="type" id="type">
        <option value="0" selected="selected">CHOOSE CATEGORY</option>
        <option value="1">ART</option>
        <option value="2">BUSINESS &amp; ECONOMICS</option>
        <option value="3">CHILDREN BOOK</option>
        <option value="4">COMPUTERS</option>
        <option value="5">DENTISTRY</option>
        <option value="6">EDUCATION</option>
        <option value="7">ENGINEERING</option>
        <option value="8">GENERAL_MAIN</option>
        <option value="9">HEALTH, FAMILY &amp; LIFESTYLE</option>
        <option value="10">HOUSE &amp; HOME</option>
        <option value="11">LAW</option>
        <option value="12">MEDICAL</option>
        <option value="13">MILITARY</option>
        <option value="14">MISC</option>
        <option value="15">NATURE</option>
        <option value="16">NURSING</option>
        <option value="17">REFERENCE</option>
        <option value="18">RELIGION</option>
        <option value="19">SCIENCE</option>
        <option value="20">SOCIAL SCIENCE</option>
        <option value="21">SPORTS</option>
        <option value="22">TECHNOLOGY</option>
        <option value="23">TRAVEL</option>
        <option value="24">VETERINARY MEDICINE</option>
		</select>
       </td>
  </tr>
  <tr>
    <td>Remarks</td>
    <td>
    <select name="remark" id="remark">
        <option value="0" selected="selected">PUT REMARK</option>
        <option value="1">NEW</option>
        <option value="2">RECOMMENDED</option>
        <option value="3">BEST SELLER</option>
        <option value="4">BEST BUY</option>
	</select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Add Book" /> <input type="reset" name="reset" id="reset" value="reset" />
    </form></td>
  </tr>
</table>
<br>
         
	
  <!-- end #mainContent --></div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
<?php include("footer.php"); ?>
</body>
</html>
