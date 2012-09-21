<?php /* Smarty version 2.6.14, created on 2010-09-25 00:49:14
         compiled from round4.tpl */ ?>
<div class="questions">
<div class="pavanQuestions">
<form action="" id="rounds_form_id" method="post">
<input type="hidden" name="round_4_form_id" />
<table cellpadding="5" cellspacing="5" border="0" width="100%" align="left">
	<tr>
		<th colspan="6" align="left">Q1. Which year should Olay commence production in India?</th>
	</tr>
	<tr>
		<td align="left" width="5%"><input type="radio" name="question_1" id="question_1_1" value="1" /></td>
		<td align="left">2004</td>
	</tr>
		<tr>
		<td align="left"><input type="radio" name="question_1" id="question_1_2" value="2" /></td>
		<td align="left">2005</td>
	</tr>
	<tr>
		<td align="left"><input type="radio" name="question_1" id="question_1_3" value="3" /></td>
		<td align="left">2006</td>
	</tr>
	<tr>
		<td align="left"><input type="radio" name="question_1" id="question_1_4" value="4" /></td>
		<td align="left">2007</td>
	</tr>

</table>
<br clear="all" /><br clear="all" />

<table cellpadding="5" cellspacing="5" border="0" width="100%" align="left">
	<tr>
		<th colspan="6" align="left">Q2. Which location should the plant be set up at?</th>
	</tr>
	<tr>
		<td align="left" width="5%"><input type="radio" name="question_2" id="question_2_1" value="1" /></td>
		<td align="left">Uparpur</td>
	</tr>
		<tr>
		<td align="left"><input type="radio" name="question_2" id="question_2_2" value="2" /></td>
		<td align="left">Neechepur</td>
	</tr>
	<tr>
		<td align="left"><input type="radio" name="question_2" id="question_2_3" value="3" /></td>
		<td align="left">Daayepur</td>
	</tr>
	<tr>
		<td align="left"><input type="radio" name="question_2" id="question_2_4" value="4" /></td>
		<td align="left">Baayepur</td>
	</tr>

</table>
<br clear="all" /><br clear="all" />

<table cellpadding="5" cellspacing="5" border="0" width="100%" align="left">
	<tr>
		<th colspan="6" align="left">Q3. What are the most important considerations for making the above choices (select only 3)</th>
	</tr>
	<tr>
		<td align="left" width="5%"><input type="checkbox" name="question_3" id="question_3_option_1" onclick="limitedSelection(1, 3, this);" onchange="if(this.checked){$('#question_3_hidden_1').val(1);}else{$('#question_3_hidden_1').val(0);}" />
		<input type="hidden" id="question_3_hidden_1" name="question_3_hidden[]" />
		</td>
		<td align="left">Distance of Plant from Largest Delivery Center</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_2" onclick="limitedSelection(2, 3, this);" onchange="if(this.checked){$('#question_3_hidden_2').val(2);}else{$('#question_3_hidden_2').val(0);}" />
		<input type="hidden" id="question_3_hidden_2" name="question_3_hidden[]" />
		</td>
		<td align="left">Inventory Carrying Cost</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_3" onclick="limitedSelection(3, 3, this);" onchange="if(this.checked){$('#question_3_hidden_3').val(3);}else{$('#question_3_hidden_3').val(0);}" />
		<input type="hidden" id="question_3_hidden_3" name="question_3_hidden[]" />
		</td>
		<td align="left">Timing of Capital Investment</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_4" onclick="limitedSelection(4, 3, this);" onchange="if(this.checked){$('#question_3_hidden_4').val(4);}else{$('#question_3_hidden_4').val(0);}" />
		<input type="hidden" id="question_3_hidden_4" name="question_3_hidden[]" />
		</td>
		<td align="left">Production Cost at each plant</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_5" onclick="limitedSelection(5, 3, this);" onchange="if(this.checked){$('#question_3_hidden_5').val(5);}else{$('#question_3_hidden_5').val(0);}" />
		<input type="hidden" id="question_3_hidden_5" name="question_3_hidden[]" />
		</td>
		<td align="left">Possibility of Excise Duty & Tax Savings </td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_6" onclick="limitedSelection(6, 3, this);" onchange="if(this.checked){$('#question_3_hidden_6').val(6);}else{$('#question_3_hidden_6').val(0);}" />
		<input type="hidden" id="question_3_hidden_6" name="question_3_hidden[]" />
		</td>
		<td align="left">Unit Delivered Cost</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_7" onclick="limitedSelection(7, 3, this);" onchange="if(this.checked){$('#question_3_hidden_7').val(7);}else{$('#question_3_hidden_7').val(0);}" />
		<input type="hidden" id="question_3_hidden_7" name="question_3_hidden[]" />
		</td>
		<td align="left">Reliability of Supply</td>
	</tr>	
	<tr>
		<td align="left"><input type="checkbox" name="question_3" id="question_3_option_8" onclick="limitedSelection(8, 3, this);" onchange="if(this.checked){$('#question_3_hidden_8').val(8);}else{$('#question_3_hidden_8').val(0);}" />
		<input type="hidden" id="question_3_hidden_8" name="question_3_hidden[]" />
		</td>
		<td align="left">Possibility of Plant Closure</td>
	</tr>	
</table>
</form>
</div>
</div>
<script type="text/javascript">
	
	function limitedSelection( id, selection_limit, obj ){
		var priority_filled_count = 0;
		for(var i=1; i<=10; i++){
			if($('#question_3_option_'+i).is(':checked'))
				priority_filled_count++;
		}
		if(priority_filled_count>selection_limit){
			alert('Maximum of '+selection_limit+' Options Allowed!');
			$('#question_3_hidden_'+id).val('');
			obj.checked = false;
		}
	}
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