<?php
include_once "MobilListrik.php";
include_once "Mobil.php";

$mobil = new Mobil;
$mobillistrik = new MobilListrik;

$mobil->menggunakanBBM();
echo "<br>";
$mobillistrik->menggunakanBaterai();