
function allLetter(fname)  
{   
	var letters = /^[A-Za-z]+$/;  
	if(fname.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('Firstname must have alphabet characters only');  
		fname.focus();  
		return false;  
	}  
} 
function allLetter(lname)  
{   
	var letters = /^[A-Za-z]+$/;  
	if(lname.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('Lastname must have alphabet characters only');  
		lname.focus();  
		return false;  
	}  
} 
function ValidateEmail(email)  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(email.value.match(mailformat))  
	{  
		return true;  
	}  
	else  
	{  
		alert("You have entered an invalid email address!");  
		email.focus();  
		return false;  
	}  
} 
function sexselect(sex)  
{  
	if(sex.value == "Default")  
	{  
		alert('Select your sex from the list');  
		sex.focus();  
		return false;  
	}  
	else  
	{  
		return true;  
	}  
} 
function mstatusselect(mstatus)  
{  
	if(mstatus.value == "Default")  
	{  
		alert('Select your marital status from the list');  
		mstatus.focus();  
		return false;  
	}  
	else  
	{  
		return true;  
	}  
} 
function dayselect(dobd)  
{  
	if(dobd.value == "Default")  
	{  
		alert('Select your date from the list');  
		dobd.focus();  
		return false;  
	}  
	else  
	{  
		return true;  
	}  
} 
function monthselect(dobm)  
{  
	if(dobm.value == "Default")  
	{  
		alert('Select your month from the list');  
		dobm.focus();  
		return false;  
	}  
	else  
	{  
		return true;  
	}  
} 
function yearselect(dobd)  
{  
	if(doby.value == "Default")  
	{  
		alert('Select your year from the list');  
		doby.focus();  
		return false;  
	}  
	else  
	{  
		return true;  
	}  
} 
function alphanumeric(padd)  
{   
	var letters = /^[0-9a-zA-Z]+$/;  
	if(padd.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('User address must have alphanumeric characters only');  
		padd.focus();  
		return false;  
	}  
} 



function allLetter(uname)  
{   
	var letters = /^[A-Za-z]+$/;  
	if(uname.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('Username must have alphabet characters only');  
		uname.focus();  
		return false;  
	}  
} 
function password_validation(password,mx,my)  
{  
	var password_len = passid.value.length;  
	if (password_len == 0 ||password_len >= my || password_len < mx)  
	{  
		alert("Password should not be empty / length be between "+mx+" to "+my);  
		password.focus();  
		return false;  
	}  
	return true;  
} 

function userid_validation(uid,mx,my)  
{  
	var uid_len = uid.value.length;  
	if (uid_len == 0 || uid_len >= my || uid_len < mx)  
	{  
		alert("User Id should not be empty / length be between "+mx+" to "+my);  
		uid.focus();  
		return false;  
	}  
	return true;  
}  
 
function allLetter(uname)  
{   
	var letters = /^[A-Za-z]+$/;  
	if(uname.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('Username must have alphabet characters only');  
		uname.focus();  
		return false;  
	}  
} 
 function questionselect(secr)  
{  
	if(secr.value == "Default")  
	{  
		alert('Select your secret question from the list');  
		secr.focus();  
		return false;  
	}  
	else  
	{  
		return true;  
	}  
} 
function alphanumeric(padd)  
{   
	var letters = /^[0-9a-zA-Z]+$/;  
	if(padd.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('User address must have alphanumeric characters only');  
		padd.focus();  
		return false;  
	}  
}

function allnumeric(umob)  
{   
	var numbers = /^[0-9]+$/;  
	if(uzip.value.match(numbers))  
	{  
		return true;  
 	}  
	else  
	{  
		alert('Cell phone number e must have numeric characters only');  
		umob.focus();  
		return false;  
	}  
}  

function formValidation()  
{  
	var fname = document.registration.fname;  
	var lname = document.registration.lname;  
	var email = document.registration.email;  
	var sex = document.registration.sex;  
	var mstatus = document.registration.mstatus;  
	var dobd = document.registration.dobd;  
	var dobm = document.registration.dobm;  
	var doby = document.registration.doby;  
	var padd = document.registration.padd;
    var mob = document.registration.mob;  
	var uname = document.registration.uname;  
	var password = document.registration.password;  
	var secr = document.registration.secr;  
	var ans = document.registration.ans;  
    var umob = document.registration.mob;  

	if(allLetter(fname))  
    {
  		 if(allLetter(lname))  
  			 {
             	if(ValidateEmail(uemail))  
					{ 
   						if(sexselect(sex))  
							{  
								if(statusselect(mstatus))  
								{  
									if(dayselect(dobd))  
									{  
										if(monthselect(dobm))  
										{  
											if(yearselect(doby))  
											{  
							 					if(alphanumeric(padd))  
												{ 
                									if(allnumeric(umob))
                                                    {
														if(allLetter(uname))  
														{  
            												if(password_validation(password,7,12))  
															{  
        														if(question(secr))  
																{  
                    												if(alphanumeric(ans))  
																	{ 
																	}  
																}   
															}  
														}   
													}  
												}  
											}  
       									 }  
   									 }
  								  }
   							 }
    					}
    				}
    			}
	return false;  
}  

