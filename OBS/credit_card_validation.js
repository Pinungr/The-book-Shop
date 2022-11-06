function chkcno(cno)  
{   
	var cno_len = cno.value.length;  
	if (cno_len == 0)  
	{  
		alert("Please enter credit card number");  
		cno.focus();  
		return false;  
	}  
	return true;  
}  
function chkuname(uname)  
{  
	var uname_len = uname.value.length;  
	if (uname_len == 0)  
	{  
		alert("User Id should not be empty");  
		uname.focus();  
		return false;  
	}  
	return true;  
}  
 

function chkcvv(cvv)  
{   
	var numbers = /^[0-9]+$/;  
	if(cvv.value.match(numbers))  
	{  
		return true;  
 	}  
	else  
	{  
		alert('CVV number must have numeric characters only');  
		cvv.focus();  
		return false;  
	}  
}  
function chkmon(mon)  
{  
	if(mon.value == "Default")  
	{  
		alert('Select month from the list');  
		mon.focus();  
		return false;  
	}  
	else  
	{  
		return true;  
	}  
} 
function chkyr(yr)  
{  
	if(yr.value == "Default")  
	{  
		alert('Select year from the list');  
		yy.focus();  
		return false;  
	}  
	else  
	{  
		return true;  
	}  
} 
function chktype(ctype)  
{  
	if(ctype.value == "Default")  
	{  
		alert('Select your Credit card type from the list');  
		ctype.focus();  
		return false;  
	}  
	else  
	{  
		return true;  
	}  
} 

function formValidation()  
{  
	var uname = document.creditcard.uname;  
	var ctype = document.creditcard.ctype;  
	var cno = document.creditcard.cno;  
	var mon = document.creditcard.mon;
	var yr = document.creditcard.yr;
	var cvv = document.creditcard.cvv;
	
	
	if(chkuname(uname))
	{
		if(chktype(ctype))
		{
			if(chkcno(cno))
			{
				if(chkmon(mon))
				{
					if(chkyr(yr))
					{
						if(chkcvv(cvv))
						{
							return true;
						}
					}
				}
			}
		}
	}
	return false;
}  