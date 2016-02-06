<?php

$username="drummerm_mark";$password="kvny1193";$database="drummerm_test";
$db = mysql_connect("us8.siteground.us:3306", $username, $password) or die("Could not connect.");

if(!$db) 

	die("no db");

if(!mysql_select_db($database, $db))

 	die("No database selected.");
?>