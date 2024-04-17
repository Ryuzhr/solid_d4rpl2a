<?php
include_once "PrinterEntryLevel.php";
include_once "PrinterMidRange.php";
include_once "PrinterFlagship.php";

$printerflagship = new PrinterFlagship();
$printerflagship->cetakKertas();
$printerflagship->terimaFax();
$printerflagship->scanKertas();
echo"<br>";
echo "<br>";
$printermidrange = new PrinterMidRange();
$printermidrange->cetakKertas();
$printermidrange->scanKertas();
echo"<br>";
echo "<br>";
$printerentrylevel = new PrinterEntryLevel();
$printerentrylevel->cetakKertas();