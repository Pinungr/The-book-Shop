/**************************** below function using for only ajax*************************************************/

	var url = "search_valid.php";
	function handleHttpResponse()
	{   
				if (http.readyState == 4)
				{
					if(http.status==200)
					{
						var results=http.responseText;
						document.getElementById('user_login').innerHTML = results;
					}
				}
      }
        function requestsearch()
		{ 
				
				 http.open("GET", url, true);
				http.onreadystatechange = handleHttpResponse;
				

				http.send(null);
        }
		
		function getHTTPObject()
		{
					var xmlhttp;

				if(window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
				else if (window.ActiveXObject)
				{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					
					if (!xmlhttp)
					{
							xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
					}
   
				}
							return xmlhttp;
		}
		
					var http = getHTTPObject();
					
/****************************************************************************************************************/
