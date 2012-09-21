<? 

	require("system/conf.inc.php");
 
	/* Include core-level functions and classes */
	require("system/smarty-app/libs/Smarty.class.php");
	
	/* Smarty Instantiation and intialization of public variables */
	$smarty = new Smarty;
	$smarty->template_dir = 'themes/'.$CONF["THEME"].'/templates';
	$smarty->config_dir = 'configs';
	$smarty->cache_dir = 'system/smarty/cache';
	$smarty->compile_dir = 'system/smarty/templates_c';
	
	$smarty->assign("config", $CONF);
	$smarty->assign("themePath", $CONF["PATH_FROM_ROOT"].'themes/'.$CONF["THEME"]."/");
	//$smarty->assign("userPicturesPath", $CONF["USER_PICTURES_FOLDER"]);
	//$smarty->assign("filesPath", $CONF["FILES_FOLDER"]);
	$smarty->assign("rootPath", $CONF["PATH_FROM_ROOT"]);
	$smarty->assign("sitePath", $CONF["SITE_URL"]);
	$module = 'modules/';	
	/* Run against the "p" call and form a path to the file to be loaded */
	//$user_type = 'client_control';
	if (isset($_GET["p"]) && $_GET["p"] != "")	{ 
		$file = NULL;
		$file = $CONF["SITE_URL"].$_GET['p'];
		if(!file_exists ( $file ))
			header("Location:index.php?p=home");			
	}
	else
		header("Location:index.php?p=home");