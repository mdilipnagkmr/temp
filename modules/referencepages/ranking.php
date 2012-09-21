<?php

	check_admin_session();
	if(isset($_SESSION['round_id']) && $_SESSION['round_id']>0){
		
		$round = $_SESSION['round_id'];
		$campus_id = $_SESSION['campus_id'];
		
		$query = "SELECT ta.*, sum(points) AS total_points, t.team_name , SUM(ta.timestamp) AS total_time
						FROM team_answers ta, teams t 
						WHERE ta.team_id=t.team_id AND t.campus_id  ='$campus_id' AND (";
						
		if($round >= 1)
			$query = $query." ta.question_id like 'R1%'";
		if($round >= 2)
			$query = $query." OR ta.question_id like 'R2%'";
		if($round >= 3)
			$query = $query." OR ta.question_id like 'R3%'";
		if($round >= 4)
			$query = $query." OR ta.question_id like 'R4%'";
		if($round >= 5)
			$query = $query." OR ta.question_id like 'R5%'";
		if($round >= 6)
			$query = $query." OR ta.question_id like 'R6%'";
			
		$query = $query." ) GROUP BY ta.team_id ORDER BY total_points DESC, total_time ASC";
		
		//echo $query;
		//exit;	
		
		$rs = myQ($query);
						
		$teams1 = array();
		$teams2 = array();
		
		$count = myNUM($rs);
		
		$i = 1;
		$count = $count+1;
		while($row = myFA($rs)){
			$row["rank"] = $i;
			if($count/2 < $i)
				$teams2[] = $row;
			else
				$teams1[] = $row;
			$i++;
		}
		
		
		/*
		$points = 0;
		$i=1;
		$j=0;
		$k=0;

		while($row = myFA($rs)){
			$k++;
			if($points == 0){
				$points = $row['total_points'];
				$row["rank"] = $i;
				
			}
			else {
				if($row['total_points'] == $points){
					$row["rank"] = $i;
					$j++;
				} else {
					$i++;
					$i=$i+$j;
					$row["rank"] = $i;
					$points = $row['total_points'];
					$j=0;
				}
			}
				
			
			if($k<=10)
				$teams1[] = $row;
			else if($k<=20)
				$teams2[] = $row;
			else 
				break;
		}
		*/
		$smarty->assign("teams1",$teams1);
		$smarty->assign("teams2",$teams2);
		$smarty->assign("total_teams",$count-1);
	}

?>