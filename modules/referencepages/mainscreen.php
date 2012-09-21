<?php 
	
	check_admin_session();
	
	if(isset($_POST['logout']) && isset($_POST['campus_id']) ){
		
		if(myQ("UPDATE campus set status = 'inactive' WHERE campus_id=".$_POST['campus_id'])){
	
			unset($_SESSION['admin_id']);
			unset($_SESSION['admin_email']);
			header("Location:index.php?p=admin.login");
			exit();
		} else {
			
			$smarty->assign("msg","Error in logout!!");
		}
	}
	
	if(isset($_POST['campus_id']) && isset($_POST['reset'])){
		if(myQ("UPDATE rounds set round_status='inactive', round_time='00:00', time='00:00:00', display_answers=0")){
			myQ("UPDATE campus set survey_status = 0 WHERE campus_id=".$_SESSION['campus_id']);
		} else{
			$_SESSION['msg'] = 'Error in reset all rounds!!';
		}
	}
	
	if(isset($_POST['lock']) && isset($_POST['campus_id'])){
		if(myQ("UPDATE campus set status = 'locked' WHERE campus_id=".$_POST['campus_id'])) {
			
		} else {
			
			$smarty->assign("msg","Error in locking game!!");
		}
	}
	
	if(isset($_POST['action_type']) && isset($_POST['round_id'])) {
		
		myQ("UPDATE rounds SET round_status='locked' WHERE round_id =".$_POST['round_id']);
	}
	
	if(isset($_POST['round_id'])) {
		
		myQ("UPDATE rounds SET round_status='locked' WHERE round_id =".$_POST['round_id']);
		
	}
	
	if(isset($_POST['score_round_id']) && isset($_POST['scores'])){
	
		//echo $_POST['score_round_id'];
		$round = "R".$_POST['score_round_id'];
		
		myQ("UPDATE rounds SET display_answers = 1 WHERE round_id =".$_POST['score_round_id']);
		
		$choice_rs = myQ("SELECT * FROM team_answers WHERE question_id like '$round%' ORDER BY team_id ");
		
		$q1 = 0;
		
		while($row = myFA($choice_rs)){
			
			if($_POST['score_round_id'] == 1) {	
				if($row['question_id'] == 'R1Q1'){
					
					$points = 0;
					$choice = explode('|||',$row['choice']);
				
					if($choice[0]  == 3)
						$points = 1.5;
					else if($choice[0] == 2 || $choice[0] == 4 )
						$points = 0.5;
					else if($choice[0] == 1)
						$points = 0;
					else 
						$points = -1;
						
					if($choice[1]  == 2)
						$points = $points + 1.5;
					else if($choice[1] == 1 || $choice[1] == 3 )
						$points = $points + 0.5;
					else if($choice[1] == 4)
						$points = $points + 0;
					else 
						$points = $points - 1;
						
					if($choice[2]  == 1)
						$points = $points + 2.5;
					else if($choice[2] == 2)
						$points = $points + 0.5;
					else if($choice[2] == 3 || $choice[2] == 4 )
						$points = $points + 0;
					else 
						$points = $points - 1;
						
					if($choice[3]  == 4)
						$points = $points + 1.5;
					else if($choice[3] == 3 || $choice[3] == 5 )
						$points = $points + 0.5;
					else 
						$points = $points + 0;
					
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
				} else if($row['question_id'] == 'R1Q2'){
					$points = 0;
					if($row['choice'] == 3)
						$points = 3;
						
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
				} else {
					
					$points = 0;
					$choice = explode('|||',$row['choice']);
					
					if(count($choice)>0 && ($choice[0] == 6 || $choice[0] == 8 || $choice[0] == 9)){
						$points = $points + 3;
					} 
					
					if(count($choice)>1 && ($choice[1] == 6 || $choice[1] == 8 || $choice[1] == 9)){
						$points = $points + 3;
					} 
					
					if(count($choice)>2 && ($choice[2] == 6 || $choice[2] == 8 || $choice[2] == 9)){
						$points = $points + 3;
					} 
					
					
					if($points == 9)
						$points = $points +1;
						
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);	
				}
			
			} else if($_POST['score_round_id'] == 2){
				
				//print_r($row);
				if($row['question_id'] == 'R2Q1'){
					$q1 = $row['choice'];
				} else if($row['question_id'] == 'R2Q2') {
					$points = 0;
					$q2 = $row['choice'];
					
					if($q1>0 && $q2>0){
						
						if($q1 == 1 && $q2 == 1)
							$points = 0;
						else if($q1 == 2 && $q2 == 1)
							$points = 2;
						else if($q1 == 3 && $q2 == 1)
							$points = 2;
						else if($q1 == 4 && $q2 == 1)
							$points = 2;
						else if($q1 == 1 && $q2 == 2)
							$points = 6;
						else if($q1 == 2 && $q2 == 2)
							$points = 2;
						else if($q1 == 3 && $q2 == 2)
							$points = 0;
						else if($q1 == 4 && $q2 == 2)
							$points = 0;
						else if($q1 == 1 && $q2 == 3)
							$points = 10;
						else if($q1 == 2 && $q2 == 3)
							$points = 6;
						else if($q1 == 3 && $q2 == 3)
							$points = 0;
						else if($q1 == 4 && $q2 == 3)
							$points = 0;
						else if($q1 == 1 && $q2 == 4)
							$points = 6;
						else if($q1 == 2 && $q2 == 4)
							$points = 0;
						else if($q1 == 3 && $q2 == 4)
							$points = 0;
						else if($q1 == 4 && $q2 == 4)
							$points = 0;	
						
							
					} else if($q1>0){
						if($q1==1)
							$points = 3;
					} else if($q2>0){
						if($q2==2)
							$points = 2;
					}
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
					$q1 = 0;
					
				} else {
					$points = 0;
					$choice = explode('|||',$row['choice']);
					
					if(count($choice)>0 && ($choice[0] == 1 || $choice[0] == 5 || $choice[0] == 7 || $choice[0] == 9)){
						$points = $points + 3;
					} 
					
					if(count($choice)>1 && ($choice[1] == 1 || $choice[1] == 5 || $choice[1] == 7 || $choice[1] == 9 )){
						$points = $points + 3;
					} 
					
					if(count($choice)>2 && ($choice[2] == 1 || $choice[2] == 5 || $choice[2] == 7 || $choice[2] == 9)){
						$points = $points + 3;
					} 
					
					if(count($choice)>3 && ($choice[3] == 1 || $choice[3] == 5 || $choice[3] == 7 || $choice[3] == 9)){
						$points = $points + 3;
					} 
					
					if($points == 12)
						$points = $points +3;
						
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);	
				}
			
			} else if($_POST['score_round_id'] == 3){
			
				if($row['question_id'] == 'R3Q1'){
					$points = 0;
					$q1 = $row['choice'];
					if($q1 == 2)
						$points = 6;
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
				} else if($row['question_id'] == 'R3Q2'){
					$points = 0;
					$q2 = $row['choice'];
					if($q2 == 2)
						$points = 6;
					if($q1 == 2 && $q2 == 2)
						$points = $points +3;
					$q1 = 0;
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
					
				} else {
				}
			
			} else if($_POST['score_round_id'] == 4){
				if($row['question_id'] == 'R4Q1'){
					$points =0;
					$q1 = $row['choice'];
					if($q1 == 3)
						$points = 2;
					else if($q1 ==  4)
						$points = 1;
					else 
						$points =0;
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
					$q1 =0;
				
				} else if($row['question_id'] == 'R4Q2'){
				
					$points = 0;
					$q2 = $row['choice'];
					if($q2 == 2)
						$points = 2;
					else if($q2 == 1 || $q2 == 4)
						$points = 1;
					else 
						$point = 0;
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
					
				} else {
					
					$points = 0;
					$choice = explode('|||',$row['choice']);
					
					if(count($choice)>0 && ($choice[0] == 3 || $choice[0] == 6 || $choice[0] == 8)){
						$points = $points + 2;
					} 
					
					if(count($choice)>1 && ($choice[1] == 3 || $choice[1] == 6 || $choice[1] == 8)){
						$points = $points + 2;
					} 
					
					if(count($choice)>2 && ($choice[2] == 3 || $choice[2] == 6 || $choice[2] == 8)){
						$points = $points + 2;
					} 
					
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
				}
			} else if($_POST['score_round_id'] == 5){
			
				if($row["question_id"] == 'R5Q1'){
					$q1 = $row['choice'];
					$points =0;
					
					if($q1 == 2 )
						$points = 3;
					
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
					$q1 = 0;
				} else {
					
					$points = 0;
					$choice = explode('|||',$row['choice']);
					
					if(count($choice)>0 && ($choice[0] == 1 || $choice[0] == 8 || $choice[0] == 13)){
						$points = $points + 2;
					} 
					
					if(count($choice)>1 && ($choice[1] == 1 || $choice[1] == 8 || $choice[1] == 13)){
						$points = $points + 2;
					} 
					
					if(count($choice)>2 && ($choice[2] == 1 || $choice[2] == 8 || $choice[2] == 13)){
						$points = $points + 2;
					} 
					
					if($points == 6)
						$points = $points + 1;
					
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
				}
			
			} else {
			
				if($row['question_id'] == 'R6Q1'){
				
					$points = 0;
					$choice = explode('|||',$row['choice']);
					$ans_choice = array(62, 0, 0, 0, 0, 0, 10, 0, 14, 14, 0);
					
					$points = Correlation($choice , $ans_choice );
					
					if($points > 0) {
						$points = $points * 8;
						$points = round($points);
					} else
						$points = 0;
						
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
				
				} else {
					
					$points = 0;
					$choice = explode('|||',$row['choice']);
					
					if(count($choice)>0 && ($choice[0] == 3 || $choice[0] == 5 || $choice[0] == 7)){
						$points = $points + 3;
					} 
					
					if(count($choice)>1 && ($choice[1] == 3 || $choice[1] == 5 || $choice[1] == 7)){
						$points = $points + 3;
					} 
					
					if(count($choice)>2 && ($choice[2] == 3 || $choice[2] == 5 || $choice[2] == 7)){
						$points = $points + 3;
					} 
					
					if($points == 9)
						$points = $points + 3;
					
					myQ("UPDATE team_answers SET points ='$points' WHERE team_answer_id=".$row['team_answer_id']);
				}
			}
			
			
		}
		//exit;
		$_SESSION['round_id'] = $_POST['score_round_id'];
		header("Location: index.php?p=admin.answers");
		exit;
	}

	if(isset($_POST['rank_round_id']) && isset($_POST['ranking'])){
		
		$_SESSION['round_id'] = $_POST['rank_round_id'];
		header("Location: index.php?p=admin.ranking");
		exit;
	}
	
	
	/// correlation function 
	
function Correlation($arr1, $arr2)
{       
    $correlation = 0;
   
    $k = SumProductMeanDeviation($arr1, $arr2);
    $ssmd1 = SumSquareMeanDeviation($arr1);
    $ssmd2 = SumSquareMeanDeviation($arr2);
   
    $product = $ssmd1 * $ssmd2;
   
    $res = sqrt($product);
   
    $correlation = $k / $res;
   
    return $correlation;
}

function SumProductMeanDeviation($arr1, $arr2)
{
    $sum = 0;
   
    $num = count($arr1);
   
    for($i=0; $i<$num; $i++)
    {
        $sum = $sum + ProductMeanDeviation($arr1, $arr2, $i);
    }
   
    return $sum;
}

function ProductMeanDeviation($arr1, $arr2, $item)
{
    return (MeanDeviation($arr1, $item) * MeanDeviation($arr2, $item));
}

function SumSquareMeanDeviation($arr)
{
    $sum = 0;
   
    $num = count($arr);
   
    for($i=0; $i<$num; $i++)
    {
        $sum = $sum + SquareMeanDeviation($arr, $i);
    }
   
    return $sum;
}

function SquareMeanDeviation($arr, $item)
{
    return MeanDeviation($arr, $item) * MeanDeviation($arr, $item);
}

function SumMeanDeviation($arr)
{
    $sum = 0;
   
    $num = count($arr);
   
    for($i=0; $i<$num; $i++)
    {
        $sum = $sum + MeanDeviation($arr, $i);
    }
   
    return $sum;
}

function MeanDeviation($arr, $item)
{
    $average = Average($arr);
   
    return $arr[$item] - $average;
}   

function Average($arr)
{
    $sum = Sum($arr);
    $num = count($arr);
   
    return $sum/$num;
}

function Sum($arr)
{
    return array_sum($arr);
}

	
?>