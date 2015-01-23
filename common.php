<?
   $dbhost = "localhost";
	$dbuser = "portalhk_akasva";
	//$dbpass = "akasva123";
	$dbpass = "mbarende";
	$dbname = "portalhk_akasva";
	
	$link1 = mysql_connect($dbhost,$dbuser,$dbpass) or mysql_error("Not able to connect with MySql Server");
	mysql_select_db($dbname,$link1) or mysql_error("Not able to connect with Database");
?>
