<?php

	function myConnect() { // MYSQL Database connection //
		global $CONF;
		$GLOBALS["MYSQL_CONNECTION"] = @mysql_connect(
			$CONF["MYSQL_DATABASE_HOSTNAME"].':'.$CONF["MYSQL_DATABASE_PORT"], 
			$CONF["MYSQL_DATABASE_USERNAME"], 
			$CONF["MYSQL_DATABASE_PASSWORD"]
		) or die(mysql_error());
		if (!@mysql_select_db($CONF["MYSQL_DATABASE_DATABASENAME"])) die(mysql_error());
	}

	function myQ($content) {
		if (!isset($GLOBALS["MYSQL_CONNECTION"]) or !$GLOBALS["MYSQL_CONNECTION"]) myConnect();
		if($res = mysql_query($content)) {
			return $res;
		}
	}

	function myF($content) {
		if (!isset($GLOBALS["MYSQL_CONNECTION"]) or !$GLOBALS["MYSQL_CONNECTION"]) myConnect();
		return mysql_fetch_array($content);
	}
	
	function myFA($content) {
		if (!isset($GLOBALS["MYSQL_CONNECTION"]) or !$GLOBALS["MYSQL_CONNECTION"]) myConnect();
		return mysql_fetch_assoc($content);
	}
	
	function myFR($content) {
		if (!isset($GLOBALS["MYSQL_CONNECTION"]) or !$GLOBALS["MYSQL_CONNECTION"]) myConnect();
		return mysql_fetch_row($content);
	}

	function myNum($content) {
		if (!isset($GLOBALS["MYSQL_CONNECTION"]) or !$GLOBALS["MYSQL_CONNECTION"]) myConnect();
		return mysql_num_rows($content);
	}

	function myResult($content,$index) {
		if (!isset($GLOBALS["MYSQL_CONNECTION"]) or !$GLOBALS["MYSQL_CONNECTION"]) myConnect();
		if(myNum($content))
			return mysql_result($content,$index);
		else
			return false;
	}

	function myRealEscapeString($content) {
		if (!isset($GLOBALS["MYSQL_CONNECTION"]) or !$GLOBALS["MYSQL_CONNECTION"]) myConnect();
		return mysql_real_escape_string($content);
	}

	function myClose() {
		return @mysql_close();
	}

?>