<?php
	/* Set session parameters */
	session_start();
	
	/* Include bootsrap.php which includes all the necessary files and does the routing */
	require("system/bootstrap.php");

	/* User is allowed to load the requested page. Let's try to do it. */
	if (!is_file("modules/{$file}.php")) {
		echo $CONF["404_NOT_FOUND_ERROR_MESSAGE"];	exit();
	}
	else {
		include ("modules/{$file}.php");
		$template_name = "{$file}.tpl";
		$smarty->assign("err_msg","");
		$smarty->assign("session",$_SESSION);
		if(is_file('themes/'.$CONF["THEME"]."/templates/".$template_name)) {
			$smarty->display($template_name);	
		}
		else {
		}
	}
