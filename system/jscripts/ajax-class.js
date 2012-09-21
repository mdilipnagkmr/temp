function ConnectToServer(url,content,custom_function)
{    
	
	try {
		  this.objectActivex = new ActiveXObject("Msxml2.XMLHTTP");
		}
		 catch (e) 
		{
			try {
				this.objectActivex = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e2) 
				{
				this.objectActivex = false;
				}	
		}
	if(!this.objectActivex && typeof XMLHttpRequest != 'undefined')
	{
	  this.objectActivex = new XMLHttpRequest();
	}	
	this.url=url;
	this.content=content;
	this.goAndDo=xgoAndDo;
	this.display=responseDisplay;
	if(ConnectToServer.arguments.length<=2)
	{
		this.x_custom_function='';
	}
	else
	{
		this.x_custom_function=custom_function;
	}
}

function xgoAndDo()
{
	if(document.getElementById('ajax_wheel'))
	document.getElementById('ajax_wheel').style.display= '';

	try
	{
	this.objectActivex.open("GET",this.url,true);
	}
	catch(e)
	{
	alert(e.description)	
	}
	var x=this;

	this.objectActivex.onreadystatechange = function(){x.display()};
	this.objectActivex.send(null);
	//alert(this.content);
}
function responseDisplay()
{
	//alert(this.content);
	if(this.objectActivex.readyState==4)
	{
		var httpStatus;
		try 
		 { 	if(this.objectActivex.status !== 'undefined' && this.objectActivex.status != 0)
			{    httpStatus = this.objectActivex.status;                } 
			else
			{  httpStatus = 13030;} //some custom code especially for some mozilla browsers } 
		 } 
		 catch(e){ httpStatus = 13030; } //some custom code especially for some mozilla browsers   } 
		if(httpStatus==200)
		{
			var response=this.objectActivex.responseText;
			//alert(response);
			if(this.content!='')
			{
				try	{ document.getElementById(this.content).innerHTML=response;	}catch(e){};
			}
			if(typeof this.x_custom_function!='undefined' && this.x_custom_function!='' )
			{
				this.x_custom_function(response);
			}
			if(document.getElementById('ajax_wheel'))
				document.getElementById('ajax_wheel').style.display = 'none';
		}
	}
}
