<?php

// MYSQL-RELATED CONFIGURATIONS ///////////////////////////////////////////////////////
	$CONF["MYSQL_DATABASE_USERNAME"] = "root";
	$CONF["MYSQL_DATABASE_PASSWORD"] = "";
	$CONF["MYSQL_DATABASE_HOSTNAME"] = "localhost";
	$CONF["MYSQL_DATABASE_DATABASENAME"] = "dbname";

// SYSTEM ERROR MESSAGES //////////////////////////////////////////////////////////////
	$CONF["404_NOT_FOUND_ERROR_MESSAGE"] =					"404, Page not found";
	$CONF["NO_ACCESS_MESSAGE"] =							"Sorry. You are not allowed to access this page";

// THEMES CONFIGURATIONS //////////////////////////////////////////////////////////////
	$CONF["THEME"] = "default";
	$CONF["META_DESCRIPTION"] = "Create worlds";
	$CONF["META_KEYWORDS"] = "Communities, Community, Software, PHP, Script";

// GENERAL SITE CONFIGURATIONS ////////////////////////////////////////////////////////
	$CONF["SITE_NAME"] = "sitename";
	$CONF["SITE_URL"] = "http://localhost/projectname/";
	$CONF["SITE_SYSTEM_EMAIL"] = "donotreply@domain.com";
	$CONF["SITE_ADMIN_EMAIL"] = "contact@gmail.com";
	$CONF["SITE_CONTACT_US"] = " ";
	$CONF["USERS_USERNAME_MIN_LEN"] = 2;
	$CONF["USERS_USERNAME_MAX_LEN"] = 9;
	$CONF["USERS_PASSWORD_MIN_LEN"] = 6;

// REGULAR EXPRESSIONS ////////////////////////////////////////////////////////////////
	$CONF["REGEXP_EMAIL"] =									"/^[A-z0-9][\w.-]*@[A-z0-9][\w\-\.]+\.[A-z0-9]{2,6}$/";
	$CONF["REGEXP_USERNAME"] =								"/^[\w\d_-]+$/";

// PATH FROM ROOT  ////////////////////////////////////////////////////////
	$CONF["PATH_FROM_ROOT"] = "localhost/newproject";
?>