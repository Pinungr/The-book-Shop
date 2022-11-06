<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include("style.php");?>
<script src="registration_form_validation.js"></script>

</head>
<body class="thrColElsHdr" onload="document.registration.fname.focus();">

<div id="container">
 <?php include("header.php"); ?>
 <?php include("sidebar1.php"); ?>
 <?php include("sidebar2.php");?>
  <div id="mainContent">

<h3 align="center">Registration Form</h3>
<table width="384" height="505" border="0">
  <form id="form11" name='registration'  method="post" action="insert_user.php" onSubmit="return formValidation();">
  <tr>
    <td width="130">First Name</td>
    <td width="244">
      <label for="textfield"></label>
      <input type="text" name="fname" id="fname" />
    </td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td>
      <label for="textfield2"></label>
      <input type="text" name="lname" id="lname" />
    </td>
  </tr>
  <tr>
    <td>Email_id</td>
    <td>
      <label for="textfield3"></label>
      <input type="text" name="email" id="email" />
    </td>
  </tr>
  <tr>
    <td>Sex</td>
    <td>
      <label for="select"></label>
      <select name="sex" id="sex">
        <option value="male">male</option>
        <option value="female">female</option>
      </select>
   </td>
  </tr>
  <tr>
    <td>Maritial Status</td>
    <td>
      <label for="select2"></label>
      <select name="mstatus" id="mstatus">
        <option value="married">married</option>
        <option value="unmarried">unmarried</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Date of Birth</td>
    <td>
      <label for="select3"></label>
      <label for="select4"></label>
      <select name="dobd" id="dobd">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
		<option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
		<option value="21">21</option>
        <option value="22">22</option>
		<option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>                                          
        <option value="31">31</option>                                                
      </select>
      <select name="dobm" id="dobm">
        <option value="jan">jan</option>
        <option value="feb">feb</option>
        <option value="mar">mar</option>
        <option value="apr">apr</option>
        <option value="may">may</option>
        <option value="jun">jun</option>
        <option value="july">july</option>
        <option value="aug">aug</option>
        <option value="sept">sept</option>
        <option value="oct">oct</option>
        <option value="nov">nov</option>
        <option value="dec">dec</option>
      </select>
<label for="select5"></label>
      <select name="doby" id="doby">
      	<option>1970</option>
	<option>1971</option>
	<option>1972</option>
	<option>1973</option>
	<option>1974</option>
	<option>1975</option>
	<option>1976</option>
	<option>1977</option>
	<option>1978</option>
	<option>1979</option>
	<option>1980</option>
	<option>1981</option>
	<option>1982</option>
	<option>1983</option>
	<option>1984</option>
	<option>1985</option>
	<option>1987</option>
	<option>1986</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>
	<option>1998</option>
	<option>1999</option>
	<option>2000</option>
	<option>2001</option>
	<option>2002</option>
	<option>2003</option>
	<option>2004</option>
	<option>2005</option>
	<option>2006</option>
	<option>2007</option>
	<option>2008</option>
	<option>2009</option>
	<option>2010</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Present Address</td>
    <td>
      <label for="textarea"></label>
      <textarea name="padd" id="padd"></textarea>
    </td>
  </tr>
  <tr>
    <td>Cell No</td>
    <td>
      <label for="textfield4"></label>
      <input type="text" name="mob" id="mob" />
    </td>
  </tr>
  <tr>
    <td>Username</td>
    <td>
      <label for="textfield5"></label>
      <input type="text" name="uname" id="username" />
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td>
      <label for="textfield6"></label>
      <input type="password" name="password" id="password" />
    </td>
  </tr>
      <tr>
      <td>Secret Question</td>
      <td><label>
      <select name="secr" id="secr">
        <option>Enter the secret question</option>
        <option value="1">Your mother's maiden name?</option>
        <option value="2">Your favourite sports? </option>
        <option value="3">Your pet's name? </option>
        <option value="4">Your favourite teacher in school?</option>
      </select>
      </label></td>
    </tr>
    <tr>
      <td>Answer</td>
      <td><label>
        <input type="text" name="ans" id="ans" />
      </label></td>
    </tr>

  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Submit" /> <input type="reset" name="reset" id="reset" value="reset" />
    </form></td>
  </tr>
</table>
<br>
         
	
  <!-- end #mainContent --></div>
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
<?php include("footer.php"); ?>
</body>
</html>
