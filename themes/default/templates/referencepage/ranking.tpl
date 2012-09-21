<div id="rounds">
  <p class="roundsHead">{{$smarty.session.campus_name}}</p>
<ul class="roundBtns">
<li><a href="#" {{if $smarty.session.round_id==1}}class="active"{{/if}}>Round 1</a></li>
<li><a href="#" {{if $smarty.session.round_id==2}}class="active"{{/if}}>Round 2</a></li>
<li><a href="#" {{if $smarty.session.round_id==3}}class="active"{{/if}}>Round 3</a></li>
<li><a href="#" {{if $smarty.session.round_id==4}}class="active"{{/if}}>Round 4</a></li>
<li><a href="#" {{if $smarty.session.round_id==5}}class="active"{{/if}}>Round 5</a></li>
<li><a href="#" {{if $smarty.session.round_id==6}}class="active"{{/if}}>Round 6</a></li>
</ul>
</div>

<div class="centerColumn">
<p class="headingTxt2">Cumulative Results:</p>
<div class="rankingDiv">
<div id="rankandTeam">
<ul class="ranks">
<li class="head">Ranks</li>
{{foreach from=$teams1 item=team name=rank}}
<li>{{$team.rank}}</li>
{{/foreach}}
</ul>

<ul class="teams">
<li class="head">Team</li>
{{foreach from=$teams1 item=team name=rank}}
<li>{{$team.team_name}}</li>
{{/foreach}}
</ul>


<ul class="ranks">
<li class="head">Ranks</li>
{{foreach from=$teams2 item=team name=rank}}
<li>{{$team.rank}}</li>
{{/foreach}}
{{if $total_teams%2 == 1}}
<li>&nbsp;</li>
{{/if}}
</ul>

<ul class="noMar">
<li class="head">Team</li>
{{foreach from=$teams2 item=team name=rank}}
<li>{{$team.team_name}}</li>
{{/foreach}}
{{if $total_teams%2 == 1}}
<li>&nbsp;</li>
{{/if}}
</ul>
</div>
</div>
</div>

<div class="actions">
<br class="spacer" />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

  <div class="bottomButtons">

<br/>
<form action="index.php?p=admin.mainscreen" method="post" >
<input name="back_to_mainscreen" type="submit" class="Button" value="Back to MainScreen"  />
</form>
<br/>
 <form action="index.php?p=admin.logout" method="post" >
<input name="" type="submit" class="Button" value="Logout" />
</form>
</div>
</div>