<?php /* Smarty version 2.6.14, created on 2010-09-24 14:14:24
         compiled from user/round_details.tpl */ ?>

<div id="rounds">
 <p class="roundsHead"><?php echo $_SESSION['campus_name']; ?>
</p>
<ul class="roundBtns">

<li><a href="#" onclick="$id('round_id').value='1'; $id('questions_form_id').submit();"  <?php if ($_SESSION['round_id'] == 1): ?>class="active"<?php endif; ?>>Round 1</a></li>
<li><a href="#" onclick="$id('round_id').value='2'; $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 2): ?>class="active"<?php endif; ?>>Round 2</a></li>
<li><a href="#" onclick="$id('round_id').value='3'; $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 3): ?>class="active"<?php endif; ?>>Round 3</a></li>
<li><a href="#" onclick="$id('round_id').value='4'; $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 4): ?>class="active"<?php endif; ?>>Round 4</a></li>
<li><a href="#" onclick="$id('round_id').value='5'; $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 5): ?>class="active"<?php endif; ?>>Round 5</a></li>
<li><a href="#" onclick="$id('round_id').value='6'; $id('questions_form_id').submit();" <?php if ($_SESSION['round_id'] == 6): ?>class="active"<?php endif; ?>>Round 6</a></li>
</ul>
</div>

<form id="questions_form_id" action="index.php?p=user.questions" method="post">
	<input type="hidden" name="round_id" id="round_id" value="" />
</form>
<div class="centerColumn">
<p class="headingTxt2">Welcome to P&G CEO Challenge </p>
<div class="questions">
<ul class="rules">
<?php if ($this->_tpl_vars['survey_link'] != ''): ?>
<li><span style="color:#FF0000"><strong>Please <a href="<?php echo $this->_tpl_vars['survey_link']; ?>
" target="_blank">click here</a> to respond to a short survey about this game</strong></span></li>
<?php endif; ?>
<li>The game proceeds in 6 rounds.</li>
<li>Each round will have a time limit within which to answer a set of questions.</li>
<li>For each round, some files of data will be provided.</li>
<li>The answers will need to be recorded, and points given to the players based on the answers chosen. There will be a single correct answer for each question. In some cases, partial points may be given for some of the other answers.</li>
<li>Between each round, there will be some time spent by the conductor of the game (Admin), explaining the correct answer to the previous round etc. After that, the admin will give the go ahead for the next round from the admin panel.</li>
<li>During a round, the admin panel shows the questions for the round, and a clock showing a countdown.</li>
<li>Between rounds, the admin screen will show each team's answers, and ranking, plus a button to start the next round.</li>
<li>Only one person at a time may be logged in with any username. If a second login is attempted with the same credentials, the previously logged-in computer will be unable to make a submission.</li>

</ul>
</div>
</div>

<div class="actions">
  <div class="bottomButtons">
  <br\>
  <br\>
  <br\>
  <br\>
  <br\>
  <br\>
  <br\>
  <br\>
  <br\>
  <br\>
 <form id="form_id" name="form_id" action="" method="post" >
 <input type="hidden" value="1" name="logout" id="logout" />
<input name="submit" type="submit" class="Button" value="Logout" />
</form>
</div>
</div>

<script>
	<?php if (isset ( $_SESSION['msg'] )): ?>
		alert('<?php echo $_SESSION['msg']; ?>
');
	<?php endif; ?>
</script>