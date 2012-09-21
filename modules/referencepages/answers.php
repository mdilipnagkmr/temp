<?php
	check_admin_session();
	if(isset($_SESSION['round_id'])){
		$rs = myFA(myQ("SELECT * FROM rounds WHERE round_id=".$_SESSION['round_id']));
		if($rs['display_answers'] == 1 && $rs['round_status'] == 'locked'){
			$smarty->assign('round_id',$_SESSION['round_id']);
		} else {
			
			header("Location: index.php?p=admin.mainscreen");
			exit;
		}
	}
?>