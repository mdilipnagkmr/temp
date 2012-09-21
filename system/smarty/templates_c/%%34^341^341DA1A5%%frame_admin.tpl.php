<?php /* Smarty version 2.6.14, created on 2010-09-17 12:03:58
         compiled from frame_admin.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CEOChallenge | Admin</title>
<link href="<?php echo $this->_tpl_vars['themePath']; ?>
css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootPath']; ?>
system/jscripts/ajax-class.js" ></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootPath']; ?>
system/jscripts/new-ajax-class.js" ></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootPath']; ?>
system/jscripts/jquery.js" ></script>
<script>
var THEME_PATH = '<?php echo $this->_tpl_vars['themePath']; ?>
';
var ROOT_PATH = '<?php echo $this->_tpl_vars['rootPath']; ?>
';
var SITE_PATH = '<?php echo $this->_tpl_vars['sitePath']; ?>
';
function $id(id)
{
	return document.getElementById(id);
}
function showhide(id){
if (document.getElementById){
	obj = document.getElementById(id);
	if (obj.style.display == "none"){
		obj.style.display = "";
	} 
	else {
	obj.style.display = "none";
	}
}
}
</script>
</head>

<body>
<div class="container">
<div class="header">
<img src="<?php echo $this->_tpl_vars['themePath']; ?>
/images/logo_03.png" width="157" height="83" alt="CEO Challenge" class="logo" /></div>
<div class="content">
			<?php if ($this->_tpl_vars['err_msg'] == ""): ?>
				<script>
					//alert("<?php echo $this->_tpl_vars['templete_name']; ?>
");
				</script>
            	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['template_name'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php else: ?>
            	<?php echo $this->_tpl_vars['err_msg']; ?>

            <?php endif; ?>
</div>
<br class="spacer" />

<div class="footer">
  <img src="<?php echo $this->_tpl_vars['themePath']; ?>
/images/p&amp;g_15.png" width="86" height="55" alt="P&amp;G" class="pandg"  />
  </div>
  <br class="spacer" />
</div>
</body>

</html>