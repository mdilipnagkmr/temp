<?php /* Smarty version 2.6.14, created on 2010-09-22 13:04:20
         compiled from data_bank.tpl */ ?>
<div id="container" style=" width:1024px; height:1200px;"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this rotator.</div>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootPath']; ?>
system/jscripts/swfobject.js"></script>
	<script type="text/javascript">
		var s1 = new SWFObject("<?php echo $this->_tpl_vars['rootPath']; ?>
system/flashes/imagerotator1.swf","rotator","944","1200","0");
		s1.addParam("allowfullscreen","true");
		s1.addParam("allowscriptaccess","always");
		s1.addParam("wmode","opaque");
		s1.addParam("overstretch ","true");
		s1.addVariable("file","<?php echo $this->_tpl_vars['config']['SITE_URL']; ?>
modules/madrid.php?round_report=<?php echo $this->_tpl_vars['round_id']; ?>
-<?php echo $this->_tpl_vars['report_id']; ?>
&k=0");
		s1.addVariable("width","944");
		s1.addVariable("height","1200");
		
		s1.addVariable("transition","slowfade");
		s1.addVariable("repeat","false");
		s1.addVariable("shuffle","false");
		
		s1.write("container");
	</script>