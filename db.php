<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "jujura";

$con = mysql_connect($hostname, $username, $password) or die (mysql_error());
$db = mysql_select_db($dbname) or die (mysql_error());

?>
