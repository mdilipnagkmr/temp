<?php

	check_admin_session();
	
	if( isset($_POST['time']) && isset($_POST['round_id']) && isset($_SESSION['campus_id'])) {
		
		myQ("UPDATE rounds SET round_status = 'active' , round_time='".$_POST['time']."', time=CURTIME(), date_time=NOW(), display_answers=0 WHERE round_id=".$_POST['round_id']);
		if($_POST['round_id'] == 6){
			myQ("UPDATE campus SET survey_status = 1 WHERE campus_id=".$_SESSION['campus_id']);
		}
		$smarty->assign("round_id",$_POST['round_id']);
		$smarty->assign("time",$_POST['time']);
		
	}

?>