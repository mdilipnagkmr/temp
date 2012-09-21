<?php /* Smarty version 2.6.14, created on 2010-09-22 13:04:14
         compiled from user/answers.tpl */ ?>
<div id="rounds">
<p class="roundsHead"><?php echo $_SESSION['campus_name']; ?>
</p>
<ul class="roundBtns">
<li><a href="#" onclick="$id('round_id').value='1'; $id('questions_form_id').submit();" <?php if ($this->_tpl_vars['round_id'] == 1): ?>class="active"<?php endif; ?>>Round 1</a></li>
<li><a href="#" onclick="$id('round_id').value='2'; $id('questions_form_id').submit();" <?php if ($this->_tpl_vars['round_id'] == 2): ?>class="active"<?php endif; ?>>Round 2</a></li>
<li><a href="#" onclick="$id('round_id').value='3'; $id('questions_form_id').submit();" <?php if ($this->_tpl_vars['round_id'] == 3): ?>class="active"<?php endif; ?>>Round 3</a></li>
<li><a href="#" onclick="$id('round_id').value='4'; $id('questions_form_id').submit();" <?php if ($this->_tpl_vars['round_id'] == 4): ?>class="active"<?php endif; ?>>Round 4</a></li>
<li><a href="#" onclick="$id('round_id').value='5'; $id('questions_form_id').submit();" <?php if ($this->_tpl_vars['round_id'] == 5): ?>class="active"<?php endif; ?>>Round 5</a></li>
<li><a href="#" onclick="$id('round_id').value='6'; $id('questions_form_id').submit();" <?php if ($this->_tpl_vars['round_id'] == 6): ?>class="active"<?php endif; ?>>Round 6</a></li>
</ul>
</div>
<form id="questions_form_id" action="index.php?p=user.questions" method="post">
	<input type="hidden" name="round_id" id="round_id" value="" />
</form>

<!--
<div class="centerColumn">
<p class="headingTxt2">Questions:</p>
<div class="questions">
<ul class="test">
<li class="testQuestion">Q1. Which product will you launch skjkdfj ;sslkdjflksdjflksdjf:</li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj</li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" /><b>a. djfdk djkfldjfkldjfldkfj</b> </li>
<br class="spacer" />
<br />
<li class="testQuestion">Q2. Which product will you launch skjkdfj ;sslkdjflksdjflksdjf:</li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" />a. djfdk djkfldjfkldjfldkfj </li>
<li class="options"><input name="" type="radio" value="" class="radioBtn" /><b>a. djfdk djkfldjfkldjfldkfj</b> </li>
</ul>
</div>
</div>
-->

<div id="questions" class="centerColumn" style="display:''">
<p class="headingTxt2">Round <?php echo $this->_tpl_vars['round_id']; ?>
: Answers</p>
<?php if ($this->_tpl_vars['round_id'] == 1): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'answers1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['round_id'] == 2): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'answers2.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['round_id'] == 3): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'answers3.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['round_id'] == 4): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'answers4.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['round_id'] == 5): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'answers5.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'answers6.tpl', 'smarty_include_vars' => array()));
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
<p class="time" id="display_time" > 
	<img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" />
	<img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" /> :
	<img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" />
	<img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" />
	
</p>
<p class="timeLeft">MINS LEFT</p>
</div>

<div class="middleButtons">

<br />
<br />
</div>


<div class="middleButtons">

<input name="" id="question_btn" type="button" class="blueBigButton" value="Questions" onclick="return questions()" />
<br />

<input name="" id="databank_btn" type="button" class="silverBigButton" value="Data Bank"  onclick="return datafiles()"/>

<br/>
<form id ="back_form_id" action="index.php?p=user.round_details" method="post" >
<input type="hidden" value="back" name="action_type"  />
<input type="hidden" value="<?php echo $this->_tpl_vars['round_id']; ?>
" name="round_id" />
<input name="" type="submit" class="Button" value="Back to Mainscreen" />
</form>
<br/>
<form action="index.php?p=admin.logout" method="post" >
<input name="" type="submit" class="Button" value="Logout" />
</form>
</div>
</div>

<script>

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

</script>