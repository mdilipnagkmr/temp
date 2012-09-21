<?php /* Smarty version 2.6.14, created on 2011-08-04 11:08:05
         compiled from round1.tpl */ ?>
<div class="questions">
<div class="pavanQuestions">
<form action="" id="rounds_form_id" method="post">
<input type="hidden" name="round_1_form_id" />
<table cellpadding="5" cellspacing="5" border="0" width="100%" align="left">
	<tr>
		<th colspan="6" align="left">Q1: Arrange the following brands in Order of Attractiveness for Launch</th>	
	</tr>
	<tr>
		<td align="left">&nbsp;</td>
		<td align="center">1st Priority</td>
		<td align="center">2nd Priority</td>
		<td align="center">3rd Priority</td>
		<td align="center">4th Priority</td>
		<td align="center">Don't launch</td>
	</tr>
	<tr>
		<td align="left">Pantene (Haircare)</td>
		<td align="center"><input type="radio" name="question_1_option_1" id="priority_1_1" value="1" onclick="checkPrioritySelected(1, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_1" id="priority_1_2" value="2" onclick="checkPrioritySelected(2, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_1" id="priority_1_3" value="3" onclick="checkPrioritySelected(3, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_1" id="priority_1_4" value="4" onclick="checkPrioritySelected(4, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_1" id="priority_1_5" value="5" /></td>
	</tr>
	<tr>
		<td align="left">Pampers (Babycare)</td>
		<td align="center"><input type="radio" name="question_1_option_2" id="priority_2_1" value="1" onclick="checkPrioritySelected(1, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_2" id="priority_2_2" value="2" onclick="checkPrioritySelected(2, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_2" id="priority_2_3" value="3" onclick="checkPrioritySelected(3, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_2" id="priority_2_4" value="4" onclick="checkPrioritySelected(4, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_2" id="priority_2_5" value="5" /></td>
	</tr>
	<tr>
		<td align="left">Olay (Skincare)</td>
		<td align="center"><input type="radio" name="question_1_option_3" id="priority_3_1" value="1" onclick="checkPrioritySelected(1, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_3" id="priority_3_2" value="2" onclick="checkPrioritySelected(2, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_3" id="priority_3_3" value="3" onclick="checkPrioritySelected(3, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_3" id="priority_3_4" value="4" onclick="checkPrioritySelected(4, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_3" id="priority_3_5" value="5" /></td>
	</tr>
	<tr>
		<td align="left">Tide (Laundry)</td>
		<td align="center"><input type="radio" name="question_1_option_4" id="priority_4_1" value="1" onclick="checkPrioritySelected(1, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_4" id="priority_4_2" value="2" onclick="checkPrioritySelected(2, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_4" id="priority_4_3" value="3" onclick="checkPrioritySelected(3, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_4" id="priority_4_4" value="4" onclick="checkPrioritySelected(4, this);" /></td>
		<td align="center"><input type="radio" name="question_1_option_4" id="priority_4_5" value="5" /></td>
	</tr>
</table>
<br clear="all" /><br clear="all" />

<table cellpadding="5" cellspacing="5" border="0" width="100%" align="left">
	<tr>
		<th align="left" colspan="2">Q2. What is the estimated Year 5 size of prize (Sales) for the 1st Priority Brand?</th>
	</tr>
	<tr>
		<td align="left" width="5%"><input type="radio" name="question_2" id="question_2_1" value="1" /></td>
		<td align="left">$20 - 40 million</td>
	</tr>
		<tr>
		<td align="left"><input type="radio" name="question_2" id="question_2_2" value="2" /></td>
		<td align="left">$41 - 80 million</td>
	</tr>
	<tr>
		<td align="left"><input type="radio" name="question_2" id="question_2_3" value="3" /></td>
		<td align="left">$81 - 120 million</td>
	</tr>
	<tr>
		<td align="left"><input type="radio" name="question_2" id="question_2_4" value="4" /></td>
		<td align="left">$121 - 160 million</td>
	</tr>
</table>
<br clear="all" /><br clear="all" />

<table cellpadding="5" cellspacing="5" border="0" width="100%" align="left">
	<tr>
		<th align="left" colspan="2">Q3. What are the most important considerations for making the choice in Question 1 (select any 3)</th>
	</tr>	
	<tr>
		<td align="left" width="5%"><input type="checkbox" name="question_3" id="question_3_option_1" onclick="limitedSelection(1, 3, this);" onchange="if(this.checked){$('#question_3_hidden_1').val(1);}else{$('#question_3_hidden_1').val(0);}" />
		<input type="hidden" id="question_3_hidden_1" name="question_3_hidden[]" value="0" /></td>
		<td align="left">Year 1 Size of Prize</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_2" onclick="limitedSelection(2, 3, this);" onchange="if(this.checked){$('#question_3_hidden_2').val(2);}else{$('#question_3_hidden_2').val(0);}" />
		<input type="hidden" id="question_3_hidden_2" name="question_3_hidden[]" value="0" /></td>
		<td align="left">Market Fragmentation</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_3" onclick="limitedSelection(3, 3, this);" onchange="if(this.checked){$('#question_3_hidden_3').val(3);}else{$('#question_3_hidden_3').val(0);}" />
		<input type="hidden" id="question_3_hidden_3" name="question_3_hidden[]" value="0" /></td>
		<td align="left">Tier-wise Split for Category</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_4" onclick="limitedSelection(4, 3, this);" onchange="if(this.checked){$('#question_3_hidden_4').val(4);}else{$('#question_3_hidden_4').val(0);}" />
		<input type="hidden" id="question_3_hidden_4" name="question_3_hidden[]" value="0" /></td>
		<td align="left">Tier Size by Value</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_5" onclick="limitedSelection(5, 3, this);" onchange="if(this.checked){$('#question_3_hidden_5').val(5);}else{$('#question_3_hidden_5').val(0);}" />
		<input type="hidden" id="question_3_hidden_5" name="question_3_hidden[]" value="0" /></td>
		<td align="left">Tier Size by Volume</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_6" onclick="limitedSelection(6, 3, this);" onchange="if(this.checked){$('#question_3_hidden_6').val(6);}else{$('#question_3_hidden_6').val(0);}" />
		<input type="hidden" id="question_3_hidden_6" name="question_3_hidden[]" value="0" /></td>
		<td align="left">Net Present Value</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_7" onclick="limitedSelection(7, 3, this);" onchange="if(this.checked){$('#question_3_hidden_7').val(7);}else{$('#question_3_hidden_7').val(0);}" />
		<input type="hidden" id="question_3_hidden_7" name="question_3_hidden[]" value="0" /></td>
		<td align="left">Year 5 Size of Prize</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_8" onclick="limitedSelection(8, 3, this);" onchange="if(this.checked){$('#question_3_hidden_8').val(8);}else{$('#question_3_hidden_8').val(0);}" />
		<input type="hidden" id="question_3_hidden_8" name="question_3_hidden[]" value="0" /></td>
		<td align="left">Performance of Brand in Similar Markets</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_9" onclick="limitedSelection(9, 3, this);" onchange="if(this.checked){$('#question_3_hidden_9').val(9);}else{$('#question_3_hidden_9').val(0);}" />
		<input type="hidden" id="question_3_hidden_9" name="question_3_hidden[]" value="0" /></td>
		<td align="left">Category Size and Growth Rate</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_10" onclick="limitedSelection(10, 3, this);" onchange="if(this.checked){$('#question_3_hidden_10').val(10);}else{$('#question_3_hidden_10').val(0);}" />
		<input type="hidden" id="question_3_hidden_10" name="question_3_hidden[]" value="0" /></td>
		<td align="left">Tier Growth Rate</td>
	</tr>	
</table>
</form>
</div></div>
<script type="text/javascript">
	function checkPrioritySelected( priority_id, obj ){
		for(var i=1;i<5;i++){
			$id('priority_'+i+'_'+priority_id).checked = false;
		}
		obj.checked = true;
	}
	
	function limitedSelection( id, selection_limit, obj ){
		var priority_filled_count = 0;
		for(var i=1; i<=10; i++){
			if($('#question_3_option_'+i).is(':checked'))
				priority_filled_count++;
		}
		if(priority_filled_count>selection_limit){
			alert('Maximum of '+selection_limit+' Options Allowed!');
			obj.checked = false;
			$('#question_3_hidden_'+id).val('');
		}
	}
	
	window.onload = function(){
		<?php if (isset ( $this->_tpl_vars['question_1'] )): ?>
			<?php $_from = $this->_tpl_vars['question_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['question_1_name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['question_1_name']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['question_1_name']['iteration']++;
?>
				if($id('priority_<?php echo $this->_foreach['question_1_name']['iteration']; ?>
_<?php echo $this->_tpl_vars['option']; ?>
'))
					$id('priority_<?php echo $this->_foreach['question_1_name']['iteration']; ?>
_<?php echo $this->_tpl_vars['option']; ?>
').checked = true;
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		
		<?php if (isset ( $this->_tpl_vars['question_2'] )): ?>
			if($id('question_2_<?php echo $this->_tpl_vars['question_2']; ?>
'))
				$id('question_2_<?php echo $this->_tpl_vars['question_2']; ?>
').checked = true;
		<?php endif; ?>
		
		<?php if (isset ( $this->_tpl_vars['question_3'] )): ?>
			<?php $_from = $this->_tpl_vars['question_3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['question_3_name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['question_3_name']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['question_3_name']['iteration']++;
?>
				if($id('question_3_option_<?php echo $this->_tpl_vars['option']; ?>
')){
					$id('question_3_option_<?php echo $this->_tpl_vars['option']; ?>
').checked = true;
					$id('question_3_hidden_<?php echo $this->_tpl_vars['option']; ?>
').value = <?php echo $this->_tpl_vars['option']; ?>
;
				}
			<?php endforeach; endif; unset($_from); ?>
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
