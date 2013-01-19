<?php
//database connection parameters declaration
$dbhost = 'localhost';// change as yours
$dbname = 'retinacms';
$dbuser = 'root';// change as yours
$dbpass = 'password';// change as yours

$appname = "RetinaCMS"; //to pull dynamically web application name
$baseUrl = $_SERVER['HTTP_HOST'];
//connection
mysql_connect($dbhost, $dbuser, $dbpass) or die (mysql_error());
mysql_select_db($dbname) or die (mysql_error());

?>
