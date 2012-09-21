<?php /* Smarty version 2.6.14, created on 2010-09-26 09:06:10
         compiled from user/questions.tpl */ ?>
<div id="rounds">
  <p class="roundsHead"><?php echo $_SESSION['campus_name']; ?>
</p>
  <ul class="roundBtns">
    <li><a href="#" onclick="$id('round_id').value='1'; delete_cookie('time_left');  $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 1): ?>class="active"<?php endif; ?>>Round 1</a></li>
    <li><a href="#" onclick="$id('round_id').value='2'; delete_cookie('time_left');  $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 2): ?>class="active"<?php endif; ?>>Round 2</a></li>
    <li><a href="#" onclick="$id('round_id').value='3'; delete_cookie('time_left');  $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 3): ?>class="active"<?php endif; ?>>Round 3</a></li>
    <li><a href="#" onclick="$id('round_id').value='4'; delete_cookie('time_left');  $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 4): ?>class="active"<?php endif; ?>>Round 4</a></li>
    <li><a href="#" onclick="$id('round_id').value='5'; delete_cookie('time_left');  $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 5): ?>class="active"<?php endif; ?>>Round 5</a></li>
    <li><a href="#" onclick="$id('round_id').value='6'; delete_cookie('time_left');  $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 6): ?>class="active"<?php endif; ?>>Round 6</a></li>
  </ul>
</div>
<form id="questions_form_id" action="index.php?p=user.questions" method="post">
  <input type="hidden" name="round_id" id="round_id" value="" />
</form>
<div id="questions" class="centerColumn" style="display:''">
  <p class="headingTxt2">Round <?php echo $_SESSION['round_id']; ?>
: Questions</p>
  <?php if ($_SESSION['round_id'] == 1): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'round1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php elseif ($_SESSION['round_id'] == 2): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'round2.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php elseif ($_SESSION['round_id'] == 3): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'round3.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php elseif ($_SESSION['round_id'] == 4): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'round4.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php elseif ($_SESSION['round_id'] == 5): ?>
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

<div id="data_files" class="centerColumn" style="display:none">
  <form id="report_form_id" action="index.php?p=data_bank" target="_blank" method="post">
  <input type="hidden" name="round_id" id="round_id" value="<?php echo $_SESSION['round_id']; ?>
" />
  <input type="hidden" name="report_id" id="report_id"  />
  </form>
  <p class="headingTxt2">Round <?php echo $_SESSION['round_id']; ?>
: Reports</p>
  <?php if ($_SESSION['round_id'] == 1): ?>
  <div class="questions">
  	<!--<a href="<?php echo $this->_tpl_vars['config']['SITE_URL']; ?>
index.php?p=data_bank" target="_blank"> pavan </a>-->
    <ul class="reports">
      <li> <a href="javascript:void(0);" onclick="$id('report_id').value='1'; $id('report_form_id').submit();" >Report 1</a>
        <p class="smallTxt">Landscape Assessment - India BabyCare</p>
      </li>

      <li> <a href="javascript:void(0);" onclick="$id('report_id').value='3'; $id('report_form_id').submit();" >Report 3</a>
        <p class="smallTxt">Landscape Assessment - India Laundry</p>
      </li>

      <li> <a href="javascript:void(0);" onclick="$id('report_id').value='5'; $id('report_form_id').submit();" >Report 5</a>
        <p class="smallTxt">Launch Considerations</p>
      </li>
    </ul>
    <ul class="reports">
	  <li> <a href="javascript:void(0);" onclick="$id('report_id').value='2'; $id('report_form_id').submit();" >Report 2</a>
        <p class="smallTxt">Landscape Assessment - India HairCare</p>
      </li>
	  <li> <a href="javascript:void(0);" onclick="$id('report_id').value='4'; $id('report_form_id').submit();" >Report 4</a>
        <p class="smallTxt">Landscape Assessment - India SkinCare</p>
      </li>
      <li> <a href="javascript:void(0);" onclick="$id('report_id').value='6'; $id('report_form_id').submit();" >Report 6</a>
        <p class="smallTxt">Macroeconomic Indicators & Other Useful Data</p>
      </li>
    </ul>
  </div>
  <?php elseif ($_SESSION['round_id'] == 2): ?>
  <div class="questions">
    <ul class="reports">
      <li> <a href="javascript:void(0);" onclick="$id('report_id').value='1'; $id('report_form_id').submit();" >Report 1</a>
        <p class="smallTxt">Data for Target Segment Decision</p>
      </li>
    </ul>
	 <ul class="reports">
	  <li> <a href="javascript:void(0);" onclick="$id('report_id').value='2'; $id('report_form_id').submit();" >Report 2</a>
        <p class="smallTxt">Target Segment Profiles</p>
      </li>
	 </ul>
  </div>
  <?php elseif ($_SESSION['round_id'] == 3): ?>
  <div class="questions">
    <ul class="reports">
      <li> <a href="javascript:void(0);" onclick="$id('report_id').value='1'; $id('report_form_id').submit();" >Report 1</a>
        <p class="smallTxt">Focus Group Discussion Summary Report</p>
      </li>
    </ul>
	<ul class="reports">
	  <li> <a href="javascript:void(0);" onclick="$id('report_id').value='2'; $id('report_form_id').submit();" >Report 2</a>
        <p class="smallTxt">Survey Report</p>
      </li>
	</ul>
  </div>
   <?php elseif ($_SESSION['round_id'] == 4): ?>
  <div class="questions">
    <ul class="reports">
      <li> <a href="javascript:void(0);" onclick="$id('report_id').value='1'; $id('report_form_id').submit();" >Report 1</a>
        <p class="smallTxt">Plant Location Considerations</p>
      </li>
    </ul>
	 <ul class="reports">
	  <li> <a href="javascript:void(0);" onclick="$id('report_id').value='2'; $id('report_form_id').submit();" >Report 2</a>
        <p class="smallTxt">Procurement & Logistics Costs</p>
      </li>
	 </ul>
  </div>
  <?php elseif ($_SESSION['round_id'] == 5): ?>
  <div class="questions">
    <ul class="reports">
      <li> <a href="javascript:void(0);" onclick="$id('report_id').value='1'; $id('report_form_id').submit();" >Report 1</a>
        <p class="smallTxt">Qualification Report for Ad Copies</p>
      </li>
    </ul>
  </div>
  <?php else: ?>
  <div class="questions">
    <ul class="reports">
      <li> <a href="javascript:void(0);" onclick="$id('report_id').value='1'; $id('report_form_id').submit();" >Report 1</a>
        <p class="smallTxt">Cost & Reach of Media Touchpoints</p>
      </li>
    </ul>
  </div>
  <?php endif; ?> 
</div>
<div class="actions">
  <div class="counter">
    <p class="time" id="display_time"><img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png' width='19' height='33' >&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png' width='19' height='33' >&nbsp;:&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png' width='19' height='33' >&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png' width='19' height='33' ></p>
    <p class="timeLeft">MINS LEFT</p>
  </div>
  <div class="middleButtons">
    <input name="" id="question_btn" type="button" class="blueBigButton" value="Questions" onclick="return questions()" />
    <br />
    <input name="" id="databank_btn" type="button" class="silverBigButton" value="Data Bank"  onclick="return datafiles()"/>
    <br/>
    <?php if ($_SESSION['member_type'] == 'Leader'): ?>
    <input name="submit_answer" type="button" onclick="submitButtonClicked();" class="Button" value="Submit Answer" />
    <?php endif; ?>
    <script>
	function submitButtonClicked(){
		delete_cookie('time_left');
		$id('rounds_form_id').submit();
	}
</script>
    <br />
    <input name="" type="button" class="Button" onclick="back_to_mainscreen()" value="Back to Mainscreen" />
    <br/>
    <form action="index.php?p=user.logout" method="post" onsubmit = "return delete_cookie('time_left')">
      <input name="" type="submit" class="Button" value="Logout" />
    </form>
  </div>
</div>
<script>
function simplePreload()

{

var args = simplePreload.arguments;

document.imageArray = new Array(args.length);

for(var i=0; i<args.length; i++)

{

document.imageArray[i] = new Image;

document.imageArray[i].src = args[i];

}

}

//simplePreload( '<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png', '<?php echo $this->_tpl_vars['themePath']; ?>
images/1.png', '<?php echo $this->_tpl_vars['themePath']; ?>
images/2.png', '<?php echo $this->_tpl_vars['themePath']; ?>
images/3.png', '<?php echo $this->_tpl_vars['themePath']; ?>
images/4.png', '<?php echo $this->_tpl_vars['themePath']; ?>
images/5.png', '<?php echo $this->_tpl_vars['themePath']; ?>
images/6.png', '<?php echo $this->_tpl_vars['themePath']; ?>
images/7.png', '<?php echo $this->_tpl_vars['themePath']; ?>
images/8.png', '<?php echo $this->_tpl_vars['themePath']; ?>
images/9.png' );
//<?php echo $this->_tpl_vars['themePath']; ?>
/Reports/round1/Landscape Assessment - India BabyCare.pdf

var time_diff = '<?php echo $this->_tpl_vars['time_diff']; ?>
';
var round_time = '<?php echo $this->_tpl_vars['round_time']; ?>
';

//alert("time_diff: "+time_diff+" "+round_time);

//var td = time_diff.split(":");
//var sec_diff = parseInt(td[0])*60*60 + parseInt(td[1])*60 + parseInt(td[2]);

var sec_diff = parseInt(time_diff);

var t = round_time.split(":");


var sec = getCookie('time_left');

//alert("sec "+sec);
if(isNaN(sec) || sec == '' || sec <= 0 ){
//alert("t "+t);
	if(t[0]/10<1)
		sec = parseInt(t[0]%10)*60;
	else 
		sec = parseInt(t[0])*60;
	
	if(t[1]/10<1)
		sec = sec+parseInt(t[1]%10);
	else
		sec = sec+parseInt(t[1]);
	//sec = parseInt(t[0])*60+parseInt(t[1]);
} else 
	sec_diff = 0;
	
//alert(sec);
//var sec = parseInt(t[0])*60 + parseInt(t[1]); 

//alert("sec,sec_diff: "+sec+"  "+sec_diff);

if(sec >= sec_diff){
	sec = sec-sec_diff;
	
	var millisec = sec*1000;
	setTimeout('alert(\'Round Completed.\');back_to_mainscreen()',millisec);
	
	t[0] = sec/60;
	t[1] = sec%60;
	
	$id("display_time").innerHTML = "<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[0]/10)+".png' width='19' height='33' >&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[0]%10)+".png' width='19' height='33' >&nbsp;:&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[1]/10)+".png' width='19' height='33' >&nbsp;<img src='<?php echo $this->_tpl_vars['themePath']; ?>
images/"+parseInt(t[1]%10)+".png' width='19' height='33' >";
	
	setInterval('clock()',1000);
	setCookie('time_left', sec, 365);
	
} else {
	alert('Round Completed.');
	back_to_mainscreen();
}

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



function  back_to_mainscreen(){
	delete_cookie('time_left');
	window.location = "index.php?p=user.round_details";
}

function datafiles(){
	
	//$id("databank_form_id").submit();
	$id("questions").style.display="none";
	$id("data_files").style.display="";
	$id("question_btn").className = "silverBigButton";
	$id("databank_btn").className = "blueBigButton";
}

function questions(){
	$id("data_files").style.display="none";
	$id("questions").style.display="";
	$id("question_btn").className = "blueBigButton";
	$id("databank_btn").className = "silverBigButton";
	
}

function selected_answer(round_id,choice){
	//alert(round_id+"   "+choice);
	if(round_id == 1){
		$id('first_option').value = choice;
	} else if(round_id == 2) {
		$id("second_option").value = choice;
	} else if(round_id == 3) {
		$id("third_option").value = choice;
	} else 
		$id("fourth_option").value = choice;
}
// set cookie
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
window.onunload = function(){
	setCookie('time_left', sec, 365);
}

// simplePreload( '01.gif', '02.gif' );


</script>