<?php
//database_connection.php
include('../inc/config.php');
$host 	= $GLOBALS['servername'];
$dbname = $GLOBALS['db'];
$user 	= $GLOBALS['username'];
$pass 	= $GLOBALS['password'];
$url 	= $GLOBALS['url'];
$conn 	= $GLOBALS['conn'];
session_start();

?>