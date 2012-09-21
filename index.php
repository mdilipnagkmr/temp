<?php 

	error_reporting(1);
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	
    $file='';
	
	/* Include bootsrap.php which includes all the necessary files and does the routing */
	require ("system/bootstrap.php");
	
	/* User is allowed to load the req;uested page. Let's try to do it. */
	if (!is_file("modules/{$file}.php")) 
		$smarty->assign("err_msg",$CONF["404_NOT_FOUND_ERROR_MESSAGE"]);
	else {
		include ("modules/{$file}.php");
		$template_name = "{$file}.tpl";
		$smarty->assign("template_name",$template_name);
	}

	///////// for home page elements/////////
	$smarty->assign("module",$module);