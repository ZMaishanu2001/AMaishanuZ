<?php

$connect=mysql_connect("localhost","root", "");
	$select_database=mysql_select_db("pot", $connect) or die(mysql_error());
?>