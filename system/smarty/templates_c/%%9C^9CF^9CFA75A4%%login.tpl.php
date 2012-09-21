<?php /* Smarty version 2.6.14, created on 2010-09-17 14:38:58
         compiled from user/login.tpl */ ?>
<p class="headingTxt">Welcome to the P&G CEO Challenge.</p>



<div class="loginBox" >
<ul class="forFields">

<form action="" method="post" id="form_id" name="form_id" onsubmit="return validate()">

<li>
<label class="fieldName">Username:</label>
<input name="username" id="username" type="text" class="fielsds"  />
</li>
<li>
<label class="fieldName">Password:</label>
<input name="password" id="password" type="password" class="fielsds" />
</li>
<li class="loginButton">
<input name="" type="submit" class="Button" value="Login" />
</li>
</form>
</ul>
<br class="spacer" />
</div>

<script>

<?php if (isset ( $_SESSION['msg'] )): ?>
	alert('<?php echo $_SESSION['msg']; ?>
');
	
<?php endif; ?>

/*
function email_validation() {

}


function psw_validation() {
	
	if($id('password').value == ""){
		alert("Please Enter Password");
		$id('password').focus();
		return false;
	}
}*/

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