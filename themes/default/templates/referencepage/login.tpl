<p class="headingTxt">Welcome to Admin page</p>
<div class="loginBox">
<ul class="forFields">
<form id="from_id" action="" method="post" onsubmit="return validate()">
<li>
<label class="fieldName">Username:</label>
<input type="text" id="username" name="username" class="fielsds"  />
</li>
<li>
<label class="fieldName">Password:</label>
<input type="password" id="password" name="password" class="fielsds" />
</li>
<li class="loginButton">
<input name="" type="submit" class="Button" value="Login"  />
</li>
</form>
</ul>
<br class="spacer" />
</div>

<script>

/*
function email_validation() {

}

function psw_validation() {
	
	if($id('password').value == ""){
		alert("Please Enter Password");
		$id('password').focus();
		return false;
	}
}
*/
function validate() {
	if($id('username').value == ""){
		alert("Please Enter Username");
		$id('username').focus();
		return false;
	}
	
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   	var address = $id('username').value;
   	if(reg.test(address) == false) {
      alert('Invalid Email Address');
	  $id('username').focus();
      return false;
   	}
	
	if($id('password').value == "") {
		alert("Please Enter Password");
		$id('password').focus();
		return false;
	}
}
</script>
<script>
	{{ if isset($smarty.session.msg) }}
		alert('{{$smarty.session.msg}}');
	{{ /if }}
</script>