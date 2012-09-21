<?php /* Smarty version 2.6.14, created on 2010-09-24 14:18:06
         compiled from round6.tpl */ ?>
<div class="questions">
<div class="pavanQuestions">
<form action="" id="rounds_form_id" method="post">
<input type="hidden" name="round_6_form_id"  />
<table cellpadding="5" cellspacing="5" border="0" width="100%" align="left">
	<tr>
		<th colspan="6" align="left">Q1. You have a media budget of $8 million for Year 1. Allocate your spend across the following media vehicles (you can choose any number of media vehicles - specify percentage for each)</th>
	</tr>
	<tr>
		<td align="left">Television - Family </td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(1, this);" id="question_1_percentage_1" />%
		</td>
	</tr>
	<tr>
		<td align="left">Television - News </td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(2, this);" id="question_1_percentage_2" />%
		</td>
	</tr>
	<tr>
		<td align="left">Radio - FM </td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(3, this);" id="question_1_percentage_3" />%
		</td>
	</tr>
	<tr>
		<td align="left">Radio - AIR AM</td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(4, this);" id="question_1_percentage_4" />%
		</td>
	</tr>
	<tr>
		<td align="left">Internet</td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(5, this);" id="question_1_percentage_5" />%
		</td>
	</tr>
	<tr>
		<td align="left">Local/Regional Newspapers </td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(6, this);" id="question_1_percentage_6" />%
		</td>
	</tr>
	<tr>
		<td align="left">National Newspapers</td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(7, this);" id="question_1_percentage_7" />%
		</td>
	</tr>
	<tr>
		<td align="left">Magazines - News</td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(8, this);" id="question_1_percentage_8" />%
		</td>
	</tr>
	<tr>
		<td align="left">Magazines - Film</td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(9, this);" id="question_1_percentage_9" />%
		</td>
	</tr>
	<tr>
		<td align="left">Magazines - Variety </td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(10, this);" id="question_1_percentage_10" />%
		</td>
	</tr>
	<tr>
		<td align="left">Out of Home</td>
		<td align="left">
			<input type="text" maxlength="2" name="question_1_percentage[]" value="0" onkeypress="return isNumberKey(event)" onblur="updatePercentage(11, this);" id="question_1_percentage_11" />%
		</td>
	</tr>
	<tr>
		<td align="left">Remaining Budget</td>
		<td align="left">
			<input type="text" id="total_percentage" value="100" readonly="true" />%
		</td>
	</tr>
</table>
<br clear="all" /><br clear="all" />

<table cellpadding="5" cellspacing="5" border="0" width="100%" align="left">
	<tr>
		<th colspan="6" align="left">Q2. Which of the following were the most important factors in making your choice (any 3)</th>
	</tr>
	<tr>
		<td align="left" width="5%">
			<input type="checkbox" name="question_2" id="question_2_option_1" onchange="if(this.checked){$('#question_2_hidden_1').val(1);}else{$('#question_2_hidden_1').val(0);}" onclick="return limitedSelection(1, 2, 3, this, 9);" />
			<input type="hidden" name="question_2_hidden[]" value="0" id="question_2_hidden_1" />
		</td>
		<td align="left">Clutter of Media</td>
	</tr>	
	<tr>
		<td align="left">
			<input type="checkbox" name="question_2" id="question_2_option_2" onchange="if(this.checked){$('#question_2_hidden_2').val(2);}else{$('#question_2_hidden_2').val(0);}" onclick="return limitedSelection(2, 2, 3, this, 9);" />
			<input type="hidden" name="question_2_hidden[]" value="0" id="question_2_hidden_2" />
		</td>
		<td align="left">Duration of Message on each Vehicle</td>
	</tr>	
	<tr>
		<td align="left">
			<input type="checkbox" name="question_2" id="question_2_option_3" onchange="if(this.checked){$('#question_2_hidden_3').val(3);}else{$('#question_2_hidden_3').val(0);}" onclick="return limitedSelection(3, 2, 3, this, 9);" />
			<input type="hidden" name="question_2_hidden[]" value="0" id="question_2_hidden_3" />
		</td>
		<td align="left">Cost to Reach</td>
	</tr>	
	<tr>
		<td align="left">
			<input type="checkbox" name="question_2" id="question_2_option_4" onchange="if(this.checked){$('#question_2_hidden_4').val(4);}else{$('#question_2_hidden_4').val(0);}" onclick="return limitedSelection(4, 2, 3, this, 9);" />
			<input type="hidden" name="question_2_hidden[]" value="0" id="question_2_hidden_4" />
		</td>
		<td align="left">Free to Air or Paid Channel (for viewers)</td>
	</tr>	
	<tr>
		<td align="left">
			<input type="checkbox" name="question_2" id="question_2_option_5" onchange="if(this.checked){$('#question_2_hidden_5').val(5);}else{$('#question_2_hidden_5').val(0);}" onclick="return limitedSelection(5, 2, 3, this, 9);" />
			<input type="hidden" name="question_2_hidden[]" value="0" id="question_2_hidden_5" />
		</td>
		<td align="left">Efficiency of Media Vehicle </td>
	</tr>	
	<tr>
		<td align="left">
			<input type="checkbox" name="question_2" id="question_2_option_6" onchange="if(this.checked){$('#question_2_hidden_6').val(6);}else{$('#question_2_hidden_6').val(0);}" onclick="return limitedSelection(6, 2, 3, this, 9);" />
			<input type="hidden" name="question_2_hidden[]" value="0" id="question_2_hidden_6" />
		</td>
		<td align="left">Interactivity of Media</td>
	</tr>	
	<tr>
		<td align="left">
			<input type="checkbox" name="question_2" id="question_2_option_7" onchange="if(this.checked){$('#question_2_hidden_7').val(7);}else{$('#question_2_hidden_7').val(0);}" onclick="return limitedSelection(7, 2, 3, this, 9);" />
			<input type="hidden" name="question_2_hidden[]" value="0" id="question_2_hidden_7" />
		</td>
		<td align="left">Overlap of Media Vehicles</td>
	</tr>	
	<tr>
		<td align="left">
			<input type="checkbox" name="question_2" id="question_2_option_8" onchange="if(this.checked){$('#question_2_hidden_8').val(8);}else{$('#question_2_hidden_8').val(0);}" onclick="return limitedSelection(8, 2, 3, this, 9);" />
			<input type="hidden" name="question_2_hidden[]" value="0" id="question_2_hidden_8" />
		</td>
		<td align="left">Total Reach of Vehicle</td>
	</tr>	
	<tr>
		<td align="left">
			<input type="checkbox" name="question_2" id="question_2_option_9" onchange="if(this.checked){$('#question_2_hidden_9').val(9);}else{$('#question_2_hidden_9').val(0);}" onclick="return limitedSelection(9, 2, 3, this, 9);" />
			<input type="hidden" name="question_2_hidden[]" value="0" id="question_2_hidden_9" />
		</td>
		<td align="left">Fragmentation of Media</td>
	</tr>	
</table>
</form>
</div>
</div>
<script type="text/javascript">
	function isNumberKey(evt) {
		var charCode = (evt.which) ? evt.which : evt.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
    }
	
	function updatePercentage(id, obj){
		if(obj.value == ''){
			obj.value = 0;
		}
		if($('#total_percentage').val()-$(obj).val() < 0){
			$(obj).val(0);
			obj.focus();
		}
		$('#total_percentage').val(100);
		for(var i=1;i<=11;i++){
			$('#total_percentage').val($('#total_percentage').val()-$('#question_1_percentage_'+i).val());
		}
	}
	
	function limitedSelection( id, question_no, selection_limit, obj, tot_questions ){
		var priority_filled_count = 0;
		for(var i=1; i<=tot_questions; i++){
			if($('#question_'+question_no+'_option_'+i).is(':checked')){
				priority_filled_count++;
			}
		}
		if(priority_filled_count>selection_limit){
			alert('Maximum of '+selection_limit+' Options Allowed!');
			obj.checked = false;
			$('#question_2_hidden_'+id).val('');
			return false;
		}
		return true;
	}
	
	function validateRound6(){
		// verifying that the total percentage entered is 100 or not...
		if($('#total_percentage').val() != 0){
			alert('Total percentages should be equal to 100');
			return false;
		}
		return true;
	}
	
	window.onload = function(){
		<?php if (isset ( $this->_tpl_vars['question_1'] )): ?>
			<?php $_from = $this->_tpl_vars['question_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['question_1_name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['question_1_name']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['question_1_name']['iteration']++;
?>
				if($id('question_1_percentage_<?php echo $this->_foreach['question_1_name']['iteration']; ?>
')){
					$id('question_1_percentage_<?php echo $this->_foreach['question_1_name']['iteration']; ?>
').value = <?php echo $this->_tpl_vars['option']; ?>
;
				}
			<?php endforeach; endif; unset($_from); ?>
			$('#total_percentage').val(100);
			for(var i=1;i<=11;i++){
				$('#total_percentage').val($('#total_percentage').val()-$('#question_1_percentage_'+i).val());
			}
		<?php endif; ?>
		
		<?php if (isset ( $this->_tpl_vars['question_2'] )): ?>
			<?php $_from = $this->_tpl_vars['question_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['question_2_name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['question_2_name']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['question_2_name']['iteration']++;
?>
				if($id('question_2_option_<?php echo $this->_tpl_vars['option']; ?>
')){
					$id('question_2_option_<?php echo $this->_tpl_vars['option']; ?>
').checked = true;
					$id('question_2_hidden_<?php echo $this->_tpl_vars['option']; ?>
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
