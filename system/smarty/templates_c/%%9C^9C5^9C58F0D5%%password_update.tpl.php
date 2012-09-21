<?php /* Smarty version 2.6.14, created on 2010-09-21 11:49:48
         compiled from admin/password_update.tpl */ ?>
<p class="headingTxt">Select the campus</p>
<div class="loginBox">
<ul class="campusSelect">
<form action="" method="post" id="form_id" name="form_id" onSubmit="return validate()">
<?php $_from = $this->_tpl_vars['campus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['campuses'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['campuses']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['campus']):
        $this->_foreach['campuses']['iteration']++;
?>
<li>
<label class="campusName"><?php echo $this->_tpl_vars['campus']['campus_name']; ?>
</label>
<input type='hidden' value = '<?php echo $this->_tpl_vars['campus']['campus_id']; ?>
'>
<input name="campus" type="radio" value="" class="radioBtnRight" onclick="campus_selected('<?php echo $this->_tpl_vars['campus']['campus_id']; ?>
')" />
</li>
<?php endforeach; endif; unset($_from); ?>
<li>&nbsp;</li>

<li class="loginButton">  
<input type="hidden" value="" id="selected_campus" name="selected_campus">               
<input name="" type="Submit" class="Button" value="Submit" />
</li>
</form>

</ul>
<br class="spacer" />
</div>

<script>

<?php if (isset ( $this->_tpl_vars['msg'] )): ?>
	alert('<?php echo $this->_tpl_vars['msg']; ?>
');
<?php endif; ?>

function campus_selected(campus_id) {
	//alert(campus_id);
	$id('selected_campus').value = campus_id;
}

function validate() {
	
	if($id('selected_campus').value == ''){
		alert("Please Select Campus");
		return false;
	}
}

</script>