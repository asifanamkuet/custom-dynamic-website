<?php 
$GLOBALS['servername'] 	= 'localhost';
$GLOBALS['username'] 	= 'root';
$GLOBALS['password'] 	= '';
$GLOBALS['db'] 			= 'bizcord';
$GLOBALS['url'] 		= 'http://localhost/bluefin/';
$GLOBALS['conn']		= $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['db']);
require('function.php');
?>
