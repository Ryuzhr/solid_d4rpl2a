<?php
include_once "MySQL.php";
include_once "MongoDB.php";
include_once "DBMS.php";
include_once "DBMSConnection.php";

$mysql = new MySQL();

$mongodb = new MongoDB();

$dbms = new DBMS();

$dbmsConnection = new DBMSConnection();

$dbmsConnection->connect($mysql);
echo "<br>";

$dbmsConnection->connect($mongodb);
?>
