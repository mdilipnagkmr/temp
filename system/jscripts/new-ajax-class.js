// JavaScript Document
function AjaxRequest() 
{
	this.conn = null;
	this.data = '';
	this.method = null;	
	this.url = null;
	this.sync = true;
	this.ttl = 10;
	this.timer = null;
	this.timeoutHandler = null;
	this.success = function(){};	
	this.failure = function(){alert("Unable to connect to the server: Please try again.");};
	try 
	{
		this.conn = new XMLHttpRequest();
	}
	catch(e)
	{
		try 
		{
			this.conn=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e)
		{
			try 
			{
				this.conn = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e) 
			{
				alert("Your browser does not support AJAX!");
				return false;
			}
		}
	}
}

AjaxRequest.prototype.setConfig = function(config) 
{
	this.config = config;
	if(typeof this.config.sync != "undefined")
		this.sync = this.config.sync;
	if(typeof this.config.url != "undefined")
		this.url = this.config.url;
	if(typeof this.config.success != "undefined")
		this.success = this.config.success;
		
	if(typeof this.config.failure != "undefined")
		this.failure = this.config.failure;
	if(typeof this.config.data != "undefined")
		for(key in this.config.data)
		{
			this.data += key+"="+escape(this.config.data[key])+"&";
		}
}

AjaxRequest.prototype.get = function(config) {
	this.method = 'GET';
	this.sendRequest(config);
}

AjaxRequest.prototype.post = function(config) {
	this.method = 'POST';
	this.sendRequest(config);
}
AjaxRequest.prototype.sendRequest = function(config) {
	this.setConfig(config);
	//alert(this.sync);
	this.conn.open(this.method,this.url,this.sync);
	this.conn.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	var x = this;
	if(this.sync) {
		this.conn.onreadystatechange=function() { 
			if (x.conn.readyState == 4) {
				x.processResponse();
			}
		}
	}
	this.startTimer();
	this.conn.send(this.data);
	if(!this.sync)
		this.processResponse();
}

AjaxRequest.prototype.processResponse = function(thisObj) {
	this.clearTimeout();
	try {  
		if(this.conn.status == 200) {  
			this.success(this.conn);
		} else {
			this.failure(this.conn);
		}
	}catch(e) {
		 this.failure(this.conn);
	}  
}

AjaxRequest.prototype.clearTimeout = function() {
	clearTimeout(this.timer);
	}
AjaxRequest.prototype.startTimer = function() {
	 this.timer = setTimeout(this.handleTimeout, (this.ttl*1000));  
}
AjaxRequest.prototype.handleTimeout = function() {
	try
	{
	    this.timeout = true;
	    this.conn.abort();	    
	    alert("Connection problems: Please try again.");
		if(this.timeoutHandler)
			this.timeoutHandler();
	}
	catch (e) 
	{
		this.failure(this.conn);
	}
}
