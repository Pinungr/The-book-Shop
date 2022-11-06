function validateit(theForm)
{
	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(theForm.email.value)))
	{
		alert("Invalid Email ID. Kindly enter the correct ID.");
		theForm.email.focus();
		return (false);
	}
}


function checkData ()
{
	if (document.form1.choice[0].checked) {
		document.form1.action = "http://www.indiamart.com/cgi/AT-napkinringssearch.cgi";
	}
	else {
	    document.form1.action = "http://www.indiamart.com/cgi/AT-india2search.cgi";
	}
	if (document.form1.search.value.length < 3){
	    alert("Enter at least three characters for search."); 
	    document.form1.search.focus();
	    return false;
	}
return true;

}


function checkData1 ()
{
	if (document.form2.search.value.length < 3){
	    alert("Enter at least three characters for search."); 
	    document.form2.search.focus();
	    return false;
	}
	else{
		return true;
	}

}

function getblank(this1)  {
	if (this1.value = "Your e-mail here") {
		this1.value = "";
	}
    return true;	
}
function convert()

{
var loc = document.location.toString();
loc = loc.substring(7,loc.length);
var idx;
idx = document.trans.langpair.selectedIndex;
if (idx<=0) 
{
alert("Please select a language.");
return false;
}
else{
window.open('http://translate.google.com/translate_c?langpair=' + document.trans.langpair.options[idx].value + "&u=" + document.location,"new_trans");
return false;
}
}

function openchild(sPicURL) { 
     window.open("popup.html?"+sPicURL, "one", "resizable=1,scrollbars=yes, width=540,height=400"); 
   }

function openchild11(URL) { 
     window.open(URL, "one", "resizable=1,scrollbars=yes, width=540,height=400"); 
   }

function check_search()
{
	if(document.search.keywords.value=="")
	{
		alert("Please enter some keyword");
		document.search.keywords.focus();
		return false;
	}
	return true;
}
function check_search()
{
	if(document.search.keywords.value=="")
	{
		alert("Please enter some keyword");
		document.search.keywords.focus();
		return false;
	}
	return true;
}

function gomore(search,filename)
{
	if(search.options[search.selectedIndex].value=="more")
	{
		window.location.href=filename;
	}
}