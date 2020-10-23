<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$dbusername = "root";
$dbPassword = "root";
$dbname = "dbmspblproject" ;

$conn = new mysqli($host, $dbusername, $dbPassword);
mysqli_select_db($dbname);

