function chkcell(cellno)  
{   
	var numbers = /^[0-9]+$/;  
	if(cellno.value.match(numbers))  
	{  
		return true;  
 	}  
	else  
	{  
		alert('Cell phone number must have numeric characters only');  
		cellno.focus();  
		return false;  
	}  
}  
function chkaddr(addr)  
{   
	var addr_len = addr.value.length;  
	if (addr_len == 0)  
	{  
		alert("Address should not be empty");  
		addr.focus();  
		return false;  
	}  
	return true;  
}  
function chkfname(fname)  
{   
	var letters = /^[A-Za-z]+$/;  
	if(fname.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('Your name must have alphabet characters only');  
		fname.focus();  
		return false;  
	}  
} 

function chkmail(email)  
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

function formValidation()  
{  
	var fname = document.shipment.fname;  
	var addr = document.shipment.addr;  
	var email = document.shipment.email;  
	var cellno = document.shipment.cellno;
	
	if(chkfname(fname))
	{
		if(chkaddr(addr))
		{
			if(chkmail(email))
			{
				if(chkcell(cellno))
				{
					return true;
				}
			}
		}
	}
	return false;
}  