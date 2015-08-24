<?php 
	$db = mysql_connect ("localhost","user1","12345");
	mysql_query("set names 'cp1251'");
	mysql_select_db ("dynamo", $db);
?>