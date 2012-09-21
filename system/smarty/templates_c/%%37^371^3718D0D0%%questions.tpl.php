<?php /* Smarty version 2.6.14, created on 2010-09-26 09:06:04
         compiled from admin/questions.tpl */ ?>
<div id="rounds">
  <p class="roundsHead"><?php echo $_SESSION['campus_name']; ?>
</p>
<ul class="roundBtns">
<li><a href="#" <?php if ($this->_tpl_vars['round_id'] == 1): ?>class="active"<?php endif; ?>>Round 1</a></li>
<li><a href="#" <?php if ($this->_tpl_vars['round_id'] == 2): ?>class="active"<?php endif; ?>>Round 2</a></li>
<li><a href="#" <?php if ($this->_tpl_vars['round_id'] == 3): ?>class="active"<?php endif; ?>>Round 3</a></li>
<li><a href="#" <?php if ($this->_tpl_vars['round_id'] == 4): ?>class="active"<?php endif; ?>>Round 4</a></li>
<li><a href="#" <?php if ($this->_tpl_vars['round_id'] == 5): ?>class="active"<?php endif; ?>>Round 5</a></li>
<li><a href="#" <?php if ($this->_tpl_vars['round_id'] == 6): ?>class="active"<?php endif; ?>>Round 6</a></li>
</ul>
</div>

<!--

<div class="centerColumn">
<p class="headingTxt2">Questions:</p>
<div class="questions">
<ul class="test">
<li class="testQuestion">Q1. Which product will you launch skjkdfj ;sslkdjflksdjflksdjf:</li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<br class="spacer" />
<br />
<li class="testQuestion">Q2. Which product will you launch skjkdfj ;sslkdjflksdjflksdjf:</li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
</ul>
</div>
</div>

-->
<div class="centerColumn">
<p class="headingTxt2">Round <?php echo $this->_tpl_vars['round_id']; ?>
: Questions</p>
<?php if ($this->_tpl_vars['round_id'] == 1): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'round1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['round_id'] == 2): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'round2.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['round_id'] == 3): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'round3.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['round_id'] == 4): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'round4.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['round_id'] == 5): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'round5.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'round6.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
</div>

<div class="actions">
<div class="counter">
<p class="time" id="display_time" > 
	<img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" />&nbsp;
	<img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" />&nbsp; :&nbsp;
	<img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" />&nbsp;
	<img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" />&nbsp;
	
</p>
<p class="timeLeft">MINS LEFT</p>
</div>

<div class="middleButtons">

<br />
<br />
<br />

</div>


<div class="bottomButtons">

<form id="endround_form_id" action="index.php?p=admin.mainscreen" method="post" onsubmit="return delete_cookie('time_left')" >
<input type="hidden" value="<?php echo $this->_tpl_vars['round_id']; ?>
" name="round_id" />
<input name="" type="submit" class="Button" value="End Round" />
</form>
<!--
<br />
<form id ="back_form_id" action="index.php?p=admin.mainscreen" method="post"  onsubmit="return delete_cookie('time_left')">
<input type="hidden" value="back" name="action_type"  />
<input type="hidden" value="<?php echo $this->_tpl_vars['round_id']; ?>
" name="round_id" />
<input name="" type="submit" class="Button" value="Back to Mainscreen" />
</form>
-->
<br />

<form action="index.php?p=admin.logout" method="post" >
<input name="" type="submit" class="Button" value="Logout" />
</form>


</div>
</div>

<script>

time = '<?php echo $this->_tpl_vars['time']; ?>
';
var t = time.split(":");
var sec = getCookie('time_left');
//alert("sec "+sec);
//alert("time: "+time);
//alert("t : "+t);
//alert("parseInt: "+t[0]%10+"  "+t[1]%10);

if(isNaN(sec) || sec == '' || sec <= 0 ){
	if(t[0]/10<1)
		sec = parseInt(t[0]%10)*60;
	else 
		sec = parseInt(t[0])*60;
	
	if(t[1]/10<1)
		sec = sec+parseInt(t[1]%10);
	else
		sec = sec+parseInt(t[1]);
	//sec = parseInt(t[0])*60+parseInt(t[1]);
}

//alert("sec: "+ sec);
	t[0] = sec/60;
	t[1] = sec%60;


var milli_sec = sec*1000;

//alert(milli_sec);
setTimeout('$id(\'endround_form_id\').submit();',milli_sec);


//alert("<img scr='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[0]/10)+".png' width='19' height='33' >");

$id("display_time").innerHTML = "<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[0]/10)+".png' width='19' height='33' >&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[0]%10)+".png' width='19' height='33' >&nbsp;:&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[1]/10)+".png' width='19' height='33' >&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[1]%10)+".png' width='19' height='33' >";

setInterval('clock()',1000);

function clock(){
	
	sec = sec - 1;
	t[0] = sec/60;
	t[1] = sec%60;
	
	$id("display_time").innerHTML = "<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[0]/10)+".png' width='19' height='33' >&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[0]%10)+".png' width='19' height='33' >&nbsp;:&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[1]/10)+".png' width='19' height='33' >&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[1]%10)+".png' width='19' height='33' >";
}
function setCookie(c_name,value,expiredays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate()+expiredays);
	document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toUTCString());
}
function getCookie(c_name){
	if (document.cookie.length>0){
		c_start=document.cookie.indexOf(c_name + "=");
		if (c_start!=-1){
			c_start=c_start + c_name.length+1;
			c_end=document.cookie.indexOf(";",c_start);
			if (c_end==-1) 
				c_end=document.cookie.length;
			return unescape(document.cookie.substring(c_start,c_end));
		}
	}
	return "";
}
function delete_cookie ( cookie_name )
{
  //alert(cookie_name);
  var cookie_date = new Date ( );  // current date & time
  cookie_date.setTime ( cookie_date.getTime() - 1 );
  document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
  //alert(document.cookie);
  sec = 0;
  return true;
}

function selected_answer(round_id,choice){

}

window.onunload = function(){
	setCookie('time_left', sec, 365);
}
</script>