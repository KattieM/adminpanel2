<?php
$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "adminpanel";

$mysqli = new MySqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "greske.log");
