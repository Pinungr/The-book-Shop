browserName = navigator.appName;
browserVer = parseInt(navigator.appVersion);

condition = !(( (browserName.indexOf("Explorer") >=0 ) && (browserVer < 4) ) ||  ((browserName.indexOf("Netscape") >=0 ) && (browserVer < 2) ) ) ; 

if (condition == true  )
    CanAnimate = true;
else
    CanAnimate = false;

function openchild(thisurl, v_width, v_height,subwindow){
    if (v_width <= 0)   {
        v_width='500';
    }
    if (v_height <= 0)   {
        v_height='500';
    }
	if (subwindow='')
	{
		subwindow = 'subwindow';
	}
    if ( CanAnimate ){ 
        msgWindow=window.open( '' ,subwindow,'left=0,top=0,toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=' + v_width + ',height=' + v_height);
        msgWindow.focus();
        msgWindow.location.href = thisurl;
    }
    else {
        msgWindow=window.open( thisurl,subwindow,'left=0,top=0,toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=' + v_width + ',height=' + v_height);
    } 
}

function openchild1(thisurl){
if ( CanAnimate ){ 
        msgWindow=window.open( '' ,'subwindow','toolbar=no,location=no,directories=no,status=yes,scrollbars=no,menubar=no,resizable=yes,width=355,height=390,top=10');
        msgWindow.focus();
        msgWindow.location.href = thisurl;
}
else {
        msgWindow=window.open( thisurl,'subwindow','toolbar=no,location=no,directories=no,status=yes,scrollbars=no,menubar=no,resizable=yes,width=355,height=390,top=10');
}       
}

function openchild2(thisurl){
if ( CanAnimate ){ 
        msgWindow=window.open( '' ,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=500,height=450,top=10');
        msgWindow.focus();
        msgWindow.location.href = thisurl;
}
else {
        msgWindow=window.open( thisurl,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=500,height=450,top=10');
}       
}


function openchild4(thisurl){
if ( CanAnimate ){ 
        msgWindow=window.open( '' ,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=695,height=920,top=10');
        msgWindow.focus();
        msgWindow.location.href = thisurl;
}
else {
        msgWindow=window.open( thisurl,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=695,height=920,top=10');
}       
}

function openchild5(thisurl){
if ( CanAnimate ){ 
        msgWindow=window.open( '' ,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=500,height=920,top=10');
        msgWindow.focus();
        msgWindow.location.href = thisurl;
}
else {
        msgWindow=window.open( thisurl,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=695,height=920,top=10');
}       
}

function openchild6(thisurl){
if ( CanAnimate ){ 
        msgWindow=window.open( '' ,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=850,height=550,top=0');
        msgWindow.focus();
        msgWindow.location.href = thisurl;
}
else {
        msgWindow=window.open( thisurl,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=850,height=550,top=0');
}       
}
function openchild7(thisurl){
if ( CanAnimate ){ 
        msgWindow=window.open( '' ,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=680,height=700,top=0');
        msgWindow.focus();
        msgWindow.location.href = thisurl;
}
else {
        msgWindow=window.open( thisurl,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=680,height=700,top=0');
}       
}


function check_advanced_search(kw)  {
  error = 0;
  if (kw.length < 3) {
    error_message = "Please enter atleast 3 characters for search";
    error = 1;
  }

  if (error == 1) {
    alert(error_message);
    return false;
  } else {
    return true;
  }
}

function goto_url(thisurl) {
	location.href = thisurl;
}

function openchild3(thisurl)
{
	if ( CanAnimate )
	{ 
        msgWindow=window.open( '' ,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=520,height=375,top=10');
        msgWindow.focus();
        msgWindow.location.href = thisurl;
	}
	else 
	{
        msgWindow=window.open( thisurl,'childwin','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=520,height=375,top=10');
	}       
}
//-->


function check_login_form() {
  var emailaddress = document.login.email_address.value;
  var password = document.login.password.value;

  if (emailaddress == "" || emailaddress.length < 6) {
    error_message = "* The 'E-Mail Address' must have atleast 6 characters.\n";
    alert(error_message);
    document.login.email_address.focus();
    return false;
  }

  if ((password == "" || password.length < 5)) {
    error_message = "* The 'Password' must have atleast 5 charactersaa.\n";
    alert(error_message);
    document.login.password.focus();
    return false;
  }

  // code to check valid email-id
  if (emailaddress.length != 0) { 
	if(emailaddress.indexOf("@") == -1) {
	  alert("Invalid E-Mail! Kindly enter correct E-mail address.");
      document.login.email_address.focus();
	  return false;
	}    
   	validarr = emailaddress.split("@");
   
   	if(validarr[0].length==0) {
   	  alert("Invalid E-Mail! Kindly enter the correct E-mail address.");
      document.login.email_address.focus();
   	  return false;
   	}
  	if(validarr[1].indexOf("@") >=0) {
   	  alert("Invalid E-Mail Format! Kindly enter the correct E-mail address.");
      document.login.email_address.focus();
   	  return false;
   	}
   	if(validarr[1].length==0) {
   	  alert("Invalid E-Mail! Kindly enter the correct E-mail address.");
      document.login.email_address.focus();
   	  return false;
   	}
   	if(validarr[1].length != 0) { 
      if(validarr[1].indexOf(".") == -1) {
  		alert("Invalid E-Mail Format! Kindly enter the correct E-mail address.");
        document.login.email_address.focus();
   		return false;
 	  }
      validemail = validarr[1].split(".");
      if(validemail[0].length==0) { 
        alert("Invalid E-Mail! Kindly enter the correct E-mail address.");
        document.login.email_address.focus();
       	return false;
      }
      if(validemail[1].length==0) {
        alert("Invalid E-Mail! Kindly enter the correct E-mail address.");
        document.login.email_address.focus();
       	return false;
	  }
    }   // end of of validemail
  } // end of valid email-id check
}

function check_cancel()
{
	var a=confirm("Are you sure you want to cancel this order?");
		if (a) {
			return true;
		}
		else {
			return false;
		}
}