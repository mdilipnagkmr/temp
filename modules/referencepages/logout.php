<?php
	
	
	unset($_SESSION['admin_id']);
	unset($_SESSION['admin_email']);
	unset($_SESSION);
	header("Location: index.php?p=admin.login");
	exit;
	
?>