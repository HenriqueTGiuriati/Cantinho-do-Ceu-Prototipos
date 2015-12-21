<?php

	require_once(dirname(__FILE__).'/connector/db_sqlite3.php');
	
	// SQLite
	//$dbtype = "SQLite3";
	//$res = new SQLite3(dirname(__FILE__)."/database.sqlite");

	// Mysql
	$dbtype = "MySQL";
	$res=mysql_connect("mysql26.infobiojr.com.br", "infobiojr24", "Ua5825b");
	mysql_select_db("infobiojr24");

?>