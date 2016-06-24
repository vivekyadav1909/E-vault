<?php

$hostname = "localhost";
$username = "root";
$password = "";

$dbhandle = mysql_connect($hostname, $username, $password)
        or die("Unable to connect to MySQL");

$selected = mysql_select_db("file_upload", $dbhandle)
        or die("Could not select database");

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
 