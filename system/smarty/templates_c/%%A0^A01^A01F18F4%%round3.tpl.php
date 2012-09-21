<?php /* Smarty version 2.6.14, created on 2010-09-25 00:44:21
         compiled from round3.tpl */ ?>
<div class="questions">
<div class="pavanQuestions">
<form action="" id="rounds_form_id" method="post">
<input type="hidden" name="round_3_form_id"  />
<table cellpadding="5" cellspacing="5" border="0" width="100%" align="left">
	<tr>
		<th colspan="6" align="left">Q1. Which is the top reason for the target consumer for not buying our product?</th>
	</tr>
	<tr>
		<td align="left" width="5%"><input type="radio" name="question_1" id="question_1_1" value="1" /></td>
		<td align="left">I can't afford to buy Total Effects as this is very expensive for me</td>
	</tr>
		<tr>
		<td align="left"><input type="radio" name="question_1" id="question_1_2" value="2" /></td>
		<td align="left">I can afford it but I don't know why I should pay so much more for Total Effects</td>
	</tr>
	<tr>
		<td align="left"><input type="radio" name="question_1" id="question_1_3" value="3" /></td>
		<td align="left">I don't think Olay Total Effects is better than other Anti-ageing creams in the market</td>
	</tr>
	<tr>
		<td align="left"><input type="radio" name="question_1" id="question_1_4" value="4" /></td>
		<td align="left">I am not sure what Olay Total Effects actually does</td>
	</tr>

</table>
<br clear="all" /><br clear="all" />

<table cellpadding="5" cellspacing="5" border="0" width="100%" align="left">
	<tr>
		<th colspan="6" align="left">Q2. Which of the below will be most effective in making her buy Olay Total Effects?</th>
	</tr>
	<tr>
		<td align="left" width="5%"><input type="radio" name="question_2" id="question_2_1" value="1" /></td>
		<td align="left">Olay Total Effects is as good as professional Anti-ageing treatment</td>
	</tr>
		<tr>
		<td align="left"><input type="radio" name="question_2" id="question_2_2" value="2" /></td>
		<td align="left">Olay Total Effects give 7 skincare benefits in 1 cream</td>
	</tr>
	<tr>
		<td align="left"><input type="radio" name="question_2" id="question_2_3" value="3" /></td>
		<td align="left">Olay Total Effects is #1 Anti-ageing cream in India</td>
	</tr>
	<tr>
		<td align="left"><input type="radio" name="question_2" id="question_2_4" value="4" /></td>
		<td align="left">Olay Total Effects is recommended by Top skincare experts</td>
	</tr>
</table>
<br clear="all" />
</form>
</div>
</div>
<script>
	window.onload = function(){
		<?php if (isset ( $this->_tpl_vars['question_1'] )): ?>
			if($id('question_1_<?php echo $this->_tpl_vars['question_1']; ?>
'))
				$id('question_1_<?php echo $this->_tpl_vars['question_1']; ?>
').checked = true;
		<?php endif; ?>
		<?php if (isset ( $this->_tpl_vars['question_2'] )): ?>
			if($id('question_2_<?php echo $this->_tpl_vars['question_2']; ?>
'))
				$id('question_2_<?php echo $this->_tpl_vars['question_2']; ?>
').checked = true;
		<?php endif; ?>
		<?php if (isset ( $this->_tpl_vars['submited'] )): ?>
			<?php if ($this->_tpl_vars['submited'] == 1): ?>
				alert('Submitted!!');
			<?php else: ?>
				alert('<?php echo $this->_tpl_vars['error_msg']; ?>
');
			<?php endif; ?>
		<?php endif; ?>
	}
</script>