<?php
########## MySql details (Replace with yours) #############
$username = "xxxx"; //mysql username
$password = "xxxx"; //mysql password
$hostname = "localhost"; //hostname
$databasename = 'demo'; //databasename

//connect to database
$connecDB = mysql_connect($hostname, $username, $password)or die('could not connect to database');
mysql_select_db($databasename,$connecDB);

?>