<?php
include_once "Persegi.php";
include_once "Kubus.php";

$persegi = new Persegi();
$persegi->calculateArea();
echo "<br>";
$kubus = new Kubus();
$kubus->calculateVolume(); 
$kubus->calculateArea(); 
echo "<br>";

?>
