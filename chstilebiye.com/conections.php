<?php
$hostname = 'localhost';
$hostUser = 'root';
$hostPassword = "";
$dbName = 'chstapps'; 

// Establishing Connection To The DataBase Server

$con = mysqli_connect($hostname, $hostUser, $hostPassword) or die(mysql_error());
$db = mysqli_select_db($con,$dbName) or die (mysql_error());


?>