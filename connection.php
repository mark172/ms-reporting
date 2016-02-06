<?php
$db = mysql_connect("68.178.143.155", "QDUP02992", "TcnqbP4msdAp7V3J!") or die("Could not connect.");

if(!$db) 

	die("no db");

if(!mysql_select_db("QDUP02992",$db))

 	die("No database selected.");
?>