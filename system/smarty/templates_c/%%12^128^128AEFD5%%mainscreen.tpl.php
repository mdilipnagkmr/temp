<?php /* Smarty version 2.6.14, created on 2010-09-21 14:18:15
         compiled from admin/mainscreen.tpl */ ?>
<div id="rounds">
  <p class="roundsHead"><?php echo $_SESSION['campus_name']; ?>
</p>
  <ul class="roundBtns">
    <li><a href="#" class="active">Round 1</a></li>
    <li><a href="#" class="active">Round 2</a></li>
    <li><a href="#" class="active">Round 3</a></li>
    <li><a href="#" class="active">Round 4</a></li>
    <li><a href="#" class="active">Round 5</a></li>
    <li><a href="#" class="active">Round 6</a></li>
  </ul>
</div>
<div class="rankingColumn">
  <ul class="ranking">
    <li class="startRound"><a href="javascript:void(0);" onclick="return start_round(1, this);">Start Round</a></li>
    <li class="displayAnswers"><a href="javascript:void(0);" onclick="return display_answer('1')">Display Answers</a></li>
    <li class="viewRanking"><a href="javascript:void(0);" onclick="return cal_ranking('1')">View Ranking</a></li>
  </ul>
  <ul class="ranking">
    <li class="startRound"><a href="javascript:void(0);" onclick="return start_round(2, this)">Start Round</a></li>
    <li class="displayAnswers"><a href="javascript:void(0);" onclick="return display_answer('2')">Display Answers</a></li>
    <li class="viewRanking"><a href="javascript:void(0);" onclick="return cal_ranking('2')">View Ranking</a></li>
  </ul>
  <ul class="ranking">
    <li class="startRound"><a href="javascript:void(0);" onclick="return start_round(3, this)">Start Round</a></li>
    <li class="displayAnswers"><a href="javascript:void(0);" onclick="return display_answer('3')">Display Answers</a></li>
    <li class="viewRanking"><a href="javascript:void(0);" onclick="return cal_ranking('3')">View Ranking</a></li>
  </ul>
  <ul class="ranking">
    <li class="startRound"><a href="javascript:void(0);" onclick="return start_round(4, this)">Start Round</a></li>
    <li class="displayAnswers"><a href="javascript:void(0);" onclick="return display_answer('4')">Display Answers</a></li>
    <li class="viewRanking"><a href="javascript:void(0);" onclick="return cal_ranking('4')">View Ranking</a></li>
  </ul>
  <ul class="ranking">
    <li class="startRound"><a href="javascript:void(0);" onclick="return start_round(5, this)">Start Round</a></li>
    <li class="displayAnswers"><a href="javascript:void(0);" onclick="return display_answer('5')">Display Answers</a></li>
    <li class="viewRanking"><a href="javascript:void(0);" onclick="return cal_ranking('5')">View Ranking</a></li>
  </ul>
  <ul class="ranking">
    <li class="startRound"><a href="javascript:void(0);" onclick="return start_round(6, this)">Start Round</a></li>
    <li class="displayAnswers"><a href="javascript:void(0);" onclick="return display_answer('6')">Display Answers</a></li>
    <li class="viewRanking"><a href="javascript:void(0);" onclick="return cal_ranking('6')" >View Ranking</a></li>
  </ul>
  <table width="100%" cellpadding="0" cellspacing="0" align="center">
    <tr valign="top" >
      <td align="left" width="33%" style="padding-left:30px">
	  	<form action="" method="post" id="logout_form_id" >
		<input type="hidden" name="campus_id" value="<?php echo $_SESSION['campus_id']; ?>
" />
		<input name="logout" type="submit" class="Button" value="Logout" />
		</form>
      </td>
	  <td align="left" width="33%" style="padding-left:41px">
	  	<form action="" method="post" id="reset_for_id">
		<input type="hidden" name="campus_id" value="<?php echo $_SESSION['campus_id']; ?>
" />
		<input name='reset' type="submit" class="Button" value="Reset All Rounds" />
		</form>
	  </td>
      <td align="right" width="33%" style="padding-right:60px">
	  	<form action="" method="post" id="lock_form_id">
		<input  type="hidden" name="campus_id" value="<?php echo $_SESSION['campus_id']; ?>
" />
	  	<input name="lock" type="submit" class="Button" value="Lock this game" />
		</form>
      </td>
    </tr>
  </table>
</div>
<form id="round_form_id" action="index.php?p=admin.questions" method="post" >
  <input type="hidden" name="round_id" id="round_id" />
  <input type="hidden" name="time" id="time" />
</form>

<form id="ranking_form_id" action="" method="post">
	<input type="hidden" name="rank_round_id" id="rank_round_id" />
	<input type="hidden" value="cal_ranking" name="ranking" id="ranking" />
</form>

<form id="answers_form_id" action="" method="post">
	<input type="hidden" name="score_round_id" id="score_round_id" />
	<input type="hidden" value="cal_score" name="scores" id="scores" />
</form>


<div id="time_div" style="display:none">
	<div onclick="$('#time_div').css('display','none');" style="float: right;" class="exit">x</div>
	<div>
		<table cellpadding="10" cellspacing="5" border="0" width="100%" align="left">
			<tr>
				<td align="center" colspan="2" valign="top">
					<p style="font:normal 13px Arial, Helvetica, sans-serif; text-align:center; text-decoration:none; padding:0 0 12px 0;">Please Enter Round Time(MM:SS).</p>
				</td>
			</tr>	
			<tr>
				<td align="center" colspan="2" valign="top">
					<input type="text" name="round_time" id="round_time" size="30" />
					<input type="hidden" name="start_round_id" id="start_round_id" value='' />
				</td>
			</tr>
			<tr>
			  <td align="right">&nbsp;</td>
			  <td height="5" align="left">&nbsp;</td>
		  </tr>
			<tr>
				<td align="right">
					<input type="button" name="Ok" value="Ok" class="Button" onclick="return round_time(1)"/>
				</td>
				<td align="left">
					<input type="button" name="cancel" value="Cancel" class="Button" onclick="return round_time(2)" />
				</td>		
			</tr>
		</table>
	</div>
</div>



<script>

function start_round(round_id, obj){
	
	$id('start_round_id').value = round_id;
	$id('time_div').style.display = '';
}

function round_time(id){
	//obj.onclick = '';
	//var time = window.prompt("Please Enter Round Time(MM:SS).");
	
	$id('time_div').style.display = 'none';
	if(id == 1){
		var time = $id('round_time').value;
	
		var t =  time.split(":");
		if(time.length != 5 || t.length != 2){
			alert("Please Enter Correct Time Format");
			//obj.onclick = function(){ return round_time(round_id, this); };
			return false;
		}
		if(parseInt(t[0])>60 || parseInt(t[1])>60){
			alert("Please Enter Correct Time");
			//obj.onclick = function(){ return round_time(round_id, this); };
			return false;
		}
	
		$id("round_id").value = $id('start_round_id').value;
		$id("time").value = time;
	
		$id("round_form_id").submit();
	}
}

function cal_ranking(round_id){
	
	$id('rank_round_id').value = round_id;
	$id('ranking_form_id').submit();
}

function display_answer(round_id){
	$id("score_round_id").value = round_id;
	$id('answers_form_id').submit();
}
</script>