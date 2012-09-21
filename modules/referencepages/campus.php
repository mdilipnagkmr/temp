<?php 
	
	//print_r($_SESSION);
	//exit;
	check_admin_session();
	
	if(isset($_POST['selected_campus'])){
		
		//myQ("UPDATE campus set status = 'inactive' WHERE status='active'");
	 $rs = myQ("UPDATE campus set status='active' WHERE campus_id=".$_POST['selected_campus']);	
	 if($rs){ 
	 	$_SESSION['campus_id'] = $_POST['selected_campus'];	
		$rs_campus = myFA(myQ("SELECT * FROM campus WHERE campus_id=".$_SESSION['campus_id']));
		$_SESSION['campus_name'] = $rs_campus['campus_name'];		
	 	header("Location: index.php?p=admin.mainscreen&campus_id=".$_POST['selected_campus']);
		exit;
	 }else {
	 
	 	$smarty->assign("msg","Error!! making campus active.");
	 }
	
	} else {
	
		/*
		if($rs = myQ("SELECT * from campus WHERE status = 'active'")){
			if($row = myFA($rs)){			
				header("Location: index.php?p=admin.mainscreen&campus_id=".$row['campus_id']);	
				exit;
			}
		}*/
	
		$rs = myQ("SELECT * from campus");
	
		$campus = array();
	
		while($row = myFA($rs)){
			$campus[] = $row; 
		}
	
		$smarty->assign("campus",$campus);
		
	}
?>