<?php
include_once "KipasAngin.php";
include_once "Lampu.php";
include_once "Saklar.php";


$kipasAngin = new KipasAngin();

$lampu = new Lampu();

$saklarKipasAngin = new Saklar($kipasAngin);

$saklarLampu = new Saklar($lampu);

$saklarKipasAngin->ubah();
echo "<br>";
$saklarKipasAngin->ubah();
echo "<br>";
$saklarLampu->ubah();
echo "<br>";
$saklarLampu->ubah();
?>
