<?
function pk($data) {
	return urlencode(serialize($data));
}

function unpk($data) {
	return unserialize(urldecode($data));
}

function ckbool(&$var) { 
	if (!isset($var)) return false;
	elseif ((bool)$var) return true;
	return false;		
}

function send_mail($to, $subject, $body, $text_body = "", $from = "") {
	global $CONF;
	if(!$from)
		$from=$CONF["SITE_SYSTEM_EMAIL"];
/*	include_once("system/phpmailer/class.phpmailer.php");
	$mail = new phpmailer();
	$mail -> PluginDir = "system/phpmailer/" ;
	$mail->From     = $from;
	$mail->FromName = "Maxipromotions.com";
	$mail->Host     = "localhost";
	$mail->Mailer   = "smtp";
	$mail->Subject = $subject;
	$mail->Body    = $body;
	$mail->AltBody = $text_body;
	$mail->AddAddress($to);
	if (!$mail->Send()) {
		$msg = false;
	}
	else {
		$msg = true;
	}
	$mail->ClearAddresses();
	return $msg;*/
	
	/*require_once('system/classes/Snoopy.class.php');
	$snoopy = new Snoopy;
	$submit_url = "http://test.teamkollab.com/pavan/mevincom/send_mail_zyoulending.php";
	
	$submit_vars["to"] = $to;
	$submit_vars["subject"] = $subject;
	$submit_vars["body"] = $body;
	$submit_vars["text_body"] = $text_body;
	$submit_vars["from"] = $from;
	
	$snoopy->submit($submit_url,$submit_vars);*/
	
	
	require_once('system/classes/Snoopy.class.php');
	$snoopy = new Snoopy;
	$submit_url = "http://test.teamkollab.com/venu/send_mail.php";
	
	$submit_vars["to"] = $to;
	$submit_vars["subject"] = $subject;
	$submit_vars["body"] = $body;
	$submit_vars["text_body"] = $text_body;
	$submit_vars["from"] = $from;
	//print_r($submit_vars);
	$snoopy->submit($submit_url,$submit_vars);

}
	