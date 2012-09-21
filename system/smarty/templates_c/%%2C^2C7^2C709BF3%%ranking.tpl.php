<?php /* Smarty version 2.6.14, created on 2010-09-26 11:31:24
         compiled from admin/ranking.tpl */ ?>
<div id="rounds">
  <p class="roundsHead"><?php echo $_SESSION['campus_name']; ?>
</p>
<ul class="roundBtns">
<li><a href="#" <?php if ($_SESSION['round_id'] == 1): ?>class="active"<?php endif; ?>>Round 1</a></li>
<li><a href="#" <?php if ($_SESSION['round_id'] == 2): ?>class="active"<?php endif; ?>>Round 2</a></li>
<li><a href="#" <?php if ($_SESSION['round_id'] == 3): ?>class="active"<?php endif; ?>>Round 3</a></li>
<li><a href="#" <?php if ($_SESSION['round_id'] == 4): ?>class="active"<?php endif; ?>>Round 4</a></li>
<li><a href="#" <?php if ($_SESSION['round_id'] == 5): ?>class="active"<?php endif; ?>>Round 5</a></li>
<li><a href="#" <?php if ($_SESSION['round_id'] == 6): ?>class="active"<?php endif; ?>>Round 6</a></li>
</ul>
</div>

<div class="centerColumn">
<p class="headingTxt2">Cumulative Results:</p>
<div class="rankingDiv">
<div id="rankandTeam">
<ul class="ranks">
<li class="head">Ranks</li>
<?php $_from = $this->_tpl_vars['teams1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rank'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rank']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['team']):
        $this->_foreach['rank']['iteration']++;
?>
<li><?php echo $this->_tpl_vars['team']['rank']; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>

<ul class="teams">
<li class="head">Team</li>
<?php $_from = $this->_tpl_vars['teams1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rank'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rank']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['team']):
        $this->_foreach['rank']['iteration']++;
?>
<li><?php echo $this->_tpl_vars['team']['team_name']; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>


<ul class="ranks">
<li class="head">Ranks</li>
<?php $_from = $this->_tpl_vars['teams2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rank'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rank']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['team']):
        $this->_foreach['rank']['iteration']++;
?>
<li><?php echo $this->_tpl_vars['team']['rank']; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['total_teams']%2 == 1): ?>
<li>&nbsp;</li>
<?php endif; ?>
</ul>

<ul class="noMar">
<li class="head">Team</li>
<?php $_from = $this->_tpl_vars['teams2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rank'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rank']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['team']):
        $this->_foreach['rank']['iteration']++;
?>
<li><?php echo $this->_tpl_vars['team']['team_name']; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['total_teams']%2 == 1): ?>
<li>&nbsp;</li>
<?php endif; ?>
</ul>
</div>
</div>
</div>

<div class="actions">
<br class="spacer" />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

  <div class="bottomButtons">

<br/>
<form action="index.php?p=admin.mainscreen" method="post" >
<input name="back_to_mainscreen" type="submit" class="Button" value="Back to MainScreen"  />
</form>
<br/>
 <form action="index.php?p=admin.logout" method="post" >
<input name="" type="submit" class="Button" value="Logout" />
</form>
</div>
</div>