<?php /* Smarty version 2.6.14, created on 2010-09-22 16:21:36
         compiled from user/change_password.tpl */ ?>
<p class="headingTxt">Welcome to P&G CEO Challenge.</p>
  
  <div class="questions" align="center" style="margin: 0px auto 40px; float: none; height: auto;">
<ul class="rules">
<!--
<li>You will be able to play the game when the P&G Team visits your campus. </li>
<li>In the meantime, you may use this screen to change your password to a more secure one.</li>
<li>We look forward to your participation!</li>
-->
<li>Enter your UserName, current password, and new password (twice for verification) then click on Change Password.</li>
<li>Please note that you will have access to the game only when the P&G Admin activates the game.</li>
<li>Only ONE person per team - the Team Leader - will be able to log-in to the game. Others may bring their laptops to aid in calculations.</li>
<li>Make sure your computer has the latest Adobe Flash Player. You can get it here: <a href="http://http://get.adobe.com/flashplayer/">http://http://get.adobe.com/flashplayer/</a></li>
</ul>
</div>

<div class="loginBox">
<ul class="forFields">
<form action="" method="post" id="form_id" name="form_id" onsubmit="return validate()">

<li>
<label class="fieldName">Username:</label>
<input name="username" id="username" type="text" class="fielsds"  />
</li>
<li>
<label class="fieldName">Old Password:</label>
<input name="password" id="password" type="password" class="fielsds"  />
</li>
<li>
<label class="fieldName">New Password:</label>
<input name="new_password" id="new_password" type="password" class="fielsds"  />
</li>
<li>
<label class="fieldName">Confirm Password:</label>
<input name="confirm_password" id="confirm_password" type="password" class="fielsds" />
</li>
<li class="loginButton">
<input name="" type="submit" class="Button" value="Change Password" />
</li>
</form>
<li class="loginButton">
 <form action="index.php?p=user.logout" method="post" >
<input name="" type="submit" class="Button" value="Logout" />
</form>
</li>
</ul>
<br class="spacer" />
</div>

<script>

<?php if (isset ( $_SESSION['msg'] )): ?>
	alert('<?php echo $_SESSION['msg']; ?>
');
	
<?php endif; ?>

function email_validation() {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = $id('username').value;
   if(reg.test(address) == false) {
      alert('Invalid Email Address');
	  $id('username').focus();
      return false;
   }
}

function psw_validation() {
	
	if($id('password').value == ""){
		alert("Please Enter Old Password");
		$id('password').focus();
		return false;
	}
	
	if($id('new_password').value != ""){
		if($id('password').value == $id('new_password').value){
			alert("Please Enter New Password Other Than Old Password");
			$id("new_password").focus();
			return false;
		}
	}
}
function newpsw_validation() {
	if($id('new_password').value == ""){
		alert("Please Enter New Password");
		$id('new_password').focus();
		return false;
	}
	
	if($id('password').value!=""){
		if($id('password').value == $id('new_password').value){
			alert("Please Enter New Password Other Than Old Password");
			$id("new_password").focus();
			return false;
		}
	}
	
	if($id('confirm_password').value!=""){
		if($id("new_password").value != $id("confirm_password").value){
			alert("Passwords doesn't match");
			$id('new_password').focus();
			return false;
		}
	}
}

function confirmpsw_validation() {
	if($id('confirm_password').value == ""){
		alert("Please Enter Confirm Password");
		$id('confirm_password').focus();
		return false;
	}
	
	if($id('new_password').value!=""){
		if($id("new_password").value != $id("confirm_password").value){
			alert("Passwords doesn't match");
			$id('confirm_password').focus();
			return false;
		}
	}
}

function validate() {
	if($id('username').value == ""){
		alert("Please Enter Username");
		$id('username').focus();
		return false;
	}
	
	 
	if(email_validation() == false)
		return false;
	
	if($id('password').value == "") {
		alert("Please Enter Password");
		$id('password').focus();
		return false;
	}
	
	if(psw_validation() == false)
		return false;
	
	if($id("new_password").value == "") {
		alert("Please Enter New Password");
		$id('new_password').focus();
		return false;
	}
	
	if(newpsw_validation()== false)
		return false;
	
	if($id("confirm_password").value == "") {
		alert("Please Enter Confirm Password");
		$id("confirm_password").focus();
		return false;
	}
	
	if(confirmpsw_validation() == false)
		return false;
}
</script>