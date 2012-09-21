<?php
	check_admin_session(); 
	if(isset($_POST['selected_campus'])){
		
		$selected_campus = $_POST['selected_campus'];
		
		$rs = myQ("SELECT tm.* FROM campus c 
					JOIN teams t ON t.campus_id = c.campus_id
					JOIN team_members tm ON t.team_id = tm.team_id 
					WHERE c.campus_id = '$selected_campus' AND tm.member_password=''");
	
		while($row = myFA($rs)){
		
			
			$row['member_password'] = generatePassword(6, 0);
			$to =$row['member_email'] ;
			$from = "P&G CEO Challenge";
			$subject = "Welcome to P&G CEO Challenge";
			$body = "Hi ".$row['member_name']."<br><br>
					 Thank you for registering for the P&G CEO Challenge Game 2010! <br><br>
					 
					 You can log into the game by accessing the following URL: <a href='".$CONF["SITE_URL"]."'>"."www.pgceochallenge.com"."</a><br>
					 You will be able to play the game when the P&G team visits your campus.<br><br>
					
					 In the meantime, you can log-in and update your password to one of your choosing. <br><br>
					 
					 Log-in with the following credentials:<br><br>
					 
					 Username:&nbsp;".$row['member_email']."<br>
					Temporary Password:&nbsp;".$row['member_password']."<br><br>
					
					We hope you will enjoy participating in the P&G CEO Challenge - look forward to seeing you there!<br><br>
					
					Regards,<br>
					The P&G CEO Challenge team.<br><br>
					 
					 Note: In case of any problems with access to the game, please mail us at <a href='mailto:contactpgceochallenge@gmail.com'>contactpgceochallenge@gmail.com</a>
					 ";
					
			$text_body = "Hi ".$row['member_name']."\n\n
					 Thank you for registering for the P&G CEO Challenge Game 2010! \n\n
					 
					 You can log into the game by accessing the following URL: <a href='".$CONF["SITE_URL"]."'>"."www.pgceochallenge.com"."</a>\n
					 You will be able to play the game when the P&G team visits your campus.\n\n
					
					 In the meantime, you can log-in and update your password to one of your choosing. \n\n
					 
					 Log-in with the following credentials:\n\n
					 
					 Username:&nbsp;".$row['member_email']."\n
					Temporary Password:&nbsp;".$row['member_password']."\n\n
					
					We hope you will enjoy participating in the P&G CEO Challenge - look forward to seeing you there!\n\n
					
					Regards,\n
					The P&G CEO Challenge team.\n\n
					 
					 Note: In case of any problems with access to the game, please mail us at <a href='mailto:contactpgceochallenge@gmail.com'>contactpgceochallenge@gmail.com</a>
					 ";						
			send_mail($to,$subject,$body,$text_body,$from);
			//mail($to, $subject, $text_body);
			
			myQ("UPDATE team_members SET member_password='".$row['member_password']."' WHERE member_id=".$row['member_id']);
			$smarty->assign("msg","Sent Newly Generated E-mails to Users.");
		}
	
	} 
	
		$rs = myQ("SELECT * from campus");
	
		$campus = array();
	
		while($row = myFA($rs)){
			$campus[] = $row; 
		}
	
		$smarty->assign("campus",$campus);
		

function generatePassword($length=9, $strength=0) {
	$vowels = 'aeuy';
	$consonants = 'bdghjmnpqrstvz';
	if ($strength & 1) {
		$consonants .= 'BDGHJLMNPQRSTVWXZ';
	}
	if ($strength & 2) {
		$vowels .= "AEUY";
	}
	if ($strength & 4) {
		$consonants .= '23456789';
	}
	if ($strength & 8) {
		$consonants .= '@#$%';
	}
 
	$password = '';
	$alt = time() % 2;
	for ($i = 0; $i < $length; $i++) {
		if ($alt == 1) {
			$password .= $consonants[(rand() % strlen($consonants))];
			$alt = 0;
		} else {
			$password .= $vowels[(rand() % strlen($vowels))];
			$alt = 1;
		}
	}
	return $password;
}

		
?>