<?php /* Smarty version 2.6.14, created on 2010-09-17 12:03:58
         compiled from admin/answers.tpl */ ?>
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
<div class="centerColumn">
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
<div class="actions">
  <div class="counter">
    <p class="time" id="display_time" > <img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" /> <img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" /> : <img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" /> <img src="<?php echo $this->_tpl_vars['themePath']; ?>
images/0.png" width="19" height="33" /> </p>
    <p class="timeLeft">MINS LEFT</p>
  </div>
  <div class="middleButtons"> <br />
    <br />
    <br />
    <br />
  </div>
  <div class="bottomButtons"> <br />
    <form id ="back_form_id" action="index.php?p=admin.mainscreen" method="post" >
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