<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}
.oneColLiqCtr #container {
	width: 80%;  /* this will create a container 80% of the browser width */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
}
.oneColLiqCtr #mainContent {
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
}
-->
</style></head>

<body class="oneColLiqCtr">

<div id="container">
  <div id="mainContent">
    <form id="form1" name="form1" method="post" action="">
      <table width="593" border="0" align="center" cellspacing="15">
        <tr>
          <td colspan="2"><strong>Please enter your billing information</strong></td>
        </tr>
        <tr>
          <td width="304">Card type</td>
          <td width="371"><select name="select" size="1" id="select">
            <option>Choose Card Type</option>
            <option>VISA Card</option>
            <option>Master Card</option>
            <option>Debit Card</option>
          </select>          </td>
        </tr>
        <tr>
          <td>Card number</td>
          <td><input name="textfield" type="text" id="textfield" maxlength="16" /></td>
        </tr>
        <tr>
          <td>Expires on</td>
          <td><select name="select2" size="1" id="select2">
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
            <option selected="selected">Month</option>
          </select>
            <select name="select3" size="1" id="select3">
              <option>2012</option>
              <option>2013</option>
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              <option>2019</option>
              <option>2020</option>
              <option selected="selected">Year</option>
            </select>          </td>
        </tr>
        <tr>
          <td>CVV</td>
          <td><input name="textfield2" type="password" id="textfield2" maxlength="3" /></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="button" id="button" value="Submit" />
          </div></td>
        </tr>
      </table>
    </form>
  </div>
<!-- end #container --></div>
</body>
</html>
