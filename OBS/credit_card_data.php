<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Payment Online</title>
<script src="credit_card_validation.js"></script>
<?php include("style.php");?>
</head>
<body class="thrColElsHdr" onload="document.creditcard.uname.focus();">

<div id="container">
 <?php include("header.php"); ?>
 <?php include("sidebar1_user.php"); ?>
 <?php include("sidebar2.php");?>
   <div id="mainContent">
    <form id="form1" name="creditcard" method="post" action="payment_done.php" onSubmit="return formValidation();">
    <table width="366" border="0" align="center" cellspacing="15">
      
         <tr>
          <td>username</td>
          <td><input name="uname" type="text" id="textfield" maxlength="16" /></td>
        </tr><tr>
          <td colspan="2"><strong>Please enter your billing information</strong></td>
        </tr>
        <tr>
          <td width="134">Card type</td>
          <td width="226"><select name="ctype" size="1" id="ctype">
            <option value="Default">Choose Card Type</option>
            <option>VISA Card</option>
            <option>Master Card</option>
            <option>Debit Card</option>
          </select></td>
      </tr>
        <tr>
          <td>Card number</td>
          <td><input name="cno" type="text" id="cno" maxlength="16" /></td>
        </tr>
        <tr>
          <td>Expires on</td>
          <td><select name="mon" size="1" id="mon">
            <option value="Default" selected="selected">Month</option>
            <option>Jan</option>
            <option>Feb</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>Aug</option>
            <option>Sep</option>
            <option>Oct</option>
            <option>Nov</option>
            <option>Dec</option>
            <option>Month</option>
          </select>
            <select name="yr" size="1" id="yr">
              <option value="Default" selected="selected">year</option>
              <option>2012</option>
              <option>2013</option>
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              <option>2019</option>
              <option>2020</option>
              <option>Year</option>
            </select>          </td>
        </tr>
        <tr>
          <td>CVV</td>
          <td><input name="cvv" type="password" id="cvv" maxlength="3" /></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="button" id="button" value="Submit" />
          </div></td>
        </tr>
      </table>
      </form>
  </div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
<?php include("footer.php"); ?>
</body>
</html>
