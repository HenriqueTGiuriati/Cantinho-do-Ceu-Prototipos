<?php

	require_once(dirname(__FILE__).'/connector/db_mysqli.php');
	
	// SQLite
	//$dbtype = "SQLite3";
	//$res = new SQLite3(dirname(__FILE__)."/database.sqlite");

	// Mysql
	$dbtype = "MySQL";
	$res=mysql_connect("localhost", "root", "");
	mysql_select_db("database");


?>