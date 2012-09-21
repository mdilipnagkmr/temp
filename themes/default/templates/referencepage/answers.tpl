<div id="rounds">
  <p class="roundsHead">{{$smarty.session.campus_name}}</p>
  <ul class="roundBtns">
    <li><a href="#" {{if $round_id==1}}class="active"{{/if}}>Round 1</a></li>
    <li><a href="#" {{if $round_id==2}}class="active"{{/if}}>Round 2</a></li>
    <li><a href="#" {{if $round_id==3}}class="active"{{/if}}>Round 3</a></li>
    <li><a href="#" {{if $round_id==4}}class="active"{{/if}}>Round 4</a></li>
    <li><a href="#" {{if $round_id==5}}class="active"{{/if}}>Round 5</a></li>
    <li><a href="#" {{if $round_id==6}}class="active"{{/if}}>Round 6</a></li>
  </ul>
</div>
<div class="centerColumn">
<p class="headingTxt2">Round {{$round_id}}: Answers</p>
{{if $round_id==1}}
	{{include file='answers1.tpl' }}
{{elseif $round_id == 2}}
	{{include file='answers2.tpl' }}
{{elseif $round_id == 3}}
	{{include file='answers3.tpl' }}
{{elseif $round_id == 4}}
	{{include file='answers4.tpl' }}
{{elseif $round_id == 5}}
	{{include file='answers5.tpl' }}
{{else}}
	{{include file='answers6.tpl' }}
{{/if}}
</div>
<div class="actions">
  <div class="counter">
    <p class="time" id="display_time" > <img src="{{$themePath}}images/0.png" width="19" height="33" /> <img src="{{$themePath}}images/0.png" width="19" height="33" /> : <img src="{{$themePath}}images/0.png" width="19" height="33" /> <img src="{{$themePath}}images/0.png" width="19" height="33" /> </p>
    <p class="timeLeft">MINS LEFT</p>
  </div>
  <div class="middleButtons"> <br />
    <br />
    <br />
    <br />
  </div>
  <div class="bottomButtons"> <br />
    <form id ="back_form_id" action="index.php?p=admin.mainscreen" method="post" >
      <input type="hidden" value="back" name="action_type"  />
      <input type="hidden" value="{{$round_id}}" name="round_id" />
      <input name="" type="submit" class="Button" value="Back to Mainscreen" />
    </form>
    <br/>
    <form action="index.php?p=admin.logout" method="post" >
      <input name="" type="submit" class="Button" value="Logout" />
    </form>
  </div>
</div>
