<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="facemash";

$link = mysql_connect($dbhost, $dbuser, $dbpass); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname); 
?>
