<p class="headingTxt">Select the campus</p>
<div class="loginBox">
<ul class="campusSelect">
<form action="" method="post" id="form_id" name="form_id" onSubmit="return validate()">
{{foreach from=$campus item=campus name=campuses}}
<li>
<label class="campusName">{{$campus.campus_name}}</label>
<input type='hidden' value = '{{$campus.campus_id}}'>
<input name="campus" type="radio" value="" class="radioBtnRight" onclick="campus_selected('{{$campus.campus_id}}')" />
</li>
{{/foreach}}
<li>&nbsp;</li>

<li class="loginButton">  
<input type="hidden" value="" id="selected_campus" name="selected_campus">               
<input name="" type="Submit" class="Button" value="Submit" />
</li>
</form>

</ul>
<br class="spacer" />
</div>

<script>

{{if isset($msg)}}
	alert('{{$msg}}');
{{/if}}

function campus_selected(campus_id) {
	//alert(campus_id);
	$id('selected_campus').value = campus_id;
}

function validate() {
	
	if($id('selected_campus').value == ''){
		alert("Please Select Campus");
		return false;
	}
}

</script>